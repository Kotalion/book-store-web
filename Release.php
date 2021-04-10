<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
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
                    <a class="nav-link" aria-current="page" href="index.php">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Release.php">Release</a>   
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Series</a>
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

    <h1 class="text-center mt-4">
        ตารางหนังสือออกใหม่ ประจำปี 2564
    </h1>

    <form class="container btn-group d-flex align-items-center mt-5" method="POST" role="group">
        <input type="submit" class="btn-check" name="btnfilter" id="btnradio1" value="1" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio1">JAN</label>
      
        <input type="submit" class="btn-check" name="btnfilter" id="btnradio2" value="2" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio2">FEB</label>
      
        <input type="submit" class="btn-check" name="btnfilter" id="btnradio3" value="3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">MAR</label>

        <input type="submit" class="btn-check" name="btnfilter" id="btnradio4" value="4" autocomplete="off" checked>
        <label class="btn btn-outline-primary" for="btnradio4">APR</label>

        <input type="submit" class="btn-check" name="btnfilter" id="btnradio5" value="5" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio5">MAY</label>

        <input type="submit" class="btn-check" name="btnfilter" id="btnradio6" value="6" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio6">JUN</label>

        <input type="submit" class="btn-check" name="btnfilter" id="btnradio7" value="7" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio7">JUL</label>

        <input type="submit" class="btn-check" name="btnfilter" id="btnradio8" value="8" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio8">AUG</label>

        <input type="submit" class="btn-check" name="btnfilter" id="btnradio9" value="9" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio9">SEP</label>

        <input type="submit" class="btn-check" name="btnfilter" id="btnradio10" value="10" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio10">OCT</label>

        <input type="submit" class="btn-check" name="btnfilter" id="btnradio11" value="11" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio11">NOV</label>

        <input type="submit" class="btn-check" name="btnfilter" id="btnradio12" value="12" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio12">DEC</label>
    </form>

    <div class="container">
        <div class="row row-cols-6">
        
        <?php
            if (isset($_POST["btnfilter"]))
            {
                $m = $_POST["btnfilter"];
            }
            else
            {
                $m = 0;
            }
            require('connectDB.php');
            $sql = "SELECT * FROM upcoming
                    WHERE upcoming.month = $m
                    ORDER BY dateBook ASC;";
            $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));;

            if (mysqli_num_rows($result) > 0) {
                echo mysqli_num_rows($result);
            } else {
                echo "EMPTY DATA";
            }
        ?>
        <?php 
            while ($row = mysqli_fetch_array($result)) { 
        ?>
            <div class="col h-100">
                <div class="card" style="margin-top:  10px; min-height: 375px;" enctype="multipart/form-data">
                    <div class="card-header text-muted text-center">
                        วันที่<?php
                            $date=date_create($row['dateBook']);
                            echo date_format($date,"j"); 
                        ?>
                    </div>
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
    
  </body>
</html>