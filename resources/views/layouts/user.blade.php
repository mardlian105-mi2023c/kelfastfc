@vite(['resources/css/app.css', 'resources/js/app.js'])
<body>
    <x-navbar></x-navbar>
    <main>
        {{ $slot }}
    </main>
    <x-sponsor></x-sponsor>
    <x-footer></x-footer>
</body>
