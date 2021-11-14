<?php
get_header();
?>
<main class="containter p-4">
<h1><?php the_title(); ?></h1>
<?php get_template_part('includes/section', 'content');?>
</main>
<?php
get_footer();