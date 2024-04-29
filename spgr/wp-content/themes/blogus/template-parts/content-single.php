<?php
/**
 * The template for displaying the Single content.
 * @package Newsair
 */
?>
 <!--==================== breadcrumb section ====================-->
 <?php do_action('blogus_breadcrumb_content');
$blogus_single_page_layout = get_theme_mod('blogus_single_page_layout','single-align-content-right');
if($blogus_single_page_layout == "single-align-content-left") { ?>
        <aside class="col-lg-3">
        <?php get_sidebar();?>
        </aside>
<?php }
if($blogus_single_page_layout == "single-align-content-right" || $blogus_single_page_layout == "single-align-content-left"){ ?>
        <div class="col-lg-9">
<?php } elseif($blogus_single_page_layout == "single-full-width-content") { ?>
        <div class="col-lg-12">
<?php } do_action('blogus_action_main_single_content'); ?>
      </div>
<?php if($blogus_single_page_layout == "single-align-content-right") { ?>
        <aside class="col-lg-3">
                <?php get_sidebar();?>
        </aside>
<?php } ?>