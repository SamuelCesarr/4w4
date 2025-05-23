document.addEventListener('DOMContentLoaded', function () {
    const pays = [
        "France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"
    ];
    const menu = document.querySelector('.pays__menu');
    const destinations = document.querySelector('.pays__destinations');
    const domaine = document.querySelector('base').getAttribute('href')

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
                            <h3>${post.title.rendered}</h3>
                            <div class="destination__accordeon">
                                <button class="accordeon__btn">Voir la description</button>
                                <div class="accordeon__contenu" style="display:none;">
                                    ${post.excerpt.rendered}
                                    <a href="${post.link}" target="_blank">Voir la destination</a>
                                </div>
                            </div>
                        </div>`;
                    });
                }
                destinations.innerHTML = html;

                // Accordéon animé
                document.querySelectorAll('.accordeon__btn').forEach(btn => {
                    btn.addEventListener('click', function () {
                        const contenu = this.nextElementSibling;
                        contenu.style.display = contenu.style.display === 'block' ? 'none' : 'block';
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