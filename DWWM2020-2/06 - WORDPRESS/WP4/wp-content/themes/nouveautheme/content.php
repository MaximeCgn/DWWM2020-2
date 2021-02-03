<div class="blog-post colonne">
<h2 class="blog-post-title"><?php the_title(); ?></h2>

<p class="blog-post-meta"><?php the_date();?></p>
<?php 
echo '<div class="centrer">';
the_post_thumbnail(array(550,550));
echo '</div>';

if (is_single()){//Check si l'article est seul sur la page
    the_content();
    if (get_next_post_link('%link','%title',true,'','category')!=null && get_previous_post_link('%link','%title',true,'','category')!=null ){ //Check s'il y a des posts avant et après
        echo '<div><div class="readMore centrer">';
        previous_post_link('%link','%title',true,'','category');//Affiche uniquement les liens des articles de la meme catégorie
        echo '</div><div></div><div class="readMore centrer">';
        next_post_link('%link','%title',true,'','category');
        echo '</div></div>';
    } else if(get_previous_post_link('%link','%title',true,'','category')==null){
        echo '<div><div></div><div></div><div class="readMore centrer">';
        next_post_link('%link','%title',true,'','category');
        echo '</div></div>';
    }else {
        echo '<div><div class="readMore centrer">';
        previous_post_link('%link','%title',true,'','category');
        echo '</div><div></div><div></div></div>';
    }


} else {
    the_excerpt(); 
}
?>
</div><!-- /.blog-post -->