<?php

test('Go to the HairLost page', function () {
    $response = $this->get('/Page/CaigudaCabell');

    $response->assertStatus(200);
});
