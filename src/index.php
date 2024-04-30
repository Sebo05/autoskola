<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <title>Autoškola Petr Drbola Velké Pavlovice</title>

</head>
<body>
<header>
    <nav class="sticky top-0 left-0 right-0 flex justify-between align-middle flex-row p-10 border-b border-b-green-600">
        <img src="" alt="Logo Autoškola Petr Drbola">
        <ul class="list-none flex justify-between flex-row align-middle gap-10 text-2xl">
            <li><a href="index.php">Domů</a></li>
            <li><a href="#">Ceník</a></li>
            <li><a href="#">Přihlášení</a></li>
            <li><a href="#">Výuka</a></li>
            <li><a href="#">Testy</a></li>
            <li><a href="#">Kontakt</a></li>
            <li><a href="../jizdy/login.php">Jízdy</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="">
        <h1 class="text-6xl mt-10 text-center">Vítej na stránkách Autoškoly Petr Drbola Velké Pavlovice, Mikulov</h1>
        <div class="border-b border-t border-black mt-10 mb-10">
            <!--Tady bude ten slider-->
            <h1 class="text-4xl mt-10 text-center">Aktuality:</h1>
            <div class="carousel w-auto h-80 relative">
                <button class="absolute bg-none border-none text-7xl top-1/2 z-10 prev">&lt;</button>
                <button class="absolute bg-none border-none text-7xl top-1/2 z-10 next">&gt;</button>
                <ul>
                    <li class="absolute inset-0 opacity-0" data-active="true">
                        <div>
                            <p class="">21. července 2019: Nový automobil Škoda Fabia III pro výuku skupiny B.</p>
                            <img src="http://www.autoskola-drbola.wz.cz/grafika/foto/fabia3.jpg" alt="Foto auta Škoda Fabia 3 pro výuku skupiny B." class="w-1/2 h-auto">
                        </div>
                    </li>
                    <li class="absolute inset-0 opacity-0">
                        <div>
                            <p class="">28. května 2014: Nový motocykl Honda CBF 125 pro výuku skupin AM a A1.</p>
                            <img src="http://www.autoskola-drbola.wz.cz/grafika/foto/cbf125.jpg" alt="Foto motocyklu Honda CBF 125 pro výuku skupin AM a A1. " class="w-1/2 h-auto">
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <!--Ceník-->
    <section>
        <!--Tabulak 1-->
        <h3>Základní výcvik:</h3>
        <table style="border: solid black">
            <thead>
            <tr>
                <th>Skupiny</th>
                <th>Informace o skupině</th>
                <th>Potřebný věk</th>
                <th>Cena</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>B</td>
                <td>Osobní automobily.</td>
                <td>
                    18 let <br>
                    17 let (pod dohledem mentora)
                </td>
                <td>19 000 Kč</td>
            </tr>
            <tr>
                <td>AM</td>
                <td>Mopedy a malé motocykly s max.konstrukční rychlostí do 45 km za hod.</td>
                <td>15 let</td>
                <td>17 000 Kč</td>
            </tr>
            <tr>
                <td>A1</td>
                <td>Motocykly o objemu válců do 125ccm a max. výkonu 11kW</td>
                <td>16 let</td>
                <td>17 000 Kč</td>
            </tr>
            <tr>
                <td>A2</td>
                <td>Motocykly o max. výkonu 35kW.</td>
                <td>18 let</td>
                <td>17 000 Kč</td>
            </tr>
            </tbody>
        </table>
        <!--Tabulka 2-->
        <h3>Sdružený výcvik:</h3>
        <table class="border-black">
            <thead>
            <tr>
                <th>Skupina</th>
                <th>Potřebný věk</th>
                <th>Cena</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>A1+B</td>
                <td>18 let
                    17 let (sk. B pod dohledem mentora)</td>
                <td>34 000 Kč</td>
            </tr>
            <tr>
                <td>A2+B</td>
                <td>18 let</td>
                <td>34 000 Kč</td>
            </tr>
            </tbody>
        </table>

        <!--Tabulka 3-->
        <h3>Rozšiřující výcvik (méně než dva roky držení A1):</h3>
        <table style="border: solid black">
            <thead>
            <tr>
                <th>Rozšíření</th>
                <th>Potřebný věk</th>
                <th>Cena</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>A1 na A2</td>
                <td>18 let</td>
                <td>11 000 Kč</td>
            </tr>
            <tr>
                <td>A1 na A2 + B</td>
                <td>18 let</td>
                <td>27 000 Kč</td>
            </tr>
            </tbody>
        </table>
        <!--Tabulka 4-->
        <h3>Rozšiřující výcvik (po dvou letech držení A1):</h3>
        <table style="border: solid black">
            <thead>
            <tr>
                <th>Rozšíření</th>
                <th>Potřebný věk</th>
                <th>Cena</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>A1 na A2</td>
                <td>18 let</td>
                <td>5 000 Kč</td>
            </tr>
            <tr>
                <td>A1 na A2 + B</td>
                <td>18 let</td>
                <td>22 000 Kč</td>
            </tr>
        </table>
    </section>
    <section>
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
        <p>Rozvržení vašich jízd najdete zde: <a href="../jizdy/jizdy-studenta.php">Kniha jízd</a></p>
        <!--Testy-->
        <h3>Chcete se připravit na závěrečné testy?</h3>
        <p>Na této stránce <a href="https://etesty2.mdcr.cz">https://etesty2.mdcr.cz</a> naleznete všechny dostupné testové otázky a také si tam můžete projít samotné testy!</p>
    </section>
    <!--Kontakty-->
    <section>
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
<footer>
    <p>&copy; Autoři stránek Sebik a Tope</p>
</footer>

<script>
    const activeItem = document.querySelectorAll('[data-active="true"]');

    if(activeItem) {
        activeItem.classList.add('opacity-1');
    }
</script>


</body>
</html>