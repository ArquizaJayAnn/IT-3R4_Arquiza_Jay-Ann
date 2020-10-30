<!DOCTYPE html>

<html>
    <head>
        <title>
            Spoon & Fork 
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

            table, th, td{
                border: 3px solid black; 
                background-color: oldlace;
                text-align: center;
            }

        </style>
    </head>
    
<body>
    <div class="container1">
    <form action="create" method="post">
        <h1>Spoon & Fork <button class="creates" href="Log">SIGN OUT</button>
            <button class="creates" href="create">CREATE</button></h1>
    </form>
        <table class="table" id="data" width = 98% cellspacing="0">

            <thead id="thead">
                <tr>
                    <th class="head">ID</th>
                    <th class="head">Username</th>
                    <th class="head">Password</th>
                    <th class="head">Edit</th>
                    <th class="head">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id;
                $username;
                $password;
                if (!empty($id)) {
                    for ($x = 0; $x < count($id); $x++) {
                ?>
                        <tr>
                            <td class="data"><?php echo $id[$x]->id; ?></td>
                            <td class="data"><?php echo $username[$x]->username; ?></td>
                            <td class="data"><?php echo $password[$x]->password; ?></td>
                            <td class="data">
                                <form action="edit" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $id[$x]->id; ?>">
                                    <button type="submit" name="btn_edit" >EDIT</button>
                                </form>
                            </td>
                            <td class="data">
                                <form action="delete" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $id[$x]->id; ?>">
                                    <button type="submit" >DELETE</button>
                                </form>

                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "No record found.";
                }
                ?>
            </tbody>
        </table>



    </div>

</body>
</html>

