<?php
namespace App\Controllers;
use App\Models\ViewRoleRuleModel;
use App\Models\AppModel;

use App\Controllers\BaseController;

class Rules extends BaseController{
    public function app($id){
        $ruleModel = new ViewRoleRuleModel();
        $appModel = new AppModel();

        $session = session();
        $dataRule['userName'] = $session->get('user_name');

        $dataRule['role'] = $ruleModel->getRuleByRole($session->get('role'));

        $dataRule['appName'] = $appModel->getById($id);
        $data['breadCrumb'] = [
            'menu' => $dataRule['role'][0]['menu'],
            'subMenu' => $dataRule['appName']['sub_menu'],
        ];        

        $data['idRole'] = $session->get('role');        
        
        return view('Dashboard/rules_view', $data);
    }
}