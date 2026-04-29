@extends('portfolio.layouts.app')

@section('content')

<!-- HERO -->
<section class="relative max-w-6xl mx-auto px-4 py-24 grid md:grid-cols-2 gap-12 items-center bg-[#FAF9F6]">

    <!-- Glow Accent Background -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-[#D4AF37] opacity-10 blur-3xl rounded-full"></div>

    <!-- LEFT -->
    <div class="relative z-10">

        <span class="text-[#D4AF37] font-medium tracking-widest uppercase text-sm">
            Available for Freelance Work
        </span>

        <h1 class="text-5xl font-extrabold mt-5 text-[#111111] leading-tight">
            Building fast, scalable <br>
            <span class="text-[#D4AF37]">web applications</span> that perform.
        </h1>

        <p class="mt-6 text-gray-600 leading-relaxed text-[15px]">
            I’m Ephraim Yusuf, a full-stack developer specializing in Laravel and modern web systems.
            I build production-ready applications with clean architecture, strong backend systems, and intuitive user interfaces.
        </p>

        <!-- CTA -->
        <div class="mt-8 flex gap-4">
            <a href="/projects"
               class="px-6 py-3 bg-black text-white rounded-xl hover:scale-105 transition shadow-md">
                View Projects →
            </a>

            <a href="/contact"
               class="px-6 py-3 border border-[#D4AF37] text-[#111111] rounded-xl hover:bg-[#D4AF37] hover:text-black transition">
                Contact Me
            </a>
        </div>

        <!-- STATS -->
        <div class="mt-12 grid grid-cols-3 gap-4">

            <div class="bg-white border rounded-xl p-4 text-center shadow-sm hover:shadow-md transition">
                <p class="text-2xl font-bold text-[#111111]">10+</p>
                <p class="text-xs text-gray-500">Projects</p>
            </div>

            <div class="bg-white border rounded-xl p-4 text-center shadow-sm hover:shadow-md transition">
                <p class="text-2xl font-bold text-[#111111]">3+</p>
                <p class="text-xs text-gray-500">Years</p>
            </div>

            <div class="bg-white border rounded-xl p-4 text-center shadow-sm hover:shadow-md transition">
                <p class="text-2xl font-bold text-[#111111]">5+</p>
                <p class="text-xs text-gray-500">Tech Stacks</p>
            </div>

        </div>

    </div>

    <!-- RIGHT IMAGE -->
    <div class="relative z-10">

        <div class="bg-black p-6 rounded-2xl shadow-2xl border border-[#D4AF37] h-[420px] overflow-hidden">
            <img src="{{ asset('images/zee.jpg') }}"
                 alt="Portfolio Hero Image"
                 class="w-full h-full object-cover rounded-xl hover:scale-105 transition duration-500">
        </div>

    </div>

</section>

<!-- TRUST STRIP -->
<section class="max-w-6xl mx-auto px-4 py-10 text-center">

    <p class="text-sm text-gray-500 uppercase tracking-wider">
        Built with modern technologies
    </p>

    <div class="flex flex-wrap justify-center gap-4 mt-4 text-xs text-gray-600">
        <span class="px-3 py-1 bg-white border rounded-full">Laravel</span>
        <span class="px-3 py-1 bg-white border rounded-full">JavaScript</span>
        <span class="px-3 py-1 bg-white border rounded-full">TypeScript</span>
        <span class="px-3 py-1 bg-white border rounded-full">Python</span>
        <span class="px-3 py-1 bg-white border rounded-full">API Development</span>
    </div>

</section>

<!-- FEATURED PROJECTS -->
<section class="max-w-6xl mx-auto px-4 py-20">

    <div class="flex items-end justify-between mb-10">
        <h2 class="text-3xl font-bold text-[#111111]">
            Featured <span class="text-[#D4AF37]">Projects</span>
        </h2>

        <a href="/projects" class="text-sm text-gray-600 hover:text-black transition">
            View all →
        </a>
    </div>

    <div class="grid md:grid-cols-3 gap-8">

    @foreach ($projects as $project)
<div class="group bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 hover:-translate-y-1">

    <!-- IMAGE -->
    <div class="h-44 bg-gradient-to-br from-black to-gray-800 relative overflow-hidden">
        <div class="absolute inset-0 flex items-center justify-center text-gray-400 text-sm">
            {{ $project['name'] }}
        </div>
    </div>

    <!-- CONTENT -->
    <div class="p-5">

        <!-- REAL PROJECT NAME -->
        <h3 class="font-semibold text-lg group-hover:text-[#D4AF37] transition">
            {{ $project['name'] }}
        </h3>

        <!-- DESCRIPTION -->
        <p class="text-sm text-gray-500 mt-2">
            {{ $project['description'] }}
        </p>

        <!-- LINK -->
        <a href="/projects/{{ $project['slug'] }}"
           class="text-[#D4AF37] text-sm mt-4 inline-block font-medium hover:underline">
            View Details →
        </a>

    </div>

</div>
@endforeach

    </div>

</section>

@endsection