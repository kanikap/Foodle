<html>
    <style>
                       
    </style>


    <head>
        <title> JQuery</title>
        <script type="text/javascript">
        function codeAddress() {
            //alert("here");
             $("<li>").addClass("restaurant").html("laaa").appendTo("#restlist");
             
             var myJSON = {"name" : "John", "age" : 23};
             alert(myJSON.name);
             
            initiateList('the-bent-spoon-princeton');
        }
        function initiateList(str) {
            alert(str);
            
            $.post("initRest.php", //ajax file
                { sendValue: str },
                function(data) {
                        var str2 = JSON.stringify(data);
                        alert("successful ajax" + str2);
                        $("<li>").addClass("restaurant").html(data.name).appendTo("#restlist");
                },
                "json"
                );
            
        }
        window.onload = codeAddress;
        </script>
    </head>

    <body>
        
        <h1 id="maintitle" class="aheader">Search for your restaurant</h1>

        <ul id="restlist">
            <div id="restlist-div">
            <li class="restaurant">Restaurant 1</li>
            <li class="restaurant">Restaurant 2</li>
            <li class="restaurant">Restaurant 3</li>
            </div>
        </ul>
        
    </body>
</html>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

