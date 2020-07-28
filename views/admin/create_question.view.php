<?php 
	view('admin/includes/header'); 
?>	
		<div class="content">
			<h2>Create New Question</h2>
			<p><small class="error"><?php isset($wrong) ? print($wrong) : ''; ?></small></p>
			<div class="form">
				<form action="/admin/create_question" method="POST">
					<div class="input-group">
						<select name="course" class="form-control">
							<option disabled="disabled">Select Question Course</option>
							<?php foreach ($courses as $course): ?>
								<option><?=$course['name']?></option>
							<?php endforeach ?>
						</select>
						<p><small class="error"><?php isset($error['course']) ? print($error['course']) : ''; ?></small></p>
					</div>
					<div class="input-group">
						<input type="text" name="question" class="form-control" value="<?php isset($old['question']) ? print($old['question']) : ''; ?>" placeholder="Type a question here...">
						<p><small class="error"><?php isset($error['question']) ? print($error['question']) : ''; ?></small></p>
					</div>
					<div class="group">
						<div class="input-group">
							<input type="text" name="option1" class="form-control" value="<?php isset($old['option1']) ? print($old['option1']) : ''; ?>" placeholder="Type Option One">
							<p><small class="error"><?php isset($error['option1']) ? print($error['option1']) : ''; ?></small></p>
						</div>
						<div class="input-group">
							<input type="text" name="option2" class="form-control" value="<?php isset($old['option2']) ? print($old['option2']) : ''; ?>" placeholder="Type Option Two">
							<p><small class="error"><?php isset($error['option2']) ? print($error['option2']) : ''; ?></small></p>
						</div>
					</div>
					<div class="group">
						<div class="input-group">
							<input type="text" name="option3" class="form-control" value="<?php isset($old['option3']) ? print($old['option3']) : ''; ?>" placeholder="Type Option Three">
							<p><small class="error"><?php isset($error['option3']) ? print($error['option3']) : ''; ?></small></p>
						</div>
						<div class="input-group">
							<input type="text" name="option4" class="form-control" value="<?php isset($old['option4']) ? print($old['option4']) : ''; ?>" placeholder="Type Option Four">
							<p><small class="error"><?php isset($error['option4']) ? print($error['option4']) : ''; ?></small></p>
						</div>
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
