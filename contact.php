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
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body>
    <?php include_once 'components/header.html'; ?>
    <div class="w-82 h-100  my-8 mx-10 bg-blue-900 rounded-xl flex">
        <div class="mr-80 mt-8">
            <h1 class="text-white font-bold text-2xl ml-20">Get a quote</h1>
            <p class="ml-20 mb-10 text-gray-400 mt-5">Fill up the form and our Tearm with get back<br>to you within 24 hours</p>
            <p class="ml-20 text-gray-400"><i class="fa fa-phone-alt"></i>+234 7084567892</p>
            <p class="ml-20 mt-4 text-gray-400"><i class="fa fa-envelope"></i>creativeconcept@gmail.com</p>
            <p class="ml-20 text-gray-400 mt-3"><i class="fa fa-map-marker-alt"></i> Procity Federal Polytechnic Nekede</p>
        </div>
        <div class="flex my-6 mx-8 mr-auto pr-42 pr-20 pb-50 py-70 h-100 float-right bg-white rounded-xl">
            <form action="backend/test.php" method="post" name="frm_contact">
            <div class="grid">
                <label class="mt-8 ml-10">Your name</label>
                <input type="text" placeholder="Sarah Obi" name="uname" id="uname" class="mb-3 h-10 border-black border-b-2 outline ml-10">
            </div>

            <div class="grid">
                <label class="ml-10">Phone</label>
                <input type="tel" placeholder="+234 7046383233" name="phone" id="phone" class="mb-3 ml-10 h-10 border-black border-b-2 outline-none">
            </div>
            <div class="grid">
                <label class="ml-10">Mail</label>
                <input type="email" placeholder="emma23@gmail.com" name="email" id="email" class="mb-3 h-10 border-black border-b-2 outline ml-10">
            </div>
            <div class="grid">
                <label class="ml-10">Subject</label>
                <input type="text" placeholder="Demo" name="subject" id="subject" class="mb-3 h-10 border-black border-b-2 outline ml-10">
            </div>
            <div class="grid">
                <label class="ml-10">Message</label>
                <textarea rows="5" placeholder="Your Message" id="msg" class="ml-10 mt-5 border-black border-2 rounded-xl pr-10" ></textarea>
            </div>

            <div class="my-8 text-right">
                <button type="submit" class="bg-blue-500 py-1 px-5 rounded-lg text-white ">
                    <span id="picons">
                        <i class="fa fa-paper-plane"></i>
                    </span> Send
                </button>

                <button type="reset" class="bg-red-500 py-1 px-5 rounded-lg text-white">
                    <i class="fa fa-times-circle"></i> Clear
                </button>
            </div>

        </div>
    </div>

     <!-- Second Column -->
     <div class="">
        <span id="msg"></span>
    </div>

    <script src="js/script.js"></script>
</body>
</html>