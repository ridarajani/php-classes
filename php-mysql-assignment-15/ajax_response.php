<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script src="assets/jquery/jquery-3.4.1.min.js"></script>
    <script>
        $("#submitButton").click(function(event)
            event.preventDefault();
            submit = $("#form").serialize(); 
            $.ajax({
                url: 'user_registration_form.php',
                type: 'POST',
                dataType: 'json',
                data: submit,
                error: function() {
                    console.log("error");
                },
                success:function(data){
                    console.log("submit");
                }
            });
        });
    </script>
</body>
</html>