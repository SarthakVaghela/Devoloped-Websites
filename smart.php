<?php
$no_error = TRUE;
if (array_key_exists('what', $_GET))
{
  switch ($_GET['what'])
  {
    case '1':
      $img = 'alpha.png';
      header('Content-Type: image/png');
  	  @readfile($img);
      break;
	case '2':
    	$css = 'sample.css';
      header('Content-Type: text/css');
  	  @readfile($css);
     case '3':
     	$js = 'sample.js';
      header('Content-Type: text/javascript');
  	  @readfile($js);
    default:
      http_response_code(404);
  header('Content-Type: text/html');
  echo <<<ZZEOF
<!DOCTYPE html>
<html>
<body>
<h1>File NOT found!</h1>
</body>
</html>
ZZEOF;
      break;
  }
}
else{
 http_response_code(404);
  header('Content-Type: text/html');
  echo <<<ZZEOF
<!DOCTYPE html>
<html>
<body>
<h1>File NOT found!</h1>
</body>
</html>
ZZEOF;
}



?>
