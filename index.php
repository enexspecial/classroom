<?php require_once 'layouts/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
            <div class="mt-5"></div>
          <!-- Default form login -->
<form class="text-center border border-light p-5" action="#!">

<p class="h4 mb-4">Sign in</p>

<!-- Email -->
<input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

<!-- Password -->
<input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

<div class="d-flex justify-content-around">
    <div>
        <!-- Remember me -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
        </div>
    </div>
    <div>
        <!-- Forgot password -->
        <a href="">Forgot password?</a>
    </div>
</div>

<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

<!-- Register -->
<p>Not a member?
    <a href="signup.php">Register</a>
</p>

<!-- Social login -->
<p>or sign in with:</p>

<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

</form>
<!-- Default form login -->
            
            </div>
            <div class="col"></div>
        </div>
    </div>



<?php require_once 'layouts/footer.php'; ?>

<script>
    let email = document.getElementById('defaultLoginFormEmail');
    
</script>