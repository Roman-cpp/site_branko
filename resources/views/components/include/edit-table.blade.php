<div  class="col-xs-10">
    <a class="btn" href="{{route('gallery.create')}}">Добавить</a>
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>file_name</th>
            <th>gallery_id</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($model as $object)
            <tr>
                <td> {{ $object->id }} </td>
                <td> {{ $object->file_name }} </td>
                <td> {{ $object->gallery_id }} </td>
                <td>
                    <a href="{{route('gallery.edit', [$object->id])}}"><button>изменить</button></a>
                </td>
                <td>
                    <form method="POST" action="{{route('gallery.destroy', [$object->id])}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="удалить">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
</div>
