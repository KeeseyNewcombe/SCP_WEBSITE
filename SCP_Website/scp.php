<!DOCTYPE HTML>
<html>

<head>
  <title>SCPJSON</title>
  
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">SCP<span class="logo_colour">_HAVEN</span><span class="logo_colour2"></span></a></h1>
          <h2>WATCH. YOUR. BACK.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.html">Home</a></li>
          <li><a href="SCP-002.html">SCP-002</a></li>
          <li><a href="SCP-003.html">SCP-003</a></li>
          <li><a href="SCP-004.html">SCP-004</a></li>
          <li><a href="SCP-005.html">SCP-005</a></li>
          <li><a href="SCP-006.html">SCP-006</a></li>
          <li class="selected"><a href="ScpJson.html">ScpJson</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>New SCP'S FOUND</h4>
        
        <p>Look for the browse button to see our new scp captures<br /><a href="index.php">GO TO SCP DATABASE</a></p>
        <p></p>
        
      
      </div>
      <div id="content">
        <!-- insert the page content here -->
       

        <div class="background">
       <?php

         $scp = json_decode(file_get_contents('scp.json'));
            
       ?>
          <?php foreach($scp as $key=>$display): ;?>

       <p id="item">Item: <?php echo $display->itemnumber; ?></p>
       <p id="object">Object: <?php echo $display->objectclass; ?></p>
       <p id="containment">Containment Procedures:<?php echo $display->containmentprocedures; ?></p>
       <p id="description> Description:<?php echo $key?>"><?php echo $display->description; ?></p>
        <button type="button" onclick="TextToSpeech('description<?php echo $key?>')">Convert Speech</button>
       
          <?php endforeach; ?>
          
         <script>
        function TextToSpeech(a){
            const speech = new SpeechSynthesisUtterance();
            let voices = speechSynthesis.getVoices();
            let convert = document.getElementById(a).innerHTML;
            alert(convert);
            speech.text = convert;
            speech.volume = 1;
            speech.rate = 1;
            speech.pitch = 1
            speech.voice = voices[1];
            window.speechSynthesis.cancel();
            window.speechSynthesis.speak(speech);
        }
        </script>
    
      </div>
    </div>
    <div id="footer">
      Copyright &copy; Keesey Newcombe | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | from <a href="http://www.html5webtemplates.co.uk"></a>
    </div>
  </div>
</body>
</html>