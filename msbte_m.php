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

          <div id="viewbookbycat">
          <div id="templatemo_content_right">
            <table border="1px">
              <th>Semester</th>
              <th>Paper</th>

              <tr>
                <td rowspan="8">SEM 01</td>
                <td><a href="exams/modelanswer/sem1/17101-Model-Answer-Paper-Summer-2018.pdf">17101-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem1/17101-Model-Answers-Winter-2018.pdf">17101-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem1/17102-Model-Answer-Paper-Summer-2018.pdf">17102-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem1/17102-Model-Answers-Winter-2018.pdf">17102-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem1/17103-Model-Answer-Paper-Summer-2018.pdf">17103-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem1/17103-Model-Answers-Winter-2018.pdf">17103-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem1/17104-Model-Answer-Paper-Summer-2018.pdf">17104-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem1/17104-Model-Answers-Winter-2018.pdf">17104-Model-Answers-Winter-2018</a></td>
              </tr>

              <tr>
                <td rowspan="14">SEM 02</td>
                <td><a href="exams/modelanswer/sem2/17201-Model-Answer-Paper-Summer-2018.pdf">17201-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17201-Model-Answers-Winter-2018.pdf">17201-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17210-Model-Answer-Paper-Summer-2018.pdf">17210-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17210-Model-Answers-Winter-2018.pdf">17210-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17211-Model-Answer-Paper-Summer-2018 (1).pdf">17211-Model-Answer-Paper-Summer-2018 (1)</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17211-Model-Answer-Paper-Summer-2018.pdf">17211-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17211-Model-Answers-Winter-2018 (1).pdf">17211-Model-Answers-Winter-2018 (1)</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17211-Model-Answers-Winter-2018.pdf">17211-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17212-Model-Answer-Paper-Summer-2018.pdf">17212-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17212-Model-Answers-Winter-2018.pdf">17212-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17213-Model-Answer-Paper-Summer-2018.pdf">17213-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17213-Model-Answers-Winter-2018.pdf">17213-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17216-Model-Answer-Paper-Summer-2018.pdf">17216-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem2/17216-Model-Answers-Winter-2018.pdf">17216-Model-Answers-Winter-2018</a></td>
              </tr>

              <tr>
                <td rowspan="10">SEM 03</td>
                <td><a href="exams/modelanswer/sem3/17301-Model-Answer-Paper-Summer-2018.pdf">17301-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem3/17301-Model-Answers-Winter-2018.pdf">17301-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem3/17330-Model-Answer-Paper-Summer-2018.pdf">17330-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem3/17330-Model-Answers-Winter-2018.pdf">17330-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem3/17331-Model-Answer-Paper-Summer-2018.pdf">17331-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem3/17331-Model-Answers-Winter-2018.pdf">17331-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem3/17332-Model-Answer-Paper-Summer-2018.pdf">17332-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem3/17332-Model-Answers-Winter-2018.pdf">17332-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem3/17333-Model-Answer-Paper-Summer-2018.pdf">17333-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem3/17333-Model-Answers-Winter-2018.pdf">17333-Model-Answers-Winter-2018</a></td>
              </tr>

              <tr>
                <td rowspan="8">SEM 04</td>
                <td><a href="exams/modelanswer/sem4/17428-Model-Answer-Paper-Summer-2018.pdf">17428-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem4/17428-Model-Answers-Winter-2018.pdf">17428-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem4/17430-Model-Answer-Paper-Summer-2018.pdf">17430-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem4/17430-Model-Answers-Winter-2018.pdf">17430-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem4/17431-Model-Answer-Paper-Summer-2018.pdf">17431-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem4/17431-Model-Answers-Winter-2018.pdf">17431-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem4/17432-Model-Answer-Paper-Summer-2018.pdf">17432-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem4/17432-Model-Answers-Winter-2018.pdf">17432-Model-Answers-Winter-2018</a></td>
              </tr>

              <tr>
                <td rowspan="10">SEM 05</td>
                <td><a href="exams/modelanswer/sem5/17512-Model-Answer-Paper-Summer-2018.pdf">17512-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem5/17512-Model-Answers-Winter-2018.pdf">17512-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem5/17513-Model-Answer-Paper-Summer-2018.pdf">17513-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem5/17513-Model-Answers-Winter-2018.pdf">17513-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem5/17515-Model-Answer-Paper-Summer-2018.pdf">17515-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem5/17515-Model-Answers-Winter-2018.pdf">17515-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem5/17518-Model-Answer-Paper-Summer-2018.pdf">17518-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem5/17518-Model-Answers-Winter-2018.pdf">17518-Model-Answers-Winter-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem5/17519-Model-Answer-Paper-Summer-2018.pdf">17519-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem5/17519-Model-Answers-Winter-2018.pdf">17519-Model-Answers-Winter-2018</a></td>
              </tr>

              <tr>
                <td rowspan="5">SEM 06</td>
                <td><a href="exams/modelanswer/sem6/17630-2016-Winter-Model-Answer-Paper.pdf">17630-2016-Winter-Model-Answer-Paper</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem6/17630-2017-Summer-Model-Answer-Paper.pdf">17630-2017-Summer-Model-Answer-Paper</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem6/17632-2016-Winter-Model-Answer-Paper.pdf">17632-2016-Winter-Model-Answer-Paper</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem6/17632-Model-Answer-Paper-Summer-2018.pdf">17632-Model-Answer-Paper-Summer-2018</a></td>
              </tr>
              <tr>
                <td><a href="exams/modelanswer/sem6/17633-2015-Summer-Model-Answer-Paper.pdf">17633-2015-Summer-Model-Answer-Paper</a></td>
              </tr>

            </table>
          </div>
        </div><!-- end of content right -->

        <?php include('threedivs.php'); ?>
      
      	<div class="cleaner_with_height">&nbsp;</div>
</div> <!-- end of content -->
      
    <?php include('footer.php'); ?>

  </body>
  </html>