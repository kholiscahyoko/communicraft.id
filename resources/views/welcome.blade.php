<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include('meta::manager')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-50 text-gray-800">
        <!-- Header with Nav and Burger Button -->
        <header class="bg-white border-b border-gray-200 fixed w-full z-10 text-lg">
            <div class="container mx-auto flex justify-between items-center p-5">
                <!-- Logo Image -->
                <a href="#" class="flex items-center">
                    <img src="./assets/logo.png" alt="PR Agency Logo" class="h-10 w-auto">
                </a>
                <nav class="hidden md:flex space-x-6">
                    <a href="#hero" class="content-center hover:text-blue-600">Home</a>
                    <a href="#clients" class="content-center hover:text-blue-600">Our Clients</a>
                    <a href="#expertise" class="content-center hover:text-blue-600">Our Expertise</a>
                    <a href="#why-us" class="content-center hover:text-blue-600">Why Us</a>
                    <a href="#testimony" class="content-center hover:text-blue-600">Testimony</a>
                    <a href="#contact" class="content-center bg-blue-900 text-white px-3 py-2 rounded-3xl hover:text-blue-200 ">Contact Us</a>
                </nav>
                <button class="md:hidden text-blue-600 focus:outline-none" id="burger-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <!-- Mobile Nav -->
            <div class="hidden md:hidden flex-col space-y-3 p-5 bg-white border-t border-gray-200 absolute top-16 left-0 w-full shadow-lg" id="mobile-menu">
                <a href="#hero" class="block hover:text-blue-600 py-2">Home</a>
                <a href="#clients" class="block hover:text-blue-600 py-2">Our Clients</a>
                <a href="#expertise" class="block hover:text-blue-600 py-2">Our Expertise</a>
                <a href="#why-us" class="block hover:text-blue-600 py-2">Why Us</a>
                <a href="#testimony" class="block hover:text-blue-600 py-2">Testimony</a>
                <a href="#contact" class="block hover:text-blue-600 py-2">Contact</a>
            </div>
        </header>

        <!-- Hero Section -->
        <section id="hero" class="h-screen bg-cover bg-center text-blue-900" style="background-image: url('./assets/bg-city.webp');">
            <div class="w-full h-full flex items-center justify-center bg-white bg-opacity-70">
                <div class="text-center">
                    <h1 class="text-5xl font-bold text-blue-600 mb-5">Welcome to Our PR Agency</h1>
                    <p class="text-xl mb-8">We make your brand the talk of the town</p>
                    <div class="flex justify-center space-x-2 text-lg">
                        <a href="#expertise" class="bg-white hover:bg-gray-300 font-semibold py-3 px-6 rounded-full">
                            Learn More
                        </a>
                        <a href="#contact" class="bg-yellow-400 hover:bg-yellow-500 font-semibold py-3 px-6 rounded-full">
                            Contact Us
                        </a>

                    </div>
                </div>
            </div>
        </section>

        <!-- Our Clients -->
        <section id="clients" class="py-16 bg-white">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-10">Our Clients</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Replace with client logos/images -->
                    <div class="bg-yellow-100 p-8 rounded-lg shadow-md text-center">Client 1</div>
                    <div class="bg-yellow-100 p-8 rounded-lg shadow-md text-center">Client 2</div>
                    <div class="bg-yellow-100 p-8 rounded-lg shadow-md text-center">Client 3</div>
                </div>
            </div>
        </section>

        <!-- Our Expertise -->
        <section id="expertise" class="bg-blue-50 py-16">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-10">Our Expertise</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-blue-900 p-8 rounded-lg shadow-md border-l-4 text-white border-blue-600">
                        <h3 class="text-2xl font-semibold mb-3">International PR Offerings</h3>
                        <ul class="list-disc text-lg">
                            <li>Press release development and distribution</li>
                            <li>Feature stories and interview pitching</li>
                            <li>Thought leadership creation</li>
                        </ul>
                    </div>
                    <div class="bg-blue-900 p-8 rounded-lg shadow-md border-l-4 text-white border-blue-600">
                        <h3 class="text-2xl font-semibold mb-3">Local PR Services</h3>
                        <ul class="list-disc text-lg">
                            <li>Performance-based PR strategies</li>
                            <li>Micro-influencer campaigns</li>
                            <li>Owned media channel management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Us -->
        <section id="why-us" class="py-16 bg-white">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-10">Why Choose Us?</h2>
                <p class="text-center max-w-3xl mx-auto text-gray-700 text-lg">
                    Our agency is committed to delivering results. We understand the nuances of the market and leverage our expertise to provide tailored solutions.
                </p>
            </div>
        </section>

        <!-- Testimony -->
        <section id="testimony" class="bg-gray-50 py-16">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-10">What Our Clients Say</h2>
                <div class="flex flex-col md:flex-row gap-8 text-lg">
                    <div class="bg-white p-8 rounded-lg shadow-md border-l-4 border-yellow-400">
                        <p>"Excellent service and remarkable results!" - Client A</p>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md border-l-4 border-yellow-400">
                        <p>"They truly understand our brand and deliver consistently." - Client B</p>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-md border-l-4 border-yellow-400">
                        <p>"Professional, reliable, and innovative." - Client C</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form -->
        <section id="contact" class="py-16 bg-white">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold text-center text-blue-600 mb-10">Contact Us</h2>
                <form class="max-w-lg mx-auto bg-gray-50 p-8 rounded-lg shadow-md space-y-4 border border-gray-200">
                    <input type="text" placeholder="Name" class="w-full border border-gray-300 p-3 rounded-lg focus:ring focus:ring-blue-200" required>
                    <input type="email" placeholder="Email" class="w-full border border-gray-300 p-3 rounded-lg focus:ring focus:ring-blue-200" required>
                    <textarea placeholder="Message" class="w-full border border-gray-300 p-3 rounded-lg focus:ring focus:ring-blue-200" rows="5" required></textarea>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg">Send Message</button>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-blue-900 text-white py-8">
            <div class="container mx-auto text-center">
                <p>&copy; 2024 Communicraft. All rights reserved.</p>
            </div>
        </footer>

        <!-- Script for Burger Menu and Universal Smooth Scrolling -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const burgerBtn = document.getElementById('burger-btn');
                const mobileMenu = document.getElementById('mobile-menu');
                const allLinks = document.querySelectorAll('a[href^="#"]');

                // Toggle mobile menu
                burgerBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });

                // Smooth scroll and close mobile menu for all on-page links
                allLinks.forEach(link => {
                    link.addEventListener('click', (event) => {
                        const targetId = link.getAttribute('href');
                        const targetElement = document.querySelector(targetId);

                        // If the target element exists, prevent default and scroll smoothly
                        if (targetElement) {
                            event.preventDefault();
                            targetElement.scrollIntoView({ behavior: 'smooth' });

                            // Close the mobile menu if it's open
                            if (!mobileMenu.classList.contains('hidden')) {
                                mobileMenu.classList.add('hidden');
                            }
                        }
                    });
                });
            });
        </script>
    </body>
</html>
