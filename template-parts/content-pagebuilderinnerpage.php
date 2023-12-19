<?php
/**
 * Author:          Andrei Baicus <andrei@themeisle.com>
 * Created on:      28/08/2018
 *
 * @package Neve
 */
?>
<?php
$post_id = get_the_ID();
$background_image = get_field('background-img', $post_id);
$innerpage_title = get_field('innerpage-title', $post_id);
?>

<style>
body.new-innerpage .masthead {
            <?php if (!empty($background_image)) : ?>
            background-image: url('<?php echo esc_url($background_image); ?>');
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 100px 0; 
            min-height: 400px;
            <?php endif; ?>
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            width: 100%;
        }
</style>

<div class="masthead">
    <h1><?php echo esc_html($innerpage_title); ?></h1>
</div>

<div class="container">
<?php the_content(); ?>
</div>
