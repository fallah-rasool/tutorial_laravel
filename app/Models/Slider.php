<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
    use HasFactory;

    protected $guarded = ['id']; 

    //هنگامی که داده ها از دیتابیس خوانده می شود بزرگ نمایش داده شود 

     public function getCaptionAttribute($value){

         return strtoupper($value);

     }
    //هنگامی که داده ها در دیتابیس ذخیره می شودبه صورت حروف  بزرگ نمایش ذخیره شود 

    public function setCaptionAttribute($value){

        $this->attribute['caption'] = strtoupper($value);

    }
}
