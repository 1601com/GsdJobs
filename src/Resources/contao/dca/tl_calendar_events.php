<?php

$GLOBALS['TL_LANG']['tl_calendar_events']['job_information_legend'] = 'Job Informationen';

array_push($GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['__selector__'], 'job_activate');
array_push($GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['__selector__'], 'address_add');

$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default'] = str_replace('addEnclosure;',
    'addEnclosure;job_activate,{job_information_legend:hide};',
    $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default']
);

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_activate'] = [
    'label'        =>['Job Informationen hinzufügen', ''],
    'exclude'      =>true,
    'inputType'    =>'checkbox',
    'eval'         =>array('submitOnChange'=>true, 'doNotCopy'=>true),
    'sql'          =>"char(1) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_title'] = [
    'label'        =>['Job Titel', 'der Titel des Jobs (max. 255 Zeichen)'],
    'search'       =>true,
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_description'] = [
    'label'        =>['Job Beschreibung', 'eine kurze Beschreibung des Jobs (max. 255 Zeichen), reiner Text'],
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>255, 'tl_class'=>'w100 clr long'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_employer'] = [
    'label'        =>['Arbeitgeber', 'der (Firmen-)Name des Arbeitgebers'],
    'inputType'    =>'text',
    'eval'         =>array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_website'] = [
    'label'        =>['Webseite des Arbeitgebers', 'Type: "URL" [http://mydomain.tld]'],
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>255, 'tl_class'=>'w50', 'rgxp'=>'url'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_employment_type'] = [
    'label'        =>['Art der Anstellung', 'Vollzeit, Teilzeit, etc.'],
    'inputType'    =>'select',
    'options'      =>[
        'full-time'    =>'Vollzeit',
        'part-time'    =>'Teilzeit',
        'contract'     =>'Vertragsgebunden (z.B. Freelancer)',
        'temporary'    =>'Zeitarbeit',
        'seasonal'     =>'Saisonarbeit',
        'internship'   =>'Praktikum',
    ],
    'eval'         =>array('mandatory'=>true, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_start_date'] = [
    'label'        =>['Anfangsdatum des Bewerbungszeitraums', 'Datum ab wann der Bewerbungszeitraum gilt und neue Bewerbungen berücksichtigt werden'],
    'inputType'    =>'text',
    'eval'         =>array('rgxp'=>'date', 'datepicker'=>true, 'tl_class'=>'w50'),
    'sql'          =>"int(10) unsigned NULL"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_expire_date'] = [
    'label'        =>['Enddatum des Bewerbungszeitraums', 'Datum bis wann der Bewerbungszeitraum gilt und neue Bewerbungen berücksichtigt werden'],
    'inputType'    =>'text',
    'eval'         =>array('rgxp'=>'date', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
    'sql'          =>"int(10) unsigned NULL"
];

/*Adresse*/

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_street'] = [
    'label'        =>['Straße und Hausnummer', 'Anschrift des Arbeitgebers'],
    'inputType'    =>'text',
    'eval'         =>array('mandatory'=>true,'maxlength'=>255, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_city'] = [
    'label'        =>['Stadt', 'Anschrift des Arbeitgebers'],
    'inputType'    =>'text',
    'eval'         =>array('mandatory'=>true,'maxlength'=>255, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_postal'] = [
    'label'        =>['PLZ', 'Anschrift des Arbeitgebers'],
    'inputType'    =>'text',
    'eval'         =>array('mandatory'=>true,'maxlength'=>20, 'tl_class'=>'w50'),
    'sql'          =>"varchar(20) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_country'] = [
    'label'        =>['Land', 'Ländercode im Format ISO 3166-2: "DE", "EN", ...'],
    'inputType'    =>'text',
    'eval'         =>array('mandatory'=>true, 'maxlength'=>2, 'tl_class'=>'w50', 'eval'=>'language'),
    'sql'          =>"varchar(2) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_salary'] = [
    'label'        =>['Gehalt', 'Gehaltsvorstellungen (optional, aber empfohlen). Bitte geben Sie ein durchschnittliches Monatsgehalt ohne Nachkommastellen an.'],
    'inputType'    =>'text',
    'eval'         =>array('rgxp'=>'digit', 'maxlength'=>255, 'tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['job_region'] = [
    'label'        =>['Region (in DE)', 'Bundesland'],
    'inputType'    =>'select',
    'options'      =>[
        'BW' => 'Baden-Württemberg',
        'BY' => 'Bayern',
        'BE' => 'Berlin',
        'BB' => 'Brandenburg',
        'HB' => 'Bremen',
        'HH' => 'Hamburg',
        'HE' => 'Hessen',
        'MV' => 'Mecklenburg-Vorpommern',
        'NI' => 'Niedersachsen',
        'NW' => 'Nordrhein-Westfalen',
        'RP' => 'Rheinland-Pfalz',
        'SL' => 'Saarland',
        'SN' => 'Sachsen',
        'ST' => 'Sachsen-Anhalt',
        'SH' => 'Schleswig-Holstein',
        'TH' => 'Thüringen',
        'SO' => 'Außerhalb von DE (Bitte füllen Sie das Feld "außerhalb von DE" aus)'
    ],
    'eval'         =>array('tl_class'=>'w50'),
    'sql'          =>"varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['address_region'] = [
    'label'        =>['Sonstige Region außerhalb von Deutschland', 'Eingabe im Form von gebräuchlichen Abkürzungen. Beispiel: New York -> NY'],
    'search'       =>true,
    'inputType'    =>'text',
    'eval'         =>array('maxlength'=>10, 'tl_class'=>'w50'),
    'sql'          =>"varchar(10) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_calendar_events']['subpalettes']['job_activate'] = 'job_title,job_description,job_employer,job_website,job_employment_type,job_salary,job_start_date,job_expire_date,job_street,job_city,job_postal,job_country,job_region,address_region';





