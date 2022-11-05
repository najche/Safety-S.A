<?php include 'conexion.php'; ?>
//esto es una prueba



        <h1>Add company</h1>
        <form action = "insertcompany.php" method ="post" class="form-registrer">
            <h2 class="form_titulo" > </h2>
            <div class="row g-3 align-items-center">
                <div class="col-auto">     
                    <h3>Company name</h3><input  type = "text"name="name" placeholder ="company name" class="form-control form-control-customized"></h3>
                    <h3>Description:</h3><input  type = "text" name="description" class="form-control form-control-customized">
                    <h6>Active:</h3><input  type = "checkbox" name="status" class="form-check-input" >
                </div>  
            </div>
            <input id="btnPrueba" type ="submit" value = "Submit" class ="btn btn-customized">
            <a href="certificate.php?certificate=CAOAL003">Imprimir reporte</a>
        </form>

