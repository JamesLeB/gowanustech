<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
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
            <li><a href='#tab1'>tab uno</a></li>
          </ul>
          <div id='tab1'> data for tab one </div>
        </div>
      </div>
    </div>
  </body>
</html>
