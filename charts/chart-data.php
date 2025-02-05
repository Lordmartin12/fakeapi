<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

function getSeries()
{
    $series = array();
    for ($i = 1; $i <= 9; $i++) {
        $series[] = rand(1, 100);
    }
    return $series;
}

$data = array(
    'categories' => array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'),
    'series' => [
        [
            'name' => 'Income', 
            'data' => getSeries()
        ],
        [
            'name' => 'Expenses', 
            'data' => getSeries()
        ]
    ]
);

echo json_encode($data);
