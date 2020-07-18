<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animals;
use App\Users;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $title = "Admin Dashboard";
        $query = $request->get('query');

        $users = Users::where('name', 'LIKE', "%$query%")
            ->orWhere('email', 'LIKE', "%$query%")
            ->get();

        $animals = Animals::where('name', 'LIKE', "%$query%")
                    ->orWhere('species', 'LIKE', "%$query%")
                    ->orWhere('species_category', 'LIKE', "%$query%")
                    ->orWhere('location_code', 'LIKE', "%$query%")
                    ->get();


        return view('pages.admin', ['title' => $title,
        'users' => $users,
        'animals' => $animals
        ]);

        // return view('results', compact('users', 'animal');
    }

}
