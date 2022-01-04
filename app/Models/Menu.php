<?php

namespace App\Models;

use JeroenNoten\Laravel\AdminLte\Menu\Filters\FilterInterface;
use Laratrust;

class Menu implements FilterInterface{
    public function transform($item)
    {
        if (isset($item['role']) && !Laratrust::hasRole($item['role'])) {
            return $item;
        }
    }
}
