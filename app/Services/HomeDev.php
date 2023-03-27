<?php

namespace App\Services\Ecommerce;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class HomeDev
{
    public static function byUnit($search) {
        $sql = "SELECT distinct(a.sku) as sku, b.name, d.name as uom_name, b.description, b.item_category_id, c.name as category_name,
        (select x.price from master_item_price x
        where x.period_end >= current_date() and x.group_price_id = a.group_price_id and
        x.sku = a.sku order by updated_at desc limit 1
        ) as unit_price
        FROM master_item_price a
        LEFT JOIN master_item b ON b.sku = a.sku
        LEFT JOIN master_item_category c ON c.id = b.item_category_id
        LEFT JOIN master_uom d ON d.id = b.uom_id
        WHERE  a.period_end > current_date() and a.group_price_id = 68 and b.name like '%$search%'";

        return DB::select($sql);
    }

}
