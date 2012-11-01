<?php

/*
 *  Copyright (c) 2012. All Rights Reserved. 
 *  All the code written is developed by 
 *  Hamza Waqas (Team Lead Software Engineer)
 *  with or without his team.
 *  
 *  All the code written is custom and doesn't copied
 */

$output = theme_table(array(
    'header'    => array(
        'Subject','Message','Link','Location', 'On'
    ),
    'rows'      => $reports,
    'attributes' => array(),
    'colgroups'    => array(),
    'caption'    => '',
    'sticky'    => true,
    'empty'     => 'No reported content is there!'
));

$output .= theme('pager');
?>

<?php if (!empty ($reports)): ?>
    <?php print $output; ?>
<?php endif; ?>
