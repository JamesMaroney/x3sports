<?php get_header(); ?>


		<section role="main" class="blog category">
			<a href="<?php echo get_page_link(48); ?>" id="free-class" title="Book my free class now!">Book my free class now!</a>
			<div class="two-column">
				<article>

<?php 

if (is_category(1)) { ?>
			<h1>Blog</h1>

<?php } else if (is_category()) { ?>
			<h1>Posts in category &ldquo;<?php $category = get_the_category(); echo $category[0]->cat_name; ?>&rdquo;</h1>

<?php } elseif (is_search()) { ?>
			<h1>Items containing &ldquo;<?php echo $s; ?>&rdquo;</h1>

<?php } elseif (is_tag()) { ?>
			<h1>Posts tagged &ldquo;<?php single_tag_title(); ?>&rdquo;</h1>

<?php }



if (have_posts()): while (have_posts()) : the_post(); ?>

					<div class="post">
						<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php if ($post->post_type == "post") { ?>
						<h6><?php the_time('F j, Y'); ?></h6>					

<?php } 
						the_excerpt(); ?>		
					</div><!--post-->
					
	
<?php endwhile; ?>

				<ul class="post-nav">
					<li><?php next_posts_link('Older Posts') ?></li>
					<li><?php previous_posts_link('Newer Posts') ?></li>
				</ul>


<?php else: ?>

					<div class="post">
						<p>Sorry, but no results were found. Please try a different search.</p>
					</div><!--post-->


<?php endif; ?>					
				</article>
				<aside>
					<div class="callout signup">

						<h4>Free Class Signup</h4>
						<form role="search" method="get" action="<?php echo get_page_link(48); ?>">
							<ul>
								<li>
									<label for="signup-firstname">First Name</label>
									<input type="text" value="" name="sign-up-first-name" id="signup-firstname">
								</li>
								<li>
									<label for="lastname">Last Name</label>
									<input type="text" value="" name="sign-up-last-name" id="signup-lastname">
								</li>
								<li>
									<label for="email">Email</label>
									<input type="text" value="" name="sign-up-email" id="signup-email">
								</li>
								<li>
									<label for="phone">Phone</label>
									<input type="text" value="" name="sign-up-phone" id="signup-phone">
								</li>
							</ul>
							<div>
								<input type="submit" value="Book My Free Class">
							</div>
						</form>
						<p>Your privacy is important to us. Phone number and email will only be used for scheduling purposes.</p>


					</div><!--callout-->
					<div class="callout subscribe">
						<?php echo do_shortcode('[jetpack_subscription_form]'); ?>
					</div><!--callout-->
					<div class="callout recent">
						<h4>Recent Posts</h4>

<ul>
<?php $posts = get_posts(array('category' => 1, 'posts_per_page' => 4)); 
  foreach ( $posts as $post ) {	setup_postdata( $post );  ?>

<li><a href="<?php the_permalink(); ?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></a></li> 

<?php } 
wp_reset_postdata(); ?>
						</ul>
					</div><!--callout-->
				</aside>
			</div><!--two-column-->
		</section>


<?php get_footer(); ?>