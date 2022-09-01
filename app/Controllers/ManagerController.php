<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\BookModel;
  
class ManagerController extends Controller
{
    public function __construct()
    {
        if (session()->get('role') != "2") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        $session = session();
        $data ['name']=$session->get('name');
        $roleName='Branch Admin';
        $data ['role']=$roleName;
      

        $model = new BookModel();
        $books = $model->findAll();  
        $data['books'] = $books;  
        
         echo view('books/list',$data);
        
    }

    public function createBook()
    {
        $isbn=$this->request->getVar('isbn');
        $name=$this->request->getVar('name');
        $author = $this->request->getVar('author');
        $category = $this->request->getVar('category');
       


        $model = new BookModel();
        $data = [
            'isbn'=>$isbn,
            'book_name'     => $name,
            'author'    => $author,
            'category' => $category
         
        ];

        $model->insert($data);
        return redirect()->to(site_url('/book'));
       
    }


    public function editBook($id)
    {
       
        $valid_id = base64_decode($id);
        $model = new BookModel();
        $UpdatBook = $model->find($valid_id);  

        $session = session();
        $data ['name']=$session->get('name');
        $roleName='Branch Admin';
        $data ['role']=$roleName;
        $data['book'] = $UpdatBook;
       

        echo view('books/update',$data);
       
       
        
        
    }

    public function updateBook($id)
    {
        $valid_id = base64_decode($id);
        $isbn=$this->request->getVar('isbn');
        $name=$this->request->getVar('name');
        $author = $this->request->getVar('author');
        $category = $this->request->getVar('category');
       


        $model = new BookModel();
        $data = [
            'isbn'=>$isbn,
            'book_name'     => $name,
            'author'    => $author,
            'category' => $category
         
        ];

        $model->update($valid_id, $data);
        return redirect()->to(site_url('book'));
    }

    public function deleteBook($id)
    {
        
        $valid_id = base64_decode($id);
       
        $model = new BookModel();
        $book = $model->delete($valid_id); 
        return redirect()->to(site_url('book'));
    }

   

  

}