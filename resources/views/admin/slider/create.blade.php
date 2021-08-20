@extends('admin.layouts.layouts')
@section('css')
    <style>
        .rtl{
            direction: rtl!important;
            text-align: right;
        }
        ul{
            list-style: none;
        }
    </style>

@endsection

@section('content')

    <section class="row mt-3">

        <section class="col-6 offset-3 ">

            <form action="{{ route('slider.store')}}" method="post" enctype="multipart/form-data">

                @csrf

                <section  class="form-group">
                    <label for="my-input">title</label>
                    <input id="my-input" class="form-control" type="text" name="title">
               </section>

                      <section  class="form-group">
                    <label for="my-input">image</label>
                    <input id="my-input" class="form-control" type="file" name="image">
               </section>

                <section  class="form-group">
                    <label for="my-input">status</label>

                    <select name="status" id="" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
               </section>

               <section  class="form-group">
                <label for="my-input">caption</label>
                <textarea name="caption" id="" cols="30" rows="10" class="form-control"></textarea>
              
               </section>
           <button  class="btn  btn-primary btn-lg">ارسال </button>
            </form>


        </section>
    </section>


@endsection



@section('js')


@endsection
