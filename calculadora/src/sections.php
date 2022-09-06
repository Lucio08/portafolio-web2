<?php
require_once 'db_temporal.php';
function showHome()
{
    include_once 'templates/header.php'; ?>

    <form id="jsForm" method="GET">
        <label for="numero">Numero 1:</label><input type="number" name="numero1" required>
        <select name="opciones">

            <option value="sumar">+</option>
            <option value="restar">-</option>
            <option value="multiplicar">*</option>
            <option value="dividir">/</option>

        </select>
        <label for="numero">Numero 2:</label><input type="number" name="numero2" required>
        <input type="submit" value="=">
        <span id="result"></span>
    </form>

<?php include_once 'templates/footer.php';
}

function showPi()
{
    include_once "templates/header.php";
    $pi = M_PI;

    echo "<h2>Acá el numero pi</h2>";
    echo "<p>PI= $pi</p>";
    echo "<a href=home>volver</a>";
    include_once "templates/footer.php";
}

function showAbout($dev = null)
{
    $developers = getDevelopers();
    $selectedDev = getDevelopersById($dev);
    include 'templates/header.php';
?>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h3>Creador</h3>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <ul>
                        <li>Lucio ingargiola</li>
                        <li> Edad:21</li>
                        <li>Estudiante de Desarrollo de Aplicaciones Informaticas</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <h3>Contactos</h3>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <ul>
                        <li> <a href="https://www.instagram.com/lucioingargiola">Instagram</a></li>
                        <li> <a href="https://www.twitter.com/ingargiolaLucio">Twitter</a></li>
                        <li> <a href="https://github.com/Lucio08">Git-Hub</a></li>
                        <li> <a href="https://outlook.live.com/mail/0/">Outlook</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

<?php
    include_once "templates/footer.php";
}
