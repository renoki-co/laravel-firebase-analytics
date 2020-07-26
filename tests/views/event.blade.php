@initializeFirebaseAnalytics([
    'version' => '7.15.5',
    'config' => [
        'apiKey' => 'some-key',
        'authDomain' => 'firebaseapp',
    ],
])

@firebaseAnalyticsEvent([
    'name' => 'some_key',
    'parameters' => [
        'some_param' => 'some_val',
    ],
])
