
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Store</title>
    <meta name="description" content="The small Bookstore application">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

</head>
<body>
<div class="page">
   

<div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
        </div>
        <form class="card card-md" action="<?php echo base_url().'/signin' ?>" method="post" autocomplete="off">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Login to your account</h2>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email" autocomplete="off">
            </div>
            <div class="mb-2">
              <label class="form-label">
                Password
                <span class="form-label-description">
                  <a href="./forgot-password.html">I forgot password</a>
                </span>
              </label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control" name="password" placeholder="Password"  autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
              </div>
            </div>
            <div class="mb-2">
              <label class="form-check">
                <input type="checkbox" class="form-check-input"/>
                <span class="form-check-label">Remember me on this device</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
          </div>
       
        </form>
        <div class="text-center text-muted mt-3">
          Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
        </div>
      </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta11/dist/js/tabler.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta11/dist/css/tabler.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta11/dist/css/tabler-flags.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta11/dist/css/tabler-payments.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta11/dist/css/tabler-vendors.min.css">
</body>
</html>