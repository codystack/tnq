<?php
$page = 'wall-of-fame';
include ('./components/header.php');
?>


<section class="min-vh-100 bg-primary-3 py-5 o-hidden">
    <div class="container position-relative layer-2">
        <div class="row justify-content-center mb-md-6">
            <div class="col-auto">
                <a href="\">
                    <img src="https://i.imgur.com/XSGaWUp.png" alt="TNQ" style="width: 200px;">
                </a>
            </div>
        </div>
        <div class="row justify-content-center py-6 text-light mb-5">
            <div class="col text-center">
                <h1 class="display-3">Coming Soon</h1>
                <div class="lead">Hold tight, we're still preparing nice for you. Stay tuned.</div>
            </div>
        </div>
        <!--<div class="row">
            <div class="col-12 add-countdown-time" data-countdown-date="2020/12/12" data-detailed>
                <div data-active class="row text-center">
                    <div class="col-md">
                        <div class="card card-body" data-aos="fade-up" data-aos-delay="100">
                            <span class="h1 text-primary mb-2" data-weeks data-format="%w"></span>
                            <span class="h6 mb-0" data-weeks-label></span>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card card-body" data-aos="fade-up" data-aos-delay="200">
                            <span class="h1 text-primary mb-2" data-days data-format="%d"></span>
                            <span class="h6 mb-0" data-days-label></span>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card card-body" data-aos="fade-up" data-aos-delay="300">
                            <span class="h1 text-primary mb-2" data-hours></span>
                            <span class="h6 mb-0" data-hours-label></span>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card card-body" data-aos="fade-up" data-aos-delay="400">
                            <span class="h1 text-primary mb-2" data-minutes></span>
                            <span class="h6 mb-0" data-minutes-label></span>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card card-body" data-aos="fade-up" data-aos-delay="500">
                            <span class="h1 text-primary mb-2" data-seconds></span>
                            <span class="h6 mb-0" data-seconds-label></span>
                        </div>
                    </div>
                </div>
                <div data-elapsed style="display: none;">
                    <h4>This is the fallback for when the countdown is elapsed</h4>
                </div>
            </div>
        </div>-->
    </div>
    <div class="decoration-wrapper d-none d-sm-block">
        <div class="decoration bottom middle-y scale-5">
            <img class="bg-primary" src="assets/img/decorations/deco-blob-9.svg" alt="deco-blob-9 decoration" data-inject-svg />
        </div>
        <div class="decoration bottom right scale-5">
            <img class="bg-primary-2" src="assets/img/decorations/deco-dots-4.svg" alt="deco-dots-4 decoration" data-inject-svg />
        </div>
    </div>
</section>


<a href="#" class="btn back-to-top btn-primary btn-round" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
      <img class="icon" src="assets/img/icons/theme/navigation/arrow-up.svg" alt="arrow-up icon" data-inject-svg />
    </a>
    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <script type="text/javascript">
      (function($){
            var now             = new Date;
            var day             = 864e5;
            var weeksToAdd      = 2;
            var tenWeeksFromNow = new Date(+now + day * 7 * weeksToAdd).toISOString().slice(0,10).replace(/\-/g, 'index');
            $('[data-countdown-date].add-countdown-time').attr('data-countdown-date', tenWeeksFromNow);
          })(jQuery);
    </script>

    
    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="assets/js/aos.js"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="assets/js/clipboard.js"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="assets/js/plyr.polyfilled.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="assets/js/svg-injector.umd.production.js"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="assets/js/twitterFetcher_min.js"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="assets/js/typed.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

    <script type="text/javascript">
      jQuery("form:not([action])").on('submit', function(){return false;});
    </script>

  </body>


</html>

