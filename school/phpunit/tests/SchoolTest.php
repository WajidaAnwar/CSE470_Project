<?php

class SchoolTest extends PHPUnit\Framework\TestCase

{   protected $school;
    protected $user;
    protected $allowedColumns = [
        'school',
        'date',
    ];
   
    
    
     
    public function testget_user($data)
    {   $this->user= new App\User;
        $this->school = new App\School; 
        $user = new User(); 
        $this->school->get_user(school) ;
        
        $this->assertEquals($this->school->get_user(),'Wajida');
       
        
    }

}