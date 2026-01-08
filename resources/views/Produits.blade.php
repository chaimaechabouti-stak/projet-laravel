@extends('Master_page')

@section('title', 'Produits')

@section('content')

<h2 class="mb-4 text-capitalize">Catégorie : {{ $categorie }}</h2>

<table class="table table-bordered table-hover align-middle">
    <thead class="table-dark">
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Image</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($products as $item)
        <tr>
            <td>{{ $item['nom'] }}</td>
            <td>{{ $item['prix'] }} DH</td>
            <td>
                <img src="{{ asset('imgs/'.$item['image']) }}" 
                     class="img-thumbnail" width="100">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
