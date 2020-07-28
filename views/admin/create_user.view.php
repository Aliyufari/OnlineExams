<?php 
	view('admin/includes/header'); 
?>	
		<div class="content">
			<h2>Create New Participant</h2>
			<p><small class="error"><?php isset($wrong) ? print($wrong) : ''; ?></small></p>
			<div class="form">
				<form action="/admin/create_user" method="POST">
					<div class="group">
						<div class="input-group">
							<input type="text" name="name" class="form-control" value="<?php isset($old['name']) ? print($old['name']) : ''; ?>" placeholder="Full Name">
							<p><small class="error"><?php isset($error['name']) ? print($error['name']) : ''; ?></small></p>
						</div>
						<div class="input-group">
							<input type="email" name="email" class="form-control" value="<?php isset($old['email']) ? print($old['email']) : ''; ?>" placeholder="Email Address">
							<p><small class="error"><?php isset($error['email']) ? print($error['email']) : ''; ?></small></p>
						</div>
					</div>
					<div class="group">
						<div class="input-group">
							<input type="text" name="username" class="form-control" value="<?php isset($old['username']) ? print($old['username']) : ''; ?>" placeholder="Username">
							<p><small class="error"><?php isset($error['username']) ? print($error['username']) : ''; ?></small></p>
						</div>
						<div class="input-group">
							<select name="gender" class="form-control">
								<option disabled="disabled">Select Gender</option>
								<option>Female</option>
								<option>Male</option>
							</select>
							<p><small class="error"><?php isset($error['gender']) ? print($error['gender']) : ''; ?></small></p>
						</div>
					</div>
					<div class="input-group">
						<input type="text" name="institution" class="form-control" value="<?php isset($old['institution']) ? print($old['institution']) : ''; ?>" placeholder="Institution">
						<p><small class="error"><?php isset($error['institution']) ? print($error['institution']) : ''; ?></small></p>
					</div>
					<div class="input-group">
						<input type="text" name="address" class="form-control" value="<?php isset($old['address']) ? print($old['address']) : ''; ?>" placeholder="Address">
						<p><small class="error"><?php isset($error['address']) ? print($error['address']) : ''; ?></small></p>
					</div>
					<div class="input-group">
						<input type="password" name="password" class="form-control" value="<?php isset($old['password']) ? print($old['password']) : ''; ?>" placeholder="Password">
						<p><small class="error"><?php isset($error['password']) ? print($error['password']) : ''; ?></small></p>
					</div>
					<div class="input-group submit">
						<button type="submit">Create</button>
					</div>
				</form>
			</div>
		</div>
<?php 
	view('admin/includes/footer') 
?>	
