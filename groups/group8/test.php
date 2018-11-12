<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      </head>
<body>

    <h1>Get Code</h1> <input id="codeContent" type="text" disabled>
    <button id="btn1">Sent</button>


    <script>
        $("#btn1").click(function(){
            $.post("./file1.php").done(function(data){
                $("#codeContent").val(data);
            });
        });
    </script>
</body>

</html>