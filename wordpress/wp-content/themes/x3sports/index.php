<?php 
/*
Template Name: Homepage
*/
get_header(); ?>

		<section role="main">
			<a href="<?php echo get_page_link(48); ?>" id="free-class" title="Book my free class now >">Book my free class now ></a>
			<div class="containerOuter">
				<div class="container">
					<div class="iosSliderContainer">
						<div class="iosSlider">
							<div class="slider">
								<div class="item kickboxing" style="background-image:url('<?php echo get('kickboxing_hero_image') ?>')">
									<div class="text">
										<h3>"I'm incomplete without it."</h3>
										<p>Lost: 14 inches. Gained: Strength, endurance, a new life.</p>
										<a href="<?php echo get_page_link(57); ?>#<?php echo( basename(get_permalink(2639)) ); ?>" title="Read my story">Read my story</a>
									</div><!--text-->
								</div><!--fasttrack-->
								<div class="item fasttrack" style="background-image:url('<?php echo get('fast_track_hero_image') ?>')">
									<div class="text">
										<h3>"The camaraderie keeps me motivated."</h3>
										<p>Lost: 30 lbs. Gained: Lean muscle.</p>
										<a href="<?php echo get_page_link(57); ?>#<?php echo( basename(get_permalink(2650)) ); ?>" title="Read my story">Read my story</a>
									</div><!--text-->
								</div>
								<div class="item mma" style="background-image:url('<?php echo get('mma_hero_image') ?>')">
									<div class="text">
										<h3>"I could feel the family atmosphere and loved it."</h3>
										<p>Lost: Hard times. Gained: Celebrity status as a UFA fighter.</p>
										<a href="<?php echo get_page_link(57); ?>#<?php echo( basename(get_permalink(2656)) ); ?>" title="Read my story">Read my story</a>
									</div><!--text-->
								</div>
								<div class="item powertrack" style="background-image:url('<?php echo get('power_track_hero_image') ?>')">
									<div class="text">
										<h3>"X3 delivered fit and more."</h3>
										<p>Lost: The body my wife married. Gained: A body my wife can be proud of.</p>
										<a href="<?php echo get_page_link(57); ?>#<?php echo( basename(get_permalink(2666)) ); ?>" title="Read my story">Read my story</a>
									</div><!--text-->
								</div>
								<div class="item boxing" style="background-image:url('<?php echo get('boxing_hero_image') ?>')">
									<div class="text">
										<h3>"I feel awesome every time I am done with my routine."</h3>
										<p>Lost: My fear. Gained: Strength and balance to cope with muscular dystrophy.</p>
										<a href="<?php echo get_page_link(57); ?>#<?php echo( basename(get_permalink(2673)) ); ?>" title="Read my story">Read my story</a>
									</div><!--text-->
								</div>
								<div class="item bjj" style="background-image:url('<?php echo get('brazilian_jiu_jitsu_hero_image') ?>')">
									<div class="text">
										<h3>"X3 is my life now."</h3>
										<p>Lost: 40 lbs. Gained: A home away from home.</p>
										<a href="<?php echo get_page_link(57); ?>#<?php echo( basename(get_permalink(2676)) ); ?>" title="Read my story">Read my story</a>
									</div><!--text-->
								</div>
								<div class="item yoga" style="background-image:url('<?php echo get('yoga_hero_image') ?>')">
									<div class="text">
										<h3>"Yoga has provided me with such a sense of strength."</h3>
										<p>Lost: My noodle arms. Gained: Muscles I never knew I had.</p>
										<a href="<?php echo get_page_link(57); ?>#<?php echo( basename(get_permalink(2681)) ); ?>" title="Read my story">Read my story</a>
									</div><!--text-->
								</div>
								<div class="item youth" style="background-image:url('<?php echo get('youth_hero_image') ?>')">
									<div class="text">
										<h3>"X3's service is no less than an A+."</h3>
										<p>Lost: Unathleticism. Gained: Silver medal in the 100 & 200 meter dash.</p>
										<a href="<?php echo get_page_link(57); ?>#<?php echo( basename(get_permalink(2684)) ); ?>" title="Read my story">Read my story</a>
									</div><!--text-->
								</div>
								<div class="item muaythai" style="background-image:url('<?php echo get('muay_thai_hero_image') ?>')">
									<div class="text">
										<h3>"I'm in the best shape of my life."</h3>
										<p>Lost: 20 lbs. Gained: Self-discipline.</p>
										<a href="<?php echo get_page_link(57); ?>#<?php echo( basename(get_permalink(2687)) ); ?>" title="Read my story">Read my story</a>
									</div><!--text-->
								</div>
							</div><!--slider-->
						</div><!--iosSlider-->
					</div><!--iosSliderContainer-->
				</div><!--container-->
			</div><!--containerOuter-->
			<div class="slider-controls">
				<ul>
					<li class="active">Kickboxing</li>
					<li>Fast Track</li>
					<li>MMA</li>
					<li>Power Track</li>
					<li>Boxing</li>
					<li>Brazilian Jiu Jitsu</li>
					<li>Yoga</li>
					<li>Youth</li>
					<li>Muay Thai</li>
					<li>&nbsp;</li>
				</ul>
				<ol>
					<li>Previous</li>
					<li>Next</li>
				</ol>
			</div><!--slider-controls-->
			<div id="x3-exp" class="social">
				<div class="content">
				
<?php global $post;
$args = array( 'posts_per_page' => -1, 'category' => 3 ); $myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); 


if (get('hide_from_homepage') == "no") {
	
	//INSTAGRAM
	if (get('item_source', 1, 1, 0, $post->ID) == "Instagram") { ?>
	
						<div>
							<div class="photo">
								<img src="<?php echo get_image('photo',1,1,0,$post->ID) ?>" alt="">
							</div><!--photo-->
							<div class="text icon instagram">
								<h3><?php echo get('full_name',1,1,0,$post->ID) ?> <span>@<?php echo get('username',1,1,0,$post->ID) ?></span></h3>
								<?php the_content(); ?>
							</div><!--text-->
						</div><!--item-->
	
	
	<?php } 
	
	//FACEBOOK
	else if (get('item_source', 1, 1, 0, $post->ID) == "Facebook") { ?>
	
						<div>
				<?php if (get_image('photo',1,1,0,$post->ID) != '') { ?>					
							<div class="photo">
								<img src="<?php echo get_image('photo',1,1,0,$post->ID) ?>" alt="">
						</div><!--photo-->
				<?php } ?>					
							<div class="text icon facebook">
								<h3><?php echo get('full_name',1,1,0,$post->ID) ?></h3>
								<?php the_content(); ?>
							</div><!--text-->
						</div><!--item-->
	
	
	<?php }
	
	//TWITTER
	else if (get('item_source', 1, 1, 0, $post->ID) == "Twitter") { ?>
	
						<div>
				<?php if (get_image('photo',1,1,0,$post->ID) != '') { ?>					
							<div class="photo">
								<img src="<?php echo get_image('photo',1,1,0,$post->ID) ?>" alt="">
						</div><!--photo-->
				<?php } ?>					
							<div class="text icon twitter">
								<h3><?php echo get('full_name',1,1,0,$post->ID) ?> <span>@<?php echo get('username',1,1,0,$post->ID) ?></span></h3>
								<?php the_content(); ?>
							</div><!--text-->
						</div><!--item-->
	
	
	<?php } 
	
	//REVIEW
	else if (get('item_source', 1, 1, 0, $post->ID) == "Review") { ?>
	
						<div>
							<div class="text yelp">
								<div class="review <?php if (get_image('user_icon',1,1,0,$post->ID) != '') { ?>with-icon<?php } ?>">
									<span>
				<?php if (get('star_rating',1,1,0,$post->ID) == 1) { ?>					
										<img src="/assets/images/x3-exp-star.png" alt="">
				<?php } else if (get('star_rating',1,1,0,$post->ID) == 1.5) { ?>					
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star-half.png" alt="">												
				<?php } else if (get('star_rating',1,1,0,$post->ID) == 2) { ?>					
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">
				<?php } else if (get('star_rating',1,1,0,$post->ID) == 2.5) { ?>					
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">									
										<img src="/assets/images/x3-exp-star-half.png" alt="">												
				<?php } else if (get('star_rating',1,1,0,$post->ID) == 3) { ?>					
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">									
				<?php } else if (get('star_rating',1,1,0,$post->ID) == 3.5) { ?>					
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">									
										<img src="/assets/images/x3-exp-star-half.png" alt="">												
				<?php } else if (get('star_rating',1,1,0,$post->ID) == 4) { ?>					
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">																		
				<?php } else if (get('star_rating',1,1,0,$post->ID) == 4.5) { ?>					
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">									
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">																		
										<img src="/assets/images/x3-exp-star-half.png" alt="">												
				<?php } else { ?>					
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">
										<img src="/assets/images/x3-exp-star.png" alt="">							
				<?php } ?>
									</span>
									<h4><?php echo get('full_name',1,1,0,$post->ID) ?></h4>
				<?php if (get('review_title',1,1,0,$post->ID) != '') { ?>					
									<h3><?php echo get('review_title',1,1,0,$post->ID) ?></h3>
				<?php } ?>
									<?php the_content(); ?>
				<?php if (get('review_source',1,1,0,$post->ID) != '') { ?>					
									<p class="source"><?php echo get('review_source',1,1,0,$post->ID) ?></p>
				<?php } ?>								
				<?php if (get_image('user_icon',1,1,0,$post->ID) != '') { ?>					
									<img src="<?php echo get_image('user_icon',1,1,0,$post->ID) ?>" alt="">
				<?php } ?>									
								</div><!--review-->						
							</div><!--text-->
						</div><!--item-->
	
	
	<?php } //end source boolean
	
} //end hide_from_homepage check

endforeach; wp_reset_postdata(); ?>




	
				</div><!--content-->
				<a href="<?php echo get_page_link(12); ?>" title="See More Buzz About X3">See More Buzz About X3 <span>&rarr;</span></a>
			</div><!--x3-exp-->
			<div id="callout1">
				<div class="copy">
					<ul>
						<li>24 classes offered per day means no excuses.</li>
						<li>900 calories burned on average in our 55 minute classes.</li>
						<li>Goals crushed: every single one of them.</li>
					</ul>
				</div><!--copy-->
				<img src="/assets/images/home-callout1-text.png" class="large" alt="">
				<img src="/assets/images/home-callout1-text-small.png" class="small" alt="">
			</div><!--callout1-->
			<div id="blog-posts">
<ul>
<?php $posts = get_posts(array('category' => 1, 'posts_per_page' => 3)); 
  foreach ( $posts as $post ) {	setup_postdata( $post );  ?>

<li>
<h4><a href="<?php the_permalink(); ?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></a></h4>
<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>" title="Read more">Read more</a>
</li> 

<?php } 
wp_reset_postdata(); ?>

				</ul>
			</div><!--blog-posts-->
			<div id="callout2">
				<div class="content">
					<div>
						<h2>Need motivation?</h2>
						<h3>Get Our Expert Guide:<br>6 Simple Tips<br>to Improve Your Motivation.</h3>
						<a href="<?php echo get_page_link(93); ?>" title="Download now">Download now <span>&rarr;</span></a>
					</div>
				</div><!--content-->
				<div class="bg"></div>
			</div><!--callout2-->
		</section>
		
<?php get_footer(); ?>