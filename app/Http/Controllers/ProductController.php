<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator; // استيراد كلاس التقسيم اليدوي

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $projectId = env('SANITY_PROJECT_ID');
        $dataset = env('SANITY_DATASET');
        
        // 1. إعدادات الصفحة الحالية
        $page = $request->input('page', 1); // رقم الصفحة (لو مفيش يبقى 1)
        $perPage = 10; // عدد المنتجات في كل صفحة
        $start = ($page - 1) * $perPage; // نقطة البداية في قاعدة البيانات

        // 2. كويري Sanity (بيجيب المنتجات المطلوبة + العدد الكلي)
        // بنستخدم order(_createdAt desc) عشان يجيب الأحدث الأول
        $query = "{
            'items': *[_type == 'product'] | order(_createdAt desc) [$start...$start + $perPage] {
                title,
                price,
                'imageUrl': images[0].asset->url,
                category,
                size,
                slug
            },
            'total': count(*[_type == 'product'])
        }";

        $url = "https://{$projectId}.api.sanity.io/v2021-10-21/data/query/{$dataset}?query=" . urlencode($query);
        
        $response = Http::get($url);
        $data = $response->json()['result'] ?? [];

        $items = $data['items'] ?? []; // المنتجات الـ 10
        $total = $data['total'] ?? 0;  // العدد الكلي للمنتجات

        // 3. إنشاء كائن التصفح (Paginator) عشان Blade يفهمه
        $products = new LengthAwarePaginator(
            $items, 
            $total, 
            $perPage, 
            $page, 
            ['path' => $request->url(), 'query' => $request->query()] // عشان يحافظ على الرابط
        );

        return view('products', compact('products'));
    }

    public function show($slug)
    {
        $projectId = env('SANITY_PROJECT_ID');
        $dataset = env('SANITY_DATASET');

        // كويري بيجيب المنتج الأساسي + 4 منتجات مقترحة
        $query = "{
            'main': *[_type == 'product' && slug.current == '$slug'][0]{
                title, price, 'images': images[].asset->url, 'imageUrl': images[0].asset->url, category, size, description, slug
            },
            'related': *[_type == 'product' && slug.current != '$slug'][0...4]{
                title, price, 'imageUrl': images[0].asset->url, slug
            }
        }";

        $url = "https://{$projectId}.api.sanity.io/v2021-10-21/data/query/{$dataset}?query=" . urlencode($query);
        $response = Http::get($url);
        $data = $response->json()['result'];

        $product = $data['main'] ?? null;
        $relatedProducts = $data['related'] ?? [];

        if (!$product) {
            return redirect('/products');
        }

        return view('product-details', compact('product', 'relatedProducts'));
    }
}