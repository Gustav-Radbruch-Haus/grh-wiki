<?php


return [
    'debug'  => true,
    'cache'  => false,
    'routes' => [
        [
            'pattern' => 'home/(:any)',
            'action'  => function () {
                return go('home');
            }
        ],
        [
          'pattern' => 'logout',
          'action'  => function() {
            if ($user = kirby()->user()) {
              $user->logout();
            }
            return go('login');
          }
        ],
        [
          'pattern' => 'articles',
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