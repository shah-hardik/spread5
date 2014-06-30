

<div class="listAffiliates actionItem">
    <div  class="col-md-12">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <div style="float:left;padding-top:8px"><b>Friend Requests</b></div> 
                
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <?php
                $cr = 1;
                if (!empty($request)):
                    ?>
                    <table class="table table-hover" id="table" >
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="List">
                            <?php foreach ($request as $user_data): ?>

                                <tr id="<?php print $user_data['id']; ?>">
                                    <td></td>
                                    <td><?php print $cr; ?></td>
                                    <?php $senderdetail = qs("select * from registration where id = '{$user_data['sender_id']}'");
                                    ?>
                                    <td><strong><?php print $receive_id['fname']; ?>  <?php print $receive_id['lname']; ?></strong>
                                    You have Friend request from 
                                    <strong><?php print $senderdetail['fname']; ?>  <?php print $senderdetail['lname']; ?></strong>
                                    </td>
                            
                                    <td> <a href="" style="text-decoration: none;"><span class="btn btn-small btn-success" >Accept</span></a>&nbsp;
				  <a href="" style="text-decoration: none;"><span class="btn btn-small btn-danger">Decline</span></a>
				   </td>
                                </tr>
                                <?php $cr++; ?>    
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                <?php else: ?>
                    <div>No Request Found</div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>