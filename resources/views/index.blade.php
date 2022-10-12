<x:layouts.app
    x-data="{ showMobile: $persist(false) }"
>
    <section class="bg-gradient-radial from-gray-200 to-gray-300 dark:from-gray-800 dark:to-gray-900 w-full h-screen flex items-center justify-center relative">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center space-x-2">
                <img src="{{ \Vite::image('waving-hand_1f44b.png') }}" class="w-10 md:w-20">
                <div class="text-4xl md:text-8xl font-inter-var font-bold tracking-tight leading-none mb-4">
                    Hallo, ich bin Nils.
                </div>
            </div>
            <div class="text-2xl md:text-4xl font-inter-var font-semibold tracking-tight leading-none">
                Ich mache etwas mit <em>Internet</em>…
            </div>
            <div class="absolute bottom-0 left-0 right-0 flex justify-center pb-8">
                <button
                    type="button"
                    x-on:click="$refs['section-work'].scrollIntoView({behavior: 'smooth'})"
                >
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 animate-bounce motion-reduce:animate-none opacity-50 hover:opacity-100 transition ease-in-out delay-150">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section
        x-ref="section-work"
        class="bg-gray-200 dark:bg-gray-800 min-h-screen py-16 border-t border-gray-400 dark:border-gray-600 relative"
    >
        <div class="max-w-7xl mx-auto mb-48">
            <div class="flex justify-between items-center">
                <h2 class="text-4xl md:text-6xl font-inter-var font-bold tracking-tight mb-8">Work</h2>
                <div class="flex items-center space-x-2">
                    <x:toggle />
                </div>
            </div>

            <x:project-list />
        </div>
    </section>
</x:layouts.app>