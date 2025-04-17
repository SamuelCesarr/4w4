(function () {
    const radios = document.querySelectorAll(".hero__radio__input");
    const slides = document.querySelectorAll(".hero__carrousel");
    let currentIndex = 0;
    let interval = null;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = (i === index) ? 'block' : 'none';
            radios[i].checked = (i === index);
        });
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