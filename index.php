<?php
$h2_1='Grizai velai';
$h2_2='Grizai velai ir isgeres';
$h2_3='Grizai isgeres';
$h2_4='Nieko nepadare';
$h2=null;

$grizai_velai= rand(0,1);
$grizai_isgeres=rand(0,1);

if ($grizai_isgeres){
    if ($grizai_velai){
        $h2= $h2_2;
    }
    $h2=$h2_3;
}
elseif($grizai_velai){
    $h2=$h2_1;
}
else{
    $h2=$h2_4;
}

?>

<html lang="en" dir="ltr">
<head>

</head>
<body>
    <h1> Buitine skaiciuokle </h1>
    <h2><?php print $h2; ?> </h2>


</body>
</html>