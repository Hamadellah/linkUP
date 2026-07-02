<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futuristic Network - Feed</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-[#0f172a] text-white font-sans antialiased pt-20 min-h-screen relative overflow-x-hidden">

    <div class="absolute w-[500px] h-[500px] bg-gradient-to-r from-cyan-500/10 to-purple-500/10 rounded-full blur-[150px] top-0 left-1/4 pointer-events-none"></div>

    <header class="bg-[#1e1b4b]/60 backdrop-blur-xl border-b border-white/10 fixed top-0 left-0 right-0 z-50 h-16 flex items-center">
        <div class="max-w-6xl mx-auto w-full px-4 flex items-center justify-between">
            
            <div class="flex items-center gap-4 flex-1 max-w-md">
                <div class="bg-gradient-to-r from-cyan-400 to-purple-500 text-white font-black text-xl px-3 py-1 rounded-xl tracking-wider uppercase shadow-md shadow-cyan-500/20">
                    Net
                </div>
                <div class="relative w-full hidden sm:block">
                    <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-white/40 text-sm"></i>
                    <input type="text" placeholder="Search..." class="w-full bg-white/5 border border-white/10 pl-10 pr-4 py-2 text-sm rounded-xl focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all text-white placeholder-white/40">
                </div>
            </div>

            <nav class="flex items-center gap-2 md:gap-6 text-white/60">
                <a href="#" class="flex flex-col items-center justify-center min-w-[60px] text-cyan-400 border-b-2 border-cyan-400 py-1">
                    <i class="fa-solid fa-house text-lg"></i>
                    <span class="text-[11px] font-medium hidden md:inline mt-0.5">Home</span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center min-w-[60px] hover:text-white py-1 transition">
                    <i class="fa-solid fa-users text-lg"></i>
                    <span class="text-[11px] font-medium hidden md:inline mt-0.5">Network</span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center min-w-[60px] hover:text-white py-1 transition">
                    <i class="fa-solid fa-briefcase text-lg"></i>
                    <span class="text-[11px] font-medium hidden md:inline mt-0.5">Jobs</span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center min-w-[60px] hover:text-white py-1 transition">
                    <i class="fa-solid fa-comment-dots text-lg"></i>
                    <span class="text-[11px] font-medium hidden md:inline mt-0.5">Messaging</span>
                </a>
                
                <div class="flex items-center gap-2 border-l border-white/10 pl-4">
                    <div class="flex flex-col items-center justify-center min-w-[50px] cursor-pointer group">
                        <div class="w-7 h-7 rounded-full bg-gradient-to-tr from-cyan-400 to-purple-500 text-white flex items-center justify-center text-xs font-bold uppercase ring-2 ring-white/20 group-hover:ring-cyan-400 transition">
                            {{ substr($user->name, 0, 1) }}
                        </div>
                    </div>

                    <form method="POST" action="{{ route('logout') }}" class="inline m-0">
                        @csrf
                        <button type="submit" class="flex flex-col items-center justify-center min-w-[50px] text-red-400 hover:text-red-500 py-1 transition cursor-pointer" title="Logout">
                            <i class="fa-solid fa-right-from-bracket text-lg"></i>
                        </button>
                    </form>
                </div>
            </nav>

        </div>
    </header>

    <div class="max-w-6xl mx-auto px-4 mt-6 grid grid-cols-1 md:grid-cols-4 gap-6 items-start relative z-10">
        
        <aside class="col-span-1 bg-white/5 backdrop-blur-md rounded-2xl border border-white/10 shadow-xl overflow-hidden sticky top-24">
            <div class="h-16 bg-gradient-to-r from-purple-600/50 to-cyan-500/50"></div>
            
            <div class="px-4 pb-4 text-center border-b border-white/10 relative">
                <img class="w-16 h-16 rounded-full border-2 border-cyan-400 flex items-center justify-center mx-auto -mt-8 shadow-lg object-cover bg-[#1e1b4b]" src="{{ $user->image_url }}" alt="">
                <h2 class="font-semibold text-white mt-3 hover:text-cyan-400 cursor-pointer transition">{{ $user->name }}</h2>
                <p class="text-xs text-white/60 mt-1 leading-normal">{{ $user->headline }}</p>
            </div>

            <div class="py-3 border-b border-white/10 text-xs font-semibold text-white/60">
                <div class="flex justify-between items-center px-4 py-2 hover:bg-white/5 cursor-pointer transition">
                    <span>Profile viewers</span>
                    <span class="text-cyan-400">142</span>
                </div>
                <div class="flex justify-between items-center px-4 py-2 hover:bg-white/5 cursor-pointer transition">
                    <span>Post impressions</span>
                    <span class="text-purple-400">1,024</span>
                </div>
            </div>

            <div class="p-3 text-xs font-semibold text-white/80 hover:bg-white/5 cursor-pointer flex items-center gap-2 transition">
                <i class="fa-solid fa-bookmark text-cyan-400"></i>
                <span>Saved items</span>
            </div>
        </aside>

        <main class="col-span-1 md:col-span-3 space-y-4">
            
            <button id="openModalBtn" class="px-5 py-3 bg-gradient-to-r from-cyan-500 to-purple-600 text-white font-semibold rounded-xl shadow-lg shadow-cyan-500/20 hover:shadow-purple-500/30 hover:-translate-y-0.5 transition duration-200 cursor-pointer flex items-center justify-center gap-2">
                <i class="fa-solid fa-plus text-sm"></i> Ajouter un post
            </button>

            @if(session('success'))
                <div class="bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 px-4 py-3 rounded-xl text-sm font-medium backdrop-blur-md">
                    {{ session('success') }}
                </div>
            @endif

            @foreach($posts as $post)
            <div class="bg-white/5 backdrop-blur-md rounded-2xl border border-white/10 shadow-xl overflow-hidden transition hover:border-white/20">
                <div class="flex items-center p-4 pb-2">
                    <div class="w-12 h-12 rounded-full border border-purple-400 flex items-center justify-center shadow-inner mr-3 shrink-0 overflow-hidden bg-slate-800">
                        <img src="{{ $post->user->image_url }}" alt="Profile Image" class="w-full h-full object-cover">
                    </div>
                    
                    <div>
                        <h3 class="font-semibold text-white hover:text-cyan-400 cursor-pointer text-sm md:text-base transition">
                            {{ $post->user->name }}
                        </h3>
                        <p class="text-xs text-white/50 flex items-center gap-1 mt-0.5">
                            <span>{{ $post->user->headline }}</span>
                            <span>•</span>
                            <span>{{ $post->created_at ? $post->created_at->diffForHumans() : 'Just now' }}</span>
                            <span>•</span>
                            <i class="fa-solid fa-earth-americas text-[10px] text-cyan-400"></i>
                        </p>
                    </div>
                </div>

                <div id="post-content-{{ $post->id }}" class="px-4 py-3 text-sm md:text-base text-white/90 whitespace-pre-line leading-relaxed">
                    {{ $post->content }}
                </div>

                <div class="border-t border-white/5 mx-4 my-1"></div>

                <div class="flex items-center justify-end gap-2 px-4 py-2 text-sm">
                    <button type="button" 
                            class="open-edit-modal-btn flex items-center justify-center gap-2 text-amber-400 hover:bg-amber-400/10 px-4 py-2 rounded-xl transition duration-200 font-medium cursor-pointer"
                            data-id="{{ $post->id }}">
                        <i class="fa-regular fa-pen-to-square text-lg"></i>
                        <span>Modifier</span>
                    </button>
                    
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="m-0 inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce post ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="flex items-center justify-center gap-2 text-red-400 hover:bg-red-400/10 px-4 py-2 rounded-xl transition duration-200 font-medium cursor-pointer">
                            <i class="fa-regular fa-trash-can text-lg"></i>
                            <span>Supprimer</span>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
           
        </main>

    </div>

    <div id="postModal" class="fixed inset-0 bg-black/70 z-50 flex items-center justify-center p-4 hidden backdrop-blur-md transition-all duration-300">
        <div class="bg-[#1e1b4b] w-full max-w-xl rounded-2xl shadow-2xl border border-white/10 overflow-hidden transform scale-95 transition-transform duration-300">
            <div class="flex items-center justify-between px-6 py-4 border-b border-white/10 bg-white/5">
                <h3 class="text-xl font-semibold text-white">Create a post</h3>
                <button id="closeModalBtn" class="text-white/40 hover:text-white hover:bg-white/10 w-8 h-8 rounded-full flex items-center justify-center transition cursor-pointer">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>
            <form action="{{ route('posts.store') }}" method="POST" class="m-0">
                @csrf
                <div class="p-6 space-y-4">
                    <div class="flex items-center gap-3">
                        <img class="w-12 h-12 rounded-full object-cover border border-cyan-400 bg-slate-800" src="{{ $user->image_url }}" alt="Profile image">
                        <div>
                            <h4 class="font-semibold text-white text-sm">{{ $user->name }}</h4>
                            <button type="button" class="mt-0.5 px-3 py-0.5 border border-white/20 rounded-full text-xs font-semibold text-white/60 flex items-center gap-1 bg-white/5">
                                <i class="fa-solid fa-earth-americas text-[10px] text-cyan-400"></i> Anyone <i class="fa-solid fa-caret-down text-[9px]"></i>
                            </button>
                        </div>
                    </div>
                    <textarea name="content" rows="5" class="w-full text-white placeholder-white/40 bg-white/5 border border-white/10 rounded-xl p-4 resize-none focus:outline-none focus:border-cyan-400 text-base min-h-[150px]" placeholder="What do you want to talk about?" inherit required></textarea>
                </div>
                <div class="flex items-center justify-between px-6 py-4 border-t border-white/10 bg-white/5">
                    <div class="flex items-center gap-2 text-white/40">
                        <button type="button" class="w-10 h-10 hover:bg-white/10 text-cyan-400 rounded-full flex items-center justify-center transition cursor-pointer" title="Add a photo"><i class="fa-regular fa-image text-lg"></i></button>
                        <button type="button" class="w-10 h-10 hover:bg-white/10 text-emerald-400 rounded-full flex items-center justify-center transition cursor-pointer" title="Add a video"><i class="fa-solid fa-video text-base"></i></button>
                    </div>
                    <div>
                        <button type="submit" class="bg-gradient-to-r from-cyan-500 to-purple-600 hover:opacity-90 text-white text-sm font-semibold px-6 py-2 rounded-full shadow-md transition duration-150 cursor-pointer">Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="editPostModal" class="fixed inset-0 bg-black/70 z-50 flex items-center justify-center p-4 hidden backdrop-blur-md transition-all duration-300">
        <div class="bg-[#1e1b4b] w-full max-w-xl rounded-2xl shadow-2xl border border-white/10 overflow-hidden transform scale-95 transition-transform duration-300">
            <div class="flex items-center justify-between px-6 py-4 border-b border-white/10 bg-white/5">
                <h3 class="text-xl font-semibold text-white">Modifier le post</h3>
                <button id="closeEditModalBtn" class="text-white/40 hover:text-white hover:bg-white/10 w-8 h-8 rounded-full flex items-center justify-center transition cursor-pointer">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <form id="editPostForm" method="POST" class="m-0">
                @csrf
                @method('PUT') 
                <div class="p-6 space-y-4">
                    <div class="flex items-center gap-3">
                        <img class="w-12 h-12 rounded-full object-cover border border-purple-400 bg-slate-800" src="{{ $user->image_url }}" alt="Profile image">
                        <div>
                            <h4 class="font-semibold text-white text-sm">{{ $user->name }}</h4>
                            <span class="mt-0.5 px-3 py-0.5 border border-white/10 rounded-full text-xs font-semibold text-amber-400 flex items-center gap-1 bg-white/5 w-max">
                                <i class="fa-solid fa-earth-americas text-[10px]"></i> Modification
                            </span>
                        </div>
                    </div>

                    <textarea 
                        id="editPostContent"
                        name="content" 
                        rows="5" 
                        class="w-full text-white placeholder-white/40 bg-white/5 border border-white/10 rounded-xl p-4 resize-none focus:outline-none focus:border-amber-400 text-base min-h-[150px]" 
                        required></textarea>
                </div>

                <div class="flex items-center justify-end px-6 py-4 border-t border-white/10 bg-white/5 gap-3">
                    <button type="button" id="cancelEditBtn" class="border border-white/20 hover:bg-white/10 text-white/80 text-sm font-semibold px-5 py-2 rounded-full transition cursor-pointer">
                        Annuler
                    </button>
                    <button type="submit" class="bg-gradient-to-r from-amber-500 to-orange-600 hover:opacity-90 text-white text-sm font-semibold px-5 py-2 rounded-full shadow-md transition duration-150 cursor-pointer">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // --- CREATE MODAL ---
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const postModal = document.getElementById('postModal');

        openModalBtn.addEventListener('click', () => {
            postModal.classList.remove('hidden');
            setTimeout(() => {
                postModal.querySelector('.transform').classList.remove('scale-95');
                postModal.querySelector('.transform').classList.add('scale-100');
            }, 10);
        });

        const closeModal = () => {
            postModal.querySelector('.transform').classList.remove('scale-100');
            postModal.querySelector('.transform').classList.add('scale-95');
            setTimeout(() => { postModal.classList.add('hidden'); }, 150);
        };
        closeModalBtn.addEventListener('click', closeModal);

        // --- EDIT MODAL ---
        const editPostModal = document.getElementById('editPostModal');
        const closeEditModalBtn = document.getElementById('closeEditModalBtn');
        const cancelEditBtn = document.getElementById('cancelEditBtn');
        const editPostForm = document.getElementById('editPostForm');
        const editPostContent = document.getElementById('editPostContent');
        
        document.querySelectorAll('.open-edit-modal-btn').forEach(button => {
            button.addEventListener('click', () => {
                const postId = button.getAttribute('data-id');
                const postContentContainer = document.getElementById(`post-content-${postId}`);
                const currentContent = postContentContainer.innerText.trim();

                editPostContent.value = currentContent;
                editPostForm.action = `/posts.modifier/${postId}`; 

                editPostModal.classList.remove('hidden');
                setTimeout(() => {
                    editPostModal.querySelector('.transform').classList.remove('scale-95');
                    editPostModal.querySelector('.transform').classList.add('scale-100');
                }, 10);
            });
        });

        const closeEditModal = () => {
            editPostModal.querySelector('.transform').classList.remove('scale-100');
            editPostModal.querySelector('.transform').classList.add('scale-95');
            setTimeout(() => { editPostModal.classList.add('hidden'); }, 150);
        };

        closeEditModalBtn.addEventListener('click', closeEditModal);
        cancelEditBtn.addEventListener('click', closeEditModal);

        window.addEventListener('click', (e) => {
            if (e.target === postModal) closeModal();
            if (e.target === editPostModal) closeEditModal();
        });
    </script>
</body>
</html>