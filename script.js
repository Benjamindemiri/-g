// ================= PRELOADER =================
window.addEventListener("load", () => {
    const preloader = document.getElementById("preloader");
    if (preloader) preloader.style.display = "none";
});

// ================= DARK MODE TOGGLE =================
const darkToggle = document.getElementById("darkModeToggle");
darkToggle.addEventListener("click", () => {
    document.body.classList.toggle("dark");
});

// ================= HERO SLIDER =================
const slides = document.querySelectorAll(".slide");
let currentSlide = 0;
setInterval(() => {
    slides.forEach(slide => slide.classList.remove("active"));
    slides[currentSlide].classList.add("active");
    currentSlide = (currentSlide + 1) % slides.length;
}, 6000);

// ================= SIMPLE COUNTER ANIMATION =================
const counters = document.querySelectorAll(".counter");
counters.forEach(counter => {
    const updateCounter = () => {
        const target = +counter.dataset.target;
        let count = +counter.innerText;
        const increment = target / 200; // speed
        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCounter, 10);
        } else {
            counter.innerText = target;
        }
    };
    updateCounter();
});

// ================= CONTACT FORM HANDLING =================
const contactForm = document.getElementById("contactForm");
if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
        e.preventDefault();
        alert("Thank you! Your message has been sent.");
        contactForm.reset();
    });
}