<?php
class dev{

}
class prog{

}
$shiva =new dev();
if($shiva instanceof dev){
    echo "Shiva is a developer";
}
else{
    echo " Shiva is a not a dev";
}
var_dump($shiva instanceof dev);
var_dump($shiva instanceof prog);
?>