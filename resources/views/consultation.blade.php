@extends('layouts.app')

@section('title', 'طلب استشارة')

@section('content')
    <div class="relative h-[50vh] min-h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=2000&auto=format&fit=crop"
                 alt="Engineering Consultation"
                 class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-t from-bukhari-black via-bukhari-black/60 to-black/40"></div>
        </div>
        <div class="relative z-10 text-center px-4 pt-10">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 animate-fade-up drop-shadow-2xl">
                اطلب استشارة مجانية
            </h1>
            <div class="w-24 h-1 bg-bukhari-gold mx-auto rounded-full"></div>
            <p class="text-gray-300 mt-4 text-lg">خبراؤنا جاهزون لمساعدتك في اختيار أفضل الحلول لمشروعك</p>
        </div>
    </div>

    <section class="py-20 bg-bukhari-black">
        <div class="container mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

                <div class="text-right">
                    <h2 class="text-3xl font-bold text-white mb-8">لماذا تطلب استشارة منا؟</h2>

                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-bukhari-gold/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-bukhari-gold text-xl">🎨</span>
                            </div>
                            <div>
                                <h3 class="text-white font-bold mb-2">تصميم احترافي</h3>
                                <p class="text-gray-400">مهندسونا المحترفون سيقومون بتصميم مساحتك بأحدث برامج الـ 3D لترى النتيجة قبل التنفيذ.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-bukhari-gold/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-bukhari-gold text-xl">💰</span>
                            </div>
                            <div>
                                <h3 class="text-white font-bold mb-2">تقدير تكلفة دقيق</h3>
                                <p class="text-gray-400">سنقدم لك تقديراً مفصلاً للتكاليف شاملاً المواد والتركيب والضمان.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-bukhari-gold/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-bukhari-gold text-xl">⚡</span>
                            </div>
                            <div>
                                <h3 class="text-white font-bold mb-2">خدمة سريعة</h3>
                                <p class="text-gray-400">سنتواصل معك خلال 24 ساعة من تقديم الطلب ونبدأ العمل فوراً.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-bukhari-gold/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-bukhari-gold text-xl">🛡️</span>
                            </div>
                            <div>
                                <h3 class="text-white font-bold mb-2">ضمان شامل</h3>
                                <p class="text-gray-400">جميع استشاراتنا مدعومة بضمان 10 سنوات على المنتجات والتركيب.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 p-6 bg-zinc-900 rounded-sm border border-white/5">
                        <h3 class="text-white font-bold mb-4">ما ستحصل عليه:</h3>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center gap-2">
                                <span class="text-bukhari-gold">✓</span>
                                رسم تصميم 3D مجاني
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-bukhari-gold">✓</span>
                                قائمة مواد مفصلة
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-bukhari-gold">✓</span>
                                جدولة زمنية للتنفيذ
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-bukhari-gold">✓</span>
                                تقدير تكلفة شامل
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6 text-center">املأ البيانات التالية</h2>

                    @if(session('success'))
                        <div class="bg-green-500/10 border border-green-500/20 text-green-400 p-4 rounded-sm mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('consultation.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">الاسم الكامل *</label>
                                <input type="text" id="name" name="name" required
                                       class="w-full bg-white/5 border border-white/10 rounded px-4 py-3 text-white focus:outline-none focus:border-bukhari-gold transition-colors placeholder-gray-500"
                                       placeholder="أدخل اسمك الكامل">
                                @error('name')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">البريد الإلكتروني *</label>
                                <input type="email" id="email" name="email" required
                                       class="w-full bg-white/5 border border-white/10 rounded px-4 py-3 text-white focus:outline-none focus:border-bukhari-gold transition-colors placeholder-gray-500"
                                       placeholder="example@email.com">
                                @error('email')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">رقم الهاتف *</label>
                            <input type="tel" id="phone" name="phone" required
                                   class="w-full bg-white/5 border border-white/10 rounded px-4 py-3 text-white focus:outline-none focus:border-bukhari-gold transition-colors placeholder-gray-500 dir-ltr"
                                   placeholder="+20 123 456 7890">
                            @error('phone')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="project_type" class="block text-sm font-medium text-gray-300 mb-2">نوع المشروع *</label>
                            <select id="project_type" name="project_type" required
                                    class="w-full bg-white/5 border border-white/10 rounded px-4 py-3 text-white focus:outline-none focus:border-bukhari-gold transition-colors">
                                <option value="">اختر نوع المشروع</option>
                                <option value="residential">سكني</option>
                                <option value="commercial">تجاري</option>
                                <option value="hotel">فندقي</option>
                                <option value="restaurant">مطعم</option>
                                <option value="office">مكتبي</option>
                                <option value="other">أخرى</option>
                            </select>
                            @error('project_type')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="area" class="block text-sm font-medium text-gray-300 mb-2">المساحة التقريبية (متر مربع)</label>
                            <input type="number" id="area" name="area" min="1"
                                   class="w-full bg-white/5 border border-white/10 rounded px-4 py-3 text-white focus:outline-none focus:border-bukhari-gold transition-colors placeholder-gray-500 dir-ltr"
                                   placeholder="مثال: 100">
                            @error('area')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-2">تفاصيل إضافية</label>
                            <textarea id="message" name="message" rows="4"
                                      class="w-full bg-white/5 border border-white/10 rounded px-4 py-3 text-white focus:outline-none focus:border-bukhari-gold transition-colors placeholder-gray-500 resize-none"
                                      placeholder="اكتب أي تفاصيل إضافية عن مشروعك..."></textarea>
                            @error('message')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="w-full bg-bukhari-gold text-black font-bold py-4 rounded hover:bg-white transition-all shadow-lg shadow-bukhari-gold/20">
                            اطلب الاستشارة الآن
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </section>
@endsection