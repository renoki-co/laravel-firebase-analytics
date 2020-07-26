<?php

namespace RenokiCo\firebaseAnalytics;

class BladeDirectives
{
    public static function initializeFirebaseAnalytics($expression)
    {
        eval("\$eval = $expression;");

        [
            'version' => $version,
            'config' => $config,
        ] = $eval;

        $config = json_encode($config);

        return "
            <script src=\"https://www.gstatic.com/firebasejs/{$version}/firebase-app.js\"></script>
            <script src=\"https://www.gstatic.com/firebasejs/{$version}/firebase-analytics.js\"></script>

            <script>
                let firebaseConfig = {$config};

                firebase.initializeApp(firebaseConfig);
                firebase.analytics();
            </script>
        ";
    }

    public static function firebaseAnalyticsEvent($expression)
    {
        eval("\$eval = $expression;");

        [
            'name' => $name,
            'parameters' => $parameters,
        ] = $eval;

        $parameters = json_encode($parameters);

        return "
            <script>
                window.firebase.analytics().logEvent('{$name}', {$parameters});
            </script>
        ";
    }

    public static function firebaseAnalyticsUserProperties($expression)
    {
        eval("\$eval = $expression;");

        $config = json_encode($eval);

        return "
            <script>
                firebase.analytics().setUserProperties({$config});
            </script>
        ";
    }
}
