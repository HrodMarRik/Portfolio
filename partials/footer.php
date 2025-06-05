<?php require_once __DIR__ . '/../config/config.php'; ?>
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
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Custom Scripts -->
<script src="<?php echo asset('assets/js/isotope.min.js'); ?>"></script>
<script src="<?php echo asset('assets/js/owl-carousel.js'); ?>"></script>
<script src="<?php echo asset('assets/js/lightbox.js'); ?>"></script>
<script src="<?php echo asset('assets/js/tabs.js'); ?>"></script>
<script src="<?php echo asset('assets/js/video.js'); ?>"></script>
<script src="<?php echo asset('assets/js/slick-slider.js'); ?>"></script>
<script src="<?php echo asset('assets/js/custom.js'); ?>"></script>
<script src="<?php echo asset('assets/js/zoom.js'); ?>"></script>
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

<style>
  section h1 {
    font-size: 2.5rem;
    margin: 1rem 0;
  }
  
  .separator {
    border-top: 1px solid #ddd;
    margin: 10px 0;
  }
</style>

</html>
