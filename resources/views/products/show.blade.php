@extends('layouts.app')

@section('title', $product['name'])

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $product['name'] }}</h2>

            <table class="table table-bordered w-auto">
                <tbody>
                    <tr>
                        <th scope="row">Price</th>
                        <td>{{ $product['price'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Stock</th>
                        <td>{{ $product['stock'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Category</th>
                        <td>{{ $product['category'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Prepared by</th>
                        <td>Francis Alkier Ubalde</td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Product List</a>
        </div>
    </div>
@endsection