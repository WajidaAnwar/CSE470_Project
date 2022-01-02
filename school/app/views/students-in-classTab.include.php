	<nav class="navbar navbar-light" style="background-color: #800080">
	  <form class="form-inline">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        
	      </div>
	      
	    </div>
	  </form>

	  	<div>
			<a href="<?=ROOT?>/single_class/studentadd/<?=$row->class_id?>?select=true">
				
				<?php if(Auth::access('admin')):?>
				<button class="btn btn-sm btn-primary"><i class></i> Add New</button>
				<?php endif;?>
			</a>			
			<a href="<?=ROOT?>/single_class/studentremove/<?=$row->class_id?>?select=true">
			<?php if(Auth::access('admin')):?>
			
				<button class="btn btn-sm btn-primary"><i class></i>Remove</button>
				<?php endif;?>
			</a>
 
		</div>
			
	</nav>

<div class="card-group justify-content-center">
	<?php if(is_array($students)):?>
		<?php foreach($students as $student):?>
			
			<?php 
				$row = $student->user;
				include(views_path('user'));

			?>
		<?php endforeach;?>
	<?php else:?>
		<center><h4>No student is enrolled in this class yet!</h4></center>
	<?php endif;?>
 </div>