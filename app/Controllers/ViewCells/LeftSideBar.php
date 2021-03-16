<?php
namespace App\Controllers\ViewCells;

use App\Controllers\BaseController;
use App\Models\ViewRoleRuleModel;

class LeftSideBar extends BaseController{
    public function menus($id){
        $appModel = new ViewRoleRuleModel();

        $data['apps'] = $appModel->getRuleByRole($id);

        // var_dump($data);
        return view('viewcells/leftsidebar/index', $data);
    }
}