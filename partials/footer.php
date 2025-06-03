<section class="contact-us" id="contact">
  <div class="footer">
    <div class="container">
      <div class="row">

        <div class="col-lg-12">
          <h1>Portfolio</h1>
          <br><hr>
        </div>

        <div class="col-lg-4">
          <ul>
            <li><p><a target="_blank" href="mailto:romaric.chanavat@gmail.com">romaric.chanavat@gmail.com</a><p></li>
            <li><p><a href="tel:+33783150007">0783150007</a></p></li>
          </ul>
        </div>

        <div class="col-lg-4">
          <ul>
            <li><p><a href="/Portfolio/pages/Mentions_Legales.php">Mentions légales</a></p></li>
          </ul>          
        </div>

        <div class="col-lg-4">
          <ul>
            <li><a target="_blank" href="https://www.linkedin.com/in/romaric-chanavat-009935221/"><i class="fab fa-2x fa-linkedin-in"></i></a></li>
            <li><a target="_blank" href="https://github.com/HrodMarRik"><i class="fab fa-2x fa-github"></i></a></li>
          </ul>          
        </div>
      <p>© 2025 Romaric Chanavat. Tous droits réservés.</p>
      </div>
    </div>
  </div>
</section>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/isotope.min.js"></script>
<script src="../assets/js/owl-carousel.js"></script>
<script src="../assets/js/lightbox.js"></script>
<script src="../assets/js/tabs.js"></script>
<script src="../assets/js/video.js"></script>
<script src="../assets/js/slick-slider.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/zoom.js"></script>
<script>
   //according to loftblog tut
   $('.nav li:first').addClass('active');

   var showSection = function showSection(section, isAnimate) {
    var
    direction = section.replace(/#/, ''),
    reqSection = $('.section').filter('[data-section="' + direction + '"]'),
    reqSectionPos = reqSection.offset().top - 0;

    if (isAnimate) {
      $('body, html').animate({
        scrollTop: reqSectionPos },
      800);
    } else {
      $('body, html').scrollTop(reqSectionPos);
    }

   };

   var checkSection = function checkSection() {
    $('.section').each(function () {
      var
      $this = $(this),
      topEdge = $this.offset().top - 80,
      bottomEdge = topEdge + $this.height(),
      wScroll = $(window).scrollTop();
      if (topEdge < wScroll && bottomEdge > wScroll) {
        var
        currentId = $this.data('section'),
        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
        reqLink.closest('li').addClass('active').
        siblings().removeClass('active');
      }
    });
   };

   $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
    e.preventDefault();
    showSection($(this).attr('href'), true);
   });

   $(window).scroll(function () {
    checkSection();
   });</script>

</html>
