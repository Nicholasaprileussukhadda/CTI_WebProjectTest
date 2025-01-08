<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <h1 style=" background-color: #00008E; padding: 15px; text-align: right; color: white; padding-right: 200px;">ID|EN</h1>
        <div id="header-images" class="flex items-center" style="padding: 15px; padding-left: 200px;">
            <img src="img/Helios_Header.png" alt="Helios" class="h-12 mr-2">
            <img src="img/Sangfor_Header.png" alt="SangFor" class="h-12">
        </div>
    </header>

    <div id="app" class="relative bg-cover bg-center md:h-svh h-1/2" style="background-image: url('img/Form_Section.jpeg');">
        <div class="flex justify-center items-center p-8 w-full">
            <div class="flex flex-col w-1/3 bg-opacity-90 p-8 rounded-lg">
                <img src="img/THX.png" class="w-full mx-auto">
                <h1 class="text-4xl mt-8 font-bold text-center text-[#00008E]">Thank You for Your Interest </h1>
                <p class="text-center mt-2">Our team will contact you within 5 working days</p>
                <div class="flex justify-center mt-8">
                    <a href="/" class="bg-[#04BE02] text-white px-4 py-2 rounded-lg">BACK TO HOMEPAGE</a>
                </div>
            </div>
        </div>
    </div>


    <div id="footer">
        <div class="relative bg-cover bg-center h-fit font-rubik text-white p-8" style="background-image: linear-gradient(to bottom right, rgba(0, 0, 142, 1), rgba(4, 190, 2, 1))">
            <div class="flex justify-center items-center p-8 w-full">
                <div class="flex flex-col w-1/3">
                    <h1 class="text-4xl font-bold">PT. Helios Informatika Nusantara</h1>
                    <p class="mt-8">
                        Centennial Tower, 12th Floor,<br>
                        Jl. Jendral Gatot Subroto<br>
                        No. Kav 24-25, Jakarta<br>
                        12930 Indonesia
                    </p>
                    <p class="mt-4"><span class="font-bold">Phone:</span> +62 21 8062 2220</p>
                    <p class="mt-4"><span class="font-bold">Email:</span> Tencent@helios.id</p>

                    <div class="flex mt-4">
                        <img src="img/Sosmedimg/Facebook.png" class="h-8 mr-2">
                        <img src="img/Sosmedimg/ig.png" class="h-8 mr-2">
                        <img src="img/Sosmedimg/Twitter.png" class="h-8 mr-2">
                        <img src="img/Sosmedimg/Youtube.png" class="h-8 mr-2">
                        <img src="img/Sosmedimg/Linkedin.png" class="h-8 mr-2">
                    </div>
                </div>
                <div class="w-2/3 flex justify-center">
                    <img src="img/footer.png" class=" w-5/6">
                </div>
            </div>
        </div>
        <div class="bg-[#00008E] text-white text-center p-4">
            <p>&copy; 2023 - PT. Helios Informatika Nusantara - All Right Reserved</p>
        </div>
    </div>
</body>
</html>
