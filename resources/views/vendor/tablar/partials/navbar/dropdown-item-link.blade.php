
@if(config('app.view_id') == $item['rolAutorizado'][0] or config('app.view_id') == $item['rolAutorizado'][1] or config('app.view_id') == $item['rolAutorizado'][2])
<li class="nav-item {{ $item['class'] }}" @isset($item['id']) id="{{ $item['id'] }}" @endisset>
    <a class="nav-link " @isset($item['target']) target="{{ $item['target'] }}" @endisset
    {!! $item['data-compiled'] ?? '' !!}
    href="{{ $item['href'] }}/{{config('app.user_type')}}">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
              @if(isset($item['icon']))
                            <i class="{{ $item['icon'] ?? '' }} {{
                isset($item['icon_color']) ? 'text-' . $item['icon_color'] : ''
            }}"></i>
                        @else
                            <i class="ti ti-brand-tabler"></i>
                        @endif
                    </span>
        <span class="nav-link-title">
                            {{ $item['text'] }}
        </span>
    </a>
</li>
@else
@endif