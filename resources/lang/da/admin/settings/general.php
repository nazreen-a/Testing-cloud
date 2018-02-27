<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domæne',
    'ad_domain_help'			=> 'Dette er nogle gange det samme som dit e-mail-domæne, men ikke altid.',
    'is_ad'				        => 'Dette er en Active Directory-server',
	'alert_email'				=> 'Send advarsler til',
	'alerts_enabled'			=> 'Advarsler aktiveret',
	'alert_interval'			=> 'Udløbsvarsel Threshold (i dage)',
	'alert_inv_threshold'		=> 'Lagervarsletærskel',
	'asset_ids'					=> 'Aktiv-id\'er',
	'audit_interval'            => 'Revisionsinterval',
    'audit_interval_help'       => 'Hvis du skal regelmæssigt kontrollere dine aktiver fysisk, skal du indtaste intervallet i måneder.',
	'audit_warning_days'        => 'Audit Warning Threshold',
    'audit_warning_days_help'   => 'Hvor mange dage i forvejen skal vi advare dig, når aktiver skal betales for revision?',
	'auto_increment_assets'		=> 'Generer automatisk stigende aktiv-id\'er',
	'auto_increment_prefix'		=> 'Præfiks (valgfrit)',
	'auto_incrementing_help'    => 'Aktivér automatisk inkrementering af aktiv ID\'er for at indstille dette',
	'backups'					=> 'Backups',
	'barcode_settings'			=> 'Stregkodeindstillinger',
    'confirm_purge'			    => 'Bekræft rensning',
    'confirm_purge_help'		=> 'Indtast teksten "DELETE" i boksen nedenfor for at rense dine slettede poster. Denne handling kan ikke fortrydes.',
	'custom_css'				=> 'Brugerdefineret CSS',
	'custom_css_help'			=> 'Indtast eventuelle brugerdefinerede CSS overskridelser, du gerne vil bruge. Indsæt ikke de &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
	'default_currency'  		=> 'Standardvaluta',
	'default_eula_text'			=> 'Standard EULA',
  'default_language'			=> 'Standard sprog',
	'default_eula_help_text'	=> 'Du kan også knytte brugerdefinerede EULA til specifikke aktivkategorier.',
    'display_asset_name'        => 'Vis aktivnavn',
    'display_checkout_date'     => 'Vis checkout dato',
    'display_eol'               => 'Vis EOL i tabelvisning',
    'display_qr'                => 'Vis firkantede koder',
	'display_alt_barcode'		=> 'Vis 1D stregkode',
	'barcode_type'				=> '2D stregkode type',
	'alt_barcode_type'			=> '1D stregkode type',
    'eula_settings'				=> 'EULA-indstillinger',
    'eula_markdown'				=> 'Denne EULA tillader <a href="https://help.github.com/articles/github-flavored-markdown/">Github smagsmærket markdown</a>.',
    'general_settings'			=> 'Generelle indstillinger',
	'generate_backup'			=> 'Generer sikkerhedskopiering',
    'header_color'              => 'Hovedfarge',
    'info'                      => 'Disse indstillinger giver dig mulighed for at tilpasse visse aspekter af din installation.',
    'laravel'                   => 'Laravel Version',
    'ldap_enabled'              => 'LDAP aktiveret',
    'ldap_integration'          => 'LDAP Integration',
    'ldap_settings'             => 'LDAP-indstillinger',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'LDAP-server',
    'ldap_server_help'          => 'Dette skal starte med ldap: // (for ukrypteret eller TLS) eller ldaps: // (for SSL)',
	'ldap_server_cert'			=> 'Validering af LDAP SSL-certifikat',
	'ldap_server_cert_ignore'	=> 'Tillad ugyldigt SSL-certifikat',
	'ldap_server_cert_help'		=> 'Marker dette afkrydsningsfelt, hvis du bruger et selvtegnet SSL cert og vil gerne acceptere et ugyldigt SSL-certifikat.',
    'ldap_tls'                  => 'Brug TLS',
    'ldap_tls_help'             => 'Dette bør kun kontrolleres, hvis du kører STARTTLS på din LDAP-server.',
    'ldap_uname'                => 'LDAP Bind Brugernavn',
    'ldap_pword'                => 'LDAP-bindingsadgangskode',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP-filter',
    'ldap_pw_sync'              => 'LDAP Password Sync',
    'ldap_pw_sync_help'         => 'Fjern markeringen i dette felt, hvis du ikke vil beholde LDAP-adgangskoder synkroniseret med lokale adgangskoder. Deaktivering dette betyder, at dine brugere muligvis ikke kan logge ind, hvis din LDAP-server ikke er tilgængelig af en eller anden grund.',
    'ldap_username_field'       => 'Brugernavn felt',
    'ldap_lname_field'          => 'Efternavn',
    'ldap_fname_field'          => 'LDAP fornavn',
    'ldap_auth_filter_query'    => 'LDAP-godkendelse forespørgsel',
    'ldap_version'              => 'LDAP Version',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_emp_num'              => 'LDAP medarbejdernummer',
    'ldap_email'                => 'LDAP Email',
    'load_remote_text'          => 'Fjernskrifter',
    'load_remote_help_text'		=> 'Denne Snipe-IT-installation kan indlæse scripts fra omverdenen.',
    'login_note'                => 'Login Note',
    'login_note_help'           => 'Indsæt eventuelt nogle sætninger på din loginskærm, for eksempel for at hjælpe personer, der har fundet en tabt eller stjålet enhed. Dette felt accepterer <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Begrænsning af brugere (herunder admins) tildelt virksomheder til deres virksomheds aktiver.',
    'full_multiple_companies_support_text' => 'Fuld flere virksomheder support',
    'optional'					=> 'valgfri',
    'per_page'                  => 'Resultater pr. Side',
    'php'                       => 'PHP Version',
    'php_gd_info'               => 'Du skal installere php-gd for at vise QR-koder, se installationsvejledningen.',
    'php_gd_warning'            => 'PHP Image Processing og GD plugin er IKKE installeret.',
    'pwd_secure_complexity'     => 'Password Complexity',
    'pwd_secure_complexity_help' => 'Vælg, hvilke regler for adgangskompleksitet du ønsker at håndhæve.',
    'pwd_secure_min'            => 'Minimumskode til adgangskode',
    'pwd_secure_min_help'       => 'Mindste tilladte værdi er 5',
    'pwd_secure_uncommon'       => 'Forhindre almindelige adgangskoder',
    'pwd_secure_uncommon_help'  => 'Dette vil gøre det muligt for brugere at bruge almindelige adgangskoder fra de 10.000 passwords, der er rapporteret i tilfælde af brud.',
    'qr_help'                   => 'Aktiver QR-koder først for at indstille dette',
    'qr_text'                   => 'QR Kode Tekst',
    'setting'                   => 'Indstilling',
    'settings'                  => 'Indstillinger',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'site_name'                 => 'Side navn',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slap endepunkt',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slap integration er valgfri, men endpoint og kanal er påkrævet, hvis du ønsker at bruge det. For at konfigurere Slack integration skal du først <a href=":slack_link" target="_new">skabe en indgående webhook</a> på din Slack-konto.',
    'snipe_version'  			=> 'Snipe-IT version',
    'system'                    => 'Systemoplysninger',
    'update'                    => 'Opdater indstillinger',
    'value'                     => 'Værdi',
    'brand'                     => 'Branding',
    'about_settings_title'      => 'Om indstillinger',
    'about_settings_text'       => 'Disse indstillinger giver dig mulighed for at tilpasse visse aspekter af din installation.',
    'labels_per_page'           => 'Etiketter pr. Side',
    'label_dimensions'          => 'Etiket dimensioner (inches)',
    'next_auto_tag_base'        => 'Næste automatisk stigning',
    'page_padding'             => 'Sidemarginer (tommer)',
    'purge'                    => 'Ryd slettet poster',
    'labels_display_bgutter'    => 'Etiket bundgitter',
    'labels_display_sgutter'    => 'Label side rende',
    'labels_fontsize'           => 'Etiket skriftstørrelse',
    'labels_pagewidth'          => 'Labelark bredde',
    'labels_pageheight'         => 'Etiketark højde',
    'label_gutters'        => 'Etiketafstand (tommer)',
    'page_dimensions'        => 'Side dimensioner (tommer)',
    'label_fields'          => 'Label synlige felter',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link til Snipe-IT i e-mails',
    'show_url_in_emails_help_text'      => 'Fjern markeringen i dette felt, hvis du ikke vil linke tilbage til din Snipe-IT-installation i dine e-mail-fodbold. Nyttigt, hvis de fleste af dine brugere aldrig logger ind.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max miniaturehøjde',
    'thumbnail_max_h_help'   => 'Maksimal højde i pixels, som miniaturer kan vises i listevisningen. Min 25, maks 500.',
    'two_factor'        => 'To faktor godkendelse',
    'two_factor_secret'        => 'Tofaktorkode',
    'two_factor_enrollment'        => 'Two-Factor Enrollment',
    'two_factor_enabled_text'        => 'Aktivér to faktorer',
    'two_factor_reset'        => 'Reset 2-Factor Secret',
    'two_factor_reset_help'        => 'Dette vil tvinge brugeren til at tilmelde deres enhed med Google Authenticator igen. Dette kan være nyttigt, hvis deres tilmeldte enhed er tabt eller stjålet.',
    'two_factor_reset_success'          => 'To faktor enhed nulstilles',
    'two_factor_reset_error'          => 'To-faktor enhed reset mislykkedes',
    'two_factor_enabled_warning'        => 'Aktivering af to-faktor, hvis den ikke er aktiveret, vil straks tvinge dig til at godkende med en Google Auth-indskrevet enhed. Du vil have mulighed for at tilmelde din enhed, hvis en ikke er indskrevet på nuværende tidspunkt.',
    'two_factor_enabled_help'        => 'Dette aktiverer tofaktors godkendelse ved hjælp af Google Authenticator.',
    'two_factor_optional'        => 'Selektiv (Brugere kan aktivere eller deaktivere hvis tilladt)',
    'two_factor_required'        => 'Påkrævet for alle brugere',
    'two_factor_disabled'        => 'handicappet',
    'two_factor_enter_code'	=> 'Indtast tofaktorkode',
    'two_factor_config_complete'	=> 'Indsend kode',
    'two_factor_enabled_edit_not_allowed' => 'Din administrator tillader ikke dig at redigere denne indstilling.',
    'two_factor_enrollment_text'	=> "To faktor godkendelse er påkrævet, men din enhed er endnu ikke blevet tilmeldt. Åbn din Google Authenticator-app og scan QR-koden nedenfor for at tilmelde din enhed. Når du har tilmeldt din enhed, skal du indtaste koden nedenfor",
    'require_accept_signature'      => 'Kræver Signatur',
    'require_accept_signature_help_text'      => 'Aktivering af denne funktion kræver, at brugerne fysisk logger af ved at acceptere et aktiv.',
    'left'        => 'venstre',
    'right'        => 'højre',
    'top'        => 'top',
    'bottom'        => 'bund',
    'vertical'        => 'lodret',
    'horizontal'        => 'vandret',
    'zerofill_count'        => 'Længde af aktivetiketter, herunder zerofill',
);
