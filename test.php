<?php
$string_1=@htmlspecialchars($_POST['test_text']);
$string_2=@htmlentities($_POST['test_text']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Characters</title>
</head>
<body>
   <form action="test.php" method="POST" style="margin:100px auto 100px auto;width:500px;text-align:center;">
       <h2>Output in Browser Console</h2>
       <h4>Enter some text with specialchar</h4>
       <input type="text" name="test_text" placeholder="special char text"><br><br>
       <button>Submit</button>
   </form>
   <script>
       console.log('htmlspecialchars output - <?php echo $string_1; ?>');
       console.log('htmlentities output - <?php echo $string_2; ?>');
   </script>
</body>
</html>
