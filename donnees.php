<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=description content="Bienvenue sur la page des données du site sur Bruno Mars dans le cadre de la SAE 105, vous trouverez sur cette page toute la discographie de Bruno Mars">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" type ="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css">
    <title>Données</title>
</head>
<body>
    <?php
        // Appel du bloc Header et du Menu>
        require ('header.php');
    ?>
    <main>
        <h1>Données</h1>
        <div>
            <table id="montableau">
                <thead>
                    <tr>
                        <th>Date de sortie</th>
                        <th>Nom de l'album</th>
                        <th>Nom de la musique</th>
                        <th>Collaborateurs</th>
                        <th>Certifications</th>
                        <th>Nominations</th>
                        <th>Durée</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Déclaration du fichier et de son chemin dans une variable
                        $fichier = './datas/donnees.json';

                        // Lecture du fichier - On stocke le contenu dans une autre variable
                        $tabFilmsJSON = file_get_contents($fichier);

                        // Décodage du contenu du fichier et transformation en tablau php (array)
                        $tabFilmsPHP = json_decode($tabFilmsJSON,true);

                        foreach ($tabFilmsPHP as $film) {
                            echo '<tr>';
                            echo '<td>' . $film['Date de sortie'] . '</td>';
                            echo '<td>' . $film["Nom de l'album/ep"] . '</td>';
                            echo '<td>' . $film['Nom de la musique'] . '</td>';
                            echo '<td>' . $film['Collaborateurs'] . '</td>';
                            echo '<td>' . $film['Certifications (desservies par la RRIA)'] . '</td>';
                            echo '<td>' . $film['Nominations'] . '</td>';
                            echo '<td>' . $film['Duree (en min:sec)'] . '</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
<br><br>
        <p><sup>1</sup>Cet album a reçu 1 disque d'Or, 7 disques de Platine et 2 nominations au GRAMMY Awards.</p>
<br>
        <p><sup>2</sup>Cet album a reçu 1 disque d'Or, 6 disques de Platine et une victoire au GRAMMY Awards pour le meilleur album vocal pop de l'année 2013.</p>
<br>
        <p><sup>3</sup>Cet album a reçu 2 victoires au GRAMMY Awards pour le meilleur album de l'année 2017 et également pour le meilleur album R&B de la même année.</p>
<br>
        <p>N.B. les titres qui apparaissent dans ce tableau sont issus de sa discographie officielle, des morceaux tels que Billionaire, Nothin' on You ou encore Uptown Funk n'apparaissent donc pas dans ce tableau.</p>
    </main>
    <div class="btn">
        <img src="images/fleche.png" alt="flèche vers le haut">
    </div>
    <?php
        // Appel du bloc Footer
        require ('footer.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.13.7/sorting/date-euro.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function() {
            console.log("go");
            $('#montableau').DataTable({
                language: {url: 'http://cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'},
                columnDefs: [
                    { type: 'date-euro', targets : 0 }
                ],
                dom: 'Bfrtip',
                buttons: ['print']
            });
        });
    </script>
</body>
</html>