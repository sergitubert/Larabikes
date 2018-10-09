<?php
/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 09/10/2018
 * Time: 10:51
 */

namespace App\Http\ViewComposers;


use App\Bike;
use Illuminate\View\View;

class BikeComposer
{
    public function compose(View $view) {
        $view->with('total', Bike::count());
    }
}