<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class PagesController extends Controller
{
    //
    public function obout(){
    $links=[
    'https://platzi.com/laravel'=> 'Curso Laravel',
    'https://facebook.com'=>'facebook'
    ];
	return view('about',[
		//'teacher'=>'Jhonan Vargas',
		'links'=>$links,
		]);
    }
    public function home(){
        $messages=Message::latest()->paginate(10);
        
    	return view('welcome',[
            'messages'=>$messages,
            ]);
    }
}
