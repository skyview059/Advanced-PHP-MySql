<?php


$html = '
<head>
<style>

table {
width: 100%;

}

body, p, div { font-size: 14pt; font-family: solaimanlipi;}

h3 { font-size: 15pt; margin-bottom:0; font-family: solaimanlipi; }


</style>
</head>
<body>
<h1>mPDF</h1>
<h2>Invoice</h2>


<table  border=1>

<tr>
    <td>
    <li><b>Bangla / Bengali</b>:
&#x986;&#x9ae;&#x9bf; &#x995;&#x9be;&#x981;&#x99a; &#x996;&#x9c7;&#x9a4;&#x9c7; &#x9aa;&#x9be;&#x9b0;&#x9bf;, &#x9a4;&#x9be;&#x9a4;&#x9c7; &#x986;&#x9ae;&#x9be;&#x9b0; &#x995;&#x9cb;&#x9a8;&#x9cb; &#x995;&#x9cd;&#x9b7;&#x9a4;&#x9bf; &#x9b9;&#x9df; &#x9a8;&#x9be;&#x964; 
</td>
    <td>Price</td>
</tr>

</table>

</body>
';

//==============================================================
//==============================================================
//==============================================================
include("./mpdf60/mpdf.php");

$mpdf=new mPDF('c','A4','','',32,25,27,25,16,13); 
$mpdf->autoScriptToLang = true;
$mpdf->baseScript = 1;	// Use values in classes/ucdn.php  1 = LATIN


$mpdf->autoLangToFont = true;

$mpdf->SetDisplayMode('fullpage');

$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyletables.css');
//$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html);



$mpdf->Output("mizan.pdf","D");
exit;

