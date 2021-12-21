<?php

/**
 * change school controller
 */
class Move extends Controller
{
	
	function index($id = '')
	{
		// code...
		if(Auth::access('super_admin')){
			Auth::move($id);
		}
 		
 		$this->redirect('schools');
 
	}
}