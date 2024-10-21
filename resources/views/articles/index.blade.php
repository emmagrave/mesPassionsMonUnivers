<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mon Blog</title>
</head>
<body>
<h1>Bienvenue sur mon blog</h1>
<h2>Articles</h2>
<ul>
    @foreach ($articles as $article)
        <li>
            <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
        </li>
    @endforeach
</ul>
</body>
</html>
