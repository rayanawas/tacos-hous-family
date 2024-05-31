<?php
include 'connxion.php'; 
?>
<!DOCTYPE html>

<head>
    <title>Maiky pizza</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="ICN.png" rel="icon"/>
    <link href="ICN.png" rel="shotcut"/>
    <link href="ICN.png" rel="apple-touch-icon"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <meta name="title" content="Tacos House Family">
    <meta name="description" content="Restaurant de Maikey pizza a batna">
    <meta name="keywords" content="berger,batna,restaurant,pizza,les allée,tacos,dessert,fast food,tacos house family,Donuts,Donut,">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="raya">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      
    <meta property="og:title" content="Maikey pizza"/>
    <meta property="og:description" content="Maikey pizza restaurant a batna"/>
    <meta property="og:image" content="ICN.png" />
    <meta property="og:image:width" content="1200"/>
    <meta property="og::image:height" content="630"/>
    <meta property="og:type" content="website"/>
    <style>
    
   body.showCart #cart-content{
  right: 0;
   }
   pre{
    color: black;
    FONT-FAMILY: 'Lobster',cursive;
   }
   .main-container{
    grid-template-columns: repeat(4, 0.6fr);
   }
        input,input:hover{
    border: none;
    color: white;
    background-color: #4654665c;
    border-bottom: white;
    border-bottom-width: 1px;
    border-bottom-style: solid;
    padding-bottom: 7px;
   }

     ::placeholder{
      color:white;
      font-size:19px;
      font-family: 'Lobster', cursive;
     }
     #btn{
        margin-left: 9%; 
        margin-top: 5%;
         WIDTH: 105%; 
         FONT-SIZE: 21PX; 
         HEIGHT: 54%; 
         border: none;
         background: linear-gradient(304deg, #ff6e00e0, transparent);
         font-family: 'Lobster', cursive; 
    }
    #listCart{
      overflow: auto;
    }
    #listCart::-webkit-scrollbar{
    width: 0;
    }
    body.showCart #body{
    transform: translateX(-350px);
     }
      #cart-content{
        position: fixed;
    width: 350px;
    top: 0;
    bottom: 0;
    right: -350px;
    background-color: #2b384ac9;
    color: #c66922;
    transition: .5s;
      }
      #event{
        border-style: double;
    border-color: #c66922;
    MARGIN-BOTTOM: 12px;
    border-width: thick;
      }
      .h-40 {
    height: 10rem;
}
.w-full {
    width: 100%;
}
   .row{
    margin-right: 0px;
   }
          #prix{
        font-weight: bold;
        font-size:20px;
        margin-left: 80%;
        border-radius: 18px;
        width: 24%;
      }
      #name{
        font-weight: bold;
         font-size:23px;
      }
        .cardbox{
        height: 85%;
        background-color: rgba(162, 162, 158, 0.47);
        width: 23%;
        
        margin-top: 20px;
        margin-bottom: 50%;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
         }
         .image{
        display:flex;
        width: 85%;
        height: 85%;
        margin: auto;
        justify-content: center,
            
     }
     #copy{
      MARGIN-top: 2%;
    margin-bottom: -3%;
     }
     .main_container{
       transform: translateX(9%);
        margin-top: 15px;
        margin-left:-87px;
        
        width: 80vw;
        height: 34vh;
        border-radius: 20px;
       background-color: rgba(255, 255, 255, 0.68);
       box-shadow: 1px 0px 27px -1px rgba(130,123,123,0.85);
         display: flex;
         flex-wrap: nowrap;
        justify-content: space-around;
    }
      .image a{
        
        display:flex;
       width: 100%;
       height: 100%;
       margin: auto;
       justify-content: center,
     }
     .text{
        display: flex;
        justify-content: center;
        align-items: center;
     }
      
    #img1 {
        width: 67%;
    margin: auto;
        transition: max-width 1s;
        height: 84%;
        filter: drop-shadow(0 13px 14px #0009);
  
    }
   

#map{
  text-align: CENTER;
}
      
        ul li ul.dr li {
      display:block;
      }
      ul li ul.dr  {
     width:100%;
     position:absolute;
     z-index:999;
      }
      a{
        color:black;
      }
      a:hover{
        color:black;
        text-decoration: none;
      }
      li{
        list-style: none;
        margin-bottom: 10%;
        border-bottom: black;
      }
       div#middle{
        transform: translatey(152%);
       }
        li{
          font-size: 36px;
        }
        
        .navbar-toggler{
            background-color: #c66922;
            
        }
        .material-symbols-outlined {
        color: #c66922;
        }
        h1{
            margin-left: 69%; 
            font-family: 'Lobster', cursive; 
            font-weight: bold; 
            font-size: 30px;
            color:#c66922;
        }

        #pic{
        width:15%;
        height: 15%;
      }
    
        #body {
            background-image: url(mikey.png);
      background-repeat: no-repeat;
      height: 650px;
      background-size: cover;
        }
        #span{
    position: absolute;
    background-color: #5c5436;
    width: 28px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color: #e1c571;
    top: 74%;
    FONT-SIZE: 22PX;
    right: 293px;
}
#btt{
  display: grid; top: 90%; POSITION: fixed;
    WIDTH: 22%; grid-template-columns: repeat(2, 1fr);
}
#bttn{
  display: none; top: 90%; POSITION: fixed;
    WIDTH: 22%; grid-template-columns: repeat(2, 1fr);
}

        @media screen and (min-width: 280px){
          #btt,#bttn{
            width: 87%;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 5%;
          }
          #listimg {
           width: 43px;
           height: 43px;
           margin: 11px;
           }
          #listCart {   
             width: 94%;
             TEXT-ALIGN: center;
         }
          .material-symbols-outlined {
            transform: translate(606px,-6px);
            font-size: 45px;
           }
           #svg{ 
            margin-left: 32%;
            width: 48px;
           }
           #btn {
             margin-left: 11%;
            HEIGHT: 65%;
           }
           pre{
            font-size: 106.5%;
           }
           #totale {
           margin-left: -25%;
            margin-top: 18%;
           }
           input{
            width: 100%;
           }
           #span {
            top: 8%;
            right: 55px;
           }
           .main_container{
            grid-template-columns: repeat(1, 0.6fr);
           }
           #cart-content {
            width: 277px;
           }
            div#middle {
              MARGIN-top: 83%;
               margin-left: -430px;
           }
           img  {
            width: 30px;
            height: 30px;
            margin: 12px;
         }
         h1{
            font-size: 38px;
            width: 70%;
         }
         #body {   
           background-position: 27%;
             }
             .main_container {
              width: 66vw;
              height: AUTO;
            margin-left: -21px;
            margin-top: -13px;
           MARGIN-BOTTOM: 18%;
         background-color: transparent;
           box-shadow: NONE;
              }
              .cardbox {
          height: 88%;
          margin-left: 8%;
          width: 85%;
          margin-top: 17px;
          margin-bottom: 7%;
              }
              #image {
              width: 84%;
              height: 81PX;
              }
              #name {
                  font-size: 20px;
              }
              #prix {
                font-weight: bold;
                font-size: 11px;
                margin-left: 2%;
                width: 29%;
                padding: 0%;
            }
              #cn{
                width: 261px;
                margin: 9px;
            height: auto;
          }
          iframe{
            width: 250px;
          }
          form{
            justify-content: center;
          }
          #hrs{
            margin: 9px;
          }
          #menuA2{
            width: 99%;
           margin: -29px 0px 34px;
          }

          #txt{
            margin: -43px 0px 7px 44px;
          }
          #p2{
            font-size:10px;
          }
          #img_div{
            width: 41px;
            height: 39px;
            margin: 3px;
          }
          #div1_img{
            width: 45%;border-radius: 50%;
            border-width: 2PX;
            border-style:solid ;
            border-color:#c66922;
            MARGIN-RIGHT: -8px;
          }
          #div_img-txt{
            width: 48%; margin-right: 1%;
            background-color:#2b384a;
            border-radius: 30px;
            POSITION: relative;
          }
          #copy{
            font-size: 12px;
          }
        
        }

        @media screen and (width: 360px){
          #cart-content {
            width: 350px;
          }
          #span {
            right: 60px;
          }
          input {
          margin-left: 0%;
         font-size: 15px;
          margin-bottom: 4%;
         width: 100%;
          }
          #totale{
            margin: 7% 0 0 -9%;
            FONT-SIZE: 18PX;
         }
          #listCart {
           width: 95%;
          margin-left: 2%;
          }
         #listimg{
          width: 37px;
          height: 37px;
         margin: 6px;
          }
          #copy {
            font-size: 15px;
          }
          .material-symbols-outlined {
                transform: translate(693px,15px);
                FONT-SIZE: 41px;
            }
          h1{
            font-size: 49px;  
              MARGIN-TOP: 30%;
          MARGIN-LEFT: 67%;
         }
          #cn{
            width: 345px;
            margin: 2px;
            height: auto;
          }
          #menuA2{
            display:flex; 
            width:94%; 
            margin: -29px 15px 34px;
          }

          #txt{
            margin: 7px 0px 0px 12px;
          }
          #p2{
            font-size:12px;
          }
          #img_div{
            width: 45px; height: 41px;     margin: 7px 7px 6px 5px;
          }
          #div1_img{
            width:41%; border-radius: 50%;
            border-width: 2PX;
            border-style:solid ;
            border-color:#c66922;
          }
          #div_img-txt{
            display:flex; 
            width:47%; margin-right: 3%;
            background-color:#2b384a;
            border-radius: 30px;
          }
            div#middle {
                margin-top: -114%;
                 margin-left: -123%;
           }
           img  {
            width: 38px;
            height: 38px;
            margin: 18px;
           }
          #body{
            background-position: 26%;
               height: 672px;
          }

          .main_container {
            width: 57vw;
            margin-left: -20px;
           margin-top: -13px;
           MARGIN-BOTTOM: 11%;
           background-color: transparent;
           box-shadow: NONE;
           HEIGHT: AUTO;
              }
              .cardbox {
          height: 88%;
          margin-left: 8%;
          width: 85%;
          margin-top: 17px;
          margin-bottom: 9%;

              }
              .image{
                height:122px;
                width: 84%;
              }
          
        }
        @media screen and (min-width: 375px){
          #cart-content {
            width: 350px;
          }
          #span {
          right: 56px;
          }
          input{
          margin-left: 0%;
          font-size: 15px;
          margin-bottom: 4%;
           width: 100%;
          }
          #listimg {
           width: 50px;
           height: 50px;
           margin: -2px;
              }
              #btt, #bttn{
             width: 83%;
              }
          #listCart {
           width: 95%;
          margin-left: 2%;
         }
  
          #totale{
            margin: 9% 0 0 -11%;
           font-size: 18px;

         }

          iframe{
          margin-bottom: 3%;
          }
          #copy {
          font-size: 16px;
         }
          #cn{
            width: 345px;
            margin: 10px;
            height: auto;
          }
          #menuA2{
            width: 97%;
            margin: -29px -15px 34px 9px;
          }

          #txt{
            margin-left: 42%;
          MARGIN-TOP: -30%;
          WIDTH: 45%;
          margin-bottom: 7%;
          }
          #p2{
            font-size:12px;
          }
          #img_div{
            width: 47px;
             height: 43px; 
          }
          #div1_img{
            width:41%; border-radius: 50%;
            border-width: 2PX;
            border-style:solid ;
            border-color:#c66922;
          }
          #div_img-txt{
            background-color: #2b384a; 
            border-radius: 30px;
            width: 46%;
              margin-right: 3%;
          }
            div#middle {
                padding-top: 10%;
                padding-bottom: 95%
           }
           .material-symbols-outlined{
            transform:translate(686px,-622px);
            FONT-SIZE: 50px;
          }
           img   {
            width: 40px;
            height: 40px;
            margin: 19px;
         }
         h1{
            font-size: 49px;  
              MARGIN-TOP: -85%;
          MARGIN-LEFT: 67%;
         }
         #body {   
           background-position: 26%;
             }
           .main_container {
            width: 57vw;
            margin-left: -26px;
           margin-top: -6px;
           MARGIN-BOTTOM: 10%;
         background-color: transparent;
           box-shadow: NONE;
           height:auto;
              }
              .cardbox {
          height: 88%;
          margin-left: 8%;
          width: 85%;
          margin-top: 17px;
          margin-bottom: 13%;

              }
        }
        @media screen and (min-width: 390px){
          #span {
          right: 57px;
          TOP: 9px;
          }
          #menuA2{width: 94%;
           margin: -29px 15px 34px;
          }
          #div_img-txt {
          width: 46%;
          margin-right: 3%;
          background-color: #2b384a;
          border-radius: 30px;
          POSITION: relative;
          }
          #div1_img {
            width: 41%;
            border-radius: 50%;
            border-width: 2PX;
            border-style: solid;
             margin-top: 2%;
          }
            div#middle {
                MARGIN-TOP: 34%;
                margin-left: -3%;
           }
           img   {
            width: 40px;
            height: 40px;
            margin: 19px;
         }
         #txt {
          WIDTH: 48%;
         }
         #copy{
                font-size: 17px;
              }
         .material-symbols-outlined {
              transform: translate(280px,-398px);
            }
         h1{
            font-size: 53px;
                MARGIN-TOP: -115%;
                MARGIN-LEFT: 30%;
         }
         #body {   
           background-position: 26%;
               height: 694px;

             }
             form{
          margin-left: 5px;
         }
           .main_container {
            width: 57vw;
            height: auto;
             margin-left: -21px;
           margin-top: -13px;
           MARGIN-BOTTOM: 10%;
           background-color: transparent;
           box-shadow: NONE;
              }
              .cardbox {
          height: 88%;
          margin-left: 8%;
          width: 85%;
          margin-top: 17px;
          margin-bottom: 13%;

              }
              .image{
                height:122px;
                width: 84%;
              }
              .navbar-toggler {
            WIDTH: 21%;
             HEIGHT: 54px;}
        }

        @media screen and (min-width: 414px){
          #listCart {
          width: 89%;
          }
          #span {
           right: 159px;
               }
           #menuA2{
            margin: -29px 2px 34px 19px;
          }
          #event{   
          text-align: center;
          }
          #div1_img {
          width: 39%;
          }
          #img_div {
            margin: 5px 7px 7px 3px;
               }
          .material-symbols-outlined {
            transform: translate(292px,-422px);
          }
            div#middle {
              padding-top: 10%;
                padding-bottom: 100%;
           }
           img   {
            width: 40px;
            height: 40px;
            margin: 19px;
         }
        
         h1{
            font-size: 60px;
            width: 75%;
            margin: -118% 0 0 25%;
         }
         #copy {
          font-size: 18.1px;
         }
         #body {   
           background-position: 26%;
              height: 787px;

             }
           .main_container {
            width: 57vw;
           height: auto;
           margin-left: -12px;
           margin-top: -13px;
           MARGIN-BOTTOM: -9%;
           background-color: transparent;
           box-shadow: NONE;
              }
              .cardbox {
          height: 81%;
          margin-left: 8%;
          width: 85%;
          margin-top: 17px;
          margin-bottom: 11%;

              }
              .image{
                height:122px;
                width: 84%;
              }
        }

        @media screen and (min-width: 412px){
          #prix {
            font-size: 16px;
          }
          #listimg{ 
           width: 34px;
           height: 34px;
           margin: 10px;
          }
           #listCart {
            width: 94%;
          margin-left: 1%;
          }
            .main_container {
            margin-left: -24px; 
            MARGIN-BOTTOM: 12%;
          }
          div#middle {
          MARGIN-TOP: 22%;
          }
          #event{
            text-align: center;
          }
          #copy {
            font-size: 18px;
         }
         iframe {
         width: 300px; 
         }
         #body {
         background-position: 32%;
         height: 729px;
          }
          #div1_img {
            width: 58px;
            margin-left: 6px;
            margin-top: 3%;
          }
          #span {
          right: 57px;
          TOP: 9px;
          }
          #h1{
            MARGIN-TOP: -106%;
          }
        }

        @media screen and (min-width: 540px){
          .content {
           margin-top: -4%;
           HEIGHT: 88%;
          }
          #prix{
            width: 27%;
          }
          form{
            justify-content: center;
          }
          #menuA2 {
            margin: -29px 26px 34px;
          }
          #img_div {
          width: 65px;
          height: 59px;
          margin: 6px;
          }
          #p2 {
         font-size: 14px;
            }
           
          .navbar-toggler {
            WIDTH: 54px;
           HEIGHT: 39px;
            }
            div#middle {
              margin-top: -95%;
                padding-left: 34%;
           }
           .material-symbols-outlined {
            transform: translate(225px,-96px);
           }
           h1 {
            MARGIN-TOP: -45%;
            MARGIN-LEFT: 11%;
            font-size: 54px;
           }
           #body {
            background-position: 34%;
             height: 675px;
          }
           #txt {
            margin-left: 42%;
            MARGIN-TOP: -30%;
            WIDTH: 45%;
            margin-bottom: 9%;
                }
           #div1_img {
            width: 81px;
            margin-left: 6px;
            margin-top: 1%;
          }     
           
           .main_container {
            margin-left: -10%;
            width: 43vw;
            height: auto;
            MARGIN-BOTTOM: 10%;
           }
           .box-close {
            TRANSFORM: TRANSLATEy(-218px);
            margin-left: 44%;
           }
           #berger{
            margin-left: 9%;
           }
        }

        @media screen and (min-width: 768px) {
          #listimg{ 
            width: 50px;
            height: 50px;
            margin: 25px;
          }
            #listCart {   
               width: 104%;
             margin-left: -5%;
              }
              #totale {
              margin: 9% 0 0 -23%;
              }
          .content {
           margin-top: -42%;
           HEIGHT: 63%;
           width: 339px;
           }
          .main_container {
             margin-left: -68px;
             grid-template-columns: repeat(2, 0.6fr);
             width: 37vw;
             height: auto;
          }
          .box-close {
            TRANSFORM: TRANSLATEy(-286px);
            margin-left: 35%;
           }
           #span {
            right: 59px;
           TOP: 8px;
           }
          #event{
            WIDTH: 98%;
          }
          iframe {
           width: 367px;
           }
          #map{
          text-align: left; 
           margin-left: 19px;
          }
          #hrs{
            transform: translatey(-216px);
            MARGIN-LEFT: 438px;
            MARGIN-BOTTOM: 1%;
            text-align: center;
            width: 36%;
          }
         
          form{
            margin-top: -100px;
            justify-content: center;
          }
          #div_img-txt {
            width: 46%;
          }
          #p2 {
           font-size: 16px;
           }
           #txt P{
            FONT-SIZE: 18px;
           }
          #div1_img {
            width: 26%;
            margin-left: 8px;
            margin-top: 1%;
         }
          #img_div {
          width: 64px;
          height: 63px;
          margin: 7px;
          }
          #menuA2 { 
            margin: -29px 43px 34px;
            width: 93%;
          }
          .material-symbols-outlined {
            transform: translate(696px,-751px);
                  }
          #body {
             height: 683px;
            }
          h1 {
                MARGIN-TOP: 4%;
              MARGIN-LEFT: 35%;
           }
         .navbar-toggler {
            WIDTH: 54px;
           HEIGHT: 39px;
            }
            div#middle{
                padding-top: 8%;
                padding-bottom: 60%;
            }
            img {
            width: 50px;
            height: 50px;
            margin: 25px;
         }
         h1{
            font-size: 59px;
            width: 85%;
         }
          
            header form{
                justify-content: center;
            }
            ul li{
                justify-content: center;
            }
            #txt {
            margin-left: 37%;
            MARGIN-TOP: -21%;
           WIDTH: 45%;
          margin-bottom: 7%;
            }
        }

        @media screen and (min-width: 820px) {
          #listimg{ 
             width: 50px;
            height: 50px;
            margin: 3px 30px 21px 26px
          }
          #span{
            right: 58px;
            TOP: 10px;
          }
          #txt {
            margin-left: 35%;
             MARGIN-TOP: -21%;
           WIDTH: 44%;
            margin-bottom: 5%;
           text-align: left;
          }
          #listCart {
            width: 100%;
         margin-left: -6%;
         MARGIN-TOP: 3%;
         }
          #txt p {
          font-size: 22px;
         }
          #hrs{
            transform: translatey(-216px);
            MARGIN-LEFT: 439px;
            width: 37%;
          }
          iframe {
           width: 367px;
           }
          #img_div {
           width: 65px;
           height: 60px;
           margin: 7px;
          }
          #div1_img {
            width: 25%;
            MARGIN-LEFT: 5px;
           }
           #p2 {
           font-size: 20px;
         }
          #menuA2 {
            width: 95%;
            margin: -29px 35px 34px;
          }
          .material-symbols-outlined {
          transform: translate(639px,-646px);
          FONT-SIZE: 58px;
         }
            div#middle{
                margin-top: 10%;
               padding-left: 3%;
          }
           img   {
            width: 50px;
            height: 50px;
            margin: 3px 30px 21px 26px
         }
         .navbar-toggler {
            WIDTH: 54px;
           HEIGHT: 39px;
            }
            h1{
              MARGIN-TOP: -91%;
             MARGIN-LEFT: 56%;
          font-size: 61px;
         }
         #body{
            background-position: 19%;
             height: 694px;
         }
         .main_container {
          margin-left: -9%;
           width: 35vw;
           height: auto;
           grid-template-columns: repeat(2, 0.6fr);
         MARGIN-BOTTOM: 7%;
         }
         .cardbox {
          margin-bottom: 10%;
          }
          #event{
            MARGIN: 1%;
          }
          #totale{    margin: 9% 0 0 -24%;}
          #div_img-txt {
           width: 46%;
         }
         #btn {
          margin-left: 12%;}
        }

        @media screen and (width: 912px){
          #span {
          right: 58px;
          TOP: 10px;
           }
           .image {
             height: 190px;
              }
          .material-symbols-outlined {
            transform: translate(225px,-96px); 
                  }
                  .main_container {
                    margin-left: -78px;
                    height: 100%;
               }
               #div1_img {
                width: 22%;
                MARGIN-LEFT: 12px;
           }
           #txt {
            MARGIN-TOP: -20%;
           }
           .material-symbols-outlined {
           transform: translate(682px,-754px);
           FONT-SIZE: 58px;
           }
        }

        @media screen and (min-width: 920px) {
         #event{
          widtH: 100%;
         }
         #map {
          text-align: left;
          margin-left: 39px;
         } 
         #menuA2 {
          margin: -29px 70px 34px;
         }
         #img_div {
         width: 67px;
         height: 61px;
         margin: 8px;
           }
           #div1_img {
           width: 24%;
           }
           .material-symbols-outlined {
           transform: translate(682px,-742px);
           }
        }

        @media screen and (min-width: 1024px) {
          #listCart {
             margin-left: 0%;
         }
          #menuA2 {
            text-align: center;
            width: 94%;
          }
            div#middle{
                margin-top:-71%;
                padding-top: 10%;
                padding-bottom: 60%;
                MARGIN-LEFT: 63%;
            }
            #span {
           right: 76px;
           TOP: 20px;
            }
            #img1 {
           width: 72%;
           margin: auto;
           transition: max-width 1s;
            height: 82%;
           }
           .image a {
            width: 100%;
           height: 123%;
           }
           .image {
           height: 134px;
            width: 90%;
           }
            #body {
          height: 650px;
         }
         #div_img-txt {
          width: 35%;
         }
         #div1_img {
          width: 25%;
          MARGIN-LEFT: 5px;
         }
         #txt {
           MARGIN-TOP: -17%;
           WIDTH: 44%;
           margin-bottom: 4%;
          }
         #hrs{
          transform: translatey(-230px);
          MARGIN-LEFT: 740px;
         }
         iframe{
          width: 50%;
         }
         #prix{
         font-weight: bold;
         font-size: 16px;
         padding-left: 1%;
         }
         #name{
         font-weight: bold;
         font-size:23px;
         }
         li {
          margin-bottom: 10%;
          }
         .cardbox{
          height: 115%;
          width: 65%;
          margin-top: 0px;
          margin-bottom: 4%;
         }
         .main_container{
         margin-top: 15px;
         margin-left: -110px;
         height: 34vh;
         MARGIN-BOTTOM: 12%;
          }
         .text{
         display: flex;
         justify-content: center;
         align-items: center;
          }
          h1 {
          font-size: 52px;
          width: 66%;
          MARGIN-TOP: -87%;
          MARGIN-LEFT: 5%;
          }
          .material-symbols-outlined{
            transform: translate(236px,-332px);
            FONT-SIZE: 50px;
          }
        }
    </style>
</head>

<body class="body">
   <div id="body" >
     <header id="header" style="height:20% !important;" >
        <nav class="navbar navbar-expand-lg navbar navbar-light " >
       
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
                 <ul class="navbar-nav" class="row d-fl" style="text-align: center !important;">
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold !important;  font-family: 'Lobster', cursive; color:#c66922;" href="#all">Menu</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold !important; font-family: 'Lobster', cursive; color:#c66922;" href="#footer">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold !important;font-family: 'Lobster', cursive; color:#c66922;" href="#event">Event</a>
                    </li>
                    <li class="nav-item">   
                     
                    </li>
                </ul>
            </div>
           <a class="navbar-brand" href="#" style="color:transparent">
                   <div class="icon-cart" >
                        <svg id="svg" style="width:56px;  transform: scaleX(-1); color: #c66922;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
                        </svg>
                       <span id="span">0</span>
                     </div>
        </a>  
            
        </nav>
     </header>

     <br>

     <div  id="middle" >
       <div class=" d-flex justify-content-center" > <h1> Maiky pizza</h1></div>
       <span class="material-symbols-outlined">keyboard_double_arrow_down </span>
     </div>
   </div>

<br><br>



<div id="all" >
   <h3 style="margin: -30px 0 44px 0px; TEXT-ALIGN:CENTER; font-family: 'Lobster', cursive;">Our menu</h3>

  <div id="menuA2" >
     <button id="div_img-txt"onclick="func('piza1','piza2')">
       <div id="div1_img" > <img id="img_div" src="pizza.png"/> 
       </div>
       <div id="txt" >
      <P style="color:white;     margin-bottom: 0px;">Pizza</P>
      <p id="p2" style="color:white;    margin-bottom: 0px; ">Sauce rouge</p> 
       </div>
    </button>
 
  
    <button id="div_img-txt" onclick="func('piza2','piza1')">
       <div id="div1_img"> <img id="img_div" src="pizza.png"/> 
       </div>
       <div id="txt">
         <P style="color:white;     margin-bottom: 0px;">pizza</P>
         <p id="p2"style="color:white;    margin-bottom: 0px; ">Boisée</p> 
        </div>
    </button>
  </div>

    <div id="piza1" class="main_container" style="display:none;
       width: 100%;">
        <div class="cardbox">
        <div class="image"><a href="info.php"> <img class="image" id="img1"  src="jus.png" ></a></div>
        <p class="text" id="name"> Pizza boisee</p>
         <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="1" data-name="pizza boissee" data-price="500" data-image="jus.png" id="prix">500da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="1" data-name="pizza boissee" data-price="500" data-image="jus.png" id="prix">500da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="1" data-name="pizza boissee" data-price="500" data-image="jus.png" id="prix">500da</button>
            
          </div>
        </div>
        <div class="cardbox">
        <div class="image"><a href="info.php">  <img class="image" id="img1"  src="jus.png" ></a></div>
          <p class="text" id="name"> Pizza normal</p>
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="2" data-name="pizza normal" data-price="100" data-image="pizza.png" id="prix">100da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="2" data-name="pizza normal" data-price="100" data-image="pizza.png" id="prix">100da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="2" data-name="pizza normal" data-price="100" data-image="pizza.png" id="prix">100da</button>
         
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <p class="text" id="name"> Canette</p>
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Jus 30cl</p>
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
    </div>
    <div id="piza2" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="pizza.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p>
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Jus 1L</p> 
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text"id="name"> Canette</p>
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Jus 30cl</p> 
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
    </div>

   <div id="menuA2" >
     <button id="div_img-txt"onclick="func('piza3','tacos')">
       <div id="div1_img" > <img id="img_div" src="pizza.png"/> 
       </div>
       <div id="txt" >
      <P style="color:white;     margin-bottom: 0px;">Pizza</P>
      <p id="p2" style="color:white;    margin-bottom: 0px; ">Sauce rouge</p> 
       </div>
    </button>
 
  
    <button id="div_img-txt" onclick="func('tacos','piza3')">
       <div id="div1_img"> <img id="img_div" src="pizza.png"/> 
       </div>
       <div id="txt">
         <P style="color:white;     margin-bottom: 0px;">pizza</P>
         <p id="p2"style="color:white;    margin-bottom: 0px; ">Boisée</p> 
        </div>
    </button>
  </div>

    <div id="piza3" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
        <div class="image"><a href="info.php"><img class="image" id="img1"  src="jus.png" > </a> </div>
        <p class="text" id="name"> Pizza boisee</p>
         <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="1" data-name="pizza boissee" data-price="500" data-image="jus.png" id="prix">500da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="1" data-name="pizza boissee" data-price="500" data-image="jus.png" id="prix">500da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="1" data-name="pizza boissee" data-price="500" data-image="jus.png" id="prix">500da</button>
            
          </div>
        </div>
        <div class="cardbox">
        <div class="image"><a href="info.php"><img class="image" id="img1"  src="jus.png" > </a></div>
          <p class="text" id="name"> Pizza normal</p>
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="2" data-name="pizza normal" data-price="100" data-image="pizza.png" id="prix">100da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="2" data-name="pizza normal" data-price="100" data-image="pizza.png" id="prix">100da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="2" data-name="pizza normal" data-price="100" data-image="pizza.png" id="prix">100da</button>
         
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <p class="text" id="name"> Canette</p>
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Jus 30cl</p>
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
    </div>
    <div id="tacos" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="pizza.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p>
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Jus 1L</p> 
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text"id="name"> Canette</p>
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Jus 30cl</p> 
          <div style=" padding: 4%; text-align: center;">
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
    </div>
   

  <div id="menuA2" >
     <button id="div_img-txt" onclick="func('fajitas','Soufflee')">
       <div id="div1_img" > <img id="img_div" src="fajitas.png"/> 
       </div>
       <div id="txt" >
      <P style="color:white;     margin-bottom: 0px;">fajitas</P>
      <p id="p2" style="color:white;    margin-bottom: 0px; ">Check them</p> 
       </div>
    </button>
 
  
    <button id="div_img-txt" onclick="func('Soufflee','fajitas')">
       <div id="div1_img"> <img id="img_div" src="souflee.png"/> 
       </div>
       <div id="txt">
         <P style="color:white;     margin-bottom: 0px;">Soufflee</P>
         <p id="p2"style="color:white;    margin-bottom: 0px; ">Check them</p> 
        </div>
    </button>
  </div>

    <div id="fajitas" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="pizza.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
    </div>
    <div id="Soufflee" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="pizza.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
    </div>

  <div id="menuA2" >
     <button id="div_img-txt" onclick="func('Gratine','Boissons')">
       <div id="div1_img" > <img id="img_div" src="gratin.png"/> 
       </div>
       <div id="txt" >
      <P style="color:white;     margin-bottom: 0px;">Gratine</P>
      <p id="p2" style="color:white;    margin-bottom: 0px; ">Check them</p> 
       </div>
    </button>
 
  
    <button id="div_img-txt" onclick="func('Boissons','Gratine')">
       <div id="div1_img"> <img id="img_div" src="drinks.png"/> 
       </div>
       <div id="txt">
         <P style="color:white;     margin-bottom: 0px;">Boissons</P>
         <p id="p2"style="color:white;    margin-bottom: 0px; ">Check them</p> 
        </div>
    </button>
  </div>

     <div id="Gratine" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="Gratine.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
     </div>

     <div id="Boissons" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="pizza.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
     </div>
  
  <div id="menuA2" >
     <button id="div_img-txt" onclick="func('Gauffre','mpancake')">
       <div id="div1_img" > <img id="img_div" src="gaufre.png"/> 
       </div>
       <div id="txt" >
      <P style="color:white;     margin-bottom: 0px;">Gauffre</P>
      <p id="p2" style="color:white;    margin-bottom: 0px; ">Check them</p> 
       </div>
    </button>
 
  
    <button id="div_img-txt" onclick="func('mpancake','Gauffre')">
       <div id="div1_img"> <img id="img_div" src="mpancake.png"/> 
       </div>
       <div id="txt">
         <P style="color:white;     margin-bottom: 0px;">pancake</P>
         <p id="p2"style="color:white;    margin-bottom: 0px; ">Mini </p> 
        </div>
    </button>
  </div>

    <div id="Gauffre" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="gaufre.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
    </div>

    <div id="mpancake" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="mpancake.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
       </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
          </div>
    </div>

  <div id="menuA2" >
     <button id="div_img-txt" onclick="func('Donuts','Cornet')">
       <div id="div1_img" > <img id="img_div" src="Mdonut.png"/> 
       </div>
       <div id="txt" >
      <P style="color:white;     margin-bottom: 0px;">Donuts </P>
      <p id="p2" style="color:white;    margin-bottom: 0px; ">Mini</p> 
       </div>
    </button>
 
  
    <button id="div_img-txt" onclick="func('Cornet','Donuts')">
       <div id="div1_img"> <img id="img_div" src="conret.png"/> 
       </div>
       <div id="txt">
         <P style="color:white;     margin-bottom: 0px;">Cornet</P>
         <p id="p2"style="color:white;    margin-bottom: 0px; ">Check them</p> 
        </div>
    </button>
  </div>

    <div id="Donuts" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="pizza.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
    </div>

    <div id="Cornet" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="Cornet.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
          </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
    </div>

  <div id="menuA2" >
     <button  onclick="func('Pancake','Jus')" id="div_img-txt">
       <div id="div1_img" > <img id="img_div" src="pancak.png"/> 
      </div>
       <div id="txt" >
      <P style="color:white;     margin-bottom: 0px;">Pancake</P>
      <p id="p2" style="color:white;    margin-bottom: 0px; ">Check them</p> 
      </div>
      </button>
 
  
    <button  onclick="func('Jus','Pancake')" id="div_img-txt">
       <div id="div1_img"> <img id="img_div" src="jus.png"/> 
       </div>
       <div id="txt">
         <P style="color:white;     margin-bottom: 0px;">Jus</P>
         <p id="p2"style="color:white;    margin-bottom: 0px; ">Check them</p> 
        </div>
    </button>
  </div>
   
    <div id="Pancake" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="pancak.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="pancak.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
          </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
           </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
    </div>
  
    <div id="Jus" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
    </div>


  <div id="menuA2" >
     <button onclick="func('Frapes','Smoth')" id="div_img-txt" >
       <div id="div1_img" > <img id="img_div" src="frape.png"/> 
       </div>
       <div id="txt" >
        <P  style="color:white;     margin-bottom: 0px;">Frapes</P>
        <p id="p2" style="color:white;    margin-bottom: 0px; ">Check them</p> 
       </div>
      </button>
 
  
    <button id="div_img-txt" onclick="func('Smoth','Frapes')">
       <div id="div1_img"> <img id="img_div" src="sm.png"/> 
       </div>
       <div id="txt">
         <P  style="color:white;     margin-bottom: 0px;">Smothie</P>
         <p id="p2"style="color:white;    margin-bottom: 0px; ">Check them</p> 
        </div>
    </button>
  </div>

    <div id="Frapes" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="frape.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="frape.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
    </div>
  
    <div id="Smoth" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="sm.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
    </div>


   <div id="menuA2">
     <button id="div_img-txt"onclick="func('milkshake','Dessert')">
       <div id="div1_img" > <img id="img_div" src="milkshake.png"/> 
       </div>
       <div id="txt" >
      <P style="color:white;     margin-bottom: 0px;">Milkeshake</P>
      <p id="p2" style="color:white;    margin-bottom: 0px; ">Check them</p> 
       </div>
      </button>
  
     <button id="div_img-txt" onclick="func('Dessert','milkshake')">
       <div id="div1_img"> <img id="img_div" src="des.png"/> 
       </div>
       <div id="txt">
         <P style="color:white;     margin-bottom: 0px;">Dessert</P>
         <p id="p2" style="color:white;     margin-bottom: 0px;" >Check them</p> 
        </div>
      </button>
   </div>

  

    <div id="milkshake" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="frape.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="frape.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
    </div>
  
    <div id="Dessert" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="sm.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
    </div>


    <div id="menuA2">
      <button id="div_img-txt" onclick="func('Verrine','Menu')"> 
        <div id="div1_img" > <img id="img_div" src="verine.png"/> 
        </div>
        <div id="txt" >
         <P style="color:white;     margin-bottom: 0px;">Verrine</P>
         <p id="p2" style="color:white;     margin-bottom: 0px;" >Check them</p> 
        </div>
      </button>
    

       
      <button id="div_img-txt" onclick="func('Menu','Verrine')"> 
        <div id="div1_img"> <img id="img_div" src="tacos.png"/> 
        </div>
        <div id="txt">
          <p style="color:white;     margin-bottom: 0px;"> Menu</p>
          <p id="p2" style="color:white;     margin-bottom: 0px;" >etudiants</p>
       </div>
      </button>
     

    </div>

     <div id="Verrine" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="verine.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="pancak.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
     </div>
  
     <div id="Menu" class="main_container" style="display:none;   width: 100%;">
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
         </div>
        <div class="cardbox">
          <div class="image"> <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a> </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>    </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
        <div class="cardbox">
          <div class="image">
          <a href="info.php"> <img id="img1"  src="jus.png" alt="" ></a>  </div>
          <P class="text" id="name"> Boisson 1L</p> 
          <div>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
            <button class="addCart" type="button" onclick="adCart(this)"data-ido="3" data-name="canette" data-price="150" data-image="jus.png" id="prix">150da</button>
          </div>
        </div>
     </div>


  <div id="event">
    <h3 style="    margin: 31px 0 -9px 0px; TEXT-ALIGN:CENTER; font-family: 'Lobster', cursive;">Our Events</h3>
    <img id="cn" src="cn1.png" alt="">
    <img id="cn" src="cn2.png" alt="">
  </div>

 <footer id="footer" style="background-color: #2b384a;PADDING: 2%;color:white;">
   <h3 style="     margin: 10px 0 20px 0px; TEXT-ALIGN:CENTER; font-family: 'Lobster', cursive;">About</h3>
   <div id="map" >
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12986.041125590915!2d6.1570379!3d35.5410978!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f4118a3a131667%3A0xb9d74d61145310ba!2sMaiky%20Pizza%20Batna!5e0!3m2!1sfr!2sdz!4v1693157717421!5m2!1sfr!2sdz" title="maikey ,batna05000" aria-label="maikey ,batna05000"  width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
   </iframe>
   </div>  
   
   <div id="hrs" style="text-align:center; MARGIN-BOTTOM: 1%;     font-size: 21px;">
    <p style="font-family: 'Lobster', cursive; margin-bottom: 0rem;">Opening hours</p>
    <p style="font-family: 'Lobster', cursive; margin-bottom: 0rem;">everyday 11:00-22:30</p>
    <p style="font-family: 'Lobster', cursive; margin-bottom: 0rem;">Friday 16:00-22:30</p>
   </div>
   <form class="row d-flex " >
                    <spam ><a href="tel: "><img src="telephon.png"></a></spam>
                   <spam ><a href="https://goo.gl/maps/HZPZV47VcN9Nm8ue7" target="blank"> <img src="locat.png"> </a></spam> 
                   <spam ><a href="https://www.instagram.com/tacoshousefamily.batna/" target="blank"> <img  src="IG.png"></a>  </spam>
                   <spam ><a href="https://www.facebook.com/MaikyPizza.Batna/" target="blank"> <img src="fb.png"></a></spam>
                 <!--<spam ><a href="revue.php" ><img  id="share" src="remove-from-cart.png" style="margin-left:-9%; cursor: pointer;"> </a></spam>-->
                </form>
   <div id="copy" >
    <p >copyright @ Maikey2023. Tous droits sont reservé</p>
   </div>
 </footer>





 <div id="cart-content">
 <section>
 <div style="    background: linear-gradient(45deg,  #ff6e00e0, transparent); height: 3rem;">
  <h3 style="line-height: 1.8; margin-left: 2%; font-family: 'Lobster', cursive; color: white;">Your order</h3>
 </div>
 </section>

 <table id="listCart">
  
 </table>

 <div id="btt" >
  <button id="btn" onclick="closse()" class="close">close</button>
  <button id="btn" onclick="next()">Next</button>
 </div>
 

 <form method="POST" id="form" style="display:none; margin-top: 5%;" >
    <input  id="client" type="text" name="client" placeholder="Nom">
    <input  id="numero"   type="text" name="numero" placeholder="Numero">
    <input id="addr"  type="text" name="addr" placeholder="Addresse">
      
 
 <div id="bttn">
  <button id="btn" onclick="closse()" class="close">close</button>
  <input  id="btn" class="btnnn" onclick="tt()" name="array" type="submit" value="checkOut"/>
 </div>
 </form>
 
 <P style="text-align: center; TOP: 78%;  POSITION: sticky; font-family: 'Lobster', cursive; PADDING-TOP: 9%; FONT-SIZE: 23px;  color: black; font-weight: 500;  margin-bottom: 1%;" id="pp"> </P>
 

  <?php
   $date=date('d/m/Y');
 $sql="SELECT * FROM commande WHERE status='0'";
 $result=mysqli_query($con,$sql);
 while($donnees= mysqli_fetch_array($result))			
     {
      $n=$donnees['n'];    
      $n=$n+1;
     }
     
     
     @$array = json_decode($_POST['array'], true);
 
     if (is_array($array) || is_object($array)) {
  foreach  ($array as $item) {
  $client = $item['client'];   
  $numero =$item['number'];  
  $addr = $item['address']; 
  $name = $item['name']; 
  $price = $item['price']; 
  $total=($item['price']*$item['quantity'])+$total;
  $total=$total.' '.'da';
  $qnt=$item['quantity'];
  @$com=$com.$name.'('.$qnt.')'.'/'.$price.'da'.'<br>' ;

 
 }}

  

     if((isset( $_POST['array']))   ){  
    $sql="INSERT INTO `commande` VALUES('$n','$com','$total','$client','$addr','$numero','$date','0')"; 
    $result=mysqli_query($con,$sql);
     }  
 ?>
 
</div>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="JS_TACOS.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>