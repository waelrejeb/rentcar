<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;

class PagesController extends Controller
{
    public function index(){
         $voitures=Voiture::orderBy('id','desc')->paginate(4);
         // $voitures=Voiture::orderBy('id','desc')->paginate('1');
    	return view('welcome',['voitures'=>$voitures]);
    }
}
