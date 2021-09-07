<?php

namespace App\Http\Controllers;

use App\Models\Sesstion;
use Illuminate\Http\Request;

class SesstionController extends Controller
{

    public function index()
    {
        // session()->put([
        //     'fname'=>"rasool",
        //     'lname'=>"fallh",
        //     'age'=>"25",
        // ]);

        session()->flash('create','عملسات انجام شد');

    }

 
   
    public function create()
    {

      //  return session()->all();
                // {
                    // "_token": "seGPMJjn6pqWakNT8hJQ7aBIuh4g3E9S4zEFXil9",
                    // "_previous": {
                    // "url": "http://127.0.0.1:8000/sesstion/create"
                    // },
        //--------> // "_flash": {
                    // "old": [],
                    // "new": []
                    // },
                    // "fname": "rasool",
                    // "lname": "fallh",
                    // "age": "25"
                // }
       
       //  return session()->get('fname'); 

       //  return session('_previous');    
       
       
       //  session()->forget('fname');
       //  return session()->exists('fname');
       
       // delete all
       // session()->flush();
      // return session()->all();


      return session('create');








    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sesstion  $sesstion
     * @return \Illuminate\Http\Response
     */
    public function show(Sesstion $sesstion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sesstion  $sesstion
     * @return \Illuminate\Http\Response
     */
    public function edit(Sesstion $sesstion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sesstion  $sesstion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sesstion $sesstion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sesstion  $sesstion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sesstion $sesstion)
    {
        //
    }
}
