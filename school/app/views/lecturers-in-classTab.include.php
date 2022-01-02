	<nav class="navbar navbar-light" style="background-color: #800080">
	  <form class="form-inline">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        
	      </div>
	      
	    </div>
	  </form>

	  	<div>
			<a href="<?=ROOT?>/single_class/lectureradd/<?=$row->class_id?>?select=true">
			<?php if(Auth::access('admin')):?> <?php //only for admins ?>
				<button class="btn btn-sm btn-primary"><i class></i>Add New</button>
				<?php endif;?>
			</a>			
			<a href="<?=ROOT?>/single_class/lecturerremove/<?=$row->class_id?>?select=true">
			<?php if(Auth::access('admin')):?> <?php //only for sadmins ?>
				<button class="btn btn-sm btn-primary"><i class></i>Remove</button>
				<?php endif;?>
			</a>
 
		</div>
			
	</nav>

<div class="card-group justify-content-center">
	<?php if(is_array($lecturers)):?>
		<?php foreach($lecturers as $lecturer):?>
			
			<?php 
				$row = $lecturer->user;
				include(views_path('user'));

			?>
		<?php endforeach;?>
	<?php else:?>
		<center><h4>No lecturer is assigned for this class yet!</h4></center>
	<?php endif;?>
 </div>