<section class="row">
	<section class="medium-8 medium-centered column">
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

			<button type="submit">Sign Up</button>
		</form>
	</section>
</section>