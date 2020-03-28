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

Radiocarbon is produced in the atmosphere as a result of
<FORM method="POST" onSubmit="return checkAnswer(this,'A');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. collision between fast neutrons and nitrogen nuclei present in the atmosphere<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. action of ultraviolet light from the sun on atmospheric oxygen<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. action of solar radiations particularly cosmic rays on carbon dioxide present in the atmosphere<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. lightning discharge in atmosphere<BR><BR>
    <button type="submit" class="button">Submit</button>
</FORM>
               
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
<h1>2.Question</h1>	

It is easier to roll a stone up a sloping road than to lift it vertical upwards because
<FORM method="POST" onSubmit="return checkAnswer(this,'D');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. work done in rolling is more than in lifting<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. work done in lifting the stone is equal to rolling it<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. work done in both is same but the rate of doing work is less in rolling<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. work done in rolling a stone is less than in lifting it<BR>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
    <div class="templatemo_product_box">
            <h1>3.Question</h1>	

The absorption of ink by blotting paper involves
<FORM method="POST" onSubmit="return checkAnswer(this,'B');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. viscosity of ink<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. capillary action phenomenon<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. diffusion of ink through the blotting<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. siphon action<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
               
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
	<h1>4.Question</h1>	

Siphon will fail to work if
<FORM method="POST" onSubmit="return checkAnswer(this,'B');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. the densities of the liquid in the two vessels are equal<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. A scripting language mostly for the web<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. both its limbs are of unequal length<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. the temperature of the liquids in the two vessels are the same<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
    <div class="templatemo_product_box">
            <h1>5.Question</h1>	

Large transformers, when used for some time, become very hot and are cooled by circulating oil. The heating of the transformer is due to
<FORM method="POST" onSubmit="return checkAnswer(this,'C');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. the heating effect of current alone<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. hysteresis loss alone<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. both the heating effect of current and hysteresis loss<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. intense sunlight at noon<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
               
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
	<h1>6.Question</h1>	

Nuclear sizes are expressed in a unit named
<FORM method="POST" onSubmit="return checkAnswer(this,'A');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. Fermi<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. angstrom<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. newton<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. tesla<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>7.Question</h1>	

Light year is a unit of
<FORM method="POST" onSubmit="return checkAnswer(this,'B');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. time<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. distance<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. light<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. intensity of light<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            
                <h1>8.Question</h1>	
Mirage is due to
<FORM method="POST" onSubmit="return checkAnswer(this,'A');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. unequal heating of different parts of the atmosphere<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. magnetic disturbances in the atmosphere<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. depletion of ozone layer in the atmosphere<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. equal heating of different parts of the atmosphere<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
      
<div class="cleaner_with_height">&nbsp;</div>
    <div class="templatemo_product_box">
            	<h1>9.Question</h1>	

Light from the Sun reaches us in nearly
<FORM method="POST" onSubmit="return checkAnswer(this,'C');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. 2 minutes<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. 4 minutes<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. 8 minutes<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. 16 minutes<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            
                <h1>10.Question</h1>	

Stars appears to move from east to west because
<FORM method="POST" onSubmit="return checkAnswer(this,'B');">
<INPUT TYPE="RADIO" VALUE="A" NAME="cc">
A. all stars move from east to west<BR>
<INPUT TYPE="RADIO" VALUE="B" NAME="cc">
B. the earth rotates from west to east<BR>
<INPUT TYPE="RADIO" VALUE="C" NAME="cc">
C. the earth rotates from east to west<BR>
<INPUT TYPE="RADIO" VALUE="D" NAME="cc">
D. the background of the stars moves from west to east<BR><br>
    <button type="submit" class="button">Submit</button>
</FORM>
                <div class="cleaner">&nbsp;</div>
            </div>
      
<div class="cleaner_with_height">&nbsp;</div>
<form action="loggedoutphysicstest.php" method="POST">
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