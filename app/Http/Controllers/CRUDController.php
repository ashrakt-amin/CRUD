<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;
use Redirect,Response;


class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $data = data::paginate();

        return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //view form to add new user
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,data $data)
    {
        //save user in db using Ajax  $('#laravel_crud').DataTable();

        $request->validate([
            'name'=>'min:3|required',
            'father_name'=>'min:3|required',
            'mother_name'=>'min:3|required',
            'phone'=>['numeric','required',"unique:data,phone,$data->id"],
            'gender'=>'required',
            'birthday'=>'date|required',

        ]);

       $data= data::Create($request->all());
        return redirect()->route('layout.index');
    }
   


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = data::findOrFail($id);
        return view('show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = data::findOrFail($id);
        return view('edit', compact('data'));

    }

    public function update(Request $request ,$id)
    {
        $data =data::findOrFail($id);
       
        $request->validate([
            'name'=>'min:3|sometimes',
            'father_name'=>'min:3|sometimes',
            'mother_name'=>'min:3|sometimes',
            'phone'=>['numeric',"unique:data,phone,$id"],
            'gender'=>'sometimes',
            'birthday'=>'date|sometimes',

        ]);
        $data->update($request->all());
        
    return redirect()->route('layout.index');
    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =data::findOrFail($id);
    
        $data->delete();
        return redirect()->route('layout.index');

    }
}
