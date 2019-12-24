<?php

// Start XML file, create parent node

  $dom = new DOMDocument("1.0");
  $node = $dom->createElement("gases");
  $parnode = $dom->appendChild($node);



function toXML()
{
  global $con;
	$data_txt=null;
    $myFile = "myxml.xml";
    $fh = fopen($myFile, 'w') or die("can't open file");
    $data_txt .= '<?xml version="1.0" encoding="utf-8"?>';
    $data_txt .= '<gases>';

    $query = mysqli_query($con,"SELECT * FROM gases");
    if(!$query)
    {
      echo "ok";
    }

    while($values_query = mysqli_fetch_assoc($query))
    {
        $data_txt .= '<gas>';
        $data_txt .= '<CO>' .$values_query['CO']. '</CO>';
        $data_txt .= '<NO>' .$values_query['NO']. '</NO>';
        $data_txt .= '<NO2>' .$values_query['NO2']. '</NO2>';
        $data_txt .= '<O3>' .$values_query['O3']. '</O3>';
        $data_txt .= '<FineParticles>' .$values_query['FineParticles']. '</FineParticles>';
        $data_txt .= '<CourseParticles>' .$values_query['CourseParticles']. '</CourseParticles>';
        $data_txt .= '<lat>' .$values_query['lat']. '</lat>';
        $data_txt .= '<lng>' .$values_query['lng']. '</lng>';
		    $data_txt .= '<type>' .$values_query['type']. '</type>';
        $data_txt .= '</gas>';
    }
    $data_txt .= '</gases>';
    fwrite($fh, $data_txt);
    fclose($fh);
}

?>