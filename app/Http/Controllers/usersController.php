<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index(){

    
	$users = [
	'0'=>['fname' => 'Alaa',
	      'lname' => 'Tohamy'],

	'1' =>['fname' => 'Ahmed',
	       'lname' => 'Tohamy']

	];
     return view('admin.users.index', compact('users'));
   }
 }
