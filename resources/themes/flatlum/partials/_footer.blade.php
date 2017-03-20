

<div class="footer container-fluid navbar-fixed-bottom">
    <p class="pull-left">&copy; {{ date('Y') }}</p>
    @can('quarx')
        <a class="btn btn-xs btn-default pull-right" href="{{ url('quarx/dashboard') }}">Quarx</a>
        @yield('quarx')
    @else
        <a class="btn btn-xs btn-default pull-right" href="{{ url('login') }}">Login</a>
    @endcan
</div>
