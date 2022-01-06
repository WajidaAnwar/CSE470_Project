<?php

class LoginTest extends \PHPUnit\Framework\TestCase
{
	
	protected $user;

		

        public function testlogin(){
            $login = new \App\Controllers\login;
            
            $response = $this->post('/login', [
                'name' => 'Wajida Asha',
                'email' => 'wajidaasha561@gmail.com',
                'password' => 'w12345678',
                
            ]);
            $this->assertTrue(true);
 
	}
}