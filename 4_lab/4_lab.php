<?php
function pup($tree)
{
    $markup = '';
    foreach ($tree as $bank => $twig)
    {
        $markup .= '<li>' . ((is_array($twig)) ? $bank . pup($twig) : $twig) . '</li>';
    }
    return '<ul>' . $markup . '</ul>';
}

$tree = array(
    'test0',
    'test1' => array(
        'test1.1',
        'test1.2' => array(
            'test1.2.1' => array(
                'testfuck you',
                'ffdf'
            )
        )
    ) ,
    'test3'
);
echo pup($tree);

?>
