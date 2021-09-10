<?php

return [
    'invitation' => [
        'subject' => 'Uitnodiging',
        'greeting' => 'Je bent uitgenodigd om als :role lid te worden van :app',
        'about' => 'Je kunt deze uitnodiging accepteren door op de onderstaande knop te klikken:',
        'accept' => 'Uitnodiging accepteren',
        'footer' => 'Als u niet had verwacht een uitnodiging voor deze :app te ontvangen, kunt u deze e-mail verwijderen.'
    ],
    'project' => [
        'created' => [
            'subject' => 'Project gekoppeld',
            'greeting' => 'Er is een project gekoppeld aan jou account genaamd :project_name',
            'about' => 'Je kunt het project bekijken door op de onderstaande knop te klikken:',
            'button' => 'Bekijken',
            'footer' => 'Als u niet had verwacht een notificatie te ontvangen voor deze applicatie, kunt u deze e-mail verwijderen.'
        ]
    ],
    'ticket' => [
        'updated' => [
            'subject' => 'Ticket aanpassing',
            'about' => 'De ticket **:title** is aangepast.',
            'list' => 'De volgende velden zijn aangepast aan de ticket',
            'button_about' => 'Je kunt de ticket bekijken door op de onderstaande knop te klikken:',
            'button' => 'Bekijken',
        ],
        'fields' => [
            'title' => 'De titel veld is aangepast.',
            'description' => 'De omschrijving veld is aangepast.',
            'type' => 'De type veld is aangepast naar :type.',
            'type_empty' => 'De type veld is leeggemaakt.',
            'hours_estimate' => 'De ureninschatting is aangepast naar :value.',
            'hours_estimate_empty' => 'De ureninschatting veld is leeggemaakt.',
            'status' => 'De status is aangepast naar :value.',
            'assignee' => 'Het toegewezen aan veld is aangepast naar :value.',
        ],
        'comment' => [
            'created' => [
                'subject' => 'Comment geplaatst',
                'about' => ':created_by heeft een comment geplaatst bij de ticket: **:ticket_title**',
                'button_about' => 'Je kunt de comment bekijken door op de onderstaande knop te klikken:',
                'button' => 'Bekijken',
            ],
            'updated' => [
                'subject' => 'Comment gewijzigd',
                'about' => ':created_by heeft zijn comment aangepast bij de ticket: **:ticket_title**',
                'about_not_same_user' => ':user_name heeft de comment van :created_by aangepast bij de ticket: **:ticket_title**',
                'button_about' => 'Je kunt de comment bekijken door op de onderstaande knop te klikken:',
                'button' => 'Bekijken',
                'restore' => 'comment is hersteld.',
            ],
            'deleted' => [
                'subject' => 'Comment verwijderd',
                'about' => ':created_by heeft zijn comment verwijderd bij de ticket: **:ticket_title**',
                'about_not_same_user' => ':user_name heeft de comment van :created_by verwijderd bij de ticket: **:ticket_title**',
            ],
        ],
    ],
    'task' => [
        'created' => [
            'subject' => 'Taak aangewezen',
            'about' => ':created_by heeft een taak aangemaakt voor jou op de ticket: **:ticket_title**.',
            'button_about' => 'Je kunt de taak bekijken door op de onderstaande knop te klikken:',
            'button' => 'Bekijken',
        ],
        'updated' => [
            'subject' => 'Taak gewijzigd',
            'about' => ':user_name heeft de onderstaande taak aangepast.',
            'about_finished' => ':user_name heeft de onderstaande taak voltooid.',
            'button_about' => 'Je kunt de taak bekijken door op de onderstaande knop te klikken:',
            'button' => 'Bekijken',
        ],
        'deleted' => [
            'subject' => 'Taak verwijderd',
            'about' => ':user_name heeft de onderstaande taak verwijderd.',
        ]
    ],
    'invoice' => [
        'send' => [
            'subject' => 'Factuur',
            'about' => 'Er er is een factuur voor je aangemaakt, zie bijlage.',
            'button_about' => 'Je kunt de factuur betalen door op de onderstaande knop te klikken:',
            'button' => 'Betalen'
        ],
        'reminder' => [
            'subject' => 'Factuur herinnering',
            'about' => 'je hebt nog een factuur openstaan, dit is je :type herinnering.',
            'button_about' => 'Je kunt de factuur betalen door op de onderstaande knop te klikken:',
            'button' => 'Betalen'
        ],
        'paid' => [
            'subject' => 'Factuur betaald',
            'about' => 'De factuur **#:number** is betaald',

        ],
    ],
    'greeting' => 'Hoi :user,',
    'footer' => 'Als u niet had verwacht een notificatie te ontvangen voor deze applicatie, kunt u deze e-mail verwijderen.'
];
