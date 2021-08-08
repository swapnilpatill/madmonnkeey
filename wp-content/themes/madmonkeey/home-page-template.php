<?php
/**
 * Template Name: Home page template
 *
 * Description:-
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<!-- <div id="shetterTop"></div>
<div id="shetterBottom"></div> -->
 
<header class="leftMenu">
    <a href="#" class="logowrap"><img src="<?php echo get_template_directory_uri(); ?>/images/madmonkeeylogo.svg" alt=""> </a>
<ul id="menu">
    <li data-menuanchor="firstPage" class="active"><a href="#firstPage">Home</a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage">About Us</a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage">Contact Us</a></li>
</ul>
</header> 
<div class="leftSection">
    <span class="mianlogowarap">
        <img src="<?php echo get_template_directory_uri(); ?>/images/madmonkeeylogo.svg" class="mlogo" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/madmonkeeynamelogo.svg" class="namelogo" alt="">
    </span>
    <div id="countdown-gampang"></div>
</div>
<div class="main">
     <section class="section">
        
     </section>
     <section class="section">
         page 2
     </section>
     <section class="section">
         page3
     </section>
</div>

<?php get_footer(); ?>
