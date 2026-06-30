<!DOCTYPE html>
<html lang="co">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Network</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        linkedin: {
                            blue: '#0a66c2',
                            darkBlue: '#004182',
                            lightBlue: '#eef3f8',
                            gray: '#666666'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#f3f2ef] font-sans antialiased min-h-screen flex flex-col justify-between">

    <header class="bg-white border-b border-gray-200 sticky top-0 z-50 px-4 sm:px-8 py-3">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <a href="#" class="text-linkedin-blue font-black text-2xl tracking-tight flex items-center">
                    Connect<span class="bg-linkedin-blue text-white px-1.5 py-0.5 rounded ml-0.5 text-xl font-bold">In</span>
                </a>
            </div>

            <div class="flex items-center space-x-4">
                <a href="/create" class="text-gray-600 font-semibold hover:bg-gray-100 px-4 py-2 rounded-full transition duration-200">
                    Join now
                </a>
                <a href="/login" class="text-linkedin-blue border border-linkedin-blue font-semibold hover:bg-linkedin-lightBlue px-5 py-2 rounded-full transition duration-200">
                    Sign in
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 sm:px-8 flex-grow flex flex-col md:flex-row items-center justify-between py-12 md:py-24 gap-8">
        
        <div class="w-full md:w-1/2 space-y-6 text-center md:text-left">
            <h1 class="text-3xl sm:text-5xl font-light text-gray-800 leading-tight">
                Welcome to your <span class="text-linkedin-blue font-normal">professional community</span>
            </h1>
            
            <p class="text-gray-500 text-lg max-w-md mx-auto md:mx-0">
                Connect with colleagues, expand your network, and build a better career. Everything starts here.
            </p>

            <div class="pt-4 flex flex-col sm:flex-row justify-center md:justify-start gap-4 max-w-sm mx-auto md:mx-0">
                <a href="/create" class="w-full text-center bg-linkedin-blue hover:bg-darkBlue text-white font-semibold py-3 px-6 rounded-full shadow-sm transition duration-200 text-lg">
                    Get Started (Register)
                </a>
                <a href="/login" class="w-full text-center bg-white border border-gray-400 hover:border-gray-600 text-gray-700 font-semibold py-3 px-6 rounded-full transition duration-200 text-lg">
                    Sign in with email
                </a>
            </div>
        </div>

        <div class="w-full md:w-1/2 flex justify-center">
            <svg class="w-full max-w-md h-auto text-linkedin-blue opacity-80" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="100" cy="100" r="80" fill="#eef3f8"/>
                <path d="M60 140 C 60 110, 140 110, 140 140" stroke="#0a66c2" stroke-width="8" stroke-linecap="round"/>
                <circle cx="100" cy="75" r="25" fill="#0a66c2"/>
            </svg>
        </div>

    </main>

    <footer class="bg-white border-t border-gray-200 py-4 text-center text-xs text-linkedin-gray">
        <div class="max-w-6xl mx-auto px-4">
            <p>&copy; 2026 ConnectIn Corporation. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>