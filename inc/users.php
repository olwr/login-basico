<?php
// users array

return [
        [
                'user' => 'admin',
                'password' => password_hash('admin', PASSWORD_DEFAULT),
        ],
        [
                'user' => 'dev',
                'password' => password_hash('dev@367', PASSWORD_DEFAULT),
        ],
        [
                'user' => 'junior',
                'password' => password_hash('junior123', PASSWORD_DEFAULT),
        ],
];

