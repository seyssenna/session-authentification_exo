<?php require './config/sign_up.php' ?>

<div class="login main-page center">
    <form class="login-form" method="POST" >
        <?php
            if($error){
                echo $error;
            }
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="login" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="checkPassword" class="form-label">check Password</label>
            <input type="password" class="form-control" name="checkPassword" id="checkPassword">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        
       
        <button type="submit" class="btn btn-primary btn-login">Submit</button>
    </form>
</div>