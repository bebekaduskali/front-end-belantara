        <!-- Footer -->
        <footer id="footer" class="footer-light">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Footer widget area 1 -->
                            <div class="widget clearfix widget-contact-us">
                                <img src="images/logo.png" class="img-responsive" alt="">
                                <div class="social-icons social-icons-border float-left m-t-60">
                                    <ul>
                                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <!-- end: Social icons -->
                            </div>
                            <!-- end: Footer widget area 1 -->
                        </div>
                        <div class="col-md-2">
                            <!-- Footer widget area 2 -->
                            <div class="widget">
                                <h4>About</h4>
                                <ul class="list-icon list-icon-caret list-icon-colored">
                                    <li><a href="#">Our People</a></li>
                                    <li><a href="#">Our Goal</a></li>
                                    <li><a href="#">Our Approach</a></li>
                                </ul>
                            </div>
                            <!-- end: Footer widget area 2 -->
                        </div>
                        <div class="col-md-2">
                            <!-- Footer widget area 2 -->
                            <div class="widget">
                                <h4>Project</h4>
                                <ul class="list-icon list-icon-caret list-icon-colored">
                                    <li><a href="#">Project List</a></li>
                                    <li><a href="#">Maps</a></li>
                                    <li><a href="#">Impact</a></li>
                                </ul>
                            </div>
                            <!-- end: Footer widget area 2 -->
                        </div>
                        <div class="col-md-2">
                            <!-- Footer widget area 2 -->
                            <div class="widget">
                                <h4>Updates</h4>
                                <ul class="list-icon list-icon-caret list-icon-colored">
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Anouncement</a></li>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Resources</a></li>
                                </ul>
                            </div>
                            <!-- end: Footer widget area 2 -->
                        </div>
                        <div class="col-md-2">
                            <!-- Footer widget area 2 -->
                            <div class="widget">
                                <h4>Grants</h4>
                                <ul class="list-icon list-icon-caret list-icon-colored">
                                    <li><a href="#">Proposal</a></li>
                                    <li><a href="#">Register</a></li>
                                    <li><a href="#">Member</a></li>
                                </ul>
                            </div>
                            <!-- end: Footer widget area 2 -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">Copyright &copy; 2017 Belantara Foundation. All Rights Reserved.<a href="http://www.belantara.or.id" target="_blank"></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->

    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>

    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.scrollme.js"></script>

    <!--Template functions-->
    <script src="js/functions.js"></script>

    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/navigation.css">

    <script type="text/javascript" src="js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <script type="text/javascript">
        var tpj = jQuery;

        var revapi30;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_30_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_30_1");
            } else {
                revapi30 = tpj("#rev_slider_30_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "js/plugins/revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 50,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "hermes",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 0
                            }
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "smart",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready
        $(function() {
    $('.coba').css({
        'position' : 'absolute',
        'left' : '50%',
        'top' : '50%',
        'margin-left' : -$('.upper').outerWidth()/2,
        'margin-top' : -$('.upper').outerHeight()/2
    });
});
        
        $(updateBoxDimension);
$(window).on('resize', updateBoxDimension);

function updateBoxDimension() {
    var $box = $('.box');
    var $upp = $('.upper');

    // To center the box
    var boxLeft = ($(window).width()) / 2 - ($upp.width() / 2),
        boxTop = ($(window).height()) / 2 - ($upp.height() / 2);

    $box.css({
        left: boxLeft,
        top: boxTop
    });
}*/

    </script>

</body>

</html>
