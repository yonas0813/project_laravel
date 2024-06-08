<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OceanWays - Home</title>

    <link rel="stylesheet" href="{{ asset('PROFIL.css') }}">
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
        <section>
            <h2>Sejarah</h2>
            <p>Wakanda adalah sebuah negara fiksi yang muncul dalam komik Marvel Comics. Negara ini terletak di Afrika dan dikenal sebagai salah satu negara tercanggih di dunia, berkat sumber daya alamnya yang langka, Vibranium. Dengan kemajuan teknologi dan sumber daya Vibranium, Wakanda berkembang menjadi negara yang sangat maju dan canggih, meskipun tetap menjaga tradisi dan budaya mereka. Wakanda berhasil menjaga keberadaan Vibranium sebagai rahasia negara, menghindari eksploitasi oleh negara-negara lain. Wakanda dikenal memiliki budaya yang kaya dan tradisi yang kuat. Mereka memiliki sistem monarki dengan raja atau ratu yang memimpin negara. Ritual dan tradisi Wakanda, termasuk ritual penobatan Black Panther, merupakan bagian penting dari kehidupan masyarakat. Dengan keberadaan Vibranium, Wakanda memiliki teknologi yang jauh lebih maju dibandingkan dengan negara-negara lain di dunia Marvel. Mereka telah mengembangkan berbagai inovasi, mulai dari senjata canggih hingga sistem kesehatan yang revolusioner. Kesimpulannya adalah negara yang kompleks dan multi-dimensi dalam cerita Marvel. Sebagai sebuah negara fiksi, Wakanda mewakili aspirasi untuk kemajuan, inovasi, dan kekuatan yang bersumber dari tradisi dan warisan budaya.</p>
        </section>
        <section>
            <h2>Kontak</h2>
            <p>Silakan hubungi kami melalui email di <a href="mailto:info@Wakanda.com">info@Wakanda.com</a> atau melalui telepon di 123-456-7890.</p>
        </section>
    </main>
</body>

</html>