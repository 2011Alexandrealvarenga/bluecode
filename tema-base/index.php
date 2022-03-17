<?php get_header();


    $url = "https://api.giphy.com/v1/gifs/trending?api_key=pLURtkhVrUXr3KG25Gy5IvzziV5OrZGa";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    $result = json_decode(curl_exec($ch));

        foreach($result->data as $get_result): ?>
        <ul>
            <li><h5>Movie Title:</h5><p> <?= $get_result->title ;?></p></li>
            
            <li><p>Address:</p> <a href="<?= $get_result->url ?>"><?=  $get_result->url ;?></a></li>
            <li><?= $get_result->slug ;?></li>
            <li><?= $get_result->username ;?></li>
                 <?php foreach($get_result->original as $origin): ?>
                    <p><?= $origin->frame ;?></p>
                               
                <?php endforeach; ?> 
            <hr>
        </ul>
        
        <?php endforeach; ?>

    </div>

<?php get_footer(); ?>
