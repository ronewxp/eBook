<div class="table-responsive">
    <table class="table table-striped" id="authors-table" >
        <thead>
            <tr>
                <th>Name</th>
        <th>Bio</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <tr>
                <td>{{ $author->name }}</td>
            <td style="width:60%">{!! Str::substr($author->bio, 0, 200)  !!}</td>
            <td><img height="50" width="100" src="{{ $author->image }}"/></td>
                <td>
                    {!! Form::open(['route' => ['authors.destroy', $author->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('authors.show', [$author->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open" style="font-size:20px"></i></a>
                        <a href="{{ route('authors.edit', [$author->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit" style="font-size:20px"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash" style="font-size:20px"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $authors->links()}}
</div>
