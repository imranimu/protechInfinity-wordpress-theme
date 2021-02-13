<?php
/* 
Template Name: About-Page
*/

get_header(); 
?>
	<div id="main-content">
        <div class="page-wrapper regular-page">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href='<?php echo home_url();?>'>Home</a></li>
                	<li class='active'><?php echo get_the_title();?></li>
                </ol>

                <h2 class="section-title double-title"> About</h2>
                
                <div class="toranj-vc-row-wrapper">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-8">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  f18">
                                        <div class="wpb_wrapper">
                                            <p>We are a creative agency based in south Slovakia specialising in web solutions and print. Combining creative design with clever marketing skills we provide a wide range of services from individual projects to full grown businesses.</p>
                                        </div>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element  f18">
                                        <div class="wpb_wrapper">
                                            <p>Since our beginning we’ve helped our clients to build and maintain their websites, apps and other digital projects.</p>
                                        </div>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element  f18">
                                        <div class="wpb_wrapper">
                                            <p>Finding the personality of a company is what we do best, bringing brands to life through web design, development, branding, print media and content. With the way the world now works it is essential that businesses offer a unique and intuitive approach for their potential customers. Presenting something unique that they will find hard to move by.</p>
                                        </div>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element  f18">
                                        <div class="wpb_wrapper">
                                            <p><strong>As different as our creative process is, everything we do is about long term thinking.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="announce-box">
                                         <p>We Do<br /> <span class="colored element">Web Design<br /> Graphic Design<br /> Print Media<br /> Product Design<br /> Content Production<br /> Good Coffee<br /> Digital Consulting<br /> Advertising<br /> SEO<br /> Ecommerce<br /> Branding<br /> Good Coffee</span><br /> here.</p>
                                       
                                            <script>document.addEventListener("DOMContentLoaded", function(){
                                                Typed.new(".element", {
                                                	strings: ["Web Design","Graphic Design","Print Media","Product Design","Content Production","Good Coffee","Digital Consulting","Advertising","SEO","Ecommerce","Branding","Good Coffee :)"],
                                                	typeSpeed: 30,
                                                	smartBackspace: true,
                                                	loop: true
                                                });
                                                });
                                            </script> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toranj-vc-row-wrapper">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_empty_space"  style="height: 40px" ><span class="vc_empty_space_inner"></span></div>
                                    <div class="wpb_text_column wpb_content_element  f18">
                                        <div class="wpb_wrapper">
                                            <p>If you are looking for a digital agency then allow Dotbox Creative to provide you with the solution to all your web design problems, whether you are in need of a website redesign, SEO work, branding advice or even wish to create an App, we can help.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toranj-vc-row-wrapper">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_empty_space"  style="height: 102px" ><span class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toranj-vc-row-wrapper">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="call-to-action">
                                        <div class="col-md-10">
                                            <h2 class="action-title" style='18px;'> Let’s See How We Can Make You A Cup Of Tea!</h2>
                                        </div>
                                        <div class="col-md-2"> <a class="btn btn-toranj" href="<?php echo home_url();?>/contact/" target="">Get In Touch</a></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <a class="back-to-top" href="#"></a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>       

<?php
get_footer();
