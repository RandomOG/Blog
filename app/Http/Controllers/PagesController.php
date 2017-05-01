<?php 

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller{

	public function getIndex(){
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout(){
		$first = 'Dead';
		$last = 'Man';
		

		$fullname = $first . " " . $last;
		$email = 'deadman@out.com';

		return view('pages.about')->withFull($fullname)->withMail($email);
	}

	public function getContact(){
		
		return view('pages.contact');
	}

	public function postContact(){

	}
}
