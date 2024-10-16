@props(['active' => false])

<li class="nav-item {{ $active ? 'active' : 'no' }}">
    {{ $slot }}
</li>
