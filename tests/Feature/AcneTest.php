<?php

test('Go to the Acne page', function () {
    $response = $this->get('/Page/Acne');

    $response->assertStatus(200);
});
