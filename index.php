<?php
	require_once(__DIR__ . '/model/config.php');
?>
<html>
<head>
	<title>xiang To-Do List</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<header>
     <nav>
       <ul class="navbar">
         <li><a href="house.php">Home</a></li>
         <li><a href="login.php">Login</a></li>
         <li><a href="register.php">Register</a></li>
       </ul>
     </nav>
</header>
<body>
	<div class="wrap">
		<div class="task-list">
			<ul>
				
					<?php require("includes/connect.php"); 
 				$mysqli = new mysqli('localhost', 'root','root','todo1');
 				$query = "SELECT * FROM tasks ORDER BY date ASC, time ASC ";
 				if ($result = $mysqli->query($query)) {
 					$numrows = $result->num_rows;
 					if ($numrows>0) {
 						while($row = $result->fetch_assoc()){
 							$task_id = $row['id'];
 							$task_name = $row['task'];
 					echo '<li>
 							<span>'. $task_name.'</span>
 							<img id= " '.$task_id.' " class="delete-button" width="10px" src="images/close.svg"/>
 							</li>';
 						}
 					}
 					
 				}
				?>
				 
			</ul>
		</div> 
	<form class="add-new-task" autocomplete="off">
		<input type="text" name="new-task" placeholder="Add new item..."/>
	</form>
	
			
		</form>
    </div>
</body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
	add_task(); // calling the add task function
	function add_task(){
		$('.add-new-task').submit(function() {
			var new_task = $('.add-new-task input[name=new-task]').val();
			if (new_task !='') {
				$.post('includes/add-task.php', { task: new_task}, function(data){
					$('add-new-task input[name=new-task]').val();
						$(data).appendTo("task-list ul").hide().fadeIn();
				});
			}
			return false;
		});
	}

	$('.delete-button').click(function(){// when you click this we want is function
	var current_element = $(this);
	var task_id = $(this).attr('id');
	$.post('includes/delete-task.php', {id: task_id}, function(){
		current_element.parent().fadeOut("fast", function(){
			$(this).remove();
		});
	});
});


</script>
</html> 