<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;

class UserTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
	{
		$user = new User;
    	$user->name = "Peter Han";
    	$user->email = "peter.han@example.com";
    	$user->password = "curious";
    	$this->user = $user;
	}

    public function testAuserHasName()
    {
    	$this->assertEquals("Peter Han", $this->user->name);
    }

    public function testAuserHasemail()
    {
    	$this->assertEquals("peter.han@example.com", $this->user->email);
    }
}
