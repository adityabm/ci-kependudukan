<table border="1" width="100%">
			<thead>
				<tr>
					<th width="10%">NIM</th>
					<th width="50%">Username</th>
					<th width="40%">Email</th>
					<th width="40%">Nama</th>
					<th width="40%">Alamat</th>
					<th width="40%">Jenis Kelamin</th>
					<th width="40%">Hobi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no = 1;
					foreach ($user->result() as $row) {
				?>
					<tr>
						<td><?=$row->nim?></td>
						<td><?=$row->username?></td>
						<td><?=$row->email?></td>
						<td><?=$row->nama?></td>
						<td><?=$row->alamat?></td>
						<td><?=$row->jenis_kelamin == 1 ? 'Laki-Laki' : 'Perempuan'?></td>
						<td><?=$row->hobi?></td>
					</tr>
				<?php
					}
				?>
			</tbody>
		</table>