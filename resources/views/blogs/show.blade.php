<x-layout>
    <div class="container">
        <h2 class="text-center">{{ $post->title }}</h2>
        <p> {{ $post->body }}</p>
        <a href="{{ url()->previous() }}" class="btn btn-outline-danger">Geriye Dön</a>
    </div>


</x-layout>
