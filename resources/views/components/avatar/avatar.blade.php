@props(['src', 'checked' => false, 'size' => 24])

<label class="cursor-pointer relative group">
    <input type="radio" name="avatar" value="{{ basename($src) }}" class="absolute opacity-0 peer"
        {{ $checked ? 'checked' : '' }}>
    <img src="{{ $src }}"
        class="w-{{ $size }} h-{{ $size }} object-cover border-2 rounded-full transition
        peer-checked:border-[#0d1b2a] border-transparent hover:border-[#0d1b2a]">
</label>
