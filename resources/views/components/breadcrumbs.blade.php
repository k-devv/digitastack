@if(isset($breadcrumbs) && count($breadcrumbs) > 0)
<nav aria-label="Breadcrumb" style="padding: 0.75rem 0; font-size: 0.875rem; color: var(--muted);">
    <div class="container">
        <ol style="display: flex; flex-wrap: wrap; list-style: none; gap: 0.25rem;">
            <li><a href="/" style="color: var(--muted);">Home</a></li>
            @foreach($breadcrumbs as $label => $url)
                <li style="color: var(--muted);">
                    <span style="margin: 0 0.25rem;">/</span>
                    @if($url)
                        <a href="{{ $url }}" style="color: var(--muted);">{{ $label }}</a>
                    @else
                        <span aria-current="page">{{ $label }}</span>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
</nav>
@endif
