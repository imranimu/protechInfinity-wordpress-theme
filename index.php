<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package protechinfinity
 */

get_header();
?>

	<div id="main-content" class="abs dark-template remove-vc-spacing">
        <div class="toranj-vc-row-wrapper">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vertical-carousel team-members vertical-carousel1489950998 my-custom-carousel">
                                <div class="left-side">
                                    <div class="left-side-wrapper"></div>
                                    <div class="vcarousel-counter"><span class="counter-current">1</span> <span class="counter-divider">/</span> <span class="counter-total"></span></div>
                                    <div class="vcarousel-prev">
                                        <a href="#"><i class="fa fa-angle-up"></i></a>
                                    </div>
                                    <div class="vcarousel-next">
                                        <a href="#"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                                <div class="right-side" data-fill="auto-fill"><div class="right-side-wrapper"></div></div>
                                <div class="dc-contents" style="display: none;">
                                    <div class="dc-item">
                                        <div class="dc-left-side">
                                            <div class="item vcenter-wrapper mystyle" style="background-color: #1f2235;">
                                                <div class="item-wrapper vcenter">
                                                    <h2 class="section-title double-title"><span>Proficient</span>Web Design</h2>
                                                    <p>Due to the climbing trend in digital focus a website is no longer a luxury but rather a necessity. Our team offers a profound and memorable web solutions from start to finish.</p>
                                                    <a href="portfoliogroup/web/" class="btn btn-transparent">Our Works</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dc-right-side">
                                            <div class="item"><img src="<?php echo get_template_directory_uri()?>/images/lignumart-project-closeup.jpg" alt="Firstname" /></div>
                                        </div>
                                    </div>
                                    <script></script>
                                    <div class="dc-item">
                                        <div class="dc-left-side">
                                            <div class="item vcenter-wrapper mystyle" style="background-color: #1f2235;">
                                                <div class="item-wrapper vcenter">
                                                    <h2 class="section-title double-title"><span>Custom</span>Web Applications</h2>
                                                    <p>Due to the climbing trend in digital focus a website is no longer a luxury but rather a necessity. Our team offers a profound and memorable web solutions from start to finish.</p>
                                                    <a href="portfoliogroup/web/" class="btn btn-transparent">Our Works</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dc-right-side">
                                            <div class="item"><img src="<?php echo get_template_directory_uri()?>/images/ortolux-home-3.jpg" alt="Firstname" /></div>
                                        </div>
                                    </div>
                                    <script></script>
                                    <div class="dc-item">
                                        <div class="dc-left-side">
                                            <div class="item vcenter-wrapper mystyle" style="background-color: #1f2235;">
                                                <div class="item-wrapper vcenter">
                                                    <h2 class="section-title double-title"><span>Targeted</span>Print Media</h2>
                                                    <p>We specialize in custom corporate identity and branding, helping businesses to stand out.</p>
                                                    <a href="portfoliogroup/print/" class="btn btn-transparent">Our Works</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dc-right-side">
                                            <div class="item"><img src="<?php echo get_template_directory_uri()?>/images/f-and-p-front.jpg" alt="Firstname" /></div>
                                        </div>
                                    </div>
                                    <script></script>
                                    <div class="dc-item">
                                        <div class="dc-left-side">
                                            <div class="item vcenter-wrapper mystyle" style="background-color: #1f2235;">
                                                <div class="item-wrapper vcenter">
                                                    <h2 class="section-title double-title"><span>Awesome</span> Graphic Design</h2>
                                                    <p>All businesses require character to celebrate their brand visually. We provide a range of services to satisfy our clients’ needs and even more.</p>
                                                    <a href="portfoliogroup/print/" class="btn btn-transparent">Our Works</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dc-right-side">
                                            <div class="item"><img src="<?php echo get_template_directory_uri()?>/images/headers-print.jpg" alt="Firstname" /></div>
                                        </div>
                                    </div>
                                    <script></script>
                                    <div class="dc-item">
                                        <div class="dc-left-side">
                                            <div class="item vcenter-wrapper mystyle" style="background-color: #1f2235;">
                                                <div class="item-wrapper vcenter">
                                                    <h2 class="section-title double-title"><span>Other</span> Solutions</h2>
                                                    <p>3D Visualizations, Merchandise, App Development, Custom Solutions .</p>
                                                    <a href="portfoliogroup/other/" class="btn btn-transparent">Our Works</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dc-right-side">
                                            <div class="item"><img src="<?php echo get_template_directory_uri()?>/images/orto-papers.jpg" alt="Firstname" /></div>
                                        </div>
                                    </div>
                                    <script></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
get_footer();
