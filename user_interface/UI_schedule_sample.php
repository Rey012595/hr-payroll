<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule | Symtech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <label class="btn btn-primary">
        <input type="radio" required name="cutOff" id="cutOff" value="weekly">Weekly</label>
        <label class="btn btn-primary">
        <input type="radio" required name="cutOff" id="cutOff" value="Half-A-Month">Half A Month</label>
        <button type="submit" class="btn btn-success" name="submit" id="submit">Go</button>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $cutOff = $_POST['cutOff'];

            if($cutOff == "weekly"){
                echo "pogi Ako";

                ?>

                <div class="mb-5">
                <label for="dataFrom">Date-From</label>
                <input type="date" name="dateFrom" id="dateFrom">
                <label for="dataTo">Date-To</label>
                <input type="date" name="dateTo" id="dateTo">
                </div>

                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-primary">
                        <input type="checkbox" autocomplete="off">
                        Sunday
                    </label>

                    <label class="btn btn-primary">
                        <input type="checkbox" autocomplete="off" >
                        Monday
                    </label>

                    <label class="btn btn-primary">
                        <input type="checkbox" autocomplete="off">
                        Tuesday
                    </label>
                    <label class="btn btn-primary">
                        <input type="checkbox" autocomplete="off">
                        Wednesday
                    </label>

                    <label class="btn btn-primary">
                        <input type="checkbox" autocomplete="off" >
                        Thursday
                    </label>

                    <label class="btn btn-primary">
                        <input type="checkbox" autocomplete="off">
                        Friday
                    </label>

                    <label class="btn btn-primary">
                        <input type="checkbox" autocomplete="off">
                        Saturday
                    </label>
                </div>

                <div class="mb-5" >
                    <form action="time.php" method="post">
                    <button type="submit" class="btn btn-info btn-sm mt-2" name="all" id="all">all</button>
                    <small>if Time in&out is Same (click all) </small>
                        <div class="mb-5">
                        <label>Time-in</label>
                        <input type="time" name="timeIn" id="timeIn" value="09:00 AM"><br>
                        <label>Time-Out</label>
                        <input type="time" name="timeOut" id="timeOut">
                        </div> 

                        <div class="mb-5">
                        <label for="timeIn2">Time-in</label>
                        <input type="time" name="timeIn2" id="timeIn2"><br>
                        <label for="timeOut2">Time-Out</label>
                        <input type="time" name="timeOut2" id="timeOut2">
                        </div>

                        <div class="mb-5">
                        <label for="timeIn3">Time-in</label>
                        <input type="time" name="timeIn3" id="timeIn3"><br>
                        <label for="timeOut3">Time-Out</label>
                        <input type="time" name="timeOut3" id="timeOut3">
                        </div>

                        <div class="mb-5">
                        <label for="timeIn4">Time-in</label>
                        <input type="time" name="timeIn4" id="timeIn4"><br>
                        <label for="timeOut4">Time-Out</label>
                        <input type="time" name="timeOut4" id="timeOut4">
                        </div>

                        <div class="mb-5">
                        <label for="timeIn5">Time-in</label>
                        <input type="time" name="timeIn5" id="timeIn5"><br>
                        <label for="timeOut5">Time-Out</label>
                        <input type="time" name="timeOut5" id="timeOut5">
                        </div>

                        <div class="mb-5">
                        <label for="timeIn6">Time-in</label>
                        <input type="time" name="timeIn6" id="timeIn6"><br>
                        <label for="timeOut6">Time-Out</label>
                        <input type="time" name="timeOut6" id="timeOut6">
                        </div>

                    </form>

                </div>

                <?php

            }elseif($cutOff == "Half-A-Month"){
                echo "Napaka Pogi Ko";

                ?>
                
                <div class="mb-5">
                <label for="dataFrom">Date-From</label>
                <input type="date" name="dateFrom" id="dateFrom">
                <label for="dataTo">Date-To</label>
                <input type="date" name="dateTo" id="dateTo">
                </div>

                <?php
            }
        }
    ?>

</body>
</html>