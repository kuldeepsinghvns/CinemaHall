<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Show Booking Data</title>
    <style>
        table {
            font-size: 20px;
            border: 1px solid black;
            /* border-collapse: collapse; */
            width: 100%;
        }

        th {

            text-align: left;
            border: 1px solid salmon;
        }

        td,
        tr {
            border: 1px solid slateblue;
        }

        .book {
            background-color: #00B386;
            border-style: solid;
            color: white;
        }

        .book:hover {
            background-color: #FF1493;
            border-style: solid;
            color: white;
        }

        .tt {
            background-color: #FF1493;
            border: 2px solid #FFC0CB;
            color: white;

        }
    </style>
</head>

<body>
    <?php

    use App\booking;

    $message = "";
    $hallid = "";
    $dt = "";
    

    $hallid = isset($_GET['hallno']) ? $_GET['hallno'] : null;
    $dt=booking::where('hallid',$hallid)->get();

    if(!$dt){
        $message="Not Entry ";
    }

    

   



    ?>



    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">
                <center><h1>Data</h1></center>
            </div>
        </div>
        <div class="row">
         
            <div class="col-md-12">
                <center>
                    <h5><?php echo $message; ?></h5>
                </center>
                <table>
                    <thead>
                        <!-- <th>Hall ID</th> -->
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                        <?php foreach ($dt as $x) : ?>
                            <tr>    
                                <td><?php echo $x->id; ?></td>
                                <td><?php echo $x->name; ?></td>
                                <td><?php echo $x->phoneno; ?></td>
                                <td><?php echo $x->date; ?></td>
                                
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
        <br>
        <div class="ro"><div class="col-md-12">
            <center><a class="btn book" href="ticket" >Booking</a></center>
            <br>
            <center><a class="btn book" href="home" >Homepage</a></center>
        </div></div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>