<?php

return array(
    'ad'				        => 'Aktivni direktorij',
    'ad_domain'				    => 'Domena Active Directory',
    'ad_domain_help'			=> 'Ovo je ponekad isto kao i vaša domena e-pošte, ali ne uvijek.',
    'is_ad'				        => 'Ovo je poslužitelj Active Directory',
	'alert_email'				=> 'Pošaljite upozorenja za',
	'alerts_enabled'			=> 'Upozorenja su omogućena',
	'alert_interval'			=> 'Prag prekoračenja upozorenja (u danima)',
	'alert_inv_threshold'		=> 'Prag upozorenja inventara',
	'asset_ids'					=> 'ID atributi',
	'audit_interval'            => 'Interval revizije',
    'audit_interval_help'       => 'Ako morate redovito fizički provjeravati svoju imovinu, unesite interval u mjesecima.',
	'audit_warning_days'        => 'Prag za upozorenje na reviziju',
    'audit_warning_days_help'   => 'Koliko dana unaprijed trebamo vas upozoriti kada imamo sredstva za reviziju?',
	'auto_increment_assets'		=> 'Generirajte ID-ove imovine za automatsko povećavanje',
	'auto_increment_prefix'		=> 'Prefiks (opcija)',
	'auto_incrementing_help'    => 'Omogućite automatsko povećavanje ID-ova imovine da biste to postavili',
	'backups'					=> 'Sigurnosne kopije',
	'barcode_settings'			=> 'Postavke crtičnog koda',
    'confirm_purge'			    => 'Potvrdite čišćenje',
    'confirm_purge_help'		=> 'Unesite tekst "DELETE" u donji okvir kako biste očistili brisane zapise. Ta se radnja ne može poništiti.',
	'custom_css'				=> 'Prilagođeni CSS',
	'custom_css_help'			=> 'Unesite bilo koji prilagođeni CSS nadjačaj koji biste željeli koristiti. Ne uključujte oznake &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
	'default_currency'  		=> 'Zadana valuta',
	'default_eula_text'			=> 'Zadana EULA',
  'default_language'			=> 'Zadani jezik',
	'default_eula_help_text'	=> 'Također možete povezati prilagođene EULA-e s određenim kategorijama imovine.',
    'display_asset_name'        => 'Prikaz naziva imovine',
    'display_checkout_date'     => 'Prikaz datuma narudžbe',
    'display_eol'               => 'Prikaži EOL u prikazu tablice',
    'display_qr'                => 'Prikaz kvadratnih kodova',
	'display_alt_barcode'		=> 'Prikaz 1D crtičnog koda',
	'barcode_type'				=> 'Vrsta 2D barkod',
	'alt_barcode_type'			=> '1D tip crtičnog koda',
    'eula_settings'				=> 'EULA postavke',
    'eula_markdown'				=> 'Ovo EULA dopušta <a href="https://help.github.com/articles/github-flavored-markdown/">Gordan markdown</a>.',
    'general_settings'			=> 'Opće postavke',
	'generate_backup'			=> 'Izradi sigurnosnu kopiju',
    'header_color'              => 'Boja zaglavlja',
    'info'                      => 'Te postavke omogućuju prilagodbu određenih aspekata vaše instalacije.',
    'laravel'                   => 'Inačica Laravela',
    'ldap_enabled'              => 'LDAP je omogućen',
    'ldap_integration'          => 'LDAP integracija',
    'ldap_settings'             => 'LDAP postavke',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'LDAP poslužitelj',
    'ldap_server_help'          => 'To bi trebalo započeti s ldap: // (za neispisane ili TLS) ili ldaps: // (za SSL)',
	'ldap_server_cert'			=> 'Provjera LDAP SSL certifikata',
	'ldap_server_cert_ignore'	=> 'Dopusti nevažeću SSL certifikat',
	'ldap_server_cert_help'		=> 'Odaberite ovaj potvrdni okvir ako upotrebljavate autentičnu SSL certifikat i želite prihvatiti nevažeći SSL certifikat.',
    'ldap_tls'                  => 'Koristite TLS',
    'ldap_tls_help'             => 'To treba provjeriti samo ako pokrenete STARTTLS na LDAP poslužitelju.',
    'ldap_uname'                => 'LDAP pridržava se korisničko ime',
    'ldap_pword'                => 'Lozinka vezivanja LDAP-a',
    'ldap_basedn'               => 'Baza se povezuje s DN',
    'ldap_filter'               => 'LDAP filtar',
    'ldap_pw_sync'              => 'LDAP lozinka sinkronizacija',
    'ldap_pw_sync_help'         => 'Poništite ovaj okvir ako ne želite zadržati LDAP zaporke sinkronizirane lokalnim zaporkama. Onemogućavanje ovog znači da se vaši korisnici možda neće moći prijaviti ako vaš LDAP poslužitelj zbog nekog razloga nije dostupan.',
    'ldap_username_field'       => 'Polje za korisničko ime',
    'ldap_lname_field'          => 'Prezime',
    'ldap_fname_field'          => 'Ime LDAP-a',
    'ldap_auth_filter_query'    => 'Upit za provjeru autentičnosti LDAP-a',
    'ldap_version'              => 'LDAP inačica',
    'ldap_active_flag'          => 'LDAP aktivna zastava',
    'ldap_emp_num'              => 'Broj zaposlenika LDAP-a',
    'ldap_email'                => 'LDAP e-pošta',
    'load_remote_text'          => 'Daljinske skripte',
    'load_remote_help_text'		=> 'Ova instalacija Snipe-IT može učitati skripte iz vanjskog svijeta.',
    'login_note'                => 'Prijava bilješke',
    'login_note_help'           => 'Po želji možete uključiti nekoliko rečenica na zaslonu za prijavu, na primjer, kako biste pomogli osobama koje su pronašle izgubljeni ili ukradeni uređaj. Ovo polje prihvaća <a href="https://help.github.com/articles/github-flavored-markdown/">Gordinu s okusom s okusom</a>',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Ograničavanje korisnika (uključujući administratore) koje tvrtke dodjeljuju imovini tvrtke.',
    'full_multiple_companies_support_text' => 'Potpuna podrška za više tvrtki',
    'optional'					=> 'neobavezan',
    'per_page'                  => 'Rezultati po stranici',
    'php'                       => 'PHP verzija',
    'php_gd_info'               => 'Morate instalirati php-gd da biste prikazali QR kodove, pogledajte instalacijske upute.',
    'php_gd_warning'            => 'PHP Image Processing i GD dodatak NIJE instalirani.',
    'pwd_secure_complexity'     => 'Složenost lozinke',
    'pwd_secure_complexity_help' => 'Odaberite koja pravila za složenost lozinke želite izvršiti.',
    'pwd_secure_min'            => 'Najmanji broj znakova',
    'pwd_secure_min_help'       => 'Minimalna dopuštena vrijednost je 5',
    'pwd_secure_uncommon'       => 'Spriječite uobičajene zaporke',
    'pwd_secure_uncommon_help'  => 'To će onemogućiti korisnicima upotrebu uobičajenih zaporki s najviše 10.000 zaporki prijavljenih u kršenju.',
    'qr_help'                   => 'Najprije omogućite QR kodove za postavljanje',
    'qr_text'                   => 'QR kodni tekst',
    'setting'                   => 'postavljanje',
    'settings'                  => 'postavke',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'site_name'                 => 'Ime stranice',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Zatezanje postavki',
    'slack_integration_help'    => 'Slaba integracija nije obavezna, no krajnja točka i kanal su potrebni ako ga želite koristiti. Da biste konfigurirali zamršenu integraciju, prvo morate <a href=":slack_link" target="_new">izraditi dolazni webhook</a> na vašem računu Zalogao.',
    'snipe_version'  			=> 'Snipe-IT verzija',
    'system'                    => 'Informacije o sustavu',
    'update'                    => 'Ažuriraj postavke',
    'value'                     => 'Vrijednost',
    'brand'                     => 'branding',
    'about_settings_title'      => 'O postavkama',
    'about_settings_text'       => 'Te postavke omogućuju prilagodbu određenih aspekata vaše instalacije.',
    'labels_per_page'           => 'Oznake po stranici',
    'label_dimensions'          => 'Dimenzije oznake (inča)',
    'next_auto_tag_base'        => 'Sljedeći automatski prirast',
    'page_padding'             => 'Margine stranice (inča)',
    'purge'                    => 'Obrišite izbrisane zapise',
    'labels_display_bgutter'    => 'Oznaka donjeg kanala',
    'labels_display_sgutter'    => 'Oznaka kanala',
    'labels_fontsize'           => 'Oznaka veličine fonta',
    'labels_pagewidth'          => 'Širina listova naljepnica',
    'labels_pageheight'         => 'Visina naljepnice',
    'label_gutters'        => 'Razmak oznaka (inča)',
    'page_dimensions'        => 'Dimenzije stranice (inča)',
    'label_fields'          => 'Označite vidljiva polja',
    'inches'        => 'inča',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Veza na Snipe-IT u e-pošti',
    'show_url_in_emails_help_text'      => 'Poništite potvrdni okvir ako ne želite povezati vašu Snipe-IT instalaciju u svoje podnožje e-pošte. Korisno je ako se većina korisnika nikada ne prijavljuje.',
    'text_pt'        => 'PT',
    'thumbnail_max_h'   => 'Maksimalna visina minijature',
    'thumbnail_max_h_help'   => 'Maksimalna visina u pikselima koje se minijature prikazuju u prikazu unosa. Min 25, max 500.',
    'two_factor'        => 'Dva faktorska provjera autentičnosti',
    'two_factor_secret'        => 'Dva faktorska šifra',
    'two_factor_enrollment'        => 'Dva faktora upisa',
    'two_factor_enabled_text'        => 'Omogući dva faktora',
    'two_factor_reset'        => 'Poništi dvoznamenkasti faktor',
    'two_factor_reset_help'        => 'To će prisiliti korisnika da ponovno registrira svoj uređaj s Googleovom autentifikatorom. To može biti korisno ako je izgubljen ili ukraden trenutačno upisani uređaj.',
    'two_factor_reset_success'          => 'Uspješno resetira dva faktorska uređaja',
    'two_factor_reset_error'          => 'Dva faktora resetiranja uređaja nije uspjela',
    'two_factor_enabled_warning'        => 'Omogućivanje dva faktora ako trenutačno nije omogućeno odmah će vas prisiliti na provjeru autentičnosti pomoću uređaja za prijavu na Google Auth. Moći ćete upisati svoj uređaj ako ga trenutno niste upisali.',
    'two_factor_enabled_help'        => 'To će uključiti autentifikaciju s dva faktora pomoću Google Autentifikatora.',
    'two_factor_optional'        => 'Selektivan (Korisnici mogu omogućiti ili onemogućiti ako su dopušteni)',
    'two_factor_required'        => 'Obavezno za sve korisnike',
    'two_factor_disabled'        => 'onesposobljen',
    'two_factor_enter_code'	=> 'Unesite dvoznamenkasti kôd',
    'two_factor_config_complete'	=> 'Pošaljite šifru',
    'two_factor_enabled_edit_not_allowed' => 'Vaš administrator vam ne dopušta uređivanje ove postavke.',
    'two_factor_enrollment_text'	=> "Potrebna je autentikacija dva faktora, međutim vaš uređaj još nije upisan. Otvorite aplikaciju Google autentifikator i skenirajte QR kôd u nastavku da biste registrirali svoj uređaj. Nakon što upišete uređaj, unesite kôd u nastavku",
    'require_accept_signature'      => 'Potražite potpis',
    'require_accept_signature_help_text'      => 'Ako omogućite tu značajku, korisnici će se morati fizički odjaviti pri prihvaćanju imovine.',
    'left'        => 'lijevo',
    'right'        => 'pravo',
    'top'        => 'vrh',
    'bottom'        => 'dno',
    'vertical'        => 'vertikala',
    'horizontal'        => 'vodoravan',
    'zerofill_count'        => 'Duljina oznaka za imovinu, uključujući nulte punjenje',
);
