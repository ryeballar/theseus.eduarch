<section class="row signup">
	<section class="medium-6 column form-eduarch">
		<h3>Complete your account details</h3>
		<p>Already signed up? <a href="login">Login</a> here</p>
		<div id="fb-root"></div>

		<form action="signup" method="post" accept-charset="utf-8" data-validate>
			<section class="row">
				<section class="medium-6 column field">
					<label class="label" for="first_name">First Name</label>
					<input type="text" placeholder="50 character max" id="first_name" name="user[first_name]" maxlength="50" required autofocus 
						value="<?php echo set_value('user[first_name]', '') ?>" />
					<?php echo form_error('user[first_name]', '<small class="error">', '</small>') ?>
				</section>

				<section class="medium-6 column field">
					<label class="label" for="last_name">Last Name</label>
					<input type="text" placeholder="50 character max" id="last_name" name="user[last_name]" maxlength="50" required 
						value="<?php echo set_value('user[last_name]', '') ?>" />
					<?php echo form_error('user[last_name]', '<small class="error">', '</small>') ?>
				</section>
			</section>

			<section class="field">
				<label class="label" for="email">Email Address</label>
				<input type="email" placeholder="i.e. rick@gmail.com" id="email" name="user[email]" maxlength="40" required
					value="<?php echo set_value('user[email]', '') ?>" />
				<?php echo form_error('user[email]', '<small class="error">', '</small>') ?>
			</section>

			<section class="field">
				<label class="label" for="password">Password</label>
				<input type="password" placeholder="Enter Password" id="password" name="user[password]" maxlength="32" required />
				<?php echo form_error('user[password]', '<small class="error">', '</small>') ?>
			</section>

			<section class="field">
				<label class="label" for="retyped_password">Re-type Password</label>
				<input type="password" placeholder="Re-type Password" id="retyped_password" name="retyped_password" maxlength="32" required />
				<?php echo form_error('retyped_password', '<small class="error">', '</small>') ?>
			</section>

			<section class="maxed-width row">
				<section class="small-6 medium-12 column">
					<button class="expand" type="submit">
						<span class="show-for-medium-up">Signup with Email</span>
						<span class="show-for-small-only">Email Signup</span>
					</button>
				</section>
				<section class="small-6 column show-for-small-only">
					<a class="expand button fb-login">Facebook Signup</a>
				</section>
			</section>
		</form>
	</section>
	<section class="medium-6 column form-fb show-for-medium-up">
		<hr class="show-for-small-only">
		<h3>Facebook Integration</h3>
		<p>Connect your social media experience
			with EduArch</p>
		<section class="text-center">
			<span class="fi-social-facebook"></span>
		</section>
		<a class="expand button fb-login">Sign Up with Facebook</a>
	</section>
</section>