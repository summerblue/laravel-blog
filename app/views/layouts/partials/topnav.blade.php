<div class="header">


    <ul class="nav nav-pills pull-right">
        <li class="active"><a href="{{ route('posts.create') }}">New Post</a></li>
        @if ($currentUser)
            <!-- <li ><a href="{{ route('users.show', $currentUser->id) }}"></a></li> -->

            <li class="dropdown">
              <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" href="#">
                {{ $currentUser->display_name }}
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li><a href="{{ URL::to('admin') }}">Go to Admin Panel</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
              </ul>
            </li>

        @else
            <li ><a href="{{ route('signup') }}">SignUp</a></li>
            <li class="active"><a href="{{ route('login') }}">Login</a></li>
        @endif

    </ul>

    <h2 class="text-muted brand">Laravel Blog</h2>

</div>
