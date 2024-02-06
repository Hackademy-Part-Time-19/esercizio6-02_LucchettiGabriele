<x-layout>
   
    <x-navbar/>
    
    <div style="margin-top:150px;margin-bottom:50px;">
        <button class="btn btn-primary" style="color:white;font-size:28px;width:500px"><a
                href="{{route('anime.genres',['genres'=>$anime['genres'][0]['mal_id']])}}"class="link" style="color:white; text-decoration:none">Torna alla pagina
                precedente</a></button>
    </div>
    <div class="card" style="width: 100%; height:1500px;">


        <h2 class="card-title text-center" style="font-size:44px;">{{ $anime['title'] }}</h2>
        <img style="width: 100%;height:750px;object-fit:contain;margin-top:45px" src={{ $anime['images']['jpg']['image_url'] }}
            class="card-img-top" alt="...">
        <div class="card-body mt-4 text-center">

            <p class="card-text" style="font-size:25px">
                <span style='font-weight:bold;'>Descrizione:</span><br>{{ $anime['synopsis'] }}</p>
            <p class="card-text" style="font-size:25px"><span style='font-weight:bold;'>Rank:</span> {{ $anime['rank'] }}</p>
            <p class="card-text" style="font-size:25px"><span style='font-weight:bold;'>Durata:</span> {{ $anime['duration'] }}</p>
            <p class="card-text" style="font-size:25px"><span style='font-weight:bold;'>Episodi:</span> {{ $anime['episodes'] }}</p>





        </div>
    </div>
</x-layout>
