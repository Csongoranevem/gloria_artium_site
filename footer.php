<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php wp_title(); ?></title>
    <?php wp_footer(); ?>
</head>
<body <?php body_class(); ?>>

<footer>
    <div class="FooterContainer">
        <div class="FooterFlex">
            <div class="FooterBal">
                <div>
                    <h1>GLORIA ARTIUM</h1>
                    <h3 class="TransParent">,,pactum serva"</h3>
                </div>
                <div id="LogoFlex">
                    <img src="<?php echo get_template_directory_uri(); ?>/Képek/FacebookLogo.png" alt="" class="LogoKepClass">
                    <img src="<?php echo get_template_directory_uri(); ?>/Képek/InstaLogo.png" alt="" class="LogoKepClass">
                    <img src="<?php echo get_template_directory_uri(); ?>/Képek/XLogo.png" alt="" class="LogoKepClass">
                    <img src="<?php echo get_template_directory_uri(); ?>/Képek/TiktokLogo.png" alt="" class="LogoKepClass">
                </div>
            </div>
            <div class="FooterKozep">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                <p>
                    Lorem Ipsum
                </p>
            </div>
            <div class="FooterJobb">
                <h1>NAVIGÁCIÓ</h1>
                <ul class="FooterNavUL">
                    <li><a href="" class="FooterAnchorClass">Főoldal</a></li>
                    <li><a href="" class="FooterAnchorClass">Rólunk</a></li>
                    <li><a href="" class="FooterAnchorClass">Festmények</a></li>
                    <li><a href="" class="FooterAnchorClass">Szobrászat</a></li>
                    <li><a href="" class="FooterAnchorClass">Zene</a></li>
                    <li><a href="" class="FooterAnchorClass">Irodalom</a></li>
                    <li><a href="" class="FooterAnchorClass">Kapcsolat</a></li>
                    <li><a href="" class="FooterAnchorClass">GYIK</a></li>
                </ul>
            </div>
        </div>
        <div class="FooterAlso">
            <p>copyright  @ 2025 - 2028. FCR kft.</p>
        </div>
    </div>
</footer>