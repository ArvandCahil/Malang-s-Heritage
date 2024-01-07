document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".carousel-slide");
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove("active");
            if (i === index) {
                slide.classList.add("active");
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }

    
    const nextButton = document.querySelector("#nextButton");
    const prevButton = document.querySelector("#prevButton");

   

    // Fungsi untuk menggeser slide secara otomatis setiap beberapa detik (contoh setiap 5 detik)
    function autoSlide() {
        nextSlide();
    }

    const autoSlideInterval = setInterval(autoSlide, 5000); // Ganti interval sesuai kebutuhan

    // Hentikan otomatis saat mouse masuk ke carousel (opsional)
    const carousel = document.querySelector(".carousel");
    carousel.addEventListener("mouseenter", () => {
        clearInterval(autoSlideInterval);
    });

    // Lanjutkan otomatis saat mouse keluar dari carousel (opsional)
    carousel.addEventListener("mouseleave", () => {
        autoSlideInterval = setInterval(autoSlide, 10000); // Ganti interval sesuai kebutuhan
    });

    showSlide(currentIndex);
});
