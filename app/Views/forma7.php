<?php
helper('form');
//echo form_open();
echo '<form method="post" action="forma7">';
#text control
$data1 = ['name'          => 'text1',
        'id'            => 'text1',
        'value'         => $var1,
        'maxlength'     => '100',
        'size'          => '30',
       ];
#label
echo form_label('val1 ', 'text1');
echo form_input($data1);
#plus
$plus = ['name'          => 'plus',
        'id'            => 'plus',
        'value'         => '+',
        'maxlength'     => '100',
        'size'          => '1',
       ];
echo form_input($plus);

#text control
$data2 = ['name'          => 'text2',
        'id'            => 'text2',
        'value'         => $var2,
        'maxlength'     => '100',
        'size'          => '30',
       ];
#label
echo form_label('val2 ', 'text2');
echo form_input($data2);
#submit button
echo form_submit('submit', '=');

#text control
$data3 = ['name'          => 'text3',
        'id'            => 'text3',
        'value'         => $var3,
        'maxlength'     => '100',
        'size'          => '30',
       ];
#label
echo form_label('Result ', 'text3');
echo form_input($data3);