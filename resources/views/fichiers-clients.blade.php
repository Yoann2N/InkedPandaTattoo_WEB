<x-guest-layout>
    <div style="max-width:900px; margin:40px auto; padding:20px;">

        <h2 style="font-size:28px; font-weight:bold; margin-bottom:20px;">Fichiers clients — Newsletter</h2>

        @if(session('success'))
            <div style="background:#d4edda; color:#155724; padding:10px 16px; border-radius:4px; margin-bottom:20px;">
                {{ session('success') }}
            </div>
        @endif

        <table style="width:100%; border-collapse:collapse; background:#fff; border:1px solid #ddd; border-radius:6px; overflow:hidden;">
            <thead>
                <tr style="background:#e0e0e0;">
                    <th style="padding:10px 14px; text-align:left; font-weight:bold;">Id</th>
                    <th style="padding:10px 14px; text-align:left; font-weight:bold;">Nom</th>
                    <th style="padding:10px 14px; text-align:left; font-weight:bold;">Prénom</th>
                    <th style="padding:10px 14px; text-align:left; font-weight:bold;">Email</th>
                    <th style="padding:10px 14px; text-align:left; font-weight:bold;">Date d'inscription</th>
                    <th style="padding:10px 14px; text-align:left; font-weight:bold;">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($abonnes as $abonne)
                    <tr style="border-top:1px solid #eee; {{ $loop->odd ? 'background:#f9f9f9;' : '' }}">
                        <td style="padding:10px 14px;">{{ $abonne->id }}</td>
                        <td style="padding:10px 14px;">{{ $abonne->nom }}</td>
                        <td style="padding:10px 14px;">{{ $abonne->prenom }}</td>
                        <td style="padding:10px 14px;">{{ $abonne->email }}</td>
                        <td style="padding:10px 14px;">{{ $abonne->created_at->format('d/m/Y') }}</td>
                        <td style="padding:10px 14px;">
                            <form method="POST" action="{{ route('newsletter.destroy', $abonne->id) }}"
                                  onsubmit="return confirm('Supprimer cet abonné ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        style="background:#dc3545; color:#fff; border:none; padding:6px 12px; border-radius:4px; cursor:pointer; font-size:13px;">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="padding:20px; text-align:center; color:#888;">Aucun abonné pour le moment.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div style="margin-top:16px; color:#666; font-size:14px;">
            Total : {{ $abonnes->count() }} abonné(s)
        </div>

    </div>
</x-guest-layout>