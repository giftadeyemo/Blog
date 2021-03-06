<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {

	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(2)->get();
		return view('pages.welcome')->withPosts($posts);

	}

	public function getAbout() {
		$first = 'Daniel';
		$last = 'Adeyemo';

		$fullname = $first . " " . $last;
		$email = 'giftadeyemo@yahoo.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;

		return view('pages.about')->withData($data);

	}

	public function getContact() {

		$email = "giftadeyemo@gmail.com";
		return view('pages.contact')->withEmail($email);
	}

} 


?>