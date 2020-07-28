<?php 
	view('admin/includes/header'); 
?>	
		<div class="content">
			<h2>Create New Course</h2>
			<p><small class="error"><?php isset($wrong) ? print($wrong) : ''; ?></small></p>
			<div class="form">
				<form action="/admin/create_course" method="POST">
					<div class="group">
						<div class="input-group">
							<input type="text" name="name" class="form-control" value="<?php isset($old['name']) ? print($old['name']) : ''; ?>" placeholder="Course Name">
							<p><small class="error"><?php isset($error['name']) ? print($error['name']) : ''; ?></small></p>
						</div>
						<div class="input-group">
							<input type="text" name="code" class="form-control" value="<?php isset($old['code']) ? print($old['code']) : ''; ?>" placeholder="Course Code">
							<p><small class="error"><?php isset($error['code']) ? print($error['code']) : ''; ?></small></p>
						</div>
					</div>
					<div class="input-group">
						<select name="unit" class="form-control">
							<option disabled="disabled">Select Course Unit</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
						</select>
						<p><small class="error"><?php isset($error['unit']) ? print($error['unit']) : ''; ?></small></p>
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
