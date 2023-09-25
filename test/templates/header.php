<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
          

            .logo{
                display: inline;
                text-align: center;
                font-size: 30px;
                font-weight: bold;
            }
            
            .btn1{
                text-align: right;
                
            }
            nav{
                background-color: cyan;
            }
            .down_bar{
                text-align: center;
            }
            .contain{
                text-align: center;
                margin-top: 150px;
                
                
            } 
            .form_topic{
                font-size: 35px;
                font-weight: bold;
            }
            .down_bar{
                margin-top: 280px;
            }
            .email_error, .title_error, .ingredients_error{
                color: red;
                font-weight: bold;
            }
            .parts{
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }
            .sub_parts{
                flex:1;
                min-width: 100px;
                background-color: #ccc; 
                height: 250px;
            }
            .pizza_title{
                text-align: center;
                margin-bottom: 15px;
                font-weight: bold;
                font-size: 30px;
            }
        </style>

        <script>
            document.querySelector(".email_value").innerHTML = "<?php $email_error ?>";
        </script>
</head>

<body>
    <nav>
        
            <div class="logo"><a href="index2.php" style="text-decoration: none;"><p class="topic">Ninja Pizza</p></a></div>
            <div  class="btn1"><button class="actual_btn1"><a href="index.php">ADD A PIZZA</a></button></div>
    </nav>


