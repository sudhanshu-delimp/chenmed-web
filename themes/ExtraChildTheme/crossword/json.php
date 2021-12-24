<?php
$items  = array(    
    array(
        'item_id'   => 4,
        'direction' => 'down',
        'clue'      => 'Memakan begitu saja tanpa nasi',
        'answer'    => 'gado',
        'start_x'   => 3,
        'start_y'   => 0
    ),
    array(
        'item_id'   => 3,
        'direction' => 'across',
        'clue'      => 'Alat pembayaran',
        'answer'    => 'uang',
        'start_x'   => 0,
        'start_y'   => 0
    ),
    array(
        'item_id'   => 2,
        'direction' => 'down',
        'clue'      => 'Undang-Undang Dasar',
        'answer'    => 'uud',
        'start_x'   => 0,
        'start_y'   => 0
    )
);
echo json_encode($items);
