<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Tag;

class TagTest extends TestCase
{
    public function setUp()
	{
		$tag = new Tag;
    	$tag->name = "coding";
    	$this->tag = $tag;
	}

    public function testAtagHasName()
    {
    	$this->assertEquals("coding", $this->tag->name);
    }
}
