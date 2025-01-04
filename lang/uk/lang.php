<?php

return [
    'plugin' => [
        'name' => 'Сторінки',
        'description' => 'Сторінки і меню.',
    ],
    'page' => [
        'menu_label' => 'Сторінки',
        'template_title' => '%s Сторінки',
        'delete_confirmation' => 'Ви дійсно хочете видалити вибрані сторінки? Це також видалить наявні підсторінки.',
        'no_records' => 'Сторінок не знайдено',
        'delete_confirm_single' => 'Ви дійсно хочете видалити цю сторінку? Це також видалить наявні підсторінки.',
        'new' => 'Нова сторінка',
        'add_subpage' => 'Додати підсторінку',
        'invalid_url' => 'Некоректний формат URL. URL повинен починатися з прямого слеша і може містити цифри, латинські літери і такі символи: _-/.',
        'url_not_unique' => 'Цей URL вже використовується іншою сторінкою.',
        'layout' => 'Шаблон',
        'layouts_not_found' => 'Шаблони не знайдені',
        'saved' => 'Сторінка була успішно збережена.',
        'tab' => 'Сторінки',
        'manage_pages' => 'Управління сторінками',
        'manage_menus' => 'Управління меню',
        'access_snippets' => 'Доступ до сніппетів',
        'manage_content' => 'Управління змістом',
    ],
    'menu' => [
        'menu_label' => 'Меню',
        'delete_confirmation' => 'Ви дійсно хочете видалити вибрані пункти меню?',
        'no_records' => 'Меню не знайдені',
        'new' => 'Нове меню',
        'new_name' => 'Новое меню',
        'new_code' => 'nove-menu',
        'delete_confirm_single' => 'Ви дійсно хочете видалити це меню?',
        'saved' => 'Меню було успішно збережено.',
        'name' => "Ім`я",
        'code' => 'Код',
        'items' => 'Пункти меню',
        'add_subitem' => 'Додати підменю',
        'code_required' => "Поле Код обов'язкове",
        'invalid_code' => 'Некоректний формат Коду. Код може містити цифри, латинські літери і такі символи: _-/',
    ],
    'menuitem' => [
        'title' => 'Назва',
        'editor_title' => 'Редагувати пункт меню',
        'type' => 'Тип',
        'allow_nested_items' => 'Дозволити вкладені',
        'allow_nested_items_comment' => 'Вкладені пункти можуть бути динамічно згенеровані статичною сторінкою або іншими типами елементів',
        'url' => 'URL',
        'reference' => 'Посилання',
        'title_required' => "Назва обов'язково",
        'unknown_type' => 'Невідомий тип меню',
        'unnamed' => 'Безіменний пункт',
        'add_item' => 'Додати пункт (<u> i </u>)',
        'new_item' => 'Новий пункт',
        'replace' => 'Замінювати цей пункт його згенеруванними нащадками',
        'replace_comment' => 'Відмітьте для перенесення згенерованних пунктів меню на один рівень з цим пунктом. Сам цей пункт буде приховано.',
        'cms_page' => 'Сторінки CMS',
        'cms_page_comment' => 'Оберіть відкриваючу при натисканні сторінку.',
        'reference_required' => 'Необхідне посилання для пункту меню.',
        'url_required' => 'Необхідний URL',
        'cms_page_required' => 'Будь ласка, виберіть сторінку CMS',
        'code' => 'Код',
        'code_comment' => 'Введіть код пункту меню, якщо хочете мати до нього доступ через API.',
    ],
    'content' => [
        'menu_label' => 'Зміст',
        'cant_save_to_dir' => 'Збереження файлів змісту в директорію static-pages заборонено.',
    ],
    'sidebar' => [
        'Add' => 'Додати',
        'search' => 'Пошук...',
    ],
    'object' => [
        'invalid_type' => "Невідомий тип об'єкту",
        'not_found' => "Запитуваний об'єкт не знайдено.",
    ],
    'editor' => [
        'title' => 'Назва',
        'new_title' => 'Назва нової сторінки',
        'content' => 'Зміст',
        'url' => 'URL',
        'filename' => "Ім'я файлу",
        'layout' => 'Шаблон',
        'description' => 'Опис',
        'preview' => 'Попередній огляд',
        'enter_fullscreen' => 'Увійти в повноекранний режим',
        'exit_fullscreen' => 'Вийти з повноекранного режиму',
        'hidden' => 'Прихований',
        'hidden_comment' => 'Приховані сторінки доступні тільки увійшовшим адміністраторам.',
        'navigation_hidden' => 'Сховати в навігації',
        'navigation_hidden_comment' => 'Відмітьте, щоб приховати цю сторінку в генеруючих меню і хлібних крихтах.',
    ],
    'snippet' => [
        'partialtab' => 'Сніппети',
        'code' => 'Код сніппета',
        'code_comment' => 'Введіть код, щоб зробити цей фрагмент доступним як сніппет в розширенні Сторінки.',
        'name' => "Ім'я",
        'name_comment' => "Ім'я відображається в списку фрагментів розширення Сторінки і на сторінці, коли сніппет доданий.",
        'no_records' => 'Сніппети не знайдені',
        'menu_label' => 'Сніппети',
        'column_property' => 'Назва властивості',
        'column_type' => 'Тип',
        'column_code' => 'Код',
        'column_default' => 'За замовчуванням',
        'column_options' => 'Опції',
        'column_type_string' => 'Рядок',
        'column_type_checkbox' => 'Чекбокс',
        'column_type_dropdown' => 'Список, що випадає',
        'not_found' => 'Сніппет з запитаним кодом %s не знайдений в темі.',
        'property_format_error' => 'Код властивості повинен починатися з літери та може містити тільки латинські букви і цифри',
        'invalid_option_key' => 'Неправильний ключ списку: %s. Ключ може містити тільки цифри, латинські літери і символи _ і -',
    ],
    'component' => [
        'static_page_description' => 'Виводити сторінку в CMS шаблоні.',
        'static_menu_description' => 'Виводити меню в CMS шаблоні.',
        'static_menu_menu_code' => 'Вкажіть код меню, яке повинно бути показано',
        'static_breadcrumbs_description' => 'Виводити хлібні крихти для сторінки.',
    ],
];
