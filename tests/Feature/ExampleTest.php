<?php


test('returns a list of product', function () {
    $response = $this->get('http://furni-api.test/api/products');

    $response->assertStatus(200)
        ->assertJsonStructure([
            'datas' => [
                '*' => [
                    "id",
                    "seller_name",
                    "type",
                    "name",
                    "description",
                    "price",
                    "img_link",
                ]
            ]
        ]);
});

test('returns a list of type', function () {
    $response = $this->get('http://furni-api.test/api/products');

    $response->assertStatus(200)
        ->assertJsonStructure([
            'datas' => [
                '*' => [
                    "id",
                    "name",
                    "img_link",
                ]
            ]
        ]);
});
