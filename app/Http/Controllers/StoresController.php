<?php
// php artisan make:controller PostsController --resource
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Store;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $stores = Store::orderBy('title', 'desc')->get(); // ORDER BY DESC

        // $stores = Store::where('title', 'Ace of Facez')->get(); // WHERE

        // $stores = Store::orderBy('title', 'desc')->take(1)->get(); // LIMIT 1

        //$stores = Store::orderBy('store_name', 'asc')->paginate(1); // PAGINATION

        //return view('stores.smallstore')->with('stores', $stores);

        //return view('pages.index')->with('posts', $posts);

        // without using DB, paginate all store posts
        //$stores = Store::all();
        //return view('stores.smallstore')->with('stores', $stores);

        // using DB to paginate all store posts
        $stores = DB::table('stores')->paginate(1);
        return view('stores.smallstore', ['stores' => $stores]);


        //return view('pages.index', ['stores' => $stores]);
        //return Store::make('stores')->with('stores', $stores);
    }

    
    public function index2()
    {
        return view('pages.index', [
            'stores' => Store::withCount('stores')->get()
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return Store::find($id);
        $store = Store::find($id);
        return view('stores.show')->with('store', $store);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
