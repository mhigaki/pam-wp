<div class="featured-properties content-area-9"> 
      <div class="container"> 
        <!-- Main title -->         
        <div class="main-title"> 
          <h1><?php echo get_theme_mod( 'pam_sc_features_main_title_h1', __( 'What are you looking for?', 'pam' ) ); ?></h1> 
          <p><?php echo get_theme_mod( 'pam_sc_features_main_title_p', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor.', 'pam' ) ); ?></p> 
        </div>         
        <?php
      $properties_query_args = array(
        'post_type' => 'properties',
        'posts_per_page' => 5,
        'order' => 'ASC',
        'orderby' => 'date'
      )
    ?><?php $properties_query = new WP_Query( $properties_query_args ); ?><?php if ( $properties_query->have_posts() ) : ?><div class="slick-slider-area"> 
          <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'> 
            <?php while ( $properties_query->have_posts() ) : $properties_query->the_post(); ?><?php PG_Helper::rememberShownPost(); ?><div <?php post_class( 'slick-slide-item' ); ?> id="post-<?php the_ID(); ?>"> 
              <div class="property-box"> 
                <div class="property-thumbnail"> 
                  <a href="<?php echo esc_url( get_permalink() ); ?>" class="property-img"> <div class="listing-badges"> 
                      <?php $terms = get_the_terms( get_the_ID(), 'properties_status' ) ?><?php if( !empty( $terms ) ) : ?><?php $term_i = 0; ?><?php foreach( $terms as $term ) : ?><?php if( $term_i == 0 ) : ?><span class="featured"><?php echo $term->name; ?></span><?php endif; ?><?php $term_i++; ?><?php endforeach; ?><?php endif; ?> 
                    </div> <div class="price-ratings-box"> 
                      <p class="price"><?php echo get_field( 'preco' ); ?></p> 
                      <div class="ratings"><?php echo get_field( 'rattings' ); ?></div>                       
                    </div><?php echo PG_Image::getPostImage( null, 'large', array(
                        'class' => 'd-block w-100'
                    ), 'both', null ) ?> </a> 
                </div>                 
                <div class="detail"> 
                  <h1 class="title"> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_taxonomies( array()); ?></a> </h1> 
                  <?php if ( get_field( 'endereco' ) ) : ?><div class="location"> 
                    <a href="<?php echo esc_url( get_permalink() ); ?>"> <i class="fa fa-map-marker"></i><?php echo get_field( 'endereco' ); ?></a> 
                  </div><?php endif; ?>                   
                  <ul class="facilities-list clearfix"> 
                    <li> 
                      <i class="flaticon-furniture"></i><?php echo get_post_meta( get_the_ID(), 'informacoes_planta_quartos', true ); ?> 
                    </li>                     
                    <li> 
                      <i class="flaticon-holidays"></i><?php echo get_field( 'informacoes_planta_banheiros' ); ?> 
                    </li>                     
                    <li> 
                      <i class="flaticon-square"></i><?php echo get_field( 'informacoes_planta_area' ); ?> 
                    </li>                     
                    <li> 
                      <i class="flaticon-vehicle"></i><?php echo get_field( 'informacoes_planta_garagem' ); ?> 
                    </li>                     
                  </ul>                   
                </div>                 
                <div class="footer clearfix"> 
                  <div class="pull-left days"> 
                    <p><i class="flaticon-time"></i><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' atrás'; ?></p>
                  </div>                   
                                     
                </div>                 
              </div>               
            </div><?php endwhile; ?><?php wp_reset_postdata(); ?>             
                         
                         
                         
                         
                         
          </div>           
          <div class="slick-prev slick-arrow-buton"> 
            <i class="fa fa-angle-left"></i> 
          </div>           
          <div class="slick-next slick-arrow-buton"> 
            <i class="fa fa-angle-right"></i> 
          </div>           
        </div><?php else : ?><p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p><?php endif; ?>         
      </div>       
    </div>