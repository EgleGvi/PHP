<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registracijos forma</title>
    </head>
    <style>
        h2 {
            text-align: center;
            padding-bottom: 50px;
        }
        h3 {
            margin: 2px;
        }
        input {
            margin-bottom: 12px;
            height: 30px;
            width: 300px;
        }
        .submitBtn {
            height: 30px;
            width: 150px;
            display: block;
        }
        .form {
            margin-left: 50px;
        }
    </style>
    <body>
        <form action="registration-form.php">
            <h2>Registruokitės į mūsų renginį!</h2>
            <div class="form">
                <h3>Jūsų vardas ir pavardė</h3>
                <input type="text" name="string">
                <h3>Jūsų amžius</h3>
                <input type="text" name="number">
                <h3>Jūsų el. paštas</h3>
                <input type="text" name="email">
                <h3>Jūsų tel. nr.</h3>
                <input type="text" name="number2">
                <h3>Trys žodžiai, kurie geriausiai Jus apibudina</h3>
                <input type="text" name="string2">
                <h3>Pasirinkite renginio datą</h3>
                <input type="text" name="number3">
                <input class="submitBtn" type="submit" name="submit">
            </div>
        </form>
    <?php
    $name = $_GET['string'];
    $age = $_GET['number'];
    $email = $_GET['email'];
    $phone = $_GET['number2'];
    $words = $_GET['string2'];
    $date = $_GET['number3'];



    ?>
    </body>
</html>