<?php include('server.php') ?>
<!DOCTYPE html>
<html >
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>

function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown1");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
function myFunction3() {
  document.getElementById("myDropdown3").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown3");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown2");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
    
<SCRIPT language="JavaScript"
        type="text/javascript">

function checkAnswer(quizForm,theAnswer,urlRight,urlWrong)
{
  var s = "?";
  var i = 0;
  for(;i<quizForm.elements.length;i++)
  {
    if(("cc" ==
        quizForm.elements[i].name) &&
       (quizForm.elements[i].checked))
    {
      s = quizForm.elements[i].value;
    }
  }
  if("?" == s)
  {
    alert("Please make a selection.");
    return false;
  }
  if(s == theAnswer)
  {
    alert("'"+s+"' is correct!");
    if(urlRight)
    {
    document.location.href = urlRight;
    }
  }
  else
  {
    alert("'"+s+"' is incorrect.");
    if( urlWrong )
    {
    document.location.href = urlWrong;
    }
  }
  return false;
}
</SCRIPT>
</head>
<body>
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="Home.php" class="current">Home</a></li>
	        <div class="dropdown">
            <p class="test"><b>Test</b></p>
  	         <div id="myDropdown3" class="dropdown-content">
   	         <a href="quiz.php">G.K Test</a>
    	       <a href="#base">Chemistry Test</a>
    	       <a href="#blog">Physics Test</a>

  	     </div>
    </div>
	<div class="dropdown">
  	<p class="diploma"><b>Diploma Books</b></p>
  	<div id="myDropdown1" class="dropdown-content">
   	 <a href="#about">Information Technology Books</a>
    	<a href="#base">Computer Books</a>
    	<a href="#blog">Chemical Books</a>
   	 <a href="#contact">Instrumentation Books</a>
    	<a href="#custom">Civil Books</a>
    	<a href="#support">ss Books</a>
    	<a href="#tools">Tools Books</a>
  	</div>
	</div>
	<div class="dropdown">
  	<p class="msbte"><b>MSBTE Papers</b></p>
  	<div id="myDropdown2" class="dropdown-content">
   	 <a href="msbte_q.php">Question Papers</a>
    	<a href="msbte_m.php">Model Answer Paper</a>

  	</div>
	</div>
	<div class="dropdown">
  	<p class="search"><b>Search</b></p>
  	<div id="myDropdown" class="dropdown-content">
   	 <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
   	    <a href="#">Adventure Books</a>
        <a href="#">Around the World in 80 Days</a>
        <a href="#">Bones</a>
        <a href="#">Captain Blood</a>
        <a href="#">Five Weeks in a Balloon</a>
        <a href="#">Kidnapped</a>
        <a href="#">Greenmantle</a>
    	<a href="#">Anthrology Books</a>
    	<a href="#">Crime Fiction</a>
   	    <a href="#">Indian</a>
    	<a href="#">Mahabharata</a>
    	<a href="#">Physiology</a>
    	<a href="#">Yoga</a>
  	</div>
	</div>
      

    	</ul>
        

    </div> 
    
<div id="templatemo_header">
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides w3-animate-fading" src="website\images\templatemo_header_bg1.jpg" width="960px" height="285px">
  <img class="mySlides w3-animate-fading" src="website\images\templatemo_header_bg2.jpg" width="960px" height="285px" >
  <img class="mySlides w3-animate-fading" src="website\images\templatemo_header_bg3.jpg" width="960px" height="285px" >
  <img class="mySlides w3-animate-fading" src="website\images\templatemo_header_bg4.jpg" width="960px" height="285px" >
  <img class="mySlides w3-animate-fading" src="website\images\templatemo_header_bg5.jpg" width="960px" height="285px" >
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
    
    </div>
<!-- end of header -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <li><a href="adventure.php">Adventure Books</a></li>
                    <li><a href="Anthrology.php">Anthrology Books</a></li>
                    <li><a href="adventure.php">Crime Fiction</a></li>
                    <li><a href="adventure.php">Indian</a></li>
                    <li><a href="adventure.php">Mahabharata</a></li>
                    <li><a href="adventure.php">Physiology</a></li>
                    <li><a href="adventure.php">Yoga</a></li>
                </ul>
            </div>
			<div class="templatemo_content_left_section">
            	<h1>Bestsellers</h1>
                <ul>
                    <li><div class="tooltip"><a href="categary/adventure.php">MOONFLEET</a><span class="tooltiptext"> 
                    <div id="templatemo_content_right1">
        	<div class="templatemo_product_box1">
            	<h1>Opportunities in Engineering</h1>
   	      <img src="website/images/opportunities-in-engineering.jpg" alt="image" />
                <div class="product_info1">
                	<p>Opportunities in Engineering</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  <h3>BY CHARLES M. HORTON</h3>
                    <div class="buy_now_button"><a href="website\books\Home\Opportunities in Engineering.pdf">Read</a></div>
                    <div class="detail_button"><a href="subpage.php">Detail</a></div>
                </div>
                        </div>
            </div></span></div></li>
                    <li><a href="categary/Anthrology.php">MR STANDFAST</a></li>
                    <li><a href="adventure.php">PRESTER JOHN</a></li>
                    <li><a href="adventure.php">SANDERS OF THE RIVER</a></li>
                    <li><a href="adventure.php">SHE</a></li>
                    <li><a href="adventure.php">Tarzan of the Apes</a></li>
                    <li><a href="adventure.php">TEN YEARS LATER</a></li>
                    <li><a href="adventure.php">THE BLACK ARROW—A TALE OF THE TWO ROSES</a></li>
                    <li><a href="adventure.php">THE BOOK OF POWER</a></li>
                    <li><a href="adventure.php">THE MAN IN THE IRON MASK</a></li>
                    <li><a href="adventure.php">THE PATHLESS TRAIL</a></li>
                    <li><a href="adventure.php">The Thirty-Nine Steps</a></li>
                    <li><a href="adventure.php">THE THREE MUSKETEERS</a></li>
                    <li><a href="adventure.php">TWENTY YEARS AFTER</a></li>
            	</ul>
            </div>
            

        </div> <!-- end of content left -->

      <div id="templatemo_content_right">
          
              <h1>Login</h1>
         <div class="product_info">
 
<form method="POST" action="server.php">

    <div class="input-group">
    <h2><label>Username</label></h2>
    <input type="text" name="username" style="border-radius: 20px; height: 20px; " required>
  </div><br>
  <div class="input-group">
    <h2><label>Email</label></h2>
    <input type="text" name="email" style="border-radius: 20px; height: 20px; " required>
  </div><br>
  <div class="input-group">
    <h2><label>Password</label></h2>
    <input type="password" name="password_1" style="border-radius: 20px; height: 20px; " required>
  </div><br>
  <div class="input-group">
    <h2><label>Confirm Password</label></h2>
    <input type="password" name="password_2" style="border-radius: 20px; height: 20px; " required>
  </div><br>
  <div class="input-group">
    <button type="submit" name="register" class="btn" style="border-radius: 20px; height: 20px; ">Register</button>
  </div><br>
  <p>
    Already a member?<a href="hlogin.php">Sign in</a>
  </p>
  </div>
</form>


                <div class="cleaner">&nbsp;</div>
            
            </div>
           
      <!-- end of content -->
    
    <div id="templatemo_footer">
    
	       <a href="subpage.php">Home</a> | <a href="subpage.php">Books</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
        <Center>Copyright © 2048 <a href="#"><strong>Your Company Name</strong></a></Center>

</body>
</html>