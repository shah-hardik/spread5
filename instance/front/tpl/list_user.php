
<div class="listAffiliates actionItem">
  <!-- <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="" style="color:#86B414">User Management</a>
        </div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav">

                <li><a href="<?php l('userCheckIn') ?>">User Time Logs</a></li>
                
                   
            </ul>
</div>
-->
</div>

<div class="listAffiliates actionItem">
    <div  class="col-md-12">
	<div class="panel panel-default ">
	    <div class="panel-heading">
		<div style="float:left;padding-top:8px"><b>List of User </b></div> 
		<div style="float:right">    
		    
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

    			</tr>
    		    </thead>
    		    <tbody id="List">
                        <?php foreach ($user as $user_data): ?>
			   
				<tr id="<?php print $user_data['id']; ?>">
				    <td></td>
				    <td><?php print $cr; ?></td>
				    <td><?php print $user_data['username'];  ?></td>
				    <td><?php print $user_data['fname']; ; ?></td>
				    <td><?php print $user_data['lname'];  ?></td>
                                    <td><?php print $user_data['address'];  ?></td>
                                    <td><?php print $user_data['city'];  ?></td>
                                    <td><?php print $user_data['phone'];  ?></td>
                                    <td><?php print $user_data['email'];  ?></td>
				    <td>
                                        <a href="<?php print _U ?>edit_user/<?php print $user_data['id']; ?>"><i class="glyphicon glyphicon-edit" title="Edit"></i></a>
			
					<a href="javascript:void(0);" onclick="return DeleteUser('list_user/<?php print $user_data['id']; ?>')"><i class="glyphicon glyphicon-trash" title="Delete"></i></a>
                              
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