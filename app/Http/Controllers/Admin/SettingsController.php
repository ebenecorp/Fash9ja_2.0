<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Traits\UploadAble;

class SettingsController extends BaseController
{
    use Uploadable;
    //
    /**
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */

    public function index(){

        $this->setPageTitle('Settings', 'Manage Setings');
        return view('admin.settings.index');
    }

    /**
     * @param Request $request
     */

    public function update(Request $request){

    } 


}
