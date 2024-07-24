<?php 

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

    
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>PHP Hotel</title>
</head>
<body class="p-5">
    <h1 class="fw-normal">PHP Hotel</h1>

    <div class="d-flex align-items-center">
        <!-- checkbox per il filtro -->
        <div class="form-check me-5">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Solo con parcheggio
            </label>
        </div>

        <!-- radios section -->
       
        <span class="me-2">Voto:</span>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">2</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">3</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">4</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">5</label>
        </div>

        <button type="button" class="btn btn-primary">Primary</button>
    </div>

    <!-- creo la tabella boostrap -->
        <table class="table" > 
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <!-- faccio un ciclo foreach nell'array degli hotel per tirare fuori i dati da inserire nella tabella -->
            <?php foreach($hotels as $hotel): ?>
                <tr>
                <td scope="row"><?php echo $hotel['name'] ?></th>
                <td><?php echo $hotel['description'] ?></td>
                <!-- ho inserito un ternario per far si che true e false del parcheggio diventino si o no -->
                <td><?php echo ($hotel['parking'] ? 'Si' : 'No') ?></td>
                <td><?php echo $hotel['vote'] ?></td>
                <td>km. <?php echo $hotel['distance_to_center'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>
</body>
</html>