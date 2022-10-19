<!DOCTYPE html>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
<style type="text/css">
body {
    font-family: "Lato", sans-serif;
}
.main-head{
    height: 150px;
    background: #FFF;  
}
.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}
.main {
    padding: 0px 10px;
}
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}
@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }
    .register-form{
        margin-top: 10%;
    }
}
@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }
    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }
    .login-form{
        margin-top: 80%;
    }
    .register-form{
        margin-top: 20%;
    }
}
.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}
.login-main-text h2{
    font-weight: 300;
}
.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark">

<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link text-white" href="login">
            About
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  text-white" href="register">
            Contacts
        </a>
    </li>
</ul>

</nav>
    <div class="sidenav">
        <div class="login-main-text">
            <h2>Application<br> Register Page</h2>
            <p>Login or register from here to access.</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form id="register_form" name="register_form">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" required>
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastname" id="lastname"class="form-control" placeholder="Last Name" required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="User Name" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    </div>


                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-secondary">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            register();
        });


        function register(){
            $('#register_form').submit(function() {
                //get form data from the form 
                var form_values = $('#register_form').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../register_action.php',
                    data: form_values,
                    success: function(data) {
                        alert(data);
                            
                    }
                });
                return false;
            });
        }
    </script>

</body>

</html>