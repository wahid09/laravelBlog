<?php

namespace App\Http\Controllers\User;
use App\Model\user\post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(post $post){
    	//return $slug;
    	return view('user/post',compact('post'));
    }
}
