<?php
session_start();
?>
<!DOCTYPE html>
<title>BOOKING CONFIRMATION</title>

<head>
    <style>
        body {
            background-image: url("https://image.freepik.com/free-vector/abstract-pattern-design_1053-523.jpg");
        }

        .msg {
            width: 500px;
            color: goldenrod;
            margin-left: 550px;
            position: absolute;
            top: 225px;
            font-family: Benton Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
        }
    </style>
</head>

<body>
    <?php
    include "logoutbtn.php";
    ?>
    <div class="msg">
        <?php
        $name = $_SESSION['name'];
        echo "<h1>Hey $name</h1>";
        echo "<h2>Your booking has been confirmed. Details will be sent to your mail shortly.</h2>";
        echo "<h3 style='margin-bottom: 0px;'>Have a great trip.</h3>";
        echo "<h4 style='margin-top: 0px;'>Thank you for choosing Travel Buddy.</h4>";

        ?>
    </div>
</body>

</html>