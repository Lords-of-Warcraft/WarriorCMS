@props(['value'])

<label {{ $attributes->merge(['class' => 'text-white']) }}>
    {{ $value ?? $slot }}
</label>