$(document).ready(function(){
    $('.carousel').slick({
      infinite: true,      // Untuk looping tanpa batas
      slidesToShow: 1,     // Menampilkan 1 gambar per halaman
      slidesToScroll: 1,   // Geser 1 gambar setiap scroll
      autoplay: true,      // Mengaktifkan autoplay
      autoplaySpeed: 2000, // Kecepatan autoplay dalam milidetik
      dots: true,          // Menampilkan navigasi titik
    });
  });
  