<?php
include('server.php');
if (isset($_POST["finishtest"])){
  mysqli_query($db,"INSERT INTO testscores (username,score,testname) VALUES ('".$_SESSION["username"]."',".$_POST["finalscore"].",'Chemistry Test')");
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
<?php include('loggedinheader.php'); ?>
    
    <div id="templatemo_content">
    	
        <?php include('loggedinleftsidebar.php'); ?>
      <div id="testque">
        <div id="templatemo_content_right">
        	
            <div class="templatemo_product_box">
            <h1>1.Question</h1>	

The nucleus of an atom consists of
<FORM method="POST" onSubmit="return checkAnswer(this,'C');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. electrons and neutrons<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. electrons and protons<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. protons and neutrons<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. All of the above<BR><BR>
    <button type="submit" class="button">Submit</button>
</FORM>
               
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
<h1>2.Question</h1>	

The number of moles of solute present in 1 kg of a solvent is called its
<FORM method="POST" onSubmit="return checkAnswer(this,'A');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. molality<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. molarity<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. normality<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. formality<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
    <div class="templatemo_product_box">
            <h1>3.Question</h1>	

The most electronegative element among the following is
<FORM method="POST" onSubmit="return checkAnswer(this,'C');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. sodium<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. bromine<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. fluorine<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. oxygen<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
               
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
	<h1>4.Question</h1>	

The metal used to recover copper from a solution of copper sulphate is
<FORM method="POST" onSubmit="return checkAnswer(this,'D');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. Na<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. Ag<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. Hg<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. Fe<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
    <div class="templatemo_product_box">
            <h1>5.Question</h1>	

The number of d-electrons in Fe2+ (Z = 26) is not equal to that of
<FORM method="POST" onSubmit="return checkAnswer(this,'D');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. p-electrons in Ne(Z = 10)<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. s-electrons in Mg(Z = 12)<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. d-electrons in Fe(Z = 26)<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. p-electrons in CI(Z = 17)<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
               
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
	<h1>6.Question</h1>	

The metallurgical process in which a metal is obtained in a fused state is called
<FORM method="POST" onSubmit="return checkAnswer(this,'A');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. smelting<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. roasting<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. calcinations<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. froth floatation<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>7.Question</h1>	

The molecules of which gas have highest speed?
<FORM method="POST" onSubmit="return checkAnswer(this,'A');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. H2 at -73oC<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. CH4 at 300 K<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. N2 at 1,027oC<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. O2 at 0oC<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            
                <h1>8.Question</h1>	

The oldest rocks in the earth's crust were once molten, and came from deep inside the earth. The molten rock, called magma, spewed out in volcanic eruptions during the earth;s early life and solidified into hard rock's called
<FORM method="POST" onSubmit="return checkAnswer(this,'C');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. granite<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. basalt<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. igneous rocks<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. sedimentary rocks<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
      
<div class="cleaner_with_height">&nbsp;</div>
    <div class="templatemo_product_box">
            	<h1>9.Question</h1>	

The law which states that the amount of gas dissolved in a liquid is proportional to its partial pressure is
<FORM method="POST" onSubmit="return checkAnswer(this,'C');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. Dalton's law<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. Gay Lussac's law<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. Henry's law<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. Raoult's law<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            
                <h1>10.Question</h1>	

The gas present in the stratosphere which filters out some of the sun's ultraviolet light and provides an effective shield against radiation damage to living things is
<FORM method="POST" onSubmit="return checkAnswer(this,'B');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. helium<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. ozone<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. oxygen<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. methane<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
      
<div class="cleaner_with_height">&nbsp;</div>
<form action="chemistrytest.php" method="POST">
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