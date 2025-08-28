<?php
require('inc/db_config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel </title>
    <?php require('inc/links.php');?>
    
    <style>
        :root{
 --teal: #2ec1ac;
 --teal_hover: #279e8c; 
}

*{
        font-family: 'Poppins', sans-serif;
      }
    
      .h-font{
      font-family: 'Merienda', cursive;
     }

     input::-webkit-outer-spin-button,
     input::-webkit-inner-spin-button {
       -webkit-appearance: none;
        appearance: none;
        margin: 0;
      }

     input[type="number"] {
       -moz-appearance: textfield;
        appearance: textfield; 
   }


    .custom-bg{
       background-color: #2ec1ac;
       border: 1px solid #2ec1ac;
     }

     .custom-bg:hover{
      background-color: #279e8c;
      border-color: #279e8c;
      }
    .availablity-form{
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }
    @media screen and (max-width: 575px) {
      .availablity-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }
}


    div.login-form{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px;
        height: 300px;
    }
    </style>
</head>
<body class="bg-light">
    <div class="login-form text-center shadow bg-white rounded overflow-hidden">
        <form class="POST">
         <h4 class="bg-dark text-white py-3 h-font rounded">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
             <div class="mb-3">
                <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
             </div>
            <div class="mb-4">
               <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
            </div>
            <button name="login" type="submit" class="btn text-white custom-bg shadow-none text-center">
              LOGIN 
            </button>
          </div>
        </form>
    </div>
    
<?php

  if(isset($_POST['login']))
 {  

    $frm_data = filteration($_POST);
    $query = "SELECT * FROM `admin_cred` WHERE `admin_name` =? AND `admin_pass` =?";
    $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
    $datatypes = "ss";
    $res=select($query, $values, "ss");
      if($res->num_rows==1){
        echo "got user";
    }

      else{ 
                    echo <<<alert
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong> Holy guacamole!</strong> You should check in on some of those fields below.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
          alert;
        }
  }      

?>

<?php require('inc/scripts.php');?>
</body>
</html>