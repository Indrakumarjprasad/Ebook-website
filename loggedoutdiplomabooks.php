  <?php include('server.php'); 

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

    function booknotavl() {
      alert('Book not Available');
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

          <div id="viewbookbycat">
          <div id="templatemo_content_right">
            <table border="1px">
              <th>Semester</th>
              <th>Books</th>

              <tr>
                <td rowspan="4">SEM 01</td>
                <td><a href="books/diplomabooks/sem1/17101 English.pdf">17101 English</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem1/17102 BASIC SCIENCE (PHYSICS).pdf">17102 BASIC SCIENCE (PHYSICS)</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem1/17103 BASIC SCIENCE (CHEMISTRY).pdf">17103 BASIC SCIENCE (CHEMISTRY)</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem1/17104 BASIC MATHEMATICS.pdf">17104 BASIC MATHEMATICS</a></td>
              </tr>

              <tr>
                <td rowspan="6">SEM 02</td>
                <td><a href="books/diplomabooks/sem2/17201 COMMUNICATION SKILLS.pdf">17201 COMMUNICATION SKILLS</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem2/17210 APPLIED SCIENCE (PHYSICS).pdf">17210 APPLIED SCIENCE (PHYSICS)</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem2/17211 APPLIED SCIENCE (CHEMISTRY).pdf">17211 APPLIED SCIENCE (CHEMISTRY)</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem2/17212 PROGRAMMING IN C.pdf">17212 PROGRAMMING IN C</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem2/17213 BASIC ELECTRONICS.pdf">17213 BASIC ELECTRONICS</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem2/17216 ENGINEERING MATHEMATICS.pdf">17216 ENGINEERING MATHEMATICS</a></td>
              </tr>

              <tr>
                <td rowspan="5">SEM 03</td>
                <td><a href="books/diplomabooks/sem3/17301 APPLIED MATHEMATICS.pdf">17301 APPLIED MATHEMATICS</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem3/17330 DATA STRUCTURE USING C.pdf">17330 DATA STRUCTURE USING C</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem3/17331 ELECTRICAL TECHNOLOGY.pdf">17331 ELECTRICAL TECHNOLOGY</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem3/17332 RELATIONAL DATABASE MANAGEMENT SYSTEM.pdf">17332 RELATIONAL DATABASE MANAGEMENT SYSTEM</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem3/17333 DIGITAL TECHNIQUES.pdf">17333 DIGITAL TECHNIQUES</a></td>
              </tr>

              <tr>
                <td rowspan="4">SEM 04</td>
                <td><a href="books/diplomabooks/sem4/17430 DATA COMMUNICATION & NETWORKING.pdf">17430 DATA COMMUNICATION & NETWORKING</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem4/17432 OBJECT ORIENTED PROGRAMMING.pdf">17432 OBJECT ORIENTED PROGRAMMING</a></td>
              </tr>
              <tr>
                <td><a href="" onclick="booknotavl();">17428 COMPUTER HARDWARE & MAINTENANCE</a></td>
              </tr>
              <tr>
                <td><a href="" onclick="booknotavl();">17431 MICROPROCESSOR & PROGRAMMING</a></td>
              </tr>

              <tr>
                <td rowspan="5">SEM 05</td>
                <td><a href="books/diplomabooks/sem5/17512 OPERATING SYSTEM.pdf">17512 OPERATING SYSTEM</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem5/17513 SOFTWARE ENGINEERING.pdf">17513 SOFTWARE ENGINEERING</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem5/17515 JAVA PROGRAMMING.pdf">17515 JAVA PROGRAMMING</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem5/17518 INFORMATION SECURITY.pdf">17518 INFORMATION SECURITY</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem5/17519 COMMUNICATION TECHNOLOGY.pdf">17519 COMMUNICATION TECHNOLOGY</a></td>
              </tr>

              <tr>
                <td rowspan="3">SEM 06</td>
                <td><a href="books/diplomabooks/sem6/17630 OBJECT ORIENTED MODELLING AND DESIGN.pdf">17630 OBJECT ORIENTED MODELLING AND DESIGN</a></td>
              </tr>
              <tr>
                <td><a href="" onclick="booknotavl();">17632 MOBILE COMPUTING</a></td>
              </tr>
              <tr>
                <td><a href="books/diplomabooks/sem6/17633 FIBER OPTIC COMMUNICATION.pdf">17633 FIBER OPTIC COMMUNICATION</a></td>
              </tr>

            </table>
          </div>
        </div><!-- end of content right -->
      
      	<div class="cleaner_with_height">&nbsp;</div>
</div> <!-- end of content -->
      
    <?php include('footer.php'); ?>

  </body>
  </html>