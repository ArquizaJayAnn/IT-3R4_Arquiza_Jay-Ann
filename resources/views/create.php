<!DOCTYPE html>

<html>
    <head>
        <title>
        Create || Spoon & Fork 
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
body
{
    background-image: url(bg.jpg);
    background-size: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-origin: content-box;
}
.container1{
    width: auto;
    height: auto;
}
h1{
    font-style: oblique;
    background-color: moccasin;
    padding: 10px;
    width: 98%;
    height: 50px;

}
button.creates{
   float: right;
   font-size: 20px;
   padding: 10px;
   margin-bottom: 10px;
   background-color: blanchedalmond;
   cursor: pointer;
   font-style: inherit;
   margin: 2px;
}
button.creates:hover{
    background-color: black;
    color: khaki;

}
.container2{
    background-color: oldlace;
    width: 500px;
    height: 300px;
    margin-left: auto;
    margin-right: 500px;
    margin-top: 100px;
}
form{
    margin-left: 50px;
    padding: 20px;
}
label{
    font-size: 25px;
    font-style: oblique;
    color: brown;
}
input{
    width: 300px;
    height: 40px;
    display: block;
    margin-left: 20px ;
    font-size: 20px;
}
button.add{ 
    border-radius: 10px;
    background-color: red;
    color: white;
    font-size: 30px;
    box-shadow: 0 7px 2px 0 black;
    float: right;
    margin-right: 20px ;
    margin-top: 25px;
}
button:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  }
        </style>
    </head>
    
<body>
    <div class="container1">
        <h1><button class="creates" href="Login">SIGN OUT</button>
            <button class="creates" href="web1">BACK</button>CREATE USER</h1>
            <div class="container2">

                    <div class="login">
                        <form action="create-user" method="post">
                            <div class="formgroup">
                                <label>Username : </label>
                                    <input type="text" name="username"  placeholder="Enter username" required>
                            </div>
                            <div class="formgroup">
                                <label>Password : </label>
                                    <input type="password" name="password"  placeholder="Enter password" required>
                            </div>
                            <div class="formgroup">
                                <button href ="web1" class="add">CREATE</button>

                            </div>
                        </form>
                    </div>
            </div>
    </div>  
</body>
</html>