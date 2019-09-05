<!DOCTYPE html>
<html lang="en" ng-app="myapp">
<head>
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
        var shopping_list = [];
        var shopping_cart = [];
        dish={
            key_name:'',
            key_id:'',
            key_num:0,
            key_pic:'',
            key_price:0,
            key_cur:0
        };
        var shopping_list=<?php echo json_encode($data);?>;
    //     var shopping_list = [
    //         {'key_name':'大油条','key_id':1,'key_num':0,'key_pic':'b.jpg','key_price':3.0,'key_cur':1},
    //         {'key_name':'中油条','key_id':2,'key_num':0,'key_pic':'b.jpg','key_price':2.0,'key_cur':2},
    //         {'key_name':'小油条','key_id':3,'key_num':0,'key_pic':'b.jpg','key_price':1.0,'key_cur':3}
    // ];

        $(document).ready(function(){              
                        console.log(shopping_list);   

        })
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
            $scope.list=shopping_list;
        })
        app.controller('myctrl1',function($scope){
        })
        
        app.directive("menu",function(){
            return{
                restrict: 'E', 
                template :`
            <div class = "cards" ng-repeat="i in list">
                <img class="imgsize" src="./picture/b.webp" alt="network error!">
                <div class="ri">
                    <h4>{{i.key_name}}</h4>
                    <p>￥{{i.key_price}}</p>
                    <button class="join-shopping-cart">加入购物车</button>
                    <div style="display:none;">{{i.key_cur}}</div>
                </div>
            </div>
                `
            };
        })
        app.directive("shopCartItem",function(){
            return{
                restrict: 'E', 
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
        app.directive("tes",function(){
            return{
                restrict: 'E', 
                template:`<h2>worddddd</h2>
                <h2>wdfasdfa</h2>
                `
            };
        });

    </script>
</head>

<body>
        <div id="menu" ng-controller = "myctrl">
            <!--加载餐馆菜单-->
            <menu></menu>
        </div>
        
        <div id="shop-cart" >
            
            <div id="shop-carttitle">
                <h3>购物车</h3>
            </div>
            <div id="fuck"> 

            </div>
            
            <div id = "shop-cartfooter" ng-controller = "myctrl1" >
                <p>总计：￥{{sum}}</p>
                <button id = "ordered" >订餐</button>
                <!--
                <script>
                    let b = document.getElementById("ordered");
                    b.click(function(){
                        
                        $.post("")
                    })
                </script>
            -->
            </div>
        </div>
</body>
</html>