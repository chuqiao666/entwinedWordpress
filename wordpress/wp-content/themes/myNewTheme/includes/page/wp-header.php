<!DOCTYPE html>
<html class="no-js">

<head>
    <title><?php wp_title('|', true, 'right');?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
    <!-- <link rel="stylesheet" href="../../css/bootstrap.min.css"> -->
</head>

<body <?php body_class(); ?>>
    <header >
        <div class=" container container-header">
            <div class="row top-nav  ">
                <div class="col-3 entwined-logo">
                    <img class="img-responsive" src="<?php echo get_field('website_logo','options');?>"
                        alt="entwined logo">
                </div>
                <div class="col-6 header-nav">

                    <?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>

                </div>
                <div class="col-3 freeQuoteBtn">
                    <button><span>Free Quote</span></button>

                </div>
            </div>
        </div>


    </header>