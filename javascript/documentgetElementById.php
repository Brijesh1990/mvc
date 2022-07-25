<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src=''></script>


</head>

<body>

    <p id="para">Hi</p>

    <button type="button" onclick="clk()">Click Me</button>
    <script>
        function clk() {
            document.getElementById("para").style = "color:red; font-size:85px; transition:1s ease all";

        }
    </script>

</body>

</html>