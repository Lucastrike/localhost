<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Form</title>
    </head>
    <body>

        <h2>PHP Form Validation</h2>
        <!-- Para enviarlo a otro archivo: form action="nombrearchivo.php" method... declaras las variables y vuelcas $_POST['...'] en ellas -->
        <form action="<?php echo(htmlentities($_SERVER['PHP_SELF']));?>" method="post">
          <!-- Siempre se pone el metodo post por seguridad para que no se vea la informacion -->
            Name:
            <input type="text" placeholder="Name" name="name">
            <br /><br />

            E-mail:
            <input type="text" placeholder="Email" name="email">
            <br /><br />

            Password:
            <input type="password" placeholder="Password" name="password">
            <br /><br />

            Comment:
            <textarea name="comment" placeholder="Comment" rows="5" cols="40"></textarea>
            <br /><br />

            Gender:
            <input type="radio" name="gender" value="female">Female</input>
            <input type="radio" name="gender" value="male">Male</input>
            <br /><br />

            <select name="browsers">
            <option value="chrome">Chrome</option>
            <option value="firefox">Firefox</option>
            <option value="safari">Safari</option>
            <option value="opera">Opera</option>
            <option value="edge">Edge</option>
            </select>
            <br /><br />

            <input type="checkbox" name="check[]" value="yes">yes</input>
            <input type="checkbox" name="check[]" value="no">no</input>
            <input type="checkbox" name="check[]" value="sometimes">sometimes</input>
            <br /><br />

            <input type="submit" name="submit" value="Submit">
            <br /><br />
        </form>

        <?php
          //Esta comprobacion 'if' se hace siempre que sea en la misma pagina
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "Name: ".$_POST['name']."<br />";
        echo "Email: ".$_POST['email']."<br />";
        echo "Password: ".$_POST['password']."<br />";
        // De la siguiente forma lo almacenamos en una variable
        $comment =  $_POST['comment'];
        echo "Comment: ".$comment."<br />";
        echo "Gender: ".$_POST['gender']."<br />";
        echo "Browser: ".$_POST['browsers']."<br />";
        $check = $_POST['check'];
        for ($i=0; $i<count($check); $i++) {
          echo "CheckBox: ".$check[$i]."<br />";
        }
      }
        ?>

    </body>
</html>
