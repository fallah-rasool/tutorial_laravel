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

            {!! Form::open(['route'=>'slider.store', 'method' => 'post','files'=>true]) !!}

            <section class="form-group rtl">
                {!! Form::label('caption', 'caption',['class'=>' d-block']) !!}
                {!! Form::text('caption', '',['class'=>'d-block form-control','placeholder'=>'']) !!}
                @error('caption')
                <p class="text-danger ">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group rtl">
                {!! Form::label('image', 'image',['class'=>' d-block']) !!}
                {!! Form::file('image',['class'=>' form-control','style'=>'display: none']) !!}
                <img src="{{asset('image/exter/0_FR2egZQUOVJ_4NcS.png')}}" alt="" style="width:100%;cursor: pointer" id="upload-image">

                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </section>
            <section class="form-group rtl">
                {!! Form::label('link', 'link',['class'=>' d-block']) !!}
                {!! Form::text('link', null,['class'=>'d-block form-control','placeholder'=>'']) !!}
                @error('link')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </section>

            <section class="form-group rtl">
                {!! Form::label('status', 'status') !!}
                {!! Form::select('status',['1'=>'active','0'=>'deactiven'],0,['class'=>'form-control'])!!}

            </section>





            <section class="form-group ">
                {!! Form::submit('submit',['class'=>'d-block form-control  btn btn-success']) !!}
            </section>




            {!! Form::close() !!}


        </section>
    </section>


@endsection



@section('js')

    <script>
        $('#upload-image').click(function () {
            $('#image').trigger('click')
        })
    </script>

@endsection
