{{-- Popup Newsletter --}}
<div id="newsletterModal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.7); z-index:9999; align-items:center; justify-content:center;">
    <div style="background:#fff; padding:40px; max-width:480px; width:90%; border-radius:8px; position:relative;">

        <button onclick="document.getElementById('newsletterModal').style.display='none'"
                style="position:absolute; top:12px; right:16px; background:none; border:none; font-size:22px; cursor:pointer; color:#333;">
            &times;
        </button>

        <h3 style="margin-bottom:10px; font-size:20px;">Newsletter Inked Panda</h3>
        <p style="margin-bottom:20px; color:#555; font-size:14px;">
            En vous abonnant, vous acceptez de recevoir nos emails vous informant des nouveautés,
            événements et offres spéciales du studio Inked Panda.
        </p>

        <div id="newsletterSuccess" style="display:none; color:green; margin-bottom:15px; font-weight:bold;">
            ✓ Inscription réussie ! Merci de votre abonnement.
        </div>
        <div id="newsletterError" style="display:none; color:red; margin-bottom:15px;"></div>

        <form id="newsletterForm">
            @csrf
            <div style="margin-bottom:12px;">
                <input type="text" id="newsletter_nom" placeholder="Nom" required
                       style="width:100%; padding:10px; border:1px solid #ccc; border-radius:4px; font-size:14px;">
            </div>
            <div style="margin-bottom:12px;">
                <input type="text" id="newsletter_prenom" placeholder="Prénom" required
                       style="width:100%; padding:10px; border:1px solid #ccc; border-radius:4px; font-size:14px;">
            </div>
            <div style="margin-bottom:20px;">
                <input type="email" id="newsletter_email" placeholder="Adresse email" required
                       style="width:100%; padding:10px; border:1px solid #ccc; border-radius:4px; font-size:14px;">
            </div>
            <button type="submit" class="contact-btn" style="width:100%; color:#fff; background-color:#b8860b; border:none; padding:12px; font-size:15px; cursor:pointer; border-radius:4px;">S'abonner</button>
        </form>
    </div>
</div>

<script>
document.getElementById('newsletterForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const successEl = document.getElementById('newsletterSuccess');
    const errorEl   = document.getElementById('newsletterError');
    successEl.style.display = 'none';
    errorEl.style.display   = 'none';

    const data = {
        nom:    document.getElementById('newsletter_nom').value,
        prenom: document.getElementById('newsletter_prenom').value,
        email:  document.getElementById('newsletter_email').value,
        _token: document.querySelector('#newsletterForm input[name="_token"]').value,
    };

    try {
        const response = await fetch('{{ route("newsletter.store") }}', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
            body: JSON.stringify(data),
        });

        const result = await response.json();

        if (response.ok) {
            successEl.style.display = 'block';
            document.getElementById('newsletterForm').reset();
        } else {
            const errors = result.errors ? Object.values(result.errors).flat().join('<br>') : result.message;
            errorEl.innerHTML = errors;
            errorEl.style.display = 'block';
        }
    } catch (err) {
        errorEl.innerHTML = 'Une erreur est survenue. Veuillez réessayer.';
        errorEl.style.display = 'block';
    }
});

document.getElementById('newsletterModal').addEventListener('click', function(e) {
    if (e.target === this) this.style.display = 'none';
});
</script>