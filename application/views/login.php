<section class="row login">
	<section class="medium-6 column eduarch-login">
		<h3>Start to Learn, Teach and Share</h3>
		<p>Experience work-based and tutorial-based classes now</p>
		<p>No Account Yet? <a href="signup">Sign Up</a> Now</p>
		<form action="login" method="post" accept-charset="utf-8" style="padding-top: 2.6em">
			<section class="field">
				<label class="label">Email</label>
				<input type="email" placeholder="i.e. rick@gmail.com" name="user[email]" maxlength="50" required autofocus 
					value="<?php echo set_value('user[email]', '') ?>" />
				<?php echo form_error('user[email]', '<small class="error">', '</small>') ?>
			</section>

			<section class="field">
				<label class="label">Password</label>
				<input type="password" placeholder="Enter Password" name="user[password]" maxlength="32" required 
					value="<?php echo set_value('user[password]', '') ?>" />
				<?php echo form_error('user[email]', '<small class="error">', '</small>') ?>
			</section>

			<section class="row" style="padding: 1.1em 0">
				<section class="medium-6 column">
					<input type="checkbox" /><span class="remember"> Remember Password?</span>
				</section>
				<section class="medium-6 column text-right">
					<a href="forgotpassword" class="forgot">Forgot Password?</a>
				</section>
			</section>

			<button type="submit" class="expand">Login with Email</button>
		</form>
	</section>
	<section class="medium-6 column fb-login">
		<h3>Facebook Integration</h3>
		<p>Connect your social media experience
			with EduArch</p>
		<section class="text-center">
			<span class="fi-social-facebook"></span>
		</section>
		<a class="expand button">Login with Facebook</a>
	</section>
</section>