<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package protechinfinity
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta property="og:type" content="website" />
    <meta property="og:title" content="asd" />
    <meta property="og:description" content="ProTechInfinity - You name it, we do it" />
    <meta property="og:url" content="https://protechinfinity.com/" />
    <meta property="og:site_name" content="Protechinfinity" />
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:card" content="protechinfinity" />

	<?php wp_head(); ?>

    <!-- <link type="text/css" media="all" href="https://dotbox.eu/wp-content/cache/autoptimize/css/autoptimize_1a7fef69cf4ca91f0914e23bbd4f652a.css" rel="stylesheet" /> -->
</head>

<body class="home page-template page-template-template-dark-abs page-template-template-dark-abs-php page page-id-1544 _masterslider _msp_version_2.29.0 wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="side-bar-outer">
    <a href="#" id="menu-toggle-wrapper" class="remodal-bg"><div id="menu-toggle"></div> </a>
    <a href="#" id="inner-bar">
        <div class="logo-alt"><img src="<?php echo get_template_directory_uri()?>/images/dotbox-vertical-logo-rotated.png" alt="logo-mini" /></div>
    </a>
    <div id="side-bar" class="remodal-bg">
        <div class="inner-wrapper">
            <div id="side-inner">
                <div id="logo-wrapper">
                    <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri()?>/images/dotbox-main-logo.png" alt="logo" /></a>
                </div>
                <div id="side-contents">
                    <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'           => "navigation",
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        ) );
                    ?>  
                    <!-- <ul id="navigation" class="">
                        <li id="menu-item-1579" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1579"><a href="#">About Us</a></li>
                        <li id="menu-item-1578" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1578"><a href="#">Services</a></li>
                        <li id="menu-item-815" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-815">
                            <a href="#">Portfolio</a>
                            <ul class="sub-menu">
                                <li class="nav-prev">
                                    <a href="#"><i class="fa fa-angle-left"></i>Portfolio</a>
                                </li>
                                <li id="menu-item-817" class="menu-item menu-item-type-taxonomy menu-item-object-owlabpfl_group menu-item-817"><a href="#">Web</a></li>
                                <li id="menu-item-819" class="menu-item menu-item-type-taxonomy menu-item-object-owlabpfl_group menu-item-819"><a href="#">Print</a></li>
                                <li id="menu-item-1713" class="menu-item menu-item-type-taxonomy menu-item-object-owlabpfl_group menu-item-1713"><a href="#">Logo Design</a></li>
                                <li id="menu-item-1614" class="menu-item menu-item-type-taxonomy menu-item-object-owlabpfl_group menu-item-1614"><a href="#">Other</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-1562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1562"><a href="#">Contact</a></li>                                 
                    </ul> -->
                </div>
                <div id="side-footer">
                    <ul class="social-icons"></ul>
                    <div id="copyright">
                        <p>Copyright &copy; 2021 || ProTechInfinity</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 