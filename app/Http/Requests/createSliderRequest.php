<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createSliderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'caption'=>'required|mnin:5|max:100',
            'image'=>'required|image|mimes:jpg,png|max:5000',
            'link'=>'required|url|max:100',
        ];
    }
/*    public function messages(){
        return [
            'caption.required'=>'مقدار فیلد caption نمی توان خالی باشد',
            'caption.mnin'=>'مقدار فیلد caption نمی توان کمتر از 5 باشد',
            'caption.max'=>'مقدار فیلد caption نمی توان بیشتر از باشد',
            'image.required'=>'مقدار فیلد image نمی توان خالی باشد',
            'image.image'=>'مقدار فیلد image باید از نوع عکس باشد',
            'image.mimes'=>'مقدار فیلد image باید از نوع jpg و png باشد',
            'image.max'=>'مقدار فیلد image  نمی تواند بیشتر از 5000 کیلو بایت باشد',
            'link.required'=>'مقدار فیلد link نمی توان خالی باشد',
            'link.url'=>'مقدار فیلد link باید با فرمت یک url باشد',
            'link.max'=>'مقدار فیلد link نمی توان بیشتر از 100 کارکتر باشد',
        ];

    }*/
}
