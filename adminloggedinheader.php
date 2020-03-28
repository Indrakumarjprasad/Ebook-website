<div id="templatemo_container">
  	<div id="templatemo_menu">
      	<ul>
              <li><a href="adminHome.php" class="current">Home</a></li>
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
     	    <a href="adventure.php.php">Adventure Books</a>
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
            <?php if (isset($_SESSION['username'])): ?>
        <a style="font-size: 15px;" >Welcome <strong><?php echo $_SESSION['username']; ?></strong></a>
             <a href="server.php?logout=1"  style="color: red; font-size: 15px; float: right;" >Logout</a>
      <?php endif ?>
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