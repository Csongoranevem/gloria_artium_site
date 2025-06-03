<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Gloria Artium</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php get_header(); ?>

<body>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<main>
    <style>
        <?php include 'style.css'; ?>
    </style>
    <div class="container">
        <div class="KozepCim">
            <h1>GLORIA ARTIUM</h1>
            <h3 class="TransParent"><i>,,pactum serva"</i></h3>
        </div>
        <div class="Kartyak">
            <div class="Kartya SzelsoKartya">
                <img src="<?php echo get_template_directory_uri(); ?>/Képek/FestmenyekKep.png" alt="" class="KartyaIMG">
                <p class="KartyaNAV">FESTMÉNYEK</p>
            </div>
            <div class="Kartya" id="SzobraszID">
                <img src="<?php echo get_template_directory_uri(); ?>/Képek/SzobraszatKep.png" alt="" class="KartyaIMG">
                <p class="KartyaNAV">SZOBRÁSZAT</p>
            </div>
            <div class="Kartya" id="ZeneID">
                <img src="<?php echo get_template_directory_uri(); ?>/Képek/ZeneKep.png" alt="" class="KartyaIMG">
                <p class="KartyaNAV">ZENE</p>
            </div>
            <div class="Kartya SzelsoKartya">
                <img src="<?php echo get_template_directory_uri(); ?>/Képek/IrodalomKep.png" alt="" class="KartyaIMG">
                <p class="KartyaNAV">IRODALOM</p>
            </div>
        </div>        
    </div>
    </main>
