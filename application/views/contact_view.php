<div class="body">
    <div id="contact-label">
        <div id="contact-text">Contact Me</div>
    </div>
    <div id="email-text">
       <p>
          Want to get in touch with me? Send me an email and I'll be sure to email you back.
       </p>
    </div>
    <div id="contact-form">
        <h4>Please make sure to fill all fields in</h4>
       <!--<?php echo validation_errors(); ?>-->
       <?php echo form_open('contact');?>
        <table>
       <tr>
           <td><label for="first">First Name:</td>
           <td><input type="text" name="first" value="<?php echo set_value('first')?>" size="15"></td>
           <td><?php echo form_error('first');?></td>
       </tr>
       <tr>
           <td><label for="last">Last name:</label></td>
           <td><input type="text" name="last" value="<?php echo set_value('last');?>" size="15"></td>
           <td><?php echo form_error('last');?></td>
       </tr>
       <tr>
           <td><label for="email">Email:</label></td>
           <td><input type="text" value="<?php echo set_value('email');?>" name="email" size="25"></td>
           <td><?php echo form_error('email');?></td>
       </tr>
       <tr>
           <td><label for="subject">Subject</label></td>
           <td><input type="text" name="subject" value="<?php echo set_value('subject')?>" size="30"</td>
           <td><?php echo form_error('subject');?></td>
       </tr>
       <tr>
           <td><label for="message">Message</label></td>
       </tr>
        </table>
       <textarea rows="8" cols="60" name="message">
            <?php echo set_value('message');?>
       </textarea><br>
       <input type="submit" name="contact" value="Email Me">
       <?php echo form_close();?>
   </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    $("#contact").css('color','#fff');
</script>