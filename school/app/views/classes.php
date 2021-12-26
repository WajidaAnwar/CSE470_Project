<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
		

		<h5>Classes</h5>
		<div class="card-group justify-content-center">

			<table class="table table-striped table-hover">
				<tr><th></th><th>Class Name</th><th>Created by</th><th>Date</th>
					<th>
						<a href="<?=ROOT?>/classes/add">
							<?php if(Auth::access ('lecturer')):?> <?php //only for super admins,admins and lecturers?>
        
          
        
							<button class="btn btn-sm btn-primary"><i class></i>Add New</button>
							<?php endif;?>
						</a>
					</th>
				</tr>
				<?php if($rows):?>
					 
					<?php foreach ($rows as $row):?>
					 
					 <tr>
					 	<td>
					 		<a href="<?=ROOT?>/single_class/<?=$row->class_id?>">
					 			<button class="btn btn-sm btn-primary"><i class="fa fa-info"></i></button>
					 		</a>
					 	</td>
					 	<td><?=$row->class?></td><td><?=$row->user->firstname?> <?=$row->user->lastname?></td><td><?=get_date($row->date)?></td>

					 	<td>
					 		<a href="<?=ROOT?>/classes/edit/<?=$row->id?>">
							 <?php if(Auth::access('admin') && ('lecturer')):?> <?php //only for super admins,admins and lecturers?>
					 			<button class="btn-sm btn btn-info text-white"><i class></i>Edit</button>
								 <?php endif;?>
					 		</a>

					 		<a href="<?=ROOT?>/classes/delete/<?=$row->id?>">
							 <?php if(Auth::access('admin') && ('lecturer')):?> <?php //only for super admins,admins and lecturers?>
					 			<button class="btn-sm btn btn-danger"><i class></i>Delete</button>
								 <?php endif;?>
					 		</a>
 					 		
					 	</td>

					 </tr>

		 			<?php endforeach;?>
	 			<?php else:?>
	 				<h4>No classes were found at this time</h4>
	 			<?php endif;?>

			</table>

		</div>

		
	 
	</div>
 
<?php $this->view('includes/footer')?>