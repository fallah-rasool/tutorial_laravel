@extends('admin.layouts.layouts')

@section('css')
@endsection
@section('content')


    <section class="row">
        <section class="col-8 offset-2">
            <table class="table table-dark">
                <tr>
                    <td>id</td>
                    <td>caption</td>
                    <td>image</td>
                    <td>link</td>
                    <td>status</td>
                    <td>price</td>
                </tr>
                @forelse($query as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->caption}}</td>
                            <td>{{$item->image}}</td>
                            <td>{{$item->link}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->price}}</td>
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
