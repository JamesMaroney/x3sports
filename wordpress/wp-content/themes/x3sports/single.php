<?php get_header(); ?>


		<section role="main" class="blog">
			<a href="<?php echo get_page_link(48); ?>" id="free-class" title="Book my free class now!">Book my free class now!</a>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="two-column">
				<article>
					<div class="metadata">
						<p><a href="<?php echo get_category_link(1); ?>">Back to Blog List</a></p>
						<h5>Blog</h5>
						<h1><?php the_title(); ?></h1>
						<h6><?php the_time('F j, Y'); ?></h6>
					</div><!--metadata-->
					<div class="post">
						<?php the_content();
						edit_post_link('[Edit]', '<p>', '</p>'); ?>
					</div><!--post-->

<?php if (has_tag()) { ?>
					<div class="details post-tags">
						<h6>Tags</h6>

						 <?php the_tags( ' ',' ','' ); ?>

					</div><!--details-->
<?php } ?>

<?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ?>
					<div class="details">
						<h6>Share Blog Post</h6>
						<?php ADDTOANY_SHARE_SAVE_KIT(); ?>
					</div><!--details-->
<?php } ?>
<?php endwhile; endif; ?>
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
