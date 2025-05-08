<?php

test('Go to the Pell Alípica deshidratada page', function () {
    $response = $this->get('/Page/DehyAlipica');

    $response->assertStatus(200);
});
