<div
    class="flex items-center justify-center"
    x-id="['toggle-label']"
>
    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
    </svg>

    <!-- Button -->
    <button
        x-ref="toggle"
        @click="showMobile = ! showMobile"
        type="button"
        role="switch"
        :aria-checked="showMobile"
        :aria-labelledby="$id('toggle-label')"
        :class="showMobile ? 'bg-slate-400' : 'bg-slate-300'"
        class="relative mx-2 inline-flex w-14 rounded-full py-1 transition"
    >
        <span
            :class="showMobile ? 'translate-x-7' : 'translate-x-1'"
            class="bg-white h-6 w-6 rounded-full transition shadow-md"
            aria-hidden="true"
        ></span>
    </button>

    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
    </svg>
</div>