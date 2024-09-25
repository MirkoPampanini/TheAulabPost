<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>The Aulab Post</h1>

                @if (session('image'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="container-fluid p-5 bg-secondary text-center">
                    <div class="row">
                        <div class="col-12">
                            <h1>Tutti gli Articoli</h1>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-12 col-md-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ Storage::url($article->image) }}" class="img-fluid"
                                        alt="Immagine dell'articolo: {{ $article->title }}">
                                    <div class="text-center">

                                        <h2>{{ $article->subtitle }}</h5>
                                            <p class="fs-5">Categoria:
                                                <a href="{{ route('article.byCategory', $article->category) }}"
                                                    class="text-capitalize fw-bold text-muted">{{ $article->category->name }}</a>
                                            </p>
                                            <div class="text-muted my-3">
                                                <p>Redatto il {{ $article->created_at->format('d/m/Y') }} <br>
                                                    da  <a href="{{route('article.byUser' , $article->user)}}" class="text-capitalize text-muted">{{ $article->user->name }}</a></p>
                                            </div>
                                    </div>
                                    <p>{{ $article->body }}</p>
                                    <a href="{{ route('article.show', $article) }}"
                                        class="btn btn-outline-secondary">Leggi</a>
                                    <div class="text-center">
                                        <a href="{{ route('article.index') }}" class="text-secondary">Vai alla lista
                                            degli articoli</a>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>
