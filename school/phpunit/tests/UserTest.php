<?php
class UserTest extends \PHPUnit\Framework\TestCase
{
	protected $user;
    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'password',
        'gender',
        'rank',
        'date',
    ];

	public function testFirstName()
	{
		$this->user = new \App\User;

		$this->user->setFirstName('Wajida');

		$this->assertEquals($this->user->getFirstName(), 'Asha');
	}

	public function testLastName()
	{
		$this->user = new \App\User;

		$this->user->setLastName('Wajida');

		$this->assertEquals($this->user->getLastName(), 'Asha');
	}

	public function testFullName()
	{
		$user = new \App\User;

		$user->setFirstName('Wajida');

		$user->setLastName('Asha');

		$this->assertEquals($user->getFullName(), 'Wajida Asha');
	}

	public function testFirstAndLastName()
	{
		$user = new \App\User;

		$user->setFirstName('Wajida     ');

		$user->setLastName('     Asha');

		$this->assertEquals($user->getFirstName(), 'Wajida');

		$this->assertEquals($user->getLastName(), 'Asha');
	}
}