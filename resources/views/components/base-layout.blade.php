<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klussendienst | Reliable Home Services</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 6px;
            left: 50%;
            background-color: #FF8C00;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover:after {
            width: 60%;
        }

        .footer-link {
            position: relative;
        }

        .footer-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: all 0.3s ease;
        }

        .footer-link:hover:after {
            width: 100%;
        }

        .shadow-soft {
            box-shadow: 0 4px 20px -1px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-100 text-gray-900">
    <!-- Header -->
    <header class="bg-gray-900 shadow-soft sticky top-0 z-50">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <img src="/image/Logo.png" alt="Klussendienst Logo" class="h-12 w-auto rounded-full border-2 border-orange-600 p-1" />
                    <div>
                        <span class="text-xl font-bold text-orange-500">Klussendienst</span>
                        <p class="text-xs text-gray-400 -mt-1">Reliable Home Services</p>
                    </div>
                </div>
    
                <nav class="hidden md:flex items-center ml-4">
                    <ul class="flex justify-center space-x-3 text-sm">
                        <li><a href="/" class="nav-link px-2 py-1 text-gray-300 font-medium hover:text-orange-500">Home</a></li>
                        <li><a href="/assignments" class="nav-link px-2 py-1 text-gray-300 font-medium hover:text-orange-500">Assignments</a></li>
                        <li><a href="/users" class="nav-link px-2 py-1 text-gray-300 font-medium hover:text-orange-500">Users</a></li>
                    </ul>
                </nav>
    
                <div class="flex items-center space-x-4">
                    @auth
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-sm font-medium text-orange-500 hover:text-orange-600">Sign Out</button>
                        </form>
                    @else
                        <a href="/login" class="text-sm font-medium text-orange-500 hover:text-orange-600">Sign In</a>
                        <a href="/register" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-200 shadow-md hover:shadow-lg">Join Now</a>
                    @endauth
                    <button class="md:hidden text-gray-400 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Body -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12 text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="/image/Logo.png" alt="Klussendienst Logo" class="h-10 w-auto rounded-full border border-orange-500" />
                        <span class="text-xl font-bold text-orange-500">Klussendienst</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-4">Connecting skilled professionals with clients for reliable home services.</p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/Klussendienst" class="text-gray-400 hover:text-white transition duration-200"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/Klussendienst" class="text-gray-400 hover:text-white transition duration-200"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/Klussendienst" class="text-gray-400 hover:text-white transition duration-200"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/Klussendienst" class="text-gray-400 hover:text-white transition duration-200"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/about" class="footer-link text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="/assignments" class="footer-link text-gray-400 hover:text-white">Assignments</a></li>
                        <li><a href="/contact" class="footer-link text-gray-400 hover:text-white">Contact</a></li>
                        <li><a href="/users" class="footer-link text-gray-400 hover:text-white">Werkers</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Support</h3>
                    <ul class="space-y-2">
                        <li><a href="/contact" class="footer-link text-gray-400 hover:text-white">Contact Us</a></li>
                        <li><a href="/faq" class="footer-link text-gray-400 hover:text-white">FAQs</a></li>
                        <li><a href="/privacy" class="footer-link text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="/terms" class="footer-link text-gray-400 hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start space-x-2">
                            <i class="fas fa-map-marker-alt mt-1 text-orange-500"></i>
                            <span>123 Klussendienst Ave, Service City</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-phone-alt text-orange-500"></i>
                            <span>(123) 456-7890</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-envelope text-orange-500"></i>
                            <span>info@klussendienst.com</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-clock text-orange-500"></i>
                            <span>Mon-Sun: 8AM - 8PM</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-10 pt-6 text-center text-gray-500 text-sm">
                <p>© 2025 Klussendienst. All rights reserved. Designed with <i class="fas fa-heart text-red-500"></i> for home services.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>

</html>