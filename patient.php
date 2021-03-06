<?php
        include 'assets/php/config.php';
        include 'assets/php/logincheck.php';
        if(($_SESSION['isDoc']==false)||(isset($_SESSION['p_id']) &&($_SESSION['p_id']!=$_GET['id']))){
            
            die('<strong>You have no Acess to this page!</strong> Please Try <a href="/login2">  Logging in Again!</a> with different account.');
        }
           

?>


<!-- 39th linil anu ningal coe ezhuthendath -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/dashstyle.css">
    <style>
        .flex{
            display: flex;
        }
    </style>
    <title>Dashboard</title>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <p class="font-weight-bold text-light govtText" >Doctor X's Clinic</p>
                
                <h3 class="text-center">Doctor's Dashboard</h3>
            </div>
    
            <ul class="list-unstyled components">
                
                <li class="active">
                    <a href="#">Patients</a>
                </li>
                
                <li>
                    <a href="logout">Log out</a>
                </li>
                
            </ul>
        </nav>
        
        <div class="container-fluid p-0 dashboard-content">
            <div id="sidebarCollapse">
                <img src="assets/img/menu.svg" alt="">
            </div>
            <h1 class="p-3 bg-primary text-white"><?php  echo $_GET["username"] ?>'s Dashboard</h1>
            
            <div class="row p-3">
                <div class="col col-12 col-lg-8 col-md-10 mx-auto mb-3">
                    <a href="" class="btn btn-danger mb-3">Add precription</a>
                    <a href="" class="btn btn-primary mb-3">Add  Medical Report</a>

                    <div class="card">
                        <h2 class="m-1 p-2 text-center font-weight-bold">Patient's details</h2>
                        <hr>
                        <div class="row">
                            <div class="col  p-2 col-11 col-sm-11 col-md-5 mx-auto flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white">Name: </h5>
                                <p class="p-1 m-1 font-weight-bold text-dark">Naseem Shah</p>
                            </div>
                            <div class="col   p-2 col-11 col-sm-11 col-md-5 mx-auto flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white">Age: </h5>
                                <p class="p-1 m-1 font-weight-bold text-dark">22</p>
                            </div>
                            <div class="col   p-2 col-11 col-sm-11 col-md-5 mx-auto flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white" >Gender: </h5>
                                <p class="p-1 m-1 font-weight-bold text-dark">Male</p>
                            </div>
                            <div class="col   p-2 col-11 col-sm-11 col-md-5 mx-auto flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white">Patient ID:</h5>
                                <p class="p-1 m-1 font-weight-bold text-dark">1145</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3">
                <div class="col col-12 col-lg-6 col-md-6 mx-auto mt-3 mb-3">
                    <div class="card">
                        <h2 class="m-1 p-2 text-center font-weight-bold">Last Precription</h2>
                        <hr>
                        <div class="row">
                            <div class="col ml-3 p-2 col-11 col-sm-11 col-md-5 flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white">12/03/2020</h5>
                                
                            </div>
                            <div class="col p-2 m-1   col-lg-10  flex ">
                                
                                <p class="font-weight-bold text-dark p-3 m-1 text-break">sjnjsnzjn,sahdbasbkdb,sadbkjaszjkdn,slzdnlkasnz,skjjbdcj,sdbckjsd
                                    dskfclksdlknclksndlkc,
                                    sdkclskdzlkfcs,
                                    'dzxckjskjdnvkjsn'
                                </p>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="" class="btn btn-primary m-2 float-right" >Show all Prescriptions</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-6 col-md-6 mx-auto mt-3 mb-3">
                    <div class="card">
                        <h2 class="m-1 p-2 text-center font-weight-bold">Last Medical report</h2>
                        <hr>
                        <div class="row">
                            <div class="col ml-3 p-2 col-11 col-sm-11 col-md-5 flex">
                                <h5 class="p-1 m-1 bg-dark rounded text-white">12/03/2020</h5>
                                
                            </div>
                            <div class="col p-2 m-1   col-lg-10  flex ">
                                
                                <p class="font-weight-bold text-dark p-3 m-1 text-break">sjnjsnzjn,sahdbasbkdb,sadbkjaszjkdn,slzdnlkasnz,skjjbdcj,sdbckjsd
                                    dskfclksdlknclksndlkc,
                                    sdkclskdzlkfcs,
                                    'dzxckjskjdnvkjsn'
                                </p>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="" class="btn btn-primary m-2 float-right" >Show all Medical Reports</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
            
            

        
    </div>
    
      <script>
        $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

        });
      </script>
</body>
</html>