<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $json = '{
            "data": [
                {
                    "name": "Война и мир",
                    "description": "роман-эпопея Льва Николаевича Толстого, описывающий русское общество в эпоху войн против Наполеона в 1805—1812 годах.",
                    "createdAt": "2022-06-30"
                },
                {
                    "name": "Ревизор",
                    "description": "комедия в пяти действиях, написанная Н. В. Гоголем в 1835 г.",
                    "createdAt": "2022-05-11"
                },
                {
                    "name": "Горе от ума",
                    "description": "комедия в стихах Александра Сергеевича Грибоедова. Она сочетает в себе элементы классицизма и новых для начала XIX века романтизма и реализма.",
                    "createdAt": "2022-07-18"
                }
            ]
        }';

        $new_json = [];

        foreach (json_decode($json) as $data) {

            foreach($data as $item) {

                $new_json[] = [
                    'title' => $item->name,
                    'desc' => $item->description,
                ];

            }

        }

        $new_json[0]['author'] = 'Лев Толстой';
        $new_json[1]['author'] = 'Николай Гоголь';
        $new_json[2]['author'] = 'Александр Грибоедов';

        dd(json_encode($new_json));
    }
}
