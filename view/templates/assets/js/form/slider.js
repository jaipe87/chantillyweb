let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.slider-content');
    const indicators = document.querySelectorAll('.indicator');

    if (index >= slides.length) currentSlide = 0;
    if (index < 0) currentSlide = slides.length - 1;

    document.getElementById('slider').style.transform = `translateX(${-currentSlide * 100}%)`;

    indicators.forEach((indicator, i) => {
        indicator.classList.toggle('active', i === currentSlide);
    });
}

function createIndicators() {
    const slider = document.getElementById('slider');
    const indicatorsContainer = document.getElementById('indicators');
    const slideCount = slider.children.length;

    for (let i = 0; i < slideCount; i++) {
        const indicator = document.createElement('div');
        indicator.classList.add('indicator');
        indicator.addEventListener('click', () => {
            currentSlide = i;
            showSlide(currentSlide);
        });
        indicatorsContainer.appendChild(indicator);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    createIndicators();
    showSlide(currentSlide);

    // Auto slide
    setInterval(() => {
        currentSlide++;
        showSlide(currentSlide);
    }, 5000); // Change slide every 5 seconds
});
