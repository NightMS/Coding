<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        //Method 1
        /*dd($listing = new Listing,
            $listing->beds = 1,
            $listing->baths = 1,
            $listing->area = 50,
            $listing->city = 'London',
            $listing->street = 'Tinker St',
            $listing->street_nr = 10,
            $listing->code = 'TK',
            $listing->price = 100_000,
            $listing->save()
        );*/
        //Method 2
        /*dd($listing = Listing::create([
            'beds' => 2, 'baths' => 2, 'area' => 100, 'city' => 'North', 'street' => 'Tinker st', 'street_nr' => 20, 'code' => 'TS', 'price' => 200_000
        ]));*/
        return inertia(
            'Index/Index',
            [
                'message' => 'Hello from Laravel!'
            ]
        );
    }
    public function show()
    {
        return inertia('Index/Show');
    }
}
