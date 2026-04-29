@extends('portfolio.layouts.app')

@section('content')

<!-- CONTACT SECTION -->
<section class="max-w-5xl mx-auto px-4 py-20 grid md:grid-cols-2 gap-12 items-center">

    <!-- LEFT -->
    <div>
        <h1 class="text-4xl font-bold tracking-tight text-[#111111] dark:text-white">
            Let’s Work Together
        </h1>

        <p class="mt-4 text-gray-600 dark:text-gray-300 leading-relaxed">
            Have an idea, project, or opportunity? I’m always open to discussing new work, collaborations, or freelance projects.
            Send a message and I’ll get back to you as soon as possible.
        </p>

        <div class="mt-8 space-y-3 text-sm text-gray-600 dark:text-gray-300">
            <p>📩 Fast response within 24–48 hours</p>
            <p>⚡ Available for freelance & contract work</p>
            <p>🌍 Remote-friendly collaboration</p>
        </div>
    </div>

    <!-- RIGHT FORM -->
    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 shadow-xl rounded-2xl p-8">

        <h2 class="text-xl font-semibold mb-6 text-[#111111] dark:text-white">
            Send a Message
        </h2>

        <form class="space-y-5">

            <input type="text" placeholder="Your name"
                class="w-full p-3 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:ring-2 focus:ring-indigo-500 outline-none">

            <input type="email" placeholder="you@example.com"
                class="w-full p-3 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:ring-2 focus:ring-indigo-500 outline-none">

            <textarea placeholder="Tell me about your project..."
                class="w-full p-3 rounded-xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 h-32 focus:ring-2 focus:ring-indigo-500 outline-none"></textarea>

            <button type="submit"
                class="w-full py-3 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-medium hover:opacity-90 transition shadow-lg">
                Send Message →
            </button>

        </form>

    </div>

</section>


<!-- CONTACT CARDS -->
<section class="max-w-5xl mx-auto px-4 pb-20">

    <div class="grid md:grid-cols-3 gap-6">

        <!-- PHONE -->
        <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition">

            <div class="flex justify-center mb-3 text-[#111111] dark:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                        clip-rule="evenodd" />
                </svg>
            </div>

            <h3 class="font-semibold text-[#111111] dark:text-white">Phone</h3>
            <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">
                +265 999 000 000
            </p>

        </div>

        <!-- FACEBOOK -->
        <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition">

            <div class="flex justify-center mb-3 text-[#111111] dark:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor" class="w-6 h-6">
                    <path d="M12 2C6.477 2 2 6.07 2 11.2c0 2.9 1.5 5.46 4 7.18V22l3.6-2.03c.8.2 1.6.33 2.4.33 5.523 0 10-4.07 10-9.2S17.523 2 12 2zm1 12h-2v6h-2v-6H7v-2h2V10c0-2.2 1.3-3.5 3.4-3.5.9 0 1.6.1 1.6.1v2h-1.1c-1.1 0-1.4.7-1.4 1.4V12h2.4l-.4 2z"/>
                </svg>
            </div>

            <h3 class="font-semibold text-[#111111] dark:text-white">Facebook</h3>
            <a href="https://facebook.com" target="_blank"
                class="text-sm text-indigo-600 hover:underline mt-2 inline-block">
                Connect on Facebook
            </a>

        </div>

        <!-- TWITTER -->
        <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition">

            <div class="flex justify-center mb-3 text-[#111111] dark:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor" class="w-6 h-6">
                    <path d="M18.9 2H22l-6.8 7.8L23 22h-6.8l-5.3-6.6L5 22H2l7.3-8.4L1 2h6.9l4.8 6L18.9 2zm-1.2 18h1.7L7.2 3.9H5.4L17.7 20z"/>
                </svg>
            </div>

            <h3 class="font-semibold text-[#111111] dark:text-white">Twitter / X</h3>
            <a href="https://twitter.com" target="_blank"
                class="text-sm text-indigo-600 hover:underline mt-2 inline-block">
                Follow me
            </a>

        </div>

    </div>

</section>

@endsection