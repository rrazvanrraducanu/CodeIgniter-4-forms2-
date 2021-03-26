<?php

helper('form');
//echo form_open('/forma1');
//modificam action ->forma1, forma2 
echo '<form method="post" action="forma2">';
#text control
$data1 = ['name'          => 'text1',
        'id'            => 'text1',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '30',
       ];
#label
echo form_label('Text1 ', 'text1');
echo form_input($data1);
#submit button
echo form_submit('submit', '->');
#text control
$data2 = ['name'          => 'text2',
        'id'            => 'text2',
        'value'         => '',
        'maxlength'     => '100',
        'size'          => '30',
       ];
#label
echo form_label('Text2 ', 'text2');
echo form_input($data2);