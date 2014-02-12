<section class="row signup">
	<section class="medium-6 column form-eduarch">
		<h3>Complete your account details</h3>
		<p>Already signed up? <a href="login">Login</a> here</p>

		<form action="signup" method="post" accept-charset="utf-8">
			<section class="row">
				<section class="medium-6 column">
					<label class="label">First Name</label>
					<input type="text" placeholder="50 character max" name="user[first_name]" maxlength="50" required autofocus 
						value="<?php echo set_value('user[first_name]', '') ?>" />
					<?php form_error('user[first_name]', '<small class="error"', '</small>') ?>
				</section>

				<section class="medium-6 column">
					<label class="label">Last Name</label>
					<input type="text" placeholder="50 character max" name="user[last_name]" maxlength="50" required 
						value="<?php echo set_value('user[last_name]', '') ?>" />
					<?php form_error('user[last_name]', '<small class="error"', '</small>') ?>
				</section>
			</section>

			<section>
				<label class="label">Email Address</label>
				<input type="email" placeholder="i.e. rick@gmail.com" name="user[email]" maxlength="40" required
					value="<?php echo set_value('user[email]', '') ?>" />
				<?php form_error('user[email]', '<small class="error"', '</small>') ?>
			</section>

			<section>
				<label class="label">Password</label>
				<input type="password" placeholder="Enter Password" name="user[password]" maxlength="32" required />
				<?php form_error('user[password]', '<small class="error"', '</small>') ?>
			</section>

			<section>
				<label class="label">Re-type Password</label>
				<input type="password" placeholder="Re-type Password" name="retyped_password" maxlength="32" required />
				<?php form_error('retyped_password', '<small class="error"', '</small>') ?>
			</section>

			<button class="expand" type="submit">Sign Up With Your Email</button>
		</form>
	</section>
	<section class="medium-6 column form-fb">
		<h3>Facebook Integration</h3>
		<p>Connect your social media experience
			with EduArch</p>
		<section class="text-center">
			<span class="fi-social-facebook"></span>
		</section>
		<a class="expand button">Sign Up with Facebook</a>
	</section>
</section>