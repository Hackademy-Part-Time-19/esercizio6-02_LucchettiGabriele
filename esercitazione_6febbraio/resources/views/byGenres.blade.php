<!DOCTYPE html>
<x-layout>

    <x-navbar />

    <div class="container" style="margin-top:100px">
        <div class="row">
            @foreach ($response as $animeGenre)
                <div class="col-lg-3" style="margin-top:20px">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $animeGenre['images']['jpg']['image_url'] }}" class="card-img-top" alt="..." style="width:100%;height:300px;object-fit:cover;">
                        <div class="card-body">
                            <h6 class="card-title">{{ $animeGenre['title'] }}</h6>
                            
                            <p class="card-text"style='color:grey'>{{ Str::limit($animeGenre['synopsis'], 80) }}</p>
                            <a href="{{route('anime.show',['id'=>$animeGenre['mal_id']])}}" class="btn btn-primary">Vai all'Anime</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
