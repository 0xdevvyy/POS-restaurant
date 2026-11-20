<?php

test('fortify authentication routes are disabled', function () {
    $this->get('/login')->assertNotFound();
    $this->post('/login')->assertNotFound();
    $this->post('/logout')->assertNotFound();
});
