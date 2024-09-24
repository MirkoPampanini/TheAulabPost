<x-layout>
    <div class="container-fluid p-5 bg-secondary text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Inserisci un Articolo</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('article.store')}}" method="POST" class="card p-5 shadow" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title"
                            value="{{ old('title') }}">
                        @error('title')
                            <span class="text-danger">{{ $meassage }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle"
                            value="{{ old('subtitle') }}">
                        @error('subtitle')
                            <span class="text-danger">{{ $meassage }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" name="image" class="form-control" id="image"
                            value="{{ old('image') }}">
                        @error('image')
                            <span class="text-danger">{{ $meassage }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select name="category" id="category" class="form-control">
                            <option selected disabled>Seleziona una categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="text-danger">{{ $meassage }}</span>
                        @enderror
                        
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo</label>
                        <textarea type="body"class="form-control" id="body" cols="30" rows="7">
                            {{ old('image') }}</textarea>
                        @error('body')
                            <span class="text-danger">{{ $meassage }}</span>
                        @enderror
                    </div>
                    <div class="mt-3 d-flex justify-content-center flex-column align-items-center">
                        <button type="submit" class="btn btn-outline-secondary">Inserisci Articolo</button>
                        <a href="{{route('home')}}" class="text-secondary mt-2">Torna alla Home</a>
                    </div>
                </form>

            </div>
        </div>
    </div>




</x-layout>
