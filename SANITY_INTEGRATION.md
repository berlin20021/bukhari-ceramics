lbukhari/SANITY_INTEGRATION.md</path>
<content"># ربط مع Sanity.io - ملخص التنفيذ

## ما تم إنجازه

### ✅ تثبيت وإعداد Sanity PHP SDK
- تم تثبيت `sanity/sanity-php` عبر Composer
- تم إنشاء ملف التكوين `config/sanity.php`
- تم إضافة متغيرات البيئة في `.env.example`

### ✅ إنشاء SanityService
- تم إنشاء `app/Services/SanityService.php`
- يحتوي على methods لجلب المنتجات والمنتج الفردي
- يستخدم GROQ queries للاستعلام عن البيانات

### ✅ تحديث ProductController
- تم تحديث `ProductController` لاستخدام Sanity API
- يحتوي على fallback للمنتجات المحلية في حالة عدم تكوين Sanity
- يحول بيانات Sanity إلى التنسيق المطلوب للـ views

### ✅ إنشاء Schema لـ Sanity
- تم إنشاء `sanity-schema.js` مع تعريف document type للمنتجات
- يشمل جميع الحقول المطلوبة: name, category, price, images, etc.

### ✅ كتابة التعليمات
- تم إنشاء `PROJECT_README.md` مع تعليمات مفصلة للإعداد
- يشمل خطوات إنشاء مشروع Sanity وإعداد المتغيرات

## كيفية الاستخدام

### بدون Sanity (الحالة الحالية)
- الموقع يعمل مع المنتجات المحلية المُعرّفة في `ProductController`
- جميع الصفحات تعمل بشكل طبيعي

### مع Sanity
1. أنشئ مشروع Sanity على sanity.io
2. احصل على Project ID و Token
3. أضف المتغيرات في `.env`:
   ```
   SANITY_PROJECT_ID=your_project_id
   SANITY_DATASET=production
   SANITY_TOKEN=your_token
   ```
4. أضف المنتجات من Sanity Studio
5. المنتجات ستظهر تلقائياً في الموقع

## المزايا

- **إدارة ديناميكية**: إضافة/تعديل/حذف المنتجات بدون تعديل الكود
- **fallback آمن**: في حالة مشاكل في Sanity، يعمل الموقع مع المنتجات المحلية
- **أداء محسن**: البيانات تُحمل من Sanity API
- **سهولة الصيانة**: فصل المحتوى عن الكود

## الخطوات التالية (اختيارية)

- إضافة caching للمنتجات
- إضافة webhook لتحديث cache عند تغيير المحتوى
- إضافة المزيد من content types (مثل المدونة، الشهادات)
