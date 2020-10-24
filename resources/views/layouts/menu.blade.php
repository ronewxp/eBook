<li class="{{ Request::is('authors*') ? 'active' : '' }}">
    <a href="{{ route('authors.index') }}"><i class="fa fa-user-o"></i><span>Authors</span></a>
</li>

<li class="{{ Request::is('books*') ? 'active' : '' }}">
    <a href="{{ route('books.index') }}"><i class="fa fa-book"></i><span>Books</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>
