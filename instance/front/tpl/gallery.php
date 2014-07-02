<style type="text/css">
.enlarge:hover {
width:310px;
height:220px;
}
</style>


<div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading"><strong>Upload Photo</strong></div>
        <div class="panel-body">
            <form method="post" action="<?php l('gallery') ?>" class="form-horizontal" role="form" enctype="multipart/form-data">


                <div class="form-group">
                    <label  class="col-lg-3 col-md-2 control-label">Photo Upload</label>
                    <div class="col-lg-6">
                        <input type="file"  name="image" id="image" value="" placeholder="">
<!--                            <img src="<?php print _MEDIA_URL . "img/" . $image; ?>" width="10%" />-->
                        <input type="hidden" name="org_image" value="<?php print $image ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-10">
                        <input type="hidden" name="gallery_id"  value="">
                        <input type="submit" class="btn btn-primary" value="Upload">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading"><strong>Photo Gallery</strong></div>
        <div class="panel-body">
            <?php
            $cr = 1;
            if (!empty($images)):
                ?>

                <?php foreach ($images as $each_image): ?>
                    <div class="col-lg-3">

                        <div style="height:870px;width:1360px;"><img class="enlarge" src="<?php print _MEDIA_URL . "img/" . $each_image['photo']; ?>" width="20%" height="20%" />
                         </div> 
                    </div>
                    <?php $cr++; ?>    
                <?php endforeach; ?>
            <?php else: ?>
                <div>No Photos Found</div>
            <?php endif; ?>

        </div>
    </div>
</div>