<?php

namespace App\Repositories;

use App\Models\SliderItem;
use App\Repositories\Contracts\SliderItemRepositoryInterface;

class SliderItemRepository implements SliderItemRepositoryInterface
{
    public function getAllSliderItems()
    {
        return SliderItem::latest()->get();
    }
}
