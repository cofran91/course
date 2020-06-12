<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        {{auth()->user()->name}}
                        {{auth()->user()->rol['name']}}
                        {{-- <a href="{{ url('/home') }}">Home</a> --}}
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button>Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<nav>
		<ul>
			<li><a href="{{ route('home') }}">Home</a></li>
			<li><a href="{{ route('about.index') }}">About</a></li>
			<li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
			
            @auth
                @if ( auth()->user()->hasRoles(['admin', 'client']) )
                    <li><a href="{{ route('contact.index') }}">Contact</a></li>
                @endif
            @endauth
           
		</ul>	
	</nav>