<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class DashboardController extends Controller
{

    public function __construct()
    {
        if (session()->get('role') != "1") {
            echo 'Access denied';
            exit;
        }
    }
    
    protected  $roleName='';
    public function index()
    {
        $session = session();
        $data ['name']=$session->get('name');
        $rol= $session->get('role');
        $roleName='';
      
      
            if($rol==1){
                $roleName='Super Admin';
            }
            elseif($rol==2){
                $roleName='Branch Admin';
            }
            elseif($rol==3){    
                $roleName='Sales';
            }
        
        
        $data ['role']=$roleName;
        $model = new UserModel();
        $users = $model->where('authority!=', '1')->findAll();  

        $data['users'] = $users;  
        echo view('dashboard/home',$data);
        
    }

    public function createUser()
    {
        $name=$this->request->getVar('name');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $roleId = $this->request->getVar('role');

      

        $model = new UserModel();
        $data = [
            'name'     => $name,
            'email'    => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'authority' => $roleId,
            'isActive'=>1
        ];

        $model->save($data);
       
        return redirect()->to(site_url('/dashboard'));
       
    }


    public function edit($id)
    {
       
        $valid_id = base64_decode($id);
        $model = new UserModel();
        $UpdatUser = $model->find($valid_id);  

        $session = session();
        $data ['name']=$session->get('name');
        $rol= $session->get('role');
        $roleName='';
       
      
            if($rol==1){
                $roleName='Super Admin';
            }
            elseif($rol==2){
                $roleName='Branch Admin';
            }
            elseif($rol==3){
                $roleName='Sales';
            }
            
        $data ['role']=$roleName;
        $data['users'] = $UpdatUser;
       

        echo view('dashboard/update',$data);
       
       
        
        
    }

    public function update($id)
    {
        $valid_id = base64_decode($id);
        $name=$this->request->getVar('name');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $roleId = $this->request->getVar('role');
        $model = new UserModel();
       
        $data = [
            'name'     => $name,
            'email'    => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'authority' => $roleId
        ];

        

        $model->update($valid_id, $data);
        return redirect()->to(site_url('/dashboard'));
    }

    public function toggleActivate($id)
    {
        
        $valid_id = base64_decode($id);
       
        $model = new UserModel();
        $user = $model->find($valid_id); 
        $toggleValue=($user['isActive']==1)?0:1;
       
        $data = [
            'isActive' => $toggleValue
        ];
      
       
        $model->update($valid_id, $data);
        return redirect()->to(site_url('/dashboard'));
    }

   

  

}