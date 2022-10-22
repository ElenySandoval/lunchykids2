<?php
    require("../../fpdf184/fpdf.php");
    require("conectDB.php");
    class PDF extends FPDF{
        function Header(){
             $this->SetFont("Times", "B", 20);
            $this->Cell(6);
            $this->Cell(10,3, utf8_decode("Reporte Refrigerios Lunchy Kids"), 0, 0, 'C');
            $this->Image('../../assets/img/logolk.png',3,2,4); 
            $this->Ln();
        }
        function Body(){
            $my = conectObj();
            $sql = "select id_refrigerio, id_auxiliar_refri, fecha_refrigerio, tipo_refrigerio, descripcion_refrigerio from refrigerios";
            $stm = $my->prepare($sql);
            $stm->execute();
            $stm->bind_result( $id_refrigerio, $id_auxiliar_refri, $fecha_refrigerio, $tipo_refrigerio, $descripcion_refrigerio);
            $stm->store_result();
            $hay = $stm->num_rows;
            if($hay==0){
                $this->Cell(10, 3, "No hay registros que mostrar", 1, 1, 'C');
            }else{
                $this->SetFont("Arial", 'B', 14);
                $this->Ln();
                $this->SetTextColor(62, 72, 204);
                $this->Cell(4,1,"Id", 1, 0, 'C');
                $this->Cell(3,1,"Auxiliar", 1, 0, 'C');
                $this->Cell(4,1,"Fecha", 1, 0, 'C');
                $this->Cell(3,1,"Tipo", 1, 0, 'C');
                $this->Cell(6,1,"Descripcion", 1, 1, 'C');
                $this->SetFont("Arial",'', 14);
                $this->SetTextColor(0, 0, 0);
                while($stm->fetch()){
                    $id_refrigerio = utf8_decode($id_refrigerio);
                    $this->Cell(4,1,$id_refrigerio, 1, 0, 'C');
                    $this->Cell(3,1,$id_auxiliar_refri, 1, 0, 'C');
                    $this->Cell(4,1,$fecha_refrigerio, 1, 0, 'C');
                    $this->Cell(3,1,$tipo_refrigerio, 1, 0, 'C');
                    $this->Cell(6,1,$descripcion_refrigerio, 1, 1, 'C');
                }
            }
            $stm->close();
        }
        function Footer(){
 $this->SetFont('helvetica', 'B', 8);
        $this->SetY(-7);
       
        $this->Line(10,287,200,287);
        $this->Cell(0,5,utf8_decode("Lunchy Kids © Todos los derechos reservados."),0,0,"C");
        
        }
    }
    $pdf = new PDF('P', 'cm','letter');
    $pdf->SetAuthor("CableNaranja", true);
    $pdf->SetTitle("Reporte", true);
    $pdf->AddPage();
    $pdf->Body();
    // Encabezado del documento
    $pdf->Output();

?>