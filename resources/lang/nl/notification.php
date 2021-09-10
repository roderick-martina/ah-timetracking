<?php

return [
    'dashboard' => [
        'time-entry' => [
            'store' => [
                'success' => 'Je tijd is geregistreerd.',
                'error' => 'Er is fout gegaan bij het registreren van je tijd.'
            ],
        ]
    ],
    'settings' => [
        'update' => [
            'success' => 'Instellingen is aangepast.',
            'error' => 'Er is fout gegaan bij het wijzigen van het je instellingen.'
        ]
    ],
    'team' => [
        'store' => [
            'success' => 'Een uitnodiging is verstuurd.',
            'error' => 'Er is fout gegaan bij het uitnodigen van een gebruiker.'
        ],
        'update' => [
            'success' => 'Profiel is aangepast.',
            'error' => 'Er is fout gegaan bij het wijzigen van het profiel.'
        ],
        'destroy' => [
            'success' => 'De gebruiker is verwijderd.',
            'error' => 'Er is fout gegaan bij het verwijderen van de gebruiker.'
        ]
    ],

    'employee' => [
        'store' => [
            'success' => 'Een uitnodiging is verstuurd.',
            'error' => 'Er is fout gegaan bij het uitnodigen van een medewerker.'
        ],
        'update' => [
            'success' => 'Profiel is aangepast.',
            'error' => 'Er is fout gegaan bij het wijzigen van het profiel.'
        ]
    ],

    'company' => [
        'store' => [
            'success' => 'Het bedrijf is aangemaakt.',
            'error' => 'Er is fout gegeaan hij het opslaan van het bedrijf'
        ],
        'update' => [
            'success' => 'De bedrijfsgegevens zijn aangepast.',
            'error' => 'Er is fout gegaan bij het wijzigen van het profiel.'
        ],
        'destroy' => [
            'success' => 'Het bedrijf is verwijderd.',
            'error' => 'Er is fout gegaan bij het verwijderen van het bedrijf.'
        ],
    ],

    'project' => [
        'store' => [
            'success' => 'het project is aangemaakt.',
            'error' => 'Er is fout gegaan bij het opslaan van het project.'
        ],
        'update' => [
            'success' => 'Het project is aangepast.',
            'error' => 'Er is fout gegaan bij het wijzigen van het project.'
        ],
        'destroy' => [
            'success' => 'Het project is verwijderd.',
            'error' => 'Er is fout gegaan bij het verwijderen van het project.'
        ],
    ],

    'ticket' => [
        'comments' => [
            'store' => [
                'success' => 'Je comment is geplaatst.',
                'error' => 'Er is fout gegaan bij het opslaan van de comment.'
            ],
            'update' => [
                'success' => 'Je comment is aangepast.',
                'error' => 'Er is fout gegaan bij het wijzigen van de comment.'
            ],
            'restore' => [
                'success' => 'Je comment is hersteld.',
                'error' => 'Er is fout gegaan bij het herstellen van de comment.'
            ],
            'destroy' => [
                'success' => 'Je comment is verwijderd.',
                'error' => 'Er is fout gegaan bij het verwijderen van de comment.'
            ],
            'force_destroy' => [
                'success' => 'Je comment is permanent verwijderd.',
                'error' => 'Er is fout gegaan bij het permanent verwijderen van de comment.'
            ]
        ],

        'tasks' => [
            'store' => [
                'success' => 'Je taak is aangemaakt.',
                'error' => 'Er is fout gegaan bij het aanmaken van eentaak.'
            ],
            'update' => [
                'success' => 'Je taak is aangepast.',
                'error' => 'Er is fout gegaan bij het wijzigen van de taak.'
            ],
            'finished' => [
                'success' => 'Je taak is voltooid.',
                'error' => 'Er is fout gegaan bij het voltooien van de taak.'
            ],
            'destroy' => [
                'success' => 'Je taak is verwijderd.',
                'error' => 'Er is fout gegaan bij het verwijderen van de taak.'
            ],
        ],

        'store' => [
            'success' => 'Je ticket is aangemaakt.',
            'error' => 'Er is fout gegaan bij het opslaan van de ticket.'
        ],
        'update' => [
            'success' => 'De ticket is aangepast.',
            'error' => 'Er is fout gegaan bij het wijzigen van de ticket.'
        ]
    ],

    'invitation' => [
        'update' => [
            'success' => 'Je account is aangemaakt.',
            'error' => 'Er is fout gegaan bij het maken van je account.'
        ]
    ],

    'profile' => [
        'store' => [
            'success' => 'Je foto is gewijzigd',
            'error' => 'Er is fout gegaan bij het wijzigen van je foto.'
        ],
        'update' => [
            'success' => 'Profiel is aangepast.',
        ]
    ],

    'status' => [
        'store' => [
            'success' => 'Je status is aangemaakt',
            'error' => 'Er is fout gegaan bij het maken van je status.'
        ],
        'update' => [
            'success' => 'Je status is aangepast.',
            'error' => 'Er is fout gegaan bij het wijzigen van je status.'
        ],
        'destroy' => [
            'success' => 'Je status is verwijderd.',
            'error' => 'Er is fout gegaan bij het verwijderen van je status.',
            'tickets' => 'De status kan moet worden verwijderd omdat die gekoppeld is aan tickets'
        ]
    ],

    'time-entry' => [
        'store' => [
            'success' => 'Je tijd is geregistreerd.',
            'error' => 'Er is fout gegaan bij het registreren van je tijd.'
        ],
        'update' => [
            'success' => 'Je tijdregistratie is aangepast.',
            'error' => 'Er is fout gegaan bij het wijzigen van je tijdregistratie.'
        ],
        'destroy' => [
            'success' => 'Je tijdregistratie is verwijderd.',
            'error' => 'Er is fout gegaan bij het verwijderen van je tijdregistratie.',
        ]
    ],

    'time-entry-types' => [
        'store' => [
            'success' => 'Je urenregistratie type is aangemaakt.',
            'error' => 'Er is fout maken van je urenregistratie type.'
        ],
        'update' => [
            'success' => 'Je urenregistratie type is aangepast.',
            'error' => 'Er is fout gegaan bij het wijzigen van je urenregistratie type.'
        ],
        'destroy' => [
            'success' => 'Je urenregistratie type is verwijderd.',
            'error' => 'Er is fout gegaan bij het verwijderen van je urenregistratie type.',
        ]
    ],

    'quotation' => [
        'chapter' => [
            'store' => [
                'success' => 'Je offerte hoofdstuk is aangemaakt.',
                'error' => 'Er is fout gegaan bij het maken van de offerte hoofdstuk.'
            ],
            'update' => [
                'success' => 'Je offerte hoofdstuk is aangepast.',
                'error' => 'Er is fout gegaan bij het wijzigen van de offerte hoofdstuk.'
            ],
            'destroy' => [
                'success' => 'Je offerte hoofdstuk is verwijderd.',
                'error' => 'Er is fout gegaan bij het verwijderen van de offerte hoofdstuk.'
            ],
        ],
        'block' => [
            'item' => [
                'store' => [
                    'success' => 'Je offerte blok regel is aangemaakt.',
                    'error' => 'Er is fout gegaan bij het maken van de offerte blok regel.'
                ],
                'update' => [
                    'success' => 'Je offerte blok regel is aangepast.',
                    'error' => 'Er is fout gegaan bij het wijzigen van de offerte blok regel.'
                ],
                'destroy' => [
                    'success' => 'Je offerte blok regel is verwijderd.',
                    'error' => 'Er is fout gegaan bij het verwijderen van de offerte blok.'
                ],
            ],
            'store' => [
                'success' => 'Je offerte blok is aangemaakt.',
                'error' => 'Er is fout gegaan bij het maken van de offerte blok.'
            ],
            'update' => [
                'success' => 'Je offerte blok is aangepast.',
                'error' => 'Er is fout gegaan bij het wijzigen van de offerte blok.'
            ],
            'destroy' => [
                'success' => 'Je offerte blok is verwijderd.',
                'error' => 'Er is fout gegaan bij het verwijderen van de offerte blok.'
            ],
        ],
        'store' => [
            'success' => 'Je offerte is aangemaakt.',
            'error' => 'Er is fout gegaan bij het maken van de offerte.'
        ],
        'update' => [
            'success' => 'Je offerte is aangepast.',
            'error' => 'Er is fout gegaan bij het wijzigen van de offerte.'
        ],
        'destroy' => [
            'success' => 'Je offerte is verwijderd.',
            'error' => 'Er is fout gegaan bij het verwijderen van de offerte.'
        ],
    ],

    'invoice' => [
        'item' => [
            'store' => [
                'success' => 'Je factuur regel is aangemaakt.',
                'error' => 'Er is fout gegaan bij het aanmaken van een factuur regel.'
            ],
            'update' => [
                'success' => 'Je factuur regel is aangepast.',
                'error' => 'Er is fout gegaan bij het wijzigen van het factuur regel.'
            ],
            'destroy' => [
                'success' => 'Je factuur regel is verwijderd.',
                'error' => 'Er is fout gegaan bij het verwijderen van het factuur regel.'
            ],
        ],
        'reminder' => [
            'store' => [
                'success' => 'Je factuur herinnering is aangemaakt.',
                'error' => 'Er is fout gegaan bij het maken van je factuur herinnering.'
            ],
            'update' => [
                'success' => 'Je factuur herinnering is aangepast.',
                'error' => 'Er is fout gegaan bij het wijzigen van je factuur herinnering.'
            ],
            'destroy' => [
                'success' => 'Je factuur herinnering is verwijderd.',
                'error' => 'Er is fout gegaan bij het verwijderen van je factuur herinnering.'
            ],

        ],
        'store' => [
            'success' => 'Je factuur is aangemaakt.',
            'error' => 'Er is fout gegaan bij het aanmaken van een factuur.'
        ],
        'update' => [
            'success' => 'Je factuur is aangepast.',
            'error' => 'Er is fout gegaan bij het wijzigen van het factuur.'
        ],
        'send' => [
            'success' => 'Je factuur is verzonden.',
            'error' => 'Er is fout gegaan bij het verzenden je factuur.'
        ],
        'processing' => [
            'success' => 'Je factuur is in behandeling.',
            'error' => 'Er is fout gegaan bij het betalen van je factuur.'
        ],
        'payment' => [
            'success' => 'Je factuur is betaald.',
            'error' => 'Er is fout gegaan bij het betalen van je factuur.'
        ],
        'destroy' => [
            'success' => 'Je factuur is verwijderd.',
            'error' => 'Er is fout gegaan bij het verwijderen van het factuur.'
        ],
    ],

    'hour-report' => [
        'store' => [
            'success' => 'Je urenrapportage is aangemaakt.',
            'error' => 'Er is fout gegaan bij het aanmaken van je urenrapportage.'
        ],
    ],

    'media' => [
        'store' => [
            'success' => 'Je bestand is geupload',
            'error' => 'Er is fout gegaan bij het uploaden van je bestand.'
        ],
        'update' => [
            'success' => 'Je bestand is gewijzigd',
            'error' => 'Er is fout gegaan bij het wijzigen van je bestand.'
        ],
        'destroy' => [
            'success' => 'Je bestand is verwijderd',
            'error' => 'Er is fout gegaan bij het verwijderen van je bestand.'
        ]
    ],
    'error' => [
        'default' => 'Probeer het later opnieuw.'
    ]
];
