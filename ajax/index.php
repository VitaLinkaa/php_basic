<?php
error_reporting(-1);
// $is = 5;
// echo $is;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AJAX</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#load").bind("click", function() {
        const admin = "Admin";
        $.ajax({
          url: "content.php",
          type: "POST",
          data: ({
            name: admin,
            pass: 5
          }),
          dataType: "html",
          beforeSend: funcBefore,
          success: funcSucces
        });
      });
    });

    function funcBefore() {
      $("#info").text("Ожидание данных...")
    }

    function funcSucces(data) {
      $("#info").text(data)
    }
  </script>
</head>

<body>
  <a id="load" style="cursor:pointer">Загрузить данные</a>
  <div id="info"></div>
</body>

</html>