<!DOCTYPE html>
<html lang="de" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genc Gruda – Software-Entwickler</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideIn: {
                            '0%': { transform: 'translateY(-20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        }
                    },
                    animation: {
                        fadeIn: 'fadeIn 2s ease-in-out',
                        slideIn: 'slideIn 1s ease-out forwards'
                    }
                }
            }
        }
    </script>
    <style>
        /* Zusätzliche Custom Styles können hier ergänzt werden */
    </style>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 text-gray-800 dark:text-gray-200 transition-colors duration-500">

<!-- Navigation mit Glas-Effekt (Glassmorphism) -->
<nav class="fixed top-0 left-0 right-0 bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm shadow-lg z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex-shrink-0">
                <a href="#" class="text-2xl font-bold text-blue-600 dark:text-blue-400 hover:animate-pulse">Genc Gruda</a>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#lebenslauf" class="text-lg font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Lebenslauf</a>
                <a href="#arbeitszeugnisse" class="text-lg font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Arbeitszeugnisse</a>
                <a href="#kontakt" class="text-lg font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Kontakt</a>
            </div>
            <div class="flex items-center space-x-4">
                <!-- Dark Mode Toggle -->
                <button id="dark-mode-toggle" class="focus:outline-none">
                    <svg id="sun-icon" class="w-6 h-6 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5A.75.75 0 0110 2zm4.95 1.05a.75.75 0 011.06 1.06l-1.06 1.06a.75.75 0 11-1.06-1.06l1.06-1.06zM18 9.25a.75.75 0 010 1.5h-1.5a.75.75 0 010-1.5H18zM14.95 15.95a.75.75 0 011.06 1.06l-1.06 1.06a.75.75 0 11-1.06-1.06l1.06-1.06zM10 16.75a.75.75 0 01.75.75v1.5a.75.75 0 01-1.5 0v-1.5a.75.75 0 01.75-.75zm-4.95-1.05a.75.75 0 011.06 1.06L5.06 18a.75.75 0 11-1.06-1.06l1.06-1.06zM2 10.75a.75.75 0 010-1.5h1.5a.75.75 0 010 1.5H2zm2.05-4.95a.75.75 0 011.06 1.06L4.05 7.92a.75.75 0 11-1.06-1.06l1.06-1.06z"></path>
                        <path d="M10 13a3 3 0 100-6 3 3 0 000 6z"></path>
                    </svg>
                    <svg id="moon-icon" class="w-6 h-6 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293a8 8 0 01-11.586 0 8 8 0 0111.586 0z"></path>
                    </svg>
                </button>
                <!-- Mobile Menü Button -->
                <button id="mobile-menu-button" class="md:hidden focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menü -->
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#lebenslauf" class="block text-lg font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Lebenslauf</a>
            <a href="#arbeitszeugnisse" class="block text-lg font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Arbeitszeugnisse</a>
            <a href="#kontakt" class="block text-lg font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Kontakt</a>
        </div>
    </div>
</nav>

<!-- Hauptinhalt -->
<main class="pt-24 fade-in">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Hero Section -->
        <section class="mb-20 text-center py-20 bg-white/60 dark:bg-gray-800/60 backdrop-blur-lg rounded-xl shadow-lg animate-slideIn">
            <h1 class="text-5xl md:text-6xl font-extrabold text-blue-600 mb-6">Genc Gruda – Software-Entwickler</h1>
            <p class="text-xl md:text-2xl text-gray-700 dark:text-gray-300">Innovative Lösungen und moderne Web-Technologien für die digitale Zukunft.</p>
            <a href="#lebenslauf" class="mt-8 inline-block px-8 py-3 bg-blue-600 text-white font-semibold rounded-full shadow-lg hover:bg-blue-700 transition-all duration-300">Mehr erfahren</a>
        </section>

        <!-- Lebenslauf -->
        <section id="lebenslauf" class="mb-20">
            <div class="bg-white/70 dark:bg-gray-800/70 backdrop-blur-lg p-8 rounded-xl shadow-lg animate-slideIn">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6 border-b-2 border-blue-600 inline-block">Lebenslauf</h2>
                <div class="flex flex-col md:flex-row">
                    <!-- Persönliche Daten -->
                    <div class="md:w-1/3 mb-6 md:mb-0">
                        <h4 class="text-xl font-semibold text-blue-600">Persönliche Daten</h4>
                        <p><strong>Name:</strong> Genc Gruda</p>
                        <p><strong>Geboren:</strong> 27. April 1990</p>
                        <p><strong>Status:</strong> Verheiratet</p>
                        <p><strong>Adresse:</strong> Gutenbergstraße 10, 8280 Kreuzlingen, Schweiz</p>
                        <p><strong>Email:</strong> <a href="mailto:gencgruda@gmail.com" class="text-blue-600 hover:underline">gencgruda@gmail.com</a></p>
                        <p><strong>Telefon:</strong> +41 76 834 83 32</p>
                    </div>
                    <!-- IT-Skills & Berufserfahrung -->
                    <div class="md:w-2/3">
                        <h4 class="text-xl font-semibold text-blue-600 mb-4">IT-Skills & Kernkompetenzen</h4>
                        <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                            <li><strong>Programmiersprachen:</strong> PHP (OOP), HTML, SQL, JavaScript, jQuery, CSS, XML</li>
                            <li><strong>Datenbanken:</strong> MySQL, MSSQL, PGSQL</li>
                            <li><strong>Frameworks:</strong> Laravel, Zend Framework 3, Lumen, Laminas, Phalcon, Twitter Bootstrap</li>
                            <li><strong>Tools:</strong> Node.js, DataGrip, Mantis, Bitbucket, Jira, PHPStorm, Composer, Doctrine, Git, SVN, Virtual-Box, YouTrack, Eloquent, Ubuntu, Vagrant, DDEV, Blade, Job-Router, Google-Maps-API, PayPal-API, Open-Street-Map, Moodle</li>
                        </ul>
                        <div class="mt-8">
                            <h4 class="text-xl font-semibold text-blue-600 mb-2">Berufserfahrung</h4>
                            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                                <li>
                                    <strong>ZHAW – Züricher Hochschule für angewandte Wissenschaft</strong> (Oktober 2022 – Jetzt)
                                    <p class="ml-4">Software-Entwickler: Pflege und Weiterentwicklung von Moodle sowie zugehörigen Plugins, Konzeption der Datenbankstruktur und des Backends für die MyZHAW-App, Entwicklung einer API inklusive Import-Schnittstelle, sowie Mitarbeit am Frontend.</p>
                                    <p class="ml-4"><strong>Technologien:</strong> Moodle, PHP, PGSQL, MySQL, Laravel, HTML, CSS, Tailwind, DDEV (Docker)</p>
                                </li>
                                <li class="mt-4">
                                    <strong>Alterspree Verlag GmbH</strong> (Januar 2021 – September 2022)
                                    <p class="ml-4">Lead Software-Entwickler: Teamleitung, Produktanalyse &amp; -entwicklung, Software-Entwicklung, Request-Management sowie Scrum-Master (Jira).</p>
                                    <p class="ml-4"><strong>Technologien:</strong> Laravel, Vue.js, Nova, Laravel-Echo-Server, MySQL, DDEV (Docker)</p>
                                </li>
                                <li class="mt-4">
                                    <strong>CodeFrog IT GmbH</strong> (März 2019 – Dezember 2020)
                                    <p class="ml-4">Software-Entwickler: Teamleitung, Support &amp; Einarbeitung, interne API-Entwicklung, Datenbankerweiterungen sowie die Entwicklung diverser Tools.</p>
                                    <p class="ml-4"><strong>Technologien:</strong> PHP 7, Laravel, Vagrant, Virtual-Box, MySQL, Eloquent, jQuery, Blade, Bootstrap, Ubuntu, GitLab, Lumen, Node.js, Doctrine</p>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-8">
                            <h4 class="text-xl font-semibold text-blue-600 mb-2">Ausbildung</h4>
                            <p>Abitur an der Hivzi Sylejmani mit Schwerpunkt Informatik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Arbeitszeugnisse -->
        <section id="arbeitszeugnisse" class="mb-20">
            <div class="bg-white/70 dark:bg-gray-800/70 backdrop-blur-lg p-8 rounded-xl shadow-lg animate-slideIn">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6 border-b-2 border-blue-600 inline-block">Arbeitszeugnisse</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-4">In meinen Arbeitszeugnissen wird meine Tätigkeit als Lead Softwareentwickler und Software-Entwickler umfassend beschrieben. Dabei lag der Fokus auf:</p>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-4">
                    <li>Systemanalysen und der eigenständigen Neuentwicklung digitaler Lösungen</li>
                    <li>Innovative Produktentwicklung und Unterstützung bei der Markteinführung</li>
                    <li>Effiziente Projektleitung und Teamkoordination</li>
                </ul>
                <p class="text-gray-700 dark:text-gray-300">Die Zeugnisse belegen zudem, dass ich auch unter hohem Zeitdruck stets sehr gute Arbeitsergebnisse erzielt habe.</p>
            </div>
        </section>

        <!-- Kontakt -->
        <section id="kontakt" class="mb-20">
            <div class="bg-white/70 dark:bg-gray-800/70 backdrop-blur-lg p-8 rounded-xl shadow-lg animate-slideIn">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6 border-b-2 border-blue-600 inline-block">Kontakt</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-4">Für weitere Informationen oder eine Kontaktaufnahme erreichen Sie mich unter:</p>
                <p class="text-gray-700 dark:text-gray-300"><strong>Email:</strong> <a href="mailto:gencgruda@gmail.com" class="text-blue-600 dark:text-blue-400 hover:underline">gencgruda@gmail.com</a></p>
                <p class="text-gray-700 dark:text-gray-300"><strong>Telefon:</strong> +41 76 834 83 32</p>
            </div>
        </section>
    </div>
</main>

<!-- Footer -->
<footer class="bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm shadow-inner">
    <div class="max-w-7xl mx-auto px-4 py-6 text-center">
        <p class="text-gray-600 dark:text-gray-400">&copy; 2025 Genc Gruda</p>
    </div>
</footer>

<script>
    // Mobile Menu Toggle
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Dark Mode Toggle
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const htmlElement = document.documentElement;
    darkModeToggle.addEventListener('click', () => {
        htmlElement.classList.toggle('dark');
    });
</script>
</body>
</html>
