<?php

test('Go to the SensitiveSkin Page', function () {
    $response = $this->get('/Page/Sensitiveskin');

    $response->assertStatus(200);
});
