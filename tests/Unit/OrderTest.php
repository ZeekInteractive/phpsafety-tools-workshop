<?php

use App\Order;

it('has default state of pending', function() {
    $order = new Order();
    expect($order->status)->toBe('pending');
});

it('can be marked as shipped', function() {
    $order = new Order();
    $order->markAsShipped();
    expect($order->status)->toBe('shipped');
});

it('can calculate total price', function() {
    $order = new Order();
    $order->addItem('item1', 10);
    $order->addItem('item2', 5);
    expect($order->getTotal())->toBe(15.0);
});

it('can remove item', function() {
    $order = new Order();
    $order->addItem('item1', 10);
    $order->removeItem('item1');
    expect($order->getTotal())->toBe(0.0);
});

it('can check if order is empty', function() {
    $order = new Order();
    expect($order->isEmpty())->toBeTrue();
});
