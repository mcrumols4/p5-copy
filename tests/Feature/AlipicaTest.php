<?php

test('Go to the Alipica page', function () {
    $response = $this->get('/Page/Alipicaskin');

    $response->assertStatus(200);
});
