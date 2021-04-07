<!--
Para que todo esto funcione es necesario tener el manual de FPDFF disponible en: http://www.fpdf.org/

Posteriormente copiar el archivo ~fpdf.php~ y la carpeta ~font~ y pegarlas dentro de una carptea situada en el proyecto. -->

  <?php
    ob_start ();  //ESTO ES VITAL YA QUE DE LO CONTRARIO SE GENERARA UN ERROR AL QUERER EJECUTAR FPDF DESDE OTRO PROYECTO
  require ('fpdf/fpdf.php');

  $pdf = new FPDF('P','mm','Letter');
  $pdf -> AddPage();
  $pdf->SetFont("Arial","B",30); //Tipo de fuente,bold/cursive/etc,tamaño


  $pdf->Cell(10,30,"1.-Hola mundo en PDF con FPDF",0,1); //Ancho del borde,alto del borde,"texto"
  $pdf->SetY(20);
  $pdf->Setx(5);
  $pdf->Cell(10,30,"2.-Hola mundo en PDF con FPDF");

  $pdf->SetY(30);
  $pdf->Setx(5);
  $pdf->Cell(10,30,"3.-Hola mundo en PDF con FPDF");

  $pdf->Image('img/footer.jpg' , 80 ,22, 35 , 38,'jpg', 'http://www.desarrolloweb.com'); //Llamada para pegar una imágen ('ejeX,ejeY,ancho,alto,FORMATO')

  $pdf -> output(); //Esto permite la "salida" para obtener el PDF
  ob_end_flush(); //ESTO ES VITAL YA QUE DE LO CONTRARIO SE GENERARA UN ERROR AL QUERER EJECUTAR FPDF DESDE OTRO PROYECTO
 ?>
