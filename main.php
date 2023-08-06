<?php
echo "Welcome To My Game\n";
while (true){
echo "===== Game Tebak Angka =====\n";
echo "Tebaklah angka antara 1 sampai 9!\n";
$computer = rand(1,9);
echo "Masukkan Tebakanmu : \n";
$player = trim(fgets(STDIN));
if($player == $computer) {
  echo "Menang. Angka komputer adalah $computer.\n";
  exit;
}else{
  echo "Kalah. Angka komputer adalah $computer.\n";
}
}