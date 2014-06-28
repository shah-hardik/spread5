<div class="col-lg-12" >
    <form name="Form1" action="" method="post">
        <div class="login " style="box-shadow:0 2px 7px rgba(0, 0, 0, 0.4)" >
            <?php
            if ($error != '') {
                $set_cookie = 0;
                ?>
                <div class="error"><img src="<?php print _MEDIA_URL ?>img/login-erroe.png" width="28" height="26" alt=" " /><strong>ERROR:</strong> The password and username you entered 
                    is incorrect. </div>
            <?php } ?>
            <div class="logo" style="color:white;font-weight:bold;">
 
 
            </div>
            <div class="fields" id="new_login" style="">
                <input type="text" name="email" id="email" placeholder="Email" />
                <input type="password" name="password" id="password" placeholder="Password" />
               
                <div>
                    <input type="submit" name="sbt_btn" id="sbt_btn" value="Login" class="login" style="" />
                   
                    
                </div>
                    <div class="col-lg-offset-6 col-lg-10">
               <a href="<?php print _U ?>registration"><i class="glyphicon glyphicon-asterisk" title="REGISTRATION"></i>
                REGISTRATION</a></div>
                <div style="clear:both">&nbsp;</div>
            </div>
            <div class="fields" id="old_login" style="<?php
            if ($set_cookie == 0) {
                echo "display:none";
            }
            ?>">
                 <div style="clear:both">&nbsp;</div>
            </div>
        </div>
    </form>
</div>

<div style="background-color: #86B414;height:18px;position:fixed;bottom:0px;width:100%">

</div>


<style type="text/css">
    /*    body{
                    background:url(<?php print _MEDIA_URL ?>img/wild_oliva_light.png);
            background-image: url(<?php print _MEDIA_URL ?>img/login_images/<?php print $img ?>);
            background-repeat: no-repeat;
            background-position: center 50px;
            background-color: white;
        }
        .login{
            opacity:0.9;
            
        }*/
</style>
