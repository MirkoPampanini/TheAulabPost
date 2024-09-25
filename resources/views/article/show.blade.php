<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{Storage::url($article->image)}}" class="img-fluid" alt="Immagine dell'articolo: {{$article->title}}">
                        <div class="text-center">
                            
                            <h2>{{$article->subtitle}}</h5>
                            <p class="fs-5">Categoria:
                                <a href="#" class="text-capitalize fw-bold text-muted">{{$article->category->name}}</a>
                            </p>
                            <div class="text-muted my-3">
                            <p>Redatto il {{$article->created_at->format('d/m/Y')}} <br>
                                da <a href="{{route('article.byUser' , $article->user)}}" class="text-capitalize text-muted">{{ $article->user->name }}</a></p>
                            </div>
                        </div>
                        <p>{{$article->body}}</p>
                        <div class="text-center">
                            <a href="{{route('article.index')}}" class="text-secondary">Vai alla lista degli articoli</a>
                            <p class="fs-5">Categoria:
                                <a href="{{route('article.byCategory',$article->category)}}" class="text-capitalize text-mute"></a>
                            </p>
    
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</x-layout>