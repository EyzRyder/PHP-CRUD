<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background: #814b92;
            color: white;
        }

        form {
            display: grid;
            place-items: center;
            grid-template-areas:
    "a "
    " b  "
    " c  "
    " d  ";
}
        

        h2 {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            margin: 0;
        }

        input {
            padding-top: 5px;
            padding-bottom: 5px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        h2{
            grid-area: a; 
        }
        input[type="text"] {
            grid-area: b;
        }

        input[type="password"] {
            grid-area: c;
        }

        button {
            background-color: #209f1a;
            color: white;
            border: none;
            grid-area: d;
        }
    </style>
</head>

<body>
        <Form action="login.php" method="post">
<<<<<<< HEAD
        <?php
            echo "<h2>Login</h2>";
            ?>
=======
            <h2>Login</h2>
>>>>>>> 63a5f438a0ec8def466893399a3c38821be33e4d
            <input type="text" name="name" id="name" placeholder="Digite seu nome de usuário" required />
            <input type="password" name="password" id="password" placeholder="Digite sua senha" required />
            <button type="submit" id="submit" class="submit-button">
                Enter
            </button>
<<<<<<< HEAD

=======
>>>>>>> 63a5f438a0ec8def466893399a3c38821be33e4d
        </Form>
</body>

</html>
