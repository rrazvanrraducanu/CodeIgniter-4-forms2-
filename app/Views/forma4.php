<?php

helper('form');
echo form_open();
#text control
$data1 = ['name'          => 'text1',
        'id'            => 'text1',
        'value'         => $var1,
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
          'value'         => $var2,
         'rows'     => '5',
         'cols'          => '30',
       ];
#label
echo form_label('Details ', 'textarea1');
echo form_textarea($text1);
