  <?php include('server.php'); ?>
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
  <?php include('loggedoutheader.php'); ?>
      
<div id="templatemo_content">
<?php include('loggedoutleftsidebar.php'); ?>
        
          <div id="templatemo_content_right">
            <?php
              $bookId = $_GET['bookid'];
              $qry = "SELECT*FROM books WHERE  id=$bookId";
              $res = mysqli_query($db, $qry);
              if (mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                $rating = $row["rating"];
                echo "
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
                            <div class='buy_now_button'><a href='hlogin.php'>Buy Now</a></div>
                          </div>
                          <div class='cleaner'>&nbsp;</div>
                        <div class='bookdesc'><p>".$row["description"]."</p></div>
                        <div class='cleaner_with_height'>&nbsp;</div>";
              }
            ?>
          </div> <!-- end of content right -->

      
      	<div class="cleaner_with_height">&nbsp;</div>
      </div> <!-- end of content -->
      
      <div id="templatemo_footer">
      
  	       <a href="subpage.php">Home</a> | <a href="subpage.php">Books</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
          <Center>Copyright © 2048 <a href="#"><strong>Your Company Name</strong></a></Center>
      </div>

  </body>
  </html>