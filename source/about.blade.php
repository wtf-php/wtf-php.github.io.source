@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About</h1>

    <img src="/assets/img/about/undraw_about.svg"
        alt="About image"
        class="flex w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">
        WTF-PHP is a small group of php developers creating some interesting open source packages.
    </p>

    <div class="mb-6">
        <h2>Members</h2>
        <ul class="list-none">
            <li><a href="https://github.com/fetzi" target="_blank">Johannes Pichler (fetzi)</a></li>
            <li><a href="https://github.com/witti" target="_blank">Daniel Wittberger (witti)</a></li>
            <li><a href="https://github.com/DanielaHuber" target="_blank">Daniela Huber</a></li>
            <li><a href="https://github.com/JudithJeszenkovits" target="_blank">Judith Jeszenkovits</a></li>
            <li><a href="https://github.com/CathrinAuer" target="_blank">Cathrin Auer</a></li>
        </ul>
    </div>

@endsection
