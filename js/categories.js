(function () {
    console.log("vive Javascript");

    let categoryId = 3; // ID de la catégorie par défaut
    const domaine = window.location.href;
    let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    const destinationList = document.querySelector('.destination__list');
    const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");

    // Fonction pour récupérer et afficher les articles
    function getArticles() {
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                destinationList.innerHTML = "";

                if (data.length === 0) {
                    destinationList.innerHTML = "<p>Aucun article trouvé pour cette catégorie.</p>";
                    return;
                }

                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add("article");

                    articleElement.innerHTML = `
                        <h3 class="article__title" style="cursor:pointer;">${article.title.rendered}</h3>
                        <div class="article__content" style="display:none; padding-left:10px;">
                            ${article.excerpt.rendered}
                            <br>
                            <a href="${article.link}" target="_blank">Lire plus</a>
                        </div>
                    `;

                    destinationList.appendChild(articleElement);
                });

                const titles = document.querySelectorAll(".article__title");
                titles.forEach(title => {
                    title.addEventListener("click", function () {
                        const content = this.nextElementSibling;
                        content.style.display = (content.style.display === "block") ? "none" : "block";
                    });
                });
            })
            .catch(error => {
                console.error('Erreur lors de la récupération des articles:', error);
                destinationList.innerHTML = "<p>Une erreur est survenue lors du chargement des articles.</p>";
            });
    }

    console.log("categorie__ul__li.length", categorie__ul__li.length);
    categorie__ul__li.forEach(li => {
        li.addEventListener("click", function () {
            console.log("Catégorie cliquée :", li.dataset.id);
            categoryId = li.dataset.id;
            apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;

            categorie__ul__li.forEach(el => el.classList.remove("active"));
            li.classList.add("active");

            getArticles();
        });
    });

    getArticles();
})();