<!DOCTYPE html>
<html lang="co">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkedIn Style Feed</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#f3f2ef] font-sans antialiased text-gray-900 pt-16">

    <header class="bg-white border-b border-gray-200 fixed top-0 left-0 right-0 z-50 h-14 flex items-center">
        <div class="max-w-6xl mx-auto w-full px-4 flex items-center justify-between">
            
            <div class="flex items-center gap-2 flex-1 max-w-md">
                <div class="bg-[#0a66c2] text-white font-bold text-xl px-2.5 py-1 rounded-md tracking-tighter">
                    in
                </div>
                <div class="relative w-full hidden sm:block">
                    <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 text-sm"></i>
                    <input type="text" placeholder="Search" class="w-full bg-[#edf3f8] pl-9 pr-4 py-1.5 text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 transition-all placeholder-gray-600">
                </div>
            </div>

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
                
                <div class="flex items-center gap-2 border-l border-gray-200 pl-4">
                    <div class="flex flex-col items-center justify-center min-w-[50px] cursor-pointer">
                        <div class="w-6 h-6 rounded-full bg-gray-400 text-white flex items-center justify-center text-[10px] font-bold uppercase">
                            {{ substr($user->name, 0, 1) }}
                        </div>
                        <span class="text-[11px] font-medium hidden md:inline mt-0.5">Me <i class="fa-solid fa-caret-down text-[9px]"></i></span>
                    </div>

                    <form method="POST" action="{{ route('logout') }}" class="inline m-0">
                        @csrf
                        <button type="submit" class="flex flex-col items-center justify-center min-w-[50px] text-red-600 hover:text-red-800 py-1 transition cursor-pointer" title="Logout">
                            <i class="fa-solid fa-right-from-bracket text-lg"></i>
                            <span class="text-[11px] font-medium hidden md:inline mt-0.5">Logout</span>
                        </button>
                    </form>
                </div>
            </nav>

        </div>
    </header>

    <div class="max-w-6xl mx-auto px-4 mt-6 grid grid-cols-1 md:grid-cols-4 gap-5 items-start">
        
        <aside class="col-span-1 bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden sticky top-20">
            <div class="h-14 bg-gradient-to-r align-middle from-blue-700 to-cyan-500"></div>
            
            <div class="px-4 pb-4 text-center border-b border-gray-200 relative">
                <div>
                   <img class="w-16 h-16 rounded-full bg-blue-600 text-white border-2 border-white flex items-center justify-center font-bold text-2xl uppercase mx-auto -mt-8 shadow-sm object-cover" src="{{ $user->image_url }}" alt="">
                </div>
                <h2 class="font-semibold text-gray-950 mt-3 hover:underline cursor-pointer">{{ $user->name }}</h2>
                <p class="text-xs text-gray-500 mt-1 leading-normal">{{ $user->headline }}</p>
            </div>

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

            <div class="p-3 text-xs font-semibold text-gray-700 hover:bg-gray-100 cursor-pointer flex items-center gap-2">
                <i class="fa-solid fa-bookmark text-gray-500"></i>
                <span>Saved items</span>
            </div>
        </aside>

        <main class="col-span-1 md:col-span-3 space-y-4">
            
            <button id="openModalBtn" class="w-38 py-2.5 bg-blue-600 text-white font-semibold rounded-lg shadow-sm hover:bg-blue-700 transition duration-200 cursor-pointer flex items-center justify-center gap-2">
                <i class="fa-solid fa-plus text-sm"></i> Ajouter un post
            </button>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl text-sm font-medium">
                    {{ session('success') }}
                </div>
            @endif

            @foreach($posts as $post)
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                <div class="flex items-center p-4 pb-2">
                    <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-lg uppercase shadow-inner mr-3 shrink-0">
                        <img src="{{ $post->user->image_url }}" alt="Profile Image" class="w-full h-full object-cover rounded-full">
                    </div>
                    
                    <div>
                        <h3 class="font-semibold text-gray-900 hover:text-blue-600 hover:underline cursor-pointer text-sm md:text-base">
                            {{ $post->user->name }}
                        </h3>
                        <p class="text-xs text-gray-500 flex items-center gap-1 mt-0.5">
                            <span>{{ $post->user->headline }}</span>
                            <span>•</span>
                            <span>{{ $post->created_at ? $post->created_at->diffForHumans() : 'Just now' }}</span>
                            <span>•</span>
                            <i class="fa-solid fa-earth-americas text-[10px]"></i>
                        </p>
                    </div>
                </div>

                <div id="post-content-{{ $post->id }}" class="px-4 py-3 text-sm md:text-base text-gray-800 whitespace-pre-line leading-relaxed">
                    {{ $post->content }}
                </div>

                <hr class="border-gray-100 mx-4 my-1">

                <div class="flex items-center justify-end gap-2 px-4 py-1.5 text-sm">
                    
                    <button type="button" 
                            class="open-edit-modal-btn flex items-center justify-center gap-2 text-amber-600 hover:bg-amber-50 px-4 py-2 rounded-lg transition duration-200 font-medium cursor-pointer"
                            data-id="{{ $post->id }}">
                        <i class="fa-regular fa-pen-to-square text-lg"></i>
                        <span>Modifier</span>
                    </button>
                    
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="m-0 inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce post ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="flex items-center justify-center gap-2 text-red-600 hover:bg-red-50 px-4 py-2 rounded-lg transition duration-200 font-medium cursor-pointer">
                            <i class="fa-regular fa-trash-can text-lg"></i>
                            <span>Supprimer</span>
                        </button>
                    </form>

                </div>
            </div>
            @endforeach
           
        </main>

    </div>

    <div id="postModal" class="fixed inset-0 bg-black/60 z-50 flex items-center justify-center p-4 hidden backdrop-blur-sm transition-all duration-300">
        <div class="bg-white w-full max-w-xl rounded-xl shadow-2xl border border-gray-200 overflow-hidden transform scale-95 transition-transform duration-300">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900">Create a post</h3>
                <button id="closeModalBtn" class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 w-8 h-8 rounded-full flex items-center justify-center transition cursor-pointer">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>
            <form action="{{ route('posts.store') }}" method="POST" class="m-0">
                @csrf
                <div class="p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <img class="w-12 h-12 rounded-full object-cover border border-gray-200" src="{{ $user->image_url }}" alt="Profile image">
                        <div>
                            <h4 class="font-semibold text-gray-900 text-sm">{{ $user->name }}</h4>
                            <button type="button" class="mt-0.5 px-3 py-0.5 border border-gray-500 rounded-full text-xs font-semibold text-gray-600 flex items-center gap-1 hover:bg-gray-50">
                                <i class="fa-solid fa-earth-americas text-[10px]"></i> Anyone <i class="fa-solid fa-caret-down text-[9px]"></i>
                            </button>
                        </div>
                    </div>
                    <textarea name="content" rows="5" class="w-full text-gray-800 placeholder-gray-500 bg-transparent border-0 resize-none focus:outline-none text-base md:text-lg min-h-[150px]" placeholder="What do you want to talk about?" required></textarea>
                </div>
                <div class="flex items-center justify-between px-6 py-4 border-t border-gray-200 bg-gray-50">
                    <div class="flex items-center gap-2 text-gray-500">
                        <button type="button" class="w-10 h-10 hover:bg-gray-200 text-gray-600 rounded-full flex items-center justify-center transition cursor-pointer" title="Add a photo"><i class="fa-regular fa-image text-lg text-blue-500"></i></button>
                        <button type="button" class="w-10 h-10 hover:bg-gray-200 text-gray-600 rounded-full flex items-center justify-center transition cursor-pointer" title="Add a video"><i class="fa-solid fa-video text-base text-green-600"></i></button>
                    </div>
                    <div><button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-2 rounded-full shadow-sm transition duration-150 cursor-pointer">Post</button></div>
                </div>
            </form>
        </div>
    </div>


    <div id="editPostModal" class="fixed inset-0 bg-black/60 z-50 flex items-center justify-center p-4 hidden backdrop-blur-sm transition-all duration-300">
        <div class="bg-white w-full max-w-xl rounded-xl shadow-2xl border border-gray-200 overflow-hidden transform scale-95 transition-transform duration-300">
            
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900">Modifier le post</h3>
                <button id="closeEditModalBtn" class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 w-8 h-8 rounded-full flex items-center justify-center transition cursor-pointer">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <form id="editPostForm" method="POST" class="m-0">
                @csrf
                @method('PUT') <div class="p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <img class="w-12 h-12 rounded-full object-cover border border-gray-200" src="{{ $user->image_url }}" alt="Profile image">
                        <div>
                            <h4 class="font-semibold text-gray-900 text-sm">{{ $user->name }}</h4>
                            <span class="mt-0.5 px-3 py-0.5 border border-gray-300 rounded-full text-xs font-semibold text-gray-500 flex items-center gap-1 bg-gray-50 w-max">
                                <i class="fa-solid fa-earth-americas text-[10px]"></i> Modification
                            </span>
                        </div>
                    </div>

                    <textarea 
                        id="editPostContent"
                        name="content" 
                        rows="5" 
                        class="w-full text-gray-800 placeholder-gray-500 bg-transparent border-0 resize-none focus:outline-none text-base md:text-lg min-h-[150px]" 
                        required></textarea>
                </div>

                <div class="flex items-center justify-end px-6 py-4 border-t border-gray-200 bg-gray-50 gap-2">
                    <button type="button" id="cancelEditBtn" class="border border-gray-300 hover:bg-gray-100 text-gray-700 text-sm font-semibold px-5 py-2 rounded-full transition cursor-pointer">
                        Annuler
                    </button>
                    <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white text-sm font-semibold px-5 py-2 rounded-full shadow-sm transition duration-150 cursor-pointer">
                        Enregistrer
                    </button>
                </div>
            </form>

        </div>
    </div>


    <script>
        // --- LOGIC DIAL CREATE MODAL ---
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


        // --- LOGIC DIAL EDIT MODAL ---
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

                // 1. Injecter l-text wast l-textarea
                editPostContent.value = currentContent;

                // 2. Changer l'action dynamic matchan m3a route: /posts.modifier/{id}
                editPostForm.action = `/posts.modifier/${postId}`; 

                // 3. Ouvrir la modal avec animation
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

        // Fermer les modals si on clique à l'extérieur
        window.addEventListener('click', (e) => {
            if (e.target === postModal) closeModal();
            if (e.target === editPostModal) closeEditModal();
        });
    </script>

</body>
</html>