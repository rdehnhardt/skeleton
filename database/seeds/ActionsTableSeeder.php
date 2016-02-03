<?php

use App\Core\Models\Action;
use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    protected $resource = [
        'index' => ['method' => 'get', 'function' => 'index', 'concat' => null],
        'create' => ['method' => 'get', 'function' => 'create', 'concat' => null],
        'store' => ['method' => 'post', 'function' => 'store', 'concat' => null],
        'show' => ['method' => 'get', 'function' => 'show', 'concat' => '/{id}'],
        'edit' => ['method' => 'get', 'function' => 'edit', 'concat' => '/{id}'],
        'update' => ['method' => 'put', 'function' => 'update', 'concat' => '/{id}'],
        'delete' => ['method' => 'delete', 'function' => 'destroy', 'concat' => '/{id}'],
    ];

    public function run()
    {
        DB::table('actions')->delete();

        Action::create([
            'uri' => '/',
            'type' => 'get',
            'name' => 'dashboard',
            'label' => 'Dashboard',
            'controller' => 'Dashboard\DefaultController@index',
        ]);

        foreach ($this->resource as $name => $item) {
            Action::create([
                'uri' => "users{$item['concat']}",
                'type' => $item['method'],
                'name' => "users.$name",
                'label' => ucfirst($name),
                'controller' => "System\\UsersController@{$item['function']}",
            ]);

            Action::create([
                'uri' => "actions{$item['concat']}",
                'type' => $item['method'],
                'name' => "actions.$name",
                'label' => ucfirst($name),
                'controller' => "System\\ActionsController@{$item['function']}",
            ]);
        }
    }
}