<?php 
	view('admin/includes/header'); 
?>	
		<div class="content">
			<h2>Questions</h2>
			<p style="margin-bottom: 10px;"><small class="success"><?php //isset($success) ? print($success) : ''; ?></small></p>
			<div class="table">
				<table>
					<thead>
						<tr>
							<th>S/N</th>
							<th>Question</th>
							<th>Question Course</th>
							<th>Options</th>
							<th>Answer</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($questions as $question): ?>
							<tr>
								<td><?=$question['id']?></td>
								<td><?=$question['question']?></td>
								<td><?=$question['course']?></td>
								<td>
									<form>
										<select>
											<option><?=$question['option1']?></option>
											<option><?=$question['option2']?></option>
											<option><?=$question['option3']?></option>
											<option><?=$question['option4']?></option>
										</select>
									</form>	
								</td>
								<td><?=$question['answer']?></td>
								<td>
									<a class="btn btn-edit" href="/admin/edit_question/<?=$question['id']?>"><i class="fas fa-edit"></i></a>
									<a class="btn btn-delete" href="/admin/delete_question/<?=$question['id']?>"><i class="fas fa-trash-alt"></i></
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="add-new">
				<a href="/admin/create_question"><i class="fas fa-plus"></i> Add New</a>
			</div>
		</div>
<?php 
	view('admin/includes/footer') 
?>	