

    
<main class="form-signin w-100 m-auto text-center">
  <form method="post" action="<?=$action->helper->url('action/signup')?>">
    <img class="mb-4" src="<?=$action->helper->loadimage('logo.png')?>" alt="" width="72" >
    <h1 class="h3 mb-3 fw-normal">Create New Account</h1>


    <div class="form-floating">
      <input type="name" class="form-control" id="floatingInput" name="full_name" placeholder="enter your name">
      <label for="floatingInput">Full Name</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email_id" placeholder="enter your email" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="enter your password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Signup</button>
    <a href="<?=$action->helper->url('login')?>" class="d-block mt-2 ">Already have an account</a>
  </form>
</main>

