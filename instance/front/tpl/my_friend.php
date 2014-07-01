

<div class="listAffiliates actionItem">
    <div  class="col-md-12">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <div style="float:left;padding-top:8px"><b>All Friend List</b></div> 

                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <form>
                    <?php
                    $cr = 1;
                    if (!empty($getFriend)):
                        ?>
                        <table class="table table-hover" id="table" >
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th align="left"></th>
                                   


                                </tr>
                            </thead>
                            <tbody id="List">
                                <?php foreach ($getFriend as $each_friend): ?>

                                    <tr id="<?php print $each_friend['id']; ?>">
                                        <td width="5%"></td>
                                        <td float="left" width="5%"><?php print $cr; ?></td>
                                        <?php $senderdetail = qs("select * from registration where id = '{$each_friend['sender_id']}'");
                                         ?>
                                        <td width="15px"><strong><a href="<?php print _U;?>friend_profile/<?php print $senderdetail['id']; ?>" style="text-decoration: none;">
                                        <?php print $senderdetail['fname']; ?>  <?php print $senderdetail['lname']; ?></a></strong></br></br>
                                            <?php print $senderdetail['city']; ?></br>
                                            <?php print $senderdetail['phone']; ?></strong>
                                        </td>

                                                  <!--  <td> <a href="<?php print _U;
                                            ?>my_friend/<?php print $each_friend['id']; ?>" style="text-decoration: none;"><span class="btn btn-small btn-success" >Accept</span></a>&nbsp;
                     <a href="<?php print _U;
                                            ?>view_request/<?php print $each_friend['id']; ?>" style="text-decoration: none;"><span class="btn btn-small btn-danger" >Decline</span></a>&nbsp;
                     
                       </td>-->
                                    </tr>
                                    <?php $cr++; ?>    
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    <?php else: ?>
                        <div>No Friend Found</div>
                    <?php endif; ?>
                </form>
            </div>

        </div>
    </div>
</div>