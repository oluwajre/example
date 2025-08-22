@props(['name'])

@error($name)
    <p class="mt-2 text-xs font-bold text-red-500">{{ $message }}</p>
@enderror