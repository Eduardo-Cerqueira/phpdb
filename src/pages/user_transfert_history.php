<h2>Vos transferts :</h2>

<?php

$all_transfer = $dbManager->select('SELECT * FROM transfers WHERE sender = ? OR receiver = ? ', 'Transfers', [$user['IBAN'], $user['IBAN']]);
?>
<form action="/actions/valid_depot.php" method="post">
    <?php if ($all_transac) { ?>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Expediteur</th>
                    <th>Destinataire</th>
                    <th>Montant</th>
                    <th>Devise</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_transfer as $transfer) { ?>
                    <tr>
                        <?php foreach ($transfer as $key => $value) {
                            if ($key == 'sender') {
                                
                            }
                           if ($key != 'created_at' && $key != 'type') {
                                echo "<td>$value</td>";
                            }
                        }
                        ?>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    <?php } else {
        echo "<p> Vous n'avez aucun depots :(</p>";
    } ?>