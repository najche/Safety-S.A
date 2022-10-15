<?php ob_start(); 
include 'conexion.php';

$sql = "SELECT * FROM test_table WHERE number = '".$_GET['certificate']."'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);
mysqli_close($conn);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['HTTP_HOST'];?>/Safety_SA/Safety-S.A/Safety/certificate_style.css"/>
<style>
    @page {
            margin-top: 0;
            margin-left: 0;
            margin-bottom: 0;
            margin-right: 0;
        }
</style>
</head>
<body>
<img style="position:absolute;top:0.01in;left:0.01in;width:0.31in;height:11.17in" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/Safety_SA/Safety-S.A/Safety/img/certificate/ri_1.png" />
<img style="position:absolute;top:6.12in;left:2.85in;width:2.80in;height:0.91in" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/Safety_SA/Safety-S.A/Safety/img/certificate/ri_2.png" />
<img style="position:absolute;top:6.96in;left:2.85in;width:2.80in;height:0.02in" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/Safety_SA/Safety-S.A/Safety/img/certificate/vi_1.png" />
<img style="position:absolute;top:0.70in;left:1.59in;width:5.51in;height:1.42in" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/Safety_SA/Safety-S.A/Safety/img/certificate/ri_3.png" />
<img style="position:absolute;top:0.01in;left:8.15in;width:0.34in;height:11.17in" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/Safety_SA/Safety-S.A/Safety/img/certificate/ri_4.png" />
<div style="position:absolute;top:4.22in;left:1.07in;width:1.32in;line-height:0.31in;"><span style="font-style:normal;font-weight:normal;font-size:22pt;font-family:ArialMT;color:#000000">Trainee: </span></div>
<div style="position:absolute;top:4.22in;left:2.05in;width:5.38in;line-height:0.31in; text-align: center;"><span style="font-style:normal;font-weight:normal;font-size:22pt;font-family:ArialMT;color:#000000"><?php echo $result['trainee'] ?></span></div>
<div style="position:absolute;top:4.92in;left:1.07in;width:1.70in;line-height:0.31in;"><span style="font-style:normal;font-weight:normal;font-size:22pt;font-family:ArialMT;color:#000000">Employer: </span></div>
<div style="position:absolute;top:4.92in;left:2.35in;width:5.08in;line-height:0.31in; text-align: center;"><span style="font-style:normal;font-weight:normal;font-size:22pt;font-family:ArialMT;color:#000000"><?php echo $result['employer'] ?></span></div>
<div style="position:absolute;top:5.62in;left:1.07in;width:2.47in;line-height:0.31in;"><span style="font-style:normal;font-weight:normal;font-size:22pt;font-family:ArialMT;color:#000000">Expiration Date: </span></div>
<div style="position:absolute;top:5.62in;left:3.05in;width:4.38in;line-height:0.31in; text-align: center;"><span style="font-style:normal;font-weight:normal;font-size:22pt;font-family:ArialMT;color:#000000"><?php echo $result['expiration_date'] ?></span></div>
<div style="position:absolute;top:7.33in;left:1.67in;width:5.16in;line-height:0.26in; text-align: center;"><span style="font-style:normal;font-weight:bold;font-size:18pt;font-family:Arial-BoldMT;color:#000000"><?php echo $result['instructor'] ?></span></div>
<div style="position:absolute;top:7.67in;left:1.67in;width:5.16in;line-height:0.25in; text-align: center;"><span style="font-style:normal;font-weight:normal;font-size:18pt;font-family:ArialMT;color:#000000"> Instructor</span></div>
<div style="position:absolute;top:8.03in;left:1.67in;width:5.16in;line-height:0.26in; text-align: center;"><span style="font-style:normal;font-weight:normal;font-size:18pt;font-family:ArialMT;color:#000000; text-align: center;">CERTIFICATION NUMBER</span></div>
<div style="position:absolute;top:9.23in;left:1.67in;width:5.16in;line-height:0.20in; text-align: center;"><span style="font-style:normal;font-weight:normal;font-size:14pt;font-family:ArialMT;color:#000000">8014 Midlothian Tpke. Suite 200-A</span></div>
<div style="position:absolute;top:9.51in;left:1.67in;width:5.16in;line-height:0.20in; text-align: center;"><span style="font-style:normal;font-weight:normal;font-size:14pt;font-family:ArialMT;color:#000000">North Chesterfield VA 23235 | </span><span style="font-style:normal;font-weight:bold;font-size:14pt;font-family:Arial-BoldMT;color:#000000">Office: (804) 718-0639</span></div>
<div style="position:absolute;top:9.90in;left:1.67in;width:5.16in; text-align: center;"><span style="font-style:normal;font-weight:normal;font-size:14pt;font-family:ArialMT;color:#000000;"><?php echo $result['description'] ?></span></div>
<img style="position:absolute;top:0.00in;left:0.00in;width:8.5in;height:0.48in" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/Safety_SA/Safety-S.A/Safety/img/certificate/ci_1.png" />
<img style="position:absolute;top:10.67in;left:-0.036in;width:8.53in;height:0.34in" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/Safety_SA/Safety-S.A/Safety/img/certificate/vi_2.png" />
<div style="position:absolute;top:2.14in;left:1.5in;width:5.50in;height:1.32in; text-align: center; background-color: #000000; display: table;"><span style="font-style:normal;font-weight:normal;font-size:28pt;font-family:Impact;color:#ffff00; display: table-cell; vertical-align: middle;"><?php echo $result['title'] ?></span></div>
<div style="position:absolute;top:3.46in;left:1.5in;width:5.50in; text-align: center;"><span style="font-style:normal;font-weight:normal;font-size:14pt;font-family:ArialMT;color:#000000;"><?php echo $result['subtitle'] ?></span></div>
<img style="position:absolute;top:5.99in;left:3.05in;width:4.38in;height:0.02in" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/Safety_SA/Safety-S.A/Safety/img/certificate/vi_5.png" />
<img style="position:absolute;top:5.30in;left:2.35in;width:5.08in;height:0.02in" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/Safety_SA/Safety-S.A/Safety/img/certificate/vi_6.png" />
<img style="position:absolute;top:4.60in;left:2.05in;width:5.38in;height:0.02in" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/Safety_SA/Safety-S.A/Safety/img/certificate/vi_7.png" />
<img style="position:absolute;top:8.45in;left:2.215in;width:4.07in;height:0.59in" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/Safety_SA/Safety-S.A/Safety/img/certificate/vi_8.png" />
<div style="position:absolute;top:8.63in;left:2.215in;width:4.07in;line-height:0.36in; text-align: center;"><span style="font-style:normal;font-weight:bold;font-size:24pt;font-family:Calibri;color:#000000"><?php echo $result['number'] ?></span></div>
</body>
</html>


<?php
$html = ob_get_clean();
require_once 'libs/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('office');
$dompdf->render();
$dompdf->stream("certificate_{$result['number']}.pdf", array("Attachment" => true));
?>