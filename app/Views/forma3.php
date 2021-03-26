<?php

helper('form');
//echo form_open('/forma4');
echo '<form method="post" action="forma4">';
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
#textarea
$text1 = ['name'          => 'textarea1',
          'id'            => 'textarea1',
          'value'         => '',
         'rows'     => '5',
         'cols'          => '30',
       ];
#label
echo form_label('Details ', 'textarea1');
echo form_textarea($text1);
