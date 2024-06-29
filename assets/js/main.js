"use strict";
const search = document.querySelector(".header__search");
const headerIcon = document.querySelector(".header__icon");
const headerSearch = document.querySelector(".header__search");

headerIcon.addEventListener("click", (e) => {
  e.preventDefault();

  headerSearch.classList.toggle("hide");
});

/* document.querySelector(".primary-menu").classList.add("navbar-nav");

document.querySelectorAll(".menu-item").forEach((menu) => {
  menu.classList.add("nav-item", "navigation-item");

  menu.querySelector("a").classList.add("nav-link");

  const subMenu = menu.querySelector("ul");
  const content = menu.querySelector("a").innerHTML;

  if (subMenu) {
    menu.classList.add("dropdown");
    menu.setAttribute("role", "button");
    menu.setAttribute("data-bs-toggle", "dropdown");
    menu.setAttribute("aria-expanded", "false");
    menu.setAttribute("href", "#");

    menu.querySelector("a").innerHTML = `${content} &#9660;`;

    subMenu.classList.add("dropdown-menu");

    const subItems = subMenu.querySelectorAll("li");

    subItems.forEach((subItem) => {
      subItem
        .querySelector("a")
        .classList.add("dropdown-item", "color-black", "fs14");
      subItem.querySelector("a").classList.remove("nav-link");
    });
  }
}); */

document.querySelector(".primary-menu").classList.add("navbar-nav");
document.querySelectorAll(".menu-item").forEach((menu) => {
  menu.classList.add("nav-item", "navigation-item");
  menu.querySelector("a").classList.add("nav-link");
});

document.querySelectorAll(".menu-item-has-children").forEach((dropdown) => {
  dropdown.classList.add("dropdown");
  dropdown.querySelector("a").classList.add("nav-link", "dropdown-toggle");
  dropdown.querySelector("a").setAttribute("href", "#");
  dropdown.querySelector("a").setAttribute("role", "button");
  dropdown.querySelector("a").setAttribute("data-bs-toggle", "dropdown");
  dropdown.querySelector("a").setAttribute("aria-expanded", "false");

  dropdown.addEventListener("mouseenter", (e) => {
    dropdown.querySelector("a").click();
    dropdown.style.border = "none";
  });
  dropdown.addEventListener("mouseleave", (e) => {
    dropdown.querySelector("a").click();
    dropdown.style.border = "none";
  });
});

document.querySelectorAll(".sub-menu").forEach((submenu) => {
  submenu.classList.add("dropdown-menu");

  submenu.querySelectorAll("li").forEach((list) => {
    list.querySelector("a").classList.add("dropdown-item", "text-black");
  });
});

document.addEventListener("DOMContentLoaded", () => {
  new SliderPro("#heroSlider", {
    width: "100vw",
    height: "100vh",
    autoplay: true,
    autoplayDelay: 5000,
    responsive: true,
    imageScaleMode: "cover",
    slideDistance: 0,
  });
  new SliderPro("#testimonySlider", {
    width: "100vw",
    height: "10rem",
    autoplay: true,
    autoplayDelay: 5000,
    responsive: true,
    imageScaleMode: "cover",
    slideDistance: 0,
  });
});

function checkSectionInView(
  animation,
  one = null,
  two = null,
  three = null,
  four = null,
  five = null
) {
  if (one !== null)
    document
      .querySelector(`.${one}`)
      .classList.add("animate__animated", animation);
  if (two !== null)
    document
      .querySelector(`.${two}`)
      .classList.add("animate__animated", animation, "animate__delay-1s");
  if (three !== null)
    document
      .querySelector(`.${three}`)
      .classList.add("animate__animated", animation, "animate__delay-2s");
  if (four !== null)
    document
      .querySelector(`.${four}`)
      .classList.add("animate__animated", animation, "animate__delay-3s");
  if (five !== null)
    document
      .querySelector(`.${five}`)
      .classList.add("animate__animated", animation, "animate__delay-4s");
}

function observeSection(
  sectionId,
  animation,
  one,
  two = null,
  three = null,
  four = null,
  five = null
) {
  const section = document.getElementById(sectionId);
  const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.3,
  };
  if (section) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          checkSectionInView(animation, one, two, three, four, five);
        }
      });
    }, options);
    observer.observe(section);
  }
}

window.addEventListener("scroll", (e) => {
  e.preventDefault();
  if (window.scrollY > 100) {
    document.querySelector("header").classList.add("header__bg");
  } else {
    document.querySelector("header").classList.remove("header__bg");
  }
});

document.querySelector(".navbar-toggler").addEventListener("click", (e) => {
    e.preventDefault();
    const nav = document.querySelector(".navbar-icon");
    nav.classList.toggle("bi-x");

    const navbarCollapse = document.querySelector(".navbar-collapse");

    if (nav.classList.contains("bi-x")) {
      navbarCollapse.classList.toggle("animate__fadeInLeft");
      navbarCollapse.classList.remove("animate__fadeOutRight");
    } else {
      navbarCollapse.classList.toggle("animate__fadeOutRight");
      navbarCollapse.classList.remove("animate__fadeInLeft");
    }
  });

observeSection(
  "about",
  "animate__fadeIn",
  "about-section__card-1",
  "about-section__card-2",
  "about-section__card-3"
);
//observeSection("locate", "animate__fadeInRight", "locate");
observeSection("locate", "animate__fadeIn", null, "locate__container");
observeSection("testimony", "animate__fadeIn", "testimony");
observeSection("publications", "animate__fadeIn", "publications");
observeSection("events", "animate__fadeIn", "events");

document.getElementById("year").textContent = new Date().getFullYear();
