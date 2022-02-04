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
<body class="bg-[#55ffe5]">
    <?php include_once 'components/header.html'; ?>
    <div class="my-10 mx-20">
       <h1 class="font-serif text-2xl font-bold">CONNECT WITH US</h1>
      <p class=>We Would Love to Respond to your queries and help you succeed. Feel Free to get in touch with Us.
</div>
    <div class="grid grid-cols-1 md:grid-cols-2">

        <div class="flex">
            <div class="pt-10 pb-5 pl-10 pr-40 ml-40 my-6 bg-[#fff]">
                <h2 class="mb-10 h-10 font-times font-bold text-left text-2xl">Send Your Request</h2>
                <form action="backend/test.php" method="post" name="frm_contact">
                    <div class="flex mb-3">
                        <label class="w-20">Name</label>
                        <input type="text" placeholder="Sarah Obi" name="uname" id="" class="mb-3 h-10 border-black  border-b-2 outline-none">
                    </div>

                    <div class="flex mb-3">
                        <label class="w-20">Phone</label>
                        <input type="tel" placeholder="+234 7046383233" name="pass" id="" class="mb-3 h-10 border-black border-b-2 outline-none">
                    </div>

                    <div class="flex mb-3">
                        <label class="w-20">Email</label>
                        <input type="email" placeholder="emma23@gmail.com" name="email" id="" class="mb-3 h-10 border-black border-b-2 outline-none">
                    </div>

                    <div class="flex mb-3">
                        <label class="w-20">Subject</label>
                        <input type="text" placeholder="Product demo"  name="subject" id="" class="mb-10 h-10 border-black border-b-2 outline-none"> 
                    </div>
                    <div class="mb-3">
                            <label class="w-20 ">Message</label>
                            <textarea rows="5" placeholder="Your Message" class="mt-10 border-black border-2 rounded-xl pr-40" ></textarea>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="bg-blue-500 py-1 px-5 rounded-lg text-white">
                            Send
                        </button>
                        <button type="reset" class="bg-red-500 py-1 px-5 rounded-lg text-white">
                            Clear
                        </button>
                    </div>
                </form>
            </div>

            <div class=" text-white pt-10 pb-5 pl-10 pr-40 my-6 bg-[#1c00b5]">
                <h3 class="w-60 font-times font-bold text-white text-2xl">Reach Us</h3>
                <table>
                    <tr class="pr-20 pt-20">
                        <td class="pr-20 pt-20">Email</td>
                        <td class="pr-20 pt-20">creativeconcept@gmail.com</td>
                    </tr>

                    <tr class="pr-20 pt-10">
                        <td class="pr-20 pt-10">Phone</td>
                        <td class="pr-20 pt-10">+234 7083458457</td>
                    </tr>

                    <tr class="pr-20 pt-10">
                        <td class="pr-20 pt-10">Address</td>
                        <td class="pr-20 pt-10">Procity, Federal Polytechnic<br> Nekede, Owerri, Imo State, Nigeria.</td>
                    </tr>

                </table>    
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