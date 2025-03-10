@props(['highlight' => False])

<div @class(['higlight' => $highlight,'card'])>
    {{ $slot }}
    <a {{ $attributes }} class="btn btn-primary">View  Details</a>
</div>