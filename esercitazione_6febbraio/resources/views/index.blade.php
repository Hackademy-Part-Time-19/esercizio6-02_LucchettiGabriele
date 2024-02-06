<x-layout>
    <x-navbar />
   


    <div class="container" style='margin-top:50px;'>


        @foreach ($response as $anime)
    
            <ul>
                <a href="{{route('anime.genres',['genres' => $anime['mal_id']])}}">{{ $anime['name'] }}</a>
            </ul>
        @endforeach

    </div>
</x-layout>
