<?php

namespace RenokiCo\FirebaseAnalytics\Test;

use Illuminate\Support\Str;

class DirectivesTest extends TestCase
{
    public function test_initialisation()
    {
        $render = view('initialize')->render();

        $this->assertTrue(
            Str::contains($render, 'let firebaseConfig = {"apiKey":"some-key","authDomain":"firebaseapp"}')
        );

        $this->assertTrue(
            Str::contains($render, 'firebase.initializeApp(firebaseConfig)')
        );

        $this->assertTrue(
            Str::contains($render, 'firebase.analytics()')
        );

        $this->assertTrue(
            Str::contains($render, 'https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js')
        );

        $this->assertTrue(
            Str::contains($render, 'https://www.gstatic.com/firebasejs/7.15.5/firebase-analytics.js')
        );
    }

    public function test_event()
    {
        $render = view('event')->render();

        $this->assertTrue(
            Str::contains($render, 'let firebaseConfig = {"apiKey":"some-key","authDomain":"firebaseapp"}')
        );

        $this->assertTrue(
            Str::contains($render, 'firebase.initializeApp(firebaseConfig)')
        );

        $this->assertTrue(
            Str::contains($render, 'firebase.analytics()')
        );

        $this->assertTrue(
            Str::contains($render, 'https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js')
        );

        $this->assertTrue(
            Str::contains($render, 'https://www.gstatic.com/firebasejs/7.15.5/firebase-analytics.js')
        );

        $this->assertTrue(
            Str::contains($render, 'window.firebase.analytics().logEvent(\'some_key\', {"some_param":"some_val"})')
        );
    }

    public function test_user_properties()
    {
        $render = view('userProperties')->render();

        $this->assertTrue(
            Str::contains($render, 'let firebaseConfig = {"apiKey":"some-key","authDomain":"firebaseapp"}')
        );

        $this->assertTrue(
            Str::contains($render, 'firebase.initializeApp(firebaseConfig)')
        );

        $this->assertTrue(
            Str::contains($render, 'firebase.analytics()')
        );

        $this->assertTrue(
            Str::contains($render, 'https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js')
        );

        $this->assertTrue(
            Str::contains($render, 'https://www.gstatic.com/firebasejs/7.15.5/firebase-analytics.js')
        );

        $this->assertTrue(
            Str::contains($render, 'firebase.analytics().setUserProperties({"name":"some_key","age":18})')
        );
    }
}
