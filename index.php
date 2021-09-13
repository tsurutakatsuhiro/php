<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>九九表</title>
  <link rel="stylesheet" href="../style.css">

</head>

<body>

  <table border="２" style="margin:20px 0 0 20px;">

    <?php
    for ($i = 1; $i <= 9; $i++) {

      echo "<tr>";

      for ($j = 1; $j <= 9; $j++) {

        echo "<td style=\"text-align:right;\">";

        if ($i * $j < 10) echo "&nbsp;";
        echo $i * $j;
        echo "</td>";
      }

      echo "</tr>";
    }

    ?>
  </table>

</body>

</html>
