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

    'accepted' => 'Il campo :attribute deve essere accettato.',
    'active_url' => 'Il campo :attribute non è un URL valido.',
    'after' => 'Il campo :attribute deve essere una data successiva a :date.',
    'after_or_equal' => 'Il campo :attribute deve essere una data uguale o successiva a :date.',
    'alpha' => 'Il campo :attribute può contenere solo lettere.',
    'alpha_dash' => 'Il campo :attribute può contenere solo lettere, numeri e trattini.',
    'alpha_num' => 'Il campo :attribute può contenere solo lettere e numeri.',
    'array' => 'Il campo :attribute deve essere un array.',
    'before' => 'Il campo :attribute deve essere una data precedente a :date.',
    'before_or_equal' => 'Il campo :attribute deve essere una data uguale o precedente a :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'Il campo :attribute deve essere vero o falso.',
    'confirmed' => 'La conferma del campo :attribute non corrisponde.',
    'date' => 'Il campo :attribute non è una data valida.',
    'date_equals' => 'Il campo :attribute deve essere una data uguale a :date.',
    'date_format' => 'Il campo :attribute non rispetta il formato :format.',
    'different' => 'Il campo :attribute e il campo :other devono essere diversi.',
    'digits' => 'Il campo :attribute deve avere :digits cifre.',
    'digits_between' => 'Il campo :attribute deve avere tra :min e :max cifre.',
    'dimensions' => "La dimensione dell'immagine :attribute non è valida.",
    'distinct' => 'Il campo :attribute contiene duplicati.',
    'email' => 'Il campo :attribute deve essere un indirizzo email valido.',
    'exists' => 'Il :attribute scelto non è valido.',
    'file' => 'Il campo :attribute deve essere un file.',
    'filled' => 'Il campo :attribute è richiesto.',
    'gt' => [
        'numeric' => 'Il campo :attribute deve essere maggiore di :value.',
        'file' => 'Il file :attribute deve pesare più di :value kilobytes.',
        'string' => 'Il campo :attribute deve avere più di :value caratteri.',
        'array' => 'Il campo :attribute deve avere più di :value elementi.',
    ],
    'gte' => [
        'numeric' => 'Il campo :attribute deve essere maggiore o uguale a :value.',
        'file' => 'Il file :attribute deve pesare almeno :value kilobytes.',
        'string' => 'Il campo :attribute deve avere almeno :value caratteri.',
        'array' => 'Il campo :attribute deve avere almeno :value elementi.',
    ],
    'image' => "Il campo :attribute deve essere un'immagine.",
    'in' => 'Il :attribute scelto non è valido.',
    'in_array' => ':attribute non esiste in :other.',
    'integer' => 'Il campo :attribute deve essere un numero intero.',
    'ip' => 'Il campo :attribute deve essere un indirizzo IP valido.',
    'ipv4' => 'Il campo :attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'Il campo :attribute deve essere un indirizzo IPv6 valido.',
    'json' => 'Il campo :attribute deve essere una stringa JSON valida.',
    'lt' => [
        'numeric' => 'Il campo :attribute deve essere minore di :value.',
        'file' => 'Il file :attribute deve pesare meno di :value kilobytes.',
        'string' => 'Il campo :attribute deve avere meno di :value caratteri.',
        'array' => 'Il campo :attribute deve avere meno di :value elementi.',
    ],
    'lte' => [
        'numeric' => 'Il campo :attribute deve essere minore o uguale a :value.',
        'file' => 'Il file :attribute deve pesare al massimo :value kilobytes.',
        'string' => 'Il campo :attribute deve avere al massimo :value caratteri.',
        'array' => 'Il campo :attribute deve avere al massimo :value elementi.',
    ],
    'max' => [
        'numeric' => 'Il campo :attribute non può essere maggiore di :max.',
        'file' => 'Il file :attribute non può pesare più di :max kilobytes.',
        'string' => 'Il campo :attribute non può essere più lungo di :max caratteri.',
        'array' => 'Il campo :attribute non può avere più di :max elementi.',
    ],
    'mimes' => 'Il file :attribute deve essere di tipo: :values.',
    'mimetypes' => 'Il file :attribute deve essere di tipo: :values.',
    'min' => [
        'numeric' => 'Il campo :attribute non può essere minore di :min.',
        'file' => 'Il file :attribute deve pesare almeno di :min kilobytes.',
        'string' => 'Il campo :attribute deve avere almeno :min caratteri.',
        'array' => 'Il campo :attribute deve avere almeno :min elementi.',
    ],
    'not_in' => 'Il :attribute scelto non è valido.',
    'not_regex' => 'Il formato del campo :attribute non è valido.',
    'numeric' => 'Il campo :attribute deve essere un numero.',
    'present' => 'Il campo :attribute deve essere presente.',
    'regex' => 'Il formato del campo :attribute non è valido.',
    'required' => 'Il campo :attribute è richiesto.',
    'required_if' => 'Il campo :attribute è richiesto quando il valore del campo :other è :value.',
    'required_unless' => 'Il campo :attribute è richiesto a meno che il valore del campo :other non sia :values.',
    'required_with' => 'Il campo :attribute è richiesto quando :values è presente.',
    'required_with_all' => 'Il campo :attribute è richiesto quando :values sono presenti.',
    'required_without' => 'Il campo :attribute è richiesto quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è richiesto quando :values non sono presenti.',
    'same' => 'Il campo :attribute e :other devono corrispondere.',
    'size' => [
        'numeric' => 'Il campo :attribute deve essere :size.',
        'file' => 'Il file :attribute deve pesare :size kilobytes.',
        'string' => 'Il campo :attribute deve avere :size caratteri.',
        'array' => 'Il campo :attribute deve avere :size elementi.',
    ],
    'starts_with' => 'Il campo :attribute deve iniziare con: :values',
    'string' => 'Il campo :attribute deve essere una stringa.',
    'timezone' => 'Il campo :attribute deve essere una zona temporale valida.',
    'unique' => 'Il campo :attribute è già utilizzato.',
    'uploaded' => "L'upload di :attribute è fallito.",
    'url' => 'Il formato del campo :attribute non è valido.',
    'uuid' => 'Il campo :attribute deve essere un UUID valido.',

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

    'attributes' => [],
];
