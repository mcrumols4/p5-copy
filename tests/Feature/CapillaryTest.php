<?php

test('Go to the Capillary page', function () {
    $response = $this->get('/Advice/capillary');

    $response->assertStatus(200);
});