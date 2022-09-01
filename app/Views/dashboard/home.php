
<?= $this->extend('master') ?> 
<?= $this->section('pageBody') ?>

      <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
              <div class="col-10">
                <h2 class="page-title">
                  Users
                </h2>
              </div>
              <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">
               
                  <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-create">
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
                          <th>Name</th>
                         
                          <th>Email</th>
                          <th>Role</th>
                          <th class="w-1"></th>
                          <th class="w-1"></th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                      if($users){ 
                        foreach($users as $value) { 
                        $isActive= $value['isActive'];
                        if($isActive==1){
                        ?>
                                <tr>
                                  <td ><?php echo $value['name'] ?> </td>
                                
                                  <td class="text-muted" ><a href="#" class="text-reset"><?php echo $value['email'] ?></a></td>
                                  <td class="text-muted" >
                                  <?php echo ($value['authority']==2)?'branch manager':(($value['authority']==3)?'salesman':''); ?>
                                  </td>
                                  <td>
                                    <a id="<?php echo $value['id']; ?>" href="<?php echo base_url("dashboard/editUser").'/'. base64_encode($value['id']); ?>">Edit</a>
                                  </td>
                                  <td>
                                    <a id="<?php echo $value['id']; ?>" href="<?php echo base_url("dashboard/toggleActive").'/'. base64_encode($value['id']);  ?>">Deactivate</a>
                                  </td>
                              </tr>
                         <?php 
                        }
                        else
                        {
                          ?>

                                <tr style="background-color:#fcfcfc; color:silver;">
                                  <td ><?php echo $value['name'] ?> </td>
                                
                                  <td  ><a href="#" class="text-reset"><?php echo $value['email'] ?></a></td>
                                  <td  >
                                  <?php echo ($value['authority']==2)?'branch manager':(($value['authority']==3)?'salesman':''); ?>
                                  </td>
                                  <td>
                                    <a id="<?php echo $value['id']; ?>" >Edit</a>
                                  </td>
                                  <td >
                                    <a id="<?php echo $value['id']; ?>" href="<?php echo base_url("dashboard/toggleActive").'/'. base64_encode($value['id']);  ?>">Activate</a>
                                  </td>
                              </tr>
                              <?php
                               };
                      
                           };
                         }
                        else
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
    

    <div class="modal modal-blur fade" id="modal-create" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
      <form action="<?php echo base_url('dashboard/createUser') ?>" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">New User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        
          <div class="modal-body">
          
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input required type="text" class="form-control" name="name" placeholder="User name">
            </div>
            <label class="form-label">User role</label>
            <div class="form-selectgroup-boxes row mb-3">
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="role" value="2" class="form-selectgroup-input" checked>
                  <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Branch Admin</span>
                     
                    </span>
                  </span>
                </label>
              </div>
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="role" value="3" class="form-selectgroup-input">
                  <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Sales Man</span>
                     
                    </span>
                  </span>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-3">
                  <label class="form-label">User email</label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text">
                     
                    </span>
                    <input type="email"  require name="email" class="form-control ps-0"   placeholder="name@example.com" autocomplete="off">
                  </div>
                </div>
              </div>
             </div>


             <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Password">
                </div>
              </div>
                <div class="col-lg-6">
                <div class="mb-3">
                <label class="form-label">Password Repeat</label>
                <input type="password" class="form-control" name="password" placeholder="Password repeate">
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
              Create user 
            </button>
          </div>
        </div>
      </form>
      </div>
    </div>

    <?= $this->endSection() ?>