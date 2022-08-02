@extends('include.template_edit')

@section('content')
    <div class="container">
        <form method="post" action="{{route('gallery.update', [$gallery->id])}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Название группы</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$gallery->name}}" name="name">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
