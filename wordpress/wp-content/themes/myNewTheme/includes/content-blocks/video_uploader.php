<?php

$video = get_sub_field('video');
$video_caption = get_sub_field('video_caption');
$video_description = get_sub_field('video_description');
// print_r($video['url']);
// echo $video_caption;
// echo $video_description;
?>
<div class="video_uploader">
    <h2><?php echo $video_caption ?></h2>
    <h3><?php echo $video_description ?></h3>
    <video  height="360" autoplay loop muted controls>
        <source src=" <?php echo  $video['url'] ?> " type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <iframe src="https://player.vimeo.com/video/266636795" width="640" height="360" frameborder="0" allowfullscreen></iframe>

</div>