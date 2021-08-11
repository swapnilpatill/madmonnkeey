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
<ul id="menu" class="onepage-pagination2">
    <li data-menuanchor="firstPage" ><a class="active" data-index="1">Home</a></li>
    <li data-menuanchor="secondPage"  ><a  data-index="2">About Us</a></li>
    <li data-menuanchor="3rdPage"  ><a data-index="3">Contact Us</a></li>
</ul>
</header> 
<div class="leftSection">
    <div class="wrapsecin">
        <span class="mianlogowarap">
            <img src="<?php echo get_template_directory_uri(); ?>/images/madmonkeeylogo.svg" class="mlogo" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/madmonkeeynamelogo.svg" class="namelogo" alt="">
        </span>
        <div id="countdown-gampang"></div>
        <ul class="socialIcons">
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/fbicon.svg" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/instaico.svg" alt=""></a></li>
            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/twicon.svg" alt=""></a></li>
        </ul>
    </div>
</div>
<div class="main rightsections">
     <section class="section comingSoonSection">
        <div class="csSection">
            <h1>
                COMING SOON
            </h1>
            <h2>welcome to Mad Monkeey</h2>
            <p>We Are Launching the site very soon. Please Come Back Later.</p>
            <div class="subscribeBox">
                <input type="text" placeholder="Enter Your Email ID" class="emailwrap">
                <button type="submit" class="submitbtn">Subscribe Now</button>
            </div>
            <div class="socialmed"></div>
        </div>
     </section>
     <section class="section comingSoonSection">
         <div class="csSection">
            <h1>
                ABOUT
            </h1>
            <h2>Who we are and what we do</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

            <P>We launch our new website soon. Please stay updated and follow</P>
        </div>
     </section>
     <section class="section comingSoonSection">
        <div class="csSection">
           <h1>
            Contact
           </h1>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
           <ul class="contactFormwrap">
                <li>
                    <input type="text" placeholder="Name">
                </li>
                <li>
                    <input type="email" placeholder="Email">
                </li>
                <li>
                    <textarea rows="3" placeholder="Message"> </textarea>
                </li>
                <li>
                    <button type="submit" class="submitbtn">Subscribe Now</button>
                </li>
           </ul>
       </div>
    </section>
</div>

<?php get_footer(); ?>
