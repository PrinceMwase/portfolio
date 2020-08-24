<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goon;
use App\Category;

class CategoryController extends Controller
{
    //
        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if($id == 0){
            $goons = Goon::orderBy('created_at', 'desc')->paginate(5);
        }else{
            $goons = Category::find($id)->goon()->orderBy('created_at', 'desc')->paginate(5);
        }

        return response()->json($goons);
    }
}
