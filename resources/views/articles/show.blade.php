<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }} - Mon Blog</title>
</head>
<body>
<h1>{{ $article->title }}</h1>
<p>{{ $article->content }}</p>
<a href="{{ route('home') }}">Retour à l'accueil</a>
</body>
</html>
