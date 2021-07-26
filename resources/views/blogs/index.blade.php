<x-layout>
    <h2>Blog Sayfası</h2>
    <div class="container list-group">
        @foreach ($posts as $post)
            <a href="/blogs/{{ $post->slug }}" class="list-group-item hover-overlay hover-zoom hover-shadow list-group-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $post->title }}</h5>
                    <div>
                        <span class="badge bg-secondary">Secondary</span>
                        <span class="badge bg-success">Success</span>
                        <span class="badge bg-danger">Danger</span>
                    </div>

                </div>
                <p class="mb-1">{{ $post->excerpt }}</p>
                <div class="d-flex w-100 justify-content-between">
                    <small>{{ $post->user->name }} tarafından yazıldı</small>
                    <small>{{ $post->created_at->diffForHumans() }}</small>
                </div>

            </a>
        @endforeach

    </div>

</x-layout>
