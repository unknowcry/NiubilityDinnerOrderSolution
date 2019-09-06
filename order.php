<!DOCTYPE html>
<html lang="en" ng-app="myapp">
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
    <script>
        var sum_price=0;
        var shopping_list = [];
        var shopping_cart = [];
        var app = angular.module('myapp',[]);
        dish={
            key_name:'',
            key_id:'',
            key_num:0,
            key_pic:'',
            key_price:0,
            key_cur:0
        };
        var data = <?php echo json_encode($data);?>;
        // var shopping_list =
        // [{'key_name':'大油条','key_id':1,'key_num':0,'key_pic':'b.jpg','key_price':3.0,'key_cur':0},
        //     {'key_name':'中油条','key_id':2,'key_num':0,'key_pic':'b.jpg','key_price':2.0,'key_cur':1},
        //     {'key_name':'小油条','key_id':3,'key_num':0,'key_pic':'b.jpg','key_price':1.0,'key_cur':2}];

        $(document).ready(function(){

        });
        for(var i=0;i<data.length;i++)
        {
            var dataitem=new Array();
            //dataitem=dish;
            dataitem["key_cur"]=i;
            dataitem["key_name"]=data[i].dishTitle;
            dataitem["key_pic"]="http://127.0.0.1/NiubilityDinnerOrderSolution/dishPictures/"+data[i].showPictureFileName;
            dataitem["key_price"]=data[i].price;
            dataitem["key_id"]=data[i].id;
            dataitem.key_num=0;
            shopping_list.push(dataitem);
        //         // shopping_list[i]=dish;

        //         // shopping_list[i].key_cur=i;
        //         // shopping_list[i].key_name=data[i].dishTitle;
        //         // shopping_list[i].key_pic="./dishPictures/"+data[i].showPictureFileName;
        //         // shopping_list[i].key_price=data[i].price;
        //         // shopping_list[i].key_id=data[i].id;
        //         // shopping_list[i].key_num=0;
        //         console.log(shopping_list[i]);
        }
        console.log(shopping_list);
        
        function mdzz(data){ 
            //alert("!");
            
            var item_cur=data;
            var len=shopping_cart.length;
            var bo=true;
            for(var i=0;i<len;i++)
            {
                alert
                //console.log(shopping_list[item_cur]);
                if(shopping_list[item_cur].key_id==shopping_cart[i].key_id)
                {
                    bo=false;
                    break;
                }
                
            }
            //console.log(shopping_cart);  
            if(bo==true)
            {
                shopping_cart[len]=shopping_list[item_cur];
                shopping_cart[len].key_num=1;
                  
                createCart();
            }
            
            
            
            
        };
        function incrs(data){
            var Itemname=data;
            //console.log(Itemname);
            for(var i=0;i<shopping_cart.length;i++)
            {
                if(shopping_cart[i].key_name==Itemname)
                {
                    shopping_cart[i].key_num++;
                    if(shopping_cart[i].key_num>99)
                    {
                        shopping_cart[i].key_num[i]=99;
                        alert("awsl");
                    }
                }
            }
           // console.log(shopping_cart);
            createCart();
        };


        function rdcc(data){
            //alert("!");
            var Itemname=data;
           
            for(var i=0;i<shopping_cart.length;i++)
            {
                if(shopping_cart[i].key_name==Itemname)
                {
                    shopping_cart[i].key_num--;
                    if(shopping_cart[i].key_num<0)
                    {
                        shopping_cart[i].key_num=0;
                        alert("nmsl");
                    }
                }
            }
            //console.log(shopping_cart);
            createCart();
        };
        function createCart(){
            sum_price=0;
            
            //$("#fuck").remove();

            for(var i=0;i<shopping_cart.length; i++)
            {
                if(shopping_cart[i].key_num==0)
                {
                    shopping_cart.splice(i,1);
                }
                else {
                    sum_price+=shopping_cart[i].key_num*shopping_cart[i].key_price;
                }
            }

            //console.log(shopping_cart);
            text="<sci></sci>";
            $("#cart-item").append(text);
            
        };

        app.controller('myctrl',function($scope){
            $scope.list=shopping_list;
        })
        app.controller('myctrl1',function($scope){
                $scope.cart=shopping_cart;
                var t2 = window.setInterval(function() {
                    $scope.cart=shopping_cart;
              //      console.log($scope.cart);
                    $scope.$apply();
                },100)    
        })
        app.controller('myctrl2',function($scope){
            $scope.sum =sum_price;
            var t3 = window.setInterval(function() {
                $scope.sum =sum_price;
              //  console.log($scope.sum);
                $scope.$apply();
                },100) 
        })
        
        app.directive("menu",function(){
            return{
                restrict: 'E', 
                template :`
            <div class = "cards" ng-repeat="i in list">
                <img class="imgsize" src="{{i.key_pic}}" alt="network error!">
                <div class="ri">
                    <h4>{{i.key_name}}</h4>
                    <p>￥{{i.key_price}}</p>
                    <button class="join-shopping-cart" onclick="mdzz(this.value)" value="{{i.key_cur}}">加入购物车</button>
                    <div style="display:none;">{{i.key_cur}}</div>
                </div>
            </div>
                `
            };
        })

        app.directive("sci",function(){
            return{
                restrict: 'E', 
                template:`          
                    <div class = "Item" ng-repeat="x in cart">
                        <div class = "buy-name">
                            <p>{{x.key_name}}</p>
                        </div>

                        <div class = "add-button"> 
                            <button class = "rdc" onclick="rdcc(this.value)" value="{{x.key_name}}">-</button>
                            <p>{{x.key_num}}</p>
                            <button class="incrs" onclick="incrs(this.value)" value="{{x.key_name}}">+</button>
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

            <div id="fuck" >
                    <div id = "cart-item" ng-controller = "myctrl1"> 
                    <sci></sci>
                    </div>
            </div>
            
            <div id = "shop-cartfooter" ng-controller = "myctrl2" >
                <p>总计：￥{{sum}}</p>
                <?php
                setcookie("id",9,time()+3600);
                ?>
                <a href="./customerIndent.html"><button id = "ordered" >订餐</button></a>

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