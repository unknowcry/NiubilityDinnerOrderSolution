<!DOCTYPE html>
<?php
require_once "./libs/Medoo.php";
use Medoo\Medoo;
$database=new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'order_db',
    'server' => '127.0.0.1',
    'username' => 'root',
    'password' => 'wolf',
    'charset' => 'utf8'
]);
$data=$database->select("dish","*");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>点单</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.staticfile.org/angular.js/1.4.6/angular.min.js"></script>
    <link rel="stylesheet" href="./css/order.css">
     
    <script>
        var sum_price=0;
        
        dish={
            key_name:'',
            key_id:'',
            key_num:0,
            key_pic:'',
            key_price:0,
            key_cur:0
        }
        var shopping_list = [];
        var shopping_cart = [];
        var data=<?php echo json_encode($data);?>;
        for(var i=0;i<data.length();i++)
            {
                shopping_list[i]=dish;
                shopping_list[i].key_name=data[i].dishTitle;
                shopping_list[i].key_id=data[i].id;
                shopping_list[i].key_num=0;
                shopping_list[i].key_pic=data.showPictureFileName;
                shopping_list[i].key_price=data.price;
                shopping_cart[i].key_cur=i;


                var div1 = document.createElement("div");
                div1.setAttribute("class","cards");
                div1.id="div"+shopping_list[i].key_id;
                var img = document.createElement("img");
                img.setAttribute("class","imgsize");
                img.scr = "./picture/"+shopping_list[i].key_pic;
                img.alt = "network error!";
                img.id="img"+shopping_list[i].key_id;
                var div2 = document.createElement("div");
                div2.setAttribute("class","ri");
                div2.id="divv"+shopping_list[i].key_id;

                var texth4 = "<h4>"+data[i].name + "</h4>";
                var textp = "<p>"+data[i].price + "</p>";
                var textbutton = "<button id=\"join-shopping-cart\">加入购物车</button>";

                document.getElementById("menu").appendChild(div1);
                document.getElementById("div"+i).appendChild(img);
                document.getElementById("div"+i).appendChild(div2);
                document.getElementById("divv"+i).innerHTML(texth4);
                document.getElementById("divv"+i).innerHTML(textp);
                document.getElementById("divv"+i).innerHTML(textbutton);
                }
                });
        $(document).ready(function(){
            console.log(data);
        $(".join-shopping-cart").click(function(){
            var item_cur=this.siblings("div").text();
            var len=shopping_cart.length();
            shopping_cart[len]=shopping_list[item_cur];
            shopping_cart[len].key_num=1;
        }); 

        function createCart(){
            sum_price=0;
            
            $("#fuck").remove();

            for(var i=0;i<shopping_cart.length(); i++)
            {
                if(shopping_cart[i].key_num==0)
                {
                    shopping_cart.splice(i,1);
                }
                else {
                    sum_price+=shopping_cart[i].key_num*shopping_cart[i].key_price;
                }
            }
            document.getElementById("fuck").innerHTML("<shop-Cart-Item></shop-Cart-Item>");
        };

        $(".incrs").click(function(){
            var Itemname=this.parent().siblings("div").children("p").text();
            alert(Itemname);
            for(i in shopping_cart)
            {
                if(i.key_name==Itemname)
                {
                    i.key_num++;
                    if(i.key_num>99)
                    {
                        i.key_num[i]=99;
                        alert("awsl");
                    }
                }
            }
            
            createCart();
        })

        $(".rdc").click(function(){
            var Itemname=this.parent().siblings("div").children("p").text();

            for(i in shopping_cart)
            {
                if(i.key_name[i]==Itemname)
                {
                    i.key_num--;
                    if(i.key_num<0)
                    {
                        i.key_num=0;
                        alert("nmsl");
                    }
                }
            }
            createCart();
        })

        
        var app = angular.module('myapp',[]);

        app.controller('myctrl',function($scope){
            $scope.sum=sumprice;
        })
        app.controller('myctrl1',function($scope){
        })
        
        app.directive("menu",function(){
            return{
                template :`
            <div class = "cards" ng-repeat="i in shopping_list">
                <img class="imgsize" src="{{'./picture/'+i.img}}" alt="network error!">
                <div class="ri">
                    <h4>{{i.name}}</h4>
                    <p>{{i.price}}</p>
                    <button class="join-shopping-cart">加入购物车</button>
                    <div style="display:none;">{{i.key_cur}}</div>
                </div>
            </div>
                `
            };
        })
        app.directive("shopCartItem",function(){
            return{
                template:`
                <div id = "cart-item">
                    <div class = "Item" ng-repeat="i in shopping_cart">
                        <div class = "buy-name">
                            <p>{{i.name}}</p>
                        </div>

                        <div class = "add-button"> 
                            <button class = "rdc">-</button>
                            <p>{{i.num}}</p>
                            <button class="incrs">+</button>
                        </div>
                    </div>
                </div>
                `
            }
        })

    </script>
</head>

<body>
        <div id="menu" ng-controller="menu">
            <!--加载餐馆菜单-->
            <menu></menu>
        </div>
        
        <div id="shop-cart" ng-app="myapp">
            
            <div id="shop-carttitle">
                <h3>购物车</h3>
            </div>
            <div id="fuck"> 

            </div>
            
            <div id = "shop-cartfooter" ng-controller = "myctrl" >
                <p>总计：￥{{sum}}</p>
                <button id = "ordered" >订餐</button>
                <script>
                    let b = document.getElementById("ordered");
                    b.click(function(){
                        
                        $.post("")
                    })
                </script>
            </div>
        </div>
</body>
</html>