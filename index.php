<html style="background-color:rgb(46,60,86);">
<head>
<meta charset="utf-8" />
<title>Totalno točna vremenska prognoza</title>
<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
<meta property="og:image" content="share.png" />
<meta name="keywords" content="vremenska prognoza", "Hrvatska", "točna", "precizna", "najtočnija" />
<meta name="description" content="Najtočnija vremenska prognoza na ovim prostorima" />

</head>

<div id="logo" style="display:block;margin:0 auto;max-width:500px;max-height:500px;margin-bottom:1em;text-align:center;"><img src="ttvp.png" 
style="display:inline-block; max-height: 100%; width: auto; max-width:100%;" /></div>
<div id="content" style="color:white;font-family:monospace;font-size:14pt;font-weight:100;text-align:center;max-width:800px;margin:0 auto;">

<span><?php
if (time() > strtotime('11 am')) {
$datetime = new DateTime('tomorrow');
}
else {
$datetime = new DateTime('today');
}
echo $datetime->format('d.m.Y.');
 ?>
</span><br /><br />

<?php
function gitVersion()
{
    $full = exec('git describe --tags');
    $parts = explode('-', $full);
    $structured = 'N/A';
    if (strlen($parts[0])) {
        $structured = str_replace('v', '', $parts[0]);
        if (isset($parts[1])) {
            $structured .= '.' . $parts[1];
        } else {
            $structured .= '.0';
        }
    }
    return $structured;
}

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

</div>

<footer style="margin:0 auto; display:block; width:100%; text-align:center; margin-top:3em; color:rgba(255,255,255,0.5);">ver. <?php echo gitVersion(); ?><br /><small>&copy; JMV 2017.</small></footer>

</body>
</html>
