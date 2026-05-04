<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])

        <!-- TinyMCE (uniquement pour l'admin) -->
        @auth
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea',
                language: 'fr_FR',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                images_upload_url: '/upload-image',
                automatic_uploads: true,
                file_picker_types: 'image',
                setup: function(editor) {
                    editor.on('change', function() {
                        editor.save();
                    });
                }
            });
        </script>
        @endauth
    </head>

    <body class="font-sans text-gray-900 antialiased">
        @include('layouts.navigation')

        {{-- Header vidéo uniquement sur la page d'accueil --}}
        @if (Route::currentRouteName() === 'index')
            <header class="hero-section">
                <video class="hero-video" autoplay muted loop playsinline>
                    <source src="{{ asset('storage/bannieres/banniere_studio_vid.mp4') }}" type="video/mp4">
                </video>
                <div class="hero-content"></div>
            </header>
        @endif

        {{ $slot }}

    </body>
</html>