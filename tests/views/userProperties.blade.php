@initializeFirebaseAnalytics([
    'version' => '7.15.5',
    'config' => [
        'apiKey' => 'some-key',
        'authDomain' => 'firebaseapp',
    ],
])

@firebaseAnalyticsUserProperties([
    'name' => 'some_key',
    'age' => 18,
])
