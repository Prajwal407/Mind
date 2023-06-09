<?php
session_start();
if (!isset($_SESSION["user"])) {
  
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charsset="UTF-8">
<meta name="viewport" content="with=device-width, initial-scale=1.0">
  <title> MIND SOLUTIONS </title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <header>
<nav>
    <a href="index2.html"><img src="images/logo2.png"></a>
    <div class="nav-link" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
    <ul>
    <li><a href="#">HOME</a></li>
    <li><a href="#">SERVICES</a></li>
    <li><a href="#">ABOUT</a></li>
    <li><a href="login.php">LOGIN</a></li>
   </ul>
</div>
<i class="fa fa-bars" onclick="showMenu()"></i>
</nav>
    </header>
    
<div class="title">
    <h1> MIND SOLUTIONS </h1>
    <p>Self Care is Self Love.   <br> Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act. 
        <br>It also helps determine how we handle stress, relate to others, and make healthy choices. 
        <br>Mental health is important at every stage of life, from childhood and adolescence through adulthood.</p>
</div>
<div class="button">
    <a href="#" class="btn">GET STARTED</a>
    <a href="#" class="vtn">READ MORE</a>

</div> 
    </section>

<!-------die--------->
<section class="diseases">
    <h1>Mental Health Disorders</h1>
    <p>Mental illness is a general term for a group of illnesses that may impact on a person's thoughts, perceptions, feelings and behaviours.</p>
    
    <div class="row">
    <div class="disorders">
      <h3>Anxiety disorders</h3>
      <p>Anxiety disorders are conditions in which you have anxiety that does not go away and can get worse over time. The symptoms can interfere with daily activities such as job performance, schoolwork, and relationships.</p>
    </div>
    <div class="disorders">
      <h3>Depression</h3>
      <p>Depression is a disorder of the brain. There are a variety of causes, including genetic, biological, environmental, and psychological factors. Depression can happen at any age, but it often begins in teens and young adults.</p>
    </div>
    <div class="disorders">
      <h3>Personality disorders</h3>
      <p>Personality disorders are a group of mental illnesses. They involve long-term patterns of thoughts and behaviors that are unhealthy and inflexible. The behaviors cause serious problems with relationships and work. People with personality disorders have trouble dealing with everyday stresses and problems.</p>
    </div>
    <div class="disorders">
      <h3>PTSD</h3>
      <p>Post-traumatic stress disorder (PTSD) is a mental health disorder that some people develop after they experience or see a traumatic event. The traumatic event may be life-threatening, such as combat, a natural disaster, a car accident, or sexual assault. But sometimes the event is not necessarily a dangerous one.</p>
    </div>
    </div>
</section>

<!---call to action--->
<section class="cta">
<h1>CALL TO ACTION<br>24/7 Call Assistance. Call for Immediate help</h1>
 <a href="" class="bba">2546987453</a>
</section>
<!---social-->
<section>
  <div class="icons">
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-square-twitter"></i>
    <i class="fa-brands fa-square-instagram"></i>

</div>
<div class="made">
<p>Made By Pratham, Prajwal, Yash, Janhavi</p>
</div>
</section>

    <!----javaScript---->
<script>
    var navlinks = document.getElementById("navLinks");
    function showMenu(){
        navlinks.style.right="0";
    }
    function hideMenu(){
        navlinks.style.right="-200px";
    }

</script>
</body>
</html>