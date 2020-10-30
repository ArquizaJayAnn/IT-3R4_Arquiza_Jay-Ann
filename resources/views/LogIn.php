<!DOCTYPE html>
<html>
    <head>
        <title>
        LogIn || Spoon & Fork
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
            body{
                background-image: url("bg.jpg");
                background-size: 100%;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-origin: content-box;
            }
            .container1{
                width: auto;
                height: auto;
            }
            .container2{
                background: grey;
                width: 500px;
                height: 500px;
                background-position: left;
                opacity: 0.8;
                margin-left: 100px;
                margin-top: 5px;

            }
            h1{
                text-align: center;
                color: oldlace;
                font-style: oblique;
                font-size: 50px;
                text-size-adjust: none;
                margin-bottom: 0;
            }
            .container2 img{
                width: 50%;
                margin-left: 125px;
                margin-top: 20px;
            }

            hr {
                margin-top: 30px;
                overflow: visible; /* For IE */
                height: 30px;
                border-style: solid;
                border-color: black;
                border-width: 1px 0 0 0;
                border-radius: 20px;
            }
            hr:before {
                display: block;
                content: "";
                height: 30px;
                margin-top: -31px;
                border-style: solid;
                border-color: black;
                border-width: 0 0 1px 0;
                border-radius: 20px;
            }   
            form{
                margin-left: 50px;
            }
            label{
                font-size: 25px;
                font-style: oblique;
                color: mintcream;
            }
            input{
                width: 300px;
                height: 40px;
                display: block;
                margin-left: 20px ;
                font-size: 20px;
            }
            input.button{ 
                width: 100px;
                border-radius: 10px;
                background-color: red;
                color: white;
                font-size: 30px;
                box-shadow: 0 7px 2px 0 black;
                float: right;
                margin-right: 20px ;
                margin-top: 25px;
            }
            input.button:hover {
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            }
        </style>

    </head>
<body>
    <div class="container1">
        <h1>Hunger Free</h1>
            <div class="container2">
                <img src="logo.png ">
                <hr>
                    <div class="login">
                        <form action="validate" method="post">
                            <div class="formgroup">
                                <label>Username : </label>
                                 <input type="text" name="username"  placeholder="Enter username" required>
                            </div>
                            <div class="formgroup">
                                <label>Password : </label>
                                 <input type="password" name="password"  placeholder="Enter password" required>
                            </div>
                            <div class="formgroup">
                                <input type="submit" name="login" class="button" value="Login" name="login">

                            </div>
                        </form>
                    </div>
            </div>
    </div>  
</body>



</html>