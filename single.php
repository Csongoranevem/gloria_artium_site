<?php
/*
Template Name: Book Blog Layout
*/

get_header();
?>

<style>
.book-container {
    background: url('<?php echo get_template_directory_uri(); ?>/keepek/hatter.PNG') no-repeat center center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    padding: 2rem;
    position: relative;
    overflow: hidden;
}

.book-content {
    display: flex;
    max-width: 1000px;
    width: 90%;
    max-height: 700px;
    background-image: url('<?php echo get_template_directory_uri(); ?>/keepek/bok.png');
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: center;
    padding: 5% 8%;
    box-shadow: 0 0 20px rgba(0,0,0,0.5);
    gap: 5%;
    box-sizing: border-box;
}

.book-text {
    width: 45%;
    margin-left:5%;
    margin-bottom:4%;
    color: #2e1d00;
    font-size: 1rem;
    overflow-y: auto;
    line-height: 1.5;
    max-height: 100%;
}

.book-text h2 {
    color: orange;
    font-size: 2rem;
    margin-bottom: 1rem;
    word-wrap: break-word;
}

.book-image {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.book-image img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
    border-radius: 8px;
}
</style>

<div class="book-container">
    <div class="book-content">
        <div class="book-text">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
        <div class="book-image">
        <img src='<?php echo get_template_directory_uri(); ?>/keepek/Google.png' alt="">
        </div>
    </div>
</div>
<style>
        <?php include 'style.css'; ?>
    </style>
