(function () {
    const radios = document.querySelectorAll(".hero__radio__input");
    const slides = document.querySelectorAll(".hero__carrousel");
    const animation = document.querySelector(".hero__animation");
    let currentIndex = 0;
    let interval = null;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('hero__carrousel--active', i === index);
            radios[i].checked = (i === index);
        });
        // Animation du texte
        if (animation) {
            animation.classList.remove('hero__animation--active');
            void animation.offsetWidth; // Force le reflow
            animation.classList.add('hero__animation--active');
        }
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function startCarousel() {
        interval = setInterval(nextSlide, 5000);
    }

    radios.forEach((radio, i) => {
        radio.addEventListener('change', () => {
            clearInterval(interval);
            currentIndex = i;
            showSlide(i);
            startCarousel();
        });
    });

    showSlide(currentIndex);
    startCarousel();
})();