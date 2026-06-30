<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Futuristic Tailwind Form</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Google Fonts Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#0f172a] via-[#1e1b4b] to-[#311042] relative overflow-x-hidden p-4">

    <!-- Dak l-Glow / L-kora li wra l-form bach t3ti l-vibes dyal cyberpunk -->
    <div class="absolute w-[300px] height-[300px] bg-gradient-to-r from-cyan-500 to-emerald-500 rounded-full blur-[100px] opacity-20 top-10 left-10 pointer-events-none"></div>
    <div class="absolute w-[300px] height-[300px] bg-gradient-to-r from-purple-500 to-pink-500 rounded-full blur-[100px] opacity-20 bottom-10 right-10 pointer-events-none"></div>

    <!-- L-Form Box (Glassmorphism pure) -->
    <div class="w-full max-w-lg bg-white/5 backdrop-blur-xl border border-white/10 p-8 sm:p-10 rounded-2xl shadow-2xl relative z-10">
        
        <h2 class="text-3xl font-bold text-center uppercase tracking-wider mb-8 bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">
            SING UP
        </h2>

      <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Grid l FirstName o LastName bach l-form mayjish twiiil bzaf -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- name -->
                <div class="relative group">
                    <input type="text" id="name" name="name" required placeholder=" " 
                        class="w-full px-3 py-3 bg-transparent border-b-2 border-white/20 text-white focus:outline-none focus:border-cyan-400 transition-colors duration-300 peer">
                    <label for="name" 
                        class="absolute left-3 top-1/2 -translate-y-1/2 text-white/50 pointer-events-none transition-all duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-focus:top-[-10px] peer-focus:text-xs peer-focus:text-cyan-400 peer-[:not(:placeholder-shown)]:top-[-10px] peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:text-cyan-400">
                        Name
                    </label>
                </div>

                <!-- headline -->
                <div class="relative group">
                    <input type="text" id="headline" name="headline" required placeholder=" " 
                        class="w-full px-3 py-3 bg-transparent border-b-2 border-white/20 text-white focus:outline-none focus:border-cyan-400 transition-colors duration-300 peer">
                    <label for="headline" 
                        class="absolute left-3 top-1/2 -translate-y-1/2 text-white/50 pointer-events-none transition-all duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-focus:top-[-10px] peer-focus:text-xs peer-focus:text-cyan-400 peer-[:not(:placeholder-shown)]:top-[-10px] peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:text-cyan-400">
                        Headline
                    </label>
                </div>
            </div>


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

            <!-- Company -->
            <div class="relative group">
                <input type="text" id="company" name="company" required placeholder=" " 
                    class="w-full px-3 py-3 bg-transparent border-b-2 border-white/20 text-white focus:outline-none focus:border-cyan-400 transition-colors duration-300 peer">
                <label for="company" 
                    class="absolute left-3 top-1/2 -translate-y-1/2 text-white/50 pointer-events-none transition-all duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-focus:top-[-10px] peer-focus:text-xs peer-focus:text-cyan-400 peer-[:not(:placeholder-shown)]:top-[-10px] peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:text-cyan-400">
                    Company
                </label>
            </div>

            <!-- Remember Token -->
            <div class="relative group">
                <input type="text" id="remember_token" name="remember_token" required placeholder=" " 
                    class="w-full px-3 py-3 bg-transparent border-b-2 border-white/20 text-white focus:outline-none focus:border-cyan-400 transition-colors duration-300 peer">
                <label for="remember_token" 
                    class="absolute left-3 top-1/2 -translate-y-1/2 text-white/50 pointer-events-none transition-all duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-focus:top-[-10px] peer-focus:text-xs peer-focus:text-cyan-400 peer-[:not(:placeholder-shown)]:top-[-10px] peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:text-cyan-400">
                    Remember Token
                </label>
            </div>

            <!-- Custom Image Input -->
            <div class="space-y-2">
                <input type="text" id="image" name="image" required placeholder="Image URL " 
                    class="w-full px-3 py-3 bg-transparent border-b-2 border-white/20 text-white focus:outline-none focus:border-cyan-400 transition-colors duration-300 peer">
                <label for="image" 
                    class="absolute left-3 top-1/2 -translate-y-1/2 text-white/50 pointer-events-none transition-all duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-focus:top-[-10px] peer-focus:text-xs peer-focus:text-cyan-400 peer-[:not(:placeholder-shown)]:top-[-10px] peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:text-cyan-400">
                    
                </label>
            </div>

            <!-- Submit Button (Glow + Hover scale) -->
            <button type="submit" 
                class="w-full py-4 bg-gradient-to-r from-cyan-400 to-purple-500 text-white font-semibold rounded-xl shadow-[0_4px_20px_rgba(34,211,238,0.3)] hover:shadow-[0_8px_30px_rgba(168,85,247,0.5)] hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 cursor-pointer">
                register
            </button>
        </form>
    </div>

</body>
</html>