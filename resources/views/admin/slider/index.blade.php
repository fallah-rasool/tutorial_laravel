@extends('admin.layouts.layouts')

@section('css')
@endsection
@section('content')

<section class="row">
   
        <section class="col-4 offset-4 ">
            <h1>
                <a style="font-size: 24px" class="btn btn-outline-primary"
                 href="{{route('slider.create')}}">
                ایجاد یک فیلد جدید
                </a>
            </h1>
        </section>

</br>
</br>
        <section class="col-12 ">
     
        
      
     
            <table class="table table-dark">
                <tr>
                    <td>id</td>
                    <td>title</td>
                    <td>caption</td>
                    <td>image</td>
                    <td>status</td>
                    <td>edit</td>
                    <td>delet</td>
                </tr>
                @forelse($allSlider as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->caption}}</td>
                            <td>
                                <img width="100" src="/images/slider/{{$item->image}}" alt="" srcset="">
                            </td>
                            <td>{{$item->status}}</td>
                            <td>
                                <a href="{{ route('slider.edit',$item) }}" class="btn btn-primary">edit</a>
                            </td>
                            <td>
                                <form action="{{ route('slider.destroy',$item) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button  class="btn btn-danger" type="submit">delete</button>
                                </form>
                            </td>
                        </tr>
                @empty
                    <h4 class="alert alert-danger"> not data</h4>
                @endforelse
            </table>
        </section>
    </section>

@endsection

@section('js')
@endsection
