<?php get_header(); ?>

<div class="blog-banner"> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-lg-12"> 
        <h2><?php wp_title( '' ); ?></h2> 
        <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'categories', true, 'Home'); ?><?php if( !empty( $breadcrumbs ) ) : ?><ul class="breadcrumbs" cms-breadcrumbs-home cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item=".active" cms-breadcrumbs-last-item-name=".active"> 
          <li><?php for( $breadcrumbs_i = 0; $breadcrumbs_i < count( $breadcrumbs ) - 1; $breadcrumbs_i++) : ?><?php $breadcrumb = $breadcrumbs[ $breadcrumbs_i ]; ?><a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>" rel="nofollow noreferrer noopener"><?php echo $breadcrumb[ 'name' ]; ?></a><?php if( $breadcrumbs_i < count( $breadcrumbs ) - 1 ) : ?><span>/</span><?php endif; ?><?php endfor; ?></li>                 
          <?php $breadcrumb = $breadcrumbs[ count( $breadcrumbs ) - 1 ]; ?><li class="active"><?php echo $breadcrumb[ 'name' ]; ?></li>                 
        </ul><?php endif; ?>               
      </div>             
    </div>           
  </div>         
</div>       
<div class="blog-body content-area"> 
  <div class="container"> 
    <div class="row"> 
      <?php
                      $pam_blog_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'paged' => get_query_var( 'paged' ) ?: 1,
                        'order' => 'DESC',
                        'orderby' => 'date'
                      )
                  ?><?php $pam_blog = new WP_Query( $pam_blog_args ); ?><?php if ( $pam_blog->have_posts() ) : ?><div class="col-lg-8 col-md-12"> 
        <?php while ( $pam_blog->have_posts() ) : $pam_blog->the_post(); ?><div <?php post_class( 'blog-1' ); ?> id="post-<?php the_ID(); ?>"> 
          <div class="blog-photo"> 
            <?php echo PG_Image::getPostImage( null, array(0,400),true, array(
                                            'class' => 'img-fluid',
                                            'sizes' => 'max-width(320px) 85vw, max-width(640px) 510px, max-width(768px) 90vw, max-width(1024px) 70vw, max-width(1280px) 730px, 730px'
                                      ), null, null ) ?> 
            <div class="profile-user"> 
              <?php echo get_avatar( get_the_author_meta( 'ID' ), '45' ); ?> 
            </div>                   
          </div>                 
          <div class="detail"> 
            <?php get_template_part( 'template-parts/post/post-meta' ); ?>                   
            <h3> <a href="<?php echo esc_url( get_permalink() ); ?>" rel="nofollow noreferrer noopener"><?php the_title(); ?></a> </h3> 
            <p><?php echo wp_trim_words( get_the_content(), 20, ' ... ' ); ?></p> 
            <?php if ( !is_singular() ) : ?><a class="read-more" href="<?php echo esc_url( get_permalink() ); ?>" rel="nofollow noreferrer noopener"><?php _e( 'Saiba Mais', 'pam' ); ?></a><?php endif; ?> 
          </div>                 
        </div><?php endwhile; ?><?php wp_reset_postdata(); ?>               
        <div class="pagination-box hidden-mb-45 text-center"> 
          <nav aria-label="Page navigation example"> 
            <?php if ( PG_Pagination::isPaginated() ) : ?><ul class="pagination"> 
              <li class="page-item"> 
                <?php if( PG_Pagination::getCurrentPage() > 1 ) : ?><a class="page-link" <?php echo PG_Pagination::getPreviousHrefAttribute( $pam_blog ); ?>><i class="fa fa-angle-left"></i></a><?php endif; ?> 
              </li>                     
              <?php for( $page_num = 1; $page_num <= PG_Pagination::getMaxPages( $pam_blog ); $page_num++) : ?><li class="<?php if( $page_num == PG_Pagination::getCurrentPage() ) echo 'active'; ?> page-item"> 
                <a class="page-link" href="<?php echo esc_url( get_pagenum_link( $page_num ) ) ?>"><?php echo $page_num ?></a> 
              </li><?php endfor; ?>                     
              <li class="page-item"> 
                <?php if( PG_Pagination::getCurrentPage() < PG_Pagination::getMaxPages( $pam_blog ) ) : ?><a class="page-link" <?php echo PG_Pagination::getNextHrefAttribute( $pam_blog ); ?>><i class="fa fa-angle-right"></i></a><?php endif; ?> 
              </li>                     
            </ul><?php endif; ?>                   
          </nav>                 
        </div>               
      </div><?php endif; ?>             
      <div class="col-lg-4 col-md-12"> 
        <?php get_sidebar( 'right' ); ?>               
      </div>             
    </div>           
  </div>         
</div>       


<?php get_footer(); ?>