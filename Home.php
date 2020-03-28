  <?php include('server.php'); 

    // if user is not logged in, they cannot access this page
    if (empty($_SESSION['username'])) {
      header('location: Home1.php');
    }else if (isset($_POST['btnbookid'])) {
      mysqli_query($db, "INSERT INTO cart VALUES ('".$_SESSION["username"]."',".$_POST["btnbookid"].")");
      echo "<script>alert('Book successfully added to Cart. Go ahead and check your Cart.');</script>";
    }else if (isset($_GET['action'])) {
      if ($_GET['action']=="delete") {
        $delcartid = $_GET['id'];
        mysqli_query($db, "DELETE FROM cart WHERE username='".$_SESSION["username"]."' AND bookid=".$delcartid);
        header('location: Home.php');
      }
    }
  ?>
  <!DOCTYPE html>
  <html >
  <head>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
      var e = document.getElementById("viewbookbycat");
      var f = document.getElementById("myebooks");
      var g = document.getElementById("cart");
      var h = document.getElementById("orderhistory");
      var i = document.getElementById("freebooks");
      var j = document.getElementById("testresults");
      j.style.display = 'none';
      i.style.display = 'none';
      e.style.display = 'none';
      f.style.display = 'block';
      g.style.display = 'none';
      h.style.display = 'none';
    }

    function toggCartVisibility(){
      var e = document.getElementById("viewbookbycat");
      var f = document.getElementById("myebooks");
      var g = document.getElementById("cart");
      var h = document.getElementById("orderhistory");
      var i = document.getElementById("freebooks");
      var j = document.getElementById("testresults");
      j.style.display = 'none';
      i.style.display = 'none';
      e.style.display = 'none';
      f.style.display = 'none';
      g.style.display = 'block';
      h.style.display = 'none';
    }

    function toggOrderVisibility(){
      var e = document.getElementById("viewbookbycat");
      var f = document.getElementById("myebooks");
      var g = document.getElementById("cart");
      var h = document.getElementById("orderhistory");
      var i = document.getElementById("freebooks");
      var j = document.getElementById("testresults");
      j.style.display = 'none';
      i.style.display = 'none';
      e.style.display = 'none';
      f.style.display = 'none';
      g.style.display = 'none';
      h.style.display = 'block';
    }

    function toggTestVisibility(){
      var e = document.getElementById("viewbookbycat");
      var f = document.getElementById("myebooks");
      var g = document.getElementById("cart");
      var h = document.getElementById("orderhistory");
      var i = document.getElementById("freebooks");
      var j = document.getElementById("testresults");
      i.style.display = 'none';
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
<?php include('freebooks.php'); ?>

          <div id="viewbookbycat">
          <div id="templatemo_content_right">

            <?php
              if (isset($_GET["selBookCat"])){
                $bcat=$_GET["selBookCat"];
                //echo "Selected category is: ".$bcat;
                $homeResult = mysqli_query($db, "SELECT * FROM books WHERE category='$bcat'");
                $rescount = mysqli_num_rows($homeResult);
                $i=1;
                if ($rescount > 0) {
                  while ($row = mysqli_fetch_assoc($homeResult)) {
                    $rating = $row["rating"];
                    if($i%2==0){
                      echo "<div class='templatemo_product_box'>
                            <h1>".$row["bookname"]."</h1>
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
                            <div class='detail_button'><a href='bookdetails.php?bookid=".$row["id"]."'>Details</a></div>
                          </div>
                          <div class='cleaner'>&nbsp;</div>
                        </div>
                        <div class='cleaner_with_height'>&nbsp;</div>";
                    }
                    else{
                      echo "<div class='templatemo_product_box'>
                            <h1>".$row["bookname"]."</h1>
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
                            <div class='detail_button'><a href='bookdetails.php?bookid=".$row["id"]."'>Details</a></div>
                          </div>
                          <div class='cleaner'>&nbsp;</div>
                        </div>
                        <div class='cleaner_with_width'>&nbsp;</div>";
                    }
                    $i += 1;
                  }
                  echo "<div class='cleaner_with_height'>&nbsp;</div>";;
                }
              }
            ?>
          </div>
        </div><!-- end of content right -->

        <?php include('threedivs.php'); ?>
      
      	<div class="cleaner_with_height">&nbsp;</div>
</div> <!-- end of content -->
      
    <?php include('footer.php'); ?>

  </body>
  </html>