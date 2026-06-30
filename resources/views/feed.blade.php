<!DOCTYPE html>
<html lang="co">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkedIn Style Feed</title>
    <!-- Tailwind CSS v4 -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#f3f2ef] font-sans antialiased text-gray-900 pt-16">

    <!-- 1. HEADER (Top Navigation) -->
    <header class="bg-white border-b border-gray-200 fixed top-0 left-0 right-0 z-50 h-14 flex items-center">
        <div class="max-w-6xl mx-auto w-full px-4 flex items-center justify-between">
            
            <!-- Left: Logo & Search -->
            <div class="flex items-center gap-2 flex-1 max-w-md">
                <!-- LinkedIn-like Icon -->
                <div class="bg-[#0a66c2] text-white font-bold text-xl px-2.5 py-1 rounded-md tracking-tighter">
                    in
                </div>
                <!-- Search Bar (Hidden on extra small screens) -->
                <div class="relative w-full hidden sm:block">
                    <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 text-sm"></i>
                    <input type="text" placeholder="Search" class="w-full bg-[#edf3f8] pl-9 pr-4 py-1.5 text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 transition-all placeholder-gray-600">
                </div>
            </div>

            <!-- Right: Nav Icons -->
            <nav class="flex items-center gap-1 md:gap-6 text-gray-500">
                <a href="#" class="flex flex-col items-center justify-center min-w-[60px] text-gray-900 border-b-2 border-gray-900 py-1">
                    <i class="fa-solid fa-house text-lg"></i>
                    <span class="text-[11px] font-medium hidden md:inline mt-0.5">Home</span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center min-w-[60px] hover:text-gray-900 py-1 transition">
                    <i class="fa-solid fa-users text-lg"></i>
                    <span class="text-[11px] font-medium hidden md:inline mt-0.5">My Network</span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center min-w-[60px] hover:text-gray-900 py-1 transition">
                    <i class="fa-solid fa-briefcase text-lg"></i>
                    <span class="text-[11px] font-medium hidden md:inline mt-0.5">Jobs</span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center min-w-[60px] hover:text-gray-900 py-1 transition">
                    <i class="fa-solid fa-comment-dots text-lg"></i>
                    <span class="text-[11px] font-medium hidden md:inline mt-0.5">Messaging</span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center min-w-[60px] hover:text-gray-900 py-1 transition">
                    <i class="fa-solid fa-bell text-lg"></i>
                    <span class="text-[11px] font-medium hidden md:inline mt-0.5">Notifications</span>
                </a>
                <!-- User Profile Dropdown Placeholder -->
                <div class="flex flex-col items-center justify-center min-w-[50px] border-l border-gray-200 pl-4 cursor-pointer">
                    <div class="w-6 h-6 rounded-full bg-gray-400 text-white flex items-center justify-center text-[10px] font-bold uppercase">
                        M
                    </div>
                    <span class="text-[11px] font-medium hidden md:inline mt-0.5">Me <i class="fa-solid fa-caret-down text-[9px]"></i></span>
                </div>
            </nav>

        </div>
    </header>
    <!-- MAIN BODY GRID -->
    <div class="max-w-6xl mx-auto px-4 mt-6 grid grid-cols-1 md:grid-cols-4 gap-5 items-start">
        
        <!-- 2. SIDEBAR (Left Column - 1 part out of 4) -->
        <aside class="col-span-1 bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden sticky top-20">
            <!-- Card Header / Cover -->
            <div class="h-14 bg-gradient-to-r align-middle from-blue-700 to-cyan-500"></div>
            
            <!-- Avatar & Info -->
            <div class="px-4 pb-4 text-center border-b border-gray-200 relative">
                <!-- Avatar shifted up -->
                <div class="">
                   <img class="w-16 h-16 rounded-full bg-blue-600 text-white border-2 border-white flex items-center justify-center font-bold text-2xl uppercase mx-auto -mt-8 shadow-sm" src="{{ $user->image_url }}" alt="">
                </div>
                <h2 class="font-semibold text-gray-950 mt-3 hover:underline cursor-pointer">{{ $user->name }}</h2>
                <p class="text-xs text-gray-500 mt-1 leading-normal">Full Stack Web Developer | Laravel & Tailwind enthusiast</p>
            </div>

            <!-- Stats Widget -->
            <div class="py-3 border-b border-gray-200 text-xs font-semibold text-gray-500">
                <div class="flex justify-between items-center px-4 py-1.5 hover:bg-gray-100 cursor-pointer">
                    <span>Profile viewers</span>
                    <span class="text-blue-600">142</span>
                </div>
                <div class="flex justify-between items-center px-4 py-1.5 hover:bg-gray-100 cursor-pointer">
                    <span>Post impressions</span>
                    <span class="text-blue-600">1,024</span>
                </div>
            </div>

            <!-- My Items -->
            <div class="p-3 text-xs font-semibold text-gray-700 hover:bg-gray-100 cursor-pointer flex items-center gap-2">
                <i class="fa-solid fa-bookmark text-gray-500"></i>
                <span>Saved items</span>
            </div>
        </aside>

        <!-- 3. FEED (Middle/Right Columns - 3 parts out of 4) -->
        <main class="col-span-1 md:col-span-3 space-y-4">
            
            @foreach($posts as $post)
            <!-- Post Card -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                
                <!-- User Info Header -->
                <div class="flex items-center p-4 pb-2">
                    <!-- Profile Avatar Placeholder -->
                    <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-lg uppercase shadow-inner mr-3 shrink-0">
                        <img src="{{ $post->user->image_url }}" alt="Profile Image" class="w-full h-full object-cover rounded-full">
                    </div>
                    
                    <div>
                        <h3 class="font-semibold text-gray-900 hover:text-blue-600 hover:underline cursor-pointer text-sm md:text-base">
                            {{ $post->user->name }}
                        </h3>
                        <p class="text-xs text-gray-500 flex items-center gap-1 mt-0.5">
                            <span>Headline / Member</span>
                            <span>•</span>
                            <span>{{ $post->created_at ? $post->created_at->diffForHumans() : 'Just now' }}</span>
                            <span>•</span>
                            <i class="fa-solid fa-earth-americas text-[10px]"></i>
                        </p>
                    </div>
                </div>

                <!-- Post Content -->
                <div class="px-4 py-3 text-sm md:text-base text-gray-800 whitespace-pre-line leading-relaxed">
                    {{ $post->content }}
                </div>

                <hr class="border-gray-100 mx-4 my-1">

                <!-- Action Buttons -->
                <div class="flex items-center justify-between px-4 py-1.5 text-gray-600 font-medium text-sm">
                    <button class="flex items-center justify-center gap-2 hover:bg-gray-100 flex-1 py-2 rounded-lg transition duration-200 cursor-pointer">
                        <i class="fa-regular fa-thumbs-up text-lg"></i>
                        <span class="hidden sm:inline">Like</span>
                    </button>
                    
                    <button class="flex items-center justify-center gap-2 hover:bg-gray-100 flex-1 py-2 rounded-lg transition duration-200 cursor-pointer">
                        <i class="fa-regular fa-comment-dots text-lg"></i>
                        <span class="hidden sm:inline">Comment</span>
                    </button>
                    
                    <button class="flex items-center justify-center gap-2 hover:bg-gray-100 flex-1 py-2 rounded-lg transition duration-200 cursor-pointer">
                        <i class="fa-solid fa-arrows-rotate text-lg"></i>
                        <span class="hidden sm:inline">Repost</span>
                    </button>
                    
                    <button class="flex items-center justify-center gap-2 hover:bg-gray-100 flex-1 py-2 rounded-lg transition duration-200 cursor-pointer">
                        <i class="fa-regular fa-paper-plane text-lg"></i>
                        <span class="hidden sm:inline">Send</span>
                    </button>
                </div>

            </div>
            @endforeach

        </main>

    </div>

</body>
</html>