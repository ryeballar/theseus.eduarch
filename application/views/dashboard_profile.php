<article class="row show-for-small-only"><section class="large-8 small-11 small-centered column">
	<header>PROFILE</header>
</section></article>

<section class="row"><section class="large-8 small-11 small-centered column img-profile">
	<header>Image</header>
	<ul class="inline-list">
		<li><a class="th"><img src="<?php echo $user['image'] ?>" id="image-profile" /></a></li>
		<li>
			<section class="input-image" data-ext="png|jpg|jpeg|gif" data-target="image-profile">
				<button class="tiny radius button">Choose File</button>
				<input type="file" name="userfile" accept="image/*" />
				<section>No Files Chosen</section>
			</section>
			<button class="tiny radius button save" style="margin-bottom: 0.5em">Save Changes</button>
		</li>
	</ul>
</section></section>

<section class="row"><section class="large-8 small-11 small-centered column">
	<header>
		Credentials
		<a class="right" data-reveal-id="edit-credentials">Edit Password</a>
	</header>

	<section class="row">
		<label class="small-5 medium-4 large-3 column">Email</label>
		<section class="small-7 medium-8 large-9 column"><?php echo $user['email'] ?></section>
	</section>

	<section class="row">
		<label class="small-5 medium-4 large-3 column">Password</label>
		<section class="small-7 medium-8 large-9 column">*****</section>
	</section>
</section></section>

<section class="row"><section class="large-8 small-11 small-centered column">
	<header>
		User Information
		<a class="right" data-reveal-id="edit-info">Edit Name</a>
	</header>

	<section class="row">
		<label class="small-5 medium-4 large-3 column">First Name</label>
		<section class="small-7 medium-8 large-9 column" id="lbl-firstname"><?php echo$user['first_name'] ?></section>
	</section>

	<section class="row">
		<label class="small-5 medium-4 large-3 column">Last Name</label>
		<section class="small-7 medium-8 large-9 column" id="lbl-lastname"><?php echo $user['last_name'] ?></section>
	</section>
</section></section>

<section class="row"><section class="large-8 small-11 small-centered column social">
	<header>Social</header>
	<section class="row">
		<section class="small-5 medium-4 large-3 column site"><a><span class="fi-social-facebook"></span><span class="continue">acebook</span></a></section>
		<section class="small-7 medium-8 large-9 column connection">
			<span>
			<?php if($user['facebook_id']): ?>
				Connected - <a>Disconnect</a>
			<?php else: ?>
				Not connected - <a>Connect</a>
			<?php endif ?>
			</span>
		</section>
	</section>
</section></section>

<section id="edit-credentials" class="small reveal-modal" data-reveal data-form="user/request_info">
	<h3>Credentials</h3><hr>
	
	<form action="user/edit_credentials" method="post" accept-charset="utf-8">
		<section class="field">
			<label class="label">Old Password</label>
			<input type="password" name="old_password" placeholder="Password" maxlength="32" />
		</section>

		<section class="field">
			<label class="label">New Password</label>
			<input type="password" name="user[password]" placeholder="Password" maxlength="32" />
		</section>

		<section class="field">
			<label class="label">Retype Password</label>
			<input type="password" name="retyped_password" placeholder="Password" maxlength="32" />
		</section>	

		<button type="submit" class="small button">Save Changes</button>
		<section class="message hide right"><span class="fi-check"></span>Transaction Successful</section>
	</form>

	<a class="close-reveal-modal">&#215;</a>
</section>

<section id="edit-info" class="small reveal-modal" data-reveal data-form="user/request_info">
	<h3>User Information</h3><hr>
	<form action="user/edit_info" method="post" accept-charset="utf-8">
		<section class="field">
			<label class="label" for="firstname">First Name</label>
			<input type="text" name="user[first_name]" placeholder="First Name" id="firstname" />
		</section>
		<section class="field">
			<label class="label" for="lastname">Last Name</label>
			<input type="text" name="user[last_name]" placeholder="Last Name" id="lastname" />
		</section>


		<button type="submit" class="small button">Save Changes</button>
		<section class="message hide right"><span class="fi-check"></span>Transaction Successful</section>
	</form>

	<a class="close-reveal-modal">&#215;</a>
</section>