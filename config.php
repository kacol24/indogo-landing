<?php

return [
    'production'  => false,
    'baseUrl'     => 'http://indogo-landing.docker/',
    'title'       => 'BabyGo Inc',
    'description' => 'BabyGo menyediakan produk untuk memudahkan kegiatan orang tua dengan si Kecil. Diaper Bag Premium kami menawarkan solusi kebutuhan orang tua modern dengan material kuat, fitur pintar, dan desain unisex. Temukan koleksi tas kami seperti Aeon, Harley, Luna, Zoey, dan Nema.',
    'collections' => [],
    
    'whatsapp_no' => '6289676717676',
    
    'products' => [
        [
            'featured_image' => 'assets/images/aeon-diaper-bag-featured.jpeg',
            'image'          => 'assets/images/aeon-diaper-bag-thumb.jpeg',
            'credit'         => 'Photo by Natasha Gracia',
            'title'          => 'Aeon<br>Diaper Bag',
            'dimension'      => 'P x L x T : 25 x 14 x 38 (cm)',
            'colors'         => [
                '#29475e',
                '#2a2925',
                '#6d6844',
            ],
            'bonus'          => [
                'image' => 'assets/images/bonus-waterproof-changing-pad.png',
                'title' => 'Bonus Waterproof Changing Pad',
            ],
        ],
        [
            'featured_image' => 'assets/images/harley-diaper-bag-featured.jpeg',
            'image'          => 'assets/images/harley-diaper-bag-thumb.png',
            'title'          => 'Harley<br>Diaper Bag',
            'dimension'      => 'P x L x T : 35 x 16 x 40 (cm)',
            'colors'         => [
                '#29475e',
                '#2a2925',
                '#bd4b56',
            ],
            'bonus'          => [
                'image' => 'assets/images/bonus-bottle-bag-and-pampers-pouch.png',
                'title' => 'Bonus Bottle Bag And Pampers Pouch',
            ],
        ],
        [
            'featured_image' => 'assets/images/luna-diaper-bag-featured.jpeg',
            'image'          => 'assets/images/luna-diaper-bag-thumb.png',
            'title'          => 'Luna<br>Diaper Bag',
            'dimension'      => 'P x L x T : 24 x 12 x 36 (cm)',
            'colors'         => [
                '#29475e',
                '#2a2925',
                '#6d6844',
            ],
            'bonus'          => [
                'image' => 'assets/images/bonus-waterproof-changing-pad.png',
                'title' => 'Bonus Waterproof Changing Pad',
            ],
        ],
        [
            'featured_image' => 'assets/images/zoey-diaper-bag-featured.jpeg',
            'image'          => 'assets/images/zoey-diaper-bag-thumb.png',
            'title'          => 'Zoey<br>Diaper Bag',
            'dimension'      => 'P x L x T : 30 x 12,5 x 23 (cm)',
            'colors'         => [
                '#29475e',
                '#2a2925',
                '#614f58',
            ],
            'bonus'          => [
                'image' => 'assets/images/bonus-mini-clear-pouch.png',
                'title' => 'Bonus Mini Clear Pouch',
            ],
        ],
        [
            'featured_image' => 'assets/images/nema-diaper-bag-featured.jpeg',
            'image'          => 'assets/images/nema-diaper-bag-thumb.png',
            'title'          => 'Nema<br>Diaper Bag',
            'dimension'      => 'P x L x T : 25 x 6 x 18 (cm)',
            'colors'         => [
                '#29475e',
                '#2a2925',
            ],
            'bonus'          => [
                'image' => 'assets/images/bonus-shoulder-strap-1.png',
                'title' => 'Bonus Shoulder Strap',
            ],
        ],
    ],
    
    'testimonials' => [
        [
            'image'   => 'assets/images/testimonials/testi-01.jpeg',
            'name'    => 'Rosie Redros',
            'message' => 'Udah 9 tahun pakai tas nya babyGo. Karena memang sebagus itu. Muat banyak dan dapet
                                waterproof changing pad juga. Rekomen ya Moms 👍',
        ],
        [
            'image'   => 'assets/images/testimonials/testi-02.jpeg',
            'name'    => 'Melisa Soetjipto',
            'message' => 'Ukurannya pas untuk keperluan baby. Kompartemen nya banyak dan lightweight. Definitely consider as must have items for newborn essentials',
        ],
        [
            'image'   => 'assets/images/testimonials/testi-03.jpeg',
            'name'    => 'Shirley Lokito',
            'message' => 'Sudah hampir 2 tahun ditemenin babyGo Harley Diaper Bag. Memudahkan hidupku banget. Compartment banyak, multifungsi, bisa di hand carry kalo naik pesawat, kokoh',
        ],
        [
            'image'   => 'assets/images/testimonials/testi-04.jpeg',
            'name'    => 'Febie Arimbhie',
            'message' => 'Udah sebulan ini Nema jadi Mommy bag to go aku. Super compact yet stylish. Bisa dijinjing ataupun diselempang. Furingnya waterproof pula! Fix no debat bisa dipake nggak cuma sebagai diaper bag, tapi juga sebagai tas emak-emak',
        ],
        [
            'image'   => 'assets/images/testimonials/testi-05.jpeg',
            'name'    => 'Yovie Agustine',
            'message' => 'Enak banget pake tas gini ya, kalau anak anak minta sesuatu, ambilnya cepet. Ringan, banyak sekat, bisa di taruh stroller',
        ],
    ],
    
    'cooler_bag' => [
        'products' => [
            [
                'featured_image' => 'assets/images/hanzel-cooler-bag-model.jpeg',
                'image' => 'assets/images/hanzel-cooler-bag.png',
                'title' => 'Hanzel<br>Cooler Bag',
                'has_laptop' => true,
                'dimension' => [
                    'Dimensions Bag' => 'L x W x H : 27 x 19 x 42 (cm)',
                    'Dimensions Cooler Bag' => 'L xW x H : 23 x 13 x 17 (cm)',
                ],
                'colors' => [
                    '#29465e',
                    '#2a2924',
                    '#b64a55',
                ],
                'bonus' => [
                    [
                        'image' => 'assets/images/bonus-ice-gel.png',
                        'title' => 'Bonus Ice Gel Pack 500gr',
                    ],
                    [
                        'image' => 'assets/images/bonus-mini-cooler-bag.png',
                        'title' => 'Mini Cooler Bag',
                    ],
                ],
            ],
            [
                'featured_image' => 'assets/images/luca-cooler-bag-model.jpeg',
                'image' => 'assets/images/luca-cooler-bag.png',
                'title' => 'Luca<br>Cooler Bag',
                'has_laptop' => true,
                'dimension' => [
                    'Dimensions Bag' => 'L x W x H : 30 x 22 x 41 (cm)',
                    'Dimensions Cooler Bag' => 'L xW x H : 23 x 13 x 17 (cm)',
                ],
                'colors' => [
                    '#29465e',
                    '#2a2924',
                    '#6c6844',
                ],
                'bonus' => [
                    [
                        'image' => 'assets/images/bonus-ice-gel.png',
                        'title' => 'Bonus Ice Gel Pack 500gr',
                    ],
                    [
                        'image' => 'assets/images/bonus-mini-cooler-bag-2.png',
                        'title' => 'Mini Cooler Bag',
                    ],
                ],
            ],
            [
                'featured_image' => 'assets/images/tote-cooler-bag-model.jpeg',
                'image' => 'assets/images/tote-cooler-bag.png',
                'credit' => 'Photo by Mom Sherla',
                'title' => 'Tote<br>Cooler Bag',
                'dimension' => 'L x W x H : 30 x 22 x 41 (cm)',
                'colors' => [
                    '#29465e',
                    '#2a2924',
                ],
                'bonus' => [
                    [
                        'image' => 'assets/images/bonus-ice-gel.png',
                        'title' => 'Bonus Ice Gel Pack 500gr',
                    ],
                    [
                        'image' => 'assets/images/bonus-shoulder-strap-1.png',
                        'title' => 'Shoulder Strap',
                    ],
                ],
            ],
            [
                'featured_image' => 'assets/images/neo-cooler-bag-model.jpeg',
                'image' => 'assets/images/neo-cooler-bag.png',
                'title' => 'Neo<br>Cooler Bag',
                'dimension' => 'L x W x H : 26 x 16 x 26 (cm)',
                'colors' => [
                    '#2a2924',
                    [
                        '#7b8080',
                        '#87543e'
                    ],
                ],
                'bonus' => [
                    [
                        'image' => 'assets/images/bonus-ice-gel.png',
                        'title' => 'Bonus Ice Gel Pack 500gr',
                    ],
                    [
                        'image' => 'assets/images/bonus-shoulder-strap-2.png',
                        'title' => 'Shoulder Strap',
                    ],
                ],
            ],
            [
                'featured_image' => 'assets/images/coco-cooler-bag-model.jpeg',
                'image' => 'assets/images/coco-cooler-bag.png',
                'title' => 'Coco<br>Cooler Bag',
                'dimension' => 'L x W x H : 27 x 13 x 29 (cm)',
                'colors' => [
                    '#2a2924',
                    '#29465e',
                ],
                'bonus' => [
                    [
                        'image' => 'assets/images/bonus-ice-gel.png',
                        'title' => 'Bonus Ice Gel Pack 500gr',
                    ],
                    [
                        'image' => 'assets/images/bonus-shoulder-strap-3.png',
                        'title' => 'Shoulder Strap',
                    ],
                ],
                'after_image' => [
                    'image' => 'assets/images/3-in-1-use.png',
                ],
            ],
        ],
    
        'testimonials' => [
            [
                'image' => 'assets/images/testimony-ricka-atmadja.jpeg',
                'name' => 'Ricka Puspita Atmadja',
                'message' => 'Buat working Moms yg lagi cari diaper bag SEKALIGUS cooler bag DAN bisa bawa laptop juga, nih aku kenalin tas merk <strong class="text-primary">babyGo Hanzel Cooler Backpack</strong>😍 Cocok untuk yang mau traveling sambil kerja & pumping',
            ],
            [
                'image' => 'assets/images/testimony-yovita-lesmana.jpeg',
                'name' => 'Yovita Lesmana & Husband',
                'message' => 'Punya anak, dua pula, ga bakal bisa apa apa semua sendiri. Butuh bantuan suami pastinya untuk membawa barang-barang. Aku beli <strong class="text-primary">babyGo Luca Cooler Bag</strong>. Ada Laptop compartment, bisa digantung di stroller dan ada mini cooler bag buat simpan ASIP. High quality, chic & stylish😍',
            ],
            [
                'image' => 'assets/images/testimony-varencia-law.jpeg',
                'name' => 'Verencia Law',
                'message' => 'Lately lagi suka bgt pake <strong class="text-primary">babyGo Tote Cooler Bag</strong>. Se-kepake itu. muat banyak poll, alat pump- ing, nursing cover, ASIP beku, semua bisa mashokk! Worth to buy',
            ],
            [
                'image' => 'assets/images/testimony-marlisa-abigail.jpeg',
                'name' => 'Marlisa Abigail',
                'message' => 'Mama Eping kalo kemana mana bawanya ya Cooler Bag. Ini <strong class="text-primary">babyGo Neo Cooler Bag</strong>. Modelnya simple dan elegan. Spacy! Muat banyak. Thermal nya di lapisi lagi sama plas- tik, jadinya ga rembes bag nya. Bahanya tebal dan kuat',
            ],
            [
                'image' => 'assets/images/testimony-ayudhya-ghita.jpeg',
                'name' => 'Ayudhya Ghita',
                'message' => 'Yang perlu cooler bag kecil, ringkes, bisa jadi selempang bisa jadi ransel, dan bentuknya tipis kalo ga ada isinya, warnanya simple, bisa ngelirik ke <strong class="text-primary">babyGo Coco Cooler Bag</strong>. Banyak kantongnya. Kantong yang ada termalnya bisa buat taruh alat pompa + 2 ice gel',
            ],
        ],
    ],
];
