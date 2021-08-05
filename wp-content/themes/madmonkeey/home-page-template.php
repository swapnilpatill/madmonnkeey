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
 <div id="shetterTop"></div>
<div id="shetterBottom"></div>
 <section class="homebannerwrap">
        <div class="hbContent">
        
            <?php
            $file = get_field('banner_image');
                if( $file ): ?>
                <img src="<?php echo $file['url']; ?>" data-0="transform: scale(1);" data-500="transform: scale(0.5);" alt="">
            <?php endif; ?>
            <span  data-0="transform: scale(1)  translateY(0px);" data-500="transform: scale(0.5)  translateY(-90px);">
            <?php the_field('banner_content'); ?>
            </span>
        </div>
    </section>
     
    <section class="wrapiiack">
        <div class="container">
            <h2><?php the_field('expertise_title'); ?></h2>
            <?php the_field('expertise_subtext'); ?>
            <ul class="wrapiiackList">
			 <?php 
			$args = array( 'post_type' => 'expertise', 'posts_per_page' => 6 );
			$the_query = new WP_Query( $args ); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li>
                    <span class="">
                        <?php
                            $file = get_field('image_upload');
                                if( $file ): ?>
                                <img src="<?php echo $file['url']; ?>" alt="">
                            <?php endif; ?>
                    </span>
                    <h4><?php the_field('title'); ?></h4> 
                    <div class="popupWrap">
                        <div class="popupMainbox">
                            <a href="javascript:void(0)" class="closeIconwrap"></a>
                            <div class="leftbox">
                                <h2><?php the_field('title'); ?></h2>
                                <p><?php the_field('highlighted_text'); ?></p> 
                            </div>
                            <div class="rightbox">
                            <?php the_field('description'); ?>
                            </div>
                        </div>
                    </div>    			
                </li>
            <?php endwhile;
                wp_reset_postdata(); ?>
            <?php else:  ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>    
            </ul>
        </div>
    </section>
    
    <section class="wrapUpcomingevent">
    <div class="wrapupcoming">
    <?php 
    $date_now = date('Y-m-d H:i:s');
            $posts = get_posts(array(
                'posts_per_page'	=> 1,
                'post_type'			=> 'news',
                'meta_query' => array(
                    array(
                        'key'           => 'date',
                        'compare'       => '>=',
                        'value'         => $date_now,
                        'type'          => 'DATETIME',
                    ),
                    
                ),
                'order'          => 'ASC',
                'orderby'        => 'meta_value',
                'meta_key'       => 'date',
                'meta_type'      => 'DATETIME'
            ));

        if( $posts ): ?>
        <?php foreach( $posts as $post ): 
		setup_postdata( $post ); ?>
        <div class="ucEventDetails">
            <div>
                <span class="date"><?php the_field('date'); ?></span>
                <h3>UPCOMING EVENT</h3>
                <a href="<?php the_field('link'); ?>" class="bluebtn">LEARN MORE</a><br>
                <a href="" class="inlineBluebtn">View Past Events &gt;</a>
            </div>
        </div>
        <div class="infastructureWrap">
            <div>
                <h3><?php the_field('news_title'); ?></h3>
                    <div><span class="uptag"><?php the_field('tag'); ?></span></div>
                
            </div>
        </div>
        <?php endforeach; ?>
	 
	<?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
</section>
    <section class="consultationsWrap">
        <div class="container">
            <h2><?php the_field('consultations_title'); ?></h2>
            <?php the_field('consultations_subtext'); ?>
            <ul class="consultationsList news list ">
                <?php 
                $args = array( 'post_type' => 'insights', 'posts_per_page' => 3 );
                $the_query = new WP_Query( $args ); 
                ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php
                                $field = get_field_object( 'category' );
                                $value = $field['value'];
                                $label = $field['choices'][ $value ];
                            ?>
                <li class="list--list-item" data-category="<?php echo esc_attr($value); ?>" > 
                    <?php
                        $file = get_field('upload_document');
                        if( $file ): ?>
                            <a target="_blank" href="<?php echo $file['url']; ?>" class="head">
                            <?php else :?> 
                                <a target="_blank"  class="head">
                            <?php endif; ?>
                        <?php the_field('country'); ?>
                    </a>
                    <span class="wrapConsContent">
                        <?php the_field('description'); ?>
                    </span>
                    <abbr class="datetagwrap">
                        <span class="date"><?php the_field('date'); ?></span> <a href="" class="uptagBlue "><?php echo esc_attr($label); ?></a>
                    </abbr>
			    </li>
                <?php endwhile;
                wp_reset_postdata(); ?>
                <?php else:  ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </ul>
            <div class="textcenter">
                <a href="consultations" class="bluebtn"> VIEW MORE</a>
            </div>
        </div>
    </section>
    <section class="charterMembersWrap">
        <div class="container">
            <div class="pagehead">
                <h2> <?php the_field('charter_members'); ?></h2>
                <p><?php the_field('charter_members_content'); ?></p>
            </div>
            <ul class="logoList">
        <?php while( have_rows('charter_members_logo_list') ): the_row();
                ?>
                <li><a target="_blank" href="<?php the_sub_field('link'); ?>">
                <?php
                    $file = get_sub_field('logo');
                    if( $file ): ?>
                    <img src="<?php echo $file['url']; ?>" alt="">
                <?php endif; ?>
                </a></li>
            <?php endwhile; ?>
        </ul>
          
        </div>
   </section>
   
    <section class="charterMembersWrap">
        <div class="container">
            <div class="pagehead">
                <h2> <?php the_field('associate_members_heading'); ?></h2>
                <p><?php the_field('associate_members_content'); ?></p>
            </div>
            <ul class="logoList">
        <?php while( have_rows('associate_members_logo_list') ): the_row();
                ?>
                <li><a target="_blank" href="<?php the_sub_field('link'); ?>">
                <?php
                    $file = get_sub_field('logo');
                    if( $file ): ?>
                    <img src="<?php echo $file['url']; ?>" alt="">
                <?php endif; ?>
                </a></li>
            <?php endwhile; ?>
        </ul>
        </div>
   </section>
<section class="stayupdate">
    <div class="container">
        <h2>STAY UPDATED WITH EUTC</h2>
        <div class="wrapstayupdate">
        <?php echo do_shortcode('[contact-form-7 id="363" title="Contact form 1"]'); ?> 
        <a href="" class="twittericon"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt=""> </a>
        <a href="" class="twittericon"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt=""> </a>
    </div>
    </div>
</section>
 
 


<?php get_footer(); ?>
