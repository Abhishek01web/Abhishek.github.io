const loder = document.querySelector('.pre_loder');
        window.addEventListener('load', () => {
                setTimeout(() => {
                   loder.style.display = 'none';
                }, 5000);
        });

const m_btn = document.querySelector(".menu_l");
const menu_i = document.querySelector(".menu_i");

const m_1 = document.querySelector(".m_1");
const m_2 = document.querySelector(".m_2");
const m_3 = document.querySelector(".m_3");

const home_m_01 = document.querySelector(".home_m_01");
const home_m_02 = document.querySelector(".home_m_02");
const home_m_03 = document.querySelector(".home_m_03");
const home_m_04 = document.querySelector(".home_m_04");

const menu_p = document.querySelectorAll(".menu_p");

m_btn.addEventListener("click", () => {
  menu_i.classList.toggle("active");
  m_1.classList.toggle("n_1");
  m_2.classList.toggle("n_2");
  m_3.classList.toggle("n_3");
});

menu_i.addEventListener("click", () => {
  menu_i.classList.toggle("active");
  m_1.classList.toggle("n_1");
  m_2.classList.toggle("n_2");
  m_3.classList.toggle("n_3");
});

var typed = new Typed(".typing", {
  strings: ["Abhishek chauhan", "Student", "Developer", "Blogger", "Designer", "Freelancer"],
  typeSpeed: 100,
  backSpeed: 100,
  loop: true
});

var typed = new Typed(".typing_01", {
  strings: ["Abhishek chauhan", "Student", "Developer", "Blogger", "Designer", "Freelancer"],
  typeSpeed: 100,
  backSpeed: 100,
  loop: true
});


$(".carousel").owlCarousel({
  margin: 20,
  loop: true,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 3,
      nav: false
    },
    600: {
      items: 3,
      nav: false
    },
    1000: {
      items: 3,
      nav: false
    }
  }
});

$(".carousel_01").owlCarousel({
  margin: 20,
  loop: true,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      nav: false
    },
    600: {
      items: 2,
      nav: false
    },
    1000: {
      items: 3,
      nav: false
    }
  }
});