<x-guest-layout>
    <style>
    .hero-content {
        background-image: url('{{ asset('storage/bannieres/banniere_studio.jpg') }}');
        background-repeat: no-repeat;
        background-position: center center;
        width: 100%;
        height: 100%;
    }
    </style>

    <section class="features-section">
        <div class="features-container">
            <div class="feature-box">
                <i class="fas fa-crown"></i>
                <h3>Horaires</h3>
                <p>Lundi : Fermé - Mardi : 10h00 - 19h00</p>
                <p>Mercredi : 10h00 - 19h00 - Jeudi : 10h00 - 19h00</p>
                <p>Vendredi : 10h00 - 19h00 - Samedi : 10h00 - 19h00</p>
                <p>Dimanche : Fermé</p>

            </div>
            <div class="feature-box">
                <i class="fas fa-syringe"></i>
                <h3>Adresse</h3>
                <p>100 avenue de la petite marine</p>
                <p>84800, Isle sur la Sorgue</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-users"></i>
                <h3>Équipe Professionnelle</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
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
                <div class="img-placeholder wide"><img src="{{ asset('storage/studio1.jpg') }}" alt="Studio 1" style="width: 100%; height: 100%; object-fit: cover;"></div>
                <div class="img-placeholder tall"><img src="{{ asset('storage/studio2.jpg') }}" alt="Studio 2" style="width: 100%; height: 100%; object-fit: cover;"></div>
                <div class="img-placeholder small"><img src="{{ asset('storage/studio3.jpg') }}" alt="Studio 3" style="width: 100%; height: 100%; object-fit: cover;"></div>
                <div class="img-placeholder small"><img src="{{ asset('storage/studio4.jpg') }}" alt="Studio 4" style="width: 100%; height: 100%; object-fit: cover;"></div>
            </div>
            <div class="about-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Cras semper auctor neque vitae tempus quam pellentesque, ipsum consectetur elit sit amet, leo. Tortor id aliquet lectus proin ut faucibus. Velit sed ullamcorper morbi tincidunt. Eu facilisis sed odio morbi quis commodo odio aenean sed.</p>
                <p class="quote">Facilisis sed odio morbi quis commodo odio aenean sed. Adipiscing elit ut tellus elementum sagittis vitae et leo. Tempor id aliquet lectus proin ut faucibus. Velit sed ullamcorper morbi tincidunt. Eu facilisis sed odio morbi quis commodo odio aenean sed.</p>
                <div class="signature">Martinez</div>
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

    <section class="contact-section">
        <div class="contact-container">

            <!-- COLONNE GAUCHE -->
            <div class="contact-left">
                <h3 class="contact-title">EMPLACEMENT</h3>
                <p class="contact-address">
                    100 avenue de la petite marine<br>
                    84800, Isle sur la Sorgue
                </p>

                <h3 class="contact-title">SUIVEZ NOUS</h3>
                <div class="contact-socials">
                    <a href="http://facebook.com" target="_blank"><img style="width: 50px; height: 50px;" src="{{ asset('storage/reseaux/facebook.png') }}" alt="Facebook"></a>
                    <a href="http://instagram.com" target="_blank"><img style="width: 50px; height: 50px;" src="{{ asset('storage/reseaux/instagram.png') }}" alt="Instagram"></a>
                </div>

                <p class="contact-footer">
                    <a href="{{ route('login') }}" class="admin-secret-link">© 2025 Politique de confidentialité</a>
                    <br>
                    <a href="{{ route('login') }}">{{ __('Connexion administrateur') }}</a>
                </p>
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