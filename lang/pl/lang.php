<?php

return [
    'plugin' => [
        'name' => 'Strony',
        'description' => 'Strony statyczne oraz menu.',
    ],
    'page' => [
        'menu_label' => 'Strony',
        'template_title' => '%s Strony',
        'delete_confirmation' => 'Czy na pewno chcesz usunąć wybrane strony? Podstrony również zostaną usnięte.',
        'no_records' => 'Nie znaleziono stron',
        'delete_confirm_single' => 'Czy na pewno chcesz usunąć stronę? Podstrony również zostaną usnięte.',
        'new' => 'Nowa strona',
        'add_subpage' => 'Dodaj podstronę',
        'invalid_url' => 'Niewprawidłowy format URL lub niedozwolone znaki.',
        'url_not_unique' => 'Podany URL istnieje już w bazie.',
        'layout' => 'Układ',
        'layouts_not_found' => 'Brak układów',
        'saved' => 'Strona została zapisana poprawnie.',
        'tab' => 'Strony',
        'manage_pages' => 'Zarządzaj stronami statycznymi',
        'manage_menus' => 'Zarządzaj menu statycznymi',
        'access_snippets' => 'Fragmenty',
        'manage_content' => 'Zarządzaj treścią statyczną',
    ],
    'menu' => [
        'menu_label' => 'Menu',
        'delete_confirmation' => 'Czy na pewno chcesz usunąć wybrane menu?',
        'no_records' => 'Nie znaleziono menu',
        'new' => 'Nowe menu',
        'new_name' => 'Nowe menu',
        'new_code' => 'nowe-menu',
        'delete_confirm_single' => 'Czy na pewno chcesz usunąć wybrane menu?',
        'saved' => 'Menu zostało zapisane poprawnie.',
        'name' => 'Nazwa',
        'code' => 'Kod systemowy',
        'items' => 'Elementy menu',
        'add_subitem' => 'Dodaj element',
        'code_required' => 'Kod systemowy jest wymagany',
        'invalid_code' => 'Nieprawidłowy kod systemowy. Nie może zawierać znaków specjalnych',
    ],
    'menuitem' => [
        'title' => 'Tytuł',
        'editor_title' => 'Edytuj element',
        'type' => 'Typ',
        'allow_nested_items' => 'Pozwól na zagnieżdżanie elementów',
        'allow_nested_items_comment' => 'Zagnieżdżone elementy mogą być utworzone dynamicznie np ze stron statycznych',
        'url' => 'URL',
        'reference' => 'Referencja',
        'search_placeholder' => 'Przeszukaj wszystkie referencje...',
        'title_required' => 'Tytuł jest wymagany',
        'unknown_type' => 'Nieznany typ elementu',
        'unnamed' => 'Brak nazwy typu elementu',
        'add_item' => 'Dodaj <u>E</u>lement',
        'new_item' => 'Nowy element menu',
        'replace' => 'Zamień element na elementy wenątrz tego elementu',
        'replace_comment' => 'Użyj tej opcji aby elementy znajdujące sie w tym elemencie były wygenerowane na poziomie tego elementu a sam element zostanie ukryty.',
        'cms_page' => 'Strona CMS',
        'cms_page_comment' => 'Wybierz stronę z cms do której ma kierować',
        'reference_required' => 'Referencja jest wymagana',
        'url_required' => 'URL jest wymagany',
        'cms_page_required' => 'Wybierz stronę z CMS',
        'display_tab' => 'Wyświetlanie',
        'hidden' => 'Ukryj',
        'hidden_comment' => 'Ukryj ten element menu na stronie',
        'attributes_tab' => 'Atrybuty',
        'code' => 'Kod systemowy',
        'code_comment' => 'Wprowadź kod systemowy aby móc go używać w API.',
        'css_class' => 'Klasa CSS',
        'css_class_comment' => 'Wprowadź klasę CSS, aby nadać temu elementowi niestandardowy wygląd',
        'external_link' => 'Zewnętrzny link',
        'external_link_comment' => 'Adres linku zostanie otworzony w nowym oknie',
        'static_page' => 'Strona statyczna',
        'all_static_pages' => 'Wszystkie strony statyczne',
    ],
    'content' => [
        'menu_label' => 'Treść',
        'cant_save_to_dir' => 'Zapis treści jest niemożliwy. Sprawdź dostęp do folderu treści statycznych.',
    ],
    'sidebar' => [
        'add' => 'Dodaj',
        'search' => 'Szukaj...',
    ],
    'object' => [
        'invalid_type' => 'Nieznany typ obiektu',
        'not_found' => 'Nie znaleziono objektu.',
    ],
    'editor' => [
        'title' => 'Tytuł',
        'new_title' => 'Nowy tytuł strony',
        'content' => 'Treść',
        'url' => 'URL',
        'filename' => 'Nazwa pliku',
        'layout' => 'Układ',
        'description' => 'Opis',
        'preview' => 'Podgląd',
        'enter_fullscreen' => 'Pełny ekran',
        'exit_fullscreen' => 'Zamknij pełny ekran',
        'hidden' => 'Ukryta',
        'hidden_comment' => 'Ukryte strony są dostępne tylko dla zalogowanych administratorów.',
        'navigation_hidden' => 'Ukryj stronę w nawigacji',
        'navigation_hidden_comment' => 'Zaznacz aby usunąć strone z automatycznego generowania menu oraz ścieżek (breadcrumbs).',
    ],
    'snippet' => [
        'partialtab' => 'Fragment',
        'code' => 'Kod systemowy',
        'code_comment' => 'Dodaj kod systemowy aby ten fragment był dostępny do użycia w treści stron statycznych.',
        'name' => 'Nazwa',
        'name_comment' => 'Nazwa będzie się wyświetlać w menu obok stron statycznych.',
        'no_records' => 'Nie znaleziono',
        'menu_label' => 'Fragmenty',
        'column_property' => 'Nazwa parametru',
        'column_type' => 'Typ',
        'column_code' => 'Kod systemowy',
        'column_default' => 'Domyślny',
        'column_options' => 'Opcje',
        'column_type_string' => 'Tekst',
        'column_type_checkbox' => 'Checkbox',
        'column_type_dropdown' => 'Lista rozwijana',
        'not_found' => 'Fragment o podanym kodzie systemowym :code nie został znaleziony.',
        'property_format_error' => 'Nazwa parametru musi się zaczynać od litery i może zawierać tylko litery oraz liczby',
        'invalid_option_key' => 'Nieprawidłowa opcja: :key. Opcja wyboru może zawierać tylko litery, cyfry, myślnik i podkreślnik',
    ],
    'component' => [
        'static_page_name' => 'Strona statyczna',
        'static_page_description' => 'Dodaje zawartość statycznej strony.',
        'static_page_use_content_name' => 'Użyj pola zawartości strony',
        'static_page_use_content_description' => 'Jeżeli odznaczone, sekcja treści nie pojawi się podczas edycji strony statycznej. Zawartość strony będzie ustalana wyłącznie na podstawie symboli zastępczych i zmiennych',
        'static_page_default_name' => 'Domyślny układ',
        'static_page_default_description' => 'Definiuje ten układ jako domyślny dla nowych stron',
        'static_page_child_layout_name' => 'Układ podstrony',
        'static_page_child_layout_description' => 'Układ, który będzie używany jako domyślny dla każdej nowej podstrony',
        'static_menu_name' => 'Menu',
        'static_menu_description' => 'Dodaje menu do strony.',
        'static_menu_code_name' => 'Menu',
        'static_menu_code_description' => 'Podaj kod systemowy menu, które ma zostać wyświetlone.',
        'static_breadcrumbs_name' => 'Okruszki (Breadcrumbs)',
        'static_breadcrumbs_description' => 'Zwraca ścieżkę stron statycznych.',
        'child_pages_name' => 'Strony podrzędne',
        'child_pages_description' => 'Wyświetla listę stron podrzędnych dla aktualnej strony',
        'static_menu_menu_code' => 'Podaj kod systemowy menu',
    ],
];
