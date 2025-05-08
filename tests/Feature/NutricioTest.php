<?php

test('Go to nutrition page', function () {
    $response = $this->get('/Page/Nutricio');

    $response->assertStatus(200);
});
