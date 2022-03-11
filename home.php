<?php
  $testing = file_get_contents('views/test.html');
  $links = file_get_contents('views/links.html');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Gowanustech</title>
    <script src='../jquery.js'></script>
    <script src='../jquery-ui.js'></script>
    <link href='../jquery-ui.css' rel='stylesheet'/>
    <script>
      $(document).ready(function(){
        $('#tabs').tabs({active:0});
      })
    </script>
  </head>
  <body>
    <div id='wrapper'>
      <div>
        <div id='tabs'>
          <ul>
            <li><a href='#tab1'>People</a></li>
            <li><a href='#tab2'>Jobs</a></li>
            <li><a href='#tab3'>Links</a></li>
          </ul>
          <div id='tab1'><?php echo $testing; ?></div>
          <div id='tab2'>Davis Polk</div>
          <div id='tab3'><?php echo $links; ?></div>
        </div>
      </div>
    </div>
  </body>
</html>
