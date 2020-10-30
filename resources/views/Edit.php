<!DOCTYPE html>


<html>

<head>
    <title> Edit || Spoon & Fork </title>
   <style>
        body{
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
        button.edit{
        float: right;
        font-size: 20px;
        padding: 10px;
        margin-bottom: 10px;
        background-color: blanchedalmond;
        cursor: pointer;
        font-style: inherit;
        margin: 2px;
        }
        button.edit:hover{
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

            <title>
                Spoon & Fork || LogIn
            </title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                
            </style>
</head>

<body>
<div class="container1">
    <h1>
        <button class="edit" href="LogIn">SIGN OUT</button>
        <button class="edit" href="web1">BACK</button>Edit Details
    </h1>

                <div class="card-body">
                    <?php
                    $id;
                    if (isset($_POST['btn_edit'])) {
                        $idSearch = $_POST['edit_id'];
                        for ($x = 0; $x < count($id); $x++) {

                            if ($id[$x]->id == $idSearch) {
                    ?>
                                <form action="update" method="post">
                                    <input type="hidden" name="idSearch" value="<?php echo $id[$x]->id; ?>">
                                    <div class="formgroup">
                                        <label>Username</label>
                                        <input type="text" name="user0name" value="<?php echo $username[$x]->username; ?>" class="form-control" placeholder="Enter username" required>
                                    </div>
                                    <div class="formgroup">
                                        <label>Password</label>
                                        <input type="text" name="password" value="<?php echo $password[$x]->password; ?>" class="form-control" placeholder="Enter password" required>
                                    </div>
                                    <div class="formgroup">
                                        <input type="submit" name="add" class="btn" value="Save" href="web1">
                                        
                                    </div>
                                </form>
                               
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
    
    </div>

</body>

<!--</html>
<html>
   
            <div class="container2">

                    <div class="login">
                        <form action="Edit" method="post">
                            <div class="Username">
                                <label>Username : </label>
                                    <input type="text" name="username"  placeholder="Enter username" required>
                            </div>
                            <div class="password">
                                <label>Password : </label>
                                    <input type="password" name="password"  placeholder="Enter password" required>
                            </div>
                            <div class="Save">
                                <button href ="web" class="add">Save</button>

                            </div>
                        </form>
                    </div>
            </div>
    </div>  
</body>
</html>
-->