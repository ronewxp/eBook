@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Author
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($author, ['route' => ['authors.update', $author->id], 'method' => 'patch', 'files' => true]) !!}


                        @include('authors.Editfields')


                   {!! Form::close() !!}

               </div>
           </div>
       </div>
   </div>
@endsection
