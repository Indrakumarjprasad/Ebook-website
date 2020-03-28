<div id="templatemo_container">
  	<div id="templatemo_menu">
      	<ul>
              <li><a href="Home.php" class="current">Home</a></li>
              <div class="dropdown">
                <p class="test"><b>Test</b></p>
                <div id="myDropdown3" class="dropdown-content">
                  <a href="quiz.php">G.K Test</a>
                  <a href="chemistrytest.php">Chemistry Test</a>
                  <a href="physicstest.php">Physics Test</a>
                </div>
              </div>
              <li><a href="diplomabooks.php">Diploma Books</a></li>
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
                    <?php
                      $srchres = mysqli_query($db, "SELECT id,bookname FROM books");
                      if(mysqli_num_rows($srchres) > 0){
                        while ($srow = mysqli_fetch_assoc($srchres)) {
                          echo "<a href='bookdetails.php?bookid=".$srow["id"]."'>".$srow["bookname"]."</a>";
                        }
                      }
                    ?>
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