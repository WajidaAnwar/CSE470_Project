<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>

<style>
	h1{
		font-size: 80px;
		color: purple;
	}

	a{
		text-decoration: none;
	}

	.card-header{
		font-weight: bold;
	}

	.card{
		min-width: 250px;
	}
</style>
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	 
	 	<div class="row justify-content-center ">
		 <?php if(Auth::access('super_admin')):?> <?php //only for super admins?> 
		 	<div class="card col-3 shadow rounded m-4 p-0 border">?>
				 
	 				<a href="<?=ROOT?>/schools">
					 
		 			<div class="card-header">SCHOOLS</div>
		 			<h1 class="text-center">
		 				<i class="fas fa-school"></i>
		 			</h1>
	 				</a>
					 
		 		</div>
				 <?php endif;?>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/users">
		 			<div class="card-header">STAFF</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-users"></i>
		 			</h1>
		 			</a>
		 		</div>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/students">
		 			<div class="card-header">STUDENTS</div>
		 			<h1 class="text-center">
		 				<i class="fas fa-book-reader"></i>
		 			</h1>
		 			</a>
		 		</div>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/classes">
		 			<div class="card-header">CLASSES</div>
		 			<h1 class="text-center">
		 				<i class="fas fa-chalkboard"></i>
		 			</h1>
		 			</a>
		 		</div>







		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/profile">
		 			<div class="card-header">PROFILE</div>
		 			<h1 class="text-center">
		 				<i class="fas fa-user-secret"></i>
		 			</h1>
		 			</a>
		 		</div>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/logout">
		 			<div class="card-header">LOGOUT</div>
		 			<h1 class="text-center">
		 				<i class="fas fa-sign-out-alt"></i>
		 			</h1>
		 		</div>

	 	</div>
	</div>
 
<?php $this->view('includes/footer')?>
