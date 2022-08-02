<div  class="col-xs-10">
    <a class="btn" href="{{route($action . '.create')}}">Добавить</a>
    <table class="table table-striped">
        <tr>
            @foreach($columns as $column)
                <th>{{$column}}</th>
            @endforeach
            <th></th>
            <th></th>
        </tr>
        @foreach($model as $object)
            <tr>
                @foreach($object as $key => $item)
                <td> {{ $item }} </td>
                @endforeach
                <td>
                    <a href="{{route($action . '.edit', [$object['id']])}}"><button>изменить</button></a>
                </td>
                <td>
                    <form method="POST" action="{{route($action .  '.destroy', [$object['id']])}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="удалить">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
