@extends('layouts.app')

@section('title', 'شروط الاستخدام')

@section('content')
    <div class="pt-[120px] bg-bukhari-black min-h-screen py-20">
        <div class="container mx-auto px-6">

            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">شروط الاستخدام</h1>
                <div class="w-24 h-1 bg-bukhari-gold mx-auto rounded-full"></div>
                <p class="text-gray-400 mt-4 text-lg">الشروط والأحكام التي تحكم استخدام خدماتنا</p>
            </div>

            <div class="max-w-4xl mx-auto space-y-8 text-right">

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">القبول بالشروط</h2>
                    <p class="text-gray-300 leading-relaxed">
                        باستخدام موقع معرض البخاري الإلكتروني أو خدماتنا، فإنك توافق على الالتزام بهذه الشروط والأحكام. إذا كنت لا توافق على أي من هذه الشروط، يرجى عدم استخدام خدماتنا.
                    </p>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">الخدمات المقدمة</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        نقدم الخدمات التالية:
                    </p>
                    <ul class="space-y-2 text-gray-300 mr-6">
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            عرض وبيع منتجات السيراميك والبورسلين
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            خدمات الاستشارة والتصميم
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            خدمات التركيب والصيانة
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            الدعم الفني والضمان
                        </li>
                    </ul>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">التزامات المستخدم</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        عند استخدام خدماتنا، يجب عليك:
                    </p>
                    <ul class="space-y-2 text-gray-300 mr-6">
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            تقديم معلومات صحيحة ودقيقة
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            عدم استخدام الموقع لأغراض غير قانونية
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            احترام حقوق الملكية الفكرية
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            عدم إرسال محتوى ضار أو مسيء
                        </li>
                    </ul>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">الأسعار والدفع</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        بخصوص الأسعار والدفع:
                    </p>
                    <ul class="space-y-2 text-gray-300 mr-6">
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            جميع الأسعار شاملة ضريبة القيمة المضافة
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            الأسعار قابلة للتغيير دون إشعار مسبق
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            نقبل طرق الدفع المعتمدة في السوق المصري
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-bukhari-gold mt-1">•</span>
                            يتم تأكيد الطلب بعد استلام الدفعة
                        </li>
                    </ul>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">الإلغاء والاسترداد</h2>
                    <p class="text-gray-300 leading-relaxed">
                        يمكن إلغاء الطلب خلال 24 ساعة من تأكيده مع استرداد كامل المبلغ. بعد البدء في التنفيذ، قد يتم خصم رسوم الإلغاء حسب حجم العمل المنجز. جميع المبالغ المستردة تتم خلال 7-14 يوم عمل.
                    </p>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">الضمان والمسؤولية</h2>
                    <p class="text-gray-300 leading-relaxed">
                        نقدم ضماناً شاملاً على منتجاتنا وخدماتنا كما هو موضح في سياسة الضمان. نحن غير مسؤولين عن الأضرار الناتجة عن سوء الاستخدام أو العوامل الجوية أو الكوارث الطبيعية.
                    </p>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">حقوق الملكية الفكرية</h2>
                    <p class="text-gray-300 leading-relaxed">
                        جميع المحتويات والصور والتصاميم على الموقع محمية بحقوق الطبع والنشر. لا يحق لك نسخ أو توزيع أو استخدام هذه المواد دون إذن كتابي مسبق من معرض البخاري.
                    </p>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">القانون المطبق</h2>
                    <p class="text-gray-300 leading-relaxed">
                        تخضع هذه الشروط لقوانين جمهورية مصر العربية. أي نزاع ينشأ عن هذه الشروط سيتم حله في محاكم القاهرة.
                    </p>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">التحديثات</h2>
                    <p class="text-gray-300 leading-relaxed">
                        نحتفظ بالحق في تحديث هذه الشروط في أي وقت. سنقوم بإشعارك بأي تغييرات جوهرية عبر البريد الإلكتروني أو إشعار على الموقع.
                    </p>
                </div>

                <div class="bg-zinc-900 p-8 rounded-sm border border-white/5">
                    <h2 class="text-2xl font-bold text-white mb-6">التواصل</h2>
                    <p class="text-gray-300 leading-relaxed">
                        لأي استفسارات حول هذه الشروط، يمكنك التواصل معنا عبر:
                    </p>
                    <div class="mt-4 space-y-2 text-gray-300">
                        <p>البريد الإلكتروني: <span class="text-bukhari-gold">legal@albukhari.com</span></p>
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