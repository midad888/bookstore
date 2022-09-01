<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  

class LoginController extends Controller
{
    public function index()
    {
        $this-> logout();
       
        helper(['form']);
        echo view('loginView');
    } 
  
    public function signin()
    {
     
        

        $session = session();
        $model = new UserModel();
        // check any user otherwise superAdmin create
            $usersAdmin = $model->findAll();
            if(!$usersAdmin){
                $data = [
                    'name'     => 'Miqdad.M',
                    'email'    => 'admin@gmail.com',
                    'password' => password_hash('admin123', PASSWORD_DEFAULT),
                    'authority' =>'1'
                ];
                $model->save($data);
            }
        
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $model->where('email', $email)->first();
       
       if($data){
            $pass = $data['password'];
            $pwd_verify = password_verify($password, $pass);
         
            if($pwd_verify){
               $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'role'=> $data['authority'],
                    'isSignedIn' => TRUE
                ];
                
                $session->set($ses_data);
                

                if($session->get('role')==1)
                {
                    return redirect()->to('/dashboard');
                }
                elseif($session->get('role')==2)
                {
                    return redirect()->to('/book');
                }
                else{
                    return redirect()->to('/invoice');
                }
            }else{
                $session->setFlashdata('msg', 'wrong password.');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'wrong email.');
            return redirect()->to('/login');
        }
    }



    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
  


}