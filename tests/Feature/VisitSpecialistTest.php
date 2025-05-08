<?php

test('Go to the VisitSpecialist page', function () {
    $response = $this->get('/Page/Visitspecialist');

    $response->assertStatus(200);
});
    