<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TechLedger - Solutions in Software Development, Audit Services & Tax Returns</title>
        <meta name="description" content="TechLedger provides comprehensive solutions in Software Development, Audit Services, and Tax Returns. Transform your business with our expert services.">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('images/LOGO.ico') }}">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }

            @keyframes slideInRight {
                from {
                    opacity: 0;
                    transform: translateX(50px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }

            @keyframes pulse-glow {
                0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.5); }
                50% { box-shadow: 0 0 40px rgba(59, 130, 246, 0.8); }
            }

            .animate-fade-in-up {
                animation: fadeInUp 0.6s ease-out forwards;
            }

            .animate-fade-in {
                animation: fadeIn 0.8s ease-out forwards;
            }

            .animate-slide-in-right {
                animation: slideInRight 0.6s ease-out forwards;
            }

            .animate-float {
                animation: float 3s ease-in-out infinite;
            }

            .animate-pulse-glow {
                animation: pulse-glow 2s ease-in-out infinite;
            }

            .card-hover {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .card-hover:hover {
                transform: translateY(-8px) scale(1.02);
            }

            .gradient-text {
                background: linear-gradient(135deg, #3B82F6 0%, #06B6D4 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .glass-effect {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            /* Loading animation */
            .loader {
                border: 3px solid #f3f4f6;
                border-top: 3px solid #3B82F6;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            /* Reveal on scroll */
            .reveal {
                opacity: 0;
                transform: translateY(30px);
                transition: all 0.6s ease-out;
            }

            .reveal.active {
                opacity: 1;
                transform: translateY(0);
            }

            /* Smooth gradient backgrounds */
            .gradient-bg-1 {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }

            .gradient-bg-2 {
                background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            }

            .gradient-bg-3 {
                background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            }

            /* Particle effect background */
            .particle-bg {
                position: relative;
                overflow: hidden;
            }

            .particle-bg::before {
                content: '';
                position: absolute;
                width: 200%;
                height: 200%;
                top: -50%;
                left: -50%;
                background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 1px, transparent 1px);
                background-size: 50px 50px;
                animation: particle-move 20s linear infinite;
            }

            @keyframes particle-move {
                0% { transform: translate(0, 0); }
                100% { transform: translate(50px, 50px); }
            }
        </style>
    </head>
    <body class="bg-white text-gray-900 antialiased overflow-x-hidden">
        <!-- Navigation -->
        <nav class="fixed w-full bg-white/95 backdrop-blur-md z-50 border-b border-gray-100 transition-all duration-300" id="navbar">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-24 md:h-32">
                    <!-- Logo -->
                    <div class="flex-shrink-0 transform hover:scale-105 transition duration-300">
                        <a href="/" class="flex items-center">
                            <img src="{{ asset('images/LOGO.png') }}" alt="TechLedger" class="h-20 md:h-24 lg:h-28 w-auto">
                        </a>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#home" class="nav-link text-gray-700 hover:text-blue-600 transition duration-300 font-medium relative group">
                            Home
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <a href="#services" class="nav-link text-gray-700 hover:text-blue-600 transition duration-300 font-medium relative group">
                            Services
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <a href="#about" class="nav-link text-gray-700 hover:text-blue-600 transition duration-300 font-medium relative group">
                            About
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <a href="#contact" class="nav-link text-gray-700 hover:text-blue-600 transition duration-300 font-medium relative group">
                            Contact
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white px-6 py-2.5 rounded-lg hover:from-blue-700 hover:to-cyan-600 transition duration-300 font-medium shadow-lg hover:shadow-xl transform hover:scale-105">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 transition duration-300 font-medium">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white px-6 py-2.5 rounded-lg hover:from-blue-700 hover:to-cyan-600 transition duration-300 font-medium shadow-lg hover:shadow-xl transform hover:scale-105">
                                        Get Started
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button type="button" id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none transition duration-300 transform hover:scale-110">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="menu-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <svg class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="close-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 bg-white">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#home" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md font-medium transition duration-300">Home</a>
                    <a href="#services" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md font-medium transition duration-300">Services</a>
                    <a href="#about" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md font-medium transition duration-300">About</a>
                    <a href="#contact" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md font-medium transition duration-300">Contact</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="block px-3 py-2 text-blue-600 hover:bg-blue-50 rounded-md font-medium">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md font-medium">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="block mx-3 my-2 px-3 py-2 bg-gradient-to-r from-blue-600 to-cyan-500 text-white hover:from-blue-700 hover:to-cyan-600 rounded-md font-medium text-center">Get Started</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="relative pt-36 md:pt-44 lg:pt-48 pb-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-blue-50 via-white to-cyan-50 particle-bg overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8 animate-fade-in-up">
                        <div class="inline-block">
                            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold">🚀 Welcome to TechLedger</span>
                        </div>
                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-gray-900 leading-tight">
                            Transform Your Business with <span class="gradient-text">Innovation</span>
                        </h1>
                        <p class="text-xl md:text-2xl text-gray-600 leading-relaxed">
                            Comprehensive solutions in Software Development, Audit Services, and Tax Returns.
                            We help businesses streamline operations and achieve their goals.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#contact" class="group relative bg-gradient-to-r from-blue-600 to-cyan-500 text-white px-8 py-4 rounded-xl hover:from-blue-700 hover:to-cyan-600 transition duration-300 font-semibold text-center shadow-xl hover:shadow-2xl transform hover:scale-105 overflow-hidden">
                                <span class="relative z-10">Get Started Today</span>
                                <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition duration-300"></div>
                            </a>
                            <a href="#services" class="bg-white text-blue-600 px-8 py-4 rounded-xl border-2 border-blue-600 hover:bg-blue-50 transition duration-300 font-semibold text-center shadow-lg hover:shadow-xl transform hover:scale-105">
                                Explore Services
                            </a>
                        </div>
                        <!-- Social Links -->
                        <div class="flex items-center space-x-4 pt-4">
                            <span class="text-gray-600 font-medium">Follow us:</span>
                            <a href="https://www.facebook.com/otienopetert" target="_blank" class="w-10 h-10 bg-blue-100 hover:bg-blue-600 text-blue-600 hover:text-white rounded-full flex items-center justify-center transition duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="https://x.com/otienopetert" target="_blank" class="w-10 h-10 bg-sky-100 hover:bg-sky-500 text-sky-600 hover:text-white rounded-full flex items-center justify-center transition duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            <a href="https://www.linkedin.com/in/peter-otieno-599699209/" target="_blank" class="w-10 h-10 bg-blue-100 hover:bg-blue-700 text-blue-700 hover:text-white rounded-full flex items-center justify-center transition duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                            <a href="https://www.instagram.com/otienopetert/" target="_blank" class="w-10 h-10 bg-pink-100 hover:bg-gradient-to-r hover:from-purple-600 hover:to-pink-600 text-pink-600 hover:text-white rounded-full flex items-center justify-center transition duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href="https://github.com/otienopetert" target="_blank" class="w-10 h-10 bg-gray-100 hover:bg-gray-900 text-gray-900 hover:text-white rounded-full flex items-center justify-center transition duration-300 transform hover:scale-110">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:block animate-slide-in-right">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full blur-3xl opacity-30 animate-pulse-glow"></div>
                            <img src="{{ asset('images/LOGO.png') }}" alt="TechLedger Solutions" class="relative w-full max-w-lg mx-auto drop-shadow-2xl animate-float">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <a href="#services" class="text-gray-400 hover:text-blue-600 transition duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </a>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 reveal">
                    <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold inline-block mb-4">Our Services</span>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-4">What We <span class="gradient-text">Offer</span></h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        End-to-end solutions tailored to your business needs
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Software Development -->
                    <div class="reveal card-hover group relative bg-gradient-to-br from-blue-50 to-white p-8 rounded-2xl border-2 border-blue-100 hover:border-blue-300 shadow-lg hover:shadow-2xl overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-200 rounded-full filter blur-3xl opacity-20 group-hover:opacity-40 transition duration-300"></div>
                        <div class="relative z-10">
                            <div class="bg-gradient-to-br from-blue-600 to-blue-700 w-16 h-16 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition duration-300 shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition duration-300">Software Development</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Custom software solutions built with cutting-edge technologies. From web applications to mobile apps, we deliver robust and scalable solutions.
                            </p>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Web & Mobile Applications</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Enterprise Solutions</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Cloud Integration</span>
                                </li>
                            </ul>
                            <a href="#contact" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition duration-300">
                                Learn More
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Audit Services -->
                    <div class="reveal card-hover group relative bg-gradient-to-br from-purple-50 to-white p-8 rounded-2xl border-2 border-purple-100 hover:border-purple-300 shadow-lg hover:shadow-2xl overflow-hidden" style="animation-delay: 0.2s">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-purple-200 rounded-full filter blur-3xl opacity-20 group-hover:opacity-40 transition duration-300"></div>
                        <div class="relative z-10">
                            <div class="bg-gradient-to-br from-purple-600 to-purple-700 w-16 h-16 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition duration-300 shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-purple-600 transition duration-300">Audit Services</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Comprehensive audit services to ensure compliance, accuracy, and transparency in your financial operations and business processes.
                            </p>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-purple-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Financial Audits</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-purple-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Compliance Reviews</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-purple-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Risk Assessment</span>
                                </li>
                            </ul>
                            <a href="#contact" class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-700 transition duration-300">
                                Learn More
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Tax Returns -->
                    <div class="reveal card-hover group relative bg-gradient-to-br from-green-50 to-white p-8 rounded-2xl border-2 border-green-100 hover:border-green-300 shadow-lg hover:shadow-2xl overflow-hidden" style="animation-delay: 0.4s">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-green-200 rounded-full filter blur-3xl opacity-20 group-hover:opacity-40 transition duration-300"></div>
                        <div class="relative z-10">
                            <div class="bg-gradient-to-br from-green-600 to-green-700 w-16 h-16 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition duration-300 shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-600 transition duration-300">Tax Returns</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Expert tax return preparation and filing services to maximize deductions and ensure compliance with tax regulations.
                            </p>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Individual Tax Returns</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Corporate Tax Filing</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Tax Planning</span>
                                </li>
                            </ul>
                            <a href="#contact" class="inline-flex items-center text-green-600 font-semibold hover:text-green-700 transition duration-300">
                                Learn More
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-blue-50">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="reveal">
                        <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold inline-block mb-4">About Us</span>
                        <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-6">Why Choose <span class="gradient-text">TechLedger</span>?</h2>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            TechLedger is a forward-thinking company that bridges the gap between technology and finance.
                            We combine technical expertise with financial acumen to deliver comprehensive solutions.
                        </p>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                            Our team of experts brings years of experience in software development, financial auditing,
                            and tax consulting to help businesses thrive in today's competitive landscape.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 card-hover">
                                <div class="text-5xl font-extrabold gradient-text mb-2">500+</div>
                                <div class="text-gray-600 font-medium">Projects Completed</div>
                            </div>
                            <div class="text-center p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 card-hover">
                                <div class="text-5xl font-extrabold gradient-text mb-2">250+</div>
                                <div class="text-gray-600 font-medium">Happy Clients</div>
                            </div>
                            <div class="text-center p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 card-hover">
                                <div class="text-5xl font-extrabold gradient-text mb-2">15+</div>
                                <div class="text-gray-600 font-medium">Years Experience</div>
                            </div>
                            <div class="text-center p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 card-hover">
                                <div class="text-5xl font-extrabold gradient-text mb-2">24/7</div>
                                <div class="text-gray-600 font-medium">Support Available</div>
                            </div>
                        </div>
                    </div>
                    <div class="reveal bg-gradient-to-br from-blue-600 via-blue-700 to-cyan-600 p-12 rounded-3xl text-white shadow-2xl relative overflow-hidden" style="animation-delay: 0.2s">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white rounded-full filter blur-3xl opacity-10"></div>
                        <div class="absolute bottom-0 left-0 w-48 h-48 bg-cyan-400 rounded-full filter blur-3xl opacity-10"></div>
                        <div class="relative z-10">
                            <h3 class="text-3xl font-extrabold mb-8">Our Advantages</h3>
                            <ul class="space-y-5">
                                <li class="flex items-start group">
                                    <div class="bg-white/20 backdrop-blur-sm p-2 rounded-lg mr-4 group-hover:bg-white/30 transition duration-300">
                                        <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-lg leading-relaxed">Expert team with proven track record</span>
                                </li>
                                <li class="flex items-start group">
                                    <div class="bg-white/20 backdrop-blur-sm p-2 rounded-lg mr-4 group-hover:bg-white/30 transition duration-300">
                                        <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-lg leading-relaxed">Tailored solutions for your business</span>
                                </li>
                                <li class="flex items-start group">
                                    <div class="bg-white/20 backdrop-blur-sm p-2 rounded-lg mr-4 group-hover:bg-white/30 transition duration-300">
                                        <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-lg leading-relaxed">Cutting-edge technology implementation</span>
                                </li>
                                <li class="flex items-start group">
                                    <div class="bg-white/20 backdrop-blur-sm p-2 rounded-lg mr-4 group-hover:bg-white/30 transition duration-300">
                                        <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-lg leading-relaxed">Transparent pricing and communication</span>
                                </li>
                                <li class="flex items-start group">
                                    <div class="bg-white/20 backdrop-blur-sm p-2 rounded-lg mr-4 group-hover:bg-white/30 transition duration-300">
                                        <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-lg leading-relaxed">Dedicated support team</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16 reveal">
                    <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold inline-block mb-4">Get In Touch</span>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-4">Let's <span class="gradient-text">Connect</span></h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Ready to transform your business? Contact us today for a free consultation.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="reveal bg-gradient-to-br from-gray-50 to-blue-50 p-8 md:p-10 rounded-3xl shadow-xl">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Send us a Message</h3>
                        <form class="space-y-6" id="contact-form">
                            <div class="group">
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition duration-300 outline-none" placeholder="John Doe" required>
                            </div>
                            <div class="group">
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition duration-300 outline-none" placeholder="john@example.com" required>
                            </div>
                            <div class="group">
                                <label for="service" class="block text-sm font-semibold text-gray-700 mb-2">Service Interest *</label>
                                <select id="service" name="service" class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition duration-300 outline-none" required>
                                    <option value="">Select a service</option>
                                    <option value="software-development">Software Development</option>
                                    <option value="audit-services">Audit Services</option>
                                    <option value="tax-returns">Tax Returns</option>
                                    <option value="multiple">Multiple Services</option>
                                </select>
                            </div>
                            <div class="group">
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                                <textarea id="message" name="message" rows="4" class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition duration-300 outline-none resize-none" placeholder="Tell us about your project..." required></textarea>
                            </div>
                            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-cyan-500 text-white px-8 py-4 rounded-xl hover:from-blue-700 hover:to-cyan-600 transition duration-300 font-semibold shadow-xl hover:shadow-2xl transform hover:scale-105 flex items-center justify-center group">
                                <span>Send Message</span>
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div class="reveal space-y-8" style="animation-delay: 0.2s">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>
                            <div class="space-y-6">
                                <a href="tel:+255692695509" class="flex items-start p-4 rounded-xl hover:bg-blue-50 transition duration-300 group">
                                    <div class="bg-blue-100 group-hover:bg-blue-200 p-3 rounded-xl mr-4 transition duration-300">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 mb-1">Phone</h4>
                                        <p class="text-gray-600 group-hover:text-blue-600 transition duration-300">+255 692 695 509</p>
                                    </div>
                                </a>

                                <a href="mailto:otienopetert@outlook.com" class="flex items-start p-4 rounded-xl hover:bg-blue-50 transition duration-300 group">
                                    <div class="bg-blue-100 group-hover:bg-blue-200 p-3 rounded-xl mr-4 transition duration-300">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                                        <p class="text-gray-600 group-hover:text-blue-600 transition duration-300">otienopetert@outlook.com</p>
                                    </div>
                                </a>

                                <div class="flex items-start p-4 rounded-xl">
                                    <div class="bg-blue-100 p-3 rounded-xl mr-4">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 mb-1">Business Hours</h4>
                                        <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM</p>
                                        <p class="text-gray-600">Saturday: 10:00 AM - 4:00 PM</p>
                                        <p class="text-gray-600">Sunday: Closed</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-cyan-600 p-8 rounded-3xl text-white shadow-2xl relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-white rounded-full filter blur-3xl opacity-10"></div>
                            <div class="relative z-10">
                                <h3 class="text-2xl font-bold mb-4">Schedule a Consultation</h3>
                                <p class="mb-6 text-blue-100 leading-relaxed">
                                    Book a free 30-minute consultation with our experts to discuss your needs.
                                </p>
                                <a href="#contact" class="inline-flex items-center bg-white text-blue-600 px-6 py-3 rounded-xl hover:bg-gray-100 transition duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 group">
                                    <span>Book Now</span>
                                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="bg-gray-50 p-6 rounded-2xl">
                            <h4 class="font-semibold text-gray-900 mb-4 text-center">Connect With Us</h4>
                            <div class="flex justify-center flex-wrap gap-3">
                                <a href="https://www.facebook.com/otienopetert" target="_blank" class="w-12 h-12 bg-white hover:bg-blue-600 text-blue-600 hover:text-white rounded-xl flex items-center justify-center transition duration-300 transform hover:scale-110 shadow-md hover:shadow-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </a>
                                <a href="https://x.com/otienopetert" target="_blank" class="w-12 h-12 bg-white hover:bg-sky-500 text-sky-600 hover:text-white rounded-xl flex items-center justify-center transition duration-300 transform hover:scale-110 shadow-md hover:shadow-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                                </a>
                                <a href="https://www.linkedin.com/in/peter-otieno-599699209/" target="_blank" class="w-12 h-12 bg-white hover:bg-blue-700 text-blue-700 hover:text-white rounded-xl flex items-center justify-center transition duration-300 transform hover:scale-110 shadow-md hover:shadow-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </a>
                                <a href="https://www.instagram.com/otienopetert/" target="_blank" class="w-12 h-12 bg-white hover:bg-gradient-to-r hover:from-purple-600 hover:to-pink-600 text-pink-600 hover:text-white rounded-xl flex items-center justify-center transition duration-300 transform hover:scale-110 shadow-md hover:shadow-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                </a>
                                <a href="https://github.com/otienopetert" target="_blank" class="w-12 h-12 bg-white hover:bg-gray-900 text-gray-900 hover:text-white rounded-xl flex items-center justify-center transition duration-300 transform hover:scale-110 shadow-md hover:shadow-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gradient-to-br from-gray-900 to-gray-800 text-white py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-4 gap-8 mb-8">
                    <div>
                        <img src="{{ asset('images/LOGO.png') }}" alt="TechLedger" class="h-16 md:h-20 lg:h-24 w-auto mb-4 brightness-0 invert">
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Transforming businesses through innovative technology solutions and expert financial services.
                        </p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4 text-lg">Services</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#services" class="text-gray-400 hover:text-white transition duration-300 flex items-center group">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-blue-500 inline-block mr-0 group-hover:mr-2 transition-all duration-300"></span>
                                Software Development
                            </a></li>
                            <li><a href="#services" class="text-gray-400 hover:text-white transition duration-300 flex items-center group">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-purple-500 inline-block mr-0 group-hover:mr-2 transition-all duration-300"></span>
                                Audit Services
                            </a></li>
                            <li><a href="#services" class="text-gray-400 hover:text-white transition duration-300 flex items-center group">
                                <span class="w-0 group-hover:w-2 h-0.5 bg-green-500 inline-block mr-0 group-hover:mr-2 transition-all duration-300"></span>
                                Tax Returns
                            </a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4 text-lg">Company</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#about" class="text-gray-400 hover:text-white transition duration-300">About Us</a></li>
                            <li><a href="#contact" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Careers</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4 text-lg">Newsletter</h4>
                        <p class="text-gray-400 text-sm mb-4">Subscribe to get the latest updates and news.</p>
                        <form class="flex">
                            <input type="email" placeholder="Your email" class="flex-1 px-4 py-2 rounded-l-lg bg-gray-800 border border-gray-700 focus:border-blue-500 focus:outline-none text-sm">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-r-lg transition duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
                    <p>&copy; {{ date('Y') }} TechLedger Solutions. All rights reserved.</p>
                    <div class="flex space-x-4 mt-4 md:mt-0">
                        <a href="#" class="hover:text-white transition duration-300">Terms</a>
                        <a href="#" class="hover:text-white transition duration-300">Privacy</a>
                        <a href="#" class="hover:text-white transition duration-300">Cookies</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll to Top Button -->
        <button id="scroll-top" class="fixed bottom-8 right-8 bg-gradient-to-r from-blue-600 to-cyan-500 text-white p-4 rounded-full shadow-2xl hover:shadow-3xl transform hover:scale-110 transition duration-300 opacity-0 pointer-events-none z-40">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
            </svg>
        </button>

        <!-- Enhanced JavaScript -->
        <script>
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const offset = window.innerWidth >= 768 ? 128 : 96;
                        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                        mobileMenu.classList.add('hidden');
                        menuIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    }
                });
            });

            // Navbar scroll effect
            const navbar = document.getElementById('navbar');
            let lastScroll = 0;

            window.addEventListener('scroll', function() {
                const currentScroll = window.pageYOffset;

                if (currentScroll > 50) {
                    navbar.classList.add('shadow-lg');
                } else {
                    navbar.classList.remove('shadow-lg');
                }

                lastScroll = currentScroll;
            });

            // Reveal on scroll animation
            const reveals = document.querySelectorAll('.reveal');

            function revealOnScroll() {
                for (let i = 0; i < reveals.length; i++) {
                    const windowHeight = window.innerHeight;
                    const revealTop = reveals[i].getBoundingClientRect().top;
                    const revealPoint = 100;

                    if (revealTop < windowHeight - revealPoint) {
                        reveals[i].classList.add('active');
                    }
                }
            }

            window.addEventListener('scroll', revealOnScroll);
            revealOnScroll(); // Check on page load

            // Scroll to top button
            const scrollTopButton = document.getElementById('scroll-top');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollTopButton.classList.remove('opacity-0', 'pointer-events-none');
                } else {
                    scrollTopButton.classList.add('opacity-0', 'pointer-events-none');
                }
            });

            scrollTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Form submission (placeholder - add your backend integration)
            const contactForm = document.getElementById('contact-form');

            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Show success message (you can customize this)
                alert('Thank you for your message! We will get back to you soon.');
                contactForm.reset();
            });

            // Parallax effect for hero section
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const parallax = document.querySelector('.particle-bg');
                if (parallax) {
                    parallax.style.transform = `translateY(${scrolled * 0.3}px)`;
                }
            });

            // Add active state to navigation links based on scroll position
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');

            function setActiveLink() {
                const scrollY = window.pageYOffset;

                sections.forEach(section => {
                    const sectionHeight = section.offsetHeight;
                    const sectionTop = section.offsetTop - 150;
                    const sectionId = section.getAttribute('id');

                    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                        navLinks.forEach(link => {
                            link.classList.remove('text-blue-600');
                            if (link.getAttribute('href') === `#${sectionId}`) {
                                link.classList.add('text-blue-600');
                            }
                        });
                    }
                });
            }

            window.addEventListener('scroll', setActiveLink);
        </script>
    </body>
</html>
