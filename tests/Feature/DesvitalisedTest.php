<?php

test('Go to the Desvitalised page', function () {
    $response = $this->get('/Page/DesvitalisedSkin');

    $response->assertStatus(200);
});
