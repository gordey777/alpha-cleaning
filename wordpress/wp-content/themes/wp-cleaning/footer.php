      </div><!-- /.inner -->
    </section><!-- /section -->

  </div><!-- /wrapper -->

  <footer role="contentinfo">

    <div class="footer-nav-menu">

      <?php wpeFootNav(); ?>
  <!-- <nav class="nav_footer" role="navigation">      <ul class="footer-nav">
    <li><a href="#">Химчистка ковров</a></li>
    <li><a href="#">Деликатная чистка ковра</a></li>
    <li><a href="#">Химчистка ковролина</a></li>
    <li><a href="#">Химчистка мягкой мебели</a></li>
  </ul>
      </nav>--><!-- /nav -->
    </div><!-- /.footer-nav-menu -->
    <div class="footer-content">

      <div class="footer-logo">
        <a href="/">АЛЬФА-ЧИСТКА</a>
      </div>
      <div class="footer-wrap">
        <div class="foot-contacts">

            <p class="adres">ул. Воронцовская, д 4, стр. 301</p>

            <p class="foot-tel">Тел. +7 (495) 230 75 01</p>

            <p class="foot-mail">E-mail: office@aospg.ru</p>

        </div>
      </div>
    </div><!-- /.footer-content -->
  </footer><!-- /footer -->

  <?php include 'reviews-form.php'; ?>

  <?php wp_footer(); ?>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script> -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<!--   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl-sliders.js"></script> -->
  <script >
  $(document).ready(function() {

    $("#owl-header_slider").owlCarousel({
        items: 1,
        loop: true,
        smartSpeed:500,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: false,
        mouseDrag: false,
        animateOut: 'fadeOut',
    });

  });

  $(document).ready(function() {

    $("#owl-slider").owlCarousel({
        nav:true,
        items: 3,
        loop: false,
        margin: 30,
        smartSpeed:500,
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: false,
        navText: ['<i class="fa fa-angle-left icon-large" aria-hidden="true"></i>','<i class="fa fa-angle-right icon-large" aria-hidden="true"></i>'],
        //mouseDrag: false,
    });

  });


  </script>


</body>
</html>
