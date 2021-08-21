<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
    /**  واکشی داده ها از جدول پست**/


        // واکشی تمام سطر های جدول پست

            //    $allPost=Post::all();
            //    return $allPost;


        //واکشی داده های عکس مربوط به پست سطر دوم از جدول پست
            
            // $image= Post::findorfail(2)->image;
            // return $image;

        //واکش یک فیلد(عکس) از جدول پست 
        
            // $image= Post::findorfail(2)->image;
            // return $image->image;


        //گرفتن داده ها به صورت یک فایل آرایه که در دل خود یک فایل جیستون دارد

            // $image= Post::findorfail(2)->image()->get();
            // return $image;

           


        ////////////////////////////////////////


    /** واکشی داده ها از جدول image */

        //گرفتن تمام سطر های جدول imag

            // $image=Image::all();
            // return $image;


        // را بهصورت یک شی دریافت می کنیمimage كه مربوط به سطر شماره 2 از جدول post ما

            //  $post=Image::findorfail(2)->post;
            // return $post;

            //بصورت يك فايل آرايه داده ها را بيرون مي كشيم
           //$post=Image::findorfail(2)->post()->get();
            // return $post;

            //براي بيرون كشيد يك فيلد چه هنگامي كه فايل ما يك جيسون است يا ارايه به اين صورت عمل مي كنيم

                //آرايه:
                // $post=Image::findorfail(2)->post()->get();
                // return $post[0]['title'];

                //جيسون
                // $post=Image::findorfail(2)->post;
                // return $post->title;


    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Post $post)
    {
        //
    }


    public function edit(Post $post)
    {
        //
    }


    public function update(Request $request, Post $post)
    {
        //
    }


    public function destroy(Post $post)
    {
        //
    }
}
