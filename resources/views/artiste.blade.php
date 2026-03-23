<x-guest-layout>
    <style>
    @if ($artiste->banniereUrl)
    .hero-content {
        background-image: url('{{ asset('storage/bannieres/' . $artiste->banniereUrl) }}');
        background-repeat: no-repeat;
        background-position: center center;
    }
    @else
    .hero-content {
        background-image: url('https://placehold.co/1200x350?text=Banniere');
        background-repeat: no-repeat;
        background-position: center center;
    }
    @endif
    </style>

    <div class="artist-bio">
        <!-- <h2>Biographie</h2> -->
        <p>{{ $artiste->bio }}</p>
    </div>

    <div class="artist-links">
        <!-- <h2>Réseaux</h2> -->

        <ul>
            @if ($artiste->instagram)
                <li><a href="{{ $artiste->instagram }}" target="_blank"><img style="width: 50px; height: 50px;" src="{{ asset('storage/reseaux/instagram.png') }}" alt="Instagram"></a></li>
            @endif

            @if ($artiste->facebook)
                <li><a href="{{ $artiste->facebook }}" target="_blank"><img style="width: 50px; height: 50px;" src="{{ asset('storage/reseaux/facebook.png') }}" alt="Facebook"></a></li>
            @endif
        </ul>
    </div>

    <section class="gallery-section">
        <div style="position: relative; width: 100%; padding-top: 177.78%; /* Aspect ratio: 1600/900 * 100 */">
            <iframe 
                src="{{ $artiste->rss }}" 
                frameborder="0" 
                style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; width: 100%; height: 100%; border: 0;">
            </iframe>
        </div>
    </section>

</x-guest-layout>
