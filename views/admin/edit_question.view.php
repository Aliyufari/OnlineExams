<?php 
	view('admin/includes/header'); 
?>	
		<div class="content">
			<h2>Edit Question</h2>
			<p><small class="error"><?php isset($wrong) ? print($wrong) : ''; ?></small></p>
			<div class="form">
				<form action="/admin/edit_question/<?=$question['id']?>" method="POST">
					<div class="input-group">
						<select name="course" class="form-control">
							<option><?=$question['course']?></option>
							<option disabled="disabled">Select Question Course</option>
							<?php foreach ($courses as $course): ?>
								<option><?=$course['name']?></option>
							<?php endforeach ?>
						</select>
						<p><small class="error"><?php isset($error['course']) ? print($error['course']) : ''; ?></small></p>
					</div>
					<div class="input-group">
						<input type="text" name="question" class="form-control" value="<?=$question['question']?>">
						<p><small class="error"><?php isset($error['question']) ? print($error['question']) : ''; ?></small></p>
					</div>

					<?php foreach ($options as $option): ?>
					<?php endforeach ?>
						<div class="group">
							<div class="input-group">
								<input type="text" name="option1" class="form-control" value="<?=$option['option1']?>">
								<p><small class="error"><?php isset($error['option1']) ? print($error['option1']) : ''; ?></small></p>
							</div>
							<div class="input-group">
								<input type="text" name="option2" class="form-control" value="<?=$option['option2']?>">
								<p><small class="error"><?php isset($error['option2']) ? print($error['option2']) : ''; ?></small></p>
							</div>
						</div>
						<div class="group">
							<div class="input-group">
								<input type="text" name="option3" class="form-control" value="<?=$option['option3']?>">
								<p><small class="error"><?php isset($error['option3']) ? print($error['option3']) : ''; ?></small></p>
							</div>
							<div class="input-group">
								<input type="text" name="option4" class="form-control" value="<?=$option['option4']?>">
								<p><small class="error"><?php isset($error['option4']) ? print($error['option4']) : ''; ?></small></p>
							</div>
						</div>
					

					<div class="input-group submit">
						<button type="submit">Update</button>
					</div>
				</form>
			</div>
		</div>
<?php 
	view('admin/includes/footer') 
?>	
