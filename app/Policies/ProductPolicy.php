<?php

namespace App\Policies;

use App\Models\Product;

class ProductPolicy extends ModelPolicy
{
    public function view($user, Product $product)
    {
        return $user->hasAbility('products.view');
    }
}
