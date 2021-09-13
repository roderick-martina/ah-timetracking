<?php


test('it can render the login page', function() {
    $this
        ->get('/')
        ->assertSeeText('Welkom terug');
});