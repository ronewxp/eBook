<!-- Tital Field -->
<div class="form-group">
    {!! Form::label('tital', 'Tital:') !!}
    <p>{{ $book->tital }}</p>
</div>

<!-- Review Field -->
<div class="form-group">
    {!! Form::label('review', 'Review:') !!}
    <p>{!! $book->review !!}</p>
</div>

<!-- Cover Field -->
<div class="form-group">
    {!! Form::label('cover', 'Cover:') !!}
</br>
    <img height="200" width="300" src="{{$book->cover }}"/>
</div>

<!-- Author Id Field -->
<div class="form-group">
    {!! Form::label('author_id', 'Author Name:') !!}
    <p>{{ $book->author->name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $book->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $book->updated_at }}</p>
</div>

