<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images1/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
   
   <link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
	<link rel="stylesheet" type="text/css" href="fonts1/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
</head>
<body>

<nav class="navbar navbar" id="nav">
  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button " class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div>
      <a class="navbar-brand" id="img"> <img src="img\logo.png" id="img1"></a>
    </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active">
          <div class="text">
          <h1 id="text2">Feed Back</h1>
        </div>
      </li>
      </div>
  
</nav>

	
	<div class="limiter">
		<div class="container-login100" style="background-image: ul('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Welcome
				</span>
				<form  method="post" action="login1.php" class="login100-form validate-form p-b-55 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="regno" placeholder="Register no" required>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pword" placeholder="Password" required>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<div class="container-login100-form-btn m-t-32">
							
							 <div class="sem" id="d">
            <h4><strong>Department</strong></h4>            
      <select class="form-control" name="dept" required="text">
                     <option></option>
					 <option value="snh" id="txt">S&H</option>
        <option value="cse" id="txt">CSE</option>
        <option value="ece" id="txt">ECE</option>
        <option value="eee" id="txt">EEE</option>
        <option value="civil" id="txt">CIVIL</option>
        <option value="mech" id="txt"> MECH</option>
      
      </select>
          </div>					</button>
					</div>
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					</form>
						
						
			
			
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" id="onclick"  onclick="location.href = 'registration.php';">
							signup
						</button>
					</div>			
			</div>
		

		</div>	
	

	
</body>
</html>
<script>
function myFunction() {
  document.getElementById("demo").innerHTML ="registration.html";
}
</script>
<style>

	



/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

@font-face {
  font-family: Ubuntu-Regular;
  src: url('../fonts/ubuntu/Ubuntu-Regular.ttf'); 
}

@font-face {
  font-family: Ubuntu-Bold;
  src: url('../fonts/ubuntu/Ubuntu-Bold.ttf'); 
}




/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: Ubuntu-Regular, sans-serif;
}

/*---------------------------------------------*/
a {
    font-family: Ubuntu-Regular;
    font-size: 18px;
    line-height: 1.7;
    color:#fff;
    margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
  color: #fff;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: Ubuntu-Regular;
	font-size: 14px;
	line-height: 1.7;
	color:#fff;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #555555;}
input:-moz-placeholder { color: #555555;}
input::-moz-placeholder { color: #555555;}
input:-ms-input-placeholder { color: #555555;}

textarea::-webkit-input-placeholder { color: #555555;}
textarea:-moz-placeholder { color: #555555;}
textarea::-moz-placeholder { color: #555555;}
textarea:-ms-input-placeholder { color: #555555;}

label {
  margin: 0;
  display: block;
}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}


/*//////////////////////////////////////////////////////////////////
[ Utility ]*/
.txt1 {
  font-family: Poppins-Regular;
  font-size: 13px;
  color: #e5e5e5;
  line-height: 1.5;
}


/*//////////////////////////////////////////////////////////////////
[ login ]*/

.limiter {
  width: 100%;


}

.container-login100 {
  width: 100%;  
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;

  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  z-index: 1;  
}

.container-login100::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height:100%;
  top: 0;
  left: 0;
  background-color:green;
}

.wrap-login100 {
  width: 390px;
  border-radius: 10px;
  overflow: hidden;

  background: transparent;
}


/*------------------------------------------------------------------
[ Form ]*/

.login100-form {

  border-radius: 10px;
  background-color: #fff;
  margin-bottom:-20%;
}

.login100-form-logo {
  font-size: 60px; 
  color: #333333;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 120px;
  
  border-radius: 50%;
  background-color: #fff;
  margin: 0 auto;
}

.login100-form-title {
  font-family: Ubuntu-Bold;
  font-size: 28px;
  color: #fff;
  line-height: 1.2;
  text-align: center;
  text-transform: uppercase;

  display: block;
}


/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  border-bottom: 1px solid lightgreen;
  padding: 29px 0;
}

.input100 {
  font-family: Ubuntu-Regular;
  font-size: 20px;
  color: #555555;
  line-height: 1.2;

  display: block;
  width: 100%;
  height: 50px;
  background: transparent;
  padding: 0 10px 0 80px;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

/*---------------------------------------------*/ 
.focus-input100 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 0;
  height: 1px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  background: lightgreen;
  
}

.focus-input100::after {
  font-family: Linearicons-Free;
  font-size: 18px;
  color: #999999;

  content: attr(data-placeholder);
  display: block;
  width: 100%;
  position: absolute;
  top: 40px;
  left: 35px;
 

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100:focus {
  padding-left: 60px;
}

.input100:focus + .focus-input100::after {
  left: 23px;
  color: #d41872;
}

.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::after {
  left: 23px;
  color: #d41872;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}

.has-val.input100 {
  padding-left: 60px;
}


/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.login100-form-btn {
  font-family: Ubuntu-Bold;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 160px;
  height: 42px;
  border-radius: 21px;

  background:yellow;
 
  position: relative;
  z-index: 1;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
  color:black;
   font-family: Trebuchet MS;

}

.login100-form-btn::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  border-radius: 21px;
  background-color:green;
  top: 0;
  left: 0;
  opacity: 0;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover {
  background-color: transparent;
}

.login100-form-btn:hover:before {
  opacity: 1;
}



/*------------------------------------------------------------------
[ Alert validate ]*/





#myNavbar{
  text-align: center;
}
#text2{
  font-family: Bookman;
  font-style: inherit;
  font-size: 34px;
  text-shadow: 0px 1px 2px black;
  color:green;

}
#nav
{
  box-shadow: 0px 0px 5px green;
 padding: 20px; 
 background-color:yellow;
 border:none;  
}
.navbar-toggle
{
  background-color:yellow;
  box-shadow: 0px 1px 2px green;
  width: 30px;
  height: 30px;
}
#img1
{
  margin-left:-27%;
  margin-top:-27%;
  
  position: relative;

}
#btn
{
  color:#fff;
}
#text1
{
  text-align:center;
 border-style:dotted;
height:20%;border-radius:5%;
  width:25%;
  margin-left:5%;
  font-size:30px;


}
#text
{
  font-family: Trebuchet MS;
  margin-left:-40%;
  padding-top:3%;
}

#txt
{
  font-family:Courier New;
}

</style>