<!DOCTYPE html>
<html lang="ru">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Природа</title>
	</head>
<body>
	
	<div class="col-md-1"></div>
	<div class="col-md-10 well">
		<h3 class="text-primary">Че надо в лес</h3>
		<h5>Тимур - лох кста. Говорят ворота только один раз могут открыть, надо всем машинам вместе ехать в одно время. Нам же не сложно, да Славик?</h5>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<center>
				<form method="POST" class="form-inline" action="add_query.php">
					<input type="text" class="form-control" name="task" id="task" required/>
					
					<button class="btn btn-primary form-control" name="add">Надо купить</button>

				</form>
				<br /><br />
				
				<form method="POST" class="form-inline" action="add_query2.php">
					<input type="text" class="form-control" name="task" id="task" required/>
					
					<button class="btn btn-primary form-control" name="add">я могу взять</button>
					
				</form>
				<br /><br /><br />
			</center>
		</div>
		<br /><br /><br />
		<div class="row">
			<div class="col-md-6">
				<h2>Надо купить</h2>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Че надо взять</th>
						<th>Статус</th>
						<th>Изменить статус/Удалить</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'conn.php';
						$query = $conn->query("SELECT * FROM `task` ORDER BY `task_id` ASC");
						$count = 1;
						while($fetch = $query->fetch_array()){
					?>
					<tr>
						<td><?php echo $count++?></td>
						<td><?php echo $fetch['task']?></td>
						<td><?php echo $fetch['status']?></td>
						<td colspan="2">
							<center>
								<?php
									if($fetch['status'] != "Done"){
										echo 
										'<a href="update_task.php?task_id='.$fetch['task_id'].'" class="btn btn-success"><span class="glyphicon glyphicon-check"></span></a>';
									}
									if($fetch['status'] === "Done"){
										echo 
										'<a href="delete_query.php?task_id='.$fetch['task_id'].'" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>';
									}

								?>
								<?php 
									echo 
										'<a href="delete_it.php?task_id='.$fetch['task_id'].'" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span></a>';
								 ?>
								 
							</center>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
			</div>
			<div class="col-md-6">
				<h2>Могут взять</h2>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Че надо взять</th>
						<th>Статус</th>
						<th>Изменить статус/Удалить</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'conn.php';
						$query = $conn->query("SELECT * FROM `task2` ORDER BY `task_id` ASC");
						$count = 1;
						while($fetch = $query->fetch_array()){
					?>
					<tr>
						<td><?php echo $count++?></td>
						<td><?php echo $fetch['task']?></td>
						<td><?php echo $fetch['status']?></td>
						<td colspan="2">
							<center>
								<?php
									if($fetch['status'] != "Done"){
										echo 
										'<a href="update_task2.php?task_id='.$fetch['task_id'].'" class="btn btn-success"><span class="glyphicon glyphicon-check"></span></a>';
									}
									if($fetch['status'] === "Done"){
										echo 
										'<a href="delete_query2.php?task_id='.$fetch['task_id'].'" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>';
									}

								?>
								<?php 
									echo 
										'<a href="delete_it2.php?task_id='.$fetch['task_id'].'" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span></a>';
								 ?>
								 
							</center>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</body>
</html>