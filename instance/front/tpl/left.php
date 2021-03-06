
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="navbar-header">
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php l('home') ?>" style="color:#00ffff">Task Management</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="<?php l('task') ?>">Task </a></li>
<!--            <li><a href="<?php l('fastway_couriers') ?>">Fastway Couriers</a></li>-->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Friends<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php l('list_user') ?>">Find Friend</a></li>
      <!--              <li><a href="<?php l('fastway_keys') ?>">Fastway Courier API Keys</a></li>-->
                </ul>
            </li>
            <li><a href="<?php l('gallery') ?>">Gallery </a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Spread5-CRM<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php l('add_customer') ?>">Add Customer</a></li>
                    <li><a href="<?php l('appointment') ?>">Appointment</a></li>
                    <li><a href="<?php l('appointment_list') ?>">Appointment List</a></li>
                </ul>
            </li>
             <li><a href="<?php l('userCheckIn') ?>">User Time Logs </a></li>
        </ul>
       
        <?php $admin =($_SESSION['user']); ?>
      
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if ($admin != ''): ?><?php print $admin['username'] ?><?php endif; ?>&nbsp;<i class="fa fa-user" >&nbsp;</i><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  
                </ul>
            </li>
              <li><a href="<?php print _U ?>?logout=1"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
