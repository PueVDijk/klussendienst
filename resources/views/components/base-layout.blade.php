<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klussendienst</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        body,
        html {
            height: 100%;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        main {
            flex: 1;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            transition: all 0.3s ease;
        }

        .active-link {
            border-bottom: 2px solid white;
        }

        .gradient-bg {
            background: linear-gradient(90deg, #FFB84D, #FF8C00); /* Soft orange gradient */
        }

        /* Header styling */
        .header-bg {
            background-color: #FF8C00; /* Deep orange */
        }

        .text-primary {
            color: #FF8C00; /* Primary orange */
        }

        /* Button styles */
        .button-primary {
            background-color: #FF8C00; /* Deep orange button */
            color: white;
        }

        .button-primary:hover {
            background-color: #FF6F00; /* Darker orange on hover */
        }

        /* Footer styling */
        .footer-bg {
            background-color: #F7F7F7; /* Light grayish background */
        }

        .footer-text {
            color: #2E2E2E; /* Dark gray text */
        }

        /* Link hover effect */
        .footer-link:hover {
            color: #FF8C00;
            transition: color 0.3s ease;
        }
    </style>
</head>

<body class="bg-gray-200">

    <header>
        <div class="header-bg">
            <div class="container mx-auto py-4 px-6">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <img src="/image/logo1234.jpg" alt="Klussendienst Logo" class="h-10 w-auto rounded-full" />
                        <span class="text-lg font-bold text-white">Klussendienst</span>
                    </div>

                    <nav class="flex items-center space-x-1 ml-6">
                        <a href="/home" class="nav-link px-4 py-2 text-white font-medium rounded-lg">Home</a>
                        <a href="/assignments" class="nav-link px-4 py-2 text-white font-medium rounded-lg">Assignments</a>
                        <a href="/users" class="nav-link px-4 py-2 text-white font-medium rounded-lg">Users</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="footer-bg py-4">
        <div class="container mx-auto flex flex-col items-center space-y-4 text-sm text-gray-700">
            <div class="flex space-x-4">
                <a href="/about" class="footer-link transition duration-200">About Us</a>
                <a href="/contact" class="footer-link transition duration-200">Contact</a>
                <a href="/dashboard" class="footer-link transition duration-200">Dashboard</a>
                <a href="/privacy" class="footer-link transition duration-200">Privacy Policy</a>
                <a href="/terms" class="footer-link transition duration-200">Terms of Service</a>
            </div>
            <div class="footer-text">
                <span>&copy; 2025 <span class="font-semibold">Klussendienst</span>. All rights reserved.</span>
            </div>
        </div>
    </footer>

</body>

</html>
