@extends('layouts.app')

@section('title', ($product['title'] ?? 'منتج') . ' - معرض البخاري')

@section('content')

    <div class="pt-[120px] bg-bukhari-black min-h-screen">
        <div class="container mx-auto px-6 py-12">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                <div class="space-y-6">
                    <div class="relative group h-[500px] bg-zinc-900 rounded-sm overflow-hidden">
                        <img id="main-image" 
                             src="{{ (isset($product['images']) && count($product['images']) > 0) ? $product['images'][0] : ($product['imageUrl'] ?? 'https://via.placeholder.com/500') }}"
                             alt="{{ $product['title'] ?? 'Product' }}"
                             class="w-full h-full object-cover shadow-2xl transition-opacity duration-300">
                        <span class="absolute top-4 right-4 bg-bukhari-gold text-black text-sm font-bold px-3 py-1 rounded-sm">جديد</span>
                    </div>

                    @if(isset($product['images']) && count($product['images']) > 0)
                    <div class="grid grid-cols-4 gap-4">
                        @foreach($product['images'] as $index => $imgUrl)
                            <img src="{{ $imgUrl }}" 
                                 alt="Thumbnail {{ $index }}"
                                 class="w-full h-24 object-cover rounded-sm cursor-pointer border-2 transition-all duration-200 {{ $index === 0 ? 'border-bukhari-gold opacity-100' : 'border-transparent opacity-70 hover:opacity-100 hover:border-bukhari-gold' }}"
                                 onclick="changeImage('{{ $imgUrl }}', this)">
                        @endforeach
                    </div>
                    @endif
                </div>

                <div class="text-right space-y-6">
                    <div>
                        <p class="text-sm text-gray-500 mb-2 tracking-wider">{{ $product['category'] ?? 'تصنيف عام' }}</p>
                        <h1 class="text-4xl font-bold text-white mb-4">{{ $product['title'] ?? 'اسم المنتج' }}</h1>
                        <div class="flex items-center gap-4 mb-6">
                            <span class="text-3xl font-bold text-bukhari-gold">{{ $product['price'] ?? '0' }} ج.م</span>
                            <span class="text-gray-600">/ متر</span>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-xl font-bold text-white mb-4">الوصف</h2>
                        <p class="text-gray-300 leading-relaxed">
                            {{ $product['description'] ?? 'لا يوجد وصف متاح حالياً لهذا المنتج.' }}
                        </p>
                    </div>

                    <div>
                        <h2 class="text-xl font-bold text-white mb-4">المميزات</h2>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-gray-300"><span class="text-bukhari-gold">✓</span> مقاوم للخدش والاحتكاك</li>
                            <li class="flex items-center gap-3 text-gray-300"><span class="text-bukhari-gold">✓</span> سهل التنظيف</li>
                            <li class="flex items-center gap-3 text-gray-300"><span class="text-bukhari-gold">✓</span> فرز أول (High Quality)</li>
                        </ul>
                    </div>

                    <div class="flex gap-4 pt-6">
                        <button class="flex-1 bg-bukhari-gold text-black font-bold py-4 px-6 rounded-sm hover:bg-white transition-all text-center shadow-lg shadow-bukhari-gold/20">اطلب استشارة</button>
                        <button class="flex-1 border border-bukhari-gold text-bukhari-gold hover:bg-bukhari-gold hover:text-black transition-all py-4 px-6 rounded-sm text-center font-bold">تواصل معنا</button>
                    </div>

                    <div class="bg-zinc-900 p-6 rounded-sm border border-white/5 mt-8">
                        <h3 class="text-lg font-bold text-white mb-4">معلومات إضافية</h3>
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div><span class="text-gray-500">الفئة:</span><span class="text-white ml-2">{{ $product['category'] ?? '-' }}</span></div>
                            <div><span class="text-gray-500">الضمان:</span><span class="text-white ml-2">10 سنوات</span></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-16 pt-12 border-t border-white/5">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-bold text-white">منتجات قد تعجبك</h2>
                    <a href="/products" class="bg-bukhari-gold text-black font-bold py-2 px-4 rounded-sm hover:bg-white transition-all text-sm">
                        رجوع للكتالوج ←
                    </a>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    @forelse($relatedProducts as $related)
                        <a href="{{ route('products.show', $related['slug']['current']) }}" class="group bg-zinc-900 border border-white/5 rounded-sm overflow-hidden hover:border-bukhari-gold/50 transition-all block">
                            <div class="relative h-48 overflow-hidden bg-gray-800">
                                <img src="{{ $related['imageUrl'] ?? 'https://via.placeholder.com/400' }}"
                                     alt="{{ $related['title'] }}"
                                     class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-white font-bold text-sm mb-2 group-hover:text-bukhari-gold transition-colors">
                                    {{ $related['title'] }}
                                </h3>
                                <p class="text-bukhari-gold font-bold text-sm">{{ $related['price'] }} ج.م</p>
                            </div>
                        </a>
                    @empty
                        <div class="col-span-full text-center text-gray-500">
                            لا توجد منتجات مشابهة حالياً
                        </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>

    <script>
        function changeImage(imageSrc, clickedElement) {
            const mainImage = document.getElementById('main-image');
            mainImage.src = imageSrc;
            const thumbnails = document.querySelectorAll('.grid.grid-cols-4 img');
            thumbnails.forEach(thumb => {
                thumb.classList.remove('border-bukhari-gold', 'opacity-100');
                thumb.classList.add('border-transparent', 'opacity-70');
            });
            clickedElement.classList.remove('border-transparent', 'opacity-70');
            clickedElement.classList.add('border-bukhari-gold', 'opacity-100');
        }
    </script>
@endsection