<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .ii {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    
    use App\booking;
    use App\cinemahall;

    $status = "ok";
    $name = "";
    $phoneno = "";
    $date = "";
    $message = "";
    $hallid = "";


   
    if (!isset($_POST['check'])) {
        $status = "0";
    }


    

    if ($status == "ok") {

        $hallid = isset($_GET['hallno']) ? $_GET['hallno'] : null;
        // echo  $hallid;
        $name = $_POST['name'];
        $phoneno = $_POST['phoneno'];
        $date = $_POST['date'];
    
        $td = new booking();
        $td->name = $name;
        $td->phoneno = $phoneno;
        $td->date =  $date;
        $td->hallid=$hallid;
      

        if ($status == "ok") {
            $td->save();
            $message = "Booking Successfull";
        } else {
            $message = "Something Error";
        }
    }

    ?>



    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <h5>
                    <center><?php echo $message;
                             ?></center>
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    @csrf
                    <input type="hidden" name="check" value="0">

                    <div class="form-floating mb-3 ii">
                        <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating ii">
                        <input type="number" class="form-control" name="phoneno" id="floatingPassword" placeholder="phone">
                        <label for="floatingPassword">Phone Number</label>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-floating ii">
                                <input type="datetime-local" class="form-control" name="date" id="floatingPassword" placeholder="date">
                                <label for="floatingPassword">Date</label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-warning form-control">BookNow</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>