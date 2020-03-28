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
<?php include('loggedoutheader.php'); ?>
    
    <div id="templatemo_content">
    	
        <?php include('loggedoutleftsidebar.php'); ?>

      <div id="templatemo_content_right">
          
        <h1>Login</h1>
          <div class="product_info">
            <form method="post" action="server.php">

                <div class="input-group">
                <select name="usertype">
                  <option value="customer">Customer</option>
                  <option value="admin">Admin</option>
                </select>
                </div><br>

                <div class="input-group">
                <h2><label>Username</label></h2>
                <input type="text" name="username" style="border-radius: 20px; height: 20px; " required>
                </div><br>

                <div class="input-group">
                <h2><label>Password</label></h2>
                <input type="password" name="password" style="border-radius: 20px; height: 20px; " required>
                </div><br>

                <div class="input-group">
                <button type="submit" name="login" class="btn" style="border-radius: 20px; height: 20px; ">Login</button>
                </div><br>

                <p>
                  Not yet a member?<a href="hregister.php">Sign up</a>
                </p>
              
            </form>
          </div>
          <div class="cleaner">&nbsp;</div>
        </div>
      </div>
           
      <!-- end of content -->
    
    <?php include('footer.php'); ?>

<!-- end of container -->

</body>
</html>