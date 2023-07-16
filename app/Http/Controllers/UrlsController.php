<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Facades\validator;

class UrlsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    
    public function  store(){
        

        $url=request('url');

        validator::make(compact('url'),['url'=>'required|url']) -> validate();

        // if($validation->fails()){
        //     dd('Failed');

        // } else{
        //     dd('succes');
        // }

        // verifier si le site a un raccouci

        $record= Url::whereUrl($url)->first();
        // dd($url->shortner);
    
        if($record){
            return view('result')->withShortner($record->shortner);
        }

        
        
        $row=Url::create([
            'url'=> request('url'),
            'shortner'=>Url::getUniqueShortUrl(),
        ]);

        if($row){
            return view('result')->withShortner($row->shortner);

        } 
    }

    public function show($shortner){
        
        $enregistrement= Url::whereShortner($shortner)->first();

        if( ! $enregistrement){
            return redirect('/');
        } else{
            return redirect($enregistrement->url);
        }
    }
}
