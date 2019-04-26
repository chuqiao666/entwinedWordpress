<?php
$logos = get_sub_field('logos');//repeater
$logo_class = get_sub_field('logo_class');
?>
<!-- one_horizontal_line html -->
<?php if($logo_class == 'one_horizontal_line'){  ?>
<div id="logo_horizontal_lines" class="logo_uploader <?php echo $logo_class ?> ">

<!-- logos <=6 -->
    <?php if(count($logos)<=6){
for($i=0; $i < count($logos); $i++){ ?>

    <img class="col-2" height="60px" src="<?php echo $logos[$i]['logo']['url'];?>">

    <?php } ?>
    <?php } ?>
<!-- logos <=6 end  -->
<!-- logos > 6 -->

<?php 
    if(count($logos)>6){
        for($i = 0; $i< ceil(count($logos)/10); $i++){
            echo "<div class='row' "; if($i == 0){echo 'style= "display:block"' ;}else{ echo 'style ="display:none"';} ; echo ">";
            if($i == floor(count($logos)/10)){
                $k = count($logos) % 10;
            }else{
                $k = 10;
            }
            for($j = 0; $j < $k; $j++)
            {
                echo "<img class='col-1' height='60px' src=". $logos[($i*10+$j)]['logo']['url'] .'">';
            }
            echo "</div>";
        }
    }
?>
<!-- logos > 6 end-->
</div>

<?php } ?>

<!-- one_vertical_line html -->

<?php if($logo_class == 'one_vertical_line'){ ?>
    <div class="one_vertical_line">

    <?php
    for($i = 0; $i < count($logos); $i++){
    ?>
        <div class="one_block">
            <img class="hvr-bounce-in" src="<?php echo $logos[$i]['logo']['url'] ?>" alt="">
            <span></span>
            <div class="textCon">
                <h4><?php echo $logos[$i]['logo_heading'] ?></h4>
                <i><?php echo $logos[$i]['logo_excerpt'] ?></i>
            </div>
        </div>

    <?php } ?>
    </div>

<?php } ?>
