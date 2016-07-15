<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute باید پذیرفته شود',
    'active_url'           => ':attribute یک آدرس معتبر نیست',
    'after'                => ':attribute باید یک تاریخ بعد از :date باشد',
    'alpha'                => ':attribute باید فقط شامل حروف باشد',
    'alpha_dash'           => ':attribute باید فقط شامل حروف، اعداد و خط فاصله باشد',
    'alpha_num'            => ':attribute باید فقط شامل حروف و اعداد باشد',
    'array'                => ':attribute باید یک آرایه باشد',
    'before'               => ':attribute باید بک تاریخ قبل از :date باشد',
    'between'              => [
        'numeric' => ':attribute باید بین :min و :max باشد',
        'file'    => ':attribute باید بین :min و :max کیلوبایت باشد',
        'string'  => ':attribute باید بین :min و :max حرف باشد',
        'array'   => ':attribute باید بین :min و :max مورد باشد',
    ],
    'boolean'              => ':attribute باید درست یا نادرست باشد',
    'confirmed'            => 'تاییدیه :attribute مطابقت ندارد',
    'date'                 => ':attribute یک تاریخ معتبر نیست',
    'date_format'          => 'قالب :attribute با :format مطابقت ندارد',
    'different'            => ':attribute و :other باید متفاوت باشند',
    'digits'               => ':attribute باید :digits رقم باشد',
    'digits_between'       => ':attribute باید بین :min و :max رقم باشد',
    'email'                => ':attribute باید یک آدرس ایمیل معتبر باشد',
    'filled'               => 'وارد کردن :attribute لازم است',
    'exists'               => ':attribute انتخاب شده معتبر نیست',
    'image'                => ':attribute باید یک تصویر یاشد',
    'in'               => ':attribute انتخاب شده معتبر نیست',
    'integer'              => ':attribute باید بک عدد صحیح باشد',
    'ip'                   => ':attribute باید یک آی پی معتبر باشد',
    'max'                  => [
        'numeric' => ':attribute نباید بیشتر از :max باشد',
        'file'    => ':attribute نباید بیشتر از :max کیلوبایت باشد',
        'string'  => ':attribute نباید بیشتر از :max حرف باشد',
        'array'   => ':attribute نباید بیشتر از :max مورد باشد',
    ],
    'mimes'                => ':attribute باید یک فایل از نوع :values باشد',
    'min'                  => [
        'numeric' => ':attribute باید حداقل :min باشد',
        'file'    => ':attribute باید حداقل :min کیلوبایت',
        'string'  => ':attribute باید حداقل :min حرف باشد',
        'array'   => ':attribute باید حداقل :min مورد باشد',
    ],
    'not_in'               => ':attribute انتخاب شده معتبر نیست',
    'numeric'              => ':attribute  باید یک عدد باشد',
    'regex'                => 'قالب :attribute معتبر نیست',
    'required'             => 'وارد کردن :attribute لازم است',
    'required_if'          => 'وارد کردن :attribute لازم است',
    'required_with'        => 'وارد کردن :attribute لازم است زمانی که :values تعریف شده است',
    'required_with_all'    => 'وارد کردن :attribute لازم است زمانی که :values تعریف شده است',
    'required_without'     => 'وارد کردن :attribute لازم است زمانی که :values تعریف نشده است',
    'required_without_all' => 'وارد کردن :attribute لازم است زمانی که هیچ کدام از :values تعریف نشده اند',
    'same'                 => ':attribute و :other باید مطابقت داشته باشند',
    'size'                 => [
        'numeric' => ':attribute باید :size باشد',
        'file'    => ':attribute باید :size کیلوبایت باشد',
        'string'  => ':attribute باید :size حرف باشد',
        'array'   => ':attribute باید :size مورد باشد',
    ],
    'string'               => ':attribute باید رشته باشد',
    'timezone'             => ':attribute باید یک منطقه معتبر باشد',
    'unique'               => ':attribute قبلاً انتخاب شده است',
    'url'                  => 'قالب :attribute معتبر نیست',

    'arabic'                => 'فیلد :attribute تنها می‌تواند شامل حروف فارسی باشد',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
		'username' => 'نام کاربری',
		'password' => 'کلمه عبور',
		'email' => 'ایمیل',
		'role' => 'نوع حساب',
		'bio' => 'بیوگرافی',
		'postalCode' => 'کد پستی',
		'name' => 'نام',
		'family' => 'نام خانوادگی',
		'address' => 'آدرس',
		'phone' => 'تلفن',
		'mobile' => 'تلفن همراه',
        'designer'  => 'طراح',
        'coverPic'  => 'عکس کاور',
        'cover'  => 'عکس کاور',
        'profilePic'    => 'آواتار',
        'profile'    => 'آواتار',
        'avatar'    => 'آواتار',

        'badges'    => 'علت دیزاین',
        'description'   => 'توضیحات',
        'status'       => 'وضعیت',
        'title'        => 'عنوان',
        'product'       => 'محصول',
        'path'          => 'آدرس',

        'icon'          => 'آیکون',
        'link'          => 'لینک',

        'start_date'    => 'تاریخ شروع',
        'end_date'    => 'تاریخ پایان',
        'count'        => 'تعداد',
        'static_price'  => 'قیمت',

        'province'  => 'استان',
        'province_id'  => 'استان',
        'city'      => 'شهر',
        'city_id'      => 'شهر',

        'receiver'  => 'دریافت کننده',


        'user'      => 'کاربر',

        'postal_code'   => 'کد پستی',

        'deliType'     => 'نحوه‌ی ارسال',
        'method'        => 'نحوه‌ی پرداخت',

        'text'          => 'متن پیام',
	],

];
