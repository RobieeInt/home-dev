<?php

namespace Database\Seeders;

use App\Models\HomeProperty;
use App\Models\DetailProperty;
use App\Models\NearbyProperty;
use App\Models\GalleryProperty;
use Illuminate\Database\Seeder;
use App\Models\AmenitiesProperty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $homes = [
            [
                'user_id' => 1,
                'name' => 'Rumah Sultan',
                'slug' => 'rumah-sultan',
                'unit_id' => 1,
                'address' => 'Jl. Raya Cikupa',
                'city_id' => 1,
                'province_id' => 1,
                'zip' => '15143',
                'country' => 'Indonesia',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquam nisl, eget aliqu'
            ],
            [
                'user_id' => 1,
                'name' => 'Rumah Angker',
                'slug' => 'rumah-angker',
                'unit_id' => 2,
                'address' => 'Jl. Raya idu fitri',
                'city_id' => 2,
                'province_id' => 1,
                'zip' => '15143',
                'country' => 'Indonesia',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquam nisl, eget aliqu'
            ],
            [
                'user_id' => 1,
                'name' => 'Rumah Yujang',
                'slug' => 'rumah-yujang',
                'unit_id' => 3,
                'address' => 'Jl. dipinggir',
                'city_id' => 3,
                'province_id' => 2,
                'zip' => '15143',
                'country' => 'Indonesia',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquam nisl, eget aliqu'
            ],
            [
                'user_id' => 1,
                'name' => 'Rumah Kami Semua',
                'slug' => 'rumah-kami-semua',
                'unit_id' => 4,
                'address' => 'Jl. doang ga jadian',
                'city_id' => 4,
                'province_id' => 2,
                'zip' => '15143',
                'country' => 'Indonesia',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquam nisl, eget aliqu'
            ],
            [
                'user_id' => 1,
                'name' => 'Rumah Duka',
                'slug' => 'rumah-duka',
                'unit_id' => 5,
                'address' => 'Jl. Raya Jauh banget',
                'city_id' => 5,
                'province_id' => 2,
                'zip' => '15143',
                'country' => 'Indonesia',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliqu'
            ],
        ];

        $homeDetails = [
            [
                'home_property_id' => 1,
                'type' => 'nearby',
                'bedroom' => '2',
                'bathroom' => '9',
                'garage' => 1,
                'area' => null,
                'price' => 270000,
                'status' => 'sold',
                'video' => null,
                'map' => null,
                'latitude' => '-6.213390599999999',
                'longitude' => '106.6136097',
                'year' => 2015,
                'roof' => null,
                'floor' => 2,
                'heating' => null,
                'image_plan' => null,
                'land_area' => 90,
                'building_area' => 50
            ],
            [
                'home_property_id' => 2,
                'type' => 'nearby',
                'bedroom' => '4',
                'bathroom' => '5',
                'garage' => 1,
                'area' => null,
                'price' => 970000,
                'status' => 'sold',
                'video' => null,
                'map' => null,
                'latitude' => '-6.1788',
                'longitude' => '106.6301895',
                'year' => 2005,
                'roof' => null,
                'floor' => 2,
                'heating' => null,
                'image_plan' => null,
                'land_area' => 270,
                'building_area' => 170
            ],
            [
                'home_property_id' => 3,
                'type' => 'nearby',
                'bedroom' => '1',
                'bathroom' => '1',
                'garage' => 1,
                'area' => null,
                'price' => 270000,
                'status' => 'sold',
                'video' => null,
                'map' => null,
                'latitude' => '-6.1698267',
                'longitude' => '106.6391601',
                'year' => 2015,
                'roof' => null,
                'floor' => 2,
                'heating' => null,
                'image_plan' => null,
                'land_area' => 50,
                'building_area' => 40
            ],
            [
                'home_property_id' => 4,
                'type' => 'nearby',
                'bedroom' => '4',
                'bathroom' => '1',
                'garage' => 1,
                'area' => null,
                'price' => 270000,
                'status' => 'sold',
                'video' => null,
                'map' => null,
                'latitude' => '-6.211627799999999',
                'longitude' => '106.6825629',
                'year' => 2015,
                'roof' => null,
                'floor' => 2,
                'heating' => null,
                'image_plan' => null,
                'land_area' => 170,
                'building_area' => 70
            ],
            [
                'home_property_id' => 5,
                'type' => 'nearby',
                'bedroom' => 'Mall',
                'bathroom' => '1.5 km',
                'garage' => 1,
                'area' => null,
                'price' => 270000,
                'status' => 'sold',
                'video' => null,
                'map' => null,
                'latitude' => '-6.2268116',
                'longitude' => '106.6070233',
                'year' => 2015,
                'roof' => null,
                'floor' => 2,
                'heating' => null,
                'image_plan' => null,
                'land_area' => 70,
                'building_area' => 70
            ],
        ];

        $homeImages = [
            [
                'home_property_id' => 1,
                'image' => 'home-1.jpg',
                'caption' => 'Photo ya',
                'is_default' => 1,
            ],
            [
                'home_property_id' => 2,
                'image' => 'home-2.jpg',
                'caption' => 'Photo ya',
                'is_default' => 1,
            ],
            [
                'home_property_id' => 3,
                'image' => 'home-3.jpg',
                'is_default' => 1,
            ],
            [
                'home_property_id' => 4,
                'image' => 'home-4.jpg',
                'is_default' => 1,
            ],
            [
                'home_property_id' => 5,
                'image' => 'home-5.jpg',
                'is_default' => 1,
            ],
        ];

        $homeAmenities = [
            [
                'home_property_id' => 1,
                'type' => 'interior',
                'name' => 'kitchen Set'
            ],
            [
                'home_property_id' => 1,
                'type' => 'exterior',
                'name' => 'Basket Court'
            ],
            [
                'home_property_id' => 1,
                'type' => 'interior',
                'name' => 'kitchen Set'
            ],
            [
                'home_property_id' => 2,
                'type' => 'exterior',
                'name' => 'Basket Court'
            ],
            [
                'home_property_id' => 2,
                'type' => 'interior',
                'name' => 'kitchen Set'
            ],
            [
                'home_property_id' => 3,
                'type' => 'exterior',
                'name' => 'Basket Court'
            ],
            [
                'home_property_id' => 3,
                'type' => 'interior',
                'name' => 'kitchen Set'
            ],
            [
                'home_property_id' => 4,
                'type' => 'exterior',
                'name' => 'Basket Court'
            ],
            [
                'home_property_id' => 4,
                'type' => 'interior',
                'name' => 'kitchen Set'
            ],
            [
                'home_property_id' => 5,
                'type' => 'exterior',
                'name' => 'Basket Court'
            ],
            [
                'home_property_id' => 5,
                'type' => 'interior',
                'name' => 'kitchen Set'
            ],
        ];

        $homeNearby = [
            [
                'home_property_id' => 1,
                'type' => 'education',
                'name' => 'SMP Negeri 1',
                'distance' => '1.5 km',
                'rating' => 4
            ],
            [
                'home_property_id' => 1,
                'type' => 'education',
                'name' => 'SMP Negeri 2',
                'distance' => '1.5 km',
                'rating' => 5
            ],
            [
                'home_property_id' => 1,
                'type' => 'education',
                'name' => 'SMP Negeri 3',
                'distance' => '1.5 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 2,
                'type' => 'education',
                'name' => 'SMP Negeri 1',
                'distance' => '1.5 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 2,
                'type' => 'education',
                'name' => 'SMP Negeri 2',
                'distance' => '1.5 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 2,
                'type' => 'education',
                'name' => 'SMP Negeri 3',
                'distance' => '1.5 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 3,
                'type' => 'education',
                'name' => 'SMP Negeri 1',
                'distance' => '1.5 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 3,
                'type' => 'education',
                'name' => 'SMP Negeri 2',
                'distance' => '1.5 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 3,
                'type' => 'education',
                'name' => 'SMP Negeri 3',
                'distance' => '1.5 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 4,
                'type' => 'education',
                'name' => 'SMP Negeri 1',
                'distance' => '1.5 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 4,
                'type' => 'education',
                'name' => 'SMP Negeri 2',
                'distance' => '1.5 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 1,
                'type' => 'health & medical',
                'name' => 'Warga Hospital',
                'distance' => '1 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 2,
                'type' => 'health & medical',
                'name' => 'Warga Hospital',
                'distance' => '1 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 3,
                'type' => 'health & medical',
                'name' => 'Warga Hospital',
                'distance' => '1 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 4,
                'type' => 'health & medical',
                'name' => 'Warga Hospital',
                'distance' => '1 km',
                'rating' => 3
            ],
            [
                'home_property_id' => 5,
                'type' => 'health & medical',
                'name' => 'Warga Hospital',
                'distance' => '1 km'
            ],
        ];

        foreach ($homes as $key => $value) {
            HomeProperty::create($value);
        }

        foreach ($homeDetails as $key => $value) {
            DetailProperty::create($value);
        }

        foreach ($homeImages as $key => $value) {
            GalleryProperty::create($value);
        }

        foreach ($homeNearby as $key => $value) {
            NearbyProperty::create($value);
        }

        foreach ($homeAmenities as $key => $value) {
            AmenitiesProperty::create($value);
        }

        // //foeach homes
        // foreach ($homes as $home) {
        //     $homeProperty = HomeProperty::create($home);
        //     $homeProperty->save();

        //     //foreach homedetails
        //     foreach ($homeDetails as $homeDetail) {
        //         if ($homeDetail['home_property_id'] == $homeProperty->id) {
        //             $homeDetail['home_property_id'] = $homeProperty->id;
        //             $homeDetail = DetailProperty::create($homeDetail);
        //             $homeDetail->save();
        //         }
        //     }

        //     //foreach home images
        //     foreach ($homeImages as $homeImage) {
        //         if ($homeImage['home_property_id'] == $homeProperty->id) {
        //             $homeImage['home_property_id'] = $homeProperty->id;
        //             $homeImage = GalleryProperty::create($homeImage);
        //             $homeImage->save();
        //         }
        //     }

        //     //foreach home amenities
        //     foreach ($homeAmenities as $homeAmenity) {
        //         if ($homeAmenity['home_property_id'] == $homeProperty->id) {
        //             $homeAmenity['home_property_id'] = $homeProperty->id;
        //             $homeAmenity = AmenitiesProperty::create($homeAmenity);
        //             $homeAmenity->save();
        //         }
        //     }

        //     //foreach home nearby
        //     foreach ($homeNearby as $homeNearby) {
        //         if ($homeNearby['home_property_id'] == $homeProperty->id) {
        //             $homeNearby['home_property_id'] = $homeProperty->id;
        //             $homeNearby = NearbyProperty::create($homeNearby);
        //             $homeNearby->save();
        //         }
        //     }


        // }

    }

}
