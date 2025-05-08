<?php

test('Go to the Volume page', function () {
    $response = $this->get('/Page/Volum');

    $response->assertStatus(200);
});
