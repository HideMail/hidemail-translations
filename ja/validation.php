<?php

return [
    'accepted' => ' :attributeを受け入れる必要があります。',
    'active_url' => ' :attributeは有効なURLではありません。',
    'after' => ' :attributeは :dateより後の日付である必要があります。',
    'after_or_equal' => ' :attributeは、 :date以降の日付である必要があります。',
    'alpha' => ' :attributeには文字のみを含める必要があります。',
    'alpha_dash' => ' :attributeには、文字、数字、ダッシュ、およびアンダースコアのみを含める必要があります。',
    'alpha_num' => ' :attributeには、文字と数字のみを含める必要があります。',
    'array' => ' :attributeは配列でなければなりません。',
    'before' => ' :attributeは :dateより前の日付である必要があります。',
    'before_or_equal' => ' :attributeは、 :date以前の日付である必要があります。',
    'between' => [
        'numeric' => ' :attributeは :minと :maxの間にある必要があります。',
        'file' => ' :attributeは :minから :maxキロバイトの間でなければなりません。',
        'string' => ' :attributeは :minから :max文字の間でなければなりません。',
        'array' => ' :attributeには、 :minから :maxのアイテムが必要です。',
    ],
    'boolean' => ' :attributeフィールドはtrueまたはfalseである必要があります。',
    'confirmed' => ' :attribute確認が一致しません。',
    'date' => ' :attributeは有効な日付ではありません。',
    'date_equals' => ' :attributeは :dateと等しい日付である必要があります。',
    'date_format' => ' :attributeが :formatの形式と一致しません。',
    'different' => ' :attributeと :otherは異なっている必要があります。',
    'digits' => ' :attributeは :digits桁である必要があります。',
    'digits_between' => ' :attributeは :minから :max桁の間でなければなりません。',
    'dimensions' => ' :attributeの画像サイズが無効です。',
    'distinct' => ' :attributeフィールドの値が重複しています。',
    'email' => ' :attributeは有効な電子メールアドレスである必要があります。',
    'ends_with' => ' :attributeは、次のいずれかで終了する必要があります： :values。',
    'exists' => '選択した :attributeは無効です。',
    'file' => ' :attributeはファイルである必要があります。',
    'filled' => ' :attributeフィールドには値が必要です。',
    'gt' => [
        'numeric' => ' :attributeは :valueより大きくなければなりません。',
        'file' => ' :attributeは :valueキロバイトより大きくなければなりません。',
        'string' => ' :attributeは :value文字より大きくなければなりません。',
        'array' => ' :attributeには :value以上のアイテムが必要です。',
    ],
    'gte' => [
        'numeric' => ' :attributeは :value以上である必要があります。',
        'file' => ' :attributeは :valueキロバイト以上である必要があります。',
        'string' => ' :attributeは :value文字以上である必要があります。',
        'array' => ' :attributeには :value以上のアイテムが必要です。',
    ],
    'image' => ' :attributeは画像である必要があります。',
    'in' => '選択した :attributeは無効です。',
    'in_array' => ' :attributeフィールドは :otherには存在しません。',
    'integer' => ' :attributeは整数でなければなりません。',
    'ip' => ' :attributeは有効なIPアドレスである必要があります。',
    'ipv4' => ' :attributeは有効なIPv4アドレスである必要があります。',
    'ipv6' => ' :attributeは有効なIPv6アドレスである必要があります。',
    'json' => ' :attributeは有効なJSON文字列である必要があります。',
    'lt' => [
        'numeric' => ' :attributeは :value未満である必要があります。',
        'file' => ' :attributeは :valueキロバイト未満である必要があります。',
        'string' => ' :attributeは :value文字未満である必要があります。',
        'array' => ' :attributeには :value未満のアイテムが必要です。',
    ],
    'lte' => [
        'numeric' => ' :attributeは :value以下である必要があります。',
        'file' => ' :attributeは :valueキロバイト以下である必要があります。',
        'string' => ' :attributeは :value文字以下である必要があります。',
        'array' => ' :attributeには :valueを超えるアイテムを含めることはできません。',
    ],
    'max' => [
        'numeric' => ' :attributeは :maxより大きくてはなりません。',
        'file' => ' :attributeは :maxキロバイトを超えてはなりません。',
        'string' => ' :attributeは :max文字を超えてはなりません。',
        'array' => ' :attributeには :maxを超えるアイテムを含めることはできません。',
    ],
    'mimes' => ' :attributeは、タイプ :valuesのファイルである必要があります。',
    'mimetypes' => ' :attributeは、タイプ :valuesのファイルである必要があります。',
    'min' => [
        'numeric' => ' :attributeは少なくとも :minである必要があります。',
        'file' => ' :attributeは少なくとも :minキロバイトである必要があります。',
        'string' => ' :attributeは少なくとも :min文字である必要があります。',
        'array' => ' :attributeには少なくとも :minのアイテムが必要です。',
    ],
    'multiple_of' => ' :attributeは :valueの倍数でなければなりません。',
    'not_in' => '選択した :attributeは無効です。',
    'not_regex' => ' :attribute形式が無効です。',
    'numeric' => ' :attributeは数値でなければなりません。',
    'password' => 'パスワードが正しくありません。',
    'present' => ' :attributeフィールドが存在する必要があります。',
    'regex' => ' :attribute形式が無効です。',
    'required' => ' :attributeフィールドは必須です。',
    'required_if' => ' :otherが :valueの場合、 :attributeフィールドは必須です。',
    'required_unless' => ' :otherが :valuesにない限り、 :attributeフィールドは必須です。',
    'required_with' => ' :valuesが存在する場合、 :attributeフィールドは必須です。',
    'required_with_all' => ' :valuesが存在する場合、 :attributeフィールドは必須です。',
    'required_without' => ' :valuesが存在しない場合、 :attributeフィールドは必須です。',
    'required_without_all' => ' :valuesが存在しない場合、 :attributeフィールドは必須です。',
    'same' => ' :attributeと :otherは一致する必要があります。',
    'size' => [
        'numeric' => ' :attributeは :sizeでなければなりません。',
        'file' => ' :attributeは :sizeキロバイトである必要があります。',
        'string' => ' :attributeは :size文字である必要があります。',
        'array' => ' :attributeには :sizeアイテムが含まれている必要があります。',
    ],
    'starts_with' => ' :attributeは、次のいずれかで始まる必要があります： :values。',
    'string' => ' :attributeは文字列である必要があります。',
    'timezone' => ' :attributeは有効なゾーンである必要があります。',
    'unique' => ' :attributeはすでに使用されています。',
    'uploaded' => ' :attributeのアップロードに失敗しました。',
    'url' => ' :attribute形式が無効です。',
    'uuid' => ' :attributeは有効なUUIDである必要があります。',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'カスタムメッセージ',
        ],
    ],
    'attributes' => [
    ],
];
