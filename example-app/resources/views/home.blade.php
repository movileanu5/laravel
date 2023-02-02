@extends('layouts')

@section('content')
    <h1 align="center">Welcome to Our HOMEPAGE</h1>

    @php
        $elev = ['Marcu Ion', 'Marcu Vasile', 'Voicu Pavel', 'Foiu Victor', 'Gheorgita Ion'];
    @endphp
    @foreach ($elev as $elev)
        {{ $elev }}
    @endforeach
@endsection

@php
    $suma = 0;
@endphp

@for ($i = 1; $i <= 100; $i++)
    @if ($i % 2 == 0)
        @php $suma += $i; @endphp
    @endif
@endfor
