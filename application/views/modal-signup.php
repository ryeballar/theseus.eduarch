<div id="modal-signup" class="small reveal-modal" data-reveal style="position: relative; top: -1em">
	<h4>Sign Up</h4><hr style="width: 80%">
	<form data-action="user/signup" method="post" accept-charset="utf-8">

		<div class="field">
			<label class="label">First Name</label>
			<input type="email" name="user[first_name]" placeholder="Enter First Name (50 Char MAX)" required data-ajax maxlength="50" />
		</div>

		<div class="field">
			<label class="label">Last Name</label>
			<input type="email" name="user[last_name]" placeholder="Enter Last Name(50 Char MAX)" required data-ajax maxlength="50" />
		</div>

		<div class="field">
			<label class="label">E-mail</label>
			<input type="email" name="user[email]" placeholder="your-email-address@email.com (40 Char MAX)" required data-ajax maxlength="40" />
		</div>

		<div class="field">
			<label class="label">Password</label>
			<input type="password" name="user[password]" placeholder="your-password (5 Char Min - 32 Char MAX)" required data-ajax maxlength="32" />
		</div>

		<div class="field">
			<label class="label">Re-type Pasword</label>
			<input type="password" name="retype-password" placeholder="retype-your-password" data-ajax maxlength="32" />
		</div>

		<button type="submit">Sign Up</button>
	</form>
	<a class="close-reveal-modal">&#215;</a>
</div>