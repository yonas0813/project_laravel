<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OceanWays - Home</title>

    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <style>
        /* Styles for Carousel */
        .carousel {
            position: relative;
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            overflow: hidden;
        }

        .carousel img {
            width: 100%;
            display: none;
        }

        .carousel img:first-child {
            display: block;
        }
    </style>
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo">
                <img src="{{ asset('logo.png') }}" alt="logo">
            </div>
            <div class="menu">
                <ul>
                    <h4>
                        <a href="home">Dashboard</a>
                        <a href="profil1">Profil</a>
                        @if(auth()->check())
                        <form id="logout-form" action="actionlogout" method="post">
            @csrf
</form>
<a href="actionlogout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
@else
                        <a href="/">Login</a>
                        <a href="register">Register</a>
                        @endif
                    </h4>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <!-- Carousel Section -->
        <div class="carousel">
            <img src="{{ asset('wakanda.webp') }}" alt="Image 1">
            <img src="{{ asset('wakanda.1.webp') }}" alt="Image 2">
        </div>

        <section>
            <h2>Tentang Kami</h2>
            <p id="welcome-text">Selamat datang di situs web yang didedikasikan untuk membantu anda mengenai informasi Kabupaten Wakanda</p>
        </section>
        <section>
            <h2>Layanan</h2>
            <p>Kepuasan Anda Adalah Prioritas Kami :</p>
        </section>
        <section>
            <h2>Kontak</h2>
            <p>Silakan hubungi kami melalui email di <a href="mailto:info@Wakanda.com" id="mailLink">info@Wakanda.com</a> atau melalui telepon di 123-456-7890.</p>
        </section>
    </main>

    <script>
        // Carousel Script
        document.addEventListener("DOMContentLoaded", function() {
            let currentImg = 0;
            const images = document.querySelectorAll('.carousel img');
            const totalImages = images.length;

            function showImage(index) {
                images.forEach(img => img.style.display = 'none');
                images[index].style.display = 'block';
            }

            function nextImage() {
                currentImg = (currentImg + 1) % totalImages;
                showImage(currentImg);
            }

            setInterval(nextImage, 3000); // Change image every 3 seconds
        });

        // Mail Link Script
        document.addEventListener("DOMContentLoaded", function() {
            const mailLink = document.getElementById("mailLink");
            mailLink.addEventListener("click", function(event) {
                event.preventDefault();
                alert("Mail telah di klik");
            });
        });
    </script>
</body>

</html>