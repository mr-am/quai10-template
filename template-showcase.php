<?php
/* Template Name: Showcase */

// we search the asked post category
$cat_id = get_field('formules_category');
// we create a WP_Query for this contents
$loop = new WP_Query([
    'post_type'      => 'post',
    'cat'            => $cat_id,
]);
// we display this block markup
?>
<section class="content-box container margin-large grid-2" aria-labelledby="a11y_formulesTitle">
    <div>
        <h2 class="tpl_formules-title content-title" id="a11y_formulesTitle"><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
        <div class="tpl_formules-element-cta-container mla mra">
            <a class="btn" href="<?php echo get_field('cta_destination'); ?>">
                <?php echo __('Contactez-nous', 'quai10'); ?>
            </a>
        </div>        
    </div>    
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            while ($loop->have_posts()) :
                $loop->the_post();
                $photo = get_field('photographie');
                ?>
                <div class="swiper-slide">
                    <div class="slide-photographie" style="background-image: url(<?php echo $photo['url']; ?>);" aria-label="Photographie représentant <?php the_title(); ?>"></div>
                    <strong class="slide-title"><?php the_title(); ?></strong>
                </div><!-- .swiper-slide -->
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div><!-- .swiper-wrapper -->
        <div class="swiper-pagination" aria-hidden="true">
            <a class="swiper-prev-btn" href="#">
                <img src="<?php bloginfo('template_directory'); ?>/assets/dist/img/arrow-white.png"
                    alt="Flèche précédente" title="Slide précédente">
            </a><!-- .swiper-prev-btn -->
            <a class="swiper-next-btn" href="#">
                <img src="<?php bloginfo('template_directory'); ?>/assets/dist/img/arrow-white.png"
                    alt="Flèche suivante" title="Slide suivante">
            </a><!-- .swiper-next-btn -->
        </div><!-- .swiper-pagination -->
    </div><!-- .swiper-container -->
</section><!-- .tpl_formules -->