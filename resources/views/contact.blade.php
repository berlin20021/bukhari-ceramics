@extends('layouts.app')

@section('title', 'تواصل معنا')

@section('content')
    <div class="relative h-[50vh] min-h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?q=80&w=2000&auto=format&fit=crop"
                 alt="Contact Background"
                 class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-t from-bukhari-black via-bukhari-black/60 to-black/40"></div>
        </div>
        <div class="relative z-10 text-center px-4 pt-10">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 animate-fade-up drop-shadow-2xl">
                تواصل معنا
            </h1>
            <div class="w-24 h-1 bg-bukhari-gold mx-auto rounded-full"></div>
            <p class="text-gray-300 mt-4 text-lg">نحن هنا لمساعدتك في اختيار أفضل الحلول لمشروعك</p>
        </div>
    </div>

    <section class="py-20 bg-bukhari-black">
        <div class="container mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

                <div class="text-right">
                    <h2 class="text-3xl font-bold text-white mb-8">معلومات التواصل</h2>

                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-bukhari-gold/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-bukhari-gold text-xl">📍</span>
                            </div>
                            <div>
                                <h3 class="text-white font-bold mb-2">العنوان</h3>
                                <p class="text-gray-400">شارع التسعين الشمالي، التجمع الخامس، القاهرة، مصر</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-bukhari-gold/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-bukhari-gold text-xl">📞</span>
                            </div>
                            <div>
                                <h3 class="text-white font-bold mb-2">الهاتف</h3>
                                <p class="text-gray-400 dir-ltr">+20 100 000 0000</p>
                                <p class="text-gray-400 dir-ltr">+20 200 000 0000</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-bukhari-gold/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-bukhari-gold text-xl">✉️</span>
                            </div>
                            <div>
                                <h3 class="text-white font-bold mb-2">البريد الإلكتروني</h3>
                                <p class="text-gray-400">info@albukhari.com</p>
                                <p class="text-gray-400">sales@albukhari.com</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-bukhari-gold/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-bukhari-gold text-xl">🕒</span>
                            </div>
                            <div>
                                <h3 class="text-white font-bold mb-2">ساعات العمل</h3>
                                <p class="text-gray-400">الأحد - الخميس: 10:00 ص - 10:00 م</p>
                                <p class="text-gray-400">الجمعة - السبت: 12:00 م - 8:00 م</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <h3 class="text-white font-bold mb-4">تابعنا على وسائل التواصل</h3>
                        <div class="flex gap-4">
                            <a href="#" class="w-12 h-12 bg-white/5 rounded-full flex items-center justify-center text-white hover:bg-bukhari-gold hover:text-black transition-all">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/5 rounded-full flex items-center justify-center text-white hover:bg-bukhari-gold hover:text-black transition-all">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.072 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-white/5 rounded-full flex items-center justify-center text-white hover:bg-bukhari-gold hover:text-black transition-all">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6 text-center">أرسل لنا رسالة</h2>

                    @if(session('success'))
                        <div class="bg-green-500/10 border border-green-500/20 text-green-400 p-4 rounded-sm mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
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
                            <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">رقم الهاتف</label>
                            <input type="tel" id="phone" name="phone"
                                   class="w-full bg-white/5 border border-white/10 rounded px-4 py-3 text-white focus:outline-none focus:border-bukhari-gold transition-colors placeholder-gray-500 dir-ltr"
                                   placeholder="+20 123 456 7890">
                            @error('phone')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-2">الرسالة *</label>
                            <textarea id="message" name="message" rows="5" required
                                      class="w-full bg-white/5 border border-white/10 rounded px-4 py-3 text-white focus:outline-none focus:border-bukhari-gold transition-colors placeholder-gray-500 resize-none"
                                      placeholder="اكتب رسالتك هنا..."></textarea>
                            @error('message')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="w-full bg-bukhari-gold text-black font-bold py-4 rounded hover:bg-white transition-all shadow-lg shadow-bukhari-gold/20">
                            إرسال الرسالة
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </section>
@endsection