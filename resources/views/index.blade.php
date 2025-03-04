<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genc Gruda | Software Architect</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Raleway:wght@300;400;500;600;700;800&family=Fira+Code:wght@300;400;500;600;700&display=swap');

        :root {
            --primary: #2563eb;
            --primary-light: #60a5fa;
            --primary-dark: #1e40af;
            --secondary: #10b981;
            --secondary-light: #34d399;
            --secondary-dark: #047857;
            --accent: #8b5cf6;
            --accent-light: #a78bfa;
            --accent-dark: #6d28d9;
            --dark: #111827;
            --light: #f9fafb;
            --gray: #6b7280;
            --card-bg: rgba(255, 255, 255, 0.05);
            --card-border: rgba(255, 255, 255, 0.1);
            --card-shadow: rgba(0, 0, 0, 0.2);
        }

        /* Global Styles */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark);
            color: var(--light);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Raleway', sans-serif;
        }

        code, pre, .code-font {
            font-family: 'Fira Code', monospace;
        }

        .container-custom {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-light);
        }

        /* Background Animation */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: radial-gradient(circle at 50% 50%, #1e1e2e, #111827);
        }

        /* Glassmorphism Effects */
        .glass {
            background: rgba(24, 24, 27, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.36);
        }

        .glass-card {
            background: rgba(24, 24, 27, 0.4);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 4px 24px 0 rgba(0, 0, 0, 0.2);
            transition: transform 0.5s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .glass-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 40px 0 rgba(0, 0, 0, 0.3);
        }

        /* Gradient Text */
        .gradient-text-primary {
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .gradient-text-secondary {
            background: linear-gradient(90deg, var(--secondary), var(--secondary-light));
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .gradient-text-accent {
            background: linear-gradient(90deg, var(--accent), var(--accent-light));
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        /* Page Navigation Animation */
        .page-transition {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s, transform 0.8s;
        }

        .page-transition.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Animated Underline */
        .hover-underline-animation {
            position: relative;
            display: inline-block;
        }

        .hover-underline-animation::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: -4px;
            left: 0;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transform-origin: bottom right;
            transition: transform 0.3s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .hover-underline-animation:hover::after,
        .hover-underline-animation.active::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /* Custom Button */
        .btn-custom {
            position: relative;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            z-index: 1;
        }

        .btn-custom:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, var(--primary), var(--accent), var(--secondary));
            z-index: -1;
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .btn-custom:after {
            content: '';
            position: absolute;
            top: 2px;
            left: 2px;
            right: 2px;
            bottom: 2px;
            background-color: var(--dark);
            z-index: -1;
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .btn-custom:hover:after {
            opacity: 0.8;
            background-color: rgba(17, 24, 39, 0.8);
        }

        /* Header */
        header {
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        }

        header.scrolled {
            background: rgba(17, 24, 39, 0.9);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5);
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link:before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transition: width 0.3s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .nav-link:hover:before, .nav-link.active:before {
            width: 100%;
        }

        /* 3D Card Effect */
        .card-3d {
            transition: transform 0.5s;
            transform-style: preserve-3d;
        }

        .card-3d:hover {
            transform: rotateY(10deg) rotateX(10deg);
        }

        /* Hero Section */
        .hero-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-code-bg {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0.1;
            z-index: -1;
            overflow: hidden;
        }

        .hero-code-bg pre {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            font-size: 0.8rem;
            color: var(--primary-light);
            padding: 1rem;
            overflow: hidden;
        }

        /* Floating Elements */
        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        /* Hexagon Skills */
        .hexagon-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 0 auto;
            max-width: 900px;
        }

        .hexagon {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 10px;
            background: rgba(24, 24, 27, 0.4);
            backdrop-filter: blur(8px);
            clip-path: polygon(50% 0%, 95% 25%, 95% 75%, 50% 100%, 5% 75%, 5% 25%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            transition: all 0.3s ease;
        }

        .hexagon:hover {
            transform: translateY(-10px) scale(1.1);
            background: var(--primary-dark);
        }

        .hexagon i {
            font-size: 2rem;
            margin-bottom: 5px;
        }

        .hexagon .skill-name {
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Timeline */
        .timeline {
            position: relative;
            padding: 2rem 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            width: 4px;
            background: linear-gradient(180deg, var(--primary), var(--accent), var(--secondary));
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .timeline-item {
            position: relative;
            margin: 2rem 0;
            width: 50%;
            padding: 0 2rem;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
            text-align: right;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
            text-align: left;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--primary);
            border: 4px solid var(--dark);
            top: 0;
        }

        .timeline-item:nth-child(odd)::after {
            right: -12px;
        }

        .timeline-item:nth-child(even)::after {
            left: -12px;
        }

        /* Project Gallery */
        .project-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            transition: all 0.5s ease;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(17, 24, 39, 0), rgba(17, 24, 39, 0.9));
            z-index: 1;
        }

        .project-image {
            transition: all 0.5s ease;
        }

        .project-card:hover .project-image {
            transform: scale(1.1);
        }

        .project-info {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 1.5rem;
            z-index: 2;
            transform: translateY(60px);
            transition: all 0.5s ease;
        }

        .project-card:hover .project-info {
            transform: translateY(0);
        }

        .project-title {
            margin-bottom: 0.5rem;
            transition: all 0.5s ease;
        }

        .project-card:hover .project-title {
            transform: translateY(0);
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            margin-top: 0.5rem;
            opacity: 0;
            transition: all 0.5s ease;
        }

        .project-card:hover .project-tags {
            opacity: 1;
        }

        .project-tag {
            padding: 4px 10px;
            margin: 2px;
            border-radius: 20px;
            font-size: 0.7rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
        }

        /* Contact Form */
        .form-input {
            background: rgba(24, 24, 27, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.3);
            outline: none;
        }

        /* Footer */
        .footer-link {
            transition: all 0.3s ease;
        }

        .footer-link:hover {
            color: var(--primary-light);
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .timeline::before {
                left: 30px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 60px;
                padding-right: 0;
                text-align: left;
            }

            .timeline-item:nth-child(odd), .timeline-item:nth-child(even) {
                left: 0;
            }

            .timeline-item:nth-child(odd)::after, .timeline-item:nth-child(even)::after {
                left: 20px;
                right: auto;
            }

            .hexagon {
                width: 100px;
                height: 100px;
            }
        }

        /* Cursor effects */
        .cursor-dot {
            position: fixed;
            width: 8px;
            height: 8px;
            background-color: var(--primary);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
            z-index: 9999;
            transition: width 0.3s, height 0.3s, background-color 0.3s;
        }

        .cursor-outline {
            position: fixed;
            width: 40px;
            height: 40px;
            border: 2px solid var(--primary);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
            z-index: 9998;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .cursor-hover {
            width: 16px;
            height: 16px;
            background-color: var(--accent);
        }
    </style>
</head>
<body class="antialiased">
<!-- Custom Cursor -->
<div class="cursor-dot"></div>
<div class="cursor-outline"></div>

<!-- Background Animation -->
<div class="bg-animation"></div>
<div id="particles-js" class="fixed inset-0 z-0"></div>

<!-- Header & Navigation -->
<header class="fixed top-0 left-0 w-full z-50 py-4 transition-all duration-300" id="header">
    <div class="container-custom mx-auto">
        <div class="flex justify-between items-center">
            <a href="#home" class="text-2xl font-bold flex items-center group">
                <div class="relative w-10 h-10 mr-3 rounded-lg overflow-hidden glass flex items-center justify-center">
                    <span class="text-lg font-bold group-hover:opacity-0 transition-opacity duration-300">G</span>
                    <span class="absolute inset-0 flex items-center justify-center text-lg font-bold opacity-0 group-hover:opacity-100 transition-opacity duration-300 gradient-text-primary">&lt;/&gt;</span>
                </div>
                <span class="gradient-text-primary">Genc Gruda</span>
            </a>

            <nav class="hidden md:flex space-x-8 items-center">
                <a href="#home" class="nav-link hover-underline-animation active">Home</a>
                <a href="#about" class="nav-link hover-underline-animation">Über mich</a>
                <a href="#skills" class="nav-link hover-underline-animation">Skills</a>
                <a href="#experience" class="nav-link hover-underline-animation">Erfahrung</a>
                <a href="#projects" class="nav-link hover-underline-animation">Projekte</a>
                <a href="#contact" class="nav-link hover-underline-animation">Kontakt</a>

                <div class="relative ml-4">
                    <button class="btn-custom px-6 py-2 rounded-full text-white font-medium">
                        <span>Lebenslauf</span>
                    </button>
                </div>
            </nav>

            <button class="md:hidden focus:outline-none relative z-50" id="mobile-menu-button">
                <div class="w-6 h-0.5 bg-white mb-1.5 transition-all duration-300" id="hamburger-top"></div>
                <div class="w-6 h-0.5 bg-white mb-1.5 transition-all duration-300" id="hamburger-middle"></div>
                <div class="w-6 h-0.5 bg-white transition-all duration-300" id="hamburger-bottom"></div>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="fixed inset-0 flex items-center justify-center glass z-40 opacity-0 pointer-events-none transition-all duration-500" id="mobile-menu">
        <div class="container mx-auto px-4 py-4 flex flex-col space-y-6 text-center">
            <a href="#home" class="text-2xl py-2 nav-link">Home</a>
            <a href="#about" class="text-2xl py-2 nav-link">Über mich</a>
            <a href="#skills" class="text-2xl py-2 nav-link">Skills</a>
            <a href="#experience" class="text-2xl py-2 nav-link">Erfahrung</a>
            <a href="#projects" class="text-2xl py-2 nav-link">Projekte</a>
            <a href="#contact" class="text-2xl py-2 nav-link">Kontakt</a>

            <div class="pt-6">
                <button class="btn-custom px-8 py-3 rounded-full text-white font-medium text-lg">
                    <span>Lebenslauf</span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center relative overflow-hidden pt-20">
    <!-- Hero Code Background -->
    <div class="hero-code-bg">
            <pre class="code-font">
function Developer() {
  const [skills, setSkills] = useState([
    'Laravel', 'PHP', 'JavaScript', 'Vue.js',
    'MySQL', 'API Development', 'Docker'
  ]);

  const experience = {
    years: 15,
    companies: [
      { name: 'ZHAW', role: 'Software Developer', period: '2022 - Present' },
      { name: 'Alterspree Verlag GmbH', role: 'Lead Software Developer', period: '2021 - 2022' },
      { name: 'CodeFrog IT GmbH', role: 'Software Developer', period: '2019 - 2020' }
    ]
  };

  function buildSolution(requirements) {
    return {
      architecture: designArchitecture(requirements),
      code: writeCleanCode(requirements),
      quality: testEverything(),
      result: 'High-quality software solution'
    };
  }

  return (
    &lt;Developer
      name="Genc Gruda"
      role="Software Architect"
      expertise="Backend Development"
      passion="Creating efficient solutions"
    /&gt;
  );
}</pre>
    </div>

    <div class="container-custom mx-auto relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8 page-transition" data-delay="0.2">
                <div class="animate__animated animate__fadeIn animate__delay-1s">
                    <h4 class="text-xl mb-2 gradient-text-secondary font-medium code-font">&lt;Hallo Welt! /&gt;</h4>
                    <h1 class="text-5xl md:text-6xl font-bold mb-4">Ich bin <span class="gradient-text-primary">Genc Gruda</span></h1>
                    <h2 class="text-2xl md:text-3xl text-gray-300 mb-6 flex items-center">
                        <span class="mr-3">I am a</span>
                        <span id="typed-text" class="gradient-text-accent"></span>
                    </h2>
                </div>

                <p class="text-lg text-gray-300 animate__animated animate__fadeIn animate__delay-1s">
                    Mit über <strong>15 Jahren Erfahrung</strong> entwickle ich innovative und effiziente Softwarelösungen.
                    Spezialisiert auf <strong class="text-blue-400">PHP/Laravel</strong>, <strong class="text-green-400">API-Entwicklung</strong> und
                    <strong class="text-purple-400">Datenbank-Design</strong>.
                </p>

                <div class="flex flex-wrap gap-4 animate__animated animate__fadeIn animate__delay-1s">
                    <a href="#contact" class="btn-custom px-8 py-4 rounded-full text-white font-medium text-lg">
                        <span>Kontakt aufnehmen</span>
                    </a>
                    <a href="#projects" class="px-8 py-4 rounded-full text-white font-medium text-lg border border-white/20 hover:border-white/40 transition-all">
                        <span>Projekte ansehen</span>
                    </a>
                </div>

                <div class="flex pt-8 space-x-6 animate__animated animate__fadeIn animate__delay-2s">
                    <a href="#" class="text-gray-400 hover:text-white transition-all">
                        <i class="fab fa-github text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-all">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-all">
                        <i class="fab fa-twitter text-2xl"></i>
                    </a>
                </div>
            </div>

            <div class="hidden lg:flex justify-center items-center page-transition" data-delay="0.4">
                <div class="relative">
                    <!-- 3D Code Box -->
                    <div class="card-3d glass-card p-8 rounded-xl max-w-xl mx-auto floating">
                        <div class="code-font text-sm text-blue-300 overflow-hidden">
                            <div class="flex items-center mb-4">
                                <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                                <span class="ml-2 text-gray-400">terminal</span>
                            </div>
                            <div class="animate-typing overflow-hidden whitespace-nowrap" id="typing-code">
                                <span class="text-purple-400">const</span> <span class="text-blue-300">developer</span> <span class="text-white">=</span> <span class="text-purple-400">new</span> <span class="text-green-400">Developer</span><span class="text-white">(</span><span class="text-white">)</span><span class="text-white">;</span><br>
                                <br>
                                <span class="text-gray-400">// Initialize skills</span><br>
                                <span class="text-blue-300">developer</span><span class="text-white">.</span><span class="text-yellow-300">skills</span> <span class="text-white">=</span> <span class="text-white">[</span><br>
                                &nbsp;&nbsp;<span class="text-green-300">'PHP'</span><span class="text-white">,</span> <span class="text-green-300">'Laravel'</span><span class="text-white">,</span> <span class="text-green-300">'JavaScript'</span><span class="text-white">,</span><br>
                                &nbsp;&nbsp;<span class="text-green-300">'Vue.js'</span><span class="text-white">,</span> <span class="text-green-300">'MySQL'</span><span class="text-white">,</span> <span class="text-green-300">'Docker'</span><span class="text-white">,</span><br>
                                &nbsp;&nbsp;<span class="text-green-300">'API Development'</span><br>
                                <span class="text-white">];</span><br>
                                <br>
                                <span class="text-gray-400">// Career path</span><br>
                                <span class="text-blue-300">developer</span><span class="text-white">.</span><span class="text-yellow-300">startCareer</span><span class="text-white">(</span><span class="text-green-300">'Freelancer'</span><span class="text-white">)</span><br>
                                &nbsp;&nbsp;<span class="text-white">.</span><span class="text-yellow-300">then</span><span class="text-white">(</span><span class="text-purple-400">experience</span> <span class="text-white">=></span> <span class="text-purple-400">experience</span><span class="text-white">.</span><span class="text-yellow-300">grow</span><span class="text-white">(</span><span class="text-white">)</span><span class="text-white">)</span><br>
                                &nbsp;&nbsp;<span class="text-white">.</span><span class="text-yellow-300">then</span><span class="text-white">(</span><span class="text-purple-400">()</span> <span class="text-white">=></span> <span class="text-green-300">'Lead Developer'</span><span class="text-white">)</span><span class="text-white">;</span><br>
                                <br>
                                <span class="text-gray-400">// Contact</span><br>
                                <span class="text-blue-300">developer</span><span class="text-white">.</span><span class="text-yellow-300">contact</span><span class="text-white">(</span><span class="text-white">)</span><span class="text-white">;</span><br>
                                <span class="animate-pulse">▋</span>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative elements -->
                    <div class="absolute -top-12 -right-10 w-24 h-24 rounded-full bg-blue-500 bg-opacity-30 blur-xl"></div>
                    <div class="absolute -bottom-8 -left-10 w-32 h-32 rounded-full bg-purple-500 bg-opacity-20 blur-xl"></div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate__animated animate__bounce animate__infinite animate__slow">
            <a href="#about" class="text-white flex flex-col items-center">
                <span class="text-sm mb-2 text-gray-400">Mehr erfahren</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- About Me Section -->
<section id="about" class="py-32 relative">
    <div class="container-custom mx-auto">
        <div class="text-center mb-16 page-transition" data-delay="0.1">
            <h2 class="text-4xl font-bold mb-4">Über <span class="gradient-text-primary">Mich</span></h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Leidenschaftlicher Software-Entwickler mit umfangreicher Erfahrung in der Konzeption und Implementierung moderner Web-Anwendungen.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="relative page-transition" data-delay="0.3">
                <!-- Profile illustration -->
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-xl blur-lg transform rotate-6"></div>
                    <div class="glass-card p-6 rounded-xl relative z-10">
                        <div class="aspect-w-1 aspect-h-1 relative overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 to-purple-600/20"></div>
                            <svg class="w-full h-auto" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
                                <rect width="400" height="400" fill="none" />
                                <!-- Abstract Developer Illustration -->
                                <circle cx="200" cy="150" r="80" fill="#374151" />
                                <circle cx="170" cy="135" r="10" fill="#f8fafc" />
                                <circle cx="230" cy="135" r="10" fill="#f8fafc" />
                                <path d="M170 180 Q200 210 230 180" fill="none" stroke="#f8fafc" stroke-width="5" />

                                <!-- Code elements -->
                                <rect x="100" y="250" width="200" height="30" rx="5" fill="#2563eb" opacity="0.6" />
                                <rect x="120" y="260" width="160" height="10" rx="5" fill="#f8fafc" opacity="0.8" />

                                <rect x="80" y="290" width="240" height="20" rx="5" fill="#8b5cf6" opacity="0.6" />
                                <rect x="100" y="300" width="200" height="5" rx="2" fill="#f8fafc" opacity="0.7" />

                                <rect x="120" y="320" width="160" height="15" rx="5" fill="#10b981" opacity="0.6" />
                                <rect x="140" y="325" width="120" height="5" rx="2" fill="#f8fafc" opacity="0.6" />
                            </svg>
                        </div>

                        <div class="mt-6 grid grid-cols-2 gap-4 text-center">
                            <div class="glass p-4 rounded-lg">
                                <div class="text-3xl font-bold gradient-text-primary mb-1">15+</div>
                                <div class="text-sm text-gray-300">Jahre Erfahrung</div>
                            </div>
                            <div class="glass p-4 rounded-lg">
                                <div class="text-3xl font-bold gradient-text-secondary mb-1">50+</div>
                                <div class="text-sm text-gray-300">Projekte</div>
                            </div>
                            <div class="glass p-4 rounded-lg">
                                <div class="text-3xl font-bold gradient-text-accent mb-1">5+</div>
                                <div class="text-sm text-gray-300">Unternehmen</div>
                            </div>
                            <div class="glass p-4 rounded-lg">
                                <div class="text-3xl font-bold gradient-text-primary mb-1">3</div>
                                <div class="text-sm text-gray-300">Sprachen</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Decorative elements -->
                <div class="absolute -top-10 -left-10 w-40 h-40 bg-blue-500 bg-opacity-10 rounded-full blur-xl"></div>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-purple-500 bg-opacity-10 rounded-full blur-xl"></div>
            </div>

            <div class="space-y-8 page-transition" data-delay="0.5">
                <div class="glass-card p-8 rounded-xl">
                    <h3 class="text-2xl font-bold mb-4 gradient-text-primary">Meine Geschichte</h3>
                    <p class="text-gray-300 mb-4">
                        Seit über 15 Jahren bin ich leidenschaftlich in der Softwareentwicklung tätig. Was als freiberufliche Tätigkeit begann, hat sich zu einer umfassenden Karriere mit Führungspositionen entwickelt.
                    </p>
                    <p class="text-gray-300 mb-4">
                        Meine Expertise liegt in der Entwicklung von robusten Backend-Systemen, APIs und komplexen Datenbank-Architekturen. Ich habe erfolgreich Teams geleitet und innovative Lösungen für anspruchsvolle Herausforderungen entwickelt.
                    </p>
                    <p class="text-gray-300">
                        Heute bin ich als Software-Entwickler bei der ZHAW tätig, wo ich an der Weiterentwicklung der MyZHAW-App und verschiedenen Moodle-Projekten arbeite.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="glass-card p-6 rounded-xl">
                        <h3 class="text-xl font-bold mb-3 gradient-text-secondary">Eigenschaften</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-400 mr-3"></i>
                                <span>Problemlösungsorientiert</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-400 mr-3"></i>
                                <span>Analytisch denkend</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-400 mr-3"></i>
                                <span>Teamfähig & kommunikativ</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-400 mr-3"></i>
                                <span>Qualitätsbewusst</span>
                            </li>
                        </ul>
                    </div>

                    <div class="glass-card p-6 rounded-xl">
                        <h3 class="text-xl font-bold mb-3 gradient-text-accent">Sprachen</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span>Deutsch</span>
                                    <span>Fließend</span>
                                </div>
                                <div class="h-2 bg-gray-700 rounded-full">
                                    <div class="h-full rounded-full bg-gradient-to-r from-blue-500 to-blue-300" style="width: 95%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span>Albanisch</span>
                                    <span>Muttersprache</span>
                                </div>
                                <div class="h-2 bg-gray-700 rounded-full">
                                    <div class="h-full rounded-full bg-gradient-to-r from-purple-500 to-purple-300" style="width: 100%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span>Englisch</span>
                                    <span>Gut</span>
                                </div>
                                <div class="h-2 bg-gray-700 rounded-full">
                                    <div class="h-full rounded-full bg-gradient-to-r from-green-500 to-green-300" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative background elements -->
    <div class="absolute top-1/4 left-0 w-64 h-64 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob"></div>
    <div class="absolute top-1/3 right-0 w-72 h-72 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob animation-delay-2000"></div>
    <div class="absolute bottom-0 left-1/4 w-80 h-80 bg-pink-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob animation-delay-4000"></div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-32 relative">
    <div class="container-custom mx-auto">
        <div class="text-center mb-16 page-transition" data-delay="0.1">
            <h2 class="text-4xl font-bold mb-4">Meine <span class="gradient-text-primary">Fähigkeiten</span></h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Durch kontinuierliche Weiterbildung und Projekterfahrung habe ich mir ein breites Spektrum an technischen Fähigkeiten angeeignet.
            </p>
        </div>

        <div class="mb-20">
            <div class="hexagon-container page-transition" data-delay="0.3">
                <!-- Programming Languages -->
                <div class="hexagon">
                    <i class="fab fa-php text-blue-400"></i>
                    <div class="skill-name">PHP</div>
                </div>
                <div class="hexagon">
                    <i class="fab fa-js text-yellow-400"></i>
                    <div class="skill-name">JavaScript</div>
                </div>
                <div class="hexagon">
                    <i class="fab fa-html5 text-red-400"></i>
                    <div class="skill-name">HTML5</div>
                </div>
                <div class="hexagon">
                    <i class="fab fa-css3-alt text-blue-500"></i>
                    <div class="skill-name">CSS3</div>
                </div>
                <div class="hexagon">
                    <i class="fas fa-database text-green-400"></i>
                    <div class="skill-name">SQL</div>
                </div>
                <div class="hexagon">
                    <i class="fas fa-code text-purple-400"></i>
                    <div class="skill-name">XML</div>
                </div>

                <!-- Frameworks -->
                <div class="hexagon">
                    <i class="fab fa-laravel text-red-500"></i>
                    <div class="skill-name">Laravel</div>
                </div>
                <div class="hexagon">
                    <i class="fab fa-vuejs text-green-500"></i>
                    <div class="skill-name">Vue.js</div>
                </div>
                <div class="hexagon">
                    <i class="fab fa-bootstrap text-purple-500"></i>
                    <div class="skill-name">Bootstrap</div>
                </div>
                <div class="hexagon">
                    <i class="fas fa-cogs text-blue-500"></i>
                    <div class="skill-name">Zend</div>
                </div>
                <div class="hexagon">
                    <i class="fas fa-bolt text-yellow-500"></i>
                    <div class="skill-name">Lumen</div>
                </div>
                <div class="hexagon">
                    <i class="fas fa-layer-group text-blue-400"></i>
                    <div class="skill-name">Laminas</div>
                </div>

                <!-- Tools & Technologies -->
                <div class="hexagon">
                    <i class="fab fa-docker text-blue-500"></i>
                    <div class="skill-name">Docker</div>
                </div>
                <div class="hexagon">
                    <i class="fab fa-git-alt text-orange-500"></i>
                    <div class="skill-name">Git</div>
                </div>
                <div class="hexagon">
                    <i class="fab fa-node-js text-green-500"></i>
                    <div class="skill-name">Node.js</div>
                </div>
                <div class="hexagon">
                    <i class="fab fa-jira text-blue-500"></i>
                    <div class="skill-name">JIRA</div>
                </div>
                <div class="hexagon">
                    <i class="fas fa-server text-purple-400"></i>
                    <div class="skill-name">APIs</div>
                </div>
                <div class="hexagon">
                    <i class="fas fa-cubes text-orange-400"></i>
                    <div class="skill-name">Composer</div>
                </div>
                <div class="hexagon">
                    <i class="fab fa-ubuntu text-orange-500"></i>
                    <div class="skill-name">Ubuntu</div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 page-transition" data-delay="0.5">
            <div class="glass-card p-8 rounded-xl">
                <div class="w-16 h-16 rounded-lg bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center mb-6">
                    <i class="fas fa-code text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Backend-Entwicklung</h3>
                <p class="text-gray-300 mb-6">
                    Entwicklung leistungsfähiger und skalierbarer Backend-Systeme mit PHP, Laravel und Zend Framework. Implementierung von komplexen Geschäftslogiken und Datenmodellen.
                </p>
                <div class="flex flex-wrap">
                    <span class="px-3 py-1 rounded-full bg-blue-500 bg-opacity-20 text-blue-300 text-sm mr-2 mb-2">PHP</span>
                    <span class="px-3 py-1 rounded-full bg-blue-500 bg-opacity-20 text-blue-300 text-sm mr-2 mb-2">Laravel</span>
                    <span class="px-3 py-1 rounded-full bg-blue-500 bg-opacity-20 text-blue-300 text-sm mr-2 mb-2">Zend</span>
                    <span class="px-3 py-1 rounded-full bg-blue-500 bg-opacity-20 text-blue-300 text-sm mr-2 mb-2">OOP</span>
                </div>
            </div>

            <div class="glass-card p-8 rounded-xl">
                <div class="w-16 h-16 rounded-lg bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center mb-6">
                    <i class="fas fa-database text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Datenbank-Design</h3>
                <p class="text-gray-300 mb-6">
                    Konzeption und Optimierung von Datenbankstrukturen für maximale Effizienz und Skalierbarkeit. Erfahrung mit MySQL, PostgreSQL und MSSQL.
                </p>
                <div class="flex flex-wrap">
                    <span class="px-3 py-1 rounded-full bg-green-500 bg-opacity-20 text-green-300 text-sm mr-2 mb-2">MySQL</span>
                    <span class="px-3 py-1 rounded-full bg-green-500 bg-opacity-20 text-green-300 text-sm mr-2 mb-2">PGSQL</span>
                    <span class="px-3 py-1 rounded-full bg-green-500 bg-opacity-20 text-green-300 text-sm mr-2 mb-2">MSSQL</span>
                    <span class="px-3 py-1 rounded-full bg-green-500 bg-opacity-20 text-green-300 text-sm mr-2 mb-2">Eloquent</span>
                </div>
            </div>

            <div class="glass-card p-8 rounded-xl">
                <div class="w-16 h-16 rounded-lg bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center mb-6">
                    <i class="fas fa-server text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">API-Entwicklung</h3>
                <p class="text-gray-300 mb-6">
                    Erstellung von RESTful APIs und Microservices für die nahtlose Integration verschiedener Systeme. Implementierung von sicheren und effizienten Schnittstellen.
                </p>
                <div class="flex flex-wrap">
                    <span class="px-3 py-1 rounded-full bg-purple-500 bg-opacity-20 text-purple-300 text-sm mr-2 mb-2">REST</span>
                    <span class="px-3 py-1 rounded-full bg-purple-500 bg-opacity-20 text-purple-300 text-sm mr-2 mb-2">Lumen</span>
                    <span class="px-3 py-1 rounded-full bg-purple-500 bg-opacity-20 text-purple-300 text-sm mr-2 mb-2">JWT</span>
                    <span class="px-3 py-1 rounded-full bg-purple-500 bg-opacity-20 text-purple-300 text-sm mr-2 mb-2">OAuth</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative background elements -->
    <div class="absolute top-1/3 right-0 w-72 h-72 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob"></div>
    <div class="absolute bottom-1/3 left-0 w-80 h-80 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob animation-delay-2000"></div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-32 relative">
    <div class="container-custom mx-auto">
        <div class="text-center mb-16 page-transition" data-delay="0.1">
            <h2 class="text-4xl font-bold mb-4">Berufliche <span class="gradient-text-primary">Erfahrung</span></h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Eine Reise durch meine Karriere als Software-Entwickler, von den Anfängen bis zur Gegenwart.
            </p>
        </div>

        <div class="timeline relative pb-12 page-transition" data-delay="0.3">
            <!-- Experience 1 -->
            <div class="timeline-item">
                <div class="glass-card p-6 rounded-xl">
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 rounded-full bg-blue-500 bg-opacity-20 text-blue-300 text-sm mb-3">Okt 2022 - Jetzt</span>
                        <h3 class="text-xl font-bold mb-1">Software-Entwickler</h3>
                        <h4 class="text-lg text-blue-400">ZHAW - Züricher Hochschule für angewandte Wissenschaft</h4>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Verantwortlich für die Pflege und Weiterentwicklung des systemrelevanten Moodle und der dazugehörigen Plugins. Entwicklung und Konzeption der Datenbankstruktur und des Backends für die MyZHAW-App, inklusive API und Import-Schnittstelle.
                    </p>
                    <div class="flex flex-wrap">
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">Moodle</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">PHP</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">PGSQL</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">Laravel</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">DDEV</span>
                    </div>
                </div>
            </div>

            <!-- Experience 2 -->
            <div class="timeline-item">
                <div class="glass-card p-6 rounded-xl">
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 rounded-full bg-green-500 bg-opacity-20 text-green-300 text-sm mb-3">Jan 2021 - Sep 2022</span>
                        <h3 class="text-xl font-bold mb-1">Lead Software-Entwickler</h3>
                        <h4 class="text-lg text-green-400">Alterspree Verlag GmbH</h4>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Als Lead Software-Entwickler übernahm ich Verantwortung als Teamleiter und war entscheidend an der Produktanalyse und -entwicklung beteiligt. Fungierte als Scrum-Master (Jira) und managte eingehende Requests.
                    </p>
                    <div class="flex flex-wrap">
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">Laravel</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">Vue.js</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">Nova</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">Laravel-Echo</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">MySQL</span>
                    </div>
                </div>
            </div>

            <!-- Experience 3 -->
            <div class="timeline-item">
                <div class="glass-card p-6 rounded-xl">
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 rounded-full bg-purple-500 bg-opacity-20 text-purple-300 text-sm mb-3">März 2019 - Dez 2020</span>
                        <h3 class="text-xl font-bold mb-1">Software-Entwickler</h3>
                        <h4 class="text-lg text-purple-400">CodeFrog IT GmbH</h4>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Leitete ein Entwicklungsteam und unterstützte die Geschäftsführung bei Software-Präsentationen. Verantwortlich für die Implementierung und Konzipierung eines Webportals, die Entwicklung einer internen API sowie die Konzipierung der Systeminfrastruktur.
                    </p>
                    <div class="flex flex-wrap">
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">PHP 7</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">Laravel</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">Vagrant</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">MySQL</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">GitLab</span>
                    </div>
                </div>
            </div>

            <!-- Experience 4 -->
            <div class="timeline-item">
                <div class="glass-card p-6 rounded-xl">
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 rounded-full bg-blue-500 bg-opacity-20 text-blue-300 text-sm mb-3">Jan 2017 - Aug 2018</span>
                        <h3 class="text-xl font-bold mb-1">Software-Entwickler</h3>
                        <h4 class="text-lg text-blue-400">IaS Ideas & Solution GmbH</h4>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Entwicklung diverser BackOffice-/Administrationsoberflächen und eines interaktiven Dashboards für das Operating von US-amerikanischen Pferderennen. Erstellung eines Tools für die Planung von Sendeplätzen in ZF3.
                    </p>
                    <div class="flex flex-wrap">
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">PHP 5/7</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">Zend Framework 3</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">PostgreSQL</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">Phalcon</span>
                    </div>
                </div>
            </div>

            <!-- Experience 5 -->
            <div class="timeline-item">
                <div class="glass-card p-6 rounded-xl">
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 rounded-full bg-green-500 bg-opacity-20 text-green-300 text-sm mb-3">Mai 2015 - Dez 2016</span>
                        <h3 class="text-xl font-bold mb-1">Software-Entwickler</h3>
                        <h4 class="text-lg text-green-400">L und M Büroinformationssysteme</h4>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Schnittstellenentwicklung für Kundensysteme zu ERP, Buchungsprogrammen, Datenbanken, E-Mail, XML und Excel. Auswertungsunterstützung bei der Erstellung von Analysen und Kundenbetreuung.
                    </p>
                    <div class="flex flex-wrap">
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">PHP</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">XML</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">MSSQL</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">JobRouter</span>
                    </div>
                </div>
            </div>

            <!-- Experience 6 -->
            <div class="timeline-item">
                <div class="glass-card p-6 rounded-xl">
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 rounded-full bg-purple-500 bg-opacity-20 text-purple-300 text-sm mb-3">2008 - 2015</span>
                        <h3 class="text-xl font-bold mb-1">Freelance Software-Entwickler</h3>
                        <h4 class="text-lg text-purple-400">Selbstständig</h4>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Entwicklung verschiedener Webportale, E-Commerce-Lösungen und interner Anwendungen für diverse Kunden. Implementierung von Zahlungsschnittstellen, Trackingsystemen und Administrationstools.
                    </p>
                    <div class="flex flex-wrap">
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">PHP</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">jQuery</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">MySQL</span>
                        <span class="px-3 py-1 rounded-full bg-gray-700 text-gray-300 text-sm mr-2 mb-2">APIs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative background elements -->
    <div class="absolute top-1/4 right-0 w-64 h-64 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob animation-delay-4000"></div>
    <div class="absolute bottom-1/4 left-0 w-80 h-80 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob animation-delay-2000"></div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-32 relative">
    <div class="container-custom mx-auto">
        <div class="text-center mb-16 page-transition" data-delay="0.1">
            <h2 class="text-4xl font-bold mb-4">Meine <span class="gradient-text-primary">Projekte</span></h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Eine Auswahl meiner interessantesten Projekte und Entwicklungen aus verschiedenen Bereichen.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 page-transition" data-delay="0.3">
            <!-- Project 1 -->
            <div class="project-card glass-card rounded-xl overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800 opacity-80 flex items-center justify-center">
                        <i class="fas fa-mobile-alt text-6xl"></i>
                    </div>
                    <div class="project-image absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800 opacity-50"></div>
                </div>
                <div class="project-info p-6">
                    <h3 class="project-title text-xl font-bold">MyZHAW-App Backend & API</h3>
                    <p class="text-gray-300 mb-2 line-clamp-2">
                        Entwicklung des Backends und API-Gateways für die offizielle App der ZHAW.
                    </p>
                    <div class="project-tags">
                        <span class="project-tag">Laravel</span>
                        <span class="project-tag">PHP</span>
                        <span class="project-tag">PGSQL</span>
                        <span class="project-tag">RESTful API</span>
                        <span class="project-tag">DDEV</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card glass-card rounded-xl overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-purple-800 opacity-80 flex items-center justify-center">
                        <i class="fas fa-shield-alt text-6xl"></i>
                    </div>
                    <div class="project-image absolute inset-0 bg-gradient-to-r from-purple-600 to-purple-800 opacity-50"></div>
                </div>
                <div class="project-info p-6">
                    <h3 class="project-title text-xl font-bold">DSGVO-Compliance Plattform</h3>
                    <p class="text-gray-300 mb-2 line-clamp-2">
                        Entwicklung einer Plattform zur Datenpflege bezüglich der DSGVO-Gesetzgebung.
                    </p>
                    <div class="project-tags">
                        <span class="project-tag">PHP 7</span>
                        <span class="project-tag">Zend Framework</span>
                        <span class="project-tag">Doctrine</span>
                        <span class="project-tag">MySQL</span>
                        <span class="project-tag">jQuery</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card glass-card rounded-xl overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-600 to-green-800 opacity-80 flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-6xl"></i>
                    </div>
                    <div class="project-image absolute inset-0 bg-gradient-to-r from-green-600 to-green-800 opacity-50"></div>
                </div>
                <div class="project-info p-6">
                    <h3 class="project-title text-xl font-bold">E-Commerce Versandplattform</h3>
                    <p class="text-gray-300 mb-2 line-clamp-2">
                        Konzeption einer Online-Plattform für Versandhandel mit Trackingsystem.
                    </p>
                    <div class="project-tags">
                        <span class="project-tag">Laravel</span>
                        <span class="project-tag">MySQL</span>
                        <span class="project-tag">Bootstrap</span>
                        <span class="project-tag">jQuery</span>
                        <span class="project-tag">PayPal API</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card glass-card rounded-xl overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-600 to-yellow-800 opacity-80 flex items-center justify-center">
                        <i class="fas fa-calendar-alt text-6xl"></i>
                    </div>
                    <div class="project-image absolute inset-0 bg-gradient-to-r from-yellow-600 to-yellow-800 opacity-50"></div>
                </div>
                <div class="project-info p-6">
                    <h3 class="project-title text-xl font-bold">Ressourcen-Planer</h3>
                    <p class="text-gray-300 mb-2 line-clamp-2">
                        Entwicklung eines Raum- und Ressourcen-Planers für die Verwaltung von Arbeitsplätzen.
                    </p>
                    <div class="project-tags">
                        <span class="project-tag">PHP 7</span>
                        <span class="project-tag">Laravel</span>
                        <span class="project-tag">Vue.js</span>
                        <span class="project-tag">MySQL</span>
                        <span class="project-tag">Bootstrap</span>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="project-card glass-card rounded-xl overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-red-800 opacity-80 flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-6xl"></i>
                    </div>
                    <div class="project-image absolute inset-0 bg-gradient-to-r from-red-600 to-red-800 opacity-50"></div>
                </div>
                <div class="project-info p-6">
                    <h3 class="project-title text-xl font-bold">Prüfungs-Software</h3>
                    <p class="text-gray-300 mb-2 line-clamp-2">
                        Entwicklung einer internen Prüfungs-Software mit automatisierter Bewertungsfunktion.
                    </p>
                    <div class="project-tags">
                        <span class="project-tag">PHP</span>
                        <span class="project-tag">jQuery</span>
                        <span class="project-tag">MySQL</span>
                        <span class="project-tag">Laravel</span>
                        <span class="project-tag">Bootstrap</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="project-card glass-card rounded-xl overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-indigo-800 opacity-80 flex items-center justify-center">
                        <i class="fas fa-plug text-6xl"></i>
                    </div>
                    <div class="project-image absolute inset-0 bg-gradient-to-r from-indigo-600 to-indigo-800 opacity-50"></div>
                </div>
                <div class="project-info p-6">
                    <h3 class="project-title text-xl font-bold">Moodle-Plugin-Entwicklung</h3>
                    <p class="text-gray-300 mb-2 line-clamp-2">
                        Entwicklung von systemrelevanten Plugins für die Moodle-Lernplattform der ZHAW.
                    </p>
                    <div class="project-tags">
                        <span class="project-tag">PHP</span>
                        <span class="project-tag">Moodle</span>
                        <span class="project-tag">PGSQL</span>
                        <span class="project-tag">JavaScript</span>
                        <span class="project-tag">Docker</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative background elements -->
    <div class="absolute top-1/3 left-0 w-72 h-72 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob animation-delay-3000"></div>
    <div class="absolute bottom-1/4 right-0 w-64 h-64 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob"></div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-32 relative">
    <div class="container-custom mx-auto">
        <div class="text-center mb-16 page-transition" data-delay="0.1">
            <h2 class="text-4xl font-bold mb-4">Kontakt <span class="gradient-text-primary">aufnehmen</span></h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Haben Sie ein spannendes Projekt oder eine berufliche Möglichkeit? Ich freue mich auf Ihre Nachricht.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 page-transition" data-delay="0.3">
            <div>
                <div class="glass-card p-8 rounded-xl">
                    <h3 class="text-2xl font-bold mb-6 gradient-text-primary">Schreiben Sie mir</h3>
                    <form id="contact-form" class="space-y-6">
                        <div>
                            <label for="name" class="block text-gray-300 font-medium mb-2">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 form-input text-white" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-300 font-medium mb-2">E-Mail</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 form-input text-white" required>
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-300 font-medium mb-2">Betreff</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 form-input text-white" required>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-300 font-medium mb-2">Nachricht</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 form-input text-white" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn-custom w-full px-6 py-4 rounded-xl text-white font-medium text-lg">
                                <span>Nachricht senden</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div>
                <div class="glass-card p-8 rounded-xl h-full">
                    <h3 class="text-2xl font-bold mb-6 gradient-text-primary">Über den Kontakt</h3>
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="h-12 w-12 rounded-lg bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-info-circle text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium gradient-text-secondary mb-2">Projektanfragen</h4>
                                <p class="text-gray-300">
                                    Nutzen Sie das Kontaktformular für Anfragen zu Projekten oder Zusammenarbeit. Ich antworte in der Regel innerhalb von 24 Stunden.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="h-12 w-12 rounded-lg bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-file-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium gradient-text-accent mb-2">Lebenslauf</h4>
                                <p class="text-gray-300">
                                    Bei Interesse an einer Zusammenarbeit kann ich Ihnen gerne eine detaillierte Version meines Portfolios zusenden.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="h-12 w-12 rounded-lg bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-calendar-check text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium gradient-text-secondary mb-2">Verfügbarkeit</h4>
                                <p class="text-gray-300">
                                    Aktuell bin ich für neue Projekte und berufliche Herausforderungen offen. Teilen Sie mir Ihre Vorstellungen mit.
                                </p>
                            </div>
                        </div>

                        <div class="pt-8">
                            <h4 class="text-lg font-medium mb-4 gradient-text-primary">Folgen Sie mir</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="h-12 w-12 rounded-full glass flex items-center justify-center text-white hover:text-blue-400 transition-all duration-300">
                                    <i class="fab fa-github text-xl"></i>
                                </a>
                                <a href="#" class="h-12 w-12 rounded-full glass flex items-center justify-center text-white hover:text-blue-400 transition-all duration-300">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="#" class="h-12 w-12 rounded-full glass flex items-center justify-center text-white hover:text-blue-400 transition-all duration-300">
                                    <i class="fab fa-twitter text-xl"></i>
                                </a>
                                <a href="#" class="h-12 w-12 rounded-full glass flex items-center justify-center text-white hover:text-blue-400 transition-all duration-300">
                                    <i class="fab fa-stack-overflow text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative background elements -->
    <div class="absolute top-1/4 left-1/4 w-80 h-80 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob animation-delay-1000"></div>
    <div class="absolute bottom-1/3 right-1/4 w-72 h-72 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob animation-delay-3000"></div>
</section>

<!-- Footer -->
<footer class="py-16 relative">
    <div class="container-custom mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center border-t border-gray-800 pt-8">
            <div class="mb-6 md:mb-0">
                <a href="#home" class="text-2xl font-bold flex items-center group">
                    <div class="relative w-8 h-8 mr-3 rounded-lg overflow-hidden glass flex items-center justify-center">
                        <span class="text-sm font-bold">G</span>
                    </div>
                    <span class="gradient-text-primary">Genc Gruda</span>
                </a>
                <p class="text-gray-400 mt-2">Software Developer</p>
            </div>

            <div class="mb-6 md:mb-0">
                <p class="text-gray-400">&copy; 2025 Genc Gruda. Alle Rechte vorbehalten.</p>
            </div>

            <div class="flex space-x-6">
                <a href="#home" class="footer-link text-gray-400">Home</a>
                <a href="#about" class="footer-link text-gray-400">Über mich</a>
                <a href="#skills" class="footer-link text-gray-400">Skills</a>
                <a href="#experience" class="footer-link text-gray-400">Erfahrung</a>
                <a href="#projects" class="footer-link text-gray-400">Projekte</a>
                <a href="#contact" class="footer-link text-gray-400">Kontakt</a>
            </div>
        </div>

        <div class="text-center text-gray-500 text-sm mt-12">
            <p>Designed & Developed with <i class="fas fa-heart text-red-500"></i> in 2025</p>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Particles.js
        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#2563eb"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#2563eb",
                    "opacity": 0.2,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 2,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": {
                            "opacity": 0.6
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });

        // Typed.js Effect
        const typed = new Typed('#typed-text', {
            strings: [
                'Software Developer',
                'Backend Specialist',
                'API Architect',
                'PHP/Laravel Expert',
                'Database Designer'
            ],
            typeSpeed: 80,
            backSpeed: 40,
            backDelay: 1500,
            startDelay: 1000,
            loop: true
        });

        // Navbar scroll effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerTop = document.getElementById('hamburger-top');
        const hamburgerMiddle = document.getElementById('hamburger-middle');
        const hamburgerBottom = document.getElementById('hamburger-bottom');

        let menuOpen = false;

        mobileMenuButton.addEventListener('click', () => {
            menuOpen = !menuOpen;

            if (menuOpen) {
                mobileMenu.style.opacity = '1';
                mobileMenu.style.pointerEvents = 'auto';

                // Transform hamburger into X
                hamburgerTop.style.transform = 'rotate(45deg) translate(5px, 5px)';
                hamburgerMiddle.style.opacity = '0';
                hamburgerBottom.style.transform = 'rotate(-45deg) translate(5px, -5px)';
            } else {
                mobileMenu.style.opacity = '0';
                mobileMenu.style.pointerEvents = 'none';

                // Revert to hamburger
                hamburgerTop.style.transform = 'none';
                hamburgerMiddle.style.opacity = '1';
                hamburgerBottom.style.transform = 'none';
            }
        });

        // Close mobile menu on link click
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.style.opacity = '0';
                mobileMenu.style.pointerEvents = 'none';

                // Revert to hamburger
                hamburgerTop.style.transform = 'none';
                hamburgerMiddle.style.opacity = '1';
                hamburgerBottom.style.transform = 'none';

                menuOpen = false;
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });

                // Update active link
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                this.classList.add('active');
            });
        });

        // Update active nav link on scroll
        window.addEventListener('scroll', () => {
            let current = '';
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;

                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach((link) => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Initialize GSAP and ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Transition animations for page sections
        const pageTransitions = document.querySelectorAll('.page-transition');
        pageTransitions.forEach((element) => {
            const delay = element.dataset.delay || 0;

            gsap.fromTo(
                element,
                {
                    y: 50,
                    opacity: 0
                },
                {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    ease: 'power3.out',
                    delay: delay,
                    scrollTrigger: {
                        trigger: element,
                        start: 'top 80%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        // Custom cursor effect
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorOutline = document.querySelector('.cursor-outline');

        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;

            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            // Add delay to cursor outline for smooth effect
            setTimeout(() => {
                cursorOutline.style.left = `${posX}px`;
                cursorOutline.style.top = `${posY}px`;
            }, 80);
        });

        // Add hover effect for interactive elements
        const interactiveElements = document.querySelectorAll('a, button, input, textarea, .project-card, .hexagon, .glass-card');

        interactiveElements.forEach((element) => {
            element.addEventListener('mouseenter', () => {
                cursorDot.classList.add('cursor-hover');
                cursorOutline.style.width = '60px';
                cursorOutline.style.height = '60px';
                cursorOutline.style.borderColor = 'var(--accent)';
            });

            element.addEventListener('mouseleave', () => {
                cursorDot.classList.remove('cursor-hover');
                cursorOutline.style.width = '40px';
                cursorOutline.style.height = '40px';
                cursorOutline.style.borderColor = 'var(--primary)';
            });
        });

        // Contact form submission
        const contactForm = document.getElementById('contact-form');

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const formData = new FormData(contactForm);
            const formDataObject = {};

            formData.forEach((value, key) => {
                formDataObject[key] = value;
            });

            // Simulate form submission
            alert('Vielen Dank für Ihre Nachricht! Ich werde mich baldmöglichst bei Ihnen melden.');

            contactForm.reset();
        });

        // 3D Tilt effect for cards (using vanilla JS)
        const cards = document.querySelectorAll('.card-3d');

        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = (y - centerY) / 15;
                const rotateY = (centerX - x) / 15;

                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
            });
        });
    });
</script>
</body>
</html>
