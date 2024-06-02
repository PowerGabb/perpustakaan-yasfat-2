<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
        }
        .contents {
            padding-top: 180px;
        }

        .hotbook { 
            padding-top: 120px;
        }
    </style>

    <title>@yield('title', 'Perpustakaan')</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-4 fixed-top">
        <div class="container">
            <a href="#home" class="fs-3 fw-bold navbar-brand">FatPerpus.</a>
            <button aria-controls="basic-navbar-nav" type="button" aria-label="Toggle navigation"
                    class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#basic-navbar-nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse justify-content-center" id="basic-navbar-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="/book">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="/pinjamanku">Pinjamanku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="/profile">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-center navbar-collapse collapse ">
            <a href="https://wa.me/6281234567890" class="btn btn-outline-light">Hubungi Petugas</a>
        </div>
    </nav>

    @yield('content')


    <div class="position-relative bottom-0 end-0 p-1" style="z-index: 11">
        <div class="p-3 mt-5"  style="background-color: #ffffff">
            <p>Membaca buku adalah kegiatan yang memberikan nasihaat berharga bagi jiwa dan pikiran. Melalui setiap halaman yang dipelajari, kita memperluas wawasan, memperkaya pengetahuan, dan merangsang imajinasi. Buku-buku mengandung harta karun ilmu yang tak terbatas, membawa kita ke dalam perjalanan melintasi waktu, ruang, dan budaya. Dari kisah inspiratif hingga pengetahuan mendalam, membaca memperkaya kita dengan gagasan-gagasan baru dan memperdalam pemahaman tentang dunia di sekitar kita. Oleh karena itu, jadikanlah membaca buku sebagai kebiasaan yang terus-menerus, karena dalam kegiatan tersebut terdapat nasihaat yang membawa manfaat tak terhingga bagi kehidupan kita.</p>
        </div>
        <footer class="bg-dark text-white pt-3 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; {{ date('Y') }} SMK Fatahillah Cileungsi. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p>Phone: +62813-2010-6009</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
