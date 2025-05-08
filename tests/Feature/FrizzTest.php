<?php

test('Go to the Frizz page', function () {
    $response = $this->get('/Page/Frizz');

    $response->assertStatus(200);
});
