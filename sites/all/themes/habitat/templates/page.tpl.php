<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to main-menu administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<div class="header">

    <div class="inner_width">
        <div class="top">
            <a id="logo" href="<?php print base_path();?>"><img src="<?php print base_path() . drupal_get_path('theme', 'habitat');?>/images/logo.png" alt="Habitat for Humanity - Sarnia Lambton" /></a>

            <?php print render($page['header']); ?>

            <a class="restore_logo" href="/our-restore"><img src="<?php print base_path() . drupal_get_path('theme', 'habitat');?>/images/r_logo.png" alt="Habitat for Humanity ReStore" /></a>
        </div>
    </div>

    <div class="nav">
        <div class="inner_width">
            <?php print render($page['mainmenu']); ?>
        </div>
    </div>
</div>


<div class="slideshow">
    <?php print render($page['slideshow']); ?>
</div>


<div class="container">
    <div class="inner_width">
        <div class="content_main">
            <div class="content_top">
                <?php if (!$is_front) {?>
                    <h1 class="page_title <?php print arg(0, request_path());?>_title"><span><?php print $title; ?></span> <span class="icon">&nbsp;</span></h1>
                    <br clear="all"/>
                <?php } ?>

                <?php print $messages;?>
                <?php print render($page['content']); ?>
            </div>
        </div>

        <div class="sidebar">
        <?php if ($page['sidebar_second']): ?>
            <?php print render($page['sidebar_second']); ?>
        <?php endif; ?>
        </div>


        <?php if ($is_front) { ?>
            <div class="content_btm">
                <div class="fea_val">
                    <?php if ($page['footer_first']): ?>
                        <?php print render($page['footer_first']); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div style="margin-top:19px; padding:0; background:none !important; border:none !important;" class="sidebar">
                <a href="/?q=node/12" style="margin:0; line-height:0; display:block;"><img style="max-width:100%; margin:0;" src="/sites/all/themes/habitat/images/don_img1.jpg"></a>
                <a href="/?q=node/3" style="margin:0; line-height:0;"><img style="max-width:100%; margin:0;" src="/sites/all/themes/habitat/images/don_img2.jpg"></a>
            </div>
        <?php } ?>

    </div>
</div>

<div class="footer">

    	<div class="inner_width">

        	<div class="f_left">
				<a class="habitat_f_humanity_f_logo" href="<?php print base_path();?>"></a><br/>
                <p class="address"><a href="?q=node/9" class="footer_con_add">1787 London Line Sarnia, Ontario, N7T 7H2</a></p>
              	<ul class="social" style="margin:3px 0 0 0; padding:0;">
                	<li class="fb"><a target="_blank" href="https://www.facebook.com/pages/Habitat-for-Humanity-SarniaLambton/255991847841581">&nbsp;</a></li>
                	<li class="tw"><a target="_blank" href="https://twitter.com/habitatsarnia">&nbsp;</a></li>
                </ul>
                <p style="font-size:25px; float:left;"> (519) 339-7957</p>
                <br clear="all"/>
                <p style="font-size:11px;"><a class="cci_studios" target="_blank" href="http://www.ccistudios.com/">Site by CCI Studios</a></p>
            </div>

            <div class="f_center">
            	<ul>
                	<li><a href="<?php print base_path();?>"><span>Home</span></a>
                	<li><a href="/?q=node/2"><span>About</span></a>
                	<li><a href="/?q=node/3"><span>Volunteer<span></a>
                	<li><a href="/?q=node/10">Restore</a>
                	<li><a href="/?q=node/14">Builds</a>
                	<li><a href="/?q=node/11">Our Affiliate</a>
                </ul>

                <ul>
                	<li><a href="/?q=node/4"><span class="footer_link1">Homeownership</span></a>
                	<li><a href="/?q=node/15">General Information</a>
                	<li><a href="/?q=node/16">Homeowner's Role</a>
                	<li><a href="http://habitatsarnia.org/pdfs/2013_Application_for_Housing_Partnership_Form.pdf">Apply Now</a>
                	<li><a href="/?q=node/6"><span>Our Restore</span></a>
                	<li><a href="/?q=node/5"><span class="footer_link1">Local Builds</span></a>
                    <li><a href="/?q=node/5">Our Builds</a>
                	<li><a href="/?q=node/19">Photo Gallery</a>
                </ul>

                <ul>
                	<li><a href="/?q=node/20"><span class="footer_link1">International Builds</span></a>
                	<li><a href="/?q=node/20">Our Builds</a>
                	<li><a href="/?q=node/21">Photo Gallery</a>
                	<li><a href="/?q=node/8"><span>Sponsors</span></a>
                	<li><a href="/?q=node/9"><span>Contact</span></a>
                	<li><a href="/?q=node/12"><img src="<?php print base_path() . drupal_get_path('theme', 'habitat');?>/images/f_don_btn.png"/></a>
                </ul>
             </div>

            <div class="f_right">
            	<a href="http://www.sarnialambtonchamber.com/" class="f_othr_logos1" target="_blank">Sarnia-Lambton Chamber of Commerce</a><br />
                <a href="http://www.habitat.ca/" class="f_othr_logos2" target="_blank" target="_blank">Habitat for Humanity</a><br />
                <a href="/?q=node/6" class="f_othr_logos3">Habitat for Humanity ReStore</a>
            </div>

        </div>

</div>
