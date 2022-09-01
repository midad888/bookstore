<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\InvoiceModel;
use App\Models\InvoiceDetailsModel;
use CodeIgniter\HTTP\Request;
use Kint\Zval\Value;

class SalesmanController extends Controller
{
    
    public function __construct()
    {
        if (session()->get('role') != "3") {
            echo 'Access denied';
            exit;
        }
    }
    
    public function index()
    {
        $session = session();
        $userName=$session->get('name');
        $roleName='Salesman';
        $data ['role']=$roleName;
        $data ['name']=$userName;

        $model = new InvoiceModel();
        $invoices = $model->findAll();  
        $data['invoices'] = $invoices;  
        
         echo view('invoice/list',$data);
        
    }


    public function add()
    {
        $session = session();
        $userName=$session->get('name');
        $roleName='Salesman';
        $data ['role']=$roleName;
        $data ['name']=$userName;

        
        echo view('invoice/create',$data);
    }





    public function create()
    {
       
        $model = new InvoiceModel();
     
        $name=$this->request->getVar('customer_name');
        $address=$this->request->getVar('address');
        $invoice_date = $this->request->getVar('date');
        $invoice_amount = $this->request->getVar('net_amount');
        $item_name = $this->request->getVar('item_name');
        $item_price = $this->request->getVar('item_price');
        $item_qty = $this->request->getVar('item_qty');
        $item_amount = $this->request->getVar('item_amount');

       
        
        $data = [
            'customer_name'     => $name,
            'customer_address'  => $address,
            'invoice_date'    => $invoice_date,
            'invoice_amount' => $invoice_amount,
            'books_name'=>$item_name,
            'book_price'=>$item_price,
            'qty'=>$item_qty,
            'total'=>$item_amount
           ];   

          
  
           $model->insert($data);
   
        return redirect()->to(site_url('invoice'));
       
    }







    public function update()
    {
       
        $model = new InvoiceModel();
     
        $name=$this->request->getVar('customer_name');
        $address=$this->request->getVar('address');
        $invoice_date = $this->request->getVar('date');
        $invoice_amount = $this->request->getVar('net_amount');
        $item_name = $this->request->getVar('item_name');
        $item_price = $this->request->getVar('item_price');
        $item_qty = $this->request->getVar('item_qty');
        $item_amount = $this->request->getVar('item_amount');

       
        
        $data = [
            'customer_name'     => $name,
            'customer_address'  => $address,
            'invoice_date'    => $invoice_date,
            'invoice_amount' => $invoice_amount,
            'books_name'=>$item_name,
            'book_price'=>$item_price,
            'qty'=>$item_qty,
            'total'=>$item_amount
           ];   

          
  
           $model->update($data);
   
        return redirect()->to(site_url('invoice'));
       
    }



    public function editInvoice($id)
    {
       
        $valid_id = base64_decode($id);
        $model = new InvoiceModel();
        $Updated = $model->find($valid_id);  

        $session = session();
        $data ['name']=$session->get('name');
        $roleName='Salesman';
        $data ['role']=$roleName;
        $data['invoice'] = $Updated;
       

        echo view('invoice/update',$data);
       
       
        
        
    }

   
    public function deleteInvoice($id)
    {
        
        $valid_id = base64_decode($id);
        $model = new InvoiceModel();
        $model->delete($valid_id); 
       
        return redirect()->to(site_url('invoice'));
    }

   
}