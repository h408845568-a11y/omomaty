<header class="sticky top-0 z-50 w-full backdrop-blur-md bg-[#FFFDF9]/90 border-b border-[#F0EBE1] transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Logo Section -->
            <a href="#hero" class="flex items-center gap-3 group focus:outline-none focus-visible:ring-2 focus-visible:ring-[#5F9B79] rounded-xl p-1 transition">
                <!-- Icon Emblem -->
                <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-2xl bg-[#F6EFE6] flex items-center justify-center shadow-xs border border-[#E8DFD3] group-hover:scale-105 transition-transform duration-300 overflow-hidden p-1">
                    <img src="{{ asset('images/logo-transparent.png') }}" alt="شعار أمومتي" class="w-full h-full object-contain">
                </div>

                <!-- Text Branding -->
                <div class="flex flex-col text-right">
                    <span class="text-2xl font-black text-[#487B5E] tracking-tight group-hover:text-[#5F9B79] transition-colors font-tajawal">
                        أمومتي
                    </span>
                    <span class="text-[11px] font-medium text-[#7A8B7B] -mt-1 hidden sm:block tracking-wide">
                        رفيقتكِ من الحمل إلى أول عامين
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-1 lg:gap-2">
                <a href="#hero" class="px-3.5 py-2 text-sm font-semibold text-[#4A5568] hover:text-[#487B5E] hover:bg-[#F0F6F2] rounded-full transition-all">
                    الرئيسية
                </a>
                <a href="#stages" class="px-3.5 py-2 text-sm font-semibold text-[#4A5568] hover:text-[#487B5E] hover:bg-[#F0F6F2] rounded-full transition-all">
                    محطات الرحلة
                </a>
                <a href="#tools" class="px-3.5 py-2 text-sm font-semibold text-[#4A5568] hover:text-[#487B5E] hover:bg-[#F0F6F2] rounded-full transition-all">
                    مميزات المنصة
                </a>
                <a href="#how-it-works" class="px-3.5 py-2 text-sm font-semibold text-[#4A5568] hover:text-[#487B5E] hover:bg-[#F0F6F2] rounded-full transition-all">
                    كيف تعمل
                </a>
            </nav>

            <!-- Action Buttons (Desktop) -->
            <div class="hidden sm:flex items-center gap-3">
                <!-- Login Button (Soft Grey) -->
                <a href="#login" class="px-4 py-2 text-sm font-medium text-[#4A5568] bg-[#F4F1EA] hover:bg-[#ECE7DC] hover:text-[#2D3748] rounded-full border border-[#E7E0D3]/70 transition-all duration-200">
                    تسجيل الدخول
                </a>

                <!-- Primary CTA Button (Green Pill) -->
                <a href="#cta" class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-bold text-white bg-[#5F9B79] hover:bg-[#487B5E] rounded-full shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200">
                    <span>ابدئي رحلتكِ مجاناً</span>
                    <svg class="w-4 h-4 rtl:rotate-180 transform group-hover:-translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>

            <!-- Mobile Hamburger Toggle -->
            <div class="flex items-center md:hidden">
                <button type="button" id="mobile-menu-toggle" aria-expanded="false" aria-label="فتح القائمة الرئيسية" class="p-2.5 rounded-xl text-[#4A5568] hover:text-[#487B5E] hover:bg-[#F0F6F2] focus:outline-none focus:ring-2 focus:ring-[#5F9B79]">
                    <svg id="menu-open-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="menu-close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Dropdown Panel -->
    <div id="mobile-menu" class="hidden md:hidden border-b border-[#F0EBE1] bg-[#FFFDF9]/98 px-4 pt-3 pb-6 transition-all duration-300">
        <div class="flex flex-col space-y-2">
            <a href="#hero" class="mobile-nav-link block px-4 py-2.5 rounded-xl text-base font-semibold text-[#4A5568] hover:text-[#487B5E] hover:bg-[#F0F6F2] transition">
                الرئيسية
            </a>
            <a href="#stages" class="mobile-nav-link block px-4 py-2.5 rounded-xl text-base font-semibold text-[#4A5568] hover:text-[#487B5E] hover:bg-[#F0F6F2] transition">
                محطات الرحلة
            </a>
            <a href="#tools" class="mobile-nav-link block px-4 py-2.5 rounded-xl text-base font-semibold text-[#4A5568] hover:text-[#487B5E] hover:bg-[#F0F6F2] transition">
                مميزات المنصة
            </a>
            <a href="#how-it-works" class="mobile-nav-link block px-4 py-2.5 rounded-xl text-base font-semibold text-[#4A5568] hover:text-[#487B5E] hover:bg-[#F0F6F2] transition">
                كيف تعمل
            </a>

            <!-- Mobile Action Buttons -->
            <div class="pt-4 mt-2 border-t border-[#F0EBE1] flex flex-col gap-2.5">
                <a href="#login" class="w-full text-center px-4 py-2.5 text-sm font-medium text-[#4A5568] bg-[#F4F1EA] hover:bg-[#ECE7DC] rounded-full transition">
                    تسجيل الدخول
                </a>
                <a href="#cta" class="w-full inline-flex justify-center items-center gap-2 px-5 py-3 text-sm font-bold text-white bg-[#5F9B79] hover:bg-[#487B5E] rounded-full shadow-sm transition">
                    <span>ابدئي رحلتكِ مجاناً</span>
                    <svg class="w-4 h-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleBtn = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const openIcon = document.getElementById('menu-open-icon');
        const closeIcon = document.getElementById('menu-close-icon');
        const navLinks = document.querySelectorAll('.mobile-nav-link');

        if (toggleBtn && mobileMenu) {
            toggleBtn.addEventListener('click', () => {
                const isOpen = !mobileMenu.classList.contains('hidden');
                if (isOpen) {
                    mobileMenu.classList.add('hidden');
                    openIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    toggleBtn.setAttribute('aria-expanded', 'false');
                } else {
                    mobileMenu.classList.remove('hidden');
                    openIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                    toggleBtn.setAttribute('aria-expanded', 'true');
                }
            });

            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    openIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    toggleBtn.setAttribute('aria-expanded', 'false');
                });
            });
        }
    });
</script>

