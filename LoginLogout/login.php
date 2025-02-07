<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Puskesmas Ceria</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #105d64; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="container" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); padding: 60px 40px; width: 400px; max-width: 90%; text-align: center;">
        <img src="dist/img/PuskesmasCeriaLogo-removebg-preview.png" alt="Logo" style="width: 80px; margin-bottom: 20px;">
        <h1 style="color: #000; margin-bottom: 40px;">Login</h1>
        <form action="" method="POST">
            <div>
                <label for="email" style="display: block; text-align: left; margin-bottom: 10px; color: #333; font-weight: bold;">Email</label>
                <input type="email" name="email" required style="width: calc(100% - 22px); padding: 12px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>
            <div>
                <label for="password" style="display: block; text-align: left; margin-bottom: 10px; color: #333; font-weight: bold;">Password</label>
                <input type="password" name="password" required style="width: calc(100% - 22px); padding: 12px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
            </div>
            <div>
                <button type="submit" name="submit" style="width: 100%; background-color: #f07c24; color: #fff; padding: 14px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Login</button>
            </div>
        </form>
    </div>

    <?php
    if(isset($_POST["submit"])){
        require_once "../dbkoneksi.php";

        $user = $dbh->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $user->execute([
            $_POST["email"], $_POST["password"],
        ]);

        $count = $user->rowCount(); //untuk memastikan user tersedia atau tidak

        if($count > 0){
            session_start();

            $_SESSION["user"] = $user->fetch();
            header("location:../index.php");
        }else { //jika login gagal
            header("location:login.php");
        }
    }
    ?>
</body>
</html>