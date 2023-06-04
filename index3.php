<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Rainfall Prediction</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!link rel="stylesheet" href="style2.css">
    <style>
    .body {
    color: #fff;
    background: #63738a;
    font-family: 'Roboto', sans-serif;
}

.form-control {
    height: 40px;
    box-shadow: none;
    color: #969fa4;
}

    .form-control:focus {
        border-color: #5cb85c;
    }

.form-control, .btn {
    border-radius: 3px;
}

.Prediction-form {
    width: 450px;
    margin: 0 auto;
    padding: 30px 0;
    font-size: 15px;
}

    .Prediction-form h2 {
        color: #636363;
        margin: 0 0 15px;
        position: relative;
        text-align: center;
    }

        .Prediction-form h2:before, .Prediction-form h2:after {
            content: "";
            height: 2px;
            width: 30%;
            background: #d4d4d4;
            position: absolute;
            top: 50%;
            z-index: 2;
        }

        .Prediction-form h2:before {
            left: 0;
        }

        .Prediction-form h2:after {
            right: 0;
        }

    .Prediction-form .hint-text {
        color: #999;
        margin-bottom: 30px;
        text-align: center;
    }

    .Prediction-form form {
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .Prediction-form .form-group {
        margin-bottom: 20px;
    }

    .Prediction-form input[type="checkbox"] {
        margin-top: 3px;
    }

    .Prediction-form .btn {
        font-size: 16px;
        font-weight: bold;
        min-width: 140px;
        outline: none !important;
    }

    .Prediction-form .row div:first-child {
        padding-right: 10px;
    }

    .Prediction-form .row div:last-child {
        padding-left: 10px;
    }

    .Prediction-form a {
        color: #fff;
        text-decoration: underline;
    }

        .Prediction-form a:hover {
            text-decoration: none;
        }

    .Prediction-form form a {
        color: #5cb85c;44444
        text-decoration: none;
    }

        .Prediction-form form a:hover {
            text-decoration: underline;
        }
    </style>
   </head>
<body>
    <div class="Prediction-form">
        <form method="post" action="/predict" methods="POST">
            <h2>Future Is Ready Predict Today RainFall.</h2>
            <p class="hint-text">Prediction on live Data...</p>
            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="MinTemp" id="MinTemp" placeholder="MinTemp" required="required"></div>
                    <div class="col"><input type="text" class="form-control" name="MaxTemp" id="MaxTemp" placeholder="MaxTemp" required="required"></div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="Rainfall" id="Rainfall" placeholder="Rainfall" required="required"></div>
                    <div class="col"><input type="text" class="form-control" name="RainToday" id="RainToday" placeholder="RainToday" required="required"></div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="WindGustDir" id="WindGustDir" placeholder="WindGustDir" required="required"></div>
                    <div class="col"><input type="text" class="form-control" name="WindGustSpeed" id="WindGustSpeed" placeholder="WindGustSpeed" required="required"></div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="WindDir9am" id="WindDir9am" placeholder="WindDir9am" required="required"></div>
                    <div class="col"><input type="text" class="form-control" name="WindDir3pm" id="WindDir3pm" placeholder="WindDir3pm" required="required"></div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="WindSpeed9am" id="WindSpeed9am" placeholder="WindSpeed9am" required="required"></div>
                    <div class="col"><input type="text" class="form-control" name="WindSpeed3pm" id="WindSpeed3pm" placeholder="WindSpeed3pm" required="required"></div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="Humidity9am" id="Humidity9am" placeholder="Humidity9am" required="required"></div>
                    <div class="col"><input type="text" class="form-control" name="Humidity3pm" id="Humidity3pm" placeholder="Humidity3pm" required="required"></div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="Pressure9am" id="Pressure9am" placeholder="Pressure9am" required="required"></div>
                    <div class="col"><input type="text" class="form-control" name="Pressure3pm" id="Pressure3pm" placeholder="Pressure3pm" required="required"></div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col"><input type="text" class="form-control" name="Temp9am" id="Temp9am" placeholder="Temp9am" required="required"></div>
                    <div class="col"><input type="text" class="form-control" name="Temp3pm" id="Temp3pm" placeholder="Temp3pm" required="required"></div>
                </div>
            </div>


            <div class="form-group">
                <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Predict</button>
            </div>
             

        </form>
    </div>
</body>
</html>