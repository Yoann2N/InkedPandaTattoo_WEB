<x-guest-layout>

    {{-- Bannière artiste pleine largeur --}}
    <div class="artiste-banniere">
        @if ($artiste->banniereUrl)
            <img src="{{ asset('storage/bannieres/' . $artiste->banniereUrl) }}"
                 alt="{{ $artiste->pseudo }}">
        @else
            <img src="https://placehold.co/2000x700?text=Banniere"
                 alt="Banniere">
        @endif
    </div>

    <div class="artist-bio">
        @auth
            <form method="POST" action="{{ route('artiste.update', $artiste->pseudo) }}">
                @csrf
                <textarea name="bio" rows="6" style="width:100%; background:transparent; border:1px solid #444; font-size:15px; padding:8px; resize:vertical; font-family:inherit; color:#555;">{{ $artiste->bio }}</textarea>
                <button type="submit" style="margin-top: 10px; padding: 8px 20px; background: var(--color-accent); border: none; cursor: pointer; font-weight: bold;">Enregistrer</button>
            </form>
        @else
            <p>{{ $artiste->bio }}</p>
        @endauth
    </div>

    <div class="artist-links">
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
        <div style="position: relative; width: 100%; padding-top: 177.78%;">
            <iframe
                src="{{ $artiste->rss }}"
                frameborder="0"
                style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; width: 100%; height: 100%; border: 0;">
            </iframe>
        </div>
    </section>

    <section class="contact-section">
        <div class="contact-container">

            <div class="contact-left">
                <h3 class="contact-title">EMPLACEMENT</h3>
                <p class="contact-address">
                    100 avenue de la petite marine<br>
                    L'Isle-sur-la-Sorgue 84800
                </p>

                <h3 class="contact-title">SUIVEZ NOUS</h3>
                <div class="contact-socials">
                    <a href="http://facebook.com" target="_blank"><img style="width: 50px; height: 50px;" src="{{ asset('storage/reseaux/facebook.png') }}" alt="Facebook"></a>
                    <a href="http://instagram.com" target="_blank"><img style="width: 50px; height: 50px;" src="{{ asset('storage/reseaux/instagram.png') }}" alt="Instagram"></a>
                </div>

                <p class="contact-footer">
                    <a href="{{ route('login') }}" class="admin-secret-link">© 2026 Politique de confidentialité</a>
                </p>
            </div>

            <div class="contact-divider"></div>

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