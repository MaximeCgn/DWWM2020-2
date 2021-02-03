<?php get_header();?>
<div class="row">
<div class="col-am-12">
<div class="blog-post colonne">
<h2 class="blog-post-title"><?php the_title(); ?></h2>

<p class="blog-post-meta"><?php the_date();?></p>
<?php if (have_posts()) : while (have_posts()) : the_post();
the_content();

endwhile; endif;
?>
</div> <!-- /.col-->
<?php get_sidebar(); ?>
</div> <!-- /.row-->
</div><!-- /.blog-post -->
<?php get_footer(); ?>