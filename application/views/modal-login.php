<div id="modal-login" class="small reveal-modal" data-reveal>
	<h4>Login</h4><hr style="width: 80%">
	<form data-action="user/login" method="post" accept-charset="utf-8">
		<div class="field">
			<label class="label">E-mail</label>
			<input type="email" name="user[email]" placeholder="your-email-address@email.com" required data-ajax />
		</div>

		<div class="field">
			<label class="label">Password</label>
			<input type="password" name="user[password]" placeholder="your-password" required data-ajax />
		</div>

		<button type="submit">Login</button>
	</form>
	<a class="close-reveal-modal">&#215;</a>
</div>