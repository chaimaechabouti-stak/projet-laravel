@extends('Master_page')

@section('title', 'Accueil')

@section('content')
<div class="text-center">
    <h1 class="mb-4">Bienvenue sur EcomShop</h1>
    <p class="lead">Découvrez nos meilleures catégories de produits</p>

    <a href="/produits/hicking" class="btn btn-primary m-2">Hicking</a>
    <a href="/produits/electromenager" class="btn btn-success m-2">Electroménager</a>
</div>
@endsection
