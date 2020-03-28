<?php include('server.php'); ?>
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
  <?php include('loggedoutheader.php'); ?>
      
<div id="templatemo_content">
<?php include('loggedoutleftsidebar.php'); ?>

          <div id="viewbookbycat">
          <div id="templatemo_content_right">
            <table border="1px">
              <th>Semester</th>
              <th>Paper</th>

              <tr>
                <td rowspan="4">SEM 01</td>
                <td><a href="exams/questionpaper/sem1/17101.pdf">17101</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem1/17102.pdf">17102</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem1/17103.pdf">17103</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem1/17104.pdf">17104</a></td>
              </tr>

              <tr>
                <td rowspan="6">SEM 02</td>
                <td><a href="exams/questionpaper/sem2/17201.pdf">17201</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem2/17210.pdf">17210</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem2/17211.pdf">17211</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem2/17212.pdf">17212</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem2/17213.pdf">17213</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem2/17216.pdf">17216</a></td>
              </tr>

              <tr>
                <td rowspan="5">SEM 03</td>
                <td><a href="exams/questionpaper/sem3/17301.pdf">17301</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem3/17330.pdf">17330</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem3/17331.pdf">17331</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem3/17332.pdf">17332</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem3/17333.pdf">17333</a></td>
              </tr>

              <tr>
                <td rowspan="4">SEM 04</td>
                <td><a href="exams/questionpaper/sem4/17428.pdf">17428</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem4/17430.pdf">17430</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem4/17431.pdf">17431</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem4/17432.pdf">17432</a></td>
              </tr>

              <tr>
                <td rowspan="5">SEM 05</td>
                <td><a href="exams/questionpaper/sem5/17512.pdf">17512</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem5/17513.pdf">17513</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem5/17515.pdf">17515</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem5/17518.pdf">17518</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem5/17519.pdf">17519</a></td>
              </tr>

              <tr>
                <td rowspan="3">SEM 06</td>
                <td><a href="exams/questionpaper/sem6/17630.pdf">17630</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem6/17632.pdf">17632</a></td>
              </tr>
              <tr>
                <td><a href="exams/questionpaper/sem6/17633.pdf">17633</a></td>
              </tr>

            </table>
          </div>
        </div><!-- end of content right -->

      
      	<div class="cleaner_with_height">&nbsp;</div>
</div> <!-- end of content -->
      
    <?php include('footer.php'); ?>

  </body>
  </html>