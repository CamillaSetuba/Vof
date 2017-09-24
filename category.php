<?php get_header(); ?>


<div class="col-sm-8 conteudo-category ">
 <h1>   <?php single_cat_title(' ')?></h1>
 <?php if(have_posts()) : while(have_posts()) : the_post(); ?>   
  <div class="media">
        <div class="media-left">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('img-games', array('class' => 'media-object img-responsive img-thumbnail')); ?>
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <button type="button" class="btn btn-primary btn-xs"><?php echo rwmb_meta('subtitulo'); ?>Leia Mais</button>
          <p class="visible-lg"><?php the_excerpt('resumo'); ?></p>
        </div>
      </div>  
       
    <?php endwhile; else: ?>
    <?php endif; ?>
    <!--/fim categoria-->
    
</div>

 <?php get_sidebar(); ?>
<div class="col-sm-12 conteudo-footer">
<div class="row">
 <?php get_footer(); ?>
</div>
  </div>
                               <!-- <li><span class="ion-location"></span>322, Adress, Lorem Ipsum Avenue, London, Earth</li>-->
                               
        <!-- Subscribe -->
           

        