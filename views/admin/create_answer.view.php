<?php 
	view('admin/includes/header'); 
?>	
		<div class="content">
			<h2>Select Question Answer</h2>
			<p><small class="error"><?php isset($wrong) ? print($wrong) : ''; ?></small></p>
			<div class="form">
				<form action="/admin/create_answer" method="POST">
					<div class="group">
						<div class="input-group">
							<select name="course" class="form-control">
								<option disabled="disabled">Question Course</option>
								<option><?=$question['course']?></option>
							</select>
							<p><small class="error"><?php isset($error['course']) ? print($error['course']) : ''; ?></small></p>
						</div>
						<div class="input-group">
							<input type="text" name="question" class="form-control" value="<?=$question['question']?>">
							<p><small class="error"><?php isset($error['question']) ? print($error['question']) : ''; ?></small></p>
						</div>
					</div>
					<div class="input-group">
						<select name="answer" class="form-control">
							<option disabled="disabled">Select Question's Answer</option>
							<option><?=$options['option1']?></option>
							<option><?=$options['option2']?></option>
							<option><?=$options['option3']?></option>
							<option><?=$options['option4']?></option>
						</select>
						<p><small class="error"><?php isset($error['course']) ? print($error['course']) : ''; ?></small></p>
					</div>	
					<div class="input-group submit">
						<button type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
<?php 
	view('admin/includes/footer') 
?>	
