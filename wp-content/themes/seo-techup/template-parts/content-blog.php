<?php
$techup_enable_blog_section = get_theme_mod( 'techup_enable_blog_section', true );
$techup_blog_cat 		= get_theme_mod( 'techup_blog_cat', 'uncategorized' );
if($techup_enable_blog_section == true) 
{
	$techup_blog_title 	= get_theme_mod( 'techup_blog_title', esc_html__( 'Blog','seo-techup'));
	$techup_blog_subtitle 	= get_theme_mod( 'techup_blog_subtitle' );
	$techup_rm_button_label 	= get_theme_mod( 'techup_rm_button_label', esc_html__( 'Read More','seo-techup'));
	$techup_blog_count 	 = apply_filters( 'techup_blog_count', 3 );
?>
    <!-- blog end-->
<section class="blog-sec creativo-blog">
        <div class="container">
          <div class="section-heading text-center">
			<?php if($techup_blog_subtitle) : ?>
				<span class="sm-title"><?php echo esc_html( $techup_blog_subtitle ); ?></span>
			<?php endif; ?>	
			<?php if($techup_blog_title) : ?>
				<h3 class="bg-title"><?php echo esc_html( $techup_blog_title ); ?></h3>  
			<?php endif; ?>			
          </div>
            <div class="row">
				<?php 
				if( !empty( $techup_blog_cat ) ) 
					{
					$blog_args = array(
						'post_type' 	 => 'post',
						'category_name'	 => esc_attr( $techup_blog_cat ),
						'posts_per_page' => absint( $techup_blog_count ),
					);

					$blog_query = new WP_Query( $blog_args );
					if( $blog_query->have_posts() ) 
					{
						while( $blog_query->have_posts() ) 
						{
							$blog_query->the_post();
							?>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <article class="blog-item">
                      <div class="post-inner">
                        <div class="inner-post">
                          <div class="post-cat">
                            <div class="posted-in">
                               <?php
										// everything available
										foreach((get_the_category()) as $category) { ?>
											<a href="<?php echo esc_url(get_category_link($category->cat_ID));?>" rel="category tag"><?php echo esc_html($category->cat_name . ' ');?></a>	 
										<?php } 
										?> 
                            </div>
                          </div>                
                          <div class="entry-header">
                            <h5 class="entry-title">
                              <a class="title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h5>
                          </div>
                        </div>
                        <div class="entry-meta">
                          <span class="posted-on">
                            <time class="entry-date published"><?php echo esc_html(get_the_date()); ?></time>
                          </span>
                          <span class="comment-num"> / <?php echo esc_html(get_comments_number(get_the_ID())); ?> Comments</span>
                            <a href="<?php the_permalink(); ?>" class="btn-details"><i class="fa fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </article>
                  </div>
                <?php
				}
			}
			wp_reset_postdata();
		}
		 ?>        
                 
            </div>
        </div>
    </section>
    <!-- blog end-->

<?php } ?>