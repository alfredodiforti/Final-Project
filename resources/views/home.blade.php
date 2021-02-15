@extends('layouts.main')

@section('content')
    <h1 class="container mt-5">
        HOMEPAGE
    </h1>
    @php
        // dd('types');  
    @endphp
    <ul class="container mt-5">
        @foreach ($types as $type)
            <a href="">
                <li>
                    <h3>{{ $type->type }}</h3>
                </li>
            </a>
        @endforeach
    </ul>


@endsection
