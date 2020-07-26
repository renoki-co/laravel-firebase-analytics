Laravel Firebase Analytics
==========================

![CI](https://github.com/renoki-co/laravel-firebase-analytics/workflows/CI/badge.svg?branch=master)
[![codecov](https://codecov.io/gh/renoki-co/laravel-firebase-analytics/branch/master/graph/badge.svg)](https://codecov.io/gh/renoki-co/laravel-firebase-analytics/branch/master)
[![StyleCI](https://github.styleci.io/repos/282577033/shield?branch=master)](https://github.styleci.io/repos/282577033)
[![Latest Stable Version](https://poser.pugx.org/renoki-co/laravel-firebase-analytics/v/stable)](https://packagist.org/packages/renoki-co/laravel-firebase-analytics)
[![Total Downloads](https://poser.pugx.org/renoki-co/laravel-firebase-analytics/downloads)](https://packagist.org/packages/renoki-co/laravel-firebase-analytics)
[![Monthly Downloads](https://poser.pugx.org/renoki-co/laravel-firebase-analytics/d/monthly)](https://packagist.org/packages/renoki-co/laravel-firebase-analytics)
[![License](https://poser.pugx.org/renoki-co/laravel-firebase-analytics/license)](https://packagist.org/packages/renoki-co/laravel-firebase-analytics)

**Note:** Replace  ```Laravel Firebase Analytics adds blade directives to initialize, log events and set user properties for Firebase Analytics.``` with their correct values in [README.md](README.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE](LICENSE) and [composer.json](composer.json) files, then delete this line.

Laravel Firebase Analytics adds blade directives to initialize, log events and set user properties for Firebase Analytics.

## 🤝 Supporting

Renoki Co. on GitHub aims on bringing a lot of open source, MIT-licensed projects and helpful projects to the world. Developing and maintaining projects everyday is a harsh work and tho, we love it.

If you are using your application in your day-to-day job, on presentation demos, hobby projects or even school projects, spread some kind words about our work or sponsor our work. Kind words will touch our chakras and vibe, while the sponsorships will keep the open source projects alive.

## 🚀 Installation

You can install the package via composer:

```bash
composer require renoki-co/laravel-firebase-analytics
```

## 🙌 Usage

Initialize in your `<body>` tag using the `@initializeFirebaseAnalytics` directive, passing the version of Firebase JS scripts and the Firebase configuration parameters:

```php
<body>
    @initializeFirebaseAnalytics([
        'version' => '7.15.5',
        'config' => [
            'apiKey' => 'some-key',
            'authDomain' => 'firebaseapp',
            ...
        ],
    ])

    ...
</body>
```

Afterwards, you can trigger events as [stated in Firebase Analytics docs](https://firebase.google.com/docs/analytics/events):

```php
<body>
    @initializeFirebaseAnalytics([
        'version' => '7.15.5',
        'config' => [
            'apiKey' => 'some-key',
            'authDomain' => 'firebaseapp',
            ...
        ],
    ])

    @if ($loginSuccessful)
        @firebaseAnalyticsEvent([
            'name' => 'login',
            'parameters' => [
                'method' => 'email',
            ],
        ])
    @endif
</body>
```

Or for logged in users or sessions, you can set default user properties:

```php
<body>
    @initializeFirebaseAnalytics([
        'version' => '7.15.5',
        'config' => [
            'apiKey' => 'some-key',
            'authDomain' => 'firebaseapp',
            ...
        ],
    ])

    @auth
        @firebaseAnalyticsUserProperties([
            'name' => auth()->user()->name,
            'age' => auth()->user()->age,
        ])
    @endauth
</body>
```

More details about the usage can be found here:

- https://firebase.google.com/docs/analytics/get-started
- https://firebase.google.com/docs/analytics/events
- https://firebase.google.com/docs/analytics/user-properties

## 🐛 Testing

``` bash
vendor/bin/phpunit
```

## 🤝 Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## 🔒  Security

If you discover any security related issues, please email alex@renoki.org instead of using the issue tracker.

## 🎉 Credits

- [Alex Renoki](https://github.com/rennokki)
- [All Contributors](../../contributors)

## 📄 License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
