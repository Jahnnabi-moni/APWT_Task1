<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    //
    public function homepage(){

    	return view('home');
    }

    public function servicepage()
    {

    	$array=[
    		'Name'=>'LAPTOP',
    		'Brand'=>'hp',
    		'RAM'=>'4 GB',
    		'Price'=>'40000 taka'
    	];

    	return view('service')->with('array',$array);
    }

    public function aboutpage(){

    	return view('about');
    }

    public function contactpage(){

    	return view('contact');
    }

    public function teamspage(){

    	return view('teams');
    }
    

    }



