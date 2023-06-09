<script src="jquery/jquery.min.js"></script>
<!---- jquery link local dont forget to place this in first than other script or link or may not work ---->

<link rel="stylesheet" href="css/bootstrap.min.css">
<!---- boostrap.min link local ----->

<link rel="stylesheet" href="css/style.css">
<!---- boostrap.min link local ----->

<script src="js/bootstrap.min.js"></script>
<!---- Boostrap js link local ----->

<link rel="icon" href="images/icon.png" type="image/x-icon" />
<!---- Icon link local ----->

<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<!---- Font awesom link local ----->
<style>
body {
    background-color: #eee;
}

.container-fluid {
    padding: 50px;
}

.container {
    background-color: white;
    padding: 50px;
    display: flex;
    justify-content: center;
}

form div {
    margin-bottom: 20px;
}

#title {
    font-family: 'Lobster', cursive;
    ;
}
</style>

<div class="container-fluid">
    <div class="container">
        <div class="col-md-5">
            <?php
                if (isset($_SESSION['error'])) {
                    $message =  $_SESSION['error'];
                    echo '<span style="color:red;">' . $message . '</span>';
                }
                unset($_SESSION['error']);
                ?>
            <form role="form" method="post" action="<?php echo base_url; ?>addUser">
                <fieldset>
                    <h1 class="text-uppercase pull-center">ĐĂNG KÝ</h1>
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control input-lg"
                            placeholder="username">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg"
                            placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password2" id="password2" class="form-control input-lg"
                            placeholder="Password2">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-lg btn-primary   value=" Register>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>