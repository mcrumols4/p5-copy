<?php

test('Go to oily skin page', function () {
    $response = $this->get('/Page/Oilyskin');

    $response->assertStatus(200);
});
