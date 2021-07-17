<?php get_header(); ?>

<?php get_template_part( 'template-parts/header/banner-corretor' ); ?>       
<div class="agent-page content-area"> 
  <div class="container"> 
    <!-- Heading -->           
    <h1 class="heading-2"><?php _e( 'Detalhes do Corretor', 'pam' ); ?></h1> 
    <div class="row"> 
      <div class="col-lg-8"> 
        <div <?php post_class( 'row team-4' ); ?> id="corretor-<?php the_ID(); ?>"> 
          <div class="col-xl-5 col-lg-5 col-md-5 col-pad "> 
            <div class="photo"> 
              <?php echo PG_Image::getPostImage( null, 'agent', array(
                                        'class' => 'img-fluid',
                                        'loading' => 'lazy'
                                  ), null, null ) ?> 
            </div>                   
          </div>                 
          <div class="col-xl-7 col-lg-7 col-md-7 col-pad align-self-center"> 
            <div class="detail"> 
              <h5><b><?php _e( 'CRECI Nº :', 'pam' ); ?></b> <?php if ( get_field( 'creci_numero' ) ) : ?><span><?php echo get_field( 'creci_numero' ); ?></span><?php endif; ?></h5> 
              <h4> <a href="#"><?php the_title(); ?></a> </h4> 
              <div class="contact"> 
                <ul> 
                  <?php if ( get_field( 'endereco' ) ) : ?><li> 
                    <span><b><?php _e( 'Endereço', 'pam' ); ?></b>:</span> 
                    <?php echo get_field( 'endereco' ); ?> 
                  </li><?php endif; ?>                         
                  <?php if ( get_field( 'e-mail' ) ) : ?><li> 
                    <span><b><?php _e( 'Email', 'pam' ); ?></b>:</span> 
                    <?php echo get_field( 'e-mail' ); ?> 
                  </li><?php endif; ?>                         
                  <?php if ( get_field( 'telefone_celular' ) ) : ?><li> 
                    <span><b><?php _e( 'Celular', 'pam' ); ?></b>:</span> 
                    <?php echo get_field( 'telefone_celular' ); ?> 
                  </li><?php endif; ?>                         
                  <?php if ( get_field( 'telefone_fixo' ) ) : ?><li> 
                    <b><?php _e( 'Telefone Fixo:', 'pam' ); ?></b> 
                    <?php echo get_field( 'telefone_fixo' ); ?> 
                  </li><?php endif; ?>                         

                </ul>                       
              </div>                     
              <ul class="social-list clearfix"> 
                <li> 
                  <?php if ( get_field( 'facebook' ) ) : ?><a class="facebook-bg" href="<?php echo esc_url( get_field( 'facebook' ) ); ?>"><i class="fa fa-facebook"></i></a><?php endif; ?> 
                </li>                       
                <li> 
                  <?php if ( get_field( 'twitter' ) ) : ?><a class="twitter-bg" href="<?php echo esc_url( get_field( 'twitter' ) ); ?>"><i class="fa fa-twitter"></i></a><?php endif; ?> 
                </li>                       
                <li> 
                  <?php if ( get_field( 'instagram' ) ) : ?><a class="pinterest-bg" href="<?php echo esc_url( get_field( 'instagram' ) ); ?>"><i class="fa fa-instagram"></i></a><?php endif; ?> 
                </li>                       
                <li> 
                  <?php if ( get_field( 'linkedin' ) ) : ?><a class="linkedin-bg" href="<?php echo esc_url( get_field( 'linkedin' ) ); ?>"><i class="fa fa-linkedin"></i></a><?php endif; ?> 
                </li>                       
              </ul>                     
            </div>                   
          </div>                 
        </div>               
        <div class="agent-biography"> 
          <h3 class="heading-2"><?php _e( 'Biografia | Resumo', 'pam' ); ?></h3> 
          <?php the_content(); ?> 



          <br> 
        </div>               
      </div>             
      <div class="col-lg-4"> 
        <?php get_sidebar( 'corretor' ); ?>               
      </div>             
    </div>           
  </div>         
</div>       


<?php get_footer(); ?>