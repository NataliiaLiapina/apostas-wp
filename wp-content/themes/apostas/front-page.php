<?php
/**
 * Template Name: Front Page Template
 */

 get_header();
 ?>
<main>
    <div class="container">
        <div class="screen1">
            <?php if( have_rows('title') ): ?>
            <?php while( have_rows('title') ): the_row(); 
                ?>
                <div class="title">
                    <h1>
                    <?php if( get_sub_field('string1') ): ?>
                        <?php the_sub_field('string1'); ?>
                    <?php endif; ?>
                    <?php if( get_sub_field('string2') ): ?>
                        <p><?php the_sub_field('string2'); ?></p>
                    <?php endif; ?>
                    </h1>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php if( get_field('subtitle') ): ?>
                <div class="subtitle"><?php the_field('subtitle'); ?></div>
            <?php endif; ?>
            <?php if( have_rows('content') ): ?>
            <?php while( have_rows('content') ): the_row(); 
                ?>
                <div class="screen1-content">
                    <?php if( get_sub_field('text1') ): ?>
                    <div class="text1">
                        <p><?php the_sub_field('text1'); ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if( get_sub_field('text2') ): ?>
                    <div class="text2"><?php the_sub_field('text2'); ?></div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="arrow-down">
                <svg width="6" height="16" viewBox="0 0 6 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 16L5.88675 11H0.113249L3 16ZM2.5 0V11.5H3.5V0H2.5Z" fill="#B6F85B"/>
                </svg>
            </div>
        </div>
        <div class="screen2">
            <?php
            if( have_rows('blocks') ):
            while( have_rows('blocks') ) : the_row();
            ?>
            <div class="block">
            <?php if( have_rows('block') ): ?>
            <?php while( have_rows('block') ): the_row(); ?>
                <div class="row">
                    <div class="logo left">
                        <?php $logo = get_sub_field('logo');
                        if($logo):?>
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />      
                        <?php endif; ?>
                        <?php if( get_sub_field('title') ): ?>
                            <h2><?php the_sub_field('title'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <?php if( get_sub_field('bonus_value') ): ?>
                    <div class="bonus">
                        <?php if( get_sub_field('bonus_value_bold') ): ?>
                            <span><?php the_sub_field('bonus_value_bold'); ?></span>
                        <?php endif; ?>
                        <?php the_sub_field('bonus_value'); ?>
                        <?php if( get_sub_field('bonus_text') ): ?>
                            <p><?php the_sub_field('bonus_text'); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <?php if( get_sub_field('text') ): ?>
                    <div class="text left"><?php the_sub_field('text'); ?></div>
                    <?php endif; ?>
                    <?php if( get_sub_field('button_text') ): ?>
                    <a class="button" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <?php 
            endwhile;
            endif;
            ?>
        </div>
        <div class="screen3">
            <div class="screen3-content" <?php if( get_field('background') ): ?> style="background: url('<?php the_field('background'); ?>') no-repeat; background-size: 246px 170px" <?php endif; ?>>
                <?php if( get_field('text_block_left') ): ?>
                <div class="text-block text-block-left"><?php the_field('text_block_left'); ?></div>
                <?php endif; ?>
                <?php if( get_field('text_block_center') ): ?>
                <div class="text-block text-block-center"><?php the_field('text_block_center'); ?></div>
                <?php endif; ?>
                <?php if( get_field('text_block_right') ): ?>
                <div class="text-block text-block-right"><?php the_field('text_block_right'); ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="screen4">
            <?php $screen_image = get_field('screen_image');
            if($screen_image):?>
                <img src="<?php echo esc_url($screen_image['url']); ?>" alt="<?php echo esc_attr($screen_image['alt']); ?>" />      
            <?php endif; ?>
            <?php if( get_field('screen_title') ): ?>
            <h2><?php the_field('screen_title'); ?></h2>
            <?php endif; ?>
            <?php if( get_field('screen_content') ): ?>
            <p><?php the_field('screen_content'); ?></p>
            <?php endif; ?>
        </div>
        <div class="screen5">
            <?php if( have_rows('title_screen5') ): ?>
            <?php while( have_rows('title_screen5') ): the_row(); ?>
            <div class="title">
                <?php if( get_sub_field('left_part') ): ?>
                <p><?php the_sub_field('left_part'); ?></p>
                <?php endif; ?>
                <?php if( get_sub_field('right_part') ): ?>
                <p><?php the_sub_field('right_part'); ?></p>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php if( get_field('content_screen5') ): ?>
            <div class="content_screen5"><?php the_field('content_screen5'); ?></div>
            <?php endif; ?>
            <?php $image_screen5 = get_field('image_screen5');
            if($image_screen5):?>
            <div class="image_screen5">
                <img src="<?php echo esc_url($image_screen5['url']); ?>" alt="<?php echo esc_attr($image_screen5['alt']); ?>" />
            </div>      
            <?php endif; ?>
            <?php if( get_field('content_screen5-2') ): ?>
            <div class="content_screen5"><?php the_field('content_screen5-2'); ?></div>
            <?php endif; ?>
        </div>
        <div class="screen6">
            <?php if( get_field('title_screen6') ): ?>
            <h2><?php the_field('title_screen6'); ?></h2>
            <?php endif; ?>
            <?php if( get_field('content_screen6') ): ?>
            <div class="content_screen6">
            <?php the_field('content_screen6'); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="logos">
        <div class="container">
            <?php if( have_rows('logos') ): ?>
            <?php while( have_rows('logos') ): the_row(); ?>
                <?php $logo_image = get_sub_field('logo_image');
                    if($logo_image):?>
                        <img src="<?php echo esc_url($logo_image['url']); ?>" alt="<?php echo esc_attr($logo_image['alt']); ?>" />      
                    <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php
 get_footer();