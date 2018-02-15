<?php

namespace App\Http\Controllers;

use App\realestates;
use Illuminate\Http\Request;
use App\Realestate;
class RealestateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Realestate::all();
        $phuket = Realestate::where('county',"Phuket")->get();
        $pattaya = Realestate::where('county',"Pattaya")->get();
        $bangkok = Realestate::where('county',"Bangkok")->get();
        $countpk = count($phuket);
        $countpy = count($pattaya);
        $countbk = count($bangkok);
        return view('users.indexs')->with('data',$data)
                                   ->with('countpk',$countpk)
                                   ->with('countpy',$countpy)
                                   ->with('countbk',$countbk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('users.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Realestate::all();
        $phuket = Realestate::where('county',"Phuket")->get();
        $pattaya = Realestate::where('county',"Pattaya")->get();
        $countpk = count($phuket);
        $countpy = count($pattaya);
        if($request->exists('btn-upload')){
            $name = $request->get('name');
            $county = $request->get('county');
            $category = $request->get('category');
            $price = $request->get('price');
            $size = $request->get('size');
            $bath = $request->get('bath');
            $bed = $request->get('bed');
            $file = $request->file('uploader');
            $path = 'images/uploads';
            $filename = $file->getClientOriginalName();
            $file->move('images/uploads',$file->getClientOriginalName());

            $data = new Realestate;
            $data->name = $name;
            $data->county = $county;
            $data->category = $category;
            $data->price = $price;
            $data->size = $size;
            $data->bed = $bed;
            $data->bath = $bath;
            $data->image = $filename;
            $data->save();
            echo 'Uploaded';
 
        }
        return view('users.indexs')->with('data',$data)
                                   ->with('countpk',$countpk)
                                   ->with('countpy',$countpy);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\realestates  $realestates
     * @return \Illuminate\Http\Response
     */
    public function show(realestates $realestates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\realestates  $realestates
     * @return \Illuminate\Http\Response
     */
    public function edit($realestates)
    {
        $data = Realestate::find($realestates);
        return view('users.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\realestates  $realestates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $realestates)
    {
        $data = Realestate::findOrFail($realestates);  
        $file = $request->file('uploader');
            $path = 'images/uploads';
            $filename = $file->getClientOriginalName();
            $file->move('images/uploads',$file->getClientOriginalName());
              
        $data->update($request->all());    
        return redirect('services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\realestates  $realestates
     * @return \Illuminate\Http\Response
     */
    public function destroy($realestates)
    {
        Realestate::destroy($realestates);
        return back();
    }

}
