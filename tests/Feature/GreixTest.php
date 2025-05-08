<?php

test('Go to the Greix page', function () {
    $response = $this->get('/Page/Greix');

    $response->assertStatus(200);
});
