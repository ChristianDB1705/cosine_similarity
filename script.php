<?php
    function recommend_movies($user_id){
        $movies = [];

        return json_encode($movies);
    };

    function cosine_similarity($a, $b){
        $vettore_a = 0;
        $vettore_b = 0;
        $denominatore = 0;

        $len_vector = count($a);

        for($i = 0; $i < count($a); $i++){
            $vettore_a = $vettore_a + pow($a[$i], 2);
            $vettore_b = $vettore_b + pow($b[$i], 2);
        }

        $vettore_a = sqrt($vettore_a);
        $vettore_b = sqrt($vettore_b);

        $denominatore = $vettore_a * $vettore_b;

        $numeratore = 0;

        for($i = 0; $i < $len_vector; $i++){
            $numeratore = $numeratore + $a[$i] * $b[$i];
        }


        return $numeratore/$denominatore;
    }

    echo cosine_similarity(
        [3, 0, 2, 0],
        [0, 0, 4, 5]
    )
?>
