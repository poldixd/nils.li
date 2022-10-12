<div
    class="grid grid-cols-1 md:grid-cols-2 gap-8"
>
    @foreach ($splitedProjects as $projects)
        <ul class="space-y-8">
            @foreach ($projects as $project)
                <li>
                    <div class="bg-gray-300 dark:bg-gray-700 border border-gray-400 dark:border-gray-600 p-8 rounded-md group relative">
                        <h3 class="text-3xl font-inter-var font-bold tracking-tight mb-6">
                            {{ $project->title }}
                        </h3>

                        @if ($project->tags)
                            <ul class="flex space-x-2 mb-6">
                                @foreach ($project->tags as $tag)
                                    <li class="tag dark:grayscale-[25%] tag--{{ str($tag)->slug() }}">
                                        {{ $tag }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        <div
                            x-cloak
                            class="grayscale-[25%] group-hover:grayscale-0 transition ease-in-out delay-150"
                        >
                            <div
                                x-show="!showMobile"
                                class="bg-zinc-800 border border-zinc-600 drop-shadow-xl p-2 rounded-md relative"
                            >
                                {{ $project->getFirstMedia('image_desktop') }}
                            </div>

                            <div
                                x-show="showMobile"
                                class="bg-zinc-800 border border-zinc-600 drop-shadow-xl p-4 pt-10 rounded-xl relative w-1/2"
                            >
                                <div class="w-32 h-1 absolute left-1/2 top-4 bg-zinc-500 -translate-x-1/2 translate-y-1/2"></div>
                                {{ $project->getFirstMedia('image_mobile') }}
                            </div>
                        </div>

                        <a href="{{ $project->link }}" target="_blank" rel="noopener" class="absolute inset-0"></a>
                    </div>
                </li>
            @endforeach
        </ul>
    @endforeach
</div>