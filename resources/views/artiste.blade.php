<x-guest-layout>

    
    @if ($artiste->banniereUrl)
        <div class="artist-banner">
            <img src="{{ asset('storage/' . $artiste->banniereUrl) }}"
                 alt="Bannière de {{ $artiste->pseudo }}">
        </div>
    @else
        <div class="artist-banner">
            <img src="https://placehold.co/1200x350?text=Banniere" alt="Bannière par défaut">
        </div>
    @endif



    
    <div class="artist-bio">
        <h2>Biographie</h2>
        <p>{{ $artiste->bio }}</p>
    </div>


    
    <div class="artist-links">
        <h2>Réseaux</h2>

        <ul>
            @if ($artiste->instagram)
                <li><a href="{{ $artiste->instagram }}" target="_blank">Instagram</a></li>
            @endif

            @if ($artiste->facebook)
                <li><a href="{{ $artiste->facebook }}" target="_blank">Facebook</a></li>
            @endif
        </ul>
    </div>

    




    <section class="gallery-section">
        <div class="gallery-content">
            <div class="gallery-grid">

                @for ($i = 0; $i < 6; $i++)
                    <div class="grid-img-placeholder small">
                        <figure>
                            <img src="https://placehold.co/600x400?text=Image" alt="">
                        </figure>
                    </div>
                @endfor

            </div>
        </div>
    </section>




</x-guest-layout>
