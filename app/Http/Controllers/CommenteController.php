<?php

namespace App\Http\Controllers;

use App\Models\Commente;
use Illuminate\Http\Request;

class CommenteController extends Controller
{
   

    public function __construct()
    {
       // $this->middleware('isAdminr');
    }



    public function index()
    {
        
        return "<h1>This is page comment</h1>";
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

 
    public function show(Commente $commente)
    {
        //
    }

  
    public function edit(Commente $commente)
    {
        //
    }

 
    public function update(Request $request, Commente $commente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commente  $commente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commente $commente)
    {
        //
    }
}
