			<h1><?=$title;?></h1>

			<!-- Table (TABLE) -->
			<br /><br />
			<table>
				<tr>
					<th>No</th>
					<th>Actions</th>					    
				    <th>Employees Name</th>
				    <th>Description</th>				   				   
				</tr>
				<?php
					$no=0;
					foreach($array_employees as $row):	
					$id=$row->EmployeeID;	
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=$no;?>.</td>
				    <td><?=anchor(site_url('admin/employee/process/delete/'.$id),'[delete]').' | '.
				    	   anchor(site_url('admin/employee/process/update/'.$id),'[update]');?></td>				    
				    <td><?=$row->FirstName;?>
				    <?=$row->LastName;?></td>
					<td><?=$row->Title;?></td>
				</tr>
				<?php  endforeach; ?>
			</table>

		