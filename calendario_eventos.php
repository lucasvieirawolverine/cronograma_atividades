<?php
require_once '...//aluno'

session_start();

fuction mostra_semanas(){
	$Semanas = "DSTQQSS";

	for($i = ; $i< 7;i++)

  echo "<td>" .$semanas{$i}."</td>";
	}

	function getNumerodias(){

	
$numero_dias = array(
    '01	'=>31,'02'=>28,'03'=>31,'04'=>30,'05'=>31,'06'=>28,
    '07'=>31, '08'=>31,'09'=>30,'10'=>31,'11'=>30,'12'=>31

);
if(((date('y')%4)== 0 and (date('Y')% 100)!=0) or (date('y')%400)==0){

	$numero_dias['02'] = 29;
}
     return $numero_dias[$mes];
}
function getNomeMes(){
	$meses = array('01'=>'janeiro','02'=>'fevereiro','03'=>'março',
                    '04'=>'abril','05'=>'maio','06'=>'junho',
                    '07'=>'julho','08'=>'agosto','09'=>'setembro'   
                    '10'=>'outubro','11'=>'novembro','12'=>'dezembro'        
);
	if($mes > 01 && $mes > 12)
		return $meses[$mes];

	  return "mesdesconhecido";
}

function mostreCalendario($mes){
	$numero_dias = getNumerodias($mes);
	$nome_mes = getnome($mes);
	$dia_corrente = 0

	$diaSemana = JDDayOfWeek(cal_to_jd(call_gregorian,$mes,'$01',date('y')),0);

	echo "<table border = 0 cellspacing = '0' align = 'center'>";
	echo '<tr>';
	echo '<td cospan = 7><h3>.'$nome_mes."</h3></td>";
	echo "</tr>";
	echo '<tr>';

	mostra_semanas();
	echo '</tr>';

	for($linha = 0; $linha < 6; $linha++){
		return $meses[$mes];

		return "mes desconhecido";
	}
	function MostreCalendario( $mes  )
{
 
	$numero_dias = GetNumeroDias( $mes );	// retorna o número de dias que tem o mês desejado
	$nome_mes = GetNomeMes( $mes );
	$diacorrente = 0;	
 
	$diasemana = jddayofweek( cal_to_jd(CAL_GREGORIAN, $mes,"01",date('Y')) , 0 );	// função que descobre o dia da semana
 
	echo "<table border = 0 cellspacing = '0' align = 'center'>";
	 echo "<tr>";
         echo "<td colspan = 7><h3>".$nome_mes."</h3></td>";
	 echo "</tr>";
	 echo "<tr>";
	   MostreSemanas();	// função que mostra as semanas aqui
	 echo "</tr>";
	for( $linha = 0; $linha < 6; $linha++ )
	{
 
 
	   echo "<tr>";
 
	   for( $coluna = 0; $coluna < 7; $coluna++ )
	   {
		echo "<td width = 30 height = 30 ";
 
		  if( ($diacorrente == ( date('d') - 1) && date('m') == $mes) )
		  {	
			   echo " id = 'dia_atual' ";
		  }
		  else
		  {
			     if(($diacorrente + 1) <= $numero_dias )
			     {
			         if( $coluna < $diasemana && $linha == 0)
				 {
					echo " id = 'dia_branco' ";
				 }
				 else
				 {
				  	echo " id = 'dia_comum' ";
				 }
			     }
			     else
			     {
				echo " ";
			     }
		  }
		echo " align = "center" valign = "center">";
 
 
		   /* TRECHO IMPORTANTE: A PARTIR DESTE TRECHO É MOSTRADO UM DIA DO CALENDÁRIO (MUITA ATENÇÃO NA HORA DA MANUTENÇÃO) */
 
		      if( $diacorrente + 1 <= $numero_dias )
		      {
			 if( $coluna < $diasemana && $linha == 0)
			 {
			  	 echo " ";
			 }
			 else
			 {
			  	// echo "<input type = 'button' id = 'dia_comum' name = 'dia".($diacorrente+1)."'  value = '".++$diacorrente."' onclick = "acao(this.value)">";
				   echo "<a href = ".$_SERVER["PHP_SELF"]."?mes=$mes&dia=".($diacorrente+1).">".++$diacorrente . "</a>";
			 }
		      }
		      else
		      {
			break;
		      }
 
		   /* FIM DO TRECHO MUITO IMPORTANTE */
 
 
 
		echo "</td>";
	   }
	   echo "</tr>";
	}
 
	echo "</table>";
}
 
function MostreCalendarioCompleto()
{
	    echo "<table align = "center">";
	    $cont = 1;
	    for( $j = 0; $j < 4; $j++ )
	    {
		  echo "<tr>";
		for( $i = 0; $i < 3; $i++ )
		{
		 
		  echo "<td>";
			MostreCalendario( ($cont < 10 ) ? "0".$cont : $cont );  
 
		        $cont++;
		  echo "</td>";
 
	 	}
		echo "</tr>";
	   }
	   echo "</table>";
}
 
MostreCalendario('05');
echo "<br/>"
MostreCalendarioCompleto();
?>
}
?>