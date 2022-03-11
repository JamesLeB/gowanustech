<?php
  $links = file_get_contents('views/links.html');
  $jobs = file_get_contents('views/jobs.html');
  $people = file_get_contents('views/people.html');
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
          <div id='tab1'><?php echo $links; ?></div>
          <div id='tab2'><?php echo $jobs; ?></div>
          <div id='tab3'><?php echo $people; ?></div>
        </div>
      </div>
    </div>
  </body>
</html>
