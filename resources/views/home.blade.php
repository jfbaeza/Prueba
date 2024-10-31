@extends('layouts.main')
@section('styles')
    @vite('resources/scss/home/main.scss')
@endsection
@section('title', 'Home')

@section('body')
    <div>
        <h1>Hola</h1>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/home/main.js')
@endsection
