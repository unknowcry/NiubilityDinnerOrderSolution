<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</head>
<body>

    <script>
        var data=null;
    $.post("postHolder.php",{operate:"aaa"},function(data,status){
        console.log("log"+data);
    // for(i;i<data.size();i++)
    // {
    //     var div = document.createElement("div");
    //     div.setAttribute("class","thumbnail");
    //     div.id  = "div"+i;
    //     var img = document.createElement("img");
    //     img.id ="img"+i;
    //     img.scr = "./picture/login_logo.png";
    //     img.alt = "network error!";
    //     var div2 = document.createElement("div");
    //     div.setAttribute("class","caption");
    //     div2.id="divv"+i;
    //     var text = "<h3>"+data[i].name + "</h3>";

    //     document.getElementById("card").appendChild(div);
    //     document.getElementById("div"+i).appendChild(img);
    //     document.getElementById("div"+i).appendChild(div2);
    //     document.getElementById("divv"+i).innerHTML(text);
    // }
    });
    </script>
</body>
</html>