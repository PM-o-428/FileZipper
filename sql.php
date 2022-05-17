<?php
    include("index.php");
    include("db_connect.php");
    if(isset($_POST['signup'])) {
        $username = $_POST['username2'];
        $email = $_POST['email'];
        $password = $_POST['password2'];

        $sql_user_check = "SELECT * from users where username='$username'";
        $result = mysqli_query($connection,$sql_user_check);
        $num = mysqli_num_rows($result);
        if(strlen($password)>0 && strlen($username)>0 && $num==0) {
            $sql="INSERT INTO users(username,email,password)values('$username','$email','$password')";
            $result = mysqli_query($connection,$sql);
        }elseif($num>0){
            ?>
            <script>
                setTimeout(function(){
                    location.href = "<?php echo $baseurl ?>";
                }, 5000);
            </script>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>User already exist!</strong> Try logging in...
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <?php
        }
        if($result && strlen($password)>0 && strlen($username)>0 && $num==0) {
            ?>
            <script>
                setTimeout(function(){
                    location.href = "<?php echo $baseurl ?>";
                }, 5000);
            </script>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registration Successfull!</strong> You should login now to access the world of files...
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <?php
        }
        elseif($num==0){
            ?>
            <script>
                setTimeout(function(){
                    location.href = "<?php echo $baseurl ?>";
                }, 2500);
            </script>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Registration Failed!</strong> Try Again...
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <?php
        }
    }
?>
