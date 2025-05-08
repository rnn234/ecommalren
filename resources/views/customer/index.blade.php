<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shopedia</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Script -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/js/script.js') }}"> --}}

    <!-- ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- JS CAROUSEL -->
</head>

<body>
    <header class="header">
        <div class="logo">Shopedia</div>
        <div class="search-bar">
            <input type="text" placeholder="Search... " />
            <ion-icon name="search" class="icon-search"></ion-icon>
        </div>
        <div class="header-icons">
            @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
            @auth
            <div class="cartdanlogout">
                <a href=""><ion-icon name="cart" class="icon-header"></ion-icon></a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="nav-link"><ion-icon name="log-out-outline" class="logout"></ion-icon></button>
                </form>
            </div>
            @else
                <a href="{{ Auth::check() ? route('profile') : '#' }}" id="nav-link">
                    <ion-icon name="person" class="icon-header"></ion-icon>
                </a>


                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const profileLink = document.getElementById("nav-link");
                        profileLink.addEventListener("click", function (event) {
                            if (!@json(Auth::check())) {
                                event.preventDefault();
                                Swal.fire({
                                    title: 'Oops!',
                                    text: 'Anda harus login terlebih dahulu!',
                                    icon: 'warning',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "{{ route('login') }}";
                                    }
                                });
                            }
                        });
                    });

                </script>
            @endauth
            @endif
        </div>
    </header>

    <main>
        <div class="carousel">
            <div class="carousel-items">
                <div class="carousel-item"><img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="Image 1"></div>
                <div class="carousel-item"><img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="Image 2"></div>
                <div class="carousel-item"><img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="Image 3"></div>
                <!-- Tambahkan gambar lainnya sesuai kebutuhan -->
            </div>
        </div>
    </main>

    <section class="kategori">
        <h2>Our Categories</h2>
        <div class="container-card">
            <a href="">
                <div class="card1">
                    <h3>CLOTHES</h3>
                    <img src="{{ asset('assets/img/pakaian.png') }}" alt="">
                </div>
            </a>
            <a href="">
                <div class="card2">
                    <h3>FOOD</h3>
                    <img src="{{ asset('assets/img/beras.png') }}" alt="">
                </div>
            </a>
            <a href="">
                <div class="card3">
                    <h3>ELEKTRONIK</h3>
                    <img src="{{ asset('assets/img/elektronik.png') }}" alt="">
                </div>
            </a>
        </div>
    </section>

    <section class="flashsale">
        <h2>Flash Sale !</h2>
        <div class="container-card-flashsale">
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
        </div>
    </section>

    <section class="flashsale">
        <h2>Diskon pengguna baru !</h2>
        <div class="container-card-flashsale">
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
            <div class="card-flashsale">
                <div class="img-flashsale">
                    <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                </div>
                <div class="judul">
                    <p>Beras misal</p>
                    <p class="harga">Rp 25.000</p>
                </div>
                <div class="deskripsi">
                    <p>deskripsilah intinya mah lorem ipsum sebelehkitiw acikiwir awas ada sule spontan uhuy </p>
                </div>
                <a href="" class="button-flashsale">Add to Cart</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-logo">Shopedia</div>
        <div class="footer-menu">
            <a href="">About us</a>
            <div class="footer-down">
                <a href="">Categories</a>
                <a href="">Clothes</a>
                <a href="">Food</a>
                <a href="">Elektronik</a>
            </div>
            <div class="footer-down">
                <a href="">Help & Guide</a>
                <a href="">Shopedia Care</a>
                <a href="">Terms and Conditions</a>
                <a href="">Privacy Policy</a>
            </div>
            <div class="footer-down">
                <a href="">Follow us</a>
                <div class="footer-img-display">
                    <div class="footer-img">
                        <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                    </div>
                    <div class="footer-img">
                        <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                    </div>
                    <div class="footer-img">
                        <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                    </div>
                    <div class="footer-img">
                        <img src="{{ asset('assets/img/shopedia.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
