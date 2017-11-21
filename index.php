<html>
<head>
<meta charset="utf-8" />
<title>Totalno točna vremenska prognoza</title>
<meta name="keywords" content="vremenska prognoza", "Hrvatska", "točna", "precizna", "najtočnija" />
<meta name="description" content="Najtočnija vremenska prognoza na ovim prostorima" />

</head>

<?php
$var1 = array("Djelomice", "Pretežno", "Umjereno", "Uglavnom");
$var2 = array("promjenljivo", "moguće", "mjestimice");
$var3 = array("kišovito", "sunčano", "oblačno");
$var4 = array("iznadprosječno", "ispodprosječno");
$var5 = array("toplo", "hladno");
$var6 = array("te povremeno", "a ponegdje i");
$var7 = array("slaba kiša", "povremena naoblaka");
$var8 = array("mogućnost", "mjestimično");
$var9 = array("jači pljusak", "slabiji pljusak", "mjestimična naoblaka", "sunčana razdoblja");
$var10 = array("jakih", "slabijih");
$var11 = array("bure", "juga");
$var12 = array("Također i", "Možda i");
$var13 = array("grmljavinu", "tuču", "poplavu", "lavinu", "vulkansku erupciju");
$var14 = array("sjevernog Jadrana", "srednjeg Jadrana", "južnog Jadrana", "istočne Istre", "središnje Istre", "Istre i Kvarnera", "Like", "Gorskog Kotara", "Prigorja", "središnje Slavonije", "istočne Slavonije", "Podravine");

$low_niza = rand(-20,0);
$high_niza = rand(0,20);
$high_visa = rand(20,40);

$builder = $var1[array_rand($var1)]." ".$var3[array_rand($var3)]." ".$var6[array_rand($var6)]." ".$var9[array_rand($var9)].", na Jadranu s mogućnošću ".$var10[array_rand($var10)]." udara ".$var11[array_rand($var11)].", a na kopnu ".$var4[array_rand($var4)]." ".$var5[array_rand($var5)].". Krajem dana ".$var2[array_rand($var2)]." ".$var3[array_rand($var3)]." ".$var6[array_rand($var6)]." ".$var7[array_rand($var7)].". Najniža temperatura zraka između ".$low_niza."C i +".$high_niza."C, a najviša između +".$high_niza."C i +".$high_visa."C stupnjeva. ".$var12[array_rand($var12)]." mala mogućnost za ".$var13[array_rand($var13)]." u dijelu ".$var14[array_rand($var14)].".";

echo $builder;

?>
