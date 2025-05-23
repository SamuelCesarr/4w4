document.addEventListener('DOMContentLoaded', function () {
    const pays = [
        "France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"
    ];
    const menu = document.querySelector('.pays__menu');
    const destinations = document.querySelector('.pays__destinations');
    const domaine = document.querySelector('base').getAttribute('href');
    const titreCategorie = document.querySelector('.pays__categorie-titre');

    // Générer le menu
    pays.forEach((nom, i) => {
        const btn = document.createElement('button');
        btn.textContent = nom;
        btn.className = 'pays__btn' + (i === 0 ? ' actif' : '');
        btn.dataset.pays = nom;
        menu.appendChild(btn);
    });

    // Fonction pour charger les destinations
    function chargerDestinations(valeur, mode = 'search') {
        titreCategorie.textContent = valeur;
        let url = '';
        if (mode === 'search') {
            url = `${domaine}/wp-json/wp/v2/posts?search=${encodeURIComponent(valeur)}`;
        } else {
            url = `${domaine}/wp-json/wp/v2/posts?categories=${valeur}`;
        }
        fetch(url)
            .then(res => res.json())
            .then(data => {
                let html = '';
                if (data.length === 0) {
                    html = '<p>Aucune destination trouvée pour ce pays.</p>';
                } else {
                    data.forEach(post => {
                        html += `
                        <div class="destination__carte">
                            <div class="destination__header">
                                <h3 class="destination__titre" style="cursor:pointer;">
                                    ${post.title.rendered}
                                    <span class="destination__dots">...</span>
                                </h3>
                            </div>
                            <div class="destination__accordeon" style="display:none;">
                                ${post.excerpt.rendered}
                                <a href="${post.link}" target="_blank">Voir la destination</a>
                            </div>
                        </div>`;
                    });
                }
                destinations.innerHTML = html;

                // Accordéon animé
                document.querySelectorAll('.destination__titre').forEach(titre => {
                    titre.addEventListener('click', function () {
                        const accordeon = this.parentElement.nextElementSibling;
                        accordeon.style.display = accordeon.style.display === 'block' ? 'none' : 'block';
                    });
                });
            });
    }

    // Par défaut, France
    chargerDestinations('France');

    // Gestion du clic sur le menu
    menu.addEventListener('click', function (e) {
        if (e.target.matches('.pays__btn')) {
            document.querySelectorAll('.pays__btn').forEach(btn => btn.classList.remove('actif'));
            e.target.classList.add('actif');
            chargerDestinations(e.target.dataset.pays, 'search');
        }
    });
});