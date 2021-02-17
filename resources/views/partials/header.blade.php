<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
<<<<<<< HEAD
                    <a class="nav-link" href="{{ route('shopping-cart') }}"><i class="fas fa-shopping-cart"></i> Shopping Cart <span class="badge badge-primary">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a>
=======
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Shopping Cart</a>
>>>>>>> a5396dd8df771f8f884aea0b4a306973bc89fc7d
                </li>
                      @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
              
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
                                    a class="dropdown-item" href="{{ route('profile') }}">
                                        User Profile
                                    </a>

=======
>>>>>>> a5396dd8df771f8f884aea0b4a306973bc89fc7d
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </ul>
        </div>
    </div>
</nav>
