
<?php
echo ("XML dijadikan tabel");
echo '<p></p>';
echo ("Alvi Syahrie Faizi/18209036");
echo '<p></p>';
$xmlNode = simplexml_load_file('data.xml');
function display ($uri,$tag)
{
	echo "XML $uri";
    $xml = file_get_contents($uri);

	$element = new SimpleXMLElement($xml);
	$dom = new DomDocument();
$dom -> load($uri);
$data = $dom->getElementsByTagName($tag);
    echo( "<table border=\"1\" cellpading=\"3\"><tr>");
	$n = 0;
foreach($data as $node)
{ 
    if($n % 3 == 0) { echo '<tr>'; }
    echo( "<td>". $node -> textContent . "<td>");
    if(++$n % 3 == 0) { echo '</tr>'; }
}

echo( "</tr>
</table>");
echo '<p>
</p>';

	}

display ("data.xml","contact");
display ("protif/18211010-18211035/progin.xml","mahasiswa");	
display("protif/II3160-Progin-18211002-18211033/dbxml.xml","genre");
display("protif/II3160-Tugas1-Tugas2/csvoutput.xml","kantor");
display("protif/pemrograman_integratif/file1.xml","mahasiswa");
display("protif/progin/contoh.xml","country");
display("protif/18211014-dan-18211029/datasiswa.xml","siswa");
display("protif/progin-raosanfady/data.xml","mahasiswa");
display("protif/testPHP2/test.xml","tabel_1");
display("protif/tugas-2-pemrograman-integratif/data3.xml","mahasiswa");
display("protif/Web-Service/MyData.xml","book");
display("protif/BintangAdinandra/menu.xml","mymenu");
display("protif/II3160-18211003-18211050/Menu.xml","Nasi");
display("protif/II3160-Pemograman-Integratif/menu.xml","makanan");
display("protif/II3160--Pemrograman-Integratif-/DaftarIdol.xml","Idol");

?>
  
