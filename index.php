<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="form.js"></script>
</head>


<body>
<div class="main">
        <form action="login.php" method="post">
            <fieldset>
                <input type="text" placeholder="Wpisz nazwe uzytkownika" name="nazwa"> <br><br>
                <input type="password" placeholder="Wpisz haslo" name="password" autocomplete="on"><br><br>
              <div id="login_message" class="login_form">   <button type="submit" class="login_button">
                    Zaloguj się
                </button></div>
                <a href="reminder.html">Zapomniałem hasła</a>




            </fieldset>
        </form>




    </div>
    <div class="register">

        <input value="Rejestracja" type="submit" id="registerbutton">

        <form action="process.php" method="POST">
            <fieldset id="registerpool" style="display: none">
                <legend>Zarejestruj sie</legend>
                <div id="plec_form" class="form_form">
                    <p>Płeć : </p> &nbsp; kobieta<input type="radio" name="plec" id="plec_k" value="kobieta"> &nbsp;
                    mężczyzna<input type="radio"  id="plec_m"  name="plec" value="mezczyzna"> <br><br>
                </div>
                <div id="dataur_form" class="form_form">
                    Wybierz datę urodzenia <input type="date" id="dataur" name="dataur"><br><br></div>
                <div id="login_form" class="form_form"><input type="text" placeholder="Wpisz nazwe uzytkownika"
                        name="login" id="login"> <br><br></div>

                <div id="mail_form" class="form_form"> <input type="text" placeholder="Wpisz e-mail" name="email"
                        id="email"> <br><br></div>
                <div id="password_form" class="form_form">
                    <div id="password1_form" class="form_form"><input type="password" placeholder="Wpisz haslo"
                            name="haslo1" id="haslo1" autocomplete="on"><br><br> </div>
                    <div id="password2_form" class="form_form"> <input type="password"
                            placeholder="Wpisz haslo ponownie" name="haslo2" id="haslo2" autocomplete="on"><br><br></div>
                </div>
                <label for="file-upload" class="custom-file-upload">
                    Wgraj awatar
                    <input type="file" name="avatar" id="file-upload" accept=".jpg, .jpeg, .png" />
                </label><br><br>
                <button type="submit" class="btn btn-success">
                    Submit
                </button>
            </fieldset>
        </form>

    </div>
    <script>
    const registerpool = document.getElementById("registerpool");
    const registerbutton = document.getElementById("registerbutton");

    registerbutton.addEventListener("click", function() {


        registerpool.style.display = "block";


    });
    </script>
</body>

</html>