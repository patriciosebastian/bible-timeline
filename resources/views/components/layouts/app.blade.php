<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- TODO: add analytics --}}
</head>
<body class="min-h-screen font-sans antialiased bg-base-200/50 dark:bg-base-200">
    {{-- Nav --}}
    <livewire:navbar />

    {{-- Main --}}
    <main>
        {{ $slot }}
    </main>


    {{-- enable .timeline-horizontal side scrolling on desktop --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const scrollContainer = document.querySelector('.timeline-horizontal');
            const scrollMultiplier = 7;
            let isScrolling;
            let lastScrollTime = 0;
            const smoothScrollThreshold = 100; // Time in milliseconds to detect rapid scrolling

            scrollContainer.addEventListener('wheel', function (event) {
                if (event.deltaY !== 0) {
                    event.preventDefault();
                    clearTimeout(isScrolling);

                    const now = Date.now();
                    const timeDiff = now - lastScrollTime;
                    lastScrollTime = now;

                    if (timeDiff < smoothScrollThreshold) {
                        scrollContainer.scrollBy({
                            left: event.deltaY * scrollMultiplier,
                            behavior: 'smooth'
                        });
                    } else {
                        scrollContainer.scrollLeft += event.deltaY * scrollMultiplier;
                        isScrolling = setTimeout(function() {
                            scrollContainer.scrollTo({
                                left: scrollContainer.scrollLeft,
                                behavior: 'smooth'
                            });
                        }, 150);
                    }
                }
            });
        });
    </script>
</body>
</html>
