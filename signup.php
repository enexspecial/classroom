<?php require_once 'layouts/header.php'; ?>


    <div class="container">
            <div class="row">
                <div class="col"></div>
                
                <div class="col">
                <div class="mt-5"></div>
                    <!-- Default form register -->
<form class="text-center border border-light p-5" action="#!" id="signup-form">

<p class="h4 mb-4">Sign up</p>

<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" value>
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
    </div>
</div>

<!-- E-mail -->
<input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

<!-- Password -->
<input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
<small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
    At least 8 characters and 1 digit
</small>


<!-- Sign up button -->
<button class="btn btn-info my-4 btn-block" type="submit" >Register</button>

<!-- Social register -->
<p>or sign up with:</p>

<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

<hr>

<!-- Terms of service -->
<p>By clicking
    <em>Sign up</em> you agree to our
    <a href="" target="_blank">terms of service</a>

</form>
<!-- Default form register -->
                
                </div>
                <div class="col"></div>
            </div>
    </div>






<?php require_once 'layouts/footer.php'; ?>

<script type="text/javascript">
    
        const signUpForm = document.getElementById('signup-form');
        signUpForm.addEventListener('click', ()=>{
            let firstname = document.querySelector('defaultRegisterFormFirstName');
            let lastname  = document.querySelector('defaultRegisterFormLastName').value;
            let email     = document.querySelector('defaultRegisterFormEmail').value;
            let password  = document.querySelector('defaultRegisterFormPassword').value;

            console.log(firstname);
        });

   
  



</script>