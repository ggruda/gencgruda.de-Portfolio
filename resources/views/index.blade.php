<!DOCTYPE html>
<html lang="de" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genc Gruda – Software-Entwickler, Freelancer, PHP &amp; Laravel Experte</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Genc Gruda ist ein erfahrener Software-Entwickler und Freelancer mit Expertise in PHP, Laravel und modernen Web-Technologien. Erfahren Sie mehr über seinen detaillierten Lebenslauf, seine beruflichen Erfolge und innovative Projekte.">
    <meta name="keywords" content="Software Entwickler, Freelancer, PHP, Laravel, Webentwicklung, agile Softwareentwicklung, moderne Web-Technologien">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.gencgruda.de/">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Genc Gruda – Software-Entwickler, Freelancer, PHP &amp; Laravel Experte">
    <meta property="og:description" content="Erfahren Sie mehr über Genc Gruda, einen erfahrenen Software-Entwickler und Freelancer mit Fokus auf PHP, Laravel und moderne Web-Technologien.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.gencgruda.de/">
    <meta property="og:image" content="https://www.gencgruda.de/images/hero.jpg">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Genc Gruda – Software-Entwickler, Freelancer, PHP &amp; Laravel Experte">
    <meta name="twitter:description" content="Erfahren Sie mehr über Genc Gruda, einen erfahrenen Software-Entwickler und Freelancer mit Fokus auf PHP, Laravel und moderne Web-Technologien.">
    <meta name="twitter:image" content="https://www.gencgruda.de/images/hero.jpg">

    <!-- Structured Data (JSON-LD) für Person -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Person",
          "name": "Genc Gruda",
          "jobTitle": "Software-Entwickler und Freelancer",
          "url": "https://www.gencgruda.de",
          "sameAs": [
            "https://www.linkedin.com/in/gencgruda",
            "https://github.com/gencgruda"
          ],
          "description": "Erfahrener Software-Entwickler mit Expertise in PHP, Laravel und modernen Web-Technologien. Spezialisiert auf innovative Lösungen und agile Softwareentwicklung."
        }
    </script>
    <!-- Erweiterte SEO-Daten: Beispiel für Projekte -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "CreativeWork",
          "name": "Projekte von Genc Gruda",
          "description": "Eine Auswahl erfolgreicher Projekte und Zertifikate im Bereich der Softwareentwicklung.",
          "url": "https://www.gencgruda.de/projekte"
        }
    </script>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Chart.js für interaktive Diagramme -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    keyframes: {
                        fadeIn: { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
                        slideIn: { '0%': { transform: 'translateY(-20px)', opacity: '0' }, '100%': { transform: 'translateY(0)', opacity: '1' } },
                        rotateIn: { '0%': { transform: 'rotate(-45deg)', opacity: '0' }, '100%': { transform: 'rotate(0)', opacity: '1' } },
                        pulse: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.1)' }
                        },
                        typewriter: {
                            '0%': { width: '0%' },
                            '100%': { width: '100%' }
                        }
                    },
                    animation: {
                        fadeIn: 'fadeIn 2s ease-in-out',
                        slideIn: 'slideIn 1s ease-out forwards',
                        rotateIn: 'rotateIn 0.5s ease-out',
                        pulse: 'pulse 1s infinite',
                        typewriter: 'typewriter 4s steps(40) 1s forwards'
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Styles */
        body {
            cursor: url('/images/custom-cursor.png'), auto;
        }
        .toggle-icon {
            transition: transform 0.5s ease, opacity 0.5s ease;
        }
        /* Floating Labels */
        .peer:placeholder-shown ~ label {
            top: 0.75rem;
            font-size: 1rem;
        }
        .peer:focus ~ label,
        .peer:not(:placeholder-shown) ~ label {
            top: 0;
            font-size: 0.875rem;
            color: #2563EB;
        }
        /* Back-to-Top Button */
        #backToTop {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: #2563EB;
            color: #F3F4F6;
            padding: 0.75rem;
            border-radius: 9999px;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, transform 0.3s;
            z-index: 100;
        }
        #backToTop.show {
            opacity: 1;
            visibility: visible;
        }
        #backToTop:hover {
            transform: scale(1.1);
            animation: pulse 1s infinite;
        }
        /* Pfeile im Slider Animation */
        .arrow {
            transition: transform 0.3s ease;
        }
        .arrow:hover {
            transform: scale(1.2);
        }
        /* Terminal-Stil */
        .terminal {
            white-space: pre-line;
            /* Weitere Eigenschaften wie bereits vorhanden */
            background: #1E1E1E;
            color: #00FF00;
            font-family: 'Courier New', Courier, monospace;
            padding: 1rem;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }
        .terminal .cursor {
            display: inline-block;
            width: 10px;
            background: #00FF00;
            margin-left: 2px;
            animation: blink 1s step-end infinite;
        }
        @keyframes blink {
            from, to { opacity: 1; }
            50% { opacity: 0; }
        }
    </style>
    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 text-gray-800 dark:text-gray-200 transition-colors duration-500">

<!-- Navigation (Menüpunkte und Dark Mode Schalter rechts) -->
<nav class="fixed top-0 left-0 right-0 bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm shadow-lg z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex-shrink-0">
                <a href="#" class="text-2xl font-bold text-blue-600 dark:text-blue-400 hover:animate-pulse">Genc Gruda</a>
            </div>
            <div class="hidden md:flex items-center space-x-6">
                <a href="#lebenslauf" class="nav-link text-lg font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Lebenslauf</a>
                <a href="#erfolge" class="nav-link text-lg font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Erfolge</a>
                <a href="#kontakt-section" class="nav-link text-lg font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Kontakt</a>
                <button id="dark-mode-toggle" class="relative w-6 h-6 ml-4 focus:outline-none">
                    <svg id="sun-icon" xmlns="http://www.w3.org/2000/svg" class="toggle-icon absolute inset-0 w-6 h-6 opacity-0 dark:opacity-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8-9h1M3 12H2m15.364 6.364l.707.707M5.636 5.636l-.707-.707m12.728 0l-.707-.707M5.636 18.364l-.707.707M12 5a7 7 0 110 14 7 7 0 010-14z" />
                    </svg>
                    <svg id="moon-icon" xmlns="http://www.w3.org/2000/svg" class="toggle-icon absolute inset-0 w-6 h-6 opacity-100 dark:opacity-0 dark:rotate-180" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
                    </svg>
                </button>
            </div>
            <div class="flex md:hidden items-center space-x-4">
                <button id="dark-mode-toggle-mobile" class="relative w-6 h-6 focus:outline-none">
                    <svg id="sun-icon-mobile" xmlns="http://www.w3.org/2000/svg" class="toggle-icon absolute inset-0 w-6 h-6 opacity-0 dark:opacity-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8-9h1M3 12H2m15.364 6.364l.707.707M5.636 5.636l-.707-.707m12.728 0l-.707-.707M5.636 18.364l-.707.707M12 5a7 7 0 110 14 7 7 0 010-14z" />
                    </svg>
                    <svg id="moon-icon-mobile" xmlns="http://www.w3.org/2000/svg" class="toggle-icon absolute inset-0 w-6 h-6 opacity-100 dark:opacity-0 dark:rotate-180" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
                    </svg>
                </button>
                <button id="mobile-menu-button" class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#lebenslauf" class="block text-lg font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Lebenslauf</a>
            <a href="#erfolge" class="block text-lg font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Erfolge</a>
            <a href="#kontakt-section" class="block text-lg font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Kontakt</a>
        </div>
    </div>
</nav>

<!-- Hauptinhalt -->
<main class="pt-24 fade-in">
    <div class="max-w-7xl mx-auto px-4">

        <!-- Hero Section: Zweispaltig mit Video-Hintergrund -->
        <section class="relative mb-20 bg-black rounded-xl shadow-lg overflow-hidden">
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-50">
                <source src="/videos/hero-background.mp4" type="video/mp4">
            </video>
            <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-8">
                <div class="z-10">
                    <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4">Genc Gruda</h1>
                    <div class="terminal">
                        <div id="terminal-output"></div>
                        <span class="cursor"></span>
                    </div>
                    <a href="#lebenslauf" class="inline-block mt-6 px-8 py-3 bg-blue-600 text-white font-semibold rounded-full shadow-lg hover:bg-blue-700 transition-all duration-300">Mehr erfahren</a>
                </div>
                <div class="z-10 text-center">
                    <img src="/images/web_developer.svg" alt="Hero Illustration" class="w-full max-w-md mx-auto web_developer_ilustration">
                </div>
            </div>
        </section>


        <!-- Lebenslauf Section: Zweispaltig -->
        <section id="lebenslauf" class="mb-20 bg-white/60 dark:bg-gray-800/70 backdrop-blur-lg rounded-xl shadow-lg animate-on-scroll">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
                <div class="flex flex-col justify-center">
                    <img src="/images/lebenslauf-illustration.svg" alt="Lebenslauf Illustration" class="mx-auto w-full max-w-xs mb-4">
                    <p class="text-gray-700 dark:text-gray-300">
                        Entdecken Sie meinen beruflichen Werdegang – von persönlichen Daten über IT-Skills bis hin zu umfangreicher Berufserfahrung.
                    </p>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6 border-b-2 border-blue-600 inline-block">Lebenslauf</h2>
                    <div class="flex flex-col md:flex-row">

                        <div>
                            <h4 class="text-xl font-semibold text-blue-600 mb-4">IT-Skills & Kernkompetenzen</h4>
                            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                                <li><strong>Programmiersprachen:</strong> PHP (OOP), HTML, SQL, JavaScript, jQuery, CSS, XML</li>
                                <li><strong>Datenbanken:</strong> MySQL, MSSQL, PGSQL</li>
                                <li><strong>Frameworks:</strong> Laravel, Zend Framework 3, Lumen, Laminas, Phalcon, Twitter Bootstrap</li>
                                <li><strong>Tools:</strong> Node.js, DataGrip, Mantis, Bitbucket, Jira, PHPStorm, Composer, Doctrine, Git, SVN, Virtual-Box, YouTrack, Eloquent, Ubuntu, Vagrant, DDEV, Blade, Job-Router, Google-Maps-API, PayPal-API, Open-Street-Map, Moodle</li>
                            </ul>
                            <div class="mt-8">
                                <h4 class="text-xl font-semibold text-blue-600 mb-2">Berufserfahrung</h4>
                                <div class="space-y-4">
                                    <div class="border-b border-gray-300 dark:border-gray-600 pb-4">
                                        <button class="w-full text-left focus:outline-none" onclick="toggleTimeline('timeline1')">
                                            <h4 class="text-xl font-semibold text-blue-600">ZHAW – Züricher Hochschule für angewandte Wissenschaft <span class="text-sm text-gray-500">(Oktober 2022 – Jetzt)</span></h4>
                                        </button>
                                        <div id="timeline1" class="mt-2 hidden">
                                            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                                                <li>Pflege und Weiterentwicklung von Moodle & Plugins</li>
                                                <li>Optimierung der Datenbankstruktur und Backend-Architektur für die MyZHAW-App</li>
                                                <li>Entwicklung einer robusten API inkl. Import-Schnittstelle</li>
                                                <li>Mitarbeit an einem responsiven Frontend</li>
                                                <li>Arbeiten in einem Docker-basierten DDEV-Umfeld</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="border-b border-gray-300 dark:border-gray-600 pb-4">
                                        <button class="w-full text-left focus:outline-none" onclick="toggleTimeline('timeline2')">
                                            <h4 class="text-xl font-semibold text-blue-600">Alterspree Verlag GmbH <span class="text-sm text-gray-500">(Januar 2021 – September 2022)</span></h4>
                                        </button>
                                        <div id="timeline2" class="mt-2 hidden">
                                            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                                                <li>Teamleitung und Koordination eines Entwicklerteams</li>
                                                <li>Entwicklung innovativer Softwarelösungen</li>
                                                <li>Agile Projektsteuerung als Scrum-Master (Jira)</li>
                                                <li>Interdisziplinäre Zusammenarbeit zur Prozessoptimierung</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="border-b border-gray-300 dark:border-gray-600 pb-4">
                                        <button class="w-full text-left focus:outline-none" onclick="toggleTimeline('timeline3')">
                                            <h4 class="text-xl font-semibold text-blue-600">CodeFrog IT GmbH <span class="text-sm text-gray-500">(März 2019 – Dezember 2020)</span></h4>
                                        </button>
                                        <div id="timeline3" class="mt-2 hidden">
                                            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                                                <li>Leitung von Support- und Einarbeitungsmaßnahmen</li>
                                                <li>Entwicklung interner APIs zur Prozessoptimierung</li>
                                                <li>Erweiterung und Pflege bestehender Datenbankstrukturen</li>
                                                <li>Implementierung diverser Tools zur Verbesserung der Abläufe</li>
                                                <li>Regelmäßige Code-Reviews und Testprozesse</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-8">
                                    <h4 class="text-xl font-semibold text-blue-600 mb-2">Ausbildung</h4>
                                    <p>Abitur an der Hivzi Sylejmani mit Schwerpunkt Informatik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Berufliche Erfolge: Zweispaltig -->
        <section id="erfolge" class="mb-20 bg-white/60 dark:bg-gray-800/70 backdrop-blur-lg rounded-xl shadow-lg animate-on-scroll">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
                <div class="flex flex-col justify-center">
                    <img src="/images/erfolg-illustration.svg" alt="Erfolge Illustration" class="mx-auto w-full max-w-xs mb-4">
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6 border-b-2 border-blue-600 inline-block">Berufliche Erfolge</h2>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">
                        Durch meine langjährige Erfahrung als Software-Entwickler und Freelancer habe ich zahlreiche Projekte erfolgreich realisiert. Mein Engagement und meine Innovationskraft zeigen sich in der Entwicklung moderner Webapplikationen, der Führung agiler Teams und der Implementierung maßgeschneiderter API-Lösungen.
                    </p>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2">
                        <li>Implementierung skalierbarer Webapplikationen mit exzellenter Benutzerfreundlichkeit</li>
                        <li>Effiziente Führung und Motivation von Entwicklerteams in agilen Projekten</li>
                        <li>Entwicklung innovativer API-Lösungen zur Integration externer Systeme</li>
                        <li>Optimierung von Entwicklungsprozessen durch moderne Tools und containerisierte Umgebungen</li>
                        <li>Zusammenarbeit mit namhaften Institutionen und Unternehmen zur Umsetzung anspruchsvoller Projekte</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Parallax Section: Zweispaltig -->
        <section id="parallax-section" class="mb-20 relative bg-fixed bg-center bg-cover" style="background-image: url('/images/parallax-bg.jpg');">
            <div class="mb-20 bg-white/60 dark:bg-gray-800/70 backdrop-blur-lg rounded-xl shadow-lg animate-on-scroll">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
                    <!-- Linke Spalte: Text -->
                    <div class="flex flex-col justify-center text-gray-800 dark:text-gray-200 mb-6">
                        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6 border-b-2 border-blue-600 inline-block">Unsere Projekte</h2>
                        <p class="mb-4">Erfahren Sie mehr über unsere innovativen Lösungen – interaktive Diagramme und Statistiken geben einen Überblick über unsere IT-Projekte.</p>
                    </div>
                    <!-- Rechte Spalte: Diagramm (Chart.js) -->
                    <div>
                        <canvas id="projectChart"></canvas>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Slider: Zweispaltig mit 7 Kundenstimmen -->
        <section id="testimonials" class="mb-20 bg-white/60 dark:bg-gray-800/70 backdrop-blur-lg rounded-xl shadow-lg animate-on-scroll">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
                <!-- Linke Spalte: Illustration -->
                <div class="flex flex-col justify-center">
                    <img src="/images/testimonials-illustration.svg" alt="Testimonials Illustration" class="mx-auto w-full max-w-xs mb-4">
                </div>
                <!-- Rechte Spalte: Slider -->
                <div class="relative">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-6 border-b-2 border-blue-600 inline-block">Kundenstimmen</h2>
                    <div id="slider" class="overflow-hidden relative">
                        <div id="slides" class="flex transition-transform duration-2500">
                            <div class="slide min-w-full p-4">
                                <p class="text-gray-700 dark:text-gray-300 p-14">"Genc hat unsere Erwartungen übertroffen – innovative Lösungen und perfekte Umsetzung!"</p>
                            </div>
                            <div class="slide min-w-full p-4">
                                <p class="text-gray-700 dark:text-gray-300 p-14">"Mit seiner Expertise in PHP und Laravel ist er der perfekte Partner für anspruchsvolle Projekte."</p>
                            </div>
                            <div class="slide min-w-full p-4">
                                <p class="text-gray-700 dark:text-gray-300 p-14">"Die Zusammenarbeit war unkompliziert und sehr professionell. Absolut empfehlenswert!"</p>
                            </div>
                            <div class="slide min-w-full p-4">
                                <p class="text-gray-700 dark:text-gray-300 p-14">"Seine Herangehensweise an komplexe Probleme ist beeindruckend und inspirierend."</p>
                            </div>
                            <div class="slide min-w-full p-4">
                                <p class="text-gray-700 dark:text-gray-300 p-14">"Ich schätze besonders seine schnelle Reaktionszeit und zuverlässige Arbeit."</p>
                            </div>
                            <div class="slide min-w-full p-4">
                                <p class="text-gray-700 dark:text-gray-300 p-14">"Dank Genc konnten wir unsere Softwarelösungen signifikant verbessern und optimieren."</p>
                            </div>
                            <div class="slide min-w-full p-4">
                                <p class="text-gray-700 dark:text-gray-300 p-14">"Seine innovativen Ideen und Lösungen haben unser Projekt auf ein neues Level gehoben."</p>
                            </div>
                        </div>
                        <!-- Slider Controls mit animierten Pfeilen -->
                        <button id="prev" class="arrow absolute left-3 top-1/2 transform bg-blue-600 text-white p-2 rounded-full">‹</button>
                        <button id="next" class="arrow absolute right-3 top-1/2 transform bg-blue-600 text-white p-2 rounded-full">›</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kontakt Section: Zweispaltig -->
        <section id="kontakt-section" class="mb-20 bg-white/60 dark:bg-gray-800/70 backdrop-blur-lg rounded-xl shadow-lg animate-on-scroll">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8 md:p-24">
                <!-- Linke Spalte: Header, Text und Illustration -->
                <div class="flex flex-col justify-center">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-200 mb-4 border-b-2 border-blue-600 inline-block">Kontakt</h2>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">
                        Haben Sie Fragen oder möchten Sie ein Projekt besprechen? Kontaktieren Sie mich – ich freue mich darauf, gemeinsam kreative Lösungen zu entwickeln.
                    </p>
                    <img src="/images/kontakt-illustration.svg" alt="Kontakt Illustration" class="mx-auto w-full max-w-xs">
                </div>
                <!-- Rechte Spalte: Kontaktformular mit Floating Labels -->
                <div>
                    <form id="contactForm" action="/kontakt" method="POST" class="space-y-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="relative">
                                <input type="text" id="vorname" name="vorname" required class="peer block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-transparent text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder=" " aria-label="Vorname">
                                <label for="vorname" class="absolute left-4 top-2 text-gray-500 transition-all peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-focus:top-0 peer-focus:text-sm">Vorname</label>
                            </div>
                            <div class="relative">
                                <input type="text" id="nachname" name="nachname" required class="peer block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-transparent text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder=" " aria-label="Nachname">
                                <label for="nachname" class="absolute left-4 top-2 text-gray-500 transition-all peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-focus:top-0 peer-focus:text-sm">Nachname</label>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="relative">
                                <input type="text" id="firmenname" name="firmenname" class="peer block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-transparent text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder=" " aria-label="Firmenname">
                                <label for="firmenname" class="absolute left-4 top-2 text-gray-500 transition-all peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-focus:top-0 peer-focus:text-sm">Firmenname</label>
                            </div>
                            <div class="relative">
                                <input type="email" id="email" name="email" required class="peer block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-transparent text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder=" " aria-label="E-Mail Adresse">
                                <label for="email" class="absolute left-4 top-2 text-gray-500 transition-all peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-focus:top-0 peer-focus:text-sm">E-Mail Adresse</label>
                            </div>
                        </div>
                        <div class="relative">
                            <textarea id="message" name="message" rows="7" required class="peer block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-transparent text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder=" " aria-label="Nachricht"></textarea>
                            <label for="message" class="absolute left-4 top-2 text-gray-500 transition-all peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-focus:top-0 peer-focus:text-sm">Nachricht</label>
                        </div>
                        <!-- reCAPTCHA Integration (Platzhalter, Site-Key ersetzen) -->
                        <div>
                            <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                        </div>
                        <div>
                            <button type="submit" class="w-full px-6 py-3 bg-blue-600 text-white font-semibold rounded-md shadow hover:bg-blue-700 transition-colors duration-300">
                                Nachricht senden
                            </button>
                        </div>
                    </form>
                    <div id="feedback-message" class="mt-4 p-4 bg-green-100 text-green-800 rounded-md text-center hidden">
                        Danke für Ihre Nachricht!
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<!-- Back-to-Top Button -->
<div id="backToTop" onclick="scrollToTop()">↑</div>

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

    // Dark Mode Toggle mit persistenter Speicherung
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const darkModeToggleMobile = document.getElementById('dark-mode-toggle-mobile');
    const htmlElement = document.documentElement;
    if(localStorage.getItem('darkMode') === 'enabled'){
        htmlElement.classList.add('dark');
    }
    function toggleDarkMode(){
        htmlElement.classList.toggle('dark');
        if(htmlElement.classList.contains('dark')){
            localStorage.setItem('darkMode', 'enabled');
        } else {
            localStorage.setItem('darkMode', 'disabled');
        }
    }
    darkModeToggle.addEventListener('click', () => {
        toggleDarkMode();
        darkModeToggle.classList.add('animate-rotateIn');
        setTimeout(() => {
            darkModeToggle.classList.remove('animate-rotateIn');
        }, 500);
    });
    darkModeToggleMobile.addEventListener('click', () => {
        toggleDarkMode();
    });

    // Back-to-Top Button
    const backToTop = document.getElementById('backToTop');
    window.addEventListener('scroll', () => {
        if(window.scrollY > 300){
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });
    function scrollToTop(){
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Interaktive Timeline
    function toggleTimeline(id){
        const elem = document.getElementById(id);
        elem.classList.toggle('hidden');
    }

    // Testimonials Slider
    let slideIndex = 0;
    const slides = document.getElementById('slides');
    const totalSlides = slides.children.length;
    document.getElementById('prev').addEventListener('click', () => {
        slideIndex = (slideIndex > 0) ? slideIndex - 1 : totalSlides - 1;
        updateSlider();
    });
    document.getElementById('next').addEventListener('click', () => {
        slideIndex = (slideIndex + 1) % totalSlides;
        updateSlider();
    });
    function updateSlider(){
        slides.style.transform = `translateX(-${slideIndex * 100}%)`;
    }
    setInterval(() => {
        slideIndex = (slideIndex + 1) % totalSlides;
        updateSlider();
    }, 5000);

    // Active Navigation Highlight
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section[id]');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                navLinks.forEach(link => link.classList.remove('text-blue-600'));
                const activeLink = document.querySelector(`a[href="#${entry.target.id}"]`);
                if(activeLink) activeLink.classList.add('text-blue-600');
            }
        });
    }, { threshold: 0.3 });
    sections.forEach(section => observer.observe(section));

    // Scrollbasierte Animationen
    document.addEventListener('DOMContentLoaded', () => {
        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    entry.target.classList.add('animate-fadeIn');
                    scrollObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });
        document.querySelectorAll('.animate-on-scroll').forEach(elem => {
            scrollObserver.observe(elem);
        });
    });



    // Stelle sicher, dass das Element mit der ID "terminal-output" existiert
    const terminalOutput = document.getElementById('terminal-output');

    // Der Text, der im Terminal ausgegeben werden soll
    const text = "user@gencgruda:~$ Software-Entwickler & Freelancer – Ihr Experte für PHP, Laravel und moderne Web-Technologien. \nuser@gencgruda:~$ ";
    // Startindex für den Typewriter-Effekt
    let index = 0;

    // Funktion, die den Typewriter-Effekt umsetzt
    function typeWriter() {
        if (index < text.length) {
            terminalOutput.innerHTML += text.charAt(index);
            index++;
            // Passe den Delay an (in Millisekunden)
            setTimeout(typeWriter, 50);
        }
    }

    // Starte den Typewriter-Effekt
    typeWriter();



    // Chart.js Diagramm
    const ctx = document.getElementById('projectChart').getContext('2d');
    const projectChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Projekte 2015', 'Projekte 2016', 'Projekte 2017', 'Projekte 2018', 'Projekte 2019', 'Projekte 2020', 'Projekte 2021', 'Projekte 2022', 'Projekte 2023', 'Projekte 2024'],
            datasets: [{
                label: 'Abgeschlossene Projekte',
                data: [1, 3, 4 ,5, 8, 12, 15, 7, 10],
                backgroundColor: '#2563EB'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Formular-Submit mit Feedback (Demo)
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        document.getElementById('feedback-message').classList.remove('hidden');
        setTimeout(() => {
            document.getElementById('feedback-message').classList.add('hidden');
            this.reset();
        }, 3000);
    });

    document.addEventListener('DOMContentLoaded', () => {
        const web_developer_ilustrationElement = document.querySelector('.web_developer_ilustration');
        if (web_developer_ilustrationElement) {
            // Animation: Von oben herein, während sich die Opazität von 0 auf 1 ändert.
            web_developer_ilustrationElement.animate([
                { transform: 'translateY(-50px)', opacity: 0 },
                { transform: 'translateY(0)', opacity: 1 }
            ], {
                duration: 1000,      // Dauer der Animation in Millisekunden
                easing: 'ease-out',  // Sanfter Endeffekt
                fill: 'forwards'     // Das Endergebnis wird beibehalten
            });
        }
    });

</script>
</body>
</html>
