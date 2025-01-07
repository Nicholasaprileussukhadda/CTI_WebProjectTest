<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <div id="app">
        <div id="sangfor-section" class="relative bg-cover bg-center h-[85vh]" style="background-image: linear-gradient(to bottom right, rgba(0, 0, 142, 0.5), rgba(4, 190, 2, 0.5)), url('img/Sangfor_Section.png');">
            <div class="absolute inset-0 w-1/3 flex justify-center items-center text-white" style="margin-left: 200px;">
                <div class="font-rubik">
                    <h1 class="text-4xl p-2 font-bold">Cybersecurity Made Simple with Sangfor Cyber Command</h1>
                    <p class="mt-2 text-2xl p-2 font-bold">Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection.</p>
                    <a class="inline-flex p-2" href="#">
                        <span class="h-12 flex items-center justify-center uppercase font-semibold px-8 border border-black bg-[#04BE02] hover:text-white transition duration-500 ease-in-out">FREE TRIAL</span>
                        <span class="h-12 w-12 flex-shrink-0 flex items-center justify-center border border-l-0 border-black hover:bg-green-400 bg-[#018000] hover:text-white transition duration-500 ease-in-out">
                            <svg class="h-3 w-3" aria-hidden="true" focusable="false" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-9x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" /></svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>

    <div id="form-section" class="relative bg-cover bg-center h-[100vh]" style="background-image: url('img/Form_Section.jpeg');">
        <div class="absolute inset-0 flex justify-center items-center text-[#293660] font-rubik px-8">
            <div id="Keterangan" class="w-1/3 pr-8">
                <h1 class="text-4xl p-2 font-bold">About Sangfor Cyber Command</h1>
                <div class="mt-2 text-xl p-2">
                    <p class="mb-4">Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.</p>
                    <p class="mb-4">It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.</p>
                    <p class="mb-4">The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage. It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.</p>
                    <p class="mb-4">Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats.</p>
                </div>
            </div>
            <div id="form" class="w-1/3 pl-8">
                <div class="bg-white p-4 rounded-md">
                    <form class="mt-2 p-2">
                        <h3 class="text-2xl font-bold">Dapatkan Free Trial selama 1 bulan,</h3>
                        <h3 class="text-lg mt-2"> analisa keamanan network anda dan lihat hasilnya!</h3>
                        <div class="flex gap-2 mt-8">
                            <div class="w-full">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                                <input type="text" id="first-name" class="w-full h-12 p-2 border border-black rounded-lg" placeholder="First Name" required>
                            </div>
                            <div class="w-full">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" id="last-name" class="w-full h-12 p-2 border border-black rounded-lg" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="email" class="block text-sm font-medium text-gray-700">Corporate Email</label>
                            <input type="email" id="email" class="w-full h-12 p-2 border border-black rounded-lg" placeholder="email@mail.com" required>
                        </div>
                        <div class="mt-2">
                            <label for="job" class="block text-sm font-medium text-gray-700">Job Title</label>
                            <input type="text" id="job" class="w-full h-12 p-2 border border-black rounded-lg" placeholder="Your Job" required>
                        </div>
                        <div class="mt-2">
                            <label for="company" class="block text-sm font-medium text-gray-700">Your Company</label>
                            <input type="text" id="company" class="w-full h-12 p-2 border border-black rounded-lg" placeholder="Your Company" required>
                        </div>
                        <div class="mt-2">
                            <label for="industry" class="block text-sm font-medium text-gray-700">Industry</label>
                            <select id="industry" class="w-full h-12 p-2 border border-black rounded-lg" required>
                                <option value="" disabled selected>Select Industry</option>
                                <option value="technology">Technology</option>
                                <option value="finance">Finance</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="education">Education</option>
                                <option value="manufacturing">Manufacturing</option>
                            </select>
                        </div>
                        <div class="mt-2">
                            <label for="number" class="block text-sm font-medium text-gray-700">Your Number</label>
                            <input type="tel" id="number" class="w-full h-12 p-2 border border-black rounded-lg" placeholder="Your Number" required>
                        </div>
                        <div class="mt-4">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox h-5 w-5 text-[#04BE02]" required>
                                <span class="ml-2 text-gray-700">Click this box to agree to be contacted by our team and get great deals on Sangfor for Helios!</span>
                            </label>
                        </div>
                        <div class="flex justify-center mt-4">
                            <button class="w-1/2 h-12 bg-[#04BE02] text-white font-semibold uppercase rounded-lg">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
