<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
    
<form class="well span10">
  <div class="row">
		<div class="span5">
			<label>First Name</label>
			<input type="text" class="span5" placeholder="Your First Name">
			<label>Last Name</label>
			<input type="text" class="span5" placeholder="Your Last Name">
			<label>Email Address</label>
			<input type="text" class="span5" placeholder="Your email address">
          	<label>Subject</label>
			<select id="subject" name="subject" class="span5">
				<option value="service">General Customer Service</option>
				<option value="suggestions">Suggestions</option>
				<option value="product">Product Support</option>
			</select>
		</div>
		<div class="span5">
			<label>Message</label>
			<textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
		</div>
	
		<button type="submit" class="btn btn-primary pull-right">Send</button>
	</div>
</form>
    
</div> <!-- /container -->