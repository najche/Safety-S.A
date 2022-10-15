
<!DOCOTYPE html>
<html>
    <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="styles.css">
    </head> 
    <body>
    <div class="sidebar" id="sidebar">
        <span id="btnMenu" class="fa fa-bars menu-icon" data-bs-toggle="collapse" data-bs-target="#menu"></span>
        <div class="collapse menu-items" id="menu">
            <span id="companiesDropdown" class="fa fa-building menu-item dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" title="Companies">  Companies</span>
            <div class="dropdown-menu" aria-labelledby="companiesDropdown">
                <a class="dropdown-item" href="?tab=search-company"><i class="fa fa-search"></i> Search Company</a>
                <a class="dropdown-item" href="?tab=add-company"><i class="fa fa-add"></i> Add Company</a>
            </div>

            <span id="certificatesDropdown" class="fa fa-certificate menu-item dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" title="Certificates">  Certificates</span>
            <div class="dropdown-menu" aria-labelledby="certificatesDropdown">
                <a class="dropdown-item" href="?tab=search-certificate"><i class="fa fa-search"></i> Search Certificate</a>
                <a class="dropdown-item" href="?tab=add-certificate"><i class="fa fa-add"></i> Add Certificate</a>
            </div>

            <span id="instructorsDropdown" class="fa fa-user menu-item dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" title="Instructors">  Instructors</span>
            <div class="dropdown-menu" aria-labelledby="instructorsDropdown">
                <a class="dropdown-item" href="?tab=search-instructor"><i class="fa fa-search"></i> Search Instructor</a>
                <a class="dropdown-item" href="?tab=add-instructor"><i class="fa fa-add"></i> Add Instructor</a>
            </div>

            <span id="trainersDropdown" class="fa fa-user menu-item dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" title="Trainers">  Trainers</span>
            <div class="dropdown-menu" aria-labelledby="trainersDropdown">
                <a class="dropdown-item" href="?tab=search-trainer"><i class="fa fa-search"></i> Search Trainer</a>
                <a class="dropdown-item" href="?tab=add-trainer"><i class="fa fa-add"></i> Add Trainer</a>
            </div>

            <span class="fa fa-power-off menu-item" title="Logout">  Logout</span>
        </div>
    </div>
    <nav id="navbar" class="navbar navbar-customized">
        <div class="container-fluid">
            <img class="navbar-logo" src="img/SAFETY_logo_example.png" height="60px"/>
            <form class="d-flex navbar-search" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div id="content" class="content">
        <?php 
            if(array_key_exists('tab', $_GET)){
                switch($_GET['tab']){
                    case 'search-company':
                        break;
                    case 'add-company':
                        include 'Company.php';
                        break;
                    case 'search-certificate':
                        break;
                    case 'add-certificate':
                        break;
                    case 'search-instructor':
                        break;
                    case 'add-instructor':
                        include 'employee.php';
                        break;
                    case 'search-trainer':
                        break;
                    case 'add-trainer':
                        break;
                    default:
                        include 'Company.php';
                        break;
                }                
            }else{
                include 'Company.php';
            }
            
            
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>
    </body>

</html>

            