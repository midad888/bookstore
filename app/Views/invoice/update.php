<?= $this->extend('master') ?> 
<?= $this->section('pageBody') ?>

<div class="container-sm">
      <div class="card col-10">
      <form action="<?php echo base_url('invoice/create');?>" method="POST" >
        <div class="card-content">
          <div class="card-header">
            <h5 class="card-title">Add New Invoice</h5>
           
          </div>
        
          <div class="card-body">
           <div class="row">
              <div class="col-sm-9 mb-3" >
                  <label class="form-label">Date</label>
                  <input class="form-control" id="date" value="<?php echo $invoice['invoice_date'] ?>" name="date" placeholder="Select a date">
                </div>

                </div>
           <div class="col-6 mb-3">
              <label class="form-label">Customer Name</label>
              <input  type="text" class="form-control" id="name" value="<?php echo $invoice['customer_name'] ?>" name="customer_name" placeholder="Customer name">
            </div>


            <div class="col-6 mb-3">
              <label class="form-label">Customer Address</label>
              <input  type="text" class="form-control" id="address" value="<?php echo $invoice['customer_address'] ?>" name="address" placeholder="Customer Address">
            </div>
          </div>
          <div class="row">

          <div class="table-responsive">
                    <table class="table table-vcenter card-table" id="table">
                      <thead>
                        <tr>
                          <th>Book Name</th>
                          <th>Price</th>
                          <th>Qty</th>
                          <th>Amount</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody id="tbody">
                        <td><input required type="text" class="form-control" name="item_name" placeholder="Book Name" value="<?php echo $invoice['books_name'] ?>"></td>
                        <td><input required type="text" class="form-control" id="item_price" name="item_price" onchange="recalc()" placeholder="Price" value="<?php echo $invoice['book_price'] ?>"></td>
                        <td><input required type="text" class="form-control" id="item_qty" name="item_qty" onchange="recalc()" placeholder="Qty" value="<?php echo $invoice['qty'] ?>"></td>
                        <td><input required type="text" class="form-control" id="item_amount" name="item_amount" placeholder="Amount" value="<?php echo $invoice['total'] ?>"></td>
                        <td><a href="#" id='btnAdd' class="btn btn-primary">+</a></td>
                      </tbody>
                    </table>
          </div>
          </div>
            
            
            <div class="row">
            <div class="col-9">
                    
                  </div>
                  <div class="col-2 ms-2">
                    <div class="mb-3">
                      <label class="form-label">Net Total</label>
                      <input  type="text" class="form-control" id="amount" value="<?php echo $invoice['invoice_amount'] ?>"  name="net_amount" placeholder="Net Amount">
                    </div>
                  </div>
            </div>
           </div>
          
          <div class=" row card-footer">
          <div class="col-9">
          </div>
          <div class="col-3">
            <a href="<?php echo base_url('invoice');?>" class="btn btn-link link-secondary" data-bs-dismiss="card">
              Cancel
            </a>
            <button type="submit" class="btn btn-primary ms-auto" >
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
              Add Invoice 
            </button>  
          </div>
          </div>
        </div>
      </form>
      </div>
      </div>

        <script>

        function recalc()
        {
          var price =document.getElementById('item_price').value;
          var qty =document.getElementById('item_qty').value;
          // console.log(qty+'//'+price)
          if(price>0 && qty>0)
          {
            total= price*qty;
            console.log(total)
            document.getElementById('amount').value = total;
            document.getElementById('item_amount').value= total;
           
          }
          else
          {
            total= 0;
          }
        }

        </script>


    <?= $this->endSection() ?>