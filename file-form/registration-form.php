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
                <input type="text" name="name">
                <input type="text" name="name2">
                <h3>Jūsų amžius</h3>
                <input type="number" name="number">
                <h3>Jūsų el. paštas</h3>
                <input type="text" name="email">
                <h3>Jūsų tel. nr.</h3>
                <input type="number" name="phoneNum">
                <h3>Įrašykite iš kokio miesto esate</h3>
                <input type="text" name="string">
                <h3>Pasirinkite renginio datą</h3>
                <input type="date" name="date">
                <input class="submitBtn" type="submit" name="submit">
            </div>
        </form>
    <?php
    $name = $_GET['name'];
    $name2 = $_GET['name2'];
    $age = $_GET['number'];
    $email = $_GET['email'];
    $phone = $_GET['phoneNum'];
    $words = $_GET['string'];
    $date = $_GET['date'];

    $user = [
        'name' => $name,
        'name2' => $name2,
        'number' => $age,
        'email' => $email,
        'phoneNum' => $phone,
        'string' => $words,
        'date' => $date
    ];

    $users[] = $user;
    ?>
    </body>
</html>