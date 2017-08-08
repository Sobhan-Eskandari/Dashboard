<?php

return [
    'role_structure' => [
        'SuperAdministrator' => [
            'users' => 'c,r,u,d',
            'posts' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'Administrator' => [
            'users' => 'c,r,u,d',
            'posts' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'Editor' => [
            'users' => 'r,u',
            'posts' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'Author' => [
            'users' => 'r',
            'posts' => 'c,r',
            'profile' => 'r,u'
        ],
        'Contributor' => [
            'posts' => 'r',
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
