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

    'accepted' => 'Pole :attribute musi zostać zaakceptowane.',
    'accepted_if' => 'Pole :attribute musi zostać zaakceptowane gdy :other ma wartość :value.',
    'active_url' => 'Pole :attribute jest nieprawidłowym adresem URL.',
    'after' => 'Pole :attribute musi być datą późniejszą od :date.',
    'after_or_equal' => 'Pole :attribute musi być datą nie wcześniejszą niż :date.',
    'alpha' => 'Pole :attribute może zawierać jedynie litery.',
    'alpha_dash' => 'Pole :attribute może zawierać jedynie litery, cyfry i myślniki.',
    'alpha_num' => 'Pole :attribute może zawierać jedynie litery i cyfry.',
    'are_you_sure_you_want_to_delete_member' => 'Czy na pewno chcesz usunąć tego członka zespołu?',
    'are_you_sure_you_want_to_delete_team' => 'Czy na pewno chcesz usunąć ten zespół?',
    'are_you_sure_you_want_to_leave_team' => 'Czy na pewno chcesz opuścić ten zespół?',
    'array' => 'Pole :attribute musi być tablicą.',
    'ascii' => 'Pole :attribute może zawierać tylko jednobajtowe znaki alfanumeryczne i symbole.',
    'attached' => 'Pole :attribute jest już dołączony.',
    'attributes' => [
        'team' => 'zespół',
    ],
    'before' => 'Pole :attribute musi być datą wcześniejszą od :date.',
    'before_or_equal' => 'Pole :attribute musi być datą nie późniejszą niż :date.',
    'between' => [
        'array' => 'Pole :attribute musi składać się z :min - :max elementów.',
        'file' => 'Pole :attribute musi zawierać się w granicach :min - :max kilobajtów.',
        'numeric' => 'Pole :attribute musi zawierać się w granicach :min - :max.',
        'string' => 'Pole :attribute musi zawierać się w granicach :min - :max znaków.',
    ],
    'boolean' => 'Pole :attribute musi mieć wartość logiczną prawda albo fałsz.',
    'can' => 'Pole :attribute zawiera nieautoryzowaną wartość.',
    'confirmed' => 'Potwierdzenie pola :attribute nie zgadza się.',
    'country' => 'Pole :attribute nie zawiera prawidłowego kraju.',
    'create_team' => 'Utwórz Zespół',
    'current_password' => 'Hasło jest nieprawidłowe.',
    'current_teams' => 'Aktualne Zespoły',
    'date' => 'Pole :attribute nie jest prawidłową datą.',
    'date_equals' => 'Pole :attribute musi być datą równą :date.',
    'date_format' => 'Pole :attribute nie jest w formacie :format.',
    'decimal' => 'Pole :attribute musi mieć :decimal miejsc po przecinku.',
    'declined' => 'Pole :attribute musi zostać odrzucony.',
    'declined_if' => 'Pole :attribute musi zostać odrzucony, gdy :other ma wartość :value.',
    'delete_team' => 'Usuń Zespół',
    'different' => 'Pole :attribute oraz :other muszą się różnić.',
    'digits' => 'Pole :attribute musi składać się z :digits cyfr.',
    'digits_between' => 'Pole :attribute musi mieć od :min do :max cyfr.',
    'dimensions' => 'Pole :attribute ma niepoprawne wymiary.',
    'distinct' => 'Pole :attribute ma zduplikowane wartości.',
    'doesnt_end_with' => 'Pole :attribute nie może kończyć się jednym z następujących wartości: :values.',
    'doesnt_start_with' => 'Pole :attribute nie może zaczynać się od jednego z następujących wartości: :values.',
    'edit_team_member' => 'Edytuj Członka Zespołu',
    'email' => 'Pole :attribute nie jest poprawnym adresem e-mail.',
    'ends_with' => 'Pole :attribute musi kończyć się jedną z następujących wartości: :values.',
    'enum' => 'Pole :attribute ma niepoprawną wartość.',
    'exists' => 'Zaznaczone pole :attribute jest nieprawidłowe.',
    'failed' => 'Błędny login lub hasło.',
    'file' => 'Pole :attribute musi być plikiem.',
    'filled' => 'Pole :attribute nie może być puste.',
    'gt' => [
        'array' => 'Pole :attribute musi mieć więcej niż :value elementów.',
        'file' => 'Pole :attribute musi być większe niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe niż :value.',
        'string' => 'Pole :attribute musi być dłuższe niż :value znaków.',
    ],
    'gte' => [
        'array' => 'Pole :attribute musi mieć :value lub więcej elementów.',
        'file' => 'Pole :attribute musi być większe lub równe :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe lub równe :value.',
        'string' => 'Pole :attribute musi być dłuższe lub równe :value znaków.',
    ],
    'if_you_delete_team_all_data_will_be_deleted' => 'Jeśli zdecydujesz się usunąć zespół, wszystkie dane zostaną trwale usunięte.',
    'image' => 'Pole :attribute musi być obrazkiem.',
    'in' => 'Zaznaczony element :attribute jest nieprawidłowy.',
    'in_array' => 'Pole :attribute nie znajduje się w :other.',
    'integer' => 'Pole :attribute musi być liczbą całkowitą.',
    'ip' => 'Pole :attribute musi być prawidłowym adresem IP.',
    'ipv4' => 'Pole :attribute musi być prawidłowym adresem IPv4.',
    'ipv6' => 'Pole :attribute musi być prawidłowym adresem IPv6.',
    'json' => 'Pole :attribute musi być poprawnym ciągiem znaków JSON.',
    'leave_team' => 'Opuść Zespół',
    'looks_like_you_are_not_part_of_team' => 'Wygląda na to, że nie należysz do żadnego zespołu!',
    'lowercase' => ':Attribute musi być pisany małymi literami.',
    'lt' => [
        'array' => 'Pole :attribute musi mieć mniej niż :value elementów.',
        'file' => 'Pole :attribute musi być mniejsze niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze niż :value.',
        'string' => 'Pole :attribute musi być krótsze niż :value znaków.',
    ],
    'lte' => [
        'array' => 'Pole :attribute musi mieć :value lub mniej elementów.',
        'file' => 'Pole :attribute musi być mniejsze lub równe :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze lub równe :value.',
        'string' => 'Pole :attribute musi być krótsze lub równe :value znaków.',
    ],
    'mac_address' => 'Pole :attribute musi być prawidłowym adresem MAC.',
    'max' => [
        'array' => 'Pole :attribute nie może mieć więcej niż :max elementów.',
        'file' => 'Pole :attribute nie może być większe niż :max kilobajtów.',
        'numeric' => 'Pole :attribute nie może być większe niż :max.',
        'string' => 'Pole :attribute nie może być dłuższe niż :max znaków.',
    ],
    'max_digits' => 'Pole :attribute nie może mieć więcej niż :max cyfr.',
    'member' => 'Członek',
    'mimes' => 'Pole :attribute musi być plikiem typu :values.',
    'mimetypes' => 'Pole :attribute musi być plikiem typu :values.',
    'min' => [
        'array' => 'Pole :attribute musi mieć przynajmniej :min elementów.',
        'file' => 'Pole :attribute musi mieć przynajmniej :min kilobajtów.',
        'numeric' => 'Pole :attribute musi być nie mniejsze od :min.',
        'string' => 'Pole :attribute musi mieć przynajmniej :min znaków.',
    ],
    'min_digits' => 'Pole :attribute musi mieć co najmniej :min cyfr.',
    'missing' => 'Musi brakować pola :attribute.',
    'missing_if' => 'Jeśli :other to :value, musi brakować pola :attribute.',
    'missing_unless' => 'Musi brakować pola :attribute, chyba że :other to :value.',
    'missing_with' => 'Jeśli występuje wartość :values, musi brakować pola :attribute.',
    'missing_with_all' => 'Jeśli występuje :values, musi brakować pola :attribute.',
    'multiple_of' => 'Pole :attribute musi być wielokrotnością wartości :value',
    'next' => 'Następna &raquo;',
    'not_eligible_based_on_current_members_teams' => 'Nie kwalifikujesz się do tego planu na podstawie aktualnej liczby zespołów/członków zespołu.',
    'not_in' => 'Zaznaczony :attribute jest nieprawidłowy.',
    'not_regex' => 'Format pola :attribute jest nieprawidłowy.',
    'numeric' => 'Pole :attribute musi być liczbą.',
    'password' => 'Hasło jest nieprawidłowe.',
    'password' => [
        'letters' => 'Pole :attribute musi zawierać przynajmniej jedną literę.',
        'mixed' => 'Pole :attribute musi zawierać przynajmniej jedną wielką i jedną małą literę.',
        'numbers' => 'Pole :attribute musi zawierać przynajmniej jedną liczbę.',
        'symbols' => 'Pole :attribute musi zawierać przynajmniej jeden symbol.',
        'uncompromised' => 'Podany :attribute pojawił się w wycieku danych. Proszę wybrać inną wartość :attribute.',
    ],
    'plan_allows_no_more_teams' => 'Twój obecny plan nie pozwala na tworzenie większej liczby zespołów',
    'please_upgrade_to_add_more_members' => 'Uaktualnij subskrypcję, aby dodać więcej członków zespołu.',
    'please_upgrade_to_create_more_teams' => 'Uaktualnij swoją subskrypcję, aby utworzyć więcej zespołów.',
    'present' => 'Pole :attribute musi być obecne.',
    'previous' => '&laquo; Poprzednia',
    'prohibited' => 'Pole :attribute jest zabronione.',
    'prohibited_if' => 'Pole :attribute jest zabronione, gdy :other to :value.',
    'prohibited_unless' => 'Pole :attribute jest zabronione, chyba że :other jest w :values.',
    'prohibits' => 'Pole :attribute zabrania obecności :other.',
    'regex' => 'Format pola :attribute jest nieprawidłowy.',
    'relatable' => 'Pole :attribute nie może być powiązany z tym zasobem.',
    'remove_team_member' => 'Usuń Członka Zespołu',
    'required' => 'Pole :attribute jest wymagane.',
    'required_array_keys' => 'Pole :attribute musi zawierać wartości: :values.',
    'required_if' => 'Pole :attribute jest wymagane gdy :other ma wartość :value.',
    'required_if_accepted' => 'To pole jest wymagane gdy :other jest zaakceptowane.',
    'required_unless' => 'Pole :attribute jest wymagane jeżeli :other nie znajduje się w :values.',
    'required_with' => 'Pole :attribute jest wymagane gdy :values jest obecny.',
    'required_with_all' => 'Pole :attribute jest wymagane gdy wszystkie :values są obecne.',
    'required_without' => 'Pole :attribute jest wymagane gdy :values nie jest obecny.',
    'required_without_all' => 'Pole :attribute jest wymagane gdy żadne z :values nie są obecne.',
    'reset' => 'Hasło zostało zresetowane!',
    'same' => 'Pole :attribute i :other muszą być takie same.',
    'sent' => 'Przypomnienie hasła zostało wysłane!',
    'size' => [
        'array' => 'Pole :attribute musi zawierać :size elementów.',
        'file' => 'Pole :attribute musi mieć :size kilobajtów.',
        'numeric' => 'Pole :attribute musi mieć :size.',
        'string' => 'Pole :attribute musi mieć :size znaków.',
    ],
    'slug_input_explanation' => 'Ten slug służy do identyfikacji Twojego zespołu w adresach URL.',
    'starts_with' => 'Pole :attribute musi zaczynać się jedną z następujących wartości: :values.',
    'state' => 'Ten region nie jest prawidłowy dla określonego kraju.',
    'string' => 'Pole :attribute musi być ciągiem znaków.',
    'team' => 'Zespół',
    'team_billing' => 'Finanse Zespołu',
    'team_members' => 'Członkowie Zespołu',
    'team_name' => 'Nazwa Zespołu',
    'team_name_was_updated' => 'Nazwa Twojego zespołu została zaktualizowana!',
    'team_photo' => 'Zdjęcie Zespołu',
    'team_profile' => 'Profil Zespołu',
    'team_settings' => 'Ustawienia Zespołu',
    'team_slug' => 'Slug Zespołu',
    'team_trial' => 'Okres Próbny Zespołu',
    'team_trial_will_expire_on' => 'Okres próbny zespołu wygaśnie w dniu :date.',
    'teams' => 'Zespoły',
    'teams_currently_trialing' => 'Zespoły w Okresie Próbnym',
    'throttle' => 'Za dużo nieudanych prób logowania. Proszę spróbować za :seconds sekund.',
    'throttled' => 'Proszę zaczekać zanim spróbujesz ponownie.',
    'timezone' => 'Pole :attribute musi być prawidłową strefą czasową.',
    'token' => 'Token resetowania hasła jest nieprawidłowy.',
    'ulid' => 'Pole :attribute musi być prawidłowym identyfikatorem ULID.',
    'unique' => 'Taka wartość pola :attribute już występuje.',
    'update_team_name' => 'Zaktualizuj Nazwę Zespołu',
    'uploaded' => 'Nie udało się wgrać pliku :attribute.',
    'uppercase' => ':Attribute musi być pisany wielkimi literami.',
    'url' => 'Format pola :attribute jest nieprawidłowy.',
    'user' => 'Nie znaleziono użytkownika z takim adresem e-mail.',
    'user_already_invited_to_team' => 'Ten użytkownik jest już zaproszony do zespołu.',
    'user_already_on_team' => 'Ten użytkownik jest już w zespole.',
    'user_doesnt_belong_to_team' => 'Użytkownik nie należy do podanego zespołu.',
    'user_invited_to_join_team' => ':UserName zaprosił Cię do swojego zespołu!',
    'uuid' => 'Pole :attribute musi być poprawnym identyfikatorem UUID.',
    'vat_id' => 'Ten numer identyfikacyjny VAT jest nieprawidłowy.',
    'view_all_teams' => 'Wyświetl Zespoły',
    'we_found_invitation_to_team' => 'Znaleźliśmy Twoje zaproszenie do zespołu :teamName!',
    'wheres_your_team' => 'Gdzie Jest Twój Zespół?',
    'you_have_been_invited_to_join_team' => 'Zaproszono Cię do dołączenia do zespołu :teamName!',
    'you_have_x_invitations_remaining' => 'Obecnie masz :count pozostałych zaproszeń.',
    'you_have_x_teams_remaining' => 'Obecnie masz :teamCount pozostałych zespołów.',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute' => [
'rule" to name the lines. This makes it quick to
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
        'percentage'=>'procent',
        'name'=>'nazwa',
        'newCategoryName'=>'nazwa kategorii',



    ],

];
