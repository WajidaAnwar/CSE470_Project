<?php


class Students extends Controller
{
	
	function index()
	{

		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$user = new User();
 		$school_id = Auth::getSchool_id();
		$data = $user->query("select * from users where school_id = :school_id && rank in ('student') order by id desc");
//show only students
		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['students','students'];

		$this->view('students',[
			'rows'=>$data,
			'crumbs'=>$crumbs,
		]);
	}
}
