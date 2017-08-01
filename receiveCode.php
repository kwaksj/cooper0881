<!DOCTYPE html>
<html>
    <body>
        <style>
            input{
                width:300px;
            }
        </style>
            <a href="login.html">login</a>
            <form action="https://www.googleapis.com/oauth2/v4/token" method="post" enctype="application/x-www-form-urlencoded">
            
                code : <input type="text" name="code" value="<?=$_GET['code']?>"><br>
                client_id : <input type="text" name="client_id" value="1087871725040-9npdp6sqhhfq7bt3sqehtv9f9spqk9b7.apps.googleusercontent.com"><br>
                client_secret : <input type="text" name="client_secret" value="4Wnt3mMAWuDAy7mtsZ2x4di1"><br>
                redirect_uri : <input type="text" name="redirect_uri" value="https://oauth-changjun.c9users.io/receiveCode.php"><br>
                grant_type : <input type="text" name="grant_type" value="authorization_code"><br>
                <input type="submit">
            </form>
    </body>
</html>