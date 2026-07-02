<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Futuristic Network - Sign In</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Google Fonts Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#0f172a] via-[#1e1b4b] to-[#311042] relative overflow-x-hidden p-4">

    <!-- Glowing Background Orbs -->
    <div class="absolute w-[300px] h-[300px] bg-gradient-to-r from-cyan-500 to-emerald-500 rounded-full blur-[120px] opacity-20 top-10 left-10 pointer-events-none"></div>
    <div class="absolute w-[300px] h-[300px] bg-gradient-to-r from-purple-500 to-pink-500 rounded-full blur-[120px] opacity-20 bottom-10 right-10 pointer-events-none"></div>

    <!-- Login Box (Pure Glassmorphism) -->
    <div class="w-full max-w-lg bg-white/5 backdrop-blur-xl border border-white/10 p-8 sm:p-10 rounded-2xl shadow-2xl relative z-10">
        
        <h2 class="text-3xl font-bold text-center uppercase tracking-wider mb-8 bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">
            SIGN IN
        </h2>

        <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Styled Laravel Errors -->
            @if ($errors->any())
                <div class="bg-red-500/20 border border-red-500/40 text-red-300 p-4 rounded-xl text-sm font-medium backdrop-blur-md transition-all duration-300">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 text-red-400" viewBox="0 0 200 200" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                        <span>{{ $errors->first() }}</span>
                    </div>
                </div>
            @endif

            <!-- Email Address -->
            <div class="relative group">
                <input type="email" id="email" name="email" required placeholder=" " 
                    class="w-full px-3 py-3 bg-transparent border-b-2 border-white/20 text-white focus:outline-none focus:border-cyan-400 transition-colors duration-300 peer">
                <label for="email" 
                    class="absolute left-3 top-1/2 -translate-y-1/2 text-white/50 pointer-events-none transition-all duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-focus:top-[-10px] peer-focus:text-xs peer-focus:text-cyan-400 peer-[:not(:placeholder-shown)]:top-[-10px] peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:text-cyan-400">
                    Email Address
                </label>
            </div>

            <!-- Password -->
            <div class="relative group">
                <input type="password" id="password" name="password" required placeholder=" " 
                    class="w-full px-3 py-3 bg-transparent border-b-2 border-white/20 text-white focus:outline-none focus:border-cyan-400 transition-colors duration-300 peer">
                <label for="password" 
                    class="absolute left-3 top-1/2 -translate-y-1/2 text-white/50 pointer-events-none transition-all duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-focus:top-[-10px] peer-focus:text-xs peer-focus:text-cyan-400 peer-[:not(:placeholder-shown)]:top-[-10px] peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:text-cyan-400">
                    Password
                </label>
            </div>

            <!-- Options (Remember me & Forgot Password hint) -->
            <div class="flex items-center justify-between text-xs text-white/60 pt-1">
                <label class="flex items-center gap-2 cursor-pointer select-none hover:text-cyan-400 transition">
                    <input type="checkbox" name="remember" class="accent-cyan-400 rounded bg-white/5 border-white/20">
                    <span>Remember me</span>
                </label>
                <a href="#" class="hover:text-purple-400 transition underline decoration-white/20">Forgot Password?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                class="w-full py-4 bg-gradient-to-r from-cyan-400 to-purple-500 text-white font-semibold rounded-xl shadow-[0_4px_20px_rgba(34,211,238,0.3)] hover:shadow-[0_8px_30px_rgba(168,85,247,0.5)] hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 cursor-pointer uppercase tracking-wider">
                Login
            </button>
            
            <!-- Link to register -->
            <p class="text-center text-sm text-white/50 pt-2">
                Don't have an account? <a href="/create" class="text-cyan-400 hover:underline font-medium transition">Sign up here</a>
            </p>
        </form>
    </div>

</body>
</html>