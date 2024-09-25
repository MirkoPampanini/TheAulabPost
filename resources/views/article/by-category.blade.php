<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="Immagine dell'articolo: {{$article->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                            
                        </div>
                        <div class="card-footer d-flex justify-content-between align-itmes-center">
                            <p>Redatto il {{$article->created_at->format('d/m/Y')}} <br>
                                da {{$article->user->name}}</p>
                                <a href="{{route('article.show', $article)}}" class="btn btn-outline-secondary">Leggi</a>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</x-layout>