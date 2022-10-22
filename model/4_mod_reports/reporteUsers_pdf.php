<?php
    require("../../fpdf184/fpdf.php");
    require("conectDB.php");

    class PDF extends FPDF{

        function Header(){
            $this->SetFont("Times", "B", 20);
            $this->Cell(6);
            $this->Cell(10,3, utf8_decode("Reporte Usuarios Lunchy Kids"), 0, 0, 'C');
            $this->Image('../../assets/img/logolk.png',3,2,4); 
            $this->Ln();
        }

        function Body(){
            $my = conectObj();
            $sql = "select id_usuario, nombre_usuario, apellido_usuario, correo_usuario from usuarios";
            $stm = $my->prepare($sql);
            $stm->execute();
            $stm->bind_result($id_usuario, $nombre_usuario, $apellido_usuario, $correo_usuario);
            $stm->store_result();
            $hay = $stm->num_rows;
            if($hay==0){
                $this->Cell(10, 3, "No hay registros que mostrar", 1, 1, 'C');
            }else{
                $this->SetFont("Arial", 'B', 14);
                $this->Ln(3);
                $this->SetTextColor(62, 72, 204);
                $this->Cell(2,1,"Id", 1, 0, 'C');
                $this->Cell(5,1,"Nombre", 1, 0, 'C');
                $this->Cell(5,1,"Apellido", 1, 0, 'C');
                $this->Cell(7,1,"correo", 1, 1, 'C');
                $this->SetFont("Arial",'', 14);
                $this->SetTextColor(0, 0, 0);
                while($stm->fetch()){
                    $id_usuario = utf8_decode($id_usuario);
                    $this->Cell(2,1,$id_usuario, 1, 0, 'C');
                    $this->Cell(5,1,$nombre_usuario, 1, 0, 'C');
                    $this->Cell(5,1,$apellido_usuario, 1, 0, 'C');
                    $this->Cell(7,1,$correo_usuario, 1, 1,'C');
                }
            }
            $stm->close();
        }

        function Footer()
{
     $this->SetFont('helvetica', 'B', 8);
        $this->SetY(-7);
       
        $this->Line(10,287,200,287);
        $this->Cell(0,5,utf8_decode("Lunchy Kids © Todos los derechos reservados."),0,0,"C");
        
}
    }
    $pdf = new PDF('P', 'cm','letter');
    $pdf->SetTitle("Reporte Usuarios", true);
    $pdf->AddPage();
    $pdf->Body();

    // Encabezado del documento
    $pdf->Output();

?>