<?php

test('Go to the Pell Grassa deshidratada page', function () {
    $response = $this->get('/Page/DehyOily');

    $response->assertStatus(200);
});
