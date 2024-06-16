<x-layout>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css" >
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <section id="hero">
        <div class="hero-left">
            <h3 class="pre-title">HII MY NAME IS</h3>
            <h1 class="hero-name"><span>Annaafi</span></h1>
            <h1 class="hero-name">Muhammad Aditya</h1>
            <p>
                Saya pelajar di SMK WIKRAMA BOGOR kelas PPLG X-4, 
            </p>
        </div>
        <div class="hero-right">
            <img src="{{ ('img/foto.jpg') }}" alt="">
        </div>
    </section>

</x-layout>