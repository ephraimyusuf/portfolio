@extends('portfolio.layouts.app')

@section('content')

<section class="max-w-5xl mx-auto px-4 py-20">

    <!-- Project Title -->
    <h1 class="text-4xl font-bold text-[#111111]">
        {{ $project['name'] }}
    </h1>

    <!-- Tech Tags -->
    <div class="flex flex-wrap gap-2 mt-4">
        @foreach ($project['tech'] as $tech)
            <span class="text-xs px-3 py-1 rounded-full bg-gray-100 dark:bg-gray-800">
                {{ $tech }}
            </span>
        @endforeach
    </div>

    <!-- Image -->
    <div class="h-72 bg-gray-200 dark:bg-gray-800 mt-8 rounded-2xl shadow-sm"></div>

    <!-- Description -->
    <p class="mt-8 text-gray-600 dark:text-gray-300 leading-relaxed">
        {{ $project['description'] }}
    </p>

    <!-- CTA -->
    <a href="{{ $project['github'] }}"
       target="_blank"
       class="inline-block mt-8 px-6 py-3 bg-black text-white rounded-xl hover:scale-105 transition">
        View Source Code →
    </a>

</section>

@endsection