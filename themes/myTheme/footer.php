<footer id="footer">
        <div id="footerStuffContainer">
          <span>
            copyright. &copy; 2021 arty.
          </span>
          <a class="backToTop" href="#" onclick="document.body.scrollTop=0;document.documentElement.scrollTop=0;event.preventDefault()">back to top.</a>
        
        </div>
        <?php 
          $menuarray = ['theme_location' => 'socialmedia',];
          wp_nav_menu($menuarray);

          wp_footer('myFunc');

        ?>
      </footer>
