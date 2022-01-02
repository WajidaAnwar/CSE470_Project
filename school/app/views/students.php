<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
		

		<nav class="navbar navbar-light" style="background-color: #800080">
		  <form class="form-inline">
		    <div class="input-group">
		      <div class="input-group-prepend">
		        
		      </div>
			  <div class="d-flex justify-content-center">
  
			  </div>
			  <div class="p-1" >
			  <font color="white">
				  
			  <center>
				  <h4>	<br>Enrolled Students</h4>
				</center>
			  </font>
				  
</div>
		    </div>
		  </form>
 			<a href="<?=ROOT?>/signup?mode=students">
			 
			 <?php if(Auth::access('admin')):?> <?php //only for admins ?>
				<button class="btn btn-sm btn-primary"><i></i>Add New</button>
				<?php endif;?>
			</a>
 		</nav>

		<div class="card-group justify-content-center">

			<?php if($rows):?>
				<?php foreach ($rows as $row):?>
				 
				<?php include(views_path('user'))?>

	 			<?php endforeach;?>
 			<?php else:?>
 				<h4>No students were found at this time</h4>
 			<?php endif;?>
		</div>

		
	 
	</div>
 
<?php $this->view('includes/footer')?>