<?php

test('Go to the MixedSkin page', function () {
    $response = $this->get('/Page/MixedSkin');

    $response->assertStatus(200);
});