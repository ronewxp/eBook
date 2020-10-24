<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
            <tr>
                <th>Tital</th>
                <th>Review</th>
                <th>Cover</th>
                <th>Author Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->tital }}</td>
                <td style="width:50%">{!! Str::substr($book->review, 0, 300)  !!}</td>
                <td><img height="50" width="50" src="{{$book->cover }}"/></td>
                <td style="width:10%">{{ $book->author->name }}</td>
                <td>
                    {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('books.show', [$book->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open" style="font-size:20px"></i></a>
                        <a href="{{ route('books.edit', [$book->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit" style="font-size:20px"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash" style="font-size:20px"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $books->links()}}
</div>
