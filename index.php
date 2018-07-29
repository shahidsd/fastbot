<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title> kamina Botters</title><link rel="stylesheet" type="text/css" href="http://flambon.xtgem.com/fmb/simple_black.css" media="all,handheld"/><link rel="shortcut icon" href="">





<?php
session_start();
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by HASSAN',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat by Dery")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Succes data data ente telah di simpan oleh robot. Sebentar lagi robot akan meluncur otomatis by Dery")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">PENGATURAN BOT by '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="green">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"Januari",
  "Februari",
    "Maret",
     "April",
       "Mei",
         "Juni",
           "Juli",
             "Agustus",
               "September",
          "Oktober",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<script type="text/javascript" src="//go.onclasrv.com/apu.php?zoneid=1130392"></script>
<h1 class="heading">
<h3 align="center">
<div class="panel-heading"><center><script type="text/javascript"></script><font size="20" color="blue">☪</font><b><font style="background: url(&quot;http://img1.liveinternet.ru/images/attach/c/3/77/307/77307665_MontiBlingStar77.gif&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.20em red, 0pt 5pt 0.9em white;color: white ;font-size:40;"> King Bot team Mohammad Shahid</font></b></font><font size="50" color="blue">☪</font></center></div>
<center><h2 class="title">
</font>
</h1>
<h2 class="description">
'.$hr.' : '.$tgl.' - '.$bln.' - '.$thn.'<br>
'.$jam.'</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h4 class="title">
</h4></div>
<center>
<div class="post-content" aligen="left">
<image src="http://kamina12.xtgem.com/coollogo_com-190021511.png"
<br>

<center>
<FONT face="Arial ,Tahoma" size="4" color=""> <MARQUEE bgcolor="" direction="up" width="250" height="200" scrollamount="3"><CENTER>
<a href="https://www.facebook.com/100005981882739"><img src="https://graph.facebook.com/100005981882739/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></a>
</div>
				   
				     <h5> <font color="skyblue">Mohammad Shahid</h5>
<a href="https://www.facebook.com/OfficialBotMasterSalaih"><img src="https://graph.facebook.com/100003659582428/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></a>
</div>
				    <h5>Mohammad Salaih Zubair</h5>
				    	
                         <a href="https://www.facebook.com/AdilMalik.160"><img src="https://graph.facebook.com/100009636993854/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></a>
</div>
				    	<h5>Malik Aryan</h5>
				   
                         <a href="https://www.facebook.com/nadanasad143"><img src="https://graph.facebook.com/100013055864731/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></a>
</div>
				    	<h5>Muhammad Ateeq</h5>
				    
                        <a href="https://www.facebook.com/itxtoqeer"><img src="https://graph.facebook.com/100025435539962/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></a>
</div>
				    <h5>Muhammad Toqeer</h5>
				    	
                         <a href="https://www.facebook.com/profile.php?id=100013264872712"><img src="https://graph.facebook.com/100013264872712/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></a>
</div>
				    <h5>Sufyan Bhatti</h5>
				    
                        <a href="https://www.facebook.com/shikari.raja01"><img src="https://graph.facebook.com/100000133500556/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></a>
</div>
				    <h5>Famaz Khan</h5>
				    	
                         <a href="https://www.facebook.com/Ahti.hack"><img src="https://graph.facebook.com/100006024724252/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></a>
</div>
				    <h5>Monty Shaam</h5>
				    
                         <a href="https://www.facebook.com/perfectsmoker0007"><img src="https://graph.facebook.com/100009289806627/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></a>
</div>
				    <h5>noor Safi</h5>
				    	
                         <a href="https://www.facebook.com/tanveransari.tanveransari"><img src="https://graph.facebook.com/100005935302459/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></a>
</div>
				    <h5>Tanver Ansari</h5>
				    	
                         <a href="https://www.facebook.com/alex.hamza.here"><img src="https://graph.facebook.com/100010561125328/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></a>
</div>
				    <h5>Alex Bilal</h5>
 <a href="https://www.facebook.com/100013295760447"><img src="https://graph.facebook.com/100013295760447/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:200px;width:200px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/></a>
</div>
				    <h5>Abdlwafi Ghazwa</h5></CENTER></MARQUEE> </FONT><br /> <br />


<center>
</div><script language="JavaScript" src=" http://start-wap.xtgem.com/Lengkap_script/baloon.js"></script><script type="text/javascript" src="http://mianxbotteam.com/ad/pops/?id=l477i6p5s2"></script></div><div class="iblock"></a>
<br>
<div class="post-meta2">
</div></div></div>';
}


public function bwh(){
echo'
<div id="bottom-content">
 <div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">INPUT TOKEN HERE</a></h3>
</div>
<marquee behavior="scroll" direction="right" scrollamount="5" scrolldelay="4"><strong><font style="text-shadow: 1px 1px white; color:GREEN;" size="6"> <font style="text-shadow: 1px 1px white; color:red;" size="6">♥</font></strong></center>Personal Bot Mohammad Shahid No block<font style="text-shadow: 1px 1px white; color:red;" size="6"></font></strong></center>. <font style="text-shadow: 1px 1px white; color: =red;" size="6">♥</font></strong></center> </font></strong></center></marquee>
</div></div> <audio src="" autoplay loop>
<p>Your browser does not support the audio element </p>
</audio>


<ul>
<li><b><a href="http://dev-shahid1.pantheonsite.io/tokens/">&raquo; Get iPhone Token (only this token is working in this site)</a></b></li></ul>
</div>

<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
Use robot : <font color="white">'.count($user).'</font>
<br>
<font color="white">Script Created By: Mohammad Shahid<br></font></b></u>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_friends%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired mohon comot ulang")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>

<center/>
<br><br><marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="15" direction="left" truespeed="truespeed">
<img src=""><font color="red"size="6"><b>King Bot Team</b></font> <font color="white"size="6"></font>
<img src=""></marquee>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=67medkyx3n"></script>


<style>
body{
background: url(https://i.pinimg.com/736x/3d/23/72/3d237256cf5a96b6bb98fe5fff0817b6.jpg) no-repeat center center fixed ;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
