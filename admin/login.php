<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../fa/css/all.css">
    <link rel="stylesheet" href="../css/tailwind.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fa/pro/css/all.css">
    <script src="../js/jquery.min.js"></script>
</head>
<body>
    <div class="mx-auto py-52">
        <img src="../images/logo.png" alt="Logo" class="mx-auto">
        <div class="bg-blue-900 w-96 mt-4 rounded-sm mx-auto">
            <form action="">
            <div class="grid mx-4 text-white font-bold">
                <label class="mt-4">
                    <i class="fa fa-user"></i>
                    Email or Phone
                </label>
                <input type="text" class="text-black h-8"></input>
            </div>

            <div class="grid mx-4 text-white font-bold">
                <label class="mt-4">
                    <i class="fa fa-key"></i>
                    Password
                </label>
                <input type="text" class="text-black h-8 rounded" required></input>
            </div>

            <div class="mx-4 mt-4 ">
            <input type="checkbox">
            <label class="text-white">Remember me</label>
            </div>

            <div class="mx-4 my-4 text-white">
                <button class="px-6 rounded-sm bg-blue-700 font-bold mb-4">Login</button>
            </div>
            </form>
        </div>
    </div>
    
    <!-- <h2>Login Page</h2> -->
    
    <script src="js/script.js"></script>
</body>
</html>