<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>SO GOOD MASTERING</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>

	<div class="container-narrow">
	   <h1 class="masthead">
          <a href="/"><span></span></a>
          <span class="mail"><a href="/contact-form.php" title="email"><img src="../img/email.png" alt="email"></a></span>
      </h1>
<hr>
        <div class="page-header2">
            <h1>Contact Me</h1>
        </div>
        <?php
            // check for a successful form post  
            if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
      
            // check for a form error  
            elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
        ?>  
        <form method="POST" action="contact-form-submission.php" class="form-horizontal">  
            <div class="control-group">  
                <label class="control-label" for="input1">Name</label>  
                <div class="controls">  
                    <input type="text" name="contact_name" id="input1" placeholder="Your name">  
                </div>  
            </div>  
            <div class="control-group">  
                <label class="control-label" for="input2">Email Address</label>  
                <div class="controls">  
                    <input type="text" name="contact_email" id="input2" placeholder="Your email address">  
                </div>  
            </div>  
            <div class="control-group">  
                <label class="control-label" for="input3">Message</label>  
                <div class="controls">  
                    <textarea name="contact_message" id="input3" rows="8" class="span5" placeholder="The message you want to send to me."></textarea>  
                </div>  
            </div>  
            <div class="form-actions">  
                <input type="hidden" name="save" value="contact">  
                <button type="submit" class="btn btn-primary">Send</button>  
            </div>  
        </form>  
    
    <hr>
      <div class="footer">
        <p>Powered by <a href="http://www.mordax-bastards.co.ua" target="_blank">Mordax Bastards</a> & <a href="http://digrassoproduction.com" target="_blank">Digrasso Production</a> &copy; 2013</p>
      </div>    
    </div><!-- /container -->
       
       <script style="display: none;" id="hiddenlpsubmitdiv"></script>
       <script>try{for(var lastpass_iter=0; lastpass_iter < document.forms.length; lastpass_iter++){ var lastpass_f = document.forms[lastpass_iter]; if(typeof(lastpass_f.lpsubmitorig2)=="undefined"){ lastpass_f.lpsubmitorig2 = lastpass_f.submit; lastpass_f.submit = function(){ var form=this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); for(var i = 0; i < document.forms.length; i++){ if(document.forms[i]==form){ d.innerText=i; } } d.dispatchEvent(customEvent); form.lpsubmitorig2(); } } }}catch(e){}</script>
</body>
</html>