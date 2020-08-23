<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Goon;

use Illuminate\Support\Facades\Storage;
class GoonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation of form data
        $request->validate([
            'category' => ['required', 'integer'],
            'image' => ['required','image'],
            'message' => ['required', 'string']
        ]);


            $category = Category::find(  $request['category'] );

            // copy file to the right directory
            Storage::putFileAs('public/'.$request['category'], 
                $request->file('image'), 
                $request->file('image')->getClientOriginalName()
            );

            // create a goo record
            $goon = $category->goon()->create([
                'words' => $request['message'],
                'image' => 'storage/'.$request['category'].'/'. $request->file('image')->getClientOriginalName()
            ]);

            

        return 'uploaded';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $goon = Goon::find($id);

    
        return view('portfolio.goon')->with('goon', $goon) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
