<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'        => 'Polje :attribute mora biti prihvaćeno.',
    'active_url'      => 'Polje :attribute nije validan URL.',
    'after'           => 'Polje :attribute mora biti datum posle :date.',
    'after_or_equal'  => 'Polje :attribute mora da bude :date ili kasniji datum.',
    'alpha'           => 'Polje :attribute može sadržati samo slova.',
    'alpha_dash'      => 'Polje :attribute može sadržati samo slova, brojeve i povlake.',
    'alpha_num'       => 'Polje :attribute može sadržati samo slova i brojeve.',
    'array'           => 'Polje :attribute mora sadržati nekih niz stavki.',
    'before'          => 'Polje :attribute mora biti datum pre :date.',
    'before_or_equal' => ':attribute mora da bude :date ili raniji datum.',
    'between'         => [
        'numeric' => 'Polje :attribute mora biti između :min - :max.',
        'file'    => 'Fajl :attribute mora biti između :min - :max kilobajta.',
        'string'  => 'Polje :attribute mora biti između :min - :max karaktera.',
        'array'   => 'Polje :attribute mora biti između :min - :max stavki.',
    ],
    'boolean'        => 'Polje :attribute mora biti tačno ili netačno',
    'confirmed'      => 'Potvrda polja :attribute se ne poklapa.',
    'date'           => 'Polje :attribute nije važeći datum.',
    'date_equals'    => 'Polje :attribute mora da bude datum: :date.',
    'date_format'    => 'Polje :attribute ne odgovora prema formatu :format.',
    'different'      => 'Polja :attribute i :other moraju biti različita.',
    'digits'         => 'Polje :attribute mora sadržati :digits šifri.',
    'digits_between' => 'Polje :attribute mora biti izemđu :min i :max šifri.',
    'dimensions'     => 'Polje :attribute ime nedozvoljene dimenzije slike.',
    'distinct'       => 'Polje :attribute ima dupliranu vrednost.',
    'email'          => 'Format polja :attribute nije validan.',
    'ends_with'      => 'Polje :attribute mora da se završi sa nečim od sledećeg: :values.',
    'exists'         => 'Odabrano polje :attribute nije validno.',
    'file'           => ':attribute mora da bude datoteka.',
    'filled'         => 'Polje :attribute je obavezno.',
    'gt'             => [
        'numeric' => 'Polje :attribute mora da bude veći od :value.',
        'file'    => 'Polje :attribute mora da bude veći od :value kilobajta.',
        'string'  => 'Polje :attribute mora da sadrži više od :value znakova.',
        'array'   => 'Polje :attribute mora da sadrži više od :value stavke.',
    ],
    'gte' => [
        'numeric' => 'Polje :attribute mora da bude :value ili veći.',
        'file'    => 'Polje :attribute mora da ima :value ili više kilobajta.',
        'string'  => 'Polje :attribute mora da sadrži :value ili više znakova.',
        'array'   => 'Polje :attribute mora da sadrži :value stavki ili više.',
    ],
    'image'    => 'Polje :attribute mora biti slika.',
    'in'       => 'Polje Odabrano polje :attribute nije validno.',
    'in_array' => 'Polje :attribute ne postoji u :other.',
    'integer'  => 'Polje :attribute mora biti broj.',
    'ip'       => 'Polje :attribute mora biti validna IP adresa.',
    'ipv4'     => 'Polje :attribute mora da bude važeća IPv4 adresa.',
    'ipv6'     => 'Polje :attribute mora da bude važeća IPv6 adresa.',
    'json'     => 'Polje :attribute mora da bude važeća JSON niska.',
    'lt'       => [
        'numeric' => 'Polje :attribute mora da bude manji od :value.',
        'file'    => 'Polje :attribute mora da bude manji od :value kilobajta.',
        'string'  => 'Polje :attribute mora da sadrži manje od :value znakova.',
        'array'   => 'Polje :attribute mora da sadrži manje od :value stavki.',
    ],
    'lte' => [
        'numeric' => 'Polje :attribute mora da bude :value ili manji.',
        'file'    => 'Polje :attribute mora da bude manji od :value kilobajta.',
        'string'  => 'Polje :attribute mora da sadrži :value ili manje znakova.',
        'array'   => 'Polje :attribute ne sme da sadrži više od :value stavki.',
    ],
    'max' => [
        'numeric' => 'Polje :attribute mora biti manje od :max.',
        'file'    => 'Polje :attribute mora biti manje od :max kilobajta.',
        'string'  => 'Polje :attribute mora sadržati manje od :max karaktera.',
        'array'   => 'Polje :attribute ne smije da image više od :max stavki.',
    ],
    'mimes'     => 'Polje :attribute mora biti fajl tipa: :values.',
    'mimetypes' => 'Polje :attribute mora biti fajl tipa: :values.',
    'min'       => [
        'numeric' => 'Polje :attribute mora biti najmanje :min.',
        'file'    => 'Fajl :attribute mora biti najmanje :min kilobajta.',
        'string'  => 'Polje :attribute mora sadržati najmanje :min karaktera.',
        'array'   => 'Polje :attribute mora sadrzati najmanje :min stavku.',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value',
    'not_in'               => 'Odabrani element polja :attribute nije validan.',
    'not_regex'            => 'Format :attribute je nevažeći.',
    'numeric'              => 'Polje :attribute mora biti broj.',
    'password'             => 'Pogrešna lozinka',
    'present'              => 'Polje :attribute mora da bude prisutno.',
    'regex'                => 'Format polja :attribute nije validan.',
    'required'             => 'Polje :attribute je obavezno.',
    'required_if'          => 'Polje :attribute je potrebno kada polje :other sadrži :value.',
    'required_unless'      => 'Polje :attribute je obavezno, osim ako je :other u :values.',
    'required_with'        => 'Polje :attribute je potrebno kada polje :values je prisutan.',
    'required_with_all'    => 'Polje :attribute je obavezno kada je :values prikazano.',
    'required_without'     => 'Polje :attribute je potrebno kada polje :values nije prisutan.',
    'required_without_all' => 'Polje :attribute je potrebno kada nijedan od sledeći polja :values nisu prisutni.',
    'same'                 => 'Polja :attribute i :other se moraju poklapati.',
    'size'                 => [
        'numeric' => 'Polje :attribute mora biti :size.',
        'file'    => 'Fajl :attribute mora biti :size kilobajta.',
        'string'  => 'Polje :attribute mora biti :size karaktera.',
        'array'   => 'Polje :attribute mora sadržati :size stavki.',
    ],
    'starts_with' => 'Polje :attribute mora da počne sa: :values',
    'string'      => 'Polje :attribute mora sadržati slova.',
    'timezone'    => 'Polje :attribute mora biti ispravna vremenska zona.',
    'unique'      => 'Polje :attribute već postoji.',
    'uploaded'    => ':attribute nije otpremljen.',
    'url'         => 'Format polja :attribute ne važi.',
    'uuid'        => ':attribute mora da bude važeći UUID.',

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
        'image' => 'Slika',
        'name' => 'Ime',
        'lastname' => 'Prezime',
        'text' => 'Tekst',
        'title' => 'Naziv',
        'phone' => 'Telefon',
        'viber' => 'Mobilni telefon',
        'email' => 'Email',
        'password' => 'Lozinka',
        'file' => 'Fajl',
        'instagram' => 'Instagram',
        'tiktok' => 'TikTok',
        'facebook' => 'Facebook',
        'youtube' => 'Youtube',
        'address' => 'Adresa',
        'description' => 'Opis',
        'keywords' => 'Ključne reči',
        'analytics' => 'Google Analytics',
        'logo' => 'Logo',
        'logoH' => 'LogoH',
        'logoF' => 'LogoF',
        'logoFF' => 'LogoFF',
        'favicon' => 'Favicon',
        'url' => 'URL',
        'urltitle' => 'URL Naslov',
        'urlTitle' => 'URL Naslov',
        'body' => 'Tekst',
        'datum' => 'Datum',
        'filetitle' => 'Naslov fajla',
        'message' => 'Poruka',
        'location' => 'Lokacija',
        'position' => 'Pozicija',
        'has_price' => 'Cijena po dogovoru',
        'price' => 'Cijena',
        'prices' => 'Cijena',
        'prices.*' => 'Cijena',
        'username' => 'Korisničko ime',
        'company' => 'Firma',
        'street' => 'Ulica',
        'zip' => 'Poštanski broj',
        'userkey' => 'Šifra korisnika u robnom',
        'currency' => 'Valuta plaćanja',
        'city' => 'Grad',
        'old_password' => 'Trenutna lozinka',
        'datetime' => 'Datum',
        'intro' => 'Uvodni tekst',
        'description' => 'Opis',
        'download' => 'Preuzimanje',
        'pricelist_category_id' => 'Kategorija',
        'category' => 'Kategorija',
        'faq_category_id' => 'Kategorija',
        'has_month_cart' => 'Mjesecna korpa?',
        'category_id' => 'Kategorija',
        'priority' => 'Prioritet prikaza',
        'local_category' => 'Lokalna kategorija',
        'menu' => 'Prikaz u meniju',
        'brand_id' => 'Brend',
        'code' => 'Šifra artikla',
        'code_nicename' => 'Šifra artikla u nazivu',
        'stock' => 'Lager',
        'lower_price' => 'Cijena sa popustom',
        'discount' => 'Popust',
        'specifications_key.*' => 'Specifijakice naziv',
        'specifications_value.*' => 'Specifikacije tekst',
        'is_featured' => 'Izdvojen',
        'is_popular' => 'Popularan',
        'is_action' => 'Na akciji',
        'is_special' => 'Specijalna ponuda',
        'is_wholesale' => 'Veleprodaja',
        'cookie' => 'Cookie URL',
        'stock_status' => 'Na stanju',
        'stock_warning' => 'Upozorenje za magacin',
        'min_order' => 'Minimalna narudžba',
        'price_type' => 'Način prikaza cijena',
        'price_value' => 'Marža',
        'value' => 'Vrijednosti',
        'id' => 'ID',
        'note' => 'Napomena',
        'product_id' => 'ID Proizvoda',
        'plates' => 'Registarske tablice',
        'user_comment' => 'Komentar kupca',
        'option' => 'Opcija',
        'attrib' => 'Atributi',
        'attrib.*' => 'Atribut',
        'brand1' => 'Brend #1',
        'code1' => 'Šifra #1',
        'brand2' => 'Brend #2',
        'code2' => 'Šifra #2',
        'delivery' => 'Način dostave',
        'doc' => 'Vrsta dokumenta',
        'quantity' => 'Količina',
        'product_title' => 'Naziv proizvoda',
        'product_code' => 'Kod proizvoda',
        'return_reason' => 'Greška ili drugi razlozi',
        'opened' => 'Proizvod je otvoren',
        'terms' => 'Politika privatnosti URL',
        'is_header' => 'Header?',
        'is_footer' => 'Footer?',
        'date_from' => 'Datum i vrijeme pocetka',
        'date_to' => 'Datum i vrijeme kraja',
        'type_restrict' => 'Useri koju ne mogu / mogu da vide baner',
        'check_users' => 'Korisnici',
        'display_locations' => 'Mjesto prikazivanja',
        'meni_image' => 'Baner za meni',
        'sg_image' => 'Baner za slajder gornji',
        'sdo_image' => 'Baner za slajder donji i ostalo',
        'status' => 'Status narudžbe',
        'status_comment' => 'Komentar',
        'paid' => 'Uplaćeno',
        'jib' => 'JIB',
        'pdv' => 'PDV',
        'mb' => 'MB',
        'obveznik' => 'Obavezik PDV-a',
        'extension' => 'Ekstenzija',
        'imageTitle' => 'Naziv slike',
        'imageText' => 'Tekst slike',
        'parent' => 'Roditelj',
        'packaging' => 'Pakovanje,',
        'priority'      => 'Prioritet prikaza',
        'brand_id'      => 'Brend',
        'intro'         => 'Uvod',
        'regular_price' => 'Regularna cijena',
        'lower_price'   => 'Cijena sa popustom',
        'stock'         => 'Lager?',
        'stock_status'  => 'Stanje na lageru',
        'sku'  => 'SKU',
        'thick'  => 'Debljina',
        'payment_text' => 'Plaćanje',
        'stars' => 'Ocjena',
        'review' => 'Recenzija',
        'first_name'    => 'Ime',
        'last_name'     => 'Prezime',
        'jib'           => 'ID/PDV broj',
        'country'       => 'Država',
        'city_place'    => 'Grad / Mjesto',
        'email_address' => 'Email adresa',
        'shipping_text' => 'Dostava kratki opis',
        'payments_text' => 'Plaćanje kratki opis',
        'payment'       => 'Plaćanje',
        'youtube_iframe' => 'Youtube_iframe',
        'svgimage' => 'SVG slika',
        'colors' => 'Boja',
        'colors2' => 'Boja 2',
        'color' => 'Boja',
        'color2' => 'Boja 2',
        'priceone' => 'Cijena nosača za jednu tablicu',
        'priceset' => 'Cijena nosača za 2 tablice / set za jedno vozilo',
        'pricefront' => 'Cijena nosača tablice za grill masku/prednju tablicu',
        'priceback' => 'Cijena nosača za zadnju tablicu',
        'imageurl.*' => 'URL slike',
        'imagetitle.*' => 'Naslov slike',
        'olx' => 'Olx',
        'inputname' => 'Naziv polja',
        'inputname.*' => 'Naziv polja',
        'service' => 'Usluga',
        'birth' => 'Godina rodjenja',
    ],
];
