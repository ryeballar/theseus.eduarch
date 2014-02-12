<section class="row signup">
	<section class="medium-6 column form-eduarch">
		<h3>Complete your account details</h3>
		<p>Just finish the missing information below
			and you'll be on your way</p>

		<form action="signup" method="post" accept-charset="utf-8">
			<section class="row">
				<section class="medium-6 column">
					<label class="label">First Name</label>
					<input type="text" placeholder="50 character max" name="user[first_name]" maxlength="50" required autofocus />
				</section>

				<section class="medium-6 column">
					<label class="label">Last Name</label>
					<input type="text" placeholder="50 character max" name="user[last_name]" maxlength="50" required />
				</section>
			</section>

			<section>
				<label class="label">Email Address</label>
				<input type="email" placeholder="i.e. rick@gmail.com" name="user[email]" maxlength="40" required />
			</section>

			<section>
				<label class="label">Password</label>
				<input type="password" placeholder="Enter Password" name="user[password]" maxlength="32" required />
			</section>

			<section>
				<label class="label">Password</label>
				<input type="password" placeholder="Enter Password" name="user[password]" maxlength="32" required />
			</section>

			<section>
				<label class="label">Re-type Password</label>
				<input type="password" placeholder="Re-type Password" name="retype_password" maxlength="32" required />
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