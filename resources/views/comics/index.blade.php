@extends('layouts.app')

@section('page-title', 'Comic Index')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Book Index
            </h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                    </tr>
                </thead>
                <tbody >
                   @foreach ($comics as $comic)
                   <tr>
                   <th >
                       {{ $comic->id }}

                   </th>
                   <td>
                      {{ $comic->title }}

                   </td>
                   <td>
                      $ {{ number_format($comic->price, 2, ',', '.') }}

                   </td>
                   <td>
                      {{ $comic->series }}

                   </td>
                   </tr>
                   
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
