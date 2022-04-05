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
    <script defer type="module" src="/func.js"></script>
    <script defer type="module" src="/main.js"></script>

<?php 
wp_head('myFunc');

?>

</head>
<body>
  
<div class="navMenu">
  <section class="mainSection">
    <nav>
      <h1 class="slidingText">
      we are arty <br />and we make design.
      </h1>
 
      <h1 class="logo">arty design.</h1>
      <?php
      
      wp_nav_menu(); 
      ?>
          
    </nav>
        
  </section>
</div>
      
</body>
</html>