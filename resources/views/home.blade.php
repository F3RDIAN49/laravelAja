@extends('layout/main')
<head>
    @section('title', 'home')

</head>
<body>
@section('container')
<div class="container mt-4">
    <h1>This is the beginning</h1>
    <h4>{{ $name }}</h4>
    <p>email me {{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" height="200" width="200">
</div>

{{-- <script src="js/script.js"></script> --}}
</body>
@endsection
