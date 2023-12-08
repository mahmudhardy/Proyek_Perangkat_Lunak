const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
  sidebar.classList.remove("close");
});

const saveModeToLocalStorage = (mode) => {
  localStorage.setItem("mode", mode);
};

const loadModeFromLocalStorage = () => {
  const savedMode = localStorage.getItem("mode");
  if (savedMode === "dark") {
    body.classList.add("dark");
    modeText.innerText = "Light mode";
  } else {
    body.classList.remove("dark");
    modeText.innerText = "Dark mode";
  }
};

// Tambahkan event listener ke modeSwitch
modeSwitch.addEventListener("click", () => {
  // Toggle the "dark" class on the "body" element
  body.classList.toggle("dark");

  // Simpan mode terkini ke localStorage
  saveModeToLocalStorage(body.classList.contains("dark") ? "dark" : "light");

  // Update teks mode sesuai dengan kondisi saat ini
  modeText.innerText = body.classList.contains("dark") ? "Light mode" : "Dark mode";
});

// Panggil fungsi untuk memuat mode saat halaman dimuat
document.addEventListener("DOMContentLoaded", loadModeFromLocalStorage);

(function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();

