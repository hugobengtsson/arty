<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style.css';?>">
    <script src="https://kit.fontawesome.com/d556ebb7b7.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>




</head>
<body>
<section class="firstPage">
        <div id="works">
        <h2><?php while ( have_posts() ) :
        the_post();
        the_title();
        endwhile;
        ?></h2>
        <p><?php while ( have_posts() ) :
        the_post();
        the_content();
        do_action('my info');
        endwhile;
        ?></p>
        <i data="who" class="fas plusIcon fa-plus"></i>
        </div>

    <img src="<?php echo get_template_directory_uri().'/assets/pexels-francesco-ungaro-206064.jpg';?>" alt="">
</section>


        <?php get_footer(); ?>  


</body>
</html>


