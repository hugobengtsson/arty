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
<div class="square"></div>

        <div id="works">
          <h2>product one.</h2>
          <p>cool picture.</p>
          <p>300€</p>
            <div class="add-to-cart">
                <i data="who" class="fas plusIcon fa-plus"></i> <p>add to cart</p>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri().'/assets/pexels-oleg-magni-1005644.jpg';?>" alt="">
      </section>
      <section class="firstPage">
      <img src="<?php echo get_template_directory_uri().'/assets/pexels-francesco-ungaro-206064.jpg';?>" alt="">
        <div id="works">
          <h2>what we do.</h2>
          <p>also pretty important.</p>
          <i data="what" class="plusIcon fas fa-plus"></i>
        </div>
      </section>
      <section class="firstPage">
        <div id="works">
          <h2>where are we.</h2>
          <p>not necessary, but still.</p>
          <i data="where" class="plusIcon fas fa-plus"></i>
        </div>
        <img src="<?php echo get_template_directory_uri().'/assets/pexels-scott-webb-1029611.jpg';?>" alt="">
      </section>
      <?php get_footer(); ?>  

</body>
</html>