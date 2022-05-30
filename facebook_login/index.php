<?php
require "with_facebook.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Title</title>
</head>

<body>
    <header class="text-center py-1 fw-bold shadow-sm text-white" style="background-color: blue;">IREMBO | Practical CAT</header>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="shadow-sm border p-5 text-center rounded">
            <h6 class="fw-bold">Connect to IREMBO</h6>
            <div class="py-5">
                <a href="<?php echo $login_url; ?>" class="btn w-100 text-white" style="background-color: blue;">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                    <span class="ps-3">Continue with facebook</span>
                </a>
            </div>
        </div>
    </div>
</body>

</html>