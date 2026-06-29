@if(isset($breadcrumbs) && count($breadcrumbs) > 0)
<nav aria-label="Breadcrumb">
    <div class="container">
        <ol class="breadcrumbs">
            <li><a href="/">Home</a></li>
            @foreach($breadcrumbs as $label => $url)
                <li>
                    @if($url)
                        <a href="{{ $url }}">{{ $label }}</a>
                    @else
                        <span aria-current="page">{{ $label }}</span>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
</nav>
@endif
