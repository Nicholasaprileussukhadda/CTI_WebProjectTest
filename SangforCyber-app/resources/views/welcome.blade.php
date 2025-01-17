<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden">
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

        <div id="form-section" class="relative bg-cover bg-center md:h-[100vh] h-[160vh]" style="background-image: url('img/Form_Section.jpeg');">
            <div class="absolute inset-0 flex md:flex-row flex-col justify-center items-center text-[#293660] font-rubik px-8 ">
                <div id="Keterangan" class="md:w-1/3 w-full pr-8">
                    <h1 class="text-4xl p-2 font-bold">About Sangfor Cyber Command</h1>
                    <div class="mt-2 text-xl p-2">
                        <p class="mb-4">Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.</p>
                        <p class="mb-4">It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.</p>
                        <p class="mb-4">The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage. It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.</p>
                        <p class="mb-4">Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats.</p>
                    </div>
                </div>
                <div id="form" class="md:w-1/3 w-full pl-8">
                    <div class="bg-white p-4 rounded-md">
                        <form action="{{ url('/formsent') }}" method="POST" class="mt-2 p-2">
                            @csrf
                            <h3 class="text-2xl font-bold">Dapatkan Free Trial selama 1 bulan,</h3>
                            <h3 class="text-lg mt-2"> analisa keamanan network anda dan lihat hasilnya!</h3>
                            <div class="flex gap-2 mt-8">
                                <div class="w-full">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                                    <input type="text" id="first-name" name="first_name" class="w-full h-12 p-2 border border-black rounded-lg" placeholder="First Name" required>
                                </div>
                                <div class="w-full">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                    <input type="text" id="last-name" name="last_name" class="w-full h-12 p-2 border border-black rounded-lg" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="mt-2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Corporate Email</label>
                                <input type="email" id="email" name="email" class="w-full h-12 p-2 border border-black rounded-lg" placeholder="email@mail.com" required>
                            </div>
                            <div class="mt-2">
                                <label for="job" class="block text-sm font-medium text-gray-700">Job Title</label>
                                <input type="text" id="job" name="job" class="w-full h-12 p-2 border border-black rounded-lg" placeholder="Your Job" required>
                            </div>
                            <div class="mt-2">
                                <label for="company" class="block text-sm font-medium text-gray-700">Compay Title</label>
                                <input type="text" id="job" name="job" class="w-full h-12 p-2 border border-black rounded-lg" placeholder="Your Company" required>
                            </div>
                            <div class="mt-2">
                                <label for="industry" class="block text-sm font-medium text-gray-700">Industry</label>
                                <select id="industry" name="industry" class="w-full h-12 p-2 border border-black rounded-lg" required>
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
                                <input type="tel" id="number" name="number" class="w-full h-12 p-2 border border-black rounded-lg" placeholder="Your Number" required>
                            </div>
                            <div class="mt-4">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-[#04BE02]">
                                    <span class="ml-2 text-gray-700">Click this box to agree to be contacted by our team and get great deals on Sangfor for Helios!</span>
                                </label>
                            </div>
                            <div class="flex justify-center mt-4">
                                <button type="submit" class="w-1/2 h-12 bg-[#04BE02] text-white font-semibold uppercase rounded-lg">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="advantage-section" class=" relative bg-cover bg-center md:h-[130vh] h-[250vh] font-rubik" style="background-image: linear-gradient(to bottom right, rgba(0, 0, 142, 0.5), rgba(4, 190, 2, 0.5)), url('img/Advantages_Section.jpeg');">
            <div class="absolute inset-0 justify-center flex flex-wrap font-rubik px-8 mt-16">
                <h1 class="text-center font-bold text-4xl text-white mb-8">Sangfor Cyber Command Advantages</h1>
                <div class="flex flex-col md:flex-row w-full h-fit justify-center">
                    <div class="flex md:w-1/4 w-full bg-white p-4 m-2">
                        <div class="p-4 flex flex-col items-center text-center">
                            <img src="img/AdvanceADV.png" class="h-1/3 mx-auto">
                            <h2 class="text-2xl font-bold mt-4">Advanced Threat Detection</h2>
                            <p class="mt-4">Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.</p>
                        </div>
                    </div>
                    <div class="flex md:w-1/4 w-full bg-white p-4 m-2">
                        <div class="p-4 flex flex-col items-center text-center">
                            <img src="img/NetworkADV.png" class="h-1/3 mx-auto">
                            <h2 class="text-2xl font-bold mt-4">Network Visibility and Control</h2>
                            <p class="mt-4">Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row w-full h-fit justify-center mt-4 mb-16">
                    <div class="flex md:w-1/4 w-full bg-white p-4 m-2">
                        <div class="p-4 flex flex-col items-center text-center">
                            <img src="img/CloudADV.png" class="h-1/3 mx-auto">
                            <h2 class="text-2xl font-bold mt-4">Cloud Security</h2>
                            <p class="mt-4">Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.</p>
                        </div>
                    </div>
                    <div class="flex md:w-1/4 w-full bg-white p-4 m-2">
                        <div class="p-4 flex flex-col items-center text-center">
                            <img src="img/SecureADV.png" class="h-1/3 mx-auto">
                            <h2 class="text-2xl font-bold mt-4">Comprehensive Security Management</h2>
                            <p class="mt-4">Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="features-section" class="relative bg-white font-rubik py-16">
            <div class="justify-center flex flex-wrap font-rubik px-8 mx-auto" style="max-width: 1200px;">
                <h1 class="text-center font-bold text-4xl text-[#293660] w-full">Sangfor Cyber Command Features</h1>
                <div class="flex md:flex-row flex-col w-full justify-center items-center mt-8">
                    <div class="flex w-1/3 p-4 rounded-md m-2">
                        <div class="p-4 flex flex-col items-center text-center">
                            <img src="img/featuresimg/threat_feature.png" class="h-1/2 mx-auto">
                            <h2 class="text-2xl font-bold mt-4">Threat Intelligence</h2>
                            <p class="mt-4">Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.</p>
                        </div>
                    </div>
                    <div class="flex w-1/3 p-4 rounded-md m-2">
                        <div class="p-4 flex flex-col items-center text-center">
                            <img src="img/featuresimg/RTfeature.png" class="h-1/2 mx-auto">
                            <h2 class="text-2xl font-bold mt-4">Real-Time Detections</h2>
                            <p class="mt-4">Real-time alert system provides instant notification of potential security incidents.</p>
                        </div>
                    </div>
                    <div class="flex w-1/3 p-4 rounded-md m-2">
                        <div class="p-4 flex flex-col items-center text-center">
                            <img src="img/featuresimg/Investigationfeature.png" class="h-1/2 mx-auto">
                            <h2 class="text-2xl font-bold mt-4">Threats Investigation</h2>
                            <p class="mt-4">In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full md:flex-row flex-col justify-center items-center">
                    <div class="flex w-1/3 p-4 rounded-md m-2">
                        <div class="p-4 flex flex-col items-center text-center">
                            <img src="img/featuresimg/securityfeature.png" class="h-1/2 mx-auto">
                            <h2 class="text-2xl font-bold mt-4">Comprehensive Security Solutions</h2>
                            <p class="mt-4">In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                        </div>
                    </div>
                    <div class="flex w-1/3 p-4 rounded-md m-2">
                        <div class="p-4 flex flex-col items-center text-center">
                            <img src="img/featuresimg/rapidfeature.png" class="h-1/2 mx-auto">
                            <h2 class="text-2xl font-bold mt-4">Rapid Response</h2>
                            <p class="mt-4">Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="value-section">
            <div id="value-content" class="relative bg-cover bg-center h-[90vh] font-rubik text-[#293660] flex justify-center items-center" style="background-image: url('img/Value_Section.jpeg');">
                <div class="px-8 flex flex-col items-center md:w-5/12 w-full">
                    <h1 class="text-center md:text-5xl text-xl font-bold">Sangfor Cyber Command’s Value to Customers</h1>
                    <ul class="list-none mt-10">
                        <li class="flex items-start mb-10">
                            <img src="img/checkmark.png" alt="Checkmark" class="h-6 w-6 mr-2">
                            <span class="text-3xl">Detect known dan unknown threats</span>
                        </li>
                        <li class="flex items-start mb-10">
                            <img src="img/checkmark.png" alt="Checkmark" class="h-6 w-6 mr-2">
                            <span class="text-3xl">Much better visibility of security posture of the entire infrastructure</span>
                        </li>
                        <li class="flex items-start mb-10">
                            <img src="img/checkmark.png" alt="Checkmark" class="h-6 w-6 mr-2">
                            <span class="text-3xl">Business Impact Analysis helps IT to understand what is already compromised and what needs to be prioritized</span>
                        </li>
                        <li class="flex items-start mb-10">
                            <img src="img/checkmark.png" alt="Checkmark" class="h-6 w-6 mr-2">
                            <span class="text-3xl">Faster Response to improve overall security control</span>
                        </li>
                        <li class="flex items-start mb-10">
                            <img src="img/checkmark.png" alt="Checkmark" class="h-6 w-6 mr-2">
                            <span class="text-3xl">Much more cost effective than other solutions such as SIEM</span>
                        </li>
                    </ul>
                </div>
                <div id="cta-line" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 bg-[#293660]">
                    <h2 class="text-white text-center md:text-2xl text-4xl font-rubik font-bold p-6">Cyber Command Customers Reference</h2>
                </div>
            </div>
            <div id="cta-content" class="flex justify-center items-center pt-7 md:h-[25vh] h-[75vh] bg-[#f8f9fa] text-white">
                <div class="flex md:flex-row flex-col space-x-12 gap-16 items-center">
                    <img src="img/brandlogoimg/LOGO-JNT 1.png" class="h-16">
                    <img src="img/brandlogoimg/Logo_JRP_Insurance 1.png" class="h-16">
                    <img src="img/brandlogoimg/kta-icon-1610331126.png" class="h-16">
                    <img src="img/brandlogoimg/samudera indonesia.png" class="h-16">
                </div>
            </div>
        </div>

        <div id="explore-section" class="bg-white font-rubik items-center justify-center text-center">
            <h1 class="text-4xl font-bold text-[#293660] m-5 mt-16">Explore Sangfor Cyber Command with Helios</h1>
            <p class="text-[#6C646A] text-2xl">Helios Informatika Nusantara as Sangfor Distributor will provide</p>
            <div class="flex md:flex-row flex-col justify-center items-center p-20 space-x-4 gap-4 mb-20">
                <div class="p-8 flex flex-col shadow-lg rounded-lg flex-1 max-w-xs h-full">
                    <div class="flex-grow flex flex-col justify-between h-full">
                        <img src="img/exploreimg/NDRicon.png" class="h-1/2 mx-auto">
                        <h2 class="text-2xl font-bold mt-4 text-center">NDR Implementation</h2>
                    </div>
                </div>
                <div class="p-8 flex flex-col shadow-lg rounded-lg flex-1 max-w-xs h-full">
                    <div class="flex-grow flex flex-col justify-between h-full">
                        <img src="img/exploreimg/Incidenticon.png" class="h-1/2 mx-auto">
                        <h2 class="text-2xl font-bold mt-4 text-center">Incident Response and Threat Hunting</h2>
                    </div>
                </div>
                <div class="p-8 flex flex-col shadow-lg rounded-lg flex-1 max-w-xs h-full">
                    <div class="flex-grow flex flex-col justify-between h-full">
                        <img src="img/exploreimg/Deviceicon.png" class="h-1/2 mx-auto">
                        <h2 class="text-2xl font-bold mt-4 text-center">Device Security Maintenance</h2>
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


    </div>
</body>
</html>
