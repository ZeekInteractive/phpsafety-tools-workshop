<?php

use App\Product;

it('has a default price of 0', function() {
    $product = new Product();
    expect($product->price)->toBe(0.0);
});

it('can set a price', function() {
    $product = new Product();
    $product->setPrice(99.99);
    expect($product->price)->toBe(99.99);
});

it('can check if product is in stock', function() {
    $product = new Product();
    $product->stock = 5;
    expect($product->isInStock())->toBeTrue();
});

it('can sell product', function() {
    $product = new Product();
    $product->stock = 5;
    $product->sell();
    expect($product->stock)->toBe(4);
});

it('throws an exception if trying to sell an out of stock product', function() {
    $product = new Product();
    $product->stock = 0;
    expect($product->sell())->toThrow(OutOfStockException::class);
});
