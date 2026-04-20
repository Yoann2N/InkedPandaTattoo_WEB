<x-guest-layout>
    <section class="features-section">
        <div class="features-container">
            <table>
                <thead>
                    <tr>
                        <th>Artiste</th>
                        <th>Nombre de vues</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stats as $artiste)
                    <tr>
                        <td>{{ $artiste->pseudo }}</td>
                        <td>{{ $artiste->vues_count }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-guest-layout>
