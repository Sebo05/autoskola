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
    <nav class="fixed top-0 left-0 right-0 flex justify-between align-middle flex-row p-10 text-white z-200 navbar blur-background">
        <img src="" alt="Logo Autoškola Petr Drbola">
        <ul class="list-none flex justify-between flex-row align-middle gap-10 text-2xl">
            <li><a href="index.php">Domů</a></li>
            <li><a href="#">Ceník</a></li>
            <li><a href="#">Přihlášení</a></li>
            <li><a href="#">Výuka</a></li>
            <li><a href="#">Testy</a></li>
            <li><a href="#">Kontakt</a></li>
            <li><a href="jizdy/login.php">Jízdy</a></li>
        </ul>
    </nav>
</header>
<main>
    <section>
        <div class="max-w-full max-height-800 mx-auto bg-black overflow-hidden relative gradient">

            <div class="mySlides w-full max-height-800 relative transition-opacity duration-1000 ease-in-out">
                <div class="absolute top-0 left-0 z-10 w-full h-full text-center flex justify-center align-middle flex-col">
                    <p class="z-10 text-white text-4xl overflow-hidden"><strong>21.července 2019:</strong> Nový automobil pro výuku skupiny B. Škoda Fabia III</p>
                </div>
                <img src="public/img/fabia3.jpg" class="w-full max-height-800 object-cover" alt="Fabka">
            </div>

            <div class="mySlides w-full max-height-800 relative transition-opacity duration-1000 ease-in-out">
                <div class="absolute top-0 left-0 z-10 w-full h-full text-center flex justify-center align-middle flex-col">
                    <p class="z-10 text-white text-4xl overflow-hidden"><strong>28.května 2014:</strong> Nový motocykl pro výuku skupin AM a A1. Honda CBF 125</p>
                </div>
                <img src="public/img/cbf125.jpg" class="w-full max-height-800 object-cover" alt="Motorka">
            </div>
            <div class="text-center absolute bottom-5 left-1/2 z-100">
                <span class="dot h-4 w-4 mt-0 mb-0 ml-0.5 mr-0.5 bg-gray-500 rounded-full inline-block transition duration-600 ease-in-out cursor-pointer" onclick="currentSlide(0);"></span>
                <span class="dot h-4 w-4 mt-0 mb-0 ml-0.5 mr-0.5 bg-gray-500 rounded-full inline-block transition duration-600 ease-in-out cursor-pointer" onclick="currentSlide(1);"></span>
            </div>
        </div>

    </section>

    <section class="flex justify-center items-center bg-gray-100">
        <div class="container mx-80 px-50 py-60">
            <p class="text-3xl">Nabízíme kvalitní výuku a výcvik k získání řidičského oprávnění skupin <strong>AM</strong>, <strong>A1</strong>, <strong>A2</strong>, <strong>B</strong>, kondiční jízdy pro již držitele řidičského oprávnění a přípravu a předvedení ke zkouškám po zákazu řízení. Využijte zkušeností a vědomostí dlouholetého zkušebního komisaře řidičů.</p>
        </div>
    </section>

    <!--Ceník-->
    <section class="flex justify-center items-center bg-violet-600 rounded-md py-20">
        <div class="flex flex-col justify-between items-center text-xl text-white text-center">
            <div class="container mx-auto table-width">
                <h3 class="text-3xl my-5">Základní výcvik:</h3>
                <div class="px-4 py-2 rounded-xl">
                    <table class="table-auto w-full bg-gray-50 rounded-xl text-black shadow-2xl">
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
                    <table class="table-auto w-full bg-gray-50 rounded-xl text-black shadow-2xl">
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
                   <table class="table-auto bg-gray-50 rounded-xl text-black shadow-2xl">
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
                   <table class="table-auto bg-gray-50 rounded-xl text-black shadow-2xl">
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
    <section class="container mx-auto">
    <!--Přihlášení-->
        <h3>Přihlášení</h3>
        <p>Přilášení je jednoduché!</p>
        <p>Stáčí si vytisknout tyto dva formuláře a po domluvě je donést na sjednané míst.</p>
        <p>Formulář pro příhlášení (přihláška musí být vytištěna oboustranně na jeden list). <a href="http://www.autoskola-drbola.wz.cz/zadost.pdf">Stáhnout zde!</a></p>
        <p>Lékařský posudek <a href="http://www.autoskola-drbola.wz.cz/posudek.pdf">Stáhnout zde!</a></p>
        <!--Vyuka-->
        <h3>Jak probíhá vyuka?</h3>
        <p>Teoretická vyuka probíhá každý pátek od 14:00 do 18:00 v učebně autoškoly ve Velkých Pavlovicích.</p>
        <p>Praktická vyuka probíhá dle dohody nebo podle přidělení instruktora.</p>
        <p>Rozvržení vašich jízd najdete zde: <a href="jizdy/jizdy-studenta.php">Kniha jízd</a></p>
        <!--Testy-->
        <h3>Chcete se připravit na závěrečné testy?</h3>
        <p>Na této stránce <a href="https://etesty2.mdcr.cz">https://etesty2.mdcr.cz</a> naleznete všechny dostupné testové otázky a také si tam můžete projít samotné testy!</p>
    </section>
    <!--Kontakty-->
    <section class="container mx-auto">
        <h3>Kontakty:</h3>
        <ul>
            <li>Velké Pavlovice Zahradní 5</li>
            <li>Telefoní číslo: +420 606 231 871</li>
            <li>E-mail: petr.drbola@seznam.cz</li>
        </ul>
        <h3>Učebna autoškoly:</h3>
        <ul>
            <li>Gymnázium Velké Pavlovice Pod školou 10</li>
            <li>Učebna č.4 v přízemí (boční vchod od atletického stadionu)</li>
            <li>Výuka probíhá každý pátek od 14:00 do 18:00 hod.</li>
        </ul>
    </section>
</main>
<footer class="py-4 bg-gray-200 text-center">
    <div class="flex justify-center space-x-4">
        <a href="#" class="text-gray-600 hover:text-blue-500" target="_blank" rel="noopener noreferrer">
        </a>
        <a href="#" class="text-gray-600 hover:text-blue-500" target="_blank" rel="noopener noreferrer">
        </a>
    </div>
    <p class="mt-4 text-gray-600">&copy; Autoři stránek Sebik a Tope</p>
</footer>



</body>
</html>