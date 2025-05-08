<?php

test('Go to the Parasits page ', function () {
    $response = $this->get('/Page/Parasits');

    $response->assertStatus(200);
});
