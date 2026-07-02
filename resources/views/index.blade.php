<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Futuristic Network</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-[#0f172a] text-white font-sans antialiased min-h-screen flex flex-col justify-between relative overflow-x-hidden">

    <div class="absolute w-[600px] h-[600px] bg-gradient-to-tr from-cyan-500/20 to-purple-600/10 rounded-full blur-[150px] -top-40 -right-20 pointer-events-none"></div>
    <div class="absolute w-[500px] h-[500px] bg-gradient-to-bl from-purple-500/10 to-pink-500/10 rounded-full blur-[130px] bottom-10 -left-20 pointer-events-none"></div>

    <header class="bg-[#1e1b4b]/40 backdrop-blur-md border-b border-white/10 sticky top-0 z-50 px-4 sm:px-8 py-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <div>
                <a href="#" class="text-white font-black text-2xl tracking-wider flex items-center uppercase">
                    Connect<span class="bg-gradient-to-r from-cyan-400 to-purple-500 bg-clip-text text-transparent font-bold ml-1">In</span>
                </a>
            </div>

            <div class="flex items-center space-x-4">
                <a href="/create" class="text-white/80 font-semibold hover:text-white hover:bg-white/5 px-4 py-2 rounded-xl transition duration-200">
                    Join now
                </a>
                <a href="/login" class="border border-cyan-400/50 text-cyan-400 font-semibold hover:bg-cyan-400/10 px-5 py-2 rounded-xl transition duration-200 shadow-[0_0_15px_rgba(34,211,238,0.1)]">
                    Sign in
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 sm:px-8 flex-grow flex flex-col md:flex-row items-center justify-between py-12 md:py-24 gap-12 relative z-10">
        
        <div class="w-full md:w-1/2 space-y-6 text-center md:text-left">
            <h1 class="text-4xl sm:text-6xl font-light text-white leading-tight">
                Welcome to your <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent font-semibold block sm:inline">professional community</span>
            </h1>
            
            <p class="text-white/60 text-lg max-w-md mx-auto md:mx-0 font-light">
                Connect with colleagues, expand your network, and build a better career in the next-generation space. Everything starts here.
            </p>

            <div class="pt-6 flex flex-col sm:flex-row justify-center md:justify-start gap-4 max-w-md mx-auto md:mx-0">
                <a href="/create" class="w-full text-center bg-gradient-to-r from-cyan-400 to-purple-500 hover:opacity-90 text-white font-semibold py-3.5 px-6 rounded-xl shadow-lg shadow-cyan-500/20 transition duration-200 text-lg uppercase tracking-wider text-sm">
                    Get Started (Register)
                </a>
                <a href="/login" class="w-full text-center bg-white/5 border border-white/10 hover:border-white/30 text-white font-semibold py-3.5 px-6 rounded-xl transition duration-200 text-lg text-sm backdrop-blur-sm">
                    Sign in with email
                </a>
            </div>
        </div>

        <div class="w-full md:w-1/2 flex justify-center">
            <div class="relative p-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full shadow-2xl">
                <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-full blur-xl opacity-30 animate-pulse"></div>
                <svg class="w-full max-w-md h-auto relative z-10 p-4" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="100" cy="100" r="80" fill="url(#avatarGradient)" opacity="0.15"/>
                    <path d="M60 145 C 60 115, 140 115, 140 145" stroke="url(#cyberGradient)" stroke-width="6" stroke-linecap="round"/>
                    <circle cx="100" cy="75" r="22" fill="url(#cyberGradient)"/>
                    
                    <defs>
                        <linearGradient id="cyberGradient" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#22d3ee" />
                            <stop offset="100%" stop-color="#a855f7" />
                        </linearGradient>
                        <linearGradient id="avatarGradient" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#3b82f6" />
                            <stop offset="100%" stop-color="#ec4899" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>

    </main>

    <footer class="bg-[#1e1b4b]/20 backdrop-blur-md border-t border-white/5 py-6 text-center text-xs text-white/40">
        <div class="max-w-6xl mx-auto px-4">
            <p>&copy; 2026 ConnectIn Corporation. Built for the future.</p>
        </div>
    </footer>

</body>
</html>