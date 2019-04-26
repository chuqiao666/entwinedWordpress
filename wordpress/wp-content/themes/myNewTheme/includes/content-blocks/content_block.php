<?php
$sub_heading = get_sub_field('content_body')['content_heading'];
$body_heading = get_sub_field('content_body')['content_subheading'];


?>
<div class="content_block partner">
    <h2> <?php echo $sub_heading; ?> </h2>
    <h3> <?php echo $body_heading; ?> </h3>
</div>