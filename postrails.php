<?php
if (!empty($_POST['setfence'])) {
    $fence = $_POST['setfence'];
}

If ($fence == 0) {
    echo 'You don\'t really need any posts and railings for this short fence :D';
}

If (($fence > 0) && ($fence < 1.7)) {
    echo 'Not possible to build a fence shorter than 1,7 meters.';
}

if ($fence ==1.7) {
    echo 'You need 1 railing and 2 posts to build a 1,7 meters long fence.';
}

if ($fence > 1.7) {
    $rail = ($fence - 0.1)/1.6;
    settype($rail, "integer");
    $post = $rail+1;
    settype($post, "integer");
    $length = ($rail*1.5)+($post*0.1);
    $diff = $fence-$length;
    echo 'You could build a ' . $length.' meters long fence and you need '.$rail.' rails and
    '.$post.' posts. Your fence will be '. number_format ($diff, 2) .' meters shorter, than you wanted.';
}

//
//if ($fence > 1.7) {
//    $rail = ($fence - 0.1) / 1.6;
//    settype($rail, "integer");
//    $post = $rail + 1;
//    settype($post, "integer");
//    $length = ($rail * 1.5) + ($post * 0.1);
//} elseif ($length < $fence) {
//    $length1 = $length + 1.6;
//    $diff = $length1 - $fence;
//    echo 'You could build a ' . $length1 . ' meters long fence and you need ' . ($rail+1) . ' rails and
//        ' . ($post+1) . ' posts. Your fence will be ' . number_format($diff, 2) . ' meters longer, than you wanted.';
//} else {
//    $diff1 = $fence-$length;
//    echo 'You could build a ' . $length . ' meters long fence and you need ' . $rail . ' rails and
//      ' . $post . ' posts. Your fence will be ' . number_format($diff1, 2) . ' meters shorter, than you wanted.';
//}