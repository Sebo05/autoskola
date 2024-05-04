<?php
$pageTitle = "Autoškola Petr Drbola Velké Pavlovice";
?>

<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./index.js"></script>
    <title><?= $pageTitle?></title>
</head>
<body>
<header>
    <nav class="fixed top-0 left-0 right-0 flex justify-between align-middle flex-row p-8 text-white z-200 navbar blur-background">
        <img src="./public/img/logo-drbola-web1.svg" alt="Logo Autoškola Petr Drbola" class="w-auto h-16 -mt-4">
        <ul class="list-none flex justify-between flex-row align-middle gap-10 text-2xl">
            <li><a href="#sekce1">Domů</a></li>
            <li><a href="#sekce3">Ceník</a></li>
            <li><a href="#sekce4">Přihlášení</a></li>
            <li><a href="#vyuka">Výuka</a></li>
            <li><a href="#testy">Testy</a></li>
            <li><a href="#sekce5">Kontakt</a></li>
            <li><a href="jizdy/login.php">Jízdy</a></li>
        </ul>
    </nav>
</header>
<main>
    <section id="sekce1">
        <div class="max-w-full max-height-800 mx-auto bg-black overflow-hidden relative gradient">

            <div class="mySlides w-full max-height-800 relative transition-opacity duration-1000 ease-in-out">
                <div class="absolute top-0 left-0 z-10 w-full h-full text-center flex justify-center align-middle flex-col gradient">
                    <p class="z-10 font-bold text-4xl text-white text-center">Aktuality:</p>
                    <p class="z-10 text-white text-4xl"><strong>21.července 2019:</strong> Nový automobil pro výuku skupiny B. Škoda Fabia III</p>
                </div>
                <img src="public/img/fabia3.jpg" class="w-full max-height-800 object-cover" alt="Fabka">
            </div>

            <div class="mySlides w-full max-height-800 relative transition-opacity duration-1000 ease-in-out">
                <div class="absolute top-0 left-0 z-10 w-full h-full text-center flex justify-center align-middle flex-col gradient">
                    <p class="z-10 font-bold text-4xl text-white text-center">Aktuality:</p>
                    <p class="z-10 text-white text-4xl"><strong>28.května 2014:</strong> Nový motocykl pro výuku skupin AM a A1. Honda CBF 125</p>
                </div>
                <img src="public/img/cbf125.jpg" class="w-full max-height-800 object-cover" alt="Motorka">
            </div>
            <div class="text-center absolute bottom-5 right-[49%] z-100">
                <span class="dot h-4 w-4 mt-0 mb-0 ml-0.5 mr-0.5 bg-violet-950 rounded-full inline-block transition duration-600 ease-in-out cursor-pointer" onclick="currentSlide(0);"></span>
                <span class="dot h-4 w-4 mt-0 mb-0 ml-0.5 mr-0.5 bg-violet-950 rounded-full inline-block transition duration-600 ease-in-out cursor-pointer" onclick="currentSlide(1);"></span>
            </div>
        </div>

    </section>

    <section class="flex justify-center items-center flex-col bg-gray-100 relative" id="sekce2">
        <div class="text-violet-600 absolute top-1/4">
            <a href="#nabidka">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-auto h-16 mx-auto animate-bounce">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                </svg>
            </a>
        </div>
        <div class="container mx-80 px-50 py-60" id="nabidka">
            <p class="text-3xl"><span class="text-4xl font-bold">NABÍZÍME</span> kvalitní výuku a výcvik k získání řidičského oprávnění skupin <strong>AM</strong>, <strong>A1</strong>, <strong>A2</strong>, <strong>B</strong>, kondiční jízdy pro již držitele řidičského oprávnění a přípravu a předvedení ke zkouškám po zákazu řízení. <strong>Využijte zkušeností a vědomostí dlouholetého zkušebního komisaře řidičů.</strong></p>
        </div>
    </section>

    <!--Ceník-->
    <section class="flex justify-center items-center bg-violet-600 rounded-md py-20" id="sekce3">
        <div class="flex flex-col justify-between items-center text-xl text-white text-center">
            <div class="container mx-auto table-width">
                <h3 class="text-3xl my-5">Základní výcvik:</h3>
                <div class="px-4 py-2 rounded-xl">
                    <table class="table-auto mx-auto w-full bg-gray-50 rounded-xl text-black shadow-2xl">
                        <thead class="border-b border-b-gray-300">
                        <tr>
                            <th class="px-4 py-2">Skupiny</th>
                            <th class="px-4 py-2">Informace o skupině</th>
                            <th class="px-4 py-2">Potřebný věk</th>
                            <th class="px-4 py-2">Cena</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-b border-b-gray-300">
                            <td class="px-4 py-2  border-r border-r-gray-300 font-bold">B</td>
                            <td class="px-4 py-2  border-r border-r-gray-300">Osobní automobily.</td>
                            <td class="px-4 py-2  border-r border-r-gray-300">
                                18 let <br>
                                17 let (pod dohledem mentora)
                            </td>
                            <td class="px-4 py-2  border-r border-r-gray-300 font-bold">19 000 Kč</td>
                        </tr>
                        <tr class="border-b border-b-gray-300">
                            <td class="px-4 py-2  border-r border-r-gray-300 font-bold">AM</td>
                            <td class="px-4 py-2  border-r border-r-gray-300">Mopedy a malé motocykly s max.konstrukční rychlostí do 45 km za hod.</td>
                            <td class="px-4 py-2  border-r border-r-gray-300">15 let</td>
                            <td class="px-4 py-2  border-r border-r-gray-300 font-bold">17 000 Kč</td>
                        </tr>
                        <tr class="border-b border-b-gray-300">
                            <td class="px-4 py-2  border-r border-r-gray-300 font-bold">A1</td>
                            <td class="px-4 py-2  border-r border-r-gray-300">Motocykly o objemu válců do 125ccm a max. výkonu 11kW</td>
                            <td class="px-4 py-2  border-r border-r-gray-300">16 let</td>
                            <td class="px-4 py-2  border-r border-r-gray-300 font-bold">17 000 Kč</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-r border-r-gray-300 font-bold">A2</td>
                            <td class="px-4 py-2 border-r border-r-gray-300">Motocykly o max. výkonu 35kW.</td>
                            <td class="px-4 py-2 border-r border-r-gray-300">18 let</td>
                            <td class="px-4 py-2 font-bold">17 000 Kč</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <h3 class="text-3xl my-5">Sdružený výcvik:</h3>
                <div class="px-4 py-2 rounded-xl">
                    <table class="table-auto mx-auto w-full bg-gray-50 rounded-xl text-black shadow-2xl">
                        <thead class="border-b border-b-gray-300">
                        <tr>
                            <th class="px-4 py-2">Skupina</th>
                            <th class="px-4 py-2">Potřebný věk</th>
                            <th class="px-4 py-2">Cena</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-b border-b-gray-300">
                            <td class="px-4 py-2  border-r border-r-gray-300 font-bold">A1+B</td>
                            <td class="px-4 py-2  border-r border-r-gray-300">18 let
                                17 let (sk. B pod dohledem mentora)</td>
                            <td class="px-4 py-2 font-bold">34 000 Kč</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2  border-r border-r-gray-300 font-bold">A2+B</td>
                            <td class="px-4 py-2  border-r border-r-gray-300">18 let</td>
                            <td class="px-4 py-2 font-bold">34 000 Kč</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

           <div>
               <!--Tabulka 3-->
               <h3 class="text-3xl my-5">Rozšiřující výcvik (méně než dva roky držení A1):</h3>
               <div class="px-4 py-2 rounded-xl">
                   <table class="table-auto mx-auto bg-gray-50 rounded-xl text-black shadow-2xl">
                       <thead class="border-b border-b-gray-300">
                       <tr>
                           <th class="px-4 py-2">Rozšíření</th>
                           <th class="px-4 py-2">Potřebný věk</th>
                           <th class="px-4 py-2">Cena</th>
                       </tr>
                       </thead>
                       <tbody>
                       <tr class="border-b border-b-gray-300">
                           <td class="px-4 py-2 border-r border-r-gray-300 font-bold">A1 na A2</td>
                           <td class="px-4 py-2 border-r border-r-gray-300">18 let</td>
                           <td class="px-4 py-2 font-bold">11 000 Kč</td>
                       </tr>
                       <tr>
                           <td class="px-4 py-2 border-r border-r-gray-300 font-bold">A1 na A2 + B</td>
                           <td class="px-4 py-2 border-r border-r-gray-300">18 let</td>
                           <td class="px-4 py-2 font-bold">27 000 Kč</td>
                       </tr>
                       </tbody>
                   </table>
               </div>
           </div>
           <div>
               <!--Tabulka 4-->
               <h3 class="text-3xl my-5">Rozšiřující výcvik (po dvou letech držení A1):</h3>
               <div class="px-4 py-2 rounded-xl">
                   <table class="table-auto mx-auto bg-gray-50 rounded-xl text-black shadow-2xl">
                       <thead class="border-b border-b-gray-300">
                       <tr>
                           <th class="px-4 py-2">Rozšíření</th>
                           <th class="px-4 py-2">Potřebný věk</th>
                           <th class="px-4 py-2">Cena</th>
                       </tr>
                       </thead>
                       <tbody>
                       <tr class="border-b border-b-gray-300">
                           <td class="px-4 py-2  border-r border-r-gray-300 font-bold">A1 na A2</td>
                           <td class="px-4 py-2  border-r border-r-gray-300">18 let</td>
                           <td class="px-4 py-2 font-bold">5 000 Kč</td>
                       </tr>
                       <tr>
                           <td class="px-4 py-2  border-r border-r-gray-300 font-bold">A1 na A2 + B</td>
                           <td class="px-4 py-2  border-r border-r-gray-300">18 let</td>
                           <td class="px-4 py-2 font-bold">22 000 Kč</td>
                       </tr>
                   </table>
               </div>

           </div>
        </div>
    </section>
    <section class="flex justify-center items-center bg-gray-100 rounded-md py-20" id="sekce4">
        <div class="flex flex-col justify-between items-center text-xl">
            <div class="prihlaseni mx-auto my-10">
                <h3 class="text-center text-6xl font-bold mb-10">Přihlášení</h3>
                <p class="text-4xl  mb-5">Přilášení je jednoduché!</p>
                <p class="text-3xl mb-5">Stáčí si vytisknout tyto dva formuláře a po domluvě je donést na sjednané místo.</p>
                <p class="text-3xl font-bold mb-5">Formulář pro příhlášení (musí být vytištěno oboustranně na jeden list). <button class="bg-violet-500 w-auto p-1.5 rounded-lg hover:bg-violet-600 transition duration-500 text-white"><a href="http://www.autoskola-drbola.wz.cz/zadost.pdf" target="_blank">Stáhnout zde!</a></button></p>
                <p class="text-3xl font-bold">Lékařský posudek <button class="bg-violet-500 w-auto p-1.5 rounded-lg hover:bg-violet-600 transition duration-500 text-white"><a href="http://www.autoskola-drbola.wz.cz/posudek.pdf" target="_blank">Stáhnout zde!</a></button></p>
            </div>
            <div class="border-b border-b-violet-600 w-full"></div>
            <div class="vyuka mx-auto my-10" id="vyuka">
                <h3 class="text-center text-6xl font-bold mb-10">Jak probíhá výuka?</h3>
                <p class="text-3xl"><span class="font-bold">Teoretická výuka</span> probíhá <span class="font-bold">každý pátek od 14:00 do 18:00</span> v učebně autoškoly ve <span class="font-bold">Velkých Pavlovicích</span>.</p>
                <p class="text-3xl"><span class="font-bold">Praktická výuka</span> probíhá dle dohody nebo podle přidělení instruktora.</p>
                <p class="text-3xl my-10">Rozvržení vašich jízd naleznete zde: <button class="bg-violet-500 w-auto p-1.5 rounded-lg hover:bg-violet-600 transition duration-500 text-white font-bold"><a href="jizdy/jizdy-studenta.php" >Kniha jízd</a></button></p>
            </div>
            <div class="border-b border-b-violet-600 w-full"></div>
            <div class="testy mx-auto my-10" id="testy">
                <h3 class="text-center text-6xl font-bold mb-10">Chcete se připravit na závěrečné testy?</h3>
                <p class="text-3xl">Na této stránce <a href="https://etesty2.mdcr.cz" class="text-violet-600 underline">https://etesty2.mdcr.cz</a> naleznete všechny dostupné testové otázky a také si tam můžete projít samotné testy!</p>
            </div>
        </div>

    </section>
    <!--Kontakty-->
    <section class="flex justify-center items-center bg-violet-600 rounded-t-lg py-20" id="sekce5">
        <div class="flex flex-row justify-between gap-20 items-center text-xl text-white text-left">
            <div>
                <h3 class="text-3xl font-bold my-1 text-center">Kontakty:</h3>
                <ul>
                    <li class="text-gray-200 mt-3"><span class="font-bold">Adresa:</span> Velké Pavlovice Zahradní 5</li>
                    <li class="text-gray-200 mt-3"><span class="font-bold">Telefoní číslo:</span> +420 606 231 871</li>
                    <li class="text-gray-200 mt-3"><span class="font-bold">E-mail:</span> petr.drbola@seznam.cz</li>
                </ul>
            </div>
            <div>
                <h3 class="text-3xl font-bold my-1 text-center">Učebna autoškoly:</h3>
                <ul>
                    <li class="text-gray-200 mt-3 hover:underline"><a href="https://www.google.com/maps/place/Gymn%C3%A1zium,+Velk%C3%A9+Pavlovice,+Pod+%C5%A0kolou+10,+p%C5%99%C3%ADsp%C4%9Bvkov%C3%A1+organizace/@48.9050017,16.8171103,18.75z/data=!4m14!1m7!3m6!1s0x4712d11dfbc03eb1:0x1244ac3b0d942733!2zR3ltbsOheml1bSwgVmVsa8OpIFBhdmxvdmljZSwgUG9kIMWga29sb3UgMTAsIHDFmcOtc3DEm3Zrb3bDoSBvcmdhbml6YWNl!8m2!3d48.9047969!4d16.8174814!16s%2Fg%2F1tfc9xks!3m5!1s0x4712d11dfbc03eb1:0x1244ac3b0d942733!8m2!3d48.9047969!4d16.8174814!16s%2Fg%2F1tfc9xks?entry=ttu" target="_blank">Gymnázium Velké Pavlovice Pod školou 10</a></li>
                    <li class="text-gray-200 mt-3">Učebna č.4 v přízemí (boční vchod od atletického stadionu)</li>
                    <li class="text-gray-200 mt-3">Výuka probíhá každý pátek od 14:00 do 18:00 hod.</li>
                </ul>
            </div>
        </div>

    </section>
</main>
<footer class="py-4 bg-violet-700 text-center">
    <div class="flex justify-center space-x-4 text-white">
        <a href="#" class="text-white decoration-0" target="_blank" rel="noopener noreferrer">
        </a>
        <a href="#" class="text-white decoration-0" target="_blank" rel="noopener noreferrer">
        </a>
    </div>
    <p class="mt-4 text-white decoration-0">&copy; Autoři stránek Sebik a Tope</p>
</footer>



</body>
</html>