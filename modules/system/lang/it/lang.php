<?php return [
    'app' => [
        'name' => 'Winter CMS',
        'tagline' => 'Tornare alle origini',
    ],
    'locale' => [
        'ar' => 'العربية',
        'be' => 'Беларуская',
        'bg' => 'Български',
        'ca' => 'Català',
        'cs' => 'Čeština',
        'da' => 'Dansk',
        'en' => 'English (United States)',
        'en-au' => 'English (Australia)',
        'en-ca' => 'English (Canada)',
        'en-gb' => 'English (United Kingdom)',
        'et' => 'Eesti',
        'de' => 'Deutsch',
        'el' => 'Ελληνικά',
        'es' => 'Español',
        'es-ar' => 'Español (Argentina)',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'fr-ca' => 'Français (Canada)',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italiano',
        'ja' => '日本語',
        'kr' => '한국어',
        'lt' => 'Lietuvių',
        'lv' => 'Latviešu',
        'nb-no' => 'Norsk (Bokmål)',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt-br' => 'Português (Brasil)',
        'pt-pt' => 'Português (Portugal)',
        'ro' => 'Română',
        'rs' => 'Srpski',
        'ru' => 'Русский',
        'fi' => 'Suomi',
        'sv' => 'Svenska',
        'sk' => 'Slovenský',
        'sl' => 'Slovenščina',
        'th' => 'ไทย',
        'tr' => 'Türkçe',
        'uk' => 'Українська мова',
        'zh-cn' => '简体中文',
        'zh-tw' => '繁體中文',
        'vn' => 'Tiếng việt',
    ],
    'directory' => [
        'create_fail' => 'Impossibile creare la cartella: :name',
    ],
    'file' => [
        'create_fail' => 'Impossibile creare il file: :name',
    ],
    'combiner' => [
        'not_found' => 'Il file combinatore \':name\' non è stato trovato.',
    ],
    'system' => [
        'name' => 'Sistema',
        'menu_label' => 'Sistema',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Varie',
            'logs' => 'Log',
            'mail' => 'Mail',
            'shop' => 'Negozio',
            'team' => 'Team',
            'users' => 'Utenti',
            'system' => 'Sistema',
            'social' => 'Social',
            'events' => 'Eventi',
            'customers' => 'Clienti',
            'my_settings' => 'Impostazioni personali',
        ],
    ],
    'theme' => [
        'label' => 'Tema',
        'unnamed' => 'Tema senza nome',
        'name' => [
            'label' => 'Nome tema',
            'help' => 'Cerca il tema tramite il suo codice univoco. Ad esempio, Winter.Vanilla',
        ],
    ],
    'themes' => [
        'install' => 'Installa temi',
        'search' => 'cerca temi da installare...',
        'installed' => 'Temi installati',
        'no_themes' => 'Non ci sono temi installati dal marketplace.',
        'recommended' => 'Raccomandati',
        'remove_confirm' => 'Sei sicuro di voler rimuovere questo tema?',
    ],
    'plugin' => [
        'label' => 'Plugin',
        'unnamed' => 'Plugin senza nome',
        'name' => [
            'label' => 'Nome del plugin',
            'help' => 'Cerca il plugin tramite il suo codice univoco. Ad esempio, Winter.Blog',
        ],
    ],
    'plugins' => [
        'manage' => 'Gestisci plugin',
        'enable_or_disable' => 'Abilita o disabilita',
        'enable_or_disable_title' => 'Abilita o disabilita plugin',
        'install' => 'Installa plugin',
        'install_products' => 'Installa prodotti',
        'search' => 'cerca plugin da installare...',
        'installed' => 'Plugin installati',
        'no_plugins' => 'Non ci sono temi installati dal marketplace.',
        'recommended' => 'Raccomandati',
        'remove' => 'Rimuovi',
        'refresh' => 'Reinstalla',
        'disabled_label' => 'Disabilitato',
        'disabled_help' => 'I plugin disabilitati sono ignorati dall\'applicazione.',
        'frozen_label' => 'Congela aggiornamenti',
        'frozen_help' => 'I plugin congelati verranno ignorati nel processo di aggiornamento.',
        'selected_amount' => 'Plugin selezionati: :amount',
        'remove_confirm' => 'Sei sicuro di voler rimuovere questo plugin?',
        'remove_success' => 'Rimozione dei plugin dal sistema eseguita con successo.',
        'refresh_confirm' => 'Sei sicuro?',
        'refresh_success' => 'Reinstallazione dei plugin nel sistema eseguita con successo.',
        'disable_confirm' => 'Sei sicuro?',
        'disable_success' => 'Disabilitazione dei plugin eseguita con successo.',
        'enable_success' => 'Abilitazione dei plugin eseguita con successo.',
        'unknown_plugin' => 'Il plugin è stato rimosso dal file system.',
    ],
    'project' => [
        'name' => 'Progetto',
        'owner_label' => 'Proprietario',
        'attach' => 'Collega progetto',
        'detach' => 'Scollega progetto',
        'none' => 'Nessuno',
        'id' => [
            'label' => 'ID del progetto',
            'help' => 'Come trovare l\'ID del tuo progetto',
            'missing' => 'Inserisci un ID di progetto da utilizzare.',
        ],
        'detach_confirm' => 'Sei sicuro di voler scollegare questo progetto?',
        'unbind_success' => 'Il progetto è stato scollegato con successo.',
    ],
    'settings' => [
        'menu_label' => 'Impostazioni',
        'not_found' => 'Impossibile trovare le impostazioni specificate.',
        'missing_model' => 'La pagine delle impostazioni non ha nessun modello associato.',
        'update_success' => 'Le impostazioni per :name sono state aggiornate con successo.',
        'return' => 'Ritorna alle impostazioni di sistema',
        'search' => 'Cerca',
    ],
    'mail' => [
        'log_file' => 'File di log',
        'menu_label' => 'Configurazione e-mail',
        'menu_description' => 'Gestisci la configurazione delle e-mail.',
        'general' => 'Generale',
        'method' => 'Metodo di invio',
        'sender_name' => 'Nome del mittente',
        'sender_email' => 'Indirizzo e-mail del mittente',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'Indirizzo SMTP',
        'smtp_authorization' => 'Il server SMTP richiede l\'autenticazione',
        'smtp_authorization_comment' => 'Seleziona se il tuo server SMTP richieste l\'autenticazione.',
        'smtp_username' => 'Username',
        'smtp_password' => 'Password',
        'smtp_port' => 'Porta SMTP',
        'smtp_ssl' => 'Connessione SSL richiesta',
        'smtp_encryption' => 'Protocollo di crittografia SMTP',
        'smtp_encryption_none' => 'Nessuna crittografia',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Percorso Sendmail',
        'sendmail_path_comment' => 'Inserisci il percorso al servizio sendmail.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Dominio Mailgun',
        'mailgun_domain_comment' => 'Inserisci il nome dominio Mailgun.',
        'mailgun_secret' => 'Chiave Mailgun',
        'mailgun_secret_comment' => 'Inserisci la tua chiave per l\'utilizzo delle API Mailgun.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Chiave Mandrill',
        'mandrill_secret_comment' => 'Inserisci la tua chiave per l\'utilizzo delle API Mandrill.',
        'ses' => 'SES',
        'ses_key' => 'Chiave SES',
        'ses_key_comment' => 'Inserisci la chiave per l\'utilizzo delle API SES',
        'ses_secret' => 'Chiave privata SES',
        'ses_secret_comment' => 'Inserisci la chiave privata per l\'utilizzo delle API SES',
        'ses_region' => 'Regione SES',
        'ses_region_comment' => 'Inserisci la tua regione SES (ad es. us-east-1)',
        'drivers_hint_header' => 'Driver non installati',
        'drivers_hint_content' => 'Questa modalità di invio richiede che il plugin ":plugin" sia installato prima che tu possa inviare messaggi.',
    ],
    'mail_templates' => [
        'menu_label' => 'Modelli di e-mail',
        'menu_description' => 'Modifica i modelli di e-mail inviati agli utenti ed amministratori, gestisci il layout delle e-mail.',
        'new_template' => 'Nuovo modello',
        'new_layout' => 'Nuovo layout',
        'template' => 'Modello',
        'templates' => 'Modelli',
        'menu_layouts_label' => 'Layouts delle e-mail',
        'layout' => 'Layout',
        'layouts' => 'Layouts',
        'no_layout' => '-- Nessun layout --',
        'name' => 'Nome',
        'name_comment' => 'Nome univoco utilizzato come riferimento a questo modello.',
        'code' => 'Codice',
        'code_comment' => 'Codice univoco utilizzato come riferimento a questo modello',
        'subject' => 'Oggetto',
        'subject_comment' => 'Oggetto del messaggio di posta',
        'description' => 'Descrizione',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Testo piano',
        'test_send' => 'Invia un messaggio di prova',
        'test_success' => 'Il messaggio di prova è stato inviato con successo.',
        'test_confirm' => 'Invio del messaggio di prova a :email. Continuare?',
        'creating' => 'Creazione modello...',
        'creating_layout' => 'Creazione layout...',
        'saving' => 'Salvataggio modello...',
        'saving_layout' => 'Salvataggio layout...',
        'delete_confirm' => 'Eliminare questo modello?',
        'delete_layout_confirm' => 'Eliminare questo layout?',
        'deleting' => 'Eliminazione modello...',
        'deleting_layout' => 'Eliminazione layout...',
        'sending' => 'Invio del messaggio di prova...',
        'return' => 'Ritorna all\'elenco dei modelli',
    ],
    'mail_brand' => [
        'menu_label' => 'Personalizzazione mail',
        'menu_description' => 'Modifica i colori a l\'aspetto dei messaggi di posta',
        'page_title' => 'Personalizza l\'aspetto dei messaggi email',
        'sample_template' => [
            'heading' => 'Intestazione',
            'paragraph' => 'Questo è un paragrafo pieno di Lorem Ipsum e con un link. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
            'table' => [
                'item' => 'Oggetto',
                'description' => 'Descrizione',
                'price' => 'Prezzo',
                'centered' => 'Al centro',
                'right_aligned' => 'A destra',
            ],
            'buttons' => [
                'primary' => 'Pulsante primario',
                'positive' => 'Pulsante positivo',
                'negative' => 'Pulsante negativo',
            ],
            'panel' => 'Quanto è bello questo pannello?',
            'more' => 'Qualche altra parola',
            'promotion' => 'Codice sconto: WINTER',
            'subcopy' => 'Questo è il testo secondario',
            'thanks' => 'Grazie',
        ],
        'fields' => [
            '_section_background' => 'Sfondo',
            'body_bg' => 'Sfondo corpo',
            'content_bg' => 'Sfondo contenuto',
            'content_inner_bg' => 'Sfondo contenuto interno',
            '_section_buttons' => 'Pulsanti',
            'button_text_color' => 'Colore testo pulsanti',
            'button_primary_bg' => 'Sfondo pulsante primario',
            'button_positive_bg' => 'Sfondo pulsante positivo',
            'button_negative_bg' => 'Sfondo pulsante negativo',
            '_section_type' => 'Tipografia',
            'header_color' => 'Colore intestazione principale',
            'heading_color' => 'Colore intestazioni',
            'text_color' => 'Colore testo',
            'link_color' => 'Colore collegamenti',
            'footer_color' => 'Colore piè di pagina',
            '_section_borders' => 'Bordi',
            'body_border_color' => 'Colore bordo corpo',
            'subcopy_border_color' => 'Colore bordo testo secondario',
            'table_border_color' => 'Colore bordo tabella',
            '_section_components' => 'Componenti',
            'panel_bg' => 'Sfondo pannello',
            'promotion_bg' => 'Sfondo box promozionale',
            'promotion_border_color' => 'Bordo box promozionale',
        ],
    ],
    'install' => [
        'project_label' => 'Collega al progetto',
        'plugin_label' => 'Installa plugin',
        'theme_label' => 'Installa tema',
        'missing_plugin_name' => 'Specifica il nome del plugin da installare.',
        'missing_theme_name' => 'Specifica il nome del tema da installare.',
        'install_completing' => 'Sto terminando il processo di installazione',
        'install_success' => 'Il plugin è stato installato con successo.',
    ],
    'updates' => [
        'title' => 'Gestisci aggiornamenti',
        'name' => 'Aggiornamento del software',
        'menu_label' => 'Aggiornamenti & Plugin',
        'menu_description' => 'Aggiorna il sistema, gestisci ed installa plugin e temi.',
        'return_link' => 'Ritorna agli aggiornamenti di sistema',
        'check_label' => 'Verifica gli aggiornamenti',
        'retry_label' => 'Riprova',
        'plugin_name' => 'Nome',
        'plugin_code' => 'Codice',
        'plugin_description' => 'Descrizione',
        'plugin_version' => 'Versione',
        'plugin_author' => 'Autore',
        'plugin_not_found' => 'Plugin not found',
        'core_current_build' => 'Build corrente',
        'core_build' => 'Build :build',
        'core_build_help' => 'Disponibile l\'ultima build.',
        'core_downloading' => 'Scaricamento dei file in corso',
        'core_extracting' => 'Estrazione dei file in corso',
        'plugins' => 'Plugin',
        'themes' => 'Temi',
        'disabled' => 'Disabilitati',
        'plugin_downloading' => 'Scaricamento plugin: :name',
        'plugin_extracting' => 'Estrazione plugin: :name',
        'plugin_version_none' => 'Nuovo plugin',
        'plugin_current_version' => 'Versione attuale',
        'theme_new_install' => 'Installa nuovo tema.',
        'theme_downloading' => 'Scaricamento tema: :name',
        'theme_extracting' => 'Estrazione tema: :name',
        'update_label' => 'Aggiorna il software',
        'update_completing' => 'Completamento del processo di aggiornamento',
        'update_loading' => 'Caricamento degli aggiornamenti disponibili...',
        'update_success' => 'L\'aggiornamento è stato eseguito con successo.',
        'update_failed_label' => 'Aggiornamento fallito',
        'force_label' => 'Forza aggiornamento',
        'found' => [
            'label' => 'Trovati nuovi aggiornamenti!',
            'help' => 'Clicca Aggiorna il software per iniziare il processo di aggiornamento.',
        ],
        'none' => [
            'label' => 'Nessun aggiornamento',
            'help' => 'Nessun aggiornamento trovato.',
        ],
        'important_action' => [
            'empty' => 'Seleziona azione',
            'confirm' => 'Conferma aggiornamento',
            'skip' => 'Salta questo plugin (solo questa volta)',
            'ignore' => 'Salta questo plugin (sempre)',
        ],
        'important_action_required' => 'Azione richiesta',
        'important_view_guide' => 'Visualizza la guida per l\'aggiornamento',
        'important_alert_text' => 'Alcuni aggiornamenti necessitano della tua attenzione.',
        'details_title' => 'Dettagli plugin',
        'details_view_homepage' => 'Visualizza homepage',
        'details_readme' => 'Documentazione',
        'details_readme_missing' => 'Nessuna documentazione fornita.',
        'details_upgrades' => 'Guida all\'aggiornamento',
        'details_upgrades_missing' => 'Nessuna guida all\'aggiornamento fornita.',
        'details_current_version' => 'Versione attuale',
        'details_author' => 'Autore',
    ],
    'server' => [
        'connect_error' => 'Errore durante la connessione al server.',
        'response_not_found' => 'Il server degli aggiornamento non è stato trovato.',
        'response_invalid' => 'Il server ha fornito una risposta non valida.',
        'response_empty' => 'Il server ha fornito una risposta vuota.',
        'file_error' => 'Il server non è riuscito a consegnare il pacchetto.',
        'file_corrupt' => 'Il file è corrotto.',
    ],
    'behavior' => [
        'missing_property' => 'La classe :class deve definire la proprietà $:property utilizzata dal comportamento :behavior.',
    ],
    'config' => [
        'not_found' => 'Il file di configurazione :file definito per :location non è stato trovato.',
        'required' => 'La configurazione utilizzata in :location deve fornire un valore \':property\'.',
    ],
    'zip' => [
        'extract_failed' => 'Estrazione del file sistema \':file\' non riuscita.',
    ],
    'event_log' => [
        'hint' => 'Questo registro visualizza un elenco dei potenziali errori occorsi nell\'applicazione, come eccezioni e informazioni di debug.',
        'menu_label' => 'Registro eventi',
        'menu_description' => 'Visualizza i messaggi del registro di sistema con i relativi orari di registrazione e dettagli.',
        'empty_link' => 'Svuota il registro eventi',
        'empty_loading' => 'Svuotamento del registro eventi in corso...',
        'empty_success' => 'Il registro eventi è stato svuotato con successo.',
        'return_link' => 'Ritorna al registro eventi',
        'id' => 'ID',
        'id_label' => 'ID evento',
        'created_at' => 'Data e ora',
        'message' => 'Messaggio',
        'level' => 'Livello',
        'preview_title' => 'Evento',
    ],
    'request_log' => [
        'hint' => 'Questo registro visualizza un elenco delle richieste del browser che possono richiedere attenzione. Ad esempio, se un visitatore apre una pagina del CMS che non può essere trovata, viene creato un record con il codice di errore 404.',
        'menu_label' => 'Registro richieste',
        'menu_description' => 'Visualizza richieste errate o reindirizzate, come Pagina non trovata (404).',
        'empty_link' => 'Svuota il registro richieste',
        'empty_loading' => 'Svuotamento del registro richieste in corso...',
        'empty_success' => 'Il registro richieste è stato svuotato con successo.',
        'return_link' => 'Ritorna al registro richieste',
        'id' => 'ID',
        'id_label' => 'ID Registro',
        'count' => 'Contatore',
        'referer' => 'Provenienza',
        'url' => 'URL',
        'status_code' => 'Codice di stato',
        'preview_title' => 'Richiesta',
    ],
    'permissions' => [
        'name' => 'Sistema',
        'manage_system_settings' => 'Gestisci impostazioni di sistema',
        'manage_software_updates' => 'Gestisci aggiornamenti del software',
        'access_logs' => 'Visualizza registri di sistema',
        'manage_mail_templates' => 'Gestisci i modelli e-mail',
        'manage_mail_settings' => 'Gestisci impostazioni e-mail',
        'manage_other_administrators' => 'Gestisci altri amministratori',
        'impersonate_users' => 'Impersona utenti',
        'manage_preferences' => 'Gestisci preferenze pannello di controllo',
        'manage_editor' => 'Gestisci preferenze editor di codice',
        'manage_own_editor' => 'Gestisci preferenze personali editor di codice',
        'view_the_dashboard' => 'Visualizza la dashboard',
        'manage_default_dashboard' => 'Gestisci la dashboard predefinita',
        'manage_branding' => 'Personalizza il pannello di controllo',
    ],
    'log' => [
        'menu_label' => 'Impostazioni registri',
        'menu_description' => 'E\' possibile specificare quali azioni registrare',
        'default_tab' => 'Registri',
        'log_events' => 'Registra gli eventi di sistema',
        'log_events_comment' => 'Registra gli eventi di sistema nel database in aggiunta al registro presente sul filesystem.',
        'log_requests' => 'Registra le richieste problematiche',
        'log_requests_comment' => 'Registra le richieste che potrebbero richiedere attenzioni particolari, come gli errori 404.',
        'log_theme' => 'Registra le modifiche al tema',
        'log_theme_comment' => 'Registra le modifiche effettuate al tema dall\'area di amministrazione.',
    ],
    'media' => [
        'invalid_path' => 'Percorso del file non valido: \':path\'.',
        'folder_size_items' => 'elementi',
    ],
    'page' => [
        'invalid_token' => [
            'label' => 'Token di protezione non valido',
        ],
    ],
    'pagination' => [
        'previous' => 'Precedente',
        'next' => 'Successiva',
    ],
];
