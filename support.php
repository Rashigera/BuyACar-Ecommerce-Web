<?php
include 'core/init.php'; 
 include 'includes/overall/header.php'; 
  include 'includes/fak.php'; 
 ?>
 <h1>Frequently Asked Questions</h1>
             
     <DIV class="FAQ" onclick="toggle('faq3')">
 whats my partners name?.
 <div id="faq3" class="ANS">yeghia.</div>
</DIV>
<DIV class="FAQ" onclick="toggle('faq2')">
 whats my name?.
 <div id="faq2" class="ANS">omar.</div>
</DIV>

     <h1>If this doesnt answer your question? contact us on:</h1>
     <form name="form1" method="post" action="">
       <table width="788" border="0">
         <tr>
           <td width="782"><label for="firstnme">First Name:</label>
             <span id="sprytextfield1">
             <input type="text" name="firstnme" id="firstnme">
           <span class="textfieldRequiredMsg">A value is required.</span></span><code><em>e.g. Yeghia</em></code></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>
           
           <label for="lname">Last Name:</label>
             <span id="sprytextfield2">
             <input type="text" name="lname" id="lname">
           <span class="textfieldRequiredMsg">A value is required.</span></span> <code><em>e.g. El-Cheikh</em></code></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td><label for="email">Email:</label>
             <span id="sprytextfield3">
             <input type="text" name="email" id="email">
           <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid formaxddddddd</span></span><em><code>e.g. omz@gmail.com</code></em></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td><label for="message">Message:</label>
             <span id="sprytextarea1">
             <textarea name="message" id="message"></textarea>
<span class="textareaRequiredMsg">A value is required.</span></span></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td><input type="submit" name="send" id="send" value="Send Message"></td>
         </tr>
       </table>
     </form>
     <p>&nbsp;</p> 
      
     <script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
     </script>



<?php include 'includes/overall/footer.php'; ?>             
  
        
    