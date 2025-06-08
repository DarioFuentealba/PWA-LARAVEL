@extends('layout')

@section('content')
<div class="min-h-[500px]">
    <x-titulo.titulo>Posts de {{ Auth::user()->name }} 
        <x-personajeDecorativo src="images/personajesDecorativos/granjera.png" alt="granjera" class="w-16 h-16 inline-block mr-2 align-middle" />
    </x-titulo.titulo>
    <div class="ml-20 mr-20">
        
        <h1 class="text-2xl font-bold mb-4 ml-40">Mis posts</h1>
         <div class="my-6 ml-40">
        <a href="{{ url('/post/create') }}" class="bg-[#c2b280] text-white px-4 py-2 rounded hover:bg-[#bea762]">
            Nuevo post
        </a>

    </div>
    @forelse($posts as $post)


        <div class="m-5"> 
            <a href="{{ url('/post/show/' . $post->id) }}">
                <x-post.post :post="$post" />
            </a>
        </div>



    @empty
        <br><x-titulo.titulo> No tenés posts </x-titulo.titulo>
    @endforelse

   
    
    </div>
    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</div> 
@endsection