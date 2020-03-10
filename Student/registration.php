<!DOCTYPE html>
<html>
<head>
    <title>sign in page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
   <link rel="stylesheet" href="css/registration.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>



<body class="mmm" >


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


<body class="img">
<form method="POST" action="register.php">
<div class="img">
<div class="form">
    <div class="field-wrap">
            <label>
              Name<span class="req"  re></span>
            </label>
            <input type="text" name="name" autocomplete="off"/ id="te" required>
          </div>
          <div class="field-wrap">
            <label>
              Reg no<span class="req"></span>
            </label>
            <input type="text"  name="regno" required autocomplete="off"/ id="te">
          </div>
          
          
          

          <div class="sem" id="d">
            <h4><strong>Semester</strong></h4>            
      <select class="form-control" name="sem">
                     <option></option>
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
        <option value="IV">IV</option>
        <option value="V"> V</option>
        <option value="VI">VI</option>
        <option value="VII">VII</option>
        <option value="VIII"> VIII</option>
      </select>
          </div>

          <div class="year" id="d">
             <h4><strong>Year</strong></h4>
      <select class="form-control" name="year">

         <option></option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
       

      </select>
          </div>

          <div class="dept" id="d">
             <h4><strong>Department</strong></h4>
      <select class="form-control" name="dept">
        <option></option>
        <option value="cse">CSE</option>
        <option value="ece">ECE</option>
        <option value="eee">EEE</option>
        <option value="mech">MECH</option>
        <option value="civil">CIVIL</option>
		<option value="snh">SNH</option>
      </select>
          </div>

           <div class="field-wrap">
            <label>
            Email.Id<span type="email"></span>
            </label>
            <input type="email" autocomplete="off"/ id="te" required name="emailid">
          </div>
            <div class="field-wrap">
            <label>
            Mobile No<span></span>
            </label>
            <input type="text"  name="phoneno" autocomplete="off"/ id="te" required="requireds">
          </div>
          <div class="field-wrap">
            <label>
            Password<span type="password"></span>
            </label>
            <input type="password"  name="pword" autocomplete="off"/ id="te" required="requireds">
          </div>
            
          <div class="field-wrap">
            <label>
              Confirm Password<span  type="password"></span>
            </label>
            <input type="password" name="cpword" required autocomplete="off"/ id="te">
          </div>
          <div>
          <div class="row">
            <div class="col-sm-6">
        <input type="submit" name="submit" id="dd">
            </div>
            <div class="col-sm-6">
              <input type="button" name="submit" id="dd" value="Back"></a>
            </div>
        </div>

  </div>
</div>
</div>
</form>
</body>


</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>
</html>