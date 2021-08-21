<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {

       // $allSlider = Slider::all(); 

       

        // $allSlider = Slider::all()->sortBy("id"); 

        // $allSlider = Slider::orderBy('id')->get(); 
        // select * from `sliders` order by `id` asc

        //$allSlider = Slider::orderBy('id', 'desc')->get(); 
        // select * from `sliders` order by `id` desc

        // $allSlider = Slider::orderByDesc('title')->get();
        // select * from `sliders` order by `title` desc


        //$allSlider=Slider::find([1,3,5]);
        
        //$allSlider=Slider::findOrfail(1000);

        //update
            // Slider::findOrfail(50)->update([
            //     'title'=>'raza',
            //     'caption'=>'razaeeeeeeeeee',
            //     'image'=>'raza.jpg',
            //     'status'=>1,
            // ]);

        //delete
            // Slider::destroy(51);



        /*چاپ تعداد مشخصی از تاپل های رابطه */

        // $slider=Slider::chunk(3,function($collect){
        //     foreach($collect as $item ){
        //         echo "<div style='margin: 0 auto; width: 800px; border: 1px solid;
        //         margin-bottom: 5px; padding: 5px 10px;'>";
        //             echo "title : ".$item->title."</br></br>";
        //             echo "caption : ".$item->caption."</br></br>";
        //             echo "image : ".$item->image."</br></br>";
        //             echo "status : ".$item->status."</br></br>";
        //         echo "</div>";           
        //     }
        //     echo "<hr style=' border: 1px solid;'>";
        // });

        /* ایجاد سطر جدید  */

        //   $slider=new Slider();
        //   $slider->title="rasool";
        //   $slider->caption="rasool1111111111111111";
        //   $slider->image="rasool.jpg";
        //   $slider->status=1;
        //   $slider->save();

        $allSlider=Slider::paginate(2);


  // return $allSlider;
    return view("admin.slider.index",compact('allSlider'));

    }


    public function create()
    {
      return view('admin.slider.create');
    }

    public function store(Request $request)
    {
       $file=$request->file('image');

       $nameimage="";

       if(!empty($file)){
            $nameimage=time().".".$file->getClientOriginalExtension();
            $file->move('images/slider',$nameimage);
       }

       Slider::create([
          "title"=>$request->title,
          "caption"=>$request->caption,
          "image"=>$nameimage,
          "status"=>$request->status,
       ]);
       
      return redirect()->route('slider.index');

    
    }

    public function show(Slider $slider)
    {
        //
    }

    public function edit(Slider $slider)
    {
        $slider=Slider::findOrFail($slider->id);

        return view('admin.slider.edit',compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        
        $slider=Slider::findOrfail($slider->id);
        $file=$request->file('image');
        $nameImage="";
        if(!empty($file)){
            unlink('images/slider/'.$slider->image);

            $nameImage=time().$file->getClientOriginalExtension();

            $file->move('images/slider', $nameImage);
        }else{
            $nameImage=$slider->image;
        }


        Slider::where('id',$slider->id)->update([
            "title"=>$request->title,
            "caption"=>$request->caption,
            "image"=> $nameImage,
            "status"=>$request->status,
        ]);


        return redirect()->route('slider.index');

    }

    public function destroy(Slider $slider)
    {
      $Slider=Slider::findOrfail($slider->id);
      $nameImage=$slider->image;
     // dd($nameImage);
      unlink('images/slider/'.$nameImage);
      Slider::destroy($slider->id);
      return back();
    }
}
