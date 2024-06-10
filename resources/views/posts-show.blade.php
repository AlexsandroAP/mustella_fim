<x-app-layout>
    <div class="mt-20 py-12 px-8 text-white flex md:min-h-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-transparent shadow-sm">
                <div class="container mx-auto">
                    <div class="shadow-none max-w-full rounded overflow-hidden shadow-lg sm:m-4">
                        <div class="mb-3">
                            <div class="flex items-center">
                                <img class="w-12 h-12 rounded-full"src="https://ui-avatars.com/api/?name={{ $post->user->name }}&background=FC9A03&color=ffffff"  alt="Avatar">
                                <div class="ml-2 text-white">
                                    {{ $post->user->name }}
                                </div>
                            </div>

                            <div class="font-bold text-xl mb-2 text-white">
                                {{ $post->title }}
                            </div>

                            <div class="flex justify-between">
                            <p class="text-base text-orange">
                                {{ $post->caption }}
                            </p>

                            
                            <form action="{{ route('posts.favorite', $post) }}" method="POST">
                                @csrf

                                <button type="submit"  class="text-orange rounded-xl mr-2" >  
                                    @if(Auth::user()->favorites()->where('post_id', $post->id)->exists())
                                    <img src="{{ asset('imagens/unfavorite.png') }}" class="h-10" alt="Favoritar">
                          
                                    @else
                               
                                    <img src="{{ asset('imagens/favorite.png') }}" class="h-10" alt="Desfavoritar">
                                    @endif

                                </button>    
                            </form>
                           
                            </div>

                        </div>
                        <img class="w-full md:h-30rem h-20rem text-purplle rounded-xl shadow-none" src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}">

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
