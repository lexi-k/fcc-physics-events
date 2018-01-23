<!DOCTYPE html>
<html>
<head>
<title>FeedBack Form</title>

<style>
<?php include 'style/style_contact.css'; ?>
 /*<?php include 'style/main.css'; ?>*/

</style>

</head>

<?php include 'topbar.php'; ?>




<div class="container">
<div id="feedback">
<div class="head">

  <!--    <header class="body">
      </header>

      <section class="body">
      </section>

     <footer class="body">
     </footer-->


<h3>FeedBack Form</h3>

</div>

<form action="#" id="form" method="post" name="form">
    <label>Name</label>
    <input name="vname" placeholder="Your Name" type="text" value="">

    <label>Email</label>
    <input name="vemail" placeholder="Your Email" type="text" value="">

    <label>Subject</label>
    <input name="sub" placeholder="Subject" type="text" value="">

    <label>Your Suggestion/Feedback</label>
    <textarea name="msg" placeholder="Type your text here..."></textarea>

    <label>*What is 2+2? (Anti-spam)</label>
    <input name="human" placeholder="Type Here" value="" >

    <input id="submit" name="submit" type="submit" value="Submit">


</form>



</form>

<h3><?php include "secure_email_code.php"?></h3>
</div>
</div>
</body>

inspired from <a href="http://tangledindesign.com/how-to-create-a-contact-form-using-html5-css3-and-php/">tangle</a> 
</html>