<?php

test('Go to cuir cabellut sensible page', function () {
    $response = $this->get('/Page/Cuirsensible');

    $response->assertStatus(200);
});
