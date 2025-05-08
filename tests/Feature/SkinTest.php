<?php

test('Go to the Skin page', function () {
    $response = $this->get('/Advice/skin');

    $response->assertStatus(200);
});
