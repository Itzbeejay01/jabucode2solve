
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JABU</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://arena.mycredentials.ng/wp-content/uploads/2021/04/jabu.jpg" type="image/x-icon">
</head>

<body class="w-full h-full bg-gray-100 py-24 p-10 lg:px-96 lg:py-20">
    <div class="w-full h-full bg-white rounded py-16 p-8 shadow-md lg:w-full lg:flex lg:flex-col lg:py-20 lg:justify-center lg:items-center">
        <div class="flex flex-col items-center">
            <img class="w-24" src="https://arena.mycredentials.ng/wp-content/uploads/2021/04/jabu.jpg" alt="">
            <h2 class="text-xl text-slate-900 font-bold mb-2 text-center">JOSEPH AYO BABALOLA UNIVERSITY</h2>
            <h2 class="text-lg text-slate-900 mb-4 text-center">Computer Science Department</h2>
            <h2 class="text-lg font-medium text-center text-slate-900 mb-5">300L C.A. SCORE BOARD</h2>
        </div>
        <form  method="post" class="w-full h-full pb-3 lg:px-14">
          <div class="mb-4">
            <input type="text" id="matric" name="matricNumber" class="border-2 outline-none rounded-md form-input mt-1 p-2 w-full placeholder:text-gray-800"
                placeholder="Matric Number"  required>
          </div>
            <div class="mb-6">
                <select id="course" name="course" class="text-gray-800 border-2 outline-none rounded-md form-select mt-1 p-2 w-full" required>
                    <option value="" disabled selected>Select Course</option>
                    <option value="csc315">CSC 315</option>
                    <option value="csc317">CSC 317</option>
                </select>
            </div>
            <button name="login" type="submit" class="w-full bg-gray-700 text-white p-2 rounded shadow-lg font-bold text-lg hover:bg-slate-500 active:bg-slate-500">Check Result</button>

        </form>
    </div>
</body>
</html>
<?php
include 'login.php';
?>
