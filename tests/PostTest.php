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
		$post = new Post;
        $post->title = "KH3";
        $post->body = "When is it coming out?";
        $post->user_id = 1;
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

    public function testAPostHasUser()
    {
        $this->assertEquals(1, $this->post->user_id);
    }

}
