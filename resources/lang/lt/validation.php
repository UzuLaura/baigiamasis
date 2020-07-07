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

    'accepted' => 'Turite sutikti su :attribute.',
    'active_url' => 'Netinkamas :attribute nuorodos adresas.',
    'after' => ':attribute turi būti data po :date.',
    'after_or_equal' => ':attribute turi būti data po arba lygi :date.',
    'alpha' => ':attribute turi būti sudarytas tik iš raidžių.',
    'alpha_dash' => ':attribute gali būti sudarytas tik iš raidžių, skaičių, / ir _ .',
    'alpha_num' => ':attribute gali būti sudarytas tik iš raidžių ir skaičių.',
    'array' => ':attribute turi būti masyvas.',
    'before' => ':attribute turi būti data iki :date.',
    'before_or_equal' => ':attribute turi būti data iki arba lygi :date.',
    'between' => [
        'numeric' => ':attribute turi būti tarp :min ir :max.',
        'file' => ':attribute turi būti tarp :min ir :max kilobaitų.',
        'string' => ':attribute turi būti tarp :min ir :max simbolių.',
        'array' => ':attribute turi turėti tarp :min ir :max elementų.',
    ],
    'boolean' => 'Laukelis :attribute turi būti true abra false.',
    'confirmed' => 'Nesutampa :attribute.',
    'date' => 'Negalima :attribute data.',
    'date_equals' => ':attribute turi būti data lygi :date.',
    'date_format' => 'Netinkamas :attribute formatas. Turi būti :format formatas.',
    'different' => ':attribute ir :other turi skirtis.',
    'digits' => ':attribute turi būti :digits skaitmenų.',
    'digits_between' => ':attribute turi būti tarp :min ir :max skaitmenų.',
    'dimensions' => ':attribute yra netinkamų paveikslėlio matmenų.',
    'distinct' => ':attribute reikšmė kartojasi.',
    'email' => ':attribute turi būti parašytas tinkamu el. pašto formatu.',
    'ends_with' => ':attribute turi baigtis viena iš šių verčių: :values.',
    'exists' => 'Pasirinktas :attribute negalimas.',
    'file' => ':attribute turi būti failas.',
    'filled' => 'Laukelis :attribute turi turėti reikšmę.',
    'gt' => [
        'numeric' => ':attribute turi būti didesnis nei :value.',
        'file' => ':attribute turi būti didesnis nei :value kilobaitų.',
        'string' => ':attribute turi būti ilgesnis nei :value simbolių.',
        'array' => ':attribute turi turėti daugiau nei :value elementų.',
    ],
    'gte' => [
        'numeric' => ':attribute turi būti didesnis arba lygus :value.',
        'file' => ':attribute turi būti didesnis arba lygus :value kb.',
        'string' => ':attribute turi būti didesnis arba lygus :value simbolių.',
        'array' => ':attribute turi turėti :value elementų arba daugiau.',
    ],
    'image' => ':attribute turi būti paveikslėlis.',
    'in' => 'Pasirinktas :attribute negalimas.',
    'in_array' => 'Laukelis :attribute neegsiztuoja tarp :other.',
    'integer' => ':attribute turi būti sveikasis skaičius.',
    'ip' => ':attribute turi būti teisingas IP adresas.',
    'ipv4' => ':attribute turi būti teisingas IPv4 adresas.',
    'ipv6' => ':attribute turi būti teisingas IPv6 adresas.',
    'json' => ':attribute turi būti teisinga JSON eilutė.',
    'lt' => [
        'numeric' => ':attribute turi būti mažesnis nei :value.',
        'file' => ':attribute turi būti mažesnis nei :value kb.',
        'string' => ':attribute turi būti trumpesnis nei :value simbolių.',
        'array' => ':attribute turi turėti mažiau nei :value elementų.',
    ],
    'lte' => [
        'numeric' => ':attribute turi būti mažesnis arba lygus :value.',
        'file' => ':attribute turi būti mažesnis arba lygus :value kb.',
        'string' => ':attribute turi būti trumpesnis arba lygus :value simbolių.',
        'array' => ':attribute turi turėti daugiau nei :value elementų.',
    ],
    'max' => [
        'numeric' => ':attribute negali būti didesnis nei :max.',
        'file' => ':attribute negali būti didesnis nei :max kilobaitų.',
        'string' => ':attribute negali būti ilgesnis nei :max simbolių.',
        'array' => ':attribute negali turėti daugiau nei :max elementų.',
    ],
    'mimes' => ':attribute failo tipas turi būti: :values.',
    'mimetypes' => ':attribute failo tipas turi būti: :values.',
    'min' => [
        'numeric' => ':attribute turi būti mažiausiai :min.',
        'file' => ':attribute turi būti mažiausiai :min kilobaitų.',
        'string' => ':attribute turi būti mažiausiai :min simbolių.',
        'array' => ':attribute turi turėti mažiausiai :min elementų.',
    ],
    'not_in' => 'Pasirinktas :attribute yra negalimas.',
    'not_regex' => 'Netinkamas :attribute formatas.',
    'numeric' => ':attribute turi būti skaičius.',
    'password' => 'Neteisingas slaptažodis.',
    'present' => 'Laukelis :attribute turi egzistuoti.',
    'regex' => 'Netinkamas :attribute formatas.',
    'required' => ':attribute yra privalomas.',
    'required_if' => 'Laukelis :attribute privalomas kai :other yra :value.',
    'required_unless' => 'Laukelis :attribute yra privalomas nebent :other yra įrašytas į :values.',
    'required_with' => 'Laukelis :attribute yra privalomas, kai yra :values.',
    'required_with_all' => 'Laukelis :attribute yra privalomas, kai yra :values.',
    'required_without' => 'Laukelis :attribute yra privalomas, kai nėra :values.',
    'required_without_all' => 'Laukelis :attribute yra privalomas, kai nėra :values.',
    'same' => 'Laukeliai :attribute ir :other turi sutapti.',
    'size' => [
        'numeric' => ':attribute turi būti :size.',
        'file' => ':attribute turi būti :size kilobaitų dydžio.',
        'string' => ':attribute turi turėti :size simbolių.',
        'array' => ':attribute turi turėti :size elementų.',
    ],
    'starts_with' => ':attribute turi prasidėti viena iš šių reikšmių: :values.',
    'string' => ':attribute turi būti tekstinio formato.',
    'timezone' => 'Negalima :attribute laiko juosta.',
    'unique' => 'Toks :attribute jau užimtas.',
    'uploaded' => 'Nepavyko įkelti :attribute.',
    'url' => 'Negalimas :attribute formatas.',
    'uuid' => ':attribute turi būti tinkamas UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'email' => 'el. pašto adresas',
        'surname' => 'pavardės',
        'name' => 'vardo',
        'password' => 'slaptažodis',
        'phone-number' => 'telefono numerio',
        'address' => 'adresas',
        'comment' => 'komentaras',
    ],

];