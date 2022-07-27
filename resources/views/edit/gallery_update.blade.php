@extends('include.template_edit')

@section('content')
    <div class="container">
        <form method="post" action="{{route('gallery.update', [$image->id])}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">file_name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$image->file_name}}" name="file_name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">gallery_id</label>
                <input type="text" class="form-control" id="exampleInputPassword1" value="{{$image->gallery_id}}" name="gallery_id">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
