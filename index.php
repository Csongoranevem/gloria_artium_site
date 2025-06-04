<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Gloria Artium</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php get_header(); ?>

<body>
<main>
<?php get_header(); ?>

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

    <div class="mainDivs2">    
        <h1 id="RolunkH"><hr class="rolunkHR">RÓLUNK<hr class="rolunkHR"></h1>
        <p class="rolunkLeiras">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, quod natus. Qui dolores modi dolorum officia quam, quos eos sunt voluptatibus cumque eveniet, ab tempora architecto. Voluptatem impedit autem in.
        Fugiat ipsam adipisci voluptas modi consectetur eos consequuntur corporis. Quidem libero harum eos sed ullam repellat quibusdam veniam rem sit minus aut vel porro, odit quia error pariatur animi ea?</p>
        <section class="blog-widget">
    <h2 id="LBh">Latest Blog Posts</h2>
    <div class="blog-widget-items">
        <?php
            $recent_posts = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 3
                ]);
 
        if ($recent_posts->have_posts()):
            while ($recent_posts->have_posts()): $recent_posts->the_post(); ?>
                <div class="blog-widget-item">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                    </a>
                </div>
        <?php endwhile; wp_reset_postdata();
        else: ?>
                <p>No blog posts found.</p>
        <?php endif; ?>
    </div>
            </section>  
        <hr class="mainHR">
        
    </div>
 
    <div class="mainDivs">
<!--festmények slide-->
        <div class="slider-container">
            <h1 class="alCim">FESTMÉNYEK</h1>
            <p class="rolunkLeiras">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry...
            </p>
            <div class="slider">
               
                <div class="slide-images">
                <img src="<?php echo get_template_directory_uri(); ?>/Képek/Lapozos0.jfif" class="slide-img-small" alt="...">
                <img src="<?php echo get_template_directory_uri(); ?>/Képek/Lapozos1.jfif" class="slide-img-main" alt="...">
                <img src="<?php echo get_template_directory_uri(); ?>/Képek/Lapozos2.jfif" class="slide-img-small" alt="...">
                </div>
               
        </div>
 
        <button class="nav-left" onclick="moveSlide(-1)"><img src="<?php echo get_template_directory_uri(); ?>/Képek/map-arrow-right-l463l42udx6p1h5wuh64s.webp" class="slide-img-small" alt="..."></button>
        <button class="nav-right" onclick="moveSlide(1)"><img src="<?php echo get_template_directory_uri(); ?>/Képek/map-arrow-right-l463l42udx6p1h5wuh64s.webp" class="slide-img-small" alt="..."></button>
 
        <p id="caption">MEMENTO MORI</p>
    </div>
</div>
 
</main>
<?php get_footer(); ?>
 
<script>
 
let currentIndex = 1;
 
const images = [
    {
        name: "Memento Mori",
        image: "<?php echo get_template_directory_uri(); ?>/Képek/Lapozos0.jfif"
    },
    {
        name: "Memento Mora",
        image: "<?php echo get_template_directory_uri(); ?>/Képek/Lapozos1.jfif"
    },
    {
        name: "Valami Más",
        image: "<?php echo get_template_directory_uri(); ?>/Képek/Lapozos2.jfif"
    }
];
 
function moveSlide(step) {
    currentIndex = (currentIndex + step + images.length) % images.length;
 
    const prev = (currentIndex - 1 + images.length) % images.length;
    const next = (currentIndex + 1) % images.length;
 
    const slideImages = document.querySelector(".slide-images");
    slideImages.innerHTML = `
        <img src="${images[prev].image}" class="slide-img-small" alt="">
        <img src="${images[currentIndex].image}" class="slide-img-main" alt="">
        <img src="${images[next].image}" class="slide-img-small" alt="">
    `;
 
    document.getElementById("caption").innerHTML = images[currentIndex].name;
}
</script>
    </main>
<?php get_footer() ?>