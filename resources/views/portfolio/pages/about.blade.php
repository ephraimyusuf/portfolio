@extends('portfolio.layouts.app')

@section('content')

<section class="max-w-6xl mx-auto px-4 py-20 grid md:grid-cols-2 gap-12">

    <!-- About Section -->
    <div>
        <h1 class="text-4xl font-bold tracking-tight">About Me</h1>

        <p class="mt-6 text-gray-600 dark:text-gray-300 leading-relaxed">
            I’m a full-stack developer focused on engineering scalable, high-performance web systems using Laravel and modern technologies.
            I build clean, production-ready applications with strong architecture, optimized performance, and intuitive user experiences.
        </p>

        <p class="mt-4 text-gray-600 dark:text-gray-300 leading-relaxed">
            My approach is simple—write clean code, design systems that scale, and deliver software that performs reliably in real-world environments.
        </p>

        <div class="mt-8 space-y-3 text-sm text-gray-700 dark:text-gray-300">
            <p>✔ Architecture-driven development</p>
            <p>✔ High-performance API design & integration</p>
            <p>✔ Scalable backend systems with Laravel</p>
            <p>✔ UI/UX-focused frontend implementation</p>
            <p>✔ Multi-language engineering mindset</p>
        </div>

        <!-- Tech Stack Tags -->
        <div class="mt-8 flex flex-wrap gap-2">
            <span class="px-3 py-1 text-xs rounded-full bg-gray-200 dark:bg-gray-800">Laravel</span>
            <span class="px-3 py-1 text-xs rounded-full bg-gray-200 dark:bg-gray-800">JavaScript</span>
            <span class="px-3 py-1 text-xs rounded-full bg-gray-200 dark:bg-gray-800">TypeScript</span>
            <span class="px-3 py-1 text-xs rounded-full bg-gray-200 dark:bg-gray-800">Python</span>
            <span class="px-3 py-1 text-xs rounded-full bg-gray-200 dark:bg-gray-800">Java</span>
            <span class="px-3 py-1 text-xs rounded-full bg-gray-200 dark:bg-gray-800">C++</span>
            <span class="px-3 py-1 text-xs rounded-full bg-gray-200 dark:bg-gray-800">Tailwind</span>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="bg-white dark:bg-gray-900 p-8 rounded-2xl shadow-xl border border-gray-200 dark:border-gray-800">

        <h3 class="text-xl font-semibold mb-6">Technical Skills</h3>

        @php
            $skills = [
                ['name' => 'Laravel', 'level' => 90],
                ['name' => 'JavaScript', 'level' => 85],
                ['name' => 'TypeScript', 'level' => 75],
                ['name' => 'Python', 'level' => 70],
                ['name' => 'Java', 'level' => 65],
                ['name' => 'C++', 'level' => 60],
                ['name' => 'Tailwind CSS', 'level' => 85],
            ];
        @endphp

        <div class="space-y-5">
            @foreach ($skills as $skill)
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>{{ $skill['name'] }}</span>
                        <span class="text-gray-500">{{ $skill['level'] }}%</span>
                    </div>
                    <div class="w-full h-2 bg-gray-200 dark:bg-gray-800 rounded-full overflow-hidden">
                        <div class="h-2 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full"
                             style="width: {{ $skill['level'] }}%"></div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</section>

@endsection