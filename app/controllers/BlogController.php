<?php

class BlogController extends BaseController {

	public function index()
	{
		$posts = Post::where('draft', '=', 0)->get();
		return View::make('blog')->with('posts', $posts);
	}

}
