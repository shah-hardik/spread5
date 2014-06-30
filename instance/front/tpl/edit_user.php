<div class="addAffiliates actionItem">
    <div class="panel panel-default">
        <div class="panel-heading">Add New User</div>
        <div class="panel-body">
            <form method="post" action="" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputUsername" class="col-lg-2 control-label">User full name</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="username" id="username" value="<?php print $each_data['username']; ?>" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="password" id="password" value="<?php print $each_data['password']; ?>" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputconfirmpassword" class="col-lg-2 control-label">Confirm Password</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="conform_password" id="conform_password" value="<?php print $each_data['conform_password']; ?>" placeholder="Conform password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputfirstname" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fname" id="fname" value="<?php print $each_data['fname']; ?>" placeholder="First Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputlastname" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="lname" id="lname" value="<?php print $each_data['lname']; ?>" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputaddress" class="col-lg-2 control-label">Address</label>
                    <div class="col-lg-5">
                        <textarea type="text" class="form-control" name="address" id="address" value="" placeholder="Address" required><?php print $each_data['address']; ?></textarea>  
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputcity" class="col-lg-2 control-label">City</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="city" id="city" value="<?php print $each_data['city']; ?>" placeholder="City" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputphone" class="col-lg-2 control-label">Phone </label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="phone" id="phone" value="<?php print $each_data['phone']; ?>" placeholder="Phone" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputemail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="email" id="email" value="<?php print $each_data['email']; ?>" placeholder="Email" required>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        
                        <button type="submit" name="sbt_btn" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>