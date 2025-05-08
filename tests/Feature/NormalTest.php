<?php

test('Go to the NormalSkin page', function () {
    $response = $this->get('/Page/PellNormal');

    $response->assertStatus(200);
});
