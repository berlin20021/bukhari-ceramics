@extends('layouts.app')

@section('title', 'الفخامة العصرية')

@section('content')

    <div class="relative h-screen flex items-center justify-center overflow-hidden">
        
        <div class="absolute inset-0 z-0 overflow-hidden parallax">
            <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2000&auto=format&fit=crop"
                 alt="Luxury Black Marble Texture"
                 class="w-full h-full object-cover opacity-60 animate-ken-burns">
            <div class="absolute inset-0 bg-gradient-to-t from-bukhari-black via-bukhari-black/50 to-black/30"></div>
        </div>

        <div class="relative z-10 text-center px-4 mt-16 max-w-5xl mx-auto">
            
            <div class="animate-fade-up">
                <span class="text-bukhari-gold tracking-[0.3em] uppercase text-sm border-b border-bukhari-gold/50 pb-2 mb-8 inline-block">
                    منذ ١٩٩٥
                </span>
            </div>

            <h1 class="animate-fade-up delay-100 text-6xl md:text-8xl font-bold text-white mb-10 leading-snug drop-shadow-2xl">
                البخاري <span class="text-transparent bg-clip-text bg-gradient-to-r from-bukhari-gold to-yellow-100">للسيراميك</span>
            </h1>

            <div class="animate-fade-up delay-200 text-lg md:text-2xl text-gray-300 font-light mb-12 max-w-3xl mx-auto leading-relaxed">
                <p class="mb-4">لمسات فنية من أرقى خامات البورسلين والرخام العالمي</p>
                <div class="flex flex-wrap justify-center gap-3">
                    <span class="px-4 py-1 rounded-full border border-white/10 bg-white/5 backdrop-blur-sm text-sm hover:bg-bukhari-gold hover:text-black transition-colors cursor-default">بورسلين إسباني</span>
                    <span class="px-4 py-1 rounded-full border border-white/10 bg-white/5 backdrop-blur-sm text-sm hover:bg-bukhari-gold hover:text-black transition-colors cursor-default">رخام إيطالي</span>
                    <span class="px-4 py-1 rounded-full border border-white/10 bg-white/5 backdrop-blur-sm text-sm hover:bg-bukhari-gold hover:text-black transition-colors cursor-default">جرانيت فاخر</span>
                </div>
            </div>
            
            <div class="animate-fade-up delay-300 flex flex-col md:flex-row gap-5 justify-center">
                <a href="{{ route('products.index') }}" class="group relative px-8 py-4 bg-bukhari-gold text-bukhari-black font-bold overflow-hidden rounded-sm transition-all hover:bg-white hover:text-black shadow-lg shadow-bukhari-gold/20 animate-pulse-gold hover:animate-none glow-gold">
                    <span class="relative z-10">تصفح التشكيلات</span>
                </a>
                <a href="{{ route('consultation') }}" class="group px-8 py-4 border border-white/30 text-white hover:border-bukhari-gold hover:bg-bukhari-black hover:text-bukhari-gold transition duration-300 rounded-sm backdrop-blur-sm animate-float">
                    حجز استشارة مجانية
                </a>
            </div>
        </div>
        
        <div class="absolute bottom-10 animate-bounce text-white/50">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </div>
    </div>

    <div class="bg-bukhari-gold py-3 overflow-hidden whitespace-nowrap border-y border-white/10 relative z-20 shadow-xl">
        <div class="inline-block animate-marquee text-black font-bold text-lg">
            <span class="mx-8">✨ خصومات تصل إلى 20% على البورسلين الإسباني لفترة محدودة</span>
            <span class="mx-8">•</span>
            <span class="mx-8">وصول أحدث تشكيلات الرخام لعام 2026</span>
            <span class="mx-8">•</span>
            <span class="mx-8">خدمة التصميم 3D مجاناً للمساحات الكبيرة</span>
            <span class="mx-8">•</span>
            <span class="mx-8">ضمان 10 سنوات على جودة التركيب والمنتجات</span>
            <span class="mx-8">•</span>
            <span class="mx-8">✨ خصومات تصل إلى 20% على البورسلين الإسباني لفترة محدودة</span>
            <span class="mx-8">•</span>
            <span class="mx-8">وصول أحدث تشكيلات الرخام لعام 2026</span>
        </div>
    </div>

    <section class="py-20 bg-zinc-900 border-b border-white/5 relative">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-white/10 divide-x-reverse">
                <div class="p-4 group cursor-default">
                    <h3 class="text-4xl md:text-5xl font-bold text-bukhari-gold mb-2 group-hover:scale-110 transition-transform duration-300">+30</h3>
                    <p class="text-gray-400 text-sm md:text-base">سنة خبرة</p>
                </div>
                <div class="p-4 group cursor-default">
                    <h3 class="text-4xl md:text-5xl font-bold text-bukhari-gold mb-2 group-hover:scale-110 transition-transform duration-300">+500</h3>
                    <p class="text-gray-400 text-sm md:text-base">مشروع فندقي</p>
                </div>
                <div class="p-4 group cursor-default">
                    <h3 class="text-4xl md:text-5xl font-bold text-bukhari-gold mb-2 group-hover:scale-110 transition-transform duration-300">100%</h3>
                    <p class="text-gray-400 text-sm md:text-base">جودة أوروبية</p>
                </div>
                <div class="p-4 group cursor-default">
                    <h3 class="text-4xl md:text-5xl font-bold text-bukhari-gold mb-2 group-hover:scale-110 transition-transform duration-300">+50</h3>
                    <p class="text-gray-400 text-sm md:text-base">وكالة عالمية</p>
                </div>
            </div>
        </div>
    </section>

    <section id="collections" class="py-24 bg-bukhari-black">
        <div class="container mx-auto px-6">
            
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">تشكيلات النخبة</h2>
                <div class="w-24 h-1 bg-bukhari-gold mx-auto"></div>
                <p class="text-gray-400 mt-4">اخترنا لك الأفضل من بين آلاف التصاميم العالمية</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="group relative h-[450px] overflow-hidden cursor-pointer border border-white/5 rounded-sm">
                    <img src="https://images.pexels.com/photos/11285437/pexels-photo-11285437.png" 
                         alt="Marble Alternative" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 p-8 w-full">
                        <h3 class="text-2xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">بديل الرخام</h3>
                        <p class="text-gray-300 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 font-light">أناقة الرخام الطبيعي بصلابة وتكنولوجيا حديثة</p>
                    </div>
                </div>

                <div class="group relative h-[450px] overflow-hidden cursor-pointer border border-white/5 rounded-sm">
                    <img src="https://images.unsplash.com/photo-1620626011761-996317b8d101?q=80&w=1000&auto=format&fit=crop" 
                         alt="Spanish Porcelain" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 p-8 w-full">
                        <h3 class="text-2xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">البورسلين الإسباني</h3>
                        <p class="text-gray-300 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 font-light">لمسات حريرية وقوة تحمل للمساحات التجارية</p>
                    </div>
                </div>

                <div class="group relative h-[450px] overflow-hidden cursor-pointer border border-white/5 rounded-sm">
                    <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=1000&auto=format&fit=crop" 
                         alt="Wall Decor" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 p-8 w-full">
                        <h3 class="text-2xl font-bold text-white mb-2 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">ديكور الحوائط</h3>
                        <p class="text-gray-300 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 font-light">تصاميم ثلاثية الأبعاد تضفي عمقاً وفخامة</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-zinc-900 overflow-hidden">
        <div class="container mx-auto px-6">
            
            <div class="flex flex-col md:flex-row items-center gap-12 mb-24">
                <div class="w-full md:w-1/2 relative group">
                    <div class="absolute -inset-4 bg-bukhari-gold/20 rounded-lg transform rotate-3 group-hover:rotate-0 transition-transform duration-500"></div>
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1000&auto=format&fit=crop" 
                         alt="3D Design" 
                         class="relative rounded-lg shadow-2xl w-full h-[400px] object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="w-full md:w-1/2 text-right">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="text-5xl opacity-20 font-bold text-bukhari-gold">01</span>
                        <h3 class="text-3xl font-bold text-white">تصميم ثلاثي الأبعاد مجاني</h3>
                    </div>
                    <p class="text-gray-400 leading-loose mb-6 text-lg">
                        لا داعي للتخيل.. مهندسونا المحترفون سيقومون بتصميم مساحتك بالكامل باستخدام أحدث برامج الـ 3D، لترى النتيجة النهائية وتناسق الألوان قبل الشراء والتركيب.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-300">
                            <span class="w-2 h-2 bg-bukhari-gold rounded-full"></span>
                            محاكاة واقعية للإضاءة والمساحات
                        </li>
                        <li class="flex items-center gap-3 text-gray-300">
                            <span class="w-2 h-2 bg-bukhari-gold rounded-full"></span>
                            تعديلات لا نهائية حتى الرضا التام
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col md:flex-row-reverse items-center gap-12">
                <div class="w-full md:w-1/2 relative group">
                    <div class="absolute -inset-4 bg-white/5 rounded-lg transform -rotate-3 group-hover:rotate-0 transition-transform duration-500"></div>
                    <img src="https://images.pexels.com/photos/14613453/pexels-photo-14613453.jpeg" 
                         alt="Professional Installation" 
                         class="relative rounded-lg shadow-2xl w-full h-[400px] object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>
                <div class="w-full md:w-1/2 text-right">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="text-5xl opacity-20 font-bold text-bukhari-gold">02</span>
                        <h3 class="text-3xl font-bold text-white">خدمة التركيب والضمان</h3>
                    </div>
                    <p class="text-gray-400 leading-loose mb-6 text-lg">
                        جمال السيراميك يكتمل بدقة التركيب. نوفر لك فريقاً من الفنيين المعتمدين لضمان استواء الأرضيات ودقة الفواصل، مع ضمان شامل على التركيب.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-300">
                            <span class="w-2 h-2 bg-bukhari-gold rounded-full"></span>
                            استخدام أحدث موازين الليزر
                        </li>
                        <li class="flex items-center gap-3 text-gray-300">
                            <span class="w-2 h-2 bg-bukhari-gold rounded-full"></span>
                            مواد لاصقة أوروبية عالية الجودة
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
@endsection