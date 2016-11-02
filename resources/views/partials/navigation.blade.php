<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
    @else
        <li><a href="{{ url('/settings') }}">Settings</a></li>
        <li><a href="{{ url('/admin') }}">Administration</a></li>
        <li>
            <a href="{{ url('/logout') }}"
               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    @endif
</ul>
<nav class="blue-grey darken-3">
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">{{ config('app.name', 'Laravel') }}</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Forum</a></li>
            <li><a href="{{ url('/user') }}">Mitglieder</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">@if(Auth::check()){{ Auth::user()->name }}@endif<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>

