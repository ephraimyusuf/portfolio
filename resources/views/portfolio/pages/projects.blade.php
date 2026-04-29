@extends('portfolio.layouts.app')

@section('content')


<section class="max-w-6xl mx-auto px-4 py-20">

    <!-- Header -->
    <div class="mb-10">
        <h1 class="text-4xl font-bold tracking-tight">Projects</h1>
        <p class="text-gray-600 dark:text-gray-300 mt-3">
            A selection of systems and applications I’ve built, focusing on performance, scalability, and clean architecture.
        </p>
    </div>

    <!-- Premium Search Bar -->
    <div class="mb-10">
        <div class="relative max-w-xl">

            <input
                type="text"
                placeholder="Search projects (e.g. Laravel, API, Dashboard...)"
                class="w-full pl-12 pr-4 py-3 rounded-xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition"
            >

            <!-- Search Icon -->
            <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                🔍
            </div>

        </div>
    </div>

    <!-- Projects Grid -->
    <div class="grid md:grid-cols-3 gap-8">

@foreach ($projects as $project)
<div class="perspective project-card"
     data-name="{{ $project['name'] }}"
     data-tech="{{ implode(' ', $project['tech']) }}"
     data-description="{{ $project['description'] }}">

    <div class="card-3d bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl">

        <!-- Image -->
        <div class="h-44 bg-gradient-to-br from-black to-gray-800 relative overflow-hidden">
            <div class="absolute inset-0 flex items-center justify-center text-gray-400 text-sm">
                Project Preview
            </div>
        </div>

        <!-- Content -->
        <div class="p-5">

            <h3 class="font-semibold text-lg hover:text-[#D4AF37] transition">
                {{ $project['name'] }}
            </h3>

            <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                {{ $project['description'] }}
            </p>

            <!-- Tech Tags -->
            <div class="flex flex-wrap gap-2 mt-4">
                @foreach ($project['tech'] as $tech)
                    <span class="text-xs px-2 py-1 rounded-full bg-gray-100 dark:bg-gray-800">
                        {{ $tech }}
                    </span>
                @endforeach
            </div>

            <!-- Link -->
            <div class="flex items-center justify-between mt-5">

                <a href="{{ $project['github'] }}"
                   target="_blank"
                   class="text-sm text-gray-600 dark:text-gray-300 hover:text-black dark:hover:text-white transition">
                    View Project →
                </a>

            </div>

        </div>

    </div>

</div>
@endforeach

</div>

</div>

</section>

<script>
document.getElementById('projectSearch').addEventListener('keyup', function () {

    let value = this.value.toLowerCase();
    let cards = document.querySelectorAll('.project-card');

    cards.forEach(card => {

        let name = card.getAttribute('data-name').toLowerCase();
        let tech = card.getAttribute('data-tech').toLowerCase();
        let desc = card.getAttribute('data-description').toLowerCase();

        if (
            name.includes(value) ||
            tech.includes(value) ||
            desc.includes(value)
        ) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }

    });

});
</script>
@endsection
