<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//var_dump($selecteddata);
?>
<h6>Additional details</h6>
<form action="saveadditional" method="post">
<input type="text" name="name" disabled value="<?php echo $selecteddata[0]['name'] ?>" placeholder="Input your name"><br>
<input type="mobile" name="mobile"  disabled value="<?php echo $selecteddata[0]['mobile'] ?>" placeholder="Input your address"> <a href="">verify mobile</a><br>
<input type="text" name="address" value="<?php echo $selecteddata[0]['address'] ?>" placeholder="Input your address"><br>
<input type="text" name="city" value="<?php echo $selecteddata[0]['city'] ?>" placeholder="Input your city"><br>
<input type="email" name="email" value="<?php echo $selecteddata[0]['email'] ?>" placeholder="Input your email">  <a href="">verify email</a><br>
<input type="text" name="pincode" value="<?php echo $selecteddata[0]['pincode'] ?>" placeholder="Input your pincode"><br>
<input type="text" name="lookingfor" value="<?php echo $selecteddata[0]['lookingfor'] ?>" placeholder="Input your desired skill"><br>
<input type="text" name="skills" value="<?php echo $selecteddata[0]['skills'] ?>" placeholder="Input your current skills"><br>
<input type="checkbox" name="accept_terms" id="accept_terms" value="true"><label for="accept_terms">I accept the <a href="#">terms and conditions</a> of We4U india</label><br>
<input type="submit" name="proceed to pay" value="proceed to pay">
</form>