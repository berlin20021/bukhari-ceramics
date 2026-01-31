@extends('layouts.app')

@section('title', 'سياسة الخصوصية')

@section('content')
    <div class="pt-[120px] bg-bukhari-black min-h-screen py-20">
        <div class="container mx-auto px-6">

            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">سياسة الخصوصية</h1>
                <div class="w-24 h-1 bg-bukhari-gold mx-auto rounded-full"></div>
                <p class="text-gray-400 mt-4 text-lg">نحن نحترم خصوصيتك ونلتزم بحماية بياناتك الشخصية</p>
            </div>

            <div class="max-w-4xl mx-auto space-y-8 text-right">

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">جمع المعلومات</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        نقوم بجمع المعلومات التي تقدمها لنا طوعاً عند استخدام خدماتنا، وتشمل:
                    </p>
                    <ul class="space-y-2 text-gray-300 mr-6">
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            الاسم الكامل ومعلومات الاتصال
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            عنوان البريد الإلكتروني
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            رقم الهاتف
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            تفاصيل المشاريع والاستفسارات
                        </li>
                    </ul>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">استخدام المعلومات</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        نستخدم المعلومات المجمعة للأغراض التالية:
                    </p>
                    <ul class="space-y-2 text-gray-300 mr-6">
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            الرد على استفساراتك وطلباتك
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            تقديم الخدمات والمنتجات المطلوبة
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            إرسال تحديثات حول المنتجات والعروض
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            تحسين خدماتنا وجودة المنتجات
                        </li>
                    </ul>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">حماية المعلومات</h2>
                    <p class="text-gray-300 leading-relaxed">
                        نتخذ تدابير أمنية متقدمة لحماية بياناتك الشخصية من الوصول غير المصرح به أو التغيير أو الكشف أو التدمير. تشمل هذه التدابير التشفير، الجدران النارية، وأنظمة المراقبة الأمنية.
                    </p>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">مشاركة المعلومات</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        لا نبيع أو نؤجر أو نشارك معلوماتك الشخصية مع أطراف ثالثة، باستثناء الحالات التالية:
                    </p>
                    <ul class="space-y-2 text-gray-300 mr-6">
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            عند الحصول على موافقتك الصريحة
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            لتقديم الخدمات المطلوبة (مثل الشحن والتركيب)
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            عند الحاجة للامتثال للقوانين أو الأوامر القضائية
                        </li>
                    </ul>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">حقوقك</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        لديك الحق في:
                    </p>
                    <ul class="space-y-2 text-gray-300 mr-6">
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            الوصول إلى بياناتك الشخصية
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            تصحيح أو تحديث معلوماتك
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            حذف بياناتك من سجلاتنا
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            إلغاء الاشتراك من النشرات البريدية
                        </li>
                    </ul>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">التواصل</h2>
                    <p class="text-gray-300 leading-relaxed">
                        إذا كان لديك أي أسئلة حول سياسة الخصوصية هذه أو كيفية تعاملنا مع بياناتك، يمكنك التواصل معنا عبر:
                    </p>
                    <div class="mt-4 space-y-2 text-gray-300">
                        <p>البريد الإلكتروني: <span class="text-bukhari-gold">privacy@albukhari.com</span></p>
                        <p>الهاتف: <span class="text-bukhari-gold dir-ltr">+20 100 000 0000</span></p>
                    </div>
                </div>

                <div class="text-center text-gray-500 text-sm">
                    <p>آخر تحديث: ديسمبر 2024</p>
                </div>

            </div>

        </div>
    </div>
@endsection