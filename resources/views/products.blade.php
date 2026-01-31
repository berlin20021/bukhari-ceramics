@extends('layouts.app')

@section('title', 'الكتالوج الكامل')

@section('content')

    <div class="relative h-[40vh] min-h-[300px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1620626011761-996317b8d101?q=80&w=2000&auto=format&fit=crop" 
                 alt="Ceramic Background" 
                 class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-t from-bukhari-black via-bukhari-black/60 to-black/40"></div>
        </div>
        <div class="relative z-10 text-center px-4 pt-10">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 animate-fade-up drop-shadow-2xl">
                كتالوج المنتجات
            </h1>
            <div class="w-24 h-1 bg-bukhari-gold mx-auto rounded-full"></div>
        </div>
    </div>

    <section class="py-16 bg-bukhari-black min-h-screen">
        <div class="container mx-auto px-6">
            
            <div class="flex flex-col md:flex-row justify-between items-center mb-10 pb-4 border-b border-white/5">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">
                    إجمالي المنتجات: <span class="text-white font-bold">{{ $products->total() }}</span> منتج
                    (صفحة {{ $products->currentPage() }} من {{ $products->lastPage() }})
                </p>
                
                <div class="flex flex-wrap gap-2 justify-center">
                    <button class="px-4 py-1 rounded-full border border-bukhari-gold text-bukhari-gold bg-bukhari-gold/10 text-sm transition-all hover:bg-bukhari-gold hover:text-black">الكل</button>
                    </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 min-h-[500px]">
                
                @forelse($products as $product)
                
                <div class="group bg-zinc-900 border border-white/5 rounded-sm overflow-hidden hover:border-bukhari-gold/50 transition-all duration-300 shadow-lg animate-fade-up">
                    
                    <div class="relative h-80 overflow-hidden bg-gray-800">
                        <span class="absolute top-3 right-3 bg-bukhari-gold text-black text-xs font-bold px-2 py-1 z-10 rounded-sm">جديد</span>
                        
                        <img src="{{ $product['imageUrl'] ?? 'https://via.placeholder.com/800x800?text=No+Image' }}"
                             alt="{{ $product['title'] ?? 'Product' }}"
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="{{ route('products.show', $product['slug']['current']) }}" class="bg-white text-black px-8 py-3 font-bold text-sm rounded-sm hover:bg-bukhari-gold hover:text-black transition-colors transform translate-y-4 group-hover:translate-y-0 duration-300 shadow-xl inline-block">
                                عرض التفاصيل
                            </a>
                        </div>
                    </div>
                    
                    <div class="p-6 text-center">
                        <p class="text-xs text-gray-500 mb-2 tracking-wider">{{ $product['category'] ?? 'عام' }}</p>
                        <h3 class="text-white font-bold text-xl mb-3 group-hover:text-bukhari-gold transition-colors">
                            {{ $product['title'] }}
                        </h3>
                        <div class="flex justify-center items-center gap-2">
                            <span class="text-bukhari-gold font-bold text-lg">{{ $product['price'] }} ج.م</span>
                            <span class="text-gray-600 text-xs">/ متر</span>
                        </div>
                    </div>

                </div>
                
                @empty
                <div class="col-span-full text-center py-20 bg-zinc-900/50 rounded border border-white/5">
                    <h2 class="text-white text-2xl font-bold mb-2">لا توجد منتجات حالياً</h2>
                    <p class="text-gray-400">جاري تحديث الكتالوج من لوحة التحكم، يرجى المحاولة لاحقاً.</p>
                </div>
                @endforelse
            </div>

            @if($products->hasPages())
            <div class="mt-16 flex justify-center gap-2">
                
                {{-- زر السابق --}}
                @if($products->onFirstPage())
                    <button disabled class="w-12 h-12 border border-white/5 rounded-sm flex items-center justify-center text-gray-600 cursor-not-allowed">‹</button>
                @else
                    <a href="{{ $products->previousPageUrl() }}" class="w-12 h-12 border border-white/10 rounded-sm flex items-center justify-center text-gray-400 hover:border-bukhari-gold hover:text-bukhari-gold transition-colors">‹</a>
                @endif

                {{-- أرقام الصفحات --}}
                @foreach ($products->getUrlRange(max(1, $products->currentPage() - 1), min($products->lastPage(), $products->currentPage() + 1)) as $page => $url)
                    @if ($page == $products->currentPage())
                        <span class="w-12 h-12 bg-bukhari-gold text-black font-bold rounded-sm flex items-center justify-center cursor-default">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="w-12 h-12 border border-white/10 rounded-sm flex items-center justify-center text-gray-400 hover:border-bukhari-gold hover:text-bukhari-gold transition-colors">{{ $page }}</a>
                    @endif
                @endforeach

                {{-- زر التالي --}}
                @if($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}" class="w-12 h-12 border border-white/10 rounded-sm flex items-center justify-center text-gray-400 hover:border-bukhari-gold hover:text-bukhari-gold transition-colors">›</a>
                @else
                    <button disabled class="w-12 h-12 border border-white/5 rounded-sm flex items-center justify-center text-gray-600 cursor-not-allowed">›</button>
                @endif

            </div>
            @endif

        </div>
    </section>
@endsection