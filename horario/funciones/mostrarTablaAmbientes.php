 <?php
				 
				 $conexion= new mysqli("localhost", "root", "", "Sishorario");
        $Query ="SELECT * FROM tblAmbientes ORDER BY idAmbiente";
        if ($Resultado=$conexion->query($Query)) {
        
          echo "
          <h1><b>TABLA AMBIENTES</b></h1>";
        echo "
        <table class='tablains'> 
        
            <th> #</th>
            <th>Regional</th>
            <th> Centro</th>
            <th> Sede</th>
            <th> Nombre</th>
            <TH> Capacidad </th>
            <TH> Tipo Ambiente </th>
            <TH> Ver </th>
            <TH> Editar </th>
            <TH> Eliminar </th>
        
        ";
        
        while ($fila=$Resultado->fetch_row()) {
          echo "
        <tr>
            <td>$fila[0]</td>
            <td>$fila[1]</td>
            
            <td>$fila[2]</td>
            
            <td>$fila[3]</td>
            <td>$fila[4]</td>
            <td>$fila[5]</td>
            <td>$fila[6]</td>
            <td><center>
              <form mthod='POST' action='HorarioInstructor.php'>
                <input type='hidden' name='documentoo' value='"; echo $fila[6]; echo"'>
                 <button type='submit' style='background:transparent;'>
                   <a href=''>
                    <img src='iconosImagenes/ojo.png' border='0' title='Ver Ambiente' width='20px' height='20px'>
                   </a>
                 </button>
              </form></center>
            </td>
            <td><center>
              <a href=''>   
               <img src='iconosImagenes/editarnegro.svg' border='0' title='Editar Ambiente' width='20px' height='20px'>
                </a>
              </center>
            </td>
            <td><center>
                <a href=''>
                   <img src='iconosImagenes/Basura.svg' border='0' title='Eliminar Ambiente' width='20px' height='20px'>
                </a>
            </td></center>  
            
            
        </tr> ";

        }
        
        }
        echo "
          </table> 

        <br><br><br><br><br><br>";
				
				 ?>