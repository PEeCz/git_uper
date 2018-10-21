<h2>Database</h2>

	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>ID</th>
				<th>Fullname</th>
				<th>Email</th>
				<th>Telephone</th>
				<th>Salary</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($query->result() AS $rs){ ?>
			<tr>
				<td><?php echo $rs->member_id; ?></td>
				<td><?php echo $rs->member_name; ?></td>
				<td><?php echo $rs->member_email; ?></td>
				<td><?php echo $rs->member_tel; ?></td>
				<td><?php echo $rs->member_salary; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>