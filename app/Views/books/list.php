
<?= $this->extend('master') ?> 
<?= $this->section('pageBody') ?>

      <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
              <div class="col-10">
                <h2 class="page-title">
                  Books
                </h2>
              </div>
              <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">
               
                  <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-book">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    Create new 
                  </a>
                  <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-create" aria-label="Create new User">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
         
          
            <div class="row row-cards">
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table
		            class="table table-vcenter card-table">
                      <thead>
                        <tr>
                           <th>Book Name</th>
                           <th>ISBN</th>
                          <th>Author</th>
                          <th>Category</th>
                          <th class="w-1"></th>
                          <th class="w-1"></th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                      if($books){ 
                        foreach($books as $value) 
                        { 
                       
                          ?>
                                <tr>
                                  <td ><a href="#" class="text-reset"> <?php echo $value['book_name'] ?> </a></td>
                                  <td  ><?php echo $value['isbn'] ?></td>
                                  <td  ><?php echo $value['author'] ?></td>
                                  <td  ><?php echo $value['category'] ?></td>
                                  <td>
                                    <a  href="<?php echo base_url("book/editBook").'/'. base64_encode($value['books_id']); ?>">Edit</a>
                                  </td>
                                  <td>
                                    <a  href="<?php echo base_url("book/deleteBook").'/'. base64_encode($value['books_id']);  ?>">Delete</a>
                                  </td>
                              </tr>
                          <?php 
                        }
                      
                      
                           } else
                          {
                          
                          }
                        ?>

                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="./docs/index.html" class="link-secondary">Documentation</a></li>
                  <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                  <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                  <li class="list-inline-item">
                    <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                      <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                      Sponsor
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2022
                    <a href="." class="link-secondary">Tabler</a>.
                    All rights reserved.
                  </li>
                  <li class="list-inline-item">
                    <a href="./changelog.html" class="link-secondary" rel="noopener">
                      v1.0.0-beta11
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    

    <div class="modal modal-blur fade" id="modal-book" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
      <form action="<?php echo base_url('book/create') ?>" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add New Book</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        
          <div class="modal-body">
          <div class="mb-3">
              <label class="form-label">ISBN </label>
              <input required type="text" class="form-control" name="isbn" placeholder="Isbn No">
            </div>
            <div class="mb-3">
              <label class="form-label">Book Name</label>
              <input required type="text" class="form-control" name="name" placeholder="Book name">
            </div>
            <div class="mb-3">
              <label class="form-label">Category</label>
              <input required type="text" class="form-control" name="category" placeholder="Category">
            </div>
            <div class="row">
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Author</label>
                      <input required type="text" class="form-control" name="author" placeholder="Auther name">
                    </div>
                  </div>
            </div>
           </div>
          
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancel
            </a>
            <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
              Add Book 
            </button>
          </div>
        </div>
      </form>
      </div>
    </div>

    <?= $this->endSection() ?>