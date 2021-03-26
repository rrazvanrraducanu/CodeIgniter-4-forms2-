<?php
helper('form');
//echo form_open();
echo '<form method="post" action="forma6">';
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
          'value'         => $var1,
         'rows'           => '5',
         'cols'          => '30',
       ];
#label
echo form_label('Textarea ', 'textarea1');
echo form_textarea($text1);

#submit button
echo form_submit('submit', '->');
#combobox
$drop=[
   ' '=>' ',
    'small'=>'Small',
    'medium'=>'Medium',
    'large'=>'Large',
    'xlarge'=>'Extra Large', 
     $var2=>$var2,
];
#label
echo form_label('Dropbox: ', '');
echo form_dropdown('dropdown', $drop,'medium');
#submit button
echo form_submit('submit', '->');

#text control
$data2 = ['name'          => 'text2',
         'id'            => 'text2',
         'value'         => $var3,
         'maxlength'     => '100',
         'size'          => '30',
       ];
#label
echo form_label('Text2 ', 'text2');
echo form_input($data2);

echo form_close();
