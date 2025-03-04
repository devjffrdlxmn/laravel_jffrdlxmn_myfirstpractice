@props(['highlight' => False])

<div @class(['higlight' => $highlight,'card'])>
    {{ $slot }}
    <a {{ $attributes }} class="btn">View  Details</a>
</div>