@extends('layouts.app')

@section('title', 'عن معرض البخاري')

@section('content')

    <div class="relative h-[50vh] min-h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=2000&auto=format&fit=crop"
                 alt="About Us Background"
                 class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-t from-bukhari-black via-bukhari-black/60 to-black/40"></div>
        </div>
        <div class="relative z-10 text-center px-4 pt-10">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 animate-fade-up drop-shadow-2xl">
                عن معرض البخاري
            </h1>
            <div class="w-24 h-1 bg-bukhari-gold mx-auto rounded-full"></div>
        </div>
    </div>

    <section class="py-20 bg-bukhari-black">
        <div class="container mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">
                <div class="text-right">
                    <h2 class="text-4xl font-bold text-white mb-8">قصتنا</h2>
                    <div class="space-y-6 text-gray-300 leading-relaxed">
                        <p>
                            منذ عام 1995، بدأت رحلتنا في عالم السيراميك والرخام بفكرة بسيطة: تقديم أفضل المنتجات العالمية للعملاء في الشرق الأوسط. اليوم، نحن فخورون بأننا أحد أكبر المعارض المتخصصة في السيراميك والبورسلين في المنطقة.
                        </p>
                        <p>
                            نقدم تشكيلات من أرقى الشركات الأوروبية والعالمية، مع ضمان الجودة والخدمة المتميزة. فريقنا من المهندسين والفنيين المحترفين يضمن لك تجربة فريدة من نوعها في اختيار وتركيب السيراميك.
                        </p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute -inset-4 bg-bukhari-gold/20 rounded-lg transform rotate-3 group-hover:rotate-0 transition-transform duration-500"></div>
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?q=80&w=1000&auto=format&fit=crop"
                         alt="Our Story"
                         class="relative rounded-lg shadow-2xl w-full h-[400px] object-cover">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5 text-center group hover:border-bukhari-gold/50 transition-all">
                    <div class="text-6xl text-bukhari-gold mb-4 group-hover:scale-110 transition-transform">🏆</div>
                    <h3 class="text-xl font-bold text-white mb-4">الجودة الأوروبية</h3>
                    <p class="text-gray-400">نعمل مع أفضل الشركات الأوروبية لضمان أعلى معايير الجودة والمتانة</p>
                </div>
                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5 text-center group hover:border-bukhari-gold/50 transition-all">
                    <div class="text-6xl text-bukhari-gold mb-4 group-hover:scale-110 transition-transform">👥</div>
                    <h3 class="text-xl font-bold text-white mb-4">فريق محترف</h3>
                    <p class="text-gray-400">مهندسون وفنيون معتمدون يقدمون استشارات مجانية وخدمات تركيب احترافية</p>
                </div>
                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5 text-center group hover:border-bukhari-gold/50 transition-all">
                    <div class="text-6xl text-bukhari-gold mb-4 group-hover:scale-110 transition-transform">🌍</div>
                    <h3 class="text-xl font-bold text-white mb-4">تغطية شاملة</h3>
                    <p class="text-gray-400">نغطي جميع أنحاء الشرق الأوسط مع خدمة توصيل وتركيب في موقع العمل</p>
                </div>
            </div>

            <div class="text-center">
                <h2 class="text-4xl font-bold text-white mb-8">لماذا تختار البخاري؟</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="text-right">
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-gray-300">
                                <span class="text-bukhari-gold">✓</span>
                                ضمان 10 سنوات على المنتجات والتركيب
                            </li>
                            <li class="flex items-center gap-3 text-gray-300">
                                <span class="text-bukhari-gold">✓</span>
                                استشارة تصميم 3D مجانية
                            </li>
                            <li class="flex items-center gap-3 text-gray-300">
                                <span class="text-bukhari-gold">✓</span>
                                أسعار تنافسية مع جودة مضمونة
                            </li>
                        </ul>
                    </div>
                    <div class="text-right">
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-gray-300">
                                <span class="text-bukhari-gold">✓</span>
                                خدمة ما بعد البيع على مدار 24 ساعة
                            </li>
                            <li class="flex items-center gap-3 text-gray-300">
                                <span class="text-bukhari-gold">✓</span>
                                تركيب من قبل فنيين معتمدين
                            </li>
                            <li class="flex items-center gap-3 text-gray-300">
                                <span class="text-bukhari-gold">✓</span>
                                كتالوجات محدثة بأحدث التشكيلات
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection