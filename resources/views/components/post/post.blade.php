@props(['post'])
<div class=" {{ $post->habilitated ? 'bg-white' : 'bg-red-300' }} rounded-2xl shadow-md p-6 flex gap-6 w-full max-w-4xl mx-auto items-start">
    <div class="flex-shrink-0">
      <img class="w-28 h-28 rounded-full object-cover border border-gray-300" src="{{ asset('images/bordeDecorativo/' . $post->user->borde ?? 'default-avatar.png') }}" alt="Avatar de {{ $post->user_id}}">
    </div>
      <div class="flex-1 space-y-3">
          <h2 class="text-xl font-bold bg-gray-100 rounded px-3 py-1 w-full">{{ $post->title }}</h2>
        <p class="mt-2 bg-gray-100 rounded px-3 py-2 w-full">{{ Str::limit($post->content, 100) }}</p>
      <div class="flex justify-center">
        <a href="{{ url('/post/show/' . $post->id) }}" class="inline-block bg-[#c2b280] text-white px-4 py-2 rounded hover:bg-[#a99967]"> Ver post</a>
      </div>
      </div>
  </div>