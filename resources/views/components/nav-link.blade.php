@props(['active' => false])

<a class="nav-link {{ $active ? 'text-warning' : 'text-light' }}" style="font-size: 22px" aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}>
    {{ $slot }}</a>
