

<div class="listAffiliates actionItem">
    <div  class="col-md-12">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <div style="float:left;padding-top:8px"><b>Full Profile</b></div> 

                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <form>
                    <?php
                    $cr = 1;
                    if (!empty($profiledetail)):
                        ?>
                        <table class="table table-hover" id="table" >
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="10%"></td>
                                    <td>
                                        <strong><span style="">User Name </span></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span><?php print $profiledetail['fname']; ?>  <?php print $profiledetail['lname']; ?></span>
                                        </br></br></br>
                                        
                                        <strong><span style="">From </span></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="padding-left: 35px;"><?php print $profiledetail['address']; ?>  -  <?php print $profiledetail['city']; ?></span>
                                  
                                        </br></br></br>
                                         <strong><span >Contact </span></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="padding-left: 19px;"><?php print $profiledetail['email']; ?> </br></span>
                                        </br>  <span style="padding-left: 98px;">    <?php print $profiledetail['phone']; ?></span>
                                 
                                        
                                    </td>
                                    <td></td>
                                </tr>
                               

                            </tbody>
                        </table>
                    <?php else: ?>
                        <div>No Detail Found</div>
                    <?php endif; ?>
                </form>
            </div>

        </div>
    </div>
</div>