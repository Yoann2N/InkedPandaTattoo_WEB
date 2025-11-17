<x-guest-layout>


    <section class="features-section">
        <div class="features-container">
            <div class="feature-box">
                <i class="fas fa-crown"></i>
                <h3>Best Tattoo in Town</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-syringe"></i>
                <h3>Sterile Equipment</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-users"></i>
                <h3>Professional Team</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
        </div>
    </section>


    <section class="gallery-section">
        <div class="gallery-content">
            <div class="gallery-grid">
                @foreach ($artistes as $artiste)
                <div class="grid-img-placeholder small">
                    <figure>
                        {{-- <img src="{{ asset('storage/' . $artiste->image) }}" alt="Tattoo 1"> --}}
                        <img src="https://placehold.co/600x400?text=Image" alt="Tattoo 1">
                        <legend><h3>{{ $artiste->pseudo }}</h3><p>{{ $artiste->profession }}</p></legend>
                    </figure>
                </div>
                @endforeach
                
                {{-- <div class="grid-img-placeholder small">
                    <figure>
                        <img src="https://placehold.co/600x400?text=Image" alt="Tattoo 1">
                        <legend><h3>Tatoueur</h3><p>Ligne 2</p></legend>
                    </figure>
                </div>
                <div class="grid-img-placeholder small">
                    <figure>
                        <img src="https://placehold.co/600x400?text=Image" alt="Tattoo 1">
                        <legend><h3>Tatoueur</h3><p>Ligne 2</p></legend>
                    </figure>
                </div>
                <div class="grid-img-placeholder small">
                    <figure>
                        <img src="https://placehold.co/600x400?text=Image" alt="Tattoo 1">
                        <legend><h3>Tatoueur</h3><p>Ligne 2</p></legend>
                    </figure>
                </div>
                <div class="grid-img-placeholder small">
                    <figure>
                        <img src="https://placehold.co/600x400?text=Image" alt="Tattoo 1">
                        <legend><h3>Tatoueur</h3><p>Ligne 2</p></legend>
                    </figure>
                </div>
                <div class="grid-img-placeholder small">
                    <figure>
                        <img src="https://placehold.co/600x400?text=Image" alt="Tattoo 1">
                        <legend><h3>Tatoueur</h3><p>Ligne 2</p></legend>
                    </figure>
                </div>
                <div class="grid-img-placeholder small">
                    <figure>
                        <img src="https://placehold.co/600x400?text=Image" alt="Tattoo 1">
                        <legend><h3>Tatoueur</h3><p>Ligne 2</p></legend>
                    </figure>
                </div> --}}

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
                <div class="img-placeholder wide"></div>
                <div class="img-placeholder tall"></div>
                <div class="img-placeholder small"></div>
                <div class="img-placeholder small"></div>
                <div class="img-placeholder small"></div>
            </div>
            <div class="about-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Cras semper auctor neque vitae tempus quam pellentesque, ipsum consectetur elit sit amet, leo. Tortor id aliquet lectus proin ut faucibus. Velit sed ullamcorper morbi tincidunt. Eu facilisis sed odio morbi quis commodo odio aenean sed.</p>
                
                <p class="quote">Facilisis sed odio morbi quis commodo odio aenean sed. Adipiscing elit ut tellus elementum sagittis vitae et leo. Tempor id aliquet lectus proin ut faucibus. Velit sed ullamcorper morbi tincidunt. Eu facilisis sed odio morbi quis commodo odio aenean sed.</p>
                
                <div class="signature">Martinez</div>
            </div>
        </div>
    </section>
</x-guest-layout>