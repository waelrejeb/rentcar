<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;
use App\Photo;

class AdminController extends Controller
{
   public function home(){
   	return view('admin');
   }
   public function postAddVoiture(Request $request){
    
    $data=$request->validate([
	'puissance'=>'required',
	'couleur'=>'required'
	
	]);
	//dd($data);
	
$voiture=Voiture::create([
	
			'puissance'=>$request['puissance'],
			'couleur'=>$request['couleur']

			]);
  			

  if ($request->hasFile('image')){
  	foreach($request->image as $image){
  		$imageName = time().'_'.$image->getClientOriginalName();

  		$image->move('image',$imageName);

  		Photo::create([
  			'voiture_id'=>$voiture->id,
  			'photo'=>$imageName]);
  	}
  }
    	// $livre = new Livre();
    	// $livre->titre=$request->titre;
    	// $livre->description=$request->description;
    	// $livre->save();
	// Livre::create($request->except('_token'));
	// return back()->with('success','votre voiture a été ajouté');
   }
}
