@extends('admin.layouts.layouts')

@section('css')
@endsection
@section('content')

<section class="row">
   
    <section class="col-4 offset-4 ">
        <h1>
      ویرایش 

      {{ $slider->title }}

        </h1>
    </section>

</br>
</br>
    <section class="col-12 ">



        <section class="row mt-3">

            <section class="col-6 offset-3 ">
    
                <form action="{{ route('slider.update',$slider)}}" method="post" enctype="multipart/form-data">
    
                    @csrf
                    @method('patch')
    
                    <section  class="form-group">
                        <label for="my-input">title</label>
                        <input id="my-input" value="{{ $slider->title }}" class="form-control" type="text" name="title">
                   </section>
    
                    <section  class="form-group">
                        <label for="my-input">image</label>
                        <input id="my-input" class="form-control" type="file" name="image">
                   </section>
    
                    <section  class="form-group">
                        <label for="my-input">status</label>
    
                        <select name="status" id="" class="form-control">                          
                            <option value="{{ $slider->status }}"  @if($slider->status) selected  @endif  >{{ $slider->status }}</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                   </section>
    
                   <section  class="form-group">
                    <label for="my-input">caption</label>
                    <textarea name="caption" id="" cols="30" rows="10" class="form-control">{{ $slider->caption}}</textarea>
                  
                   </section>
               <button  class="btn  btn-primary btn-lg">ارسال </button>
                </form>
    

    
            </section>
        </section>

    </section>

</section>







@endsection
