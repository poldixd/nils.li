<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="publickey" type="text/plain" href="{{ url('pgp.asc') }}">
        <link rel="pgpkey" type="text/plain" href="{{ url('pgp.asc') }}">

        <style>[x-cloak] { display: none !important; }</style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @stack('head')

        @production
            <!-- Matomo -->
            <script>
                var _paq = window._paq = window._paq || [];
                /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
                _paq.push(['trackPageView']);
                _paq.push(['enableLinkTracking']);
                (function() {
                    var u="https://webanalyse-server.de/";
                    _paq.push(['setTrackerUrl', u+'matomo.php']);
                    _paq.push(['setSiteId', '1']);
                    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
                })();
            </script>
            <!-- End Matomo Code -->
        @endproduction
    </head>

    <body {{ $attributes->merge(['class' => 'antialiased text-slate-700 dark:text-slate-200']) }}>
        <main>
            {{ $slot }}
        </main>
        <footer class="bg-gray-900 border-t border-gray-600 py-12 flex items-center justify-center space-x-4">
            <nav>
                <ul class="flex items-center justify-center space-x-4">
                    <li>
                        <a
                            href="{{ route('index') }}"
                            @class([
                                'hover:text-slate-400 transition ease-in-out',
                                'font-bold' => request()->routeIs('index')
                            ])
                        >Start</a>
                    </li>
                    <li>
                        <a
                            href="{{ route('impressum') }}"
                            @class([
                                'hover:text-slate-400 transition ease-in-out',
                                'font-bold' => request()->routeIs('impressum')
                            ])
                        >Impressum</a>
                    </li>
                    <li>
                        <a
                            href="{{ route('datenschutzerklaerung') }}"
                            @class([
                                'hover:text-slate-400 transition ease-in-out',
                                'font-bold' => request()->routeIs('datenschutzerklaerung')
                            ])
                        >Datenschutzerklärung</a>
                    </li>
                </ul>
            </nav>
            <div>
                <a
                    href="https://github.com/poldixd/nils.li"
                    class="hover:text-slate-400 transition ease-in-out"
                    rel="noopener"
                >
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0 0 22 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </footer>
    </body>
</html>