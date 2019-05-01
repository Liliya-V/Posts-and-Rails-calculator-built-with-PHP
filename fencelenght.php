<?php
if (!empty($_POST['setrails']) && !empty($_POST['setposts'])) {
    $railing = (int)$_POST['setrails'];
    $post = (int)$_POST['setposts'];
}

if (($railing<1) || ($post<2)) {
    echo 'Not possible to build a fence, you have not enough material.';
}

if (($railing==1) && ($post==2)) {
    echo 'Fence is  1,7  meters long';
    echo '<br>';
    echo 'You have no railings and posts left';
}

if (($railing==1) && ($post>2)) {
    $postleft = ($post - ($railing + 1));
    echo 'Fence is  1,7  meters long';
    echo '<br>';
    echo 'There are ' . $postleft . ' posts, which were not used';
}

if (($railing>=2) && ($post>1) && ($railing == $post)) {
    $fence = (($railing-1)*1.5+($post*0.1));
echo 'Fence is  '. $fence .'  meters long';
echo '<br>';
echo 'One railing was not used';
}

if (($railing>2) && ($post>1) && ($railing > $post)) {
    $fence = (($post - 1) * 1.5 + ($post * 0.1));
    $railingleft = ($railing - ($post - 1));
    echo 'Fence is  ' . $fence . '  meters long';
    echo '<br>';
    echo 'There are ' . $railingleft . ' railings, which were not used';
}

if (($railing>2) && ($post>1) && ($railing < $post)) {
    $fence = (($railing * 1.5) + ($railing + 1)* 0.1);
    $postleft = ($post - ($railing + 1));
    echo 'Fence is  ' . $fence . '  meters long';
    echo '<br>';
    echo 'There are ' . $postleft . ' posts, which were not used';
}




