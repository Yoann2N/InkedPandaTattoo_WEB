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

    .hero-content {
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;   /* ← l'image remplit tout */
    width: 100%;
    height: 100%; }
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

    <section class="contact-section">
        <div class="contact-container">

            <!-- COLONNE GAUCHE -->
            <div class="contact-left">

                <h3 class="contact-title">EMPLACEMENT</h3>

                <p class="contact-address">
                    100 avenue de la petite marine<br>
                    L'Isle-sur-la-Sorgue 84800
                </p>

                <h3 class="contact-title">SUIVEZ NOUS</h3>

                <div class="contact-socials">
                    <a href="http://facebook.com" target="_blank"><img style="width: 50px; height: 50px;" src="{{ asset('storage/reseaux/facebook.png') }}" alt="Facebook"></a>
                    <!-- <a href="http://twitter.com" target="_blank"><img style="width: 50px; height: 50px;" src="{{ asset('storage/reseaux/twitter.png') }}" alt="Twitter"></a> -->
                    <a href="http://instagram.com" target="_blank"><img style="width: 50px; height: 50px;" src="{{ asset('storage/reseaux/instagram.png') }}" alt="Instagram"></a>
                    <!-- <a href="http://google.com" target="_blank"><img style="width: 50px; height: 50px;" src="{{ asset('storage/reseaux/google.png') }}" alt="Google"></a> -->
                </div>

                <p class="contact-footer">© 2026 Politique de confidentialité</p>
                

            </div>

            <!-- COLONNE CENTRALE (BANDE JAUNE) -->
            <div class="contact-divider"></div>

            <!-- COLONNE DROITE (FORMULAIRE) -->
            <div class="contact-right">

                <h3 class="contact-title">FORMULAIRE DE CONTACT</h3>

                <form class="contact-form">

                    <input type="text" placeholder="Enter your Name">
                    <input type="email" placeholder="Enter a valid email address">
                    <textarea placeholder="Enter your message"></textarea>

                    <button type="submit" class="contact-btn">Soumettre</button>

                </form>
            </div>

        </div>
    </section>

</x-guest-layout>
