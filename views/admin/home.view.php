<?php 
	view('admin/includes/header'); 
?>	
		<div class="content">
			<h2>Participants</h2>
			<p style="margin-bottom: 10px;"><small class="success"><?php isset($success) ? print($success) : ''; ?></small></p>
			<div class="table">
				<table>
					<thead>
						<tr>
							<th>S/N</th>
							<th>Name</th>
							<th>Email</th>
							<th>Username</th>
							<th>Gender</th>
							<th>Institution</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($users as $user): ?>
							<tr>
								<td><?=$user['id']?></td>
								<td><?=$user['name']?></td>
								<td><?=$user['email']?></td>
								<td><?=$user['username']?></td>
								<td><?=$user['gender']?></td>
								<td><?=$user['institution']?></td>
								<td><?=$user['address']?></td>
								<td>
									<a class="btn btn-edit" href="/admin/edit_user/<?=$user['id']?>"><i class="fas fa-user-edit"></i></a>
									<a class="btn btn-delete" href="/admin/delete_user/<?=$user['id']?>"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="add-new">
				<a href="/admin/create_user"><i class="fas fa-user-plus"></i> Add New</a>
			</div>
		</div>
<?php 
	view('admin/includes/footer') 
?>	