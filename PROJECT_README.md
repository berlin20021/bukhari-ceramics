# معرض البخاري للسيراميك

موقع إلكتروني حديث ومتجاوب لمعرض البخاري للسيراميك، مبني بـ Laravel و Tailwind CSS مع دعم Sanity.io لإدارة المحتوى.

## المميزات

- ✅ تصميم متجاوب وعصري
- ✅ دعم اللغة العربية (RTL)
- ✅ نظام إدارة محتوى Sanity.io
- ✅ معرض صور تفاعلي للمنتجات
- ✅ نماذج اتصال وظيفية
- ✅ تحسين محركات البحث (SEO)
- ✅ أداء عالي وسرعة تحميل

## متطلبات التشغيل

- PHP 8.1 أو أحدث
- Composer
- Node.js و npm
- حساب Sanity.io (اختياري لإدارة المحتوى)

## التثبيت والإعداد

### 1. تحميل المشروع

```bash
git clone <repository-url>
cd albukhari
```

### 2. تثبيت التبعيات

```bash
composer install
npm install
```

### 3. إعداد متغيرات البيئة

```bash
cp .env.example .env
php artisan key:generate
```

### 4. إعداد قاعدة البيانات (اختياري)

```bash
# للاستخدام المحلي، يمكن استخدام SQLite
touch database/database.sqlite
```

### 5. تشغيل التطبيق

```bash
php artisan serve
npm run dev
```

## إعداد Sanity.io (لإدارة المحتوى)

### 1. إنشاء مشروع Sanity

1. اذهب إلى [sanity.io](https://sanity.io)
2. أنشئ حساب جديد أو سجل دخول
3. أنشئ مشروع جديد
4. احصل على Project ID و Token

### 2. إعداد متغيرات البيئة

أضف المتغيرات التالية إلى ملف `.env`:

```env
SANITY_PROJECT_ID=your_project_id_here
SANITY_DATASET=production
SANITY_TOKEN=your_token_here
SANITY_API_VERSION=2023-01-01
```

### 3. إعداد Schema في Sanity Studio

1. أنشئ Sanity Studio محلياً أو استخدم Sanity Studio المدمج
2. انسخ محتوى ملف `sanity-schema.js` إلى مشروع Sanity الخاص بك
3. أضف المنتجات من خلال Sanity Studio

### 4. هيكل البيانات

```javascript
// مثال على منتج في Sanity
{
  name: "ماركينا بلاك",
  slug: { current: "markina-black" },
  category: "بورسلين إسباني",
  price: 450,
  unit: "ج.م / متر",
  image: { /* صورة رئيسية */ },
  images: [ /* مصفوفة من الصور */ ],
  description: "وصف المنتج...",
  features: ["ميزة 1", "ميزة 2"],
  isNew: true
}
```

## استخدام الموقع

### إدارة المنتجات

بدون Sanity: المنتجات تظهر من المصفوفة المحلية في `ProductController.php`

مع Sanity: المنتجات تُحمل من Sanity.io تلقائياً

### إضافة منتج جديد

1. اذهب إلى Sanity Studio
2. أضف منتج جديد بالحقول المطلوبة
3. احفظ التغييرات
4. المنتج سيظهر في الموقع تلقائياً

## البنية التقنية

```
albukhari/
├── app/
│   ├── Http/Controllers/
│   │   ├── ProductController.php    # إدارة المنتجات
│   │   └── PageController.php       # الصفحات الثابتة
│   └── Services/
│       └── SanityService.php        # خدمة Sanity
├── config/
│   └── sanity.php                   # إعدادات Sanity
├── resources/views/
│   ├── layouts/app.blade.php        # التخطيط الرئيسي
│   ├── components/                  # المكونات
│   ├── welcome.blade.php            # الصفحة الرئيسية
│   ├── products.blade.php           # صفحة المنتجات
│   └── product.blade.php            # صفحة تفاصيل المنتج
└── sanity-schema.js                 # مخطط Sanity
```

## التطوير

### إضافة صفحة جديدة

1. أضف route في `routes/web.php`
2. أنشئ controller method
3. أنشئ view file
4. أضف الرابط في navbar/footer إذا لزم الأمر

### تخصيص التصميم

- الألوان معرّفة في `tailwind.config.js`
- الخطوط في `resources/css/app.css`
- الرسوم المتحركة في نفس الملف

## النشر

### على خادم

1. ارفع الملفات إلى الخادم
2. قم بتثبيت التبعيات
3. إعداد متغيرات البيئة
4. تشغيل migrations إذا لزم الأمر
5. إعداد web server (Apache/Nginx)

### على Vercel/Netlify

يمكن نشر الفرونت إند فقط، مع Sanity كـ backend.

## الدعم

لأي استفسارات أو مشاكل، يرجى فتح issue في المستودع.

## الترخيص

هذا المشروع مرخص تحت رخصة MIT.
