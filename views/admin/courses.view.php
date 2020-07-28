<?php 
	view('admin/includes/header'); 
?>	
		<div class="content">
			<h2>Courses</h2>
			<p style="margin-bottom: 10px;"><small class="success"><?php isset($success) ? print($success) : ''; ?></small></p>
			<div class="table">
				<table>
					<thead>
						<tr>
							<th>S/N</th>
							<th>Course Name</th>
							<th>Couse Code</th>
							<th>Course Unit</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($courses as $course): ?>
							<tr>
								<td><?=$course['id']?></td>
								<td><?=$course['name']?></td>
								<td><?=$course['code']?></td>
								<td><?=$course['unit']?></td>
								<td>
									<a class="btn btn-edit" href="/admin/edit_course/<?=$course['id']?>"><i class="fas fa-edit"></i></a>
									<a class="btn btn-delete" href="/admin/delete_course/<?=$course['id']?>"><i class="fas fa-trash-alt"></i></
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="add-new">
				<a href="create_course"><i class="fas fa-plus"></i> Add New</a>
			</div>
		</div>
<?php 
	view('admin/includes/footer') 
?>	