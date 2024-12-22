var swiper = new Swiper(".swiper-hero", {
    direction: 'horizontal',
    loop: true,
    speed: 700,

    navigation: {
      nextEl: ".next-button",
      prevEl: ".prev-button",
    },
});

  document.getElementById('dropdownButton').addEventListener('click', function () {
    document.getElementById('dropdown').classList.toggle('hidden');
  });

  // Menutup dropdown jika klik di luar elemen dropdown
  window.addEventListener('click', function (e) {
    const dropdown = document.getElementById('dropdown');
    const button = document.getElementById('dropdownButton');
    if (!dropdown.contains(e.target) && !button.contains(e.target)) {
      dropdown.classList.add('hidden');
    }
  });



var swiper = new Swiper(".swiper-hot-news", {
    direction: "horizontal",
    loop: false,
    speed: 700,
    navigation: {
        nextEl: ".hot-news-next",
        prevEl: ".hot-news-prev",
    },
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});

document.addEventListener("DOMContentLoaded", function () {
    var successMessageElement = document.getElementById("success-message");
    if (successMessageElement) {
        var message = successMessageElement.getAttribute("data-message");
        Swal.fire({
            icon: "success",
            title: "Success",
            text: message,
        });
    }
});


 function updateFileName() {
     var input = document.getElementById("photo");
     var label = document.getElementById("photo-label");
     var fileName = document.getElementById("photo-filename");

     if (input.files && input.files.length > 0) {
         fileName.textContent = input.files[0].name;
         label.classList.add("bg-gray-200"); // Mengubah background menjadi abu-abu
     }
 }

