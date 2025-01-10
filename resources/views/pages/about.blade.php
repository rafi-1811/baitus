@extends('layout.layout')

<?php
$title = 'About Us';
$subTitle = 'Home';
?>

@section('content')
    <!-- section Tentang Kami -->
    <x-tentang-kami />

    <!-- Section Program -->
    <x-program-kami />

    <!-- section Visi Misi -->
    <x-visi-misi />

    {{-- section Data Yatim --}}
    <x-data-yatim />
@endsection
