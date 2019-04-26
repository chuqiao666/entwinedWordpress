<?php

$bannerImgs = get_sub_field('banner_images_repeater');
$bannerText = get_sub_field('banner_text');
?>
<div class="banner_images container-fluid">
 <div class="row banner_image" >
<?php
for($i=0; $i < count($bannerImgs); $i++){ ?>

        <img class="col-6" src="<?php echo $bannerImgs[$i]['banner_image']['url'];?>">
       
<?php } ?>
<img class="col-6" src="<?php echo $bannerImgs[0]['banner_image']['url'];?>">

</div>

<div class="pCon">


<p><?php echo $bannerText ?></p></div> 
</div>

