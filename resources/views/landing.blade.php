@extends('layouts.app')

@section('content')

    <!-- ========================================== -->
    <!-- 1. HERO SECTION (#hero)                     -->
    <!-- ========================================== -->
    <section id="hero" class="relative overflow-hidden pt-8 pb-16 lg:pt-16 lg:pb-24">
        <!-- Ambient Background Glows -->
        <div class="absolute top-10 right-1/4 w-96 h-96 bg-[#FCE4E4]/40 rounded-full blur-3xl pointer-events-none -z-10"></div>
        <div class="absolute top-32 left-10 w-96 h-96 bg-[#E8F4EC]/60 rounded-full blur-3xl pointer-events-none -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

                <!-- Right Side: Arabic Content & Value Propositions (7 cols on lg) -->
                <div class="lg:col-span-7 space-y-6 sm:space-y-8 text-right">

                    <!-- Top Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#FCE4E4] border border-[#FAD0D0] text-[#B45353] text-xs sm:text-sm font-bold shadow-xs">
                        <span class="text-[#E6A2A2] text-sm animate-pulse">♥</span>
                        <span>رفيقتكِ الموثوقة في كل خطوة</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[46px] font-black text-[#263238] leading-[1.3] lg:leading-[1.25] tracking-tight">
                        معكِ في كل خطوة،
                        <span class="block text-[#487B5E] mt-1">
                            من نبضات الحمل الأولى
                        </span>
                        <span class="relative inline-block mt-1">
                            حتى خطوته الأولى في الحياة
                            <svg class="absolute -bottom-2 right-0 w-full h-3 text-[#E6A2A2]/70 -z-10" viewBox="0 0 250 12" fill="none">
                                <path d="M3 9C60 3 190 3 247 9" stroke="currentColor" stroke-width="6" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </h1>

                    <!-- Subtitle Description -->
                    <p class="text-base sm:text-lg text-[#55675C] leading-relaxed max-w-2xl font-normal">
                        منصة عربية ذكية ومتكاملة ترافقكِ بإرشادات طبية موثوقة، وأدوات متابعة دقيقة لحملكِ ونمو طفلكِ، لتنعمي برحلة أمومة مفعمة بالطمأنينة والحب وراحة البال.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 pt-2">
                        <!-- Primary CTA -->
                        <a href="#cta" class="inline-flex justify-center items-center gap-2.5 px-8 py-3.5 rounded-full bg-[#5F9B79] hover:bg-[#487B5E] text-white font-bold text-base shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 group">
                            <span>ابدئي رحلتكِ مجاناً</span>
                            <span class="text-lg font-normal transition-transform duration-200 rtl:rotate-180 group-hover:-translate-x-1">→</span>
                        </a>

                        <!-- Secondary CTA -->
                        <a href="#tools" class="inline-flex justify-center items-center gap-2 px-6 py-3.5 rounded-full bg-white hover:bg-[#FAF7F0] text-[#4A5568] hover:text-[#487B5E] font-semibold text-base border border-[#E4DDD0] shadow-xs hover:border-[#5F9B79]/50 transition-all duration-200">
                            <svg class="w-5 h-5 text-[#5F9B79]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>استكشفي المميزات</span>
                        </a>
                    </div>

                    <!-- 4 Icon-Value Propositions Grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 pt-6 border-t border-[#EFE8DC]">
                        <!-- Proposition 1 -->
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-xs sm:text-sm font-bold text-[#3B4D41] leading-tight">محتوى تثقيفي موثوق</span>
                        </div>

                        <!-- Proposition 2 -->
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#FCE4E4] text-[#B45353] flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <span class="text-xs sm:text-sm font-bold text-[#3B4D41] leading-tight">خصوصية تامة</span>
                        </div>

                        <!-- Proposition 3 -->
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#FFF4E5] text-[#B26A18] flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <span class="text-xs sm:text-sm font-bold text-[#3B4D41] leading-tight">سهلة وبسيطة</span>
                        </div>

                        <!-- Proposition 4 -->
                        <div class="flex items-center gap-2.5">
                            <div class="w-9 h-9 rounded-xl bg-[#EBEBFF] text-[#5550B3] flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-xs sm:text-sm font-bold text-[#3B4D41] leading-tight">مجانية بالكامل</span>
                        </div>
                    </div>

                </div>

                <!-- Left Side: Visual Card Stack (5 cols on lg) -->
                <div class="lg:col-span-5 relative mt-4 lg:mt-0">

                    <!-- Decorative Card Stack Outer Glow -->
                    <div class="relative mx-auto max-w-md lg:max-w-none">

                        <!-- Main Central Showcase Card -->
                        <div class="rounded-3xl bg-white p-6 sm:p-7 shadow-[0_20px_50px_rgba(72,123,94,0.08)] border border-[#ECE5D8] relative z-10 overflow-hidden">

                            <!-- Card Header Info -->
                            <div class="flex items-center justify-between pb-4 border-b border-[#F4EFE6]">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-[#EBF5EF] flex items-center justify-center text-[#487B5E]">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h2 class="text-sm font-bold text-[#2D3748]">ملف صغيري</h2>
                                        <p class="text-xs text-[#7A8B7B]">متابعة يومية نشطة • حالة ممتازة</p>
                                    </div>
                                </div>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-bold bg-[#E8F4EC] text-[#3B7B54]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#5F9B79] ml-1.5 animate-pulse"></span>
                                    متصل الآن
                                </span>
                            </div>

                            <!-- Mother & Baby Illustration Card Placeholder / Visual -->
                            <div class="my-5 rounded-2xl bg-gradient-to-b from-[#F9F7F2] to-[#F1F7F3] p-5 text-center relative overflow-hidden border border-[#E9E3D6]">
                                <!-- Tender Illustration Graphic -->
                                <div class="w-28 h-28 mx-auto relative mb-3 flex items-center justify-center">
                                    <!-- Soft Sun/Halo -->
                                    <div class="absolute inset-0 rounded-full bg-[#FCE4E4]/40 scale-110 blur-sm"></div>
                                    <img src="{{ asset('images/logo-transparent.png') }}" alt="أمومتي" class="w-24 h-24 object-contain relative z-10 drop-shadow-xs">
                                </div>
                                <h3 class="text-base font-bold text-[#2D3748]">رحلة نمو طفلكِ تسير بسعادة</h3>
                                <p class="text-xs text-[#6B7B70] mt-1 max-w-xs mx-auto">
                                    أنتِ تقومين بعمل رائع! صغيركِ ينمو بصحة جيدة كل يوم.
                                </p>
                            </div>

                            <!-- Quick Stats Row inside Card -->
                            <div class="grid grid-cols-2 gap-3 pt-1">
                                <div class="bg-[#FAF8F5] p-3 rounded-xl border border-[#EDE7DD]">
                                    <span class="text-[11px] text-[#7A8B7B] block font-medium">العمر / المرحلة</span>
                                    <strong class="text-sm font-bold text-[#487B5E] block mt-0.5">الشهر الرابع (16 أسبوعاً)</strong>
                                </div>
                                <div class="bg-[#FAF8F5] p-3 rounded-xl border border-[#EDE7DD]">
                                    <span class="text-[11px] text-[#7A8B7B] block font-medium">حالة التغذية</span>
                                    <strong class="text-sm font-bold text-[#487B5E] block mt-0.5">رضاعة طبيعية منتظمة</strong>
                                </div>
                            </div>

                        </div>

                        <!-- Floating Card 1: Week Status Badge (Top-left floating) -->
                        <div class="absolute -top-6 -left-4 sm:-left-8 z-20 bg-white/95 backdrop-blur-md p-4 rounded-2xl shadow-lg border border-[#F2EDE3] max-w-[240px] transform -rotate-1 hover:rotate-0 transition-transform">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-lg bg-[#FCE4E4] text-[#B45353] flex items-center justify-center shrink-0">
                                    <span class="text-sm">🍈</span>
                                </div>
                                <div>
                                    <span class="text-[11px] font-bold text-[#B45353] block">الأسبوع 24 من الحمل</span>
                                    <span class="text-xs font-semibold text-[#2D3748]">بحجم حبة الشمام ✨</span>
                                </div>
                            </div>
                            <div class="mt-2.5">
                                <div class="flex justify-between text-[10px] text-[#7A8B7B] mb-1">
                                    <span>تقدم الحمل</span>
                                    <span class="font-bold text-[#487B5E]">60%</span>
                                </div>
                                <div class="w-full bg-[#EAE5DC] h-1.5 rounded-full overflow-hidden">
                                    <div class="bg-[#5F9B79] h-full rounded-full" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Card 2: Upcoming Vaccination Alert Card (Bottom-right floating) -->
                        <div class="absolute -bottom-6 -right-4 sm:-right-6 z-20 bg-white/95 backdrop-blur-md p-4 rounded-2xl shadow-xl border border-[#EBE3D5] max-w-[260px] transform rotate-1 hover:rotate-0 transition-transform">
                            <div class="flex items-start gap-3">
                                <div class="w-9 h-9 rounded-xl bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 relative">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#E6A2A2] absolute -top-0.5 -right-0.5 ring-2 ring-white"></span>
                                </div>
                                <div class="space-y-0.5 text-right">
                                    <span class="text-[11px] font-bold text-[#E6A2A2] uppercase tracking-wide block">تنبيه ذكي</span>
                                    <h4 class="text-xs font-bold text-[#2D3748]">جرعة التطعيم القادمة</h4>
                                    <p class="text-[11px] text-[#617366] leading-tight">تطعيم الشهر الرابع • بعد 3 أيام</p>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Card 3: Vital Heartbeat Indicator (Bottom-left mini) -->
                        <div class="hidden sm:flex items-center gap-2 absolute top-1/2 -left-8 z-20 bg-white/95 backdrop-blur-md px-3.5 py-2 rounded-xl shadow-md border border-[#F0EBE0]">
                            <span class="text-xs animate-pulse text-[#E6A2A2]">❤️</span>
                            <div class="text-right">
                                <span class="text-[10px] text-[#7A8B7B] block font-medium">نبض الجنين</span>
                                <span class="text-xs font-bold text-[#487B5E]">142 نبضة/د (طبيعي)</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 2. JOURNEY STAGES SECTION (#stages)        -->
    <!-- ========================================== -->
    <section id="stages" class="py-16 lg:py-24 bg-[#FAF7F2] border-y border-[#ECE5D8] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
                <div class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-[#E8F4EC] text-[#487B5E] text-xs font-bold">
                    <span>خارطة طريق متكاملة</span>
                </div>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#263238] tracking-tight">
                    محطات رحلتكِ الرائعة
                </h2>
                <p class="text-sm sm:text-base text-[#617366] leading-relaxed">
                    من التخطيط والشهور الأولى للحمل إلى خطوات طفلكِ الأولى، صممنا دليلاً علمياً يواكب كل لحظة باحتياجاتها الدقيقة.
                </p>
            </div>

            <!-- 3 Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Stage 1 Card -->
                <div class="group rounded-3xl bg-white p-7 shadow-xs hover:shadow-xl border border-[#ECE5D8] hover:border-[#E6A2A2]/60 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <!-- Subtle Accent Bar -->
                    <div class="absolute top-0 right-0 left-0 h-1.5 bg-gradient-to-r from-[#FCE4E4] to-[#E6A2A2]"></div>

                    <div>
                        <!-- Header & Badge -->
                        <div class="flex items-center justify-between mb-5">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-[#FCE4E4] text-[#B45353]">
                                المرحلة الأولى
                            </span>
                            <div class="w-10 h-10 rounded-2xl bg-[#FFF5F5] text-[#E6A2A2] flex items-center justify-center font-black text-sm">
                                01
                            </div>
                        </div>

                        <!-- Stage Title & Description -->
                        <h3 class="text-xl font-bold text-[#263238] mb-2 group-hover:text-[#487B5E] transition-colors">
                            رحلة الحمل (أسبوع بأسبوع)
                        </h3>
                        <p class="text-xs sm:text-sm text-[#617366] leading-relaxed mb-6">
                            مرافقة طبية شاملة لمتابعة تطور جنينك وتغيرات جسمك من أول اختبار إيجابي وحتى لحظة الولادة.
                        </p>

                        <!-- Feature List -->
                        <ul class="space-y-3 text-xs sm:text-sm text-[#4A5568]">
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 text-xs">✓</span>
                                <span>متابعة تفصيلية لتطور حجم الجنين وأعضائه أسبوعاً بأسبوع.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 text-xs">✓</span>
                                <span>دليل التغذية الصحية، الفيتامينات، والتعامل مع الغثيان والإرهاق.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 text-xs">✓</span>
                                <span>منبه الفحوصات والتحاليل الطبية وجلسات الموجات فوق الصوتية.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 text-xs">✓</span>
                                <span>حاسبة موعد الولادة المتوقع والعد التنازلي لحقيبة المستشفى.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Bottom Action Link -->
                    <div class="pt-6 mt-6 border-t border-[#F2ECE1]">
                        <a href="#tools" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#487B5E] group-hover:text-[#5F9B79]">
                            <span>استكشفي أدوات الحمل</span>
                            <span class="text-sm rtl:rotate-180">←</span>
                        </a>
                    </div>
                </div>

                <!-- Stage 2 Card -->
                <div class="group rounded-3xl bg-white p-7 shadow-xs hover:shadow-xl border-2 border-[#5F9B79]/40 hover:border-[#5F9B79] transition-all duration-300 flex flex-col justify-between relative overflow-hidden ring-4 ring-[#5F9B79]/5">
                    <!-- Subtle Accent Bar -->
                    <div class="absolute top-0 right-0 left-0 h-1.5 bg-gradient-to-r from-[#5F9B79] to-[#487B5E]"></div>

                    <div>
                        <!-- Header & Badge -->
                        <div class="flex items-center justify-between mb-5">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-[#E8F4EC] text-[#3B7B54]">
                                المرحلة الثانية • الأكثر طلباً
                            </span>
                            <div class="w-10 h-10 rounded-2xl bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center font-black text-sm">
                                02
                            </div>
                        </div>

                        <!-- Stage Title & Description -->
                        <h3 class="text-xl font-bold text-[#263238] mb-2 group-hover:text-[#487B5E] transition-colors">
                            الأشهر الأولى (0 - 6 أشهر)
                        </h3>
                        <p class="text-xs sm:text-sm text-[#617366] leading-relaxed mb-6">
                            تجاوزي فترة التكيف الأولى مع صغيركِ بثقة وهدوء، من أساسيات الرضاعة إلى النوم والمهارات الأولى.
                        </p>

                        <!-- Feature List -->
                        <ul class="space-y-3 text-xs sm:text-sm text-[#4A5568]">
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 text-xs">✓</span>
                                <span>مرشد شامل للرضاعة الطبيعية والصناعية وتنظيم جدول النوم.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 text-xs">✓</span>
                                <span>أداة تفاعلية لفك شفرات بكاء الرضيع والتعامل مع المغص والغازات.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 text-xs">✓</span>
                                <span>متابعة دورية لمنحنيات زيادة الوزن وتطور المهارات الحركية والبصرية.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 text-xs">✓</span>
                                <span>جدول التطعيمات الأساسية مع تنبيهات مسبقة لمواعيد المراكز الصحية.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Bottom Action Link -->
                    <div class="pt-6 mt-6 border-t border-[#F2ECE1]">
                        <a href="#tools" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#487B5E] group-hover:text-[#5F9B79]">
                            <span>استكشفي رعاية الرضيع</span>
                            <span class="text-sm rtl:rotate-180">←</span>
                        </a>
                    </div>
                </div>

                <!-- Stage 3 Card -->
                <div class="group rounded-3xl bg-white p-7 shadow-xs hover:shadow-xl border border-[#ECE5D8] hover:border-[#E8A548]/60 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <!-- Subtle Accent Bar -->
                    <div class="absolute top-0 right-0 left-0 h-1.5 bg-gradient-to-r from-[#FEF3E2] to-[#E8A548]"></div>

                    <div>
                        <!-- Header & Badge -->
                        <div class="flex items-center justify-between mb-5">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-[#FEF3E2] text-[#A86716]">
                                المرحلة الثالثة
                            </span>
                            <div class="w-10 h-10 rounded-2xl bg-[#FFF9F0] text-[#A86716] flex items-center justify-center font-black text-sm">
                                03
                            </div>
                        </div>

                        <!-- Stage Title & Description -->
                        <h3 class="text-xl font-bold text-[#263238] mb-2 group-hover:text-[#487B5E] transition-colors">
                            خطواته الأولى (6 أشهر - سنتين)
                        </h3>
                        <p class="text-xs sm:text-sm text-[#617366] leading-relaxed mb-6">
                            مرحلة الانطلاق واستكشاف العالم، من إدخال الطعام الصلب وحتى الكلمات والخطوات المستقلة الأولى.
                        </p>

                        <!-- Feature List -->
                        <ul class="space-y-3 text-xs sm:text-sm text-[#4A5568]">
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 text-xs">✓</span>
                                <span>جدول إدخال الأطعمة الصلبة ووصفات وجبات مغذية تلائم كل شهر.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 text-xs">✓</span>
                                <span>تتبع المعالم النمائية الكبرى: الحبو، الجلوس، المشي، وبدايات النطق.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 text-xs">✓</span>
                                <span>أنشطة وألعاب منزلية لتنمية الذكاء والتنسيق الحركي والتواصل اللغوي.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center shrink-0 mt-0.5 text-xs">✓</span>
                                <span>إرشادات مرحلة التسنين، تقليل نوبات الغضب، وتأمين بيئة المنزل للطفل.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Bottom Action Link -->
                    <div class="pt-6 mt-6 border-t border-[#F2ECE1]">
                        <a href="#tools" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#487B5E] group-hover:text-[#5F9B79]">
                            <span>استكشفي مرحلة الانطلاق</span>
                            <span class="text-sm rtl:rotate-180">←</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 3. SMART DAILY TOOLS SECTION (#tools)      -->
    <!-- ========================================== -->
    <section id="tools" class="py-16 lg:py-24 bg-[#FFFDF9] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
                <div class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-[#FCE4E4] text-[#B45353] text-xs font-bold">
                    <span>تقنيات مساندة لأمومتكِ</span>
                </div>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#263238] tracking-tight">
                    أدواتكِ اليومية الذكية
                </h2>
                <p class="text-sm sm:text-base text-[#617366] leading-relaxed">
                    صممنا لكِ باقة من الأدوات الرقمية التفاعلية المعتمدة طبياً، لتكوني دائماً على دراية بكل تفصيلة تخص صحة صغيركِ.
                </p>
            </div>

            <!-- 6-Card Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">

                <!-- Tool 1: حاسبة وتتبع نمو الطفل (WHO) -->
                <div class="group rounded-3xl bg-white p-7 border border-[#EFE8DC] hover:border-[#5F9B79] shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-2xl bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <span class="text-[11px] font-bold px-2.5 py-1 rounded-full bg-[#E8F4EC] text-[#3B7B54]">معايير WHO</span>
                        </div>
                        <h3 class="text-lg font-bold text-[#263238] mb-2 group-hover:text-[#487B5E] transition-colors">
                            حاسبة وتتبع نمو الطفل (WHO)
                        </h3>
                        <p class="text-xs sm:text-sm text-[#617366] leading-relaxed">
                            مقارنة فورية لقياسات وزن طفلك وطوله ومحيط رأسه بمنحنيات منظمة الصحة العالمية الرسمية والتأكد من وتيرة النمو الطبيعية.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#F4EFE6] flex items-center justify-between text-xs font-bold text-[#487B5E]">
                        <span>منحنيات بيانية تفاعلية</span>
                        <span class="text-sm rtl:rotate-180">←</span>
                    </div>
                </div>

                <!-- Tool 2: جدول التطعيمات المخصص -->
                <div class="group rounded-3xl bg-white p-7 border border-[#EFE8DC] hover:border-[#5F9B79] shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-2xl bg-[#FCE4E4] text-[#B45353] flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span class="text-[11px] font-bold px-2.5 py-1 rounded-full bg-[#FCE4E4] text-[#B45353]">تنبيهات استباقية</span>
                        </div>
                        <h3 class="text-lg font-bold text-[#263238] mb-2 group-hover:text-[#487B5E] transition-colors">
                            جدول التطعيمات المخصص
                        </h3>
                        <p class="text-xs sm:text-sm text-[#617366] leading-relaxed">
                            جدول ذكي ينشأ بناءً على تاريخ ميلاد طفلك مع إشعارات وتنبيهات مسبقة قبل كل جرعة لقاح لتفادي أي تأخير صحي.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#F4EFE6] flex items-center justify-between text-xs font-bold text-[#487B5E]">
                        <span>تذكيرات SMS وإشعارات</span>
                        <span class="text-sm rtl:rotate-180">←</span>
                    </div>
                </div>

                <!-- Tool 3: مرشد التغذية ووصفات الوجبات -->
                <div class="group rounded-3xl bg-white p-7 border border-[#EFE8DC] hover:border-[#5F9B79] shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-2xl bg-[#FFF4E5] text-[#B26A18] flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <span class="text-[11px] font-bold px-2.5 py-1 rounded-full bg-[#FFF4E5] text-[#A86716]">+150 وصفة</span>
                        </div>
                        <h3 class="text-lg font-bold text-[#263238] mb-2 group-hover:text-[#487B5E] transition-colors">
                            مرشد التغذية ووصفات الوجبات
                        </h3>
                        <p class="text-xs sm:text-sm text-[#617366] leading-relaxed">
                            قوائم وجبات غنية بالعناصر الأساسية للأم الحامل والرضيع، مع جدول استبعاد مسببات الحساسية وقواعد الأطعمة الممنوعة والمسموحة.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#F4EFE6] flex items-center justify-between text-xs font-bold text-[#487B5E]">
                        <span>وصفات حسب عمر الرضيع</span>
                        <span class="text-sm rtl:rotate-180">←</span>
                    </div>
                </div>

                <!-- Tool 4: دليل "افهمي بكاء طفلك" -->
                <div class="group rounded-3xl bg-white p-7 border border-[#EFE8DC] hover:border-[#5F9B79] shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-2xl bg-[#EBEBFF] text-[#5550B3] flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-[11px] font-bold px-2.5 py-1 rounded-full bg-[#EBEBFF] text-[#5550B3]">دليل فوري</span>
                        </div>
                        <h3 class="text-lg font-bold text-[#263238] mb-2 group-hover:text-[#487B5E] transition-colors">
                            دليل "افهمي بكاء طفلك"
                        </h3>
                        <p class="text-xs sm:text-sm text-[#617366] leading-relaxed">
                            أداة تفاعلية تساعدك في تحليل نبرة ونمط بكاء رضيعك ومعرفة ما إذا كان جائعاً، متألماً من الغازات، يشعر بالنعاس، أو يحتاج للهدوء.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#F4EFE6] flex items-center justify-between text-xs font-bold text-[#487B5E]">
                        <span>حلول سريعة لتهدئة الرضيع</span>
                        <span class="text-sm rtl:rotate-180">←</span>
                    </div>
                </div>

                <!-- Tool 5: حقيبة الولادة ومستلزمات الطفل -->
                <div class="group rounded-3xl bg-white p-7 border border-[#EFE8DC] hover:border-[#5F9B79] shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-2xl bg-[#FCE4E4] text-[#B45353] flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                            <span class="text-[11px] font-bold px-2.5 py-1 rounded-full bg-[#FCE4E4] text-[#B45353]">قائمة فحص تفاعلية</span>
                        </div>
                        <h3 class="text-lg font-bold text-[#263238] mb-2 group-hover:text-[#487B5E] transition-colors">
                            حقيبة الولادة ومستلزمات الطفل
                        </h3>
                        <p class="text-xs sm:text-sm text-[#617366] leading-relaxed">
                            قوائم منظمة لمستلزمات الأم والمولود والمستشفى قابلة للتعديل والطباعة لضمان جهوزيتكِ الكاملة قبل أسابيع من موعد الولادة.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#F4EFE6] flex items-center justify-between text-xs font-bold text-[#487B5E]">
                        <span>جاهزة للحفظ والطباعة</span>
                        <span class="text-sm rtl:rotate-180">←</span>
                    </div>
                </div>

                <!-- Tool 6: مجتمع "أمومتي" الدافئ -->
                <div class="group rounded-3xl bg-white p-7 border border-[#EFE8DC] hover:border-[#5F9B79] shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-2xl bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="text-[11px] font-bold px-2.5 py-1 rounded-full bg-[#E8F4EC] text-[#3B7B54]">مجتمع آمن</span>
                        </div>
                        <h3 class="text-lg font-bold text-[#263238] mb-2 group-hover:text-[#487B5E] transition-colors">
                            مجتمع "أمومتي" الدافئ
                        </h3>
                        <p class="text-xs sm:text-sm text-[#617366] leading-relaxed">
                            مساحة نسائية آمنة وموثوقة لمشاركة المشاعر، تبادل النصائح الحقيقية، والتواصل مع أمهات يمررن بنفس أسبوع الحمل أو عمر الرضيع.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#F4EFE6] flex items-center justify-between text-xs font-bold text-[#487B5E]">
                        <span>تبادل تجارب بإشراف مختص</span>
                        <span class="text-sm rtl:rotate-180">←</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 4. HOW IT WORKS SECTION (#how-it-works)    -->
    <!-- ========================================== -->
    <section id="how-it-works" class="py-16 lg:py-24 bg-[#FAF7F2] border-t border-[#ECE5D8] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <div class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-[#E8F4EC] text-[#487B5E] text-xs font-bold">
                    <span>انطلاقة سريعة وسهلة</span>
                </div>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-[#263238] tracking-tight">
                    كيف تعمل أمومتي؟
                </h2>
                <p class="text-sm sm:text-base text-[#617366] leading-relaxed">
                    ثلاث خطوات بسيطة فقط تبدأ بعدها رحلة طمأنينتكِ معنا، مجاناً وبكل خصوصية.
                </p>
            </div>

            <!-- Steps Cards Grid with RTL Connector Lines -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">

                <!-- Step 1 -->
                <div class="bg-white rounded-3xl p-8 border border-[#ECE5D8] shadow-xs relative text-center flex flex-col items-center">
                    <!-- Step Badge -->
                    <div class="w-14 h-14 rounded-2xl bg-[#E8F4EC] text-[#487B5E] flex items-center justify-center font-black text-xl mb-6 shadow-xs border border-[#D5E8DD]">
                        01
                    </div>
                    <h3 class="text-lg font-bold text-[#263238] mb-3">أنشئي حسابكِ بسهولة</h3>
                    <p class="text-xs sm:text-sm text-[#617366] leading-relaxed">
                        تسجيل فوري خلال أقل من دقيقة باستخدام بريدكِ الإلكتروني، دون الحاجة لأي بيانات بنكية، وبسرية تامة.
                    </p>
                    <div class="mt-5 inline-flex items-center gap-1 text-[11px] font-bold text-[#487B5E] bg-[#F0F6F2] px-3 py-1 rounded-full">
                        <span>✓ مجاني 100% مدى الحياة</span>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="bg-white rounded-3xl p-8 border border-[#ECE5D8] shadow-xs relative text-center flex flex-col items-center">
                    <!-- Step Badge -->
                    <div class="w-14 h-14 rounded-2xl bg-[#FCE4E4] text-[#B45353] flex items-center justify-center font-black text-xl mb-6 shadow-xs border border-[#F5D4D4]">
                        02
                    </div>
                    <h3 class="text-lg font-bold text-[#263238] mb-3">اختاري مرحلتكِ الحالية</h3>
                    <p class="text-xs sm:text-sm text-[#617366] leading-relaxed">
                        حددي ما إذا كنتِ تخططين للحمل، حاملاً في أي أسبوع، أو لديكِ طفل حديث الولادة لتخصيص كل أداة ومقال لاحتياجاتكِ.
                    </p>
                    <div class="mt-5 inline-flex items-center gap-1 text-[11px] font-bold text-[#B45353] bg-[#FFF0F0] px-3 py-1 rounded-full">
                        <span>✓ تخصيص ذكي فوري</span>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="bg-white rounded-3xl p-8 border border-[#ECE5D8] shadow-xs relative text-center flex flex-col items-center">
                    <!-- Step Badge -->
                    <div class="w-14 h-14 rounded-2xl bg-[#FFF4E5] text-[#A86716] flex items-center justify-center font-black text-xl mb-6 shadow-xs border border-[#FBE3C5]">
                        03
                    </div>
                    <h3 class="text-lg font-bold text-[#263238] mb-3">تابعي رحلتكِ بأدوات مخصصة</h3>
                    <p class="text-xs sm:text-sm text-[#617366] leading-relaxed">
                        احصلي يومياً على نصائح أسبوعية، منبهات مواعيد التطعيمات، ومتابعة نمو طفلكِ لحظة بلحظة براحة واطمئنان.
                    </p>
                    <div class="mt-5 inline-flex items-center gap-1 text-[11px] font-bold text-[#A86716] bg-[#FFF8EB] px-3 py-1 rounded-full">
                        <span>✓ راحة بال ودعم مستمر</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 5. CTA BANNER SECTION (#cta)               -->
    <!-- ========================================== -->
    <section id="cta" class="py-16 lg:py-20 bg-[#FFFDF9] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl bg-gradient-to-br from-[#5F9B79] via-[#487B5E] to-[#39634B] text-white p-8 sm:p-12 lg:p-16 relative overflow-hidden shadow-2xl">

                <!-- Decorative Background Elements -->
                <div class="absolute -top-24 -left-24 w-80 h-80 rounded-full bg-white/10 blur-2xl pointer-events-none"></div>
                <div class="absolute -bottom-24 -right-24 w-80 h-80 rounded-full bg-[#E6A2A2]/20 blur-2xl pointer-events-none"></div>
                <div class="absolute top-1/2 left-8 -translate-y-1/2 opacity-10 pointer-events-none hidden lg:block">
                    <svg class="w-48 h-48" viewBox="0 0 100 100" fill="currentColor">
                        <path d="M50 85L43.5 79.1C20.5 58.2 5.3 44.5 5.3 27.5C5.3 13.6 16.1 2.8 30 2.8C37.8 2.8 45.4 6.5 50 12.2C54.6 6.5 62.2 2.8 70 2.8C83.9 2.8 94.7 13.6 94.7 27.5C94.7 44.5 79.5 58.2 56.5 79.2L50 85Z"/>
                    </svg>
                </div>

                <!-- Main CTA Content -->
                <div class="relative z-10 max-w-3xl mx-auto text-center space-y-6">

                    <!-- Pill Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/15 backdrop-blur-md text-white text-xs sm:text-sm font-semibold border border-white/20">
                        <span>🌸</span>
                        <span>انضمي إلى مجتمعنا اليوم</span>
                    </div>

                    <!-- Headline -->
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black leading-tight tracking-tight">
                        أمومتكِ تستحق الدعم والرعاية والاطمئنان
                    </h2>

                    <!-- Subtitle -->
                    <p class="text-sm sm:text-base md:text-lg text-[#E6EFE9] leading-relaxed max-w-2xl mx-auto font-light">
                        ابدئي الآن رحلتكِ واستفيدي من حاسبة الحمل، وجداول التطعيمات، ومتابعة النمو اليومية مجاناً بالكامل وبأعلى معايير الأمان.
                    </p>

                    <!-- Buttons Row -->
                    <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="#register" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-full bg-white text-[#487B5E] hover:bg-[#FAF7F0] font-black text-base shadow-lg hover:shadow-xl hover:scale-105 active:scale-100 transition-all duration-200">
                            <span>ابدئي رحلتكِ مجاناً</span>
                            <span class="text-xl font-bold rtl:rotate-180">←</span>
                        </a>
                        <a href="#login" class="w-full sm:w-auto inline-flex items-center justify-center px-7 py-4 rounded-full bg-white/10 hover:bg-white/20 text-white font-bold text-base border border-white/30 backdrop-blur-md transition-all duration-200">
                            <span>تسجيل الدخول</span>
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="pt-6 border-t border-white/15 flex flex-wrap items-center justify-center gap-6 text-xs text-[#E1EDE5]">
                        <span class="flex items-center gap-1.5">
                            <span class="text-emerald-300">✓</span>
                            <span>مجاني بالكامل بدون رسوم خفية</span>
                        </span>
                        <span class="flex items-center gap-1.5">
                            <span class="text-emerald-300">✓</span>
                            <span>معتمد وفق إرشادات منظمة الصحة العالمية</span>
                        </span>
                        <span class="flex items-center gap-1.5">
                            <span class="text-emerald-300">✓</span>
                            <span>بياناتكِ وبيانات طفلكِ مشفرة وآمنة تماماً</span>
                        </span>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection

