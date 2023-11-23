@php( $logout_url = View::getSection('logout_url') ?? config('tablar.logout_url', 'logout') )

        @if (config('tablar.use_route_url', true))
            @php( $logout_url = $logout_url ? route($logout_url) : '' )
        @else
            @php( $logout_url = $logout_url ? url($logout_url) : '' )
        @endif

<button class="btn btn-primary w-100" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Cerrar Sesión
</button>


<form id="logout-form" action="{{ $logout_url }}" method="POST" style="display: none;">
            @if(config('tablar.logout_method'))
                {{ method_field(config('tablar.logout_method')) }}
            @endif
            {{ csrf_field() }}
</form>
