<?php
include("db_connect.php");
session_start();
$baseurl = "http://localhost/project/FileZipper/";

if(!file_exists("uploads"))
	mkdir("uploads");
?>
<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">


<!DOCTYPE html>
<html>
    <head>
        
        <title>PHP File Storage</title>
        <meta charset="utf-8">
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        
        <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
        
        <style>
        
            <?php
            if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
                ?>
                body{
                    background: url(adminbg.webp) no-repeat fixed center; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover; 
                    color: white;
                }
                <?php
            }else{
                ?>
                body{
                    background: url(bg_new_5.jpg) no-repeat fixed center; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                }
                <?php
            }
            ?>
            body{
                margin: 0;
                font-family: 'Dosis', sans-serif;
            }
            
            input{
                padding: 10px;
                margin-bottom: 5px;
                margin-top: 5px;
                border-radius: 10px;
                border: none;
                outline: none;
            }
            
            input[type=submit]{
                cursor: pointer;
                background-color: lime;
                font-weight: bold;
            }
            
            label{
                display: block;
            }
            
            h1, h2, h3, h4, h5, p{
                margin: 0;
                margin-bottom: 15px;
            }
            
            .filethumb{
                display: inline-block; vertical-align: top; text-align: center;
                width: 96px;
                border: 2px solid white;
                border-radius: 10px;
                margin: 20px;
                padding: 10px;
                transition: border .5s;
                
            }
            
            .filethumb:hover{
                border: 2px solid lime;
            }
            
            a{
                color: inherit;
                text-decoration: none;
            }
            
            .alert{
                padding: 15px;
                background-color: black;
                border-radius: 5px;
                margin: 30px;
                color: white;
                font-weight: bold;
                position: fixed;
                left: 0;
                bottom: 0;
            }
            
            .uploadform{
                padding: 20px;
                border: 2px solid white;
                border-radius: 10px;
                background-color: black;
                display: inline-block;
                transition: border .5s;
                margin: 20px;
                margin-top: 75px;
            }
            
            .uploadform:hover{
                border: 2px solid lime;
            }
            
            #topribbon{
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                background-color: black;
            }
            
            .tritem{
                display: inline-block;
                padding: 10px;
            }
            
            .tritem:hover{
                background-color: #171717;
            }
            
            .contentwrapper{
                padding: 10px;
            }
            .loading{
                display: flex;
                justify-content: center;

            }
            .loading::after{
                content: "";
                width: 50px;
                height: 50px;
                border: 10px solid white;
                border-top-color: #bd0606;
                border-radius: 50%;
                animation: loading 1s linear infinite;
            }
            @keyframes loading {
                to{
                    transform: rotate(1turn);
                }
            }
            .main{
            width: 350px;
            height: 500px;
            background: red;
            overflow: hidden;
            background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
            border-radius: 50%;
            box-shadow: 5px 40px 60px #000;
            }
            #chk{
            display: none;
            }
            .signup{
            position: relative;
            width:100%;
            height: 100%;
            }
            label{
            color: #fff;
            font-size: 2.3em;
            justify-content: center;
            display: flex;
            margin: 60px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
            }
            input{
            width: 60%;
            height: 20px;
            background: #e0dede;
            justify-content: center;
            display: flex;
            margin: 30px auto;
            padding: 20px;
            border: none;
            outline: none;
            border-radius: 5px;
            }
            button{
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #fff;
            background: rgba(227, 18, 18, 0.94);
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
            }
            button:hover{
            background: red;
            }
            .login{
            height: 460px;
            background: #eee;
            border-radius: 60% / 10%;
            transform: translateY(-180px);
            transition: .8s ease-in-out;
            }
            .login label{
            color: #573b8a;
            transform: scale(.6);
            }

            #chk:checked ~ .login{
            transform: translateY(-500px);
            }
            #chk:checked ~ .login label{
            transform: scale(1);	
            }
            #chk:checked ~ .signup label{
            transform: scale(.6);
            }

        </style>
        
    </head>
    <body>

        <?php 
        
        if(isset($_POST['signin'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * from users where username='$username' AND password='$password'";
            $result = mysqli_query($connection,$sql);
            $num = mysqli_num_rows($result);
            if($num==1){ //Login Successfull
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
                ?>
                <div class="loading" style="padding-top: 300px"></div>
                <h1 style="text-align: center; font-size:250%; font-weight:2900; color:red"><b>Signing you In</b></h1>
                <?php
            }else{
                ?>
                <div style="padding: 400px; text-align: center; font-size:250%; font-weight:2900; color:white">
                    <p><b>Wrong Credentials! <br>Please try again</b></p>
                </div>
                <!-- to check if user is present in database, if present then to give a prompt of incorrect password, else to prompt a sign in message -->  
                <?php
            }
            ?>
            <script>
                setTimeout(function(){
                    location.href = "<?php echo $baseurl ?>";
                }, 2000);
            </script>
            <?php
        }else{
            
            if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
                
                ?>
                
                <div id="topribbon">
                    <a href="<?php echo $baseurl ?>"><div class="tritem"><i class="fa fa-home"></i> Home</div></a>
                    <a href="<?php echo $baseurl ?>?filestorage"><div class="tritem"><i class="fa fa-archive"></i> File Storage</div></a>
                    <a href="<?php echo $baseurl ?>?logout"><div class="tritem"><i class="fa fa-sign-out"></i> Sign Out</div></a>
                </div>
                
                <div class="contentwrapper">
                    <?php
                    
                    if(isset($_GET["filestorage"])){
                        ?>
                        <h1>File Storage</h1>
                        <?php
                        if(isset($_POST["submitfile"])){
                            $target_dir = "uploads/";
                            $target_file = $target_dir . basename($_FILES["newfile"]["name"]);
                            move_uploaded_file($_FILES["newfile"]["tmp_name"], $target_file);
                        }
                        
                        if(isset($_GET["delete"])){
        					if(file_exists("uploads/" . $_GET["delete"])){
        						unlink("uploads/" . $_GET["delete"]);
                                
        						echo "<div class='alert'>File is deleted successfully.</div>";
        					}
        				}
                        
                        
                        $dirpath = "uploads/*";
        				$files = array();
        				$files = glob($dirpath);
        				usort($files, function($x, $y) {
        					return filemtime($x) < filemtime($y);
        				});
        				
        				echo "<div>";
        				
        				foreach($files as $item){
        					echo "<div class='filethumb'>";
        					//echo "<div>" . $item . "</div>";
        					echo "<a href='" .$item. "' target='_blank'><div><i class='fa fa-file' style='font-size: 40px;'></i></div>";
        					echo "<div>" . str_replace("uploads/", "", $item) . "</div></a>";
        					echo "<a href='?filestorage&delete=" .str_replace("uploads/", "", $item). "'><div style='color: red; margin-top: 20px; font-size: 10px;'><i class='fa fa-trash'></i> Delete</div></a>";
        					echo "</div>";
        				}
        				
        				
        				
        				if(count($files) == 0){
            				?>
                            <p>You have no file here. Try to begin uploading using the upload form at the bottom of this page.</p>
                            <?php    
        				}
                        
                        echo "</div>";
                        
                        ?>
                        <div class="uploadform">
                            <form method="post" enctype="multipart/form-data">
            					<label><i class="fa fa-file"></i> Upload new file</label>
            					<input class="fileinput" name="newfile" type="file">
            					<input name = "submitfile" type="submit" value="Upload">
            				</form>
        				</div>
        				<?php
                    }else if(isset($_GET["logout"])){
                        session_destroy();
                        ?>
                        <h1 style="text-align: center; padding-top: 250px">Signing you Out</h1>
                        <div class="loading"></div>
                        <script>
                            setTimeout(function(){
        				        location.href = "<?php echo $baseurl ?>";
        				    }, 2500);
                        </script>
                        <?php
                    }else{
                        ?>
                        <h1>Home</h1>
                        <p>This is Dashboard home page.</p>
                        <?php
                    }
                    
                    ?>
				</div>
				<script>
				    setTimeout(function(){
				        $(".alert").fadeOut();
				    }, 2500);
				</script>
                <?php
                
            }else{
                ?>
                <div style="margin-top: 40px; margin-left:30px">
                    <h1 style="padding-bottom:-10px; margin-top:-20px; margin-left:-10px">DocumentStorage</h1>
                    <p style="margin-top:-10px; margin-left:15px">Builders Today, Leaders Tommrow</p>
                </div>
                <div class="main" style="font-family: 'Jost', sans-serif; margin-left:1100px;">  	
                    <input type="checkbox" id="chk" aria-hidden="true">
                        <div class="signup">
                            <form method="post" action="sql.php">
                                <label for="chk" aria-hidden="true">Sign up</label>
                                <input type="text" name="username2" placeholder="UserName" style="border-radius: 20px; font-family:Verdana, Geneva, Tahoma, sans-serif; letter-spacing: 0.1ch; margin-top:-15px">
                                <input type="email" name="email" placeholder="Email" style="border-radius: 20px; font-family:Verdana, Geneva, Tahoma, sans-serif; letter-spacing: 0.1ch; ">
                                <input type="password" name="password2" placeholder="Password" style="border-radius: 20px; font-family:Verdana, Geneva, Tahoma, sans-serif; letter-spacing: 0.1ch; ">
                                <button name='signup'>Sign up</button>
                            </form>
                        </div>

                        <div class="login">
                            <form method="post" action='index.php'>
                                <label for="chk" aria-hidden="true" style="color:red">Login</label>
                                <input type="text" name="username" placeholder="UserName" style="border-radius: 20px; font-family:Verdana, Geneva, Tahoma, sans-serif; letter-spacing: 0.1ch; ">
                                <input type="password" name="password" placeholder="Password" style="border-radius: 20px; font-family:Verdana, Geneva, Tahoma, sans-serif; letter-spacing: 0.1ch; ">
                                <button name="signin">Login</button>
                            </form>
                        </div>
                </div>
                <footer>
                </footer>
                <?php
            } 
            
        } 
    
        ?>
                
        
                
    </body>
</html>