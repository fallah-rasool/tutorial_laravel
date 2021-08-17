<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\createSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{

    public function index()
    {
        slider::create([
            'caption'=>'my name is arasool',
            'image'=>'ra.jpg',
            'link'=>'www.rasool.com',
            'status'=>'0'
        ]);
    }
    public function create()
    {

    }

    public function store(createSliderRequest $request)
    {

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
