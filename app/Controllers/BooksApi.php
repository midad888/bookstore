<?php 

namespace App\Controllers;  


use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\BookModel;
  
class BooksApi extends ResourceController
{

    use ResponseTrait;
    
    public function index()
    {
      
        $model = new BookModel();
        $books = $model->findAll();  
        return $this->respond($books);
        
    }

    public function create()
    {
        $model = new BookModel();
        $json = $this->request->getJSON();
        $isbn=$json->isbn;
        $book_name=$json->book_name;
        $author = $json->author;
        $category = $json->category;
        
        $data = Array (
            'isbn'=>$isbn,
            'book_name'  => $book_name,
            'author'    => $author,
            'category' => $category
         
        );
        
        $model->insert($data);


      $response = array(
        'status'   => 201,
        'messages' => array(
            'success' => 'Product created successfully'
        )
        );
        return $this->respondCreated($response);
        
    }


    
  

}