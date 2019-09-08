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
          'pattern' => '(de|en)/articles',
          'action'  => function ($lang) {
            $data = [
              'slug' => 'articles',
              'template' => 'articles',
              'translations' => [
                  'en' => [
                      'code' => 'en'
                  ],
                  'de' => [
                      'code' => 'de'
                  ]
              ],
            ];

            $page = Page::factory($data);

            site()->visit($page, $lang);

            return $page;
          }
        ]
    ],
    'kerli81.securedpages.logintype' => 'custom',
    'kerli81.securedpages.custom.page' => 'login'
];