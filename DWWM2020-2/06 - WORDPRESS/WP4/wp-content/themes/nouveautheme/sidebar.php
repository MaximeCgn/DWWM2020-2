<div class="col-sm-3 col-sm-offset-1 blog-sidebar ">
<div class="sidebar-module sidebar-module-inset">
<div class="colonne">
<h4>À Propos</h4>
<div><?php the_author_meta('description');?></div>
<h4>Archives</h4>
<div>
<ol class="list-unstyled">
<?php wp_get_archives('type=monthly');?></div>
</ol>
</div>
</div>
</div><!-- /.blog-sidebar -->
