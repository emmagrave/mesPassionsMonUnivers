<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Passions, Mon Univers</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<!-- En-tête et barre de navigation -->
<header>
    <h1>Mes Passions, Mon Univers</h1>
    <input type="text" placeholder="Search...">
</header>
<nav>
    <a href="#">À PROPOS</a>
</nav>

<main>
    <!-- Section de contenu principal avec tous les articles -->
    <div class="content">
        @foreach ($articles as $article)
            <article>
                <span class="category">{{ $article->category }}</span>
                <h2>{{ $article->title }}</h2>
                <p>
                    Published by {{ $article->author }}
                    @if ($article->published_at)
                        on {{ $article->published_at->format('d M Y') }}
                    @else
                        (Date de publication non disponible)
                    @endif
                </p>
                <img src="{{ asset('images/' . $article->image) }}" alt="{{ $article->title }}">
                <p>{{ \Illuminate\Support\Str::limit($article->content, 150) }}</p>
                <a href="{{ route('articles.show', $article->slug) }}">Continue reading →</a>
            </article>
        @endforeach
    </div>

    <!-- Barre latérale avec les articles récents -->
    <aside class="sidebar">
            <!-- Section de présentation -->
        <div class="profile-section">
            <div class="div-profile">
                <div class="profile-content-1">
                    <p>Bonjour,</p>
                    <h2>Moi, c'est Emma !</h2>
                </div>
                <div class="profile-content-2">
                    <img src="/images/emma.jpg" alt="Photo de profil d'Emma" class="profile-photo">
                </div>
            </div>
            <p>Bienvenue sur <strong>Mes Passions, Mon Univers</strong>, mon blog où je partage avec vous mes découvertes littéraires, mes créations artistiques, et tout ce qui nourrit ma curiosité. Plongeons ensemble dans un univers où chaque passion prend vie et chaque moment est une source d'inspiration.</p>
        </div>
        <br>

        <!-- Section réseaux sociaux -->
            <div class="social-connect">
                <h3>Let’s connect</h3>
                <ul>
                    <li>
                        <a href="https://www.pinterest.fr/monuniverspassions/" target="_blank">
                            <img src="{{ asset('images/social/pinterest.png') }}"alt="Pinterest" width="24" height="24"> Pinterest
                        </a>
                    </li><hr>
                    <li><a href="https://www.instagram.com/mespassionsmonunivers/">
                            <img src="{{ asset('images/social/instagram.png') }}"alt="Instagram" width="24" height="24"> Instagram
                        </a></li><hr>
                    <li>
                        <a href="mailto:monuniverspassions@gmail.com">
                            <img src="{{ asset('images/social/email.png') }}" alt="Mail" width="24" height="24"> Mail
                        </a>
                    </li><hr>
                </ul>
            </div>

            <!-- Section articles récents -->
            <div class="recent-articles">
                <h3>Articles récents</h3>
                <div class="article">
                    <img src="path/to/article-image.jpg" alt="Article image">
                    <p><a href="article-link">{{ $article->title }}</a></p>
                </div>
            </div>
    </aside>
</main>

<footer>
    <p>Mes Passions, Mon Univers</p>
    <ul class="social-icons">
        <li><a href="#">Pinterest</a></li>
        <li><a href="#">Instagram</a></li>
    </ul>
    <a href="#">À PROPOS</a>
</footer>
</body>
</html>
