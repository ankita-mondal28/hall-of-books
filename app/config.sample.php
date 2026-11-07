<?php
// Copy this file to config.php and fill in your own values.
// config.php is ignored by git, so your password never goes on GitHub.

return [
    'app_name' => 'Hall of Books',

    // address of the public folder, no trailing slash
    // use '' if the site is served from the root of a domain
    'base_url' => '/hall-of-books/public',

    'db' => [
        'host'    => '127.0.0.1',
        'name'    => 'hallofbooks',
        'user'    => 'root',
        'pass'    => '',
        'charset' => 'utf8mb4',
    ],

    'loan_days'    => 14,   // default loan period
    'fine_per_day' => 2,    // late fine per day, in rupees
];