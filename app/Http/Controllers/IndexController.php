<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titlePage = 'Home';

        $datas = [
            [
                'title' => '0',
                'subTitle' => 'Welcome in home',
                'autors' => 'luca rubino',
                'ruole' => 'web developer',
                'url' => 'resources/img/boolean.ico',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam veniam dicta consequatur? Soluta molestias quod, cum corrupti, itaque adipisci quam veniam, blanditiis nisi doloribus labore vero! Voluptates repellat inventore mollitia?',
            ],
            [
                'title' => '1',
                'subTitle' => 'Welcime iv fhome',
                'autors' => 'Rupa lubivo',
                'ruole' => 'web developer',
                'url' => 'resources/img/boolean.ico',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam veniam dicta consequatur? Soluta molestias quod, cum corrupti, itaque adipisci quam veniam, blanditiis nisi doloribus labore vero! Voluptates repellat inventore mollitia? Nobis distinctio excepturi non id assumenda aliquid delectus laboriosam doloribus recusandae molestias, praesentium dolorem quas quia omnis quae, eum facilis amet! Facilis doloribus numquam sunt et at quidem voluptatibus debitis!',
            ],
            [
                'title' => '2',
                'subTitle' => 'Walcina in Ghome',
                'autors' => 'luma ruvino',
                'ruole' => 'web developer',
                'url' => 'resources/img/boolean.ico',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam veniam dicta consequatur? Soluta molestias quod, cum corrupti, itaque adipisci quam veniam, blanditiis nisi doloribus labore vero! Voluptates repellat inventore mollitia? Nobis distinctio excepturi non id assumenda aliquid delectus laboriosam doloribus recusandae molestias, praesentium dolorem quas quia omnis quae, eum facilis amet! Facilis doloribus numquam sunt et at quidem voluptatibus debitis! Debitis vel exercitationem atque voluptatum magnam repellendus laboriosam vitae adipisci sed odio a voluptatem nemo aspernatur dolore totam, molestias tenetur dolorem quae hic obcaecati repudiandae ut sit consequuntur? Ut, laudantium!',
            ],
        ];
        
        return view('index', compact('titlePage', 'datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
