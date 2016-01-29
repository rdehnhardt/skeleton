<?php

return [
    'visits_table' => 'analytics_visits',
    'model' => \Baconfy\Analytics\Models\Visit::class,
    'default_routes' => true,
    'controller_middleware' => [
        #'auth' => ['only' => ['visitsByPeriod']],
    ],
];