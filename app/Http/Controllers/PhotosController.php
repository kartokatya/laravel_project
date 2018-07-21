<?php

namespace App\Http\Controllers;

use App\Photos;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function view($id){
        $photo = Photos::find($id);
        return $photo;


    }
    public function index()
    {
        $photos = Photos::all();
//        return $goods;
        return view('photos/index', [
            'photos'=>$photos
        ]);
    }
    public function create()
    {
        return view('photos.make', [
        ]);
    }

    public function store(Request $request)
    {
        $photos = new Photos();
        $photos->name=$request->name;
        $photos->title=$request->title;
        $photos->alt=$request->alt;
        $photos->path=$request->path;
        $photos->save();
        //dd($request->all());
        return redirect('/photos');
    }

}
