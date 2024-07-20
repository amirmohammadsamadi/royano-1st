<?php
try {
  if ($_GET[0]==1) {
    $a = 'poster.jpg';
    $b = 'شهید سید ابراهیم رئیسی';
}
elseif ($_GET[0]==1) {
    $a = 'poster2.jpg';
    $b = 'شهید حاج قاسم سلیمانی';
}
else {
    $a = 'pooste3.jpg';
    $b = 'شهید محسن فخری زاده';
}  
}
catch(Exception){
    echo "خطایی وجود دارد";
}
?>

@extends('master')
@section('body')
    img
@endsection