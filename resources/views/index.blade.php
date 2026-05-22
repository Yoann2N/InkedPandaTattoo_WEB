<x-guest-layout>

    <form action="{{ route('index.store') }}" method="POST">
        @csrf

        <section class="features-section">
            @auth
            <div style="text-align:center; margin-bottom: 10px;">
                <x-primary-button class="ms-3">{{ __('Enregistrer') }}</x-primary-button>
            </div>
            @endauth
            <div class="features-container">
                @auth
                    <div class="feature-box">
                        <h3>Horaires</h3>
                        <textarea rows="8" name="texte_horaires">{{ $textes[0]['contenu'] }}</textarea>
                    </div>
                @else
                    <div class="feature-box">
                        <i class="fas fa-crown"></i>
                        <h3>Horaires</h3>
                        <p>{!! $textes[0]['contenu'] !!}</p>
                    </div>
                @endauth

                @auth
                    <div class="feature-box">
                        <h3>Adresse</h3>
                        <textarea rows="8" name="texte_adresse">{{ $textes[1]['contenu'] }}</textarea>
                    </div>
                @else
                    <div class="feature-box">
                        <i class="fas fa-crown"></i>
                        <h3>Adresse</h3>
                        <p>{!! $textes[1]['contenu'] !!}</p>
                    </div>
                @endauth

                @auth
                    <div class="feature-box">
                        <h3>Équipe Professionnelle</h3>
                        <textarea rows="8" name="texte_equipe-professionelle">{{ $textes[2]['contenu'] }}</textarea>
                    </div>
                @else
                    <div class="feature-box">
                        <i class="fas fa-crown"></i>
                        <h3>Équipe Professionnelle</h3>
                        <p>{!! $textes[2]['contenu'] !!}</p>
                    </div>
                @endauth
            </div>
        </section>

        <section class="gallery-section">
            <div class="gallery-content">
                <div class="gallery-grid">
                    @foreach ($artistes as $artiste)
                    <div class="grid-img-placeholder">
                        <a href="{{ url('/artiste/' . $artiste->pseudo) }}">
                            <figure>
                                <img src="{{ asset('storage/vignettes/' . $artiste->vignetteUrl) }}" alt="{{ $artiste->pseudo }}">
                                <legend>
                                    <h3>{{ $artiste->pseudo }}</h3>
                                    <p>{{ $artiste->profession }}</p>
                                </legend>
                            </figure>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="about-header">
                <p class="est-year">EST 1990</p>
                <h2>We are Best Tattoo Studio <br> in Town</h2>
            </div>

            <div class="about-content">
                <div class="about-gallery">
                    <div class="img-placeholder wide">
                        <img src="{{ asset('storage/studio1.jpeg') }}" alt="Studio 1">
                    </div>
                    <div class="img-placeholder tall">
                        <img src="{{ asset('storage/studio2.jpeg') }}" alt="Studio 2">
                    </div>
                    <div class="img-placeholder small">
                        <img src="{{ asset('storage/studio3.jpg') }}" alt="Studio 3">
                    </div>
                    <div class="img-placeholder small">
                        <img src="{{ asset('storage/studio4.jpeg') }}" alt="Studio 4">
                    </div>
                </div>
                <div class="about-text">
                    @auth
                        <textarea rows="12" name="texte_biographie-studio" style="width:100%; background:transparent; border:1px solid #444; font-size:15px; padding:8px; resize:vertical; font-family:inherit; color:#555;">{{ $textes[3]['contenu'] }}</textarea>
                    @else
                        <p>{!! $textes[3]['contenu'] !!}</p>
                    @endauth
                    <div class="signature">Alexis</div>
                </div>
            </div>
        </section>

        <section class="products-section">
            <div class="products-header">
                <h2>Nos Produits</h2>
            </div>
            <div class="products-gallery">
                <div class="product-placeholder" style="background-image: url('{{ asset('storage/produits/produit1.jpg') }}')"></div>
                <div class="product-placeholder" style="background-image: url('{{ asset('storage/produits/produit2.jpg') }}')"></div>
                <div class="product-placeholder" style="background-image: url('{{ asset('storage/produits/produit3.jpg') }}')"></div>
                <div class="product-placeholder" style="background-image: url('{{ asset('storage/produits/produit4.jpg') }}')"></div>
            </div>
        </section>

    </form>

    <section class="contact-section">
        <div class="contact-container">

            <div class="contact-left">
                <h3 class="contact-title">EMPLACEMENT</h3>
                <p class="contact-address">
                    100 avenue de la petite marine<br>
                    84800, Isle sur la Sorgue
                </p>

                <h3 class="contact-title">SUIVEZ NOUS</h3>
                <div class="contact-socials">
                    <a href="https://www.facebook.com/InkedPandatattoostudio" target="_blank"><img style="width: 50px; height: 50px;" src="{{ asset('storage/reseaux/facebook.png') }}" alt="Facebook"></a>
                    <a href="https://www.instagram.com/studio.inked.panda/" target="_blank"><img style="width: 50px; height: 50px;" src="{{ asset('storage/reseaux/instagram.png') }}" alt="Instagram"></a>
                </div>

                <p class="contact-footer">
                    <a href="{{ route('login') }}" class="admin-secret-link">© 2025 Politique de confidentialité</a>
                    <br>
                    <a href="{{ route('login') }}">{{ __('Connexion administrateur') }}</a>
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