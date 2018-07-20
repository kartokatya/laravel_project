<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
    public function view($id){
        $good = Goods::find($id);
        return $good;


    }
    public function index(){
        $goods = Goods::all();
//        return $goods;
        return view('goods/index', [
            'goods'=>$goods
        ]);

    }
    public function store(Request $request){

        $goods = new Goods();
        $goods->name=$request->name;
        $goods->short_description=$request->short_description;
        $goods->description=$request->description;
        $goods->icon=$request->icon;
        $goods->save();
        return redirect('/goods');
    }

    public function create()
    {
      //  return "create";
        return view('goods.make', [
        ]);
    }

    public function test()
    {
        return 11;
    }


}
