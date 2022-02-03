<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Project Hub 2</title>
    <link rel="stylesheet" href="fa/css/all.css">
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CDN  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include_once 'components/header.html'; ?>
    
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="">
            <div class="my-6 mx-6">
                <form action="backend/test.php" method="post" name="frm_contact">
                    <div class="mb-3">
                        <input type="text" name="uname" id="" class="border-black border">
                    </div>

                    <div class="mb-3">
                        <input type="password" name="pass" id="" class="border-black border">
                    </div>

                    <button type="submit" class="bg-blue-500 py-1 px-5 rounded-lg text-white">
                        Send
                    </button>
                    <button type="reset" class="bg-red-500 py-1 px-5 rounded-lg text-white">
                        Clear
                    </button>
                </form>
            </div>
        </div>
        <!-- Second Column -->
        <div class="">
            <span id="msg"></span>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>