<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
		

		<?php if($row):?>
 
		<div class="row">
	 	<center><h4><?=esc(ucwords($row->class))?></h4></center>
			<table class="table table-hover table-striped table-bordered">
				<tr><th>Created by:</th><td><?=esc($row->user->firstname)?> <?=esc($row->user->lastname)?></td>
				<th>Date Created:</th><td><?=get_date($row->date)?></td></tr>

			</table>
 		</div>
 		 
			<ul class="nav nav-tabs">
			  <li class="nav-item" style="background-color: #800080">
			    <a class="nav-link <?=$page_tab=='lecturers'?:'';?> " href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=lecturers">Lecturers</a>
			  </li>
			  <li class="nav-item" style="background-color: #800080">
			    <a class="nav-link <?=$page_tab=='students'?:'';?> " href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=students">Students</a>
			  </li>

		 
			</ul>

			

		 		<?php

		 			switch ($page_tab) {
		 				case 'lecturers':
		 					
		 					include(views_path('lecturers-in-classTab'));
		 					break;

		 				case 'students':
		 					
		 					include(views_path('students-in-classTab'));
		 					break;


		 				case 'lecturer-add':
		 					
		 					include(views_path('addLecturers-in-classTab'));

		 					break;
		 				case 'student-add':
		 					
		 					include(views_path('addStudents-in-classTab'));

		 					break;
		 					
		 				case 'lecturer-remove':
		 					
		 					include(views_path('removeLecturers-in-classTab'));

		 					break;
		 				case 'student-remove':
		 					
		 					include(views_path('removeStudents-in-classTab'));

		 					break;
		 					
		 				case 'students-add':
		 					
		 					include(views_path('addStudents-in-classTab'));

		 					break;

		 				
		 				default:
		 					
		 					break;
		 			}


		 		?>
		 
		<?php else:?>
			<center><h4>That class was not found!</h4></center>
		<?php endif;?>

	</div>

<?php $this->view('includes/footer')?>
