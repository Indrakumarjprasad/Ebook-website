<?php
if (isset($_POST["finishtest"])){
  echo "<script>alert('Your Final Score: ".$_POST["finalscore"]."')</script>";
}

?>

<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript">
    function toggVisibility(){
      var f = document.getElementById("myebooks");
      var g = document.getElementById("cart");
      var h = document.getElementById("orderhistory");
      var j = document.getElementById("testresults");
      var k = document.getElementById("testque");
      k.style.display = 'none';
      j.style.display = 'none';
      f.style.display = 'block';
      g.style.display = 'none';
      h.style.display = 'none';
    }

    function toggCartVisibility(){
      var f = document.getElementById("myebooks");
      var g = document.getElementById("cart");
      var h = document.getElementById("orderhistory");
      var j = document.getElementById("testresults");
      var k = document.getElementById("testque");
      k.style.display = 'none';
      j.style.display = 'none';
      f.style.display = 'none';
      g.style.display = 'block';
      h.style.display = 'none';
    }

    function toggOrderVisibility(){
      var f = document.getElementById("myebooks");
      var g = document.getElementById("cart");
      var h = document.getElementById("orderhistory");
      var j = document.getElementById("testresults");
      var k = document.getElementById("testque");
      k.style.display = 'none';
      j.style.display = 'none';
      f.style.display = 'none';
      g.style.display = 'none';
      h.style.display = 'block';
    }

    function toggTestVisibility(){
      var f = document.getElementById("myebooks");
      var g = document.getElementById("cart");
      var h = document.getElementById("orderhistory");
      var j = document.getElementById("testresults");
      var k = document.getElementById("testque");
      k.style.display = 'none';
      f.style.display = 'none';
      g.style.display = 'none';
      h.style.display = 'none';
      j.style.display = 'block';
    }
  </script>

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

  $score = 0;
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
    $score += 1;
    alert("'"+s+"' is correct!\nScore: "+$score+"/10");
    document.getElementById("finalscoreinput").value = $score;
    if(urlRight)
    {
    document.location.href = urlRight;
    }
  }
  else
  {
    alert("'"+s+"' is incorrect.\nScore: "+$score+"/10");
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
      <div id="testque">
        <div id="templatemo_content_right">
        	
            <div class="templatemo_product_box">
            <h1>1.Question</h1>	

Grand Central Terminal, Park Avenue, New York is the world's
<FORM method="POST" onSubmit="return checkAnswer(this,'A');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. largest railway station<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. highest railway station<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. longest railway station<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. None of the above<BR><BR>
    <button type="submit" class="button">Submit</button>
</FORM>
               
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
<h1>2.Question</h1>	

Entomology is the science that studies
<FORM method="POST" onSubmit="return checkAnswer(this,'B');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. Behavior of human beings<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. Insects<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. The origin and history of technical and scientific terms<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. The formation of rocks<BR>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
    <div class="templatemo_product_box">
            <h1>3.Question</h1>	

Eritrea, which became the 182nd member of the UN in 1993, is in the continent of
<FORM method="POST" onSubmit="return checkAnswer(this,'B');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. Asia<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. Africa<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. Europe<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. Australia<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
               
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
	<h1>4.Question</h1>	

Garampani sanctuary is located at
<FORM method="POST" onSubmit="return checkAnswer(this,'B');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. Junagarh, Gujarat<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. Diphu, Assam<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. Kohima, Nagaland<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. Gangtok, Sikkim<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
    <div class="templatemo_product_box">
            <h1>5.Question</h1>	

For which of the following disciplines is Nobel Prize awarded?
<FORM method="POST" onSubmit="return checkAnswer(this,'D');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. Physics and Chemistry<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. Physiology or Medicine<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. Literature, Peace and Economics<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. All of the above<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
               
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
	<h1>6.Question</h1>	

Hitler party which came into power in 1933 is known as
<FORM method="POST" onSubmit="return checkAnswer(this,'B');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. Labour Party<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. Nazi Party<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. Ku-Klux-Klan<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. Democratic Party<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>7.Question</h1>	

FFC stands for
<FORM method="POST" onSubmit="return checkAnswer(this,'B');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. Foreign Finance Corporation<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. Film Finance Corporation<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. Federation of Football Council<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. None of the above<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            
                <h1>8.Question</h1>	

Fastest shorthand writer was
<FORM method="POST" onSubmit="return checkAnswer(this,'A');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. Dr. G. D. Bist<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. J.R.D. Tata<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. J.M. Tagore<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. Khudada Khan<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
      
<div class="cleaner_with_height">&nbsp;</div>
    <div class="templatemo_product_box">
            	<h1>9.Question</h1>	

Epsom (England) is the place associated with
<FORM method="POST" onSubmit="return checkAnswer(this,'A');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. Horse racing<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. Polo<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. Shooting<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. Snooker<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            
                <h1>10.Question</h1>	

First human heart transplant operation conducted by Dr. Christiaan Barnard on Louis Washkansky, was conducted in
<FORM method="POST" onSubmit="return checkAnswer(this,'A');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. 1967<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. 1968<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. 1958<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. 1922<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
      
<div class="cleaner_with_height">&nbsp;</div>
<form action="loggedoutquiz.php" method="POST">
  <input type="hidden" id="finalscoreinput" name="finalscore">
  <button type="submit" class="button" name="finishtest">Submit Test Score</button>
</form>

            <a href="subpage.php"><img src="images/templatemo_ads.jpg" alt="ads" /></a>
        </div>
      </div> <!-- end of content right -->
    <?php include('threedivs.php'); ?>
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->

    
    
    <?php include('footer.php'); ?>
</body>
</html>