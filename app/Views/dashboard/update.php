
<?= $this->extend('master') ?> 
<?= $this->section('pageBody') ?>


<?= $this->extend('master') ?>
<?= $this->section('pageBody') ?>


<div class="container">
    <div class="col-12">


    <div class="card" id="user-create" >
      <div class=" card-lg">
      <form action="<?php echo base_url('dashboard/updateUser').'/'.base64_encode($users['id']);  ?>" method="post">
        <div class="card-content">
          <div class="card-header">
            <h5 class="card-title">Upadate User</h5>
          
          </div>
        
          <div class="card-body">
          
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input required type="text" class="form-control" value="<?php echo $users['name'] ?>" name="name" placeholder="User name">
            </div>
            <label class="form-label">User role</label>
            <div class="form-selectgroup-boxes row mb-3">
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="role" value="2" class="form-selectgroup-input" <?php if($users['authority']==2){echo 'Checked';}else{}?> >
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
                  <input type="radio" name="role" value="3" class="form-selectgroup-input" <?php if($users['authority']==3){echo 'Checked';}else{}?> >
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
                    <input type="email"  require name="email" value="<?php echo $users['email'] ?>" class="form-control ps-0"   placeholder="name@example.com" autocomplete="off">
                  </div>
                </div>
              </div>
             </div>


             <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control"  placeholder="Password">
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
          
          <div class="card-footer row">
            <div class="col-9"></div>
            <div class="col-3">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="card">
              Cancel
            </a>
            <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="card">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
              Update user 
            </button>
          </div>
          </div>
        </div>
      </form>
      </div>
    </div>

    </div></div>

<?= $this->endSection() ?>

    <?= $this->endSection() ?>