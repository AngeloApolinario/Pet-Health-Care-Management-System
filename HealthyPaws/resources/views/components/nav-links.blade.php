@props(['active' => false])

<a {{ $attributes->merge(['class' => $active ? 'bg-blue-600 text-white p-2 px-4 rounded-2xl' : '']) }}>{{$slot}}</a>