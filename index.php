<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Project-System</title>
    
  </head>
  <body>
    <header>
        <h1 class="container">Project-System</h1>
    

        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border">
            <div class="container">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Release.php">Release</a>   
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Series</a>
                    </li>
                    
                </ul>
                <form class="d-flex justify-content-end">
                    <div class="dropdown" style="margin-right: 10px;">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                              </svg>
                        </a>
                      
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Login</a></li>
                          <li><a class="dropdown-item" href="#">Sign-up</a></li>
                        </ul>
                      </div>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </nav>
    
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a class="navbar-brand" href="#">
                            <img src="Brand.png" class="img-fluid " alt="#">
                        </a>
                    </div>
                    <div class="col">
                        <a class="navbar-brand" href="#">
                            <img src="Brand.png" class="img-fluid" alt="#">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    

    <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="New-tab" data-bs-toggle="tab" data-bs-target="#New" type="button" role="tab" aria-controls="New" aria-selected="true">New</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="Book-tab" data-bs-toggle="tab" data-bs-target="#Book" type="button" role="tab" aria-controls="Book" aria-selected="false">Book</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="E-Book-tab" data-bs-toggle="tab" data-bs-target="#E-Book" type="button" role="tab" aria-controls="E-Book" aria-selected="false">E-Book</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="New" role="tabpanel" aria-labelledby="New-tab">
                    <div class="row row-cols-1 row-cols-md-4 g-4" enctype="multipart/form-data">
                    <?php
                        require('connectDB.php');
                        $sql = "SELECT * FROM manga;";
                        $result = mysqli_query($conn,$sql);
                    ?>
                    <?php 
                        while ($row = mysqli_fetch_array($result)) { 
                    ?>
                        <div class="col h-100">
                            <div class="card" style="margin-top:  10px;" enctype="multipart/form-data">
                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'" class="card-img-top mx-auto d-block" style="max-width: 150px; max-height: 186px; margin: 10px;"/>'; ?>
                                <div class="card-body">
                                    <h5 class="card-title"> <?php echo $row['title'];?> </h5>
                                    <p class="card-text"> <?php echo $row['author'];?> </p>
                                    <p class="card-text d-inline p-2 bg-primary text-white rounded" style="float:left">฿<?php echo $row['price'];?></p>
                                    <p class="card-text d-inline p-2 bg-warning text-white rounded text-end" style="float:right"><?php echo $row['type'];?></p>
                                </div>
                            </div>
                        </div> 
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="E-Book" role="tabpanel" aria-labelledby="E-Book-tab">...</div>
            </div>
        </div>
            
        <div class="col-sm-2">
            <div class="card" style="width: 19rem; margin-top: 40px;">
                <div class="card-body">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </div>
                
                <!--<ul class="list-group list-group-flush">
                  <li class="list-group-item">ยืนยันการชำระเงิน</li>
                  <li class="list-group-item">คำสั่งซื้อ</li>
                  <li class="list-group-item">FAQ</li>
                </ul>-->
            </div>
          </div>
        </div>
    </div>
    <footer class="container-fluid" style="height: 200px; background-color: lightgray">
        <p class="text-center pt-3 mt-5">Copyright@2023</p>
    </footer>
  </body>
</html>