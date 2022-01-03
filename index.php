<?php include 'covid_api.php'; ?>

<!doctype html>
<html lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="index.css">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Covid 19 Tracker</title>
</head>

<body>

<div>
<canvas id="myChart"></canvas>
</div>

<div class="container align-items-center">

    <div class="row align-items-start">
        <div class="d-flex justify-content-center">
            <img class="rotate" src="images/corona-world.png" alt="">
        </div>
    </div>

    <div class="row align-items-end">
        <div class="justify-content-center">
            <div class="row justify-content-center">
                <h2>Covid 19 Italy</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto cs34 dot">
                    <ul>
                        <li>Total Cases:<span><?php echo $total_cases; ?></span></li>
                        <li>New Cases:<span><?php echo $new_cases; ?></span></li>
                        <li>Total Deaths:<span><?php echo $total_deaths; ?></span></li>
                        <li>Active Cases:<span><?php echo $active_cases; ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>