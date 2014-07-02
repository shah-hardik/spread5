

<div class="listAffiliates actionItem">
    <div  class="col-md-12">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <div style="float:left;padding-top:8px"><b>List of User </b></div> 
                <div style="float:right"> 

                    <span style="float:left;font-size: 16px;">Search User</span>&nbsp;&nbsp;
                    <span style="float:right;"><input onclick="doLoadFilter();" type="text" id="search" class="form-control"></span>
                </div> 
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <?php
                $cr = 1;
                if (!empty($user)):
                    ?>
                    <table class="table table-hover" id="table" >
                        <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>Username</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="List">
                            <?php foreach ($user as $user_data): ?>

                                <tr id="<?php print $user_data['id']; ?>">
                                    <td></td>
                                    <td><?php print $cr; ?></td>
                                    <td><a href="<?php print _U;
					?>friend_profile/<?php print $user_data['id']; ?>" style="text-decoration: none;"><?php print $user_data['username']; ?></a>&nbsp;
				    </td>
                                    <td><a href="<?php print _U;
					?>friend_profile/<?php print $user_data['id']; ?>" style="text-decoration: none;"><?php print $user_data['fname']; ?></a>&nbsp;
				    </td>
                                    <td><a href="<?php print _U;
					?>friend_profile/<?php print $user_data['id']; ?>" style="text-decoration: none;"><?php print $user_data['lname']; ?></a>&nbsp;
				    </td>
                                    <td><?php print $user_data['address']; ?></td>
                                    <td><?php print $user_data['city']; ?></td>
                                    <td><?php print $user_data['phone']; ?></td>
                                    <td><?php print $user_data['email']; ?></td>
                                    <td>
                                        
                                        <a href="javascript:void(0);" onclick="return DeleteUser('list_user/<?php print $user_data['id']; ?>')"><i class="glyphicon glyphicon-trash" title="Delete"></i></a>

                                    </td>
                                    <?php $status = checkStatus($sender_id['id'],$user_data['id']); ?>
                                    <td> <a href="<?php print _U;
					?>friendrequest/<?php print $user_data['id']; ?>" style="text-decoration: none;">
                                            <?php if($status['status'] == 'Pending'):?>
                                            <span class="label label-warning" title="Pending Request" data-toggle="tooltip" >Sent</span> 
                                          
                                             <?php elseif($status['status'] == 1):?>
                                               <span class="label label-success" title="Friend Request Accepted" data-toggle="tooltip" >Friends</span> 
                                            
                                        <?php else:?>
                                                 <span class="label label-info" title="Send Friend Request" data-toggle="tooltip" >Send FriendRequest</span>
                                       
                                         <?php endif;?>
                                        
                                        </a>
				   
                                    </td>
                                </tr>
                                <?php $cr++; ?>    
                            <?php endforeach; ?>


                        </tbody>
                    </table>
                <?php else: ?>
                    <div>No User available</div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>