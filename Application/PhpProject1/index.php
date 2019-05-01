<?php

include ('register.php');
include ('login.php');

?>

<!DOCTYPE html>
<html lang='en' class=''>
<head>
</script><meta charset='UTF-8'><meta name="robots" content="noindex">
<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a70556675b77b0011b7e181&product=sticky-share-buttons"></script>  
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
<style>
<style class="cp-pen-styles">*, *:before, *:after {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

html {
  overflow-y: scroll;
}
*{
	box-sizing: border-box;
  font-family:sans-serif;
	margin: 0;
	padding: 0;
	transition:all 1s;
}

/*--------------------------------*/

#lorem{
	align-items: center;
	display: flex;
	flex-flow: column;
	height: 100vh;
	justify-content: center;
}
#lorem p{
	background: #404040;
    color: #e0e0e0;
	box-shadow: 0 15px 18px -10px black;
	font-size: 1.1em;
	margin: 1em;
	padding: 1.5em;
	width: 25em;
}
body {
  background: white;
  color: #999;
  font-family: 'Titillium Web', sans-serif;
}

a {
  text-decoration: none;
  color: #3B5998;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
a:hover {
  color: #3B5998;
}

.form {
  background:  white;
  padding: 40px;
  max-width: 600px;
  margin: 40px auto;
  border-radius: 4px;
  -webkit-box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
          box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}

.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: rgba(160, 179, 176, 0.25);
  color: #3B5998;
  font-size: 20px;
  float: left;
  width: 50%;
  text-align: center;
  cursor: pointer;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.tab-group li a:hover {
  background: #3B5998;
  color: #ffffff;
}
.tab-group .active a {
  background:#3B5998 ;
  color: white;
}

.tab-content > div:last-child {
  display: none;
}

h1 {
  text-align: center;
  color:black;
  font-weight: 300;
  margin: 0 0 40px;
}

label {
    margin: .2em;
  position: absolute;
  -webkit-transform: translateY(6px);
          transform: translateY(6px);
  left: 13px;
  color: #616161;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size: 22px;
}
label .req {
  margin: 2px;
  color: blue;
}

label.active {
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  left: 2px;
  font-size: 14px;
}
label.active .req {
  opacity: 0;
}

label.highlight {
  color: #616161;
}

input, textarea {
  font-size: 22px;
  display: block;
  width: 100%;
  height: 100%;
  padding: 5px 10px;
  border: 1px solid #a0b3b0;
  color: black;
  border-radius: 0;
  -webkit-transition: border-color .25s ease, -webkit-box-shadow .25s ease;
  transition: border-color .25s ease, -webkit-box-shadow .25s ease;
  transition: border-color .25s ease, box-shadow .25s ease;
  transition: border-color .25s ease, box-shadow .25s ease, -webkit-box-shadow .25s ease;
}
input:focus, textarea:focus {
  outline: 0;
  border-color: #3B5998;
}

textarea {
  border: 2px solid #3B5998;
  resize: vertical;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
  
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}


.forgot {
  margin-top: -20px;
  text-align: right;
}
input[type=text], select {
    margin: 4px ;
    display: inline-block;
}
input[type=email], select {
    margin: 4px ;
    display: inline-block;
}
input[type=password], select {
    margin: 4px ;
    display: inline-block;
}
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}
.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
* {box-sizing: border-box}
body { margin:0}
.footer {                   /* footer */
   position: fixed;
   height: 150px;
   width: 100%;
   background-color:white ;
   color: #3B5998;
   text-align: center;
   margin-top: 600px;
}
    
 
.header a {          
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.log-btn {
	background: #0079ce;
    font-size: 18px;
	border: none;
	border-radius: 3px 3px 3px 3px;
	color: #f4f4f4;
	cursor: pointer;
	height: 50px;
	text-transform: uppercase;
	width: 250px;
    margin-left: 150px;
    font-family: 'Titillium Web', sans-serif;
}
   
</style>
<body>
<div id='cssmenu'>
<ul>
   <li><a href='#'>Home</a></li>
   <li class='active'><a href='#'>Products</a>
      <ul>
         <li><a href='#'>Product 1</a>
            <ul>
               <li><a href='#'>Sub </a></li>
               <li><a href='#'>Sub folders</a></li>
            </ul>
         </li>
         <li><a href='#'>Product 2</a>
            <ul>
               <li><a href='#'>Sub folders</a></li>
               <li><a href='#'>Sub folders</a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'>About</a></li>
   <li><a href='#'>Contact</a></li>
   <li><a href="#">Login</a></li>
</ul>
</div>
<div class="header">
   <div id='lorem'>
    <p>Step-1 <strong>Sign Up</strong></p>
 <p>Step-2 <strong>Login</strong></p>
 <p>Step-3 <strong>Main Page</strong></p>
    <p>Step-4 <strong>Chat</strong>
    <h2>Done! As Simple as that!</h2>
        <button style="margin:30px" href="" class="log-btn" class="active" href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Click Here To Login</button></div>
    
</div>


<div id="id01" class="modal">
 <div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
     <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
         <form action="register.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input name="firstname" type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input name="lastname" type="text"required autocomplete="off"/>
            </div>
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <input title="dob" name="dob" type="date"required autocomplete="off"/>
            </div>
            <div class="field-wrap">
              <label>
                Contact No.<span class="req">*</span>
              </label>
              <input name="" type="pno" required autocomplete="off"  />
            </div>
          </div>
          

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input name="email" type="email"required/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input name="password_1" type="password"required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input name="password_2" type="password"required autocomplete="off"/>
          </div>
             <button class="log-btn">Create Your Acccount</button>

          
          </form>

        </div>
        
        <div id="login">   
          
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
                <input name="email" type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
              <input name="password_1" type="password"required autocomplete="off"/>
          </div>
          
              <p class="forgot"><a href="forgetpass.php">Forgot Password?</a></p>
           <input type="submit" value="Log IN" name="submit" class="log-btn">
          			
          
          </form>

        </div>
        
      </div><!-- tab-content -->
       </div>
   </div> <!-- /form -->
</div>
  <div class="footer">  <!-- footer--> 
     <p style="color: black;">Share us</p>

  <div>    <!-- footer closing-->
   
  
</script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);

});
    
    // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body></html>