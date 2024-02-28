<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Ticket Booking</title>
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

        .books {
            background-color: #FFC0CB;
            border: 2px solid #FFC0CB;
            color: white;

        }

        .books:hover {
            background-color: #FFC0CB;
            border: 2px solid #FFC0CB;
            color: white;

        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12 tt">
                <center>
                    <h1>Cinema Hall</h1>
                </center>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <?php

                use App\booking;
                use App\cinemahall;
                use App\LoginManager;

                $da = cinemahall::all();
                if (!$da) {
                    throw new Exception('Data Not Found');
                }
                $response['status'] = "ok";


               

                


                ?>


                <table>
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Ticket</th>
                    </thead>

                    <tbody>
                        <?php foreach ($da as $x) : ?>
                            <tr>
                                <td><?php echo $x->id; ?></td>
                                <td><?php echo $x->name; ?></td>
                                <td><?php echo $x->location; ?></td>
                                <?php echo "<td><a class='btn book' href='booking?hallno={$x->id}'>Book Now</a></td>" ?>
                                <?php echo "<td><a class='btn books' href='sbooking?hallno={$x->id}'>Show</a></td>" ?>
                                

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>