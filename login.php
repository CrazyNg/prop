<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>Login and Registration Form with HTML5 and CSS3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="ex" />
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>
<body>
	<div class="container" style="margin-top: 80px">
		<section>				
        	<div id="container_demo" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                <!--<a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a> -->
                <div id="wrapper">
                    <div id="login" class="animate form">
                        <form method="post" action="proses-login.php">
                            <h1>Log in</h1> 
                              	<p> 
                                	<label for="username" class="uname" data-icon="u" > Username </label>
                                    <input name="username" required="required" type="text" placeholder="myusername"/>
                              	</p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="login" /> 
								</p>
                                <p class="change_link">
									You're not admin? Go to
									<a href="index.html" class="to_register">Home</a></p>
                            </form>
                        </div>
              	</div>
            </div>  
        </section>
	</div>
</body>
</html>