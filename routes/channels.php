<?php

use App\Models\Order;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('deliveries.{order_id}', function ($user, $order_id) {
    $order = Order::findOrFail($order_id);

    return (int) $order->user_id === (int) $user->id;
});
