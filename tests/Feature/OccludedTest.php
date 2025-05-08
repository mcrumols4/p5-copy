<?php

test('Go to the Occluded page', function () {
    $response = $this->get('/Page/OccludedOilySkin');

    $response->assertStatus(200);
});
