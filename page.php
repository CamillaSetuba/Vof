<?php get_header(); ?>
 

<div class="container single" >
        <div class="row">

        <!-- looping de postagem-->

           <div class="container page">
  <div class="row">
    
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="col-md-8 conteudo-page">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
    <?php endwhile; else: ?>
    <?php endif; ?>

    <?php get_sidebar(); ?>

  </div>
</div>
               
                



        <!-- Subscribe -->
            <div id="subscribe"  class="subscribe">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Se inscreva e receba noticias, dicas e mudanças nas leis brasileiras</h2>
                            
                        </div>
                        <div class="col-sm-6">
                            <form class="subscribe-form" id="subscription-form">
                                <div class="form-group">
                                    <label class="sr-only" for="subscriber-email">E-mail</label>
                                    <div class="form-group has-feedback">
                                        <div class="input-group">
                                            <span class="input-group-addon ion-email"></span>
                                            <input type="email" id="subscriber-email" class="form-control" placeholder="email" required>
                                        </div>
                                        <span class="ion-android-checkmark-circle form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div><!--/input-grpup-->

                                <button type="submit" id="subscribe-button" type="submit" class="btn btn-default hide"><i class="ion-heart"></i> Get it</button>
                            </form>

                            <!-- SUCCESS OR ERROR MESSAGES -->
                            <div id="subscription-response"></div>
                        </div>
                    </div>
                </div>
            </div>
<?php get_footer(); ?>
        