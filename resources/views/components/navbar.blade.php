<div id="navbar-container" class="fixed top-0 left-0 w-full z-[100] transition-all duration-500 ease-in-out pt-0">
    
    <nav id="navbar" class="mx-auto transition-all duration-500 ease-in-out flex items-center justify-between w-full bg-transparent border-b border-white/5 h-24 px-6">
        
        <a href="/" class="flex-shrink-0 cursor-pointer group flex items-center gap-4 relative z-[110]" onclick="scrollToTop()">
            
            <div class="w-12 h-12 bg-bukhari-gold flex items-center justify-center rounded-sm text-black font-bold text-2xl group-hover:rotate-45 transition-transform duration-300 shadow-lg shadow-bukhari-gold/20">
                B
            </div>

            <div class="flex flex-col justify-center h-full pt-1">
                <span class="text-white font-bold text-xl tracking-wide leading-none group-hover:text-bukhari-gold transition-colors">
                    البخاري
                </span>
                <span class="text-gray-400 text-[10px] tracking-[0.2em] uppercase mt-2 font-medium font-sans">
                    Ceramics & Porcelain
                </span>
            </div>
        </a>

        <div class="hidden md:flex items-center h-full">
            <div class="flex items-center gap-2 mx-6">
                <a href="/" class="text-sm font-bold {{ Request::is('/') ? 'text-bukhari-gold' : 'text-gray-300' }} hover:text-bukhari-gold transition-colors py-2 px-4">الرئيسية</a>
                <a href="{{ route('products.index') }}" class="text-sm font-bold {{ Request::is('products*') ? 'text-bukhari-gold' : 'text-gray-300' }} hover:text-bukhari-gold transition-colors py-2 px-4">الكتالوج</a>
                <a href="{{ route('about') }}" class="text-sm font-bold {{ Request::is('about') ? 'text-bukhari-gold' : 'text-gray-300' }} hover:text-bukhari-gold transition-colors py-2 px-4">عن المعرض</a>
                <a href="{{ route('contact') }}" class="text-sm font-bold {{ Request::is('contact') ? 'text-bukhari-gold' : 'text-gray-300' }} hover:text-bukhari-gold transition-colors py-2 px-4">تواصل معنا</a>
            </div>

            <a href="{{ route('contact') }}" class="bg-bukhari-gold text-black px-7 py-2.5 rounded-full font-black text-sm transition-all duration-300 hover:bg-white hover:shadow-[0_0_20px_rgba(212,175,55,0.4)]">
                اطلب استشارة
            </a>
        </div>

        <button onclick="toggleMenu()" class="md:hidden text-white w-12 h-12 flex items-center justify-center focus:outline-none z-[110] hover:text-bukhari-gold transition-colors">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </nav>

    <div id="mobile-backdrop" onclick="toggleMenu()" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-[104] opacity-0 invisible transition-all duration-500 ease-in-out"></div>

    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-[85%] max-w-[320px] bg-[#0a0a0a] z-[105] transform translate-x-full transition-transform duration-500 ease-[cubic-bezier(0.32,0.72,0,1)] shadow-2xl border-l border-white/10 flex flex-col">
        
        <div class="flex justify-between items-center p-6 border-b border-white/10">
            <span class="text-xl font-bold text-white">القائمة</span>
            <button onclick="toggleMenu()" class="text-gray-400 hover:text-red-500 transition-colors p-2 bg-white/5 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div class="flex flex-col p-6 gap-2 overflow-y-auto">
            <a href="/" class="text-lg font-bold text-gray-300 hover:text-bukhari-gold hover:bg-white/5 p-4 rounded-xl transition-all flex items-center gap-4" onclick="toggleMenu()">
                <span class="text-bukhari-gold text-xl"></span> الرئيسية
            </a>
            <a href="{{ route('products.index') }}" class="text-lg font-bold text-gray-300 hover:text-bukhari-gold hover:bg-white/5 p-4 rounded-xl transition-all flex items-center gap-4" onclick="toggleMenu()">
                <span class="text-bukhari-gold text-xl"></span> الكتالوج
            </a>
            <a href="{{ route('about') }}" class="text-lg font-bold text-gray-300 hover:text-bukhari-gold hover:bg-white/5 p-4 rounded-xl transition-all flex items-center gap-4" onclick="toggleMenu()">
                <span class="text-bukhari-gold text-xl"></span> عن المعرض
            </a>
            <a href="{{ route('contact') }}" class="text-lg font-bold text-gray-300 hover:text-bukhari-gold hover:bg-white/5 p-4 rounded-xl transition-all flex items-center gap-4" onclick="toggleMenu()">
                <span class="text-bukhari-gold text-xl"></span> تواصل معنا
            </a>

            <div class="mt-8 pt-6 border-t border-white/10">
                <a href="{{ route('contact') }}" class="block w-full bg-bukhari-gold text-black py-4 rounded-xl font-black text-center shadow-lg hover:bg-white hover:scale-[1.02] transition-all" onclick="toggleMenu()">
                    اطلب استشارة مجانية
                </a>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navContainer = document.getElementById('navbar-container');
        const nav = document.getElementById('navbar');
        const mobileMenu = document.getElementById('mobile-menu');
        const backdrop = document.getElementById('mobile-backdrop');
        
        let isOpen = false;

        // Smooth Navbar Shrink Function
        const updateNavbar = () => {
            const scrollY = window.scrollY || document.documentElement.scrollTop;

            // Base classes that always stay
            const commonClasses = "mx-auto transition-all duration-500 ease-in-out flex items-center justify-between px-6 ";

            if (scrollY > 20) {
                // === Scrolled State (The Capsule) ===
                navContainer.classList.add('py-4'); // Move container down
                navContainer.classList.remove('py-0');
                
                // Shrink width, add background, round corners
                nav.className = commonClasses + "w-[92%] md:max-w-7xl bg-[#0a0a0a]/90 backdrop-blur-xl border border-white/10 rounded-full shadow-2xl h-16";
            } else {
                // === Top State (Full Width) ===
                navContainer.classList.add('py-0'); // Move container up
                navContainer.classList.remove('py-4');

                // Full width, transparent
                nav.className = commonClasses + "w-full bg-transparent border-b border-white/5 h-24";
            }
        };

        // Listen to scroll
        window.addEventListener('scroll', updateNavbar);
        // Run once on load to set correct state
        updateNavbar();

        // Mobile Menu Logic
        window.toggleMenu = function() {
            isOpen = !isOpen;
            
            if (isOpen) {
                mobileMenu.classList.remove('translate-x-full');
                backdrop.classList.remove('opacity-0', 'invisible');
                backdrop.classList.add('opacity-100', 'visible');
                document.body.style.overflow = 'hidden';
            } else {
                mobileMenu.classList.add('translate-x-full');
                backdrop.classList.add('opacity-0', 'invisible');
                backdrop.classList.remove('opacity-100', 'visible');
                document.body.style.overflow = 'auto';
            }
        };

        window.scrollToTop = function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };
    });
</script>