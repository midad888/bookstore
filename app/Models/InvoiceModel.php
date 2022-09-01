<?php 

namespace App\Models;
use CodeIgniter\Model;

class InvoiceModel extends Model
{
    protected $table = 'invoice';
    protected $primaryKey = 'invoice_no';
    protected $allowedFields = [
      'customer_name',
      'customer_address',
      'invoice_date',
      'invoice_amount',
      'books_name',
      'book_price',
      'qty',
      'total'
    ];
}