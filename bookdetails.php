  <?php include('server.php'); 

    // if user is not logged in, they cannot access this page
    if (empty($_SESSION['username'])) {
      header('location: Home1.php');
    }else if (isset($_POST['submitrev'])) {
      mysqli_query($db, "INSERT INTO reviews (bookid,userreviews,username) VALUES (".$_POST["bid"].",'".$_POST["giverev"]."','".$_SESSION["username"]."')");
    }

  ?>
  <!DOCTYPE html>
  <html >
  <head>

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

  <script type="text/javascript">
    function toggVisibility(){
      var f = document.getElementById("myebooks");
      var g = document.getElementById("cart");
      var h = document.getElementById("orderhistory");
      var j = document.getElementById("testresults");
      var e = document.getElementById("viewbookbydet");
      e.style.display = 'none';
      f.style.display = 'block';
      g.style.display = 'none';
      h.style.display = 'none';
      j.style.display = 'none';
    }

    function toggCartVisibility(){
      var f = document.getElementById("myebooks");
      var g = document.getElementById("cart");
      var h = document.getElementById("orderhistory");
      var j = document.getElementById("testresults");
      var e = document.getElementById("viewbookbydet");
      e.style.display = 'none';
      f.style.display = 'none';
      g.style.display = 'block';
      h.style.display = 'none';
      j.style.display = 'none';
    }

    function toggOrderVisibility(){
      var f = document.getElementById("myebooks");
      var g = document.getElementById("cart");
      var h = document.getElementById("orderhistory");
      var j = document.getElementById("testresults");
      var e = document.getElementById("viewbookbydet");
      e.style.display = 'none';
      f.style.display = 'none';
      g.style.display = 'none';
      h.style.display = 'block';
      j.style.display = 'none';
    }

    function toggTestVisibility(){
      var f = document.getElementById("myebooks");
      var g = document.getElementById("cart");
      var h = document.getElementById("orderhistory");
      var j = document.getElementById("testresults");
      var e = document.getElementById("viewbookbydet");
      e.style.display = 'none';
      f.style.display = 'none';
      g.style.display = 'none';
      h.style.display = 'none';
      j.style.display = 'block';
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
  <?php include('loggedinheader.php'); ?>
      
<div id="templatemo_content">
<?php include('loggedinleftsidebar.php'); ?>
        <div id="viewbookbydet">
          <div id="templatemo_content_right">
            <?php
              $bookId = $_GET['bookid'];
              $logginqry = "SELECT * FROM books WHERE  id=$bookId";
              $res = mysqli_query($db, $logginqry);
              if (mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                $rating = $row["rating"];
                echo "<h1>".$row["bookname"]."</h1>
                      <img src='".$row["coverimg"]."'/>
                      <div class='product_info'>";
                      for ($chkst=0; $chkst < $rating; $chkst++) { 
                        echo "<span class='fa fa-star checked'></span>";
                      }
                      for ($unchkst=0; $unchkst < (5-$rating); $unchkst++) { 
                        echo "<span class='fa fa-star'></span>";
                      }
                      echo "<h3>".$row["author"]."</h3>
                      <div class='buy_now_button'>
                        <form action='Home.php' method='POST'>
                        <button type='submit' name='btnbookid' value='".$row["id"]."'>Buy Now</button>
                        </form>
                      </div>
                    </div>
                    <div class='cleaner'>&nbsp;</div>
                  <div class='bookdesc'><p>".$row["description"]."</p></div>
                  <div class='cleaner_with_height'>&nbsp;</div>
                  <div class='cleaner_with_height'>&nbsp;</div>
                  <h2>User Reviews</h2>";
                  $revres = mysqli_query($db, "SELECT * FROM reviews WHERE bookid=$bookId");
                  if (mysqli_num_rows($revres) > 0) {
                    while ($revrow = mysqli_fetch_assoc($revres)) {
                      echo "<div class='userrev'><p>".$revrow["username"]."</p><span>".$revrow["userreviews"]."</span></div><br/>";
                    }
                  }
              }
            echo "<form action='bookdetails.php?bookid=".$bookId."' method='POST'>
                          <input type='hidden' name='bid' value='".$bookId."'>
                          <input type='text' name='giverev' placeholder='Submit your review'>
                          <input type='submit' name='submitrev' value='Submit'>
                        </form>";
            ?>
            
          </div> <!-- end of content right -->
        </div>

          <?php include('threedivs.php'); ?>
      
      	<div class="cleaner_with_height">&nbsp;</div>
      </div> <!-- end of content -->
      
      <?php include('footer.php'); ?>

  </body>
  </html>