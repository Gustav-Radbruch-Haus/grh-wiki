<?php


return [
    'debug'  => true,
    'cache'  => false,
    'languages' => true,
    'languages.detect' => true,
    'routes' => [
        [
            'pattern' => '(:any)/home/(:any)',
            'action'  => function () {
                return go('home');
            }
        ],
        [
          'pattern' => '(:any)/logout',
          'action'  => function() {
            if ($user = kirby()->user()) {
              $user->logout();
            }
            return go('login');
          }
        ],
        [
          'pattern' => '(:any)/articles',
          'action'  => function () {
            return new Page([
              'slug' => 'articles',
              'template' => 'articles'
            ]);
          }
        ]
    ],
    'kerli81.securedpages.logintype' => 'custom',
    'kerli81.securedpages.custom.page' => 'login'
];