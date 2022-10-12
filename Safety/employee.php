<?php 
include 'conexion.php';

?>

<!DOCOTYPE html>
<html>
<head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            <link rel="stylesheet" href ="styles.css">
</head> 
    <body>

        <header>
         <meta charset ="UTF-8">
         
        </header>


        <h1>Add Employee</h1>

        <form action = "insertemp.php" method ="post" class="form-registrer">   
            <div class="row g-3 align-items-center">
                <div class="col-auto">  
                     <h3></h3><input  type = "text"name="firtsname" placeholder ="*First Name" class="form-control"></h3>
                     <h3></h3><input  type = "text" name="lastname" placeholder ="*Last Name" class="form-control">
                     <select name ="company" class="form-select">
                        <option  value ="0" "> Select Company</option>
                        <?php
                            $strQuery="SELECT * FROM td_company where estado ='Y'";
                            $resultado =mysqli_query($conn,$strQuery);
                            while ($company = mysqli_fetch_assoc($resultado)){
                            echo '<option value="'.$company[id_company].'">'.$company[comp_name].'</option>' ;
                            }   
                        ?>    
                 </select>
                 <h6>Active:</h3><input  type = "checkbox" name="status" class="form-check-input" >
                </div>
            </div>   
            
               
               
                <input type ="submit" value = "Submit" class ="btn">
        
       
      
        </form>
    <?php
?>

    </body>

</html>
