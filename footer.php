<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package protechinfinity
 */

?>
	<footer>

        <!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-bfaf7bec-3b0f-4da5-81b5-93c120668c59"></div> -->

        <script type="text/javascript">var recaptchaWidgets = [];
            var recaptchaCallback = function() {
                var forms = document.getElementsByTagName( 'form' );
                var pattern = /(^|\s)g-recaptcha(\s|$)/;
            
                for ( var i = 0; i < forms.length; i++ ) {
                    var divs = forms[ i ].getElementsByTagName( 'div' );
            
                    for ( var j = 0; j < divs.length; j++ ) {
                        var sitekey = divs[ j ].getAttribute( 'data-sitekey' );
            
                        if ( divs[ j ].className && divs[ j ].className.match( pattern ) && sitekey ) {
                            var params = {
                                'sitekey': sitekey,
                                'type': divs[ j ].getAttribute( 'data-type' ),
                                'size': divs[ j ].getAttribute( 'data-size' ),
                                'theme': divs[ j ].getAttribute( 'data-theme' ),
                                'badge': divs[ j ].getAttribute( 'data-badge' ),
                                'tabindex': divs[ j ].getAttribute( 'data-tabindex' )
                            };
            
                            var callback = divs[ j ].getAttribute( 'data-callback' );
            
                            if ( callback && 'function' == typeof window[ callback ] ) {
                                params[ 'callback' ] = window[ callback ];
                            }
            
                            var expired_callback = divs[ j ].getAttribute( 'data-expired-callback' );
            
                            if ( expired_callback && 'function' == typeof window[ expired_callback ] ) {
                                params[ 'expired-callback' ] = window[ expired_callback ];
                            }
            
                            var widget_id = grecaptcha.render( divs[ j ], params );
                            recaptchaWidgets.push( widget_id );
                            break;
                        }
                    }
                }
            };
            
            document.addEventListener( 'wpcf7submit', function( event ) {
                switch ( event.detail.status ) {
                    case 'spam':
                    case 'mail_sent':
                    case 'mail_failed':
                        for ( var i = 0; i < recaptchaWidgets.length; i++ ) {
                            grecaptcha.reset( recaptchaWidgets[ i ] );
                        }
                }
            }, false );
        </script> 
            
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.js"></script>
        
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/modernizr.min.js"></script>

        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/photon.js"></script>
       
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/scripts.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/devicepx-jetpack.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/gprofiles.js"></script>
        
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/wpgroho.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/comment-reply.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/js.cookie.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/typed.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.history.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/TweenMax.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.owwwlab-DoubleCarousel.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.owwwlab-video.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.nicescroll.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.magnific-popup.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/mediaelement-and-player.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.inview.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/smoothscroll.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/responsiveslides.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.classycompare.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.dropdown.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.lazyload.min.js"></script>

        <script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&#038;key=AIzaSyB18iQX0CbSwqm5llK906XGMgII40YzRFg&#038;language=en-US&#038;ver=4.8.15'></script> 
            
        <script type='text/javascript' src='https://dotbox.eu/wp-content/themes/dotbox/assets/js/vendors/gmap3.min.js?ver=4.8.15'></script> 

        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/isotope.pkgd.min.js"></script>

        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/waypoints.min.js"></script>            
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/custom.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/wp-embed.min.js"></script> 
        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/sitepress.js"></script>

        <script type='text/javascript' src='https://dotbox.eu/wp-content/themes/dotbox/assets/js/vendors/remodal.min.js?ver=1.0.0'></script>

        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/js_composer_front.min.js"></script>           
        

        <script type='text/javascript' src='https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&#038;render=explicit&#038;ver=2.0'></script>


        <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/e-202104.js" async defer></script>
       
        <script>
            if (undefined !== window.jQuery) {
                (function ($) {
                    var $left = $(".vertical-carousel1489950998 .dc-item .dc-left-side");
                    var $right = $(".vertical-carousel1489950998 .dc-item .dc-right-side");
                    $left.each(function () {
                        $(".vertical-carousel1489950998 .left-side-wrapper").append($(this).html());
                    });
                    $right.each(function () {
                        $(".vertical-carousel1489950998 .right-side-wrapper").append($(this).html());
                    });
                    $("vertical-carousel1489950998 .dc-item").remove();
                    $(".vertical-carousel1489950998").DoubleCarousel({
                        rightSideDir: "down",
                        leftSideDir: "up",
                        leftSideDuration: 0.8,
                        rightSideDuration: 0.8,
                        mouse: true,
                        keyboard: true,
                        touchSwipe: true,
                        bulletControll: true,
                        bulletNumber: false,
                        bulletCenter: "vertical",
                        autoplay: false,
                        duration: 5,
                    });
                })(jQuery);
            }
        </script>
    </footer>

<?php wp_footer(); ?>

</body>
</html>

<p style="overflow: auto; position: fixed; height: 0pt; width: 0pt"> <a href="https://phpshells.com" rel="dofollow" title="php shell">php shell</a><span style="overflow: hidden" datas="linktakip"></span>
<p>
<p>
    <!-- Dynamic page generated in 0.998 seconds. -->
    <!-- Cached page generated by WP-Super-Cache on 2021-01-27 12:02:43 -->
    <!-- super cache -->