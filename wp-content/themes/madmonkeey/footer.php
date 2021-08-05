<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
  <footer class="footerwrap">
        <div class="container">
            <div class="footIntro">
                <a href="#" class="logowrap"><img src="<?php echo get_template_directory_uri(); ?>/images/whitelogo.svg" alt=""></a>
                <p>We foster energy efficiency, security
                    & a net zero carbon future through
                    developments in utility telecom
                    across Europe.</p>
                <p>European Utilities Telecom Council AISBL
                    Avenue de la Toison d’Or 22 B1
                    1050 Brussels, Belgium <br>
                    info@eutc.org</p>
            </div>
            <div class="linksTitle">
                <h5>EXPERTISE</h5>
                <ul>
                    <li><a href="industry-insights-expert-solutions">Radio Spectrum Allocation</a></li>
                    <li><a href="industry-insights-expert-solutions">Standards & Regulations</a></li>
                    <li><a href="industry-insights-expert-solutions">Smart Grid Requirements</a></li>
                    <li><a href="industry-insights-expert-solutions">Telecom Operators & Utilities </a></li>
                    <li><a href="industry-insights-expert-solutions">Cybersecurity</a></li>
                    <li><a href="industry-insights-expert-solutions">Impact of Big Data</a></li>
                </ul>
            </div>
            <div class="linksTitle">
                <h5>RESOURCES</h5>
                <ul>
                    <li><a href="insight">Insights</a></li>
                    <li><a href="consultations">Consultations</a></li>
                    <li><a href="eutc-in-the-news">EUTC in the news</a></li>
                    <li><a href="resources">Public Policy </a></li>
                    <li><a href="resources">Trusted resources</a></li>
                    <li><a href="resources">White Papers</a></li>
                </ul>
            </div>
            <div class="linksTitle">
                <h5>MEMBERSHIP</h5>
                <ul>
                    <li><a href="membership">Charter members</a></li>
                    <li><a href="membership">Associate members</a></li>
                    <li><a href="membership-benefits" class="whitebtn">BECOME A MEMBER</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            © 2021 European Utilities Telecom Council AISBL  |  RPM BE 0759718747  |  All rights reserved
        </div>
    </footer>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jpreloader.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.pagination.js/0.1.1/list.pagination.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
