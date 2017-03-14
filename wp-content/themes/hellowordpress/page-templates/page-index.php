<?php
/*
Template Name: Index
*/
get_header(); ?>

<?php get_template_part( 'template-parts/content-header' ); ?>

<?php do_action( 'foundationpress_before_content' ); ?>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
