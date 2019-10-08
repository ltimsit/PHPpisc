    <?php
    session_start();
    if ($_GET["submit"] = "OK")
    {
        $_SESSION["login"] = $_GET["login"];
        $_SESSION["passwd"] = $_GET["passwd"];
    }
    ?>
    <html>
        <body>
            <form method="get" action=".">
                <label for="pseudo">Entrez votre pseudo :</label>
                <input type="text" name="pseudo">
                
                <label for="passwd">Entrez votre mot de passe :</label>
                <input type="text" name="passwd">
                <input type="submit" name="submit" value="OK">
            </form>
        </body>
    </html>