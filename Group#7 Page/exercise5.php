<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta httl-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AJAX</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Content 1</h1>
            </div>
            <button id="addcontent">more content</button>
        </div>    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#addcontent").click(function (e) { 
                    e.preventDefault();

                    var count = sessionStorage.getItem("count");
                    if (count == null) {
                        count= 1;
                    }

                    $.ajax({
                        type: "GET",
                        url: "ajax.php",
                        data: {
                            count
                        },
                        dataType: "json",
                        success: function (response) {
                            count = response.count;
                            sessionStorage.setItem("count", count);
                            $(".content").eppend(response.content);
                        }
                    });
                });
            });
        </script>
    </body>
</html>