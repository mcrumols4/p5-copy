<?php

test('Go to the Repair page', function () {
    $response = $this->get('/Page/Repair');

    $response->assertStatus(200);
});
