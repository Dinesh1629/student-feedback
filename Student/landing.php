<!DOCTYPE html>
<html>
<head>
  <title>feedback</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/landing.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

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
          <h1 id="text1" align="center">Feed Back </h1>
        </div>
      </li>
      </div>
  
</nav>

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#change").html("<form method='post' action='edit1.php'><div class='field-wrap'><label><span class='req'></span></label><input type='text' id='ttxxt' name='name' value='dinesh' autocomplete='off'/></div><div class='field-wrap'><label><span class='req'></span></label><input type='text' id='ttxxt' name='regno'  value='732416104011' autocomplete='off'/></div><div class='field-wrap'><label>  <span class='req'></span></label><input type='text' id='ttxxt' name='sem' value='5' autocomplete='off'/></div><div class='field-wrap'><label><span class='req'></span></label><input type='text' id='ttxxt' name='year' value='3' autocomplete='off'/></div><div class='field-wrap'><label><span class='req'></span></label><input type='text' id='ttxxt' name='dept' value='cse' autocomplete='off'/></div><div class='field-wrap'><label><span class='req'></span></label><input type='text' id='ttxxt' name='emailid' value='dineshpraba1629@gmail.com' autocomplete='off'/></div><div class='field-wrap'><label><span class='req'></span></label><input type='text'name='phoneno' value='9486487336' id='ttxxt' autocomplete='off'/></div><div><button type='submit' class='btn' id='btn5'>Save</button></div></form>");
    });
});
</script>

  
  
  
  
</head>

<body class="body">
<form>

  
   

    <div class="container">
  <div class="row" id="rowmain">
    
      <div class="col-sm-3">
        <div class="left">
        <div class="row">
    
          <button type="button" class="btn btn-warning" id="btn1"><a href="#"></a><img src="img/edit.png" id="feedback" ><p id="textt"> Edit</p></button>
  
        </div>
        <div class="row">
          <button type="button" class="btn btn-warning" id="btn3"   onclick="location.href = 'feedback.php';"><img src="img/feedback.png" id="feedback" > <p id="textt">Feed Back</p></a></button>
        </div>
      </div>

      </div>


<div class="col-sm-6">
        <div class="center">
        <div id="change" >
          <div class="row">
            <div class="col-sm-3" id="left1">
             <h4> Name</h4>
            </div>
            <div class="col-sm-3" id="right1"> 
              <h4>dinesh</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3" id="left1">
              <h4>Reg No</h4>
            </div>
            <div class="col-sm-3" id="right1">
              <h4>732416104011</h4>
            </div>
          </div>
           <div class="row">
            <div class="col-sm-3" id="left1">
              <h4>semester</h4>
            </div>
            <div class="col-sm-3" id="right1">
              <h4>5</h4>
            </div>
          </div>      
          <div class="row">
            <div class="col-sm-3" id="left1">
              <h4>Year</h4>
            </div>
            <div class="col-sm-3" id="right1">
              <h4>3</h4>
            </div>
          </div> 
           <div class="row">
            <div class="col-sm-3" id="left1">
              <h4>Department</h4>
            </div>
            <div class="col-sm-3" id="right1">
              <h4>cse</h4>
            </div>
          </div>        
          <div class="row">
            <div class="col-sm-3" id="left1">
              <h4>Email Id</h4>
            </div>
            <div class="col-sm-3" id="right1">
              <h4>dineshpraba1629@gmail.com</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3" id="left1">
              <h4>Mobile No</h4>
            </div>
            <div class="col-sm-3" id="right1">
              <h4>9486487336</h4>
            </div>
          </div>        
          <div class="row">
            <div class="col-sm-3" id="left1">
              <h4>Password</h4>
            </div>
            <div class="col-sm-3" id="right1">
              <h4>********</h4>
            </div>
          </div>        
       </div>
        </div>  
      </div>
 

      <div class="col-sm-3">
        <div class="right">
      <div class="row">      
        <button type="button" class="btn btn-warning" id="btn3"   onclick="location.href = 'password.php';"><img src="img/pswd.png" id="feedback" ><p id="textt">password</p></button></a>
      </div>
      <div class="row">
        <button type="button" class="btn btn-success" id="btn4"   onclick="location.href = 'index.php';"><img src="img/logout1.png" id="out"><p id="textt">Log Out</p></button></a>
   
      </div>
        
      </div>


    </div>
  </div>
   
 </div>



   </form>
    
    </body>

    
    
    <style type="text/css">
#ttxxt
{
  height:5%;
  width:100%;
}
.field-wrap
{
  margin-top:2%;
}
  #textt
  {
    font-family:bookman;
  }
</style>

</body>
<script type="js/bootstrap.min.js"></script>
<script type="js/jquery.min.js"></script>

</html>