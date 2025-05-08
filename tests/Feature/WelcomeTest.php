<?php

test('Go to the Welcome page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});