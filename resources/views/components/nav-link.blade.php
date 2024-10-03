@props(['active' => false])

<a class="nav-link {{ $active ? 'text-warning' : 'text-light' }} nav-text" aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}>
    {{ $slot }}</a>
