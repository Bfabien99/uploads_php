<?php
    if(!empty($_POST)){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
?>
<!DOCrequired TYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Value</title>
    <style>
        *{
            padding: 0;
            margin:0;
            box-sizing:border-box;
        }
        body{
            width:100%;
            min-height: 100vh;
        }
        form{
            width: 100%;
            max-width: 700px;
        }
        section{
            width: 100%;
            padding:10px;
        }
        h3{
            color: red;
            text-align: center;
        }
        .group{
            display: flex;
            gap: 1em;
        }

        .group input{
            flex-grow: 1;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <section>
            <h3>Checkbox</h3>
            <div class="group">
                <p>
                C1
                <input type="checkbox" name="checkbox[]" value="c1" id="">
                </p>
                <p>
                C2
                <input type="checkbox" name="checkbox[]" value="c2" id="">
                </p>
                <p>
                C3
                <input type="checkbox" name="checkbox[]" value="c3" id="">
                </p>
            </div>
        </section>
        <section>
            <h3>Color</h3>
            <div class="group">
                <input required type="color" name="color" id="">
            </div>
        </section>
        <section>
            <h3>Date</h3>
            <div class="group">
                <input required type="date" name="date" id="">
            </div>
        </section>
        <section>
            <h3>Date Time</h3>
            <div class="group">
                <input required type="datetime" name="datetime" id="">
            </div>
        </section>
        <section>
            <h3>Date Time Local</h3>
            <div class="group">
                <input required type="datetime-local" name="datetime-local" id="">
            </div>
        </section>
        <section>
            <h3>Email</h3>
            <div class="group">
                <input required type="email" name="email" id="">
            </div>
        </section>
        <section>
            <h3>Hidden</h3>
            <div class="group">
                <input required type="hidden" name="hidden" value="h">
            </div>
        </section>
        <section>
            <h3>Image</h3>
            <div class="group">
                <input required type="image" src="image" alt="">
            </div>
        </section>
        <section>
            <h3>Month</h3>
            <div class="group">
                <input required type="month" name="month" id="">
            </div>
        </section>
        <section>
            <h3>Number</h3>
            <div class="group">
                <input required type="number" name="number" id="">
            </div>
        </section>
        <section>
            <h3>Password</h3>
            <div class="group">
                <input required type="password" name="password" id="">
            </div>
        </section>
        <section>
            <h3>Radio</h3>
            <div class="group">
                <p>
                    R1
                    <input required type="radio" name="radio" value="r1" id="">
                </p>
                <p>
                    R2
                    <input required type="radio" name="radio" value="r2"id="">
                </p>
                <p>
                    R3
                    <input required type="radio" name="radio" value="r3" id="">
                </p>
            </div>
        </section>
        <section>
            <h3>Range</h3>
            <div class="group">
                <input required type="range" name="range" id="">
            </div>
        </section>
        <section>
            <h3>Search</h3>
            <div class="group">
                <input required type="search" name="search" id="">
            </div>
        </section>
        <section>
            <h3>Tel</h3>
            <div class="group">
                <input required type="tel" name="tel" id="">
            </div>
        </section>
        <section>
            <h3>Text</h3>
            <div class="group">
                <input required type="text" name="text" id="">
            </div>
        </section>
        <section>
            <h3>Time</h3>
            <div class="group">
                <input required type="time" name="time" id="">
            </div>
        </section>
        <section>
            <h3>Url</h3>
            <div class="group">
                <input required type="url" name="url" id="">
            </div>
        </section>
        <section>
            <h3>Week</h3>
            <div class="group">
                <input required type="week" name="week" id="">
            </div>
        </section>
        <section>
            <h3>Button</h3>
            <div class="group">
                <input required type="reset" value="reset">
                <input required type="submit" value="submit">
            </div>
        </section>
    </form>
</body>
</html>