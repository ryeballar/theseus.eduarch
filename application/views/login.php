<section class="row login">
	<section class="medium-6 column eduarch-login">
		<h3>Learn, Teach and Share</h3>
		<p>Experience work-based and tutorial-based classes now</p>
		<p>No Account Yet? <a href="signup">Sign Up</a> Now</p>
		<form action="login" method="post" accept-charset="utf-8" data-validate>
			<label class="label">Email</label>
			<section class="field">
				<input type="email" placeholder="i.e. rick@gmail.com" name="user[email]" maxlength="50" required autofocus 
					value="<?php echo set_value('user[email]', '') ?>" />
				<?php echo form_error('user[email]', '<small class="error">', '</small>') ?>
			</section>

			<label class="label">Password</label>
			<section class="field">
				<input type="password" placeholder="Enter Password" name="user[password]" maxlength="32" required 
					value="<?php echo set_value('user[password]', '') ?>" />
				<?php echo form_error('user[password]', '<small class="error">', '</small>') ?>
			</section>

			<section class="row" style="padding: 1.1em 0">
				<section class="medium-6 column">
					<input type="checkbox" /><span class="remember"> Remember Password?</span>
				</section>
				<section class="medium-6 column text-right">
					<a href="forgotpassword" class="forgot">Forgot Password?</a>
				</section>
			</section>

			<section class="maxed-width row">
				<section class="small-6 medium-12 column">
					<button type="submit" class="expand">
						<span class="show-for-medium-up">Login with Email</span>
						<span class="show-for-small-only">Email Login</span>
					</button>
				</section>
				<section class="small-6 column show-for-small-only">
					<a class="expand button">Facebok Login</a>
				</section>
			</section>
		</form>
	</section>
	<section class="medium-6 column fb-login hide-for-small">
		<h3>Facebook Integration</h3>
		<p>Connect your social media experience
			with EduArch</p>
		<section class="text-center">
			<span class="fi-social-facebook"></span>
		</section>
		<a class="expand button">Login with Facebook</a>
	</section>
</section>