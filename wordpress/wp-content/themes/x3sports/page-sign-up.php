<?php
/*
Template Name: Sign Up
*/
get_header(); ?>

		<section role="main" class="schedule signup">
			<div class="two-column">
				<h1>Free Class Sign Up</h1>			
				<article class="loading">
					<div class="post">

						<?php if (have_posts()): while (have_posts()) : the_post(); the_content(); edit_post_link('[Edit]', '<p>', '</p>'); endwhile; endif; ?>

					</div><!--post-->
					<p id="confirmation">Thanks for your interest in X3 Sports!<br /><br />Your free class request has been submitted, and our team will be in touch to confirm your booking. We look forward to seeing you soon.</p>
					<form method="post" action="http://google.com">
						<div class="user-info">
							<ul>
								<li>
									<label for="sign-up-first-name">First Name</label>
									<input type="text" id="sign-up-first-name" placeholder="First Name">
								</li>
								<li>
									<label for="sign-up-last-name">Last Name</label>
									<input type="text" id="sign-up-last-name" placeholder="Last Name">
								</li>
								<li>
									<label for="sign-up-email">Email *</label>
									<input type="text" id="sign-up-email" placeholder="Email *">
								</li>
								<li>
									<label for="sign-up-phone">Phone *</label>
									<input type="text" id="sign-up-phone" placeholder="Phone *">
								</li>
								<li>
									<label for="sign-up-location">Select Location</label>
									<select id="sign-up-location">
										<option value="">Select Location</option>
									</select>
								</li>
								<li>
									<label for="sign-up-class">Class Preference</label>
									<select id="sign-up-class">
										<option value="">Class Preference</option>
									</select>
								</li>
								<li>
									<label for="sign-up-source">How did you hear about us?</label>
									<select id="sign-up-source">
										<option value="0">How did you hear about us?</option>
                  </select>
								</li>
								<li>
									<label for="sign-up-goals">Goals (add if under 18)</label>
									<textarea id="sign-up-goals" placeholder="Goals (add if under 18)"></textarea>
								</li>
								<li>
									<input name="schedule-method" type="radio" value="Contact me to schedule" id="schedule-method-contact" checked="checked">
									<label for="schedule-method-contact">Contact me to schedule</label>
								</li>
								<li>
									<input name="schedule-method" type="radio" value="Reserve spot myself" id="schedule-method-self">
									<label for="schedule-method-self">Reserve spot myself</label>
								</li>
							</ul>
							<mark>* Phone and email are for scheduling purposes. Your privacy is important to us.</mark>							
							<h2>Which class would you like to reserve for your free class? </h2>
							<p>Please select a date and time below.</p>
						</div><!--user-info-->
						<div id="days-list"></div>

						<script id="schedule-template" type="text/x-handlebars-template">
						{{#each .}}
						<div class="day-list {{on}}" data-week="{{week}}">
							<h3>{{title}}</h3>
							<ol>
								{{#each entries}}
								<li class="{{available}}">
									<input name="ScheduleId" type="radio" value="{{ScheduleId}}" id="{{ScheduleId}}" data-location="{{ClubId}}">
									<label for="{{ScheduleId}}">{{StartTime}} - {{EndTime}}</label>
								</li>
								{{/each}}
							</ol>
							<p>Sorry, there are no more classes available today based on your selected choices. Note that free sessions must be booked 4 hours in advance. Please modify your selection or call the location to inquire about last minute availability.</p>
						</div>
						{{/each}}
						</script>

						<p class="cta">Please select a class and location preference to reserve a spot yourself.</p>

						<ul class="days-nav">
							<li><a href="#" data-week="thisweek" class="bottom">Previous 7 Days</a></li>
							<li><a href="#" data-week="nextweek" class="bottom">Next 7 Days</a></li>
						</ul>
						<h4><input type="submit" value="Sign Up For My Free Class"></h4>
						<p>Some information appears to be missing. Please update the needed fields and try again.</p>
						<mark>* Phone and email are for scheduling purposes. Your privacy is important to us.</mark>
					</form>
				</article>
			</div><!--two-column-->
		</section>

<?php get_footer(); ?>
