<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Post;

class PostTest extends TestCase
{

    use DatabaseTransactions;

	public function setUp()
	{
		$post = new Post(['title' => 'KH3', 
            'body' => 'When is it coming out?']);
    	$this->post = $post;
	}

    public function testAPostHasTitle()
    {
    	$this->assertEquals("KH3", $this->post->title);
    }

    public function testAPostHasBody()
    {
    	$this->assertEquals("When is it coming out?", $this->post->body);
    }

}
