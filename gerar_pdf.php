<?php
	

	ob_start();

	$html = ob_get_clean();

	$html = utf8_encode($html);

	$html .='
		<html>
			<body>
				<h1>Relatório de teste</h1>
				<ul>
					<li>http://www.google.com.br</li>
					<li>http://www.globo.com.br</li>
					<li>http://www.r7.com.br</li>
				</ul>
				<h4>Testando</h5>
			</body>
		</html>';

	include("pdf/mpdf.php");

	$mpdf = new mPDF();

	$mpdf->allow_charset_conversion = true;

	$mpdf->charset_in = 'UTF-8';

	$mpdf->WriteHTML($html);

	$mpdf->Output('meu-pdf','I');
// I - Abre no navegador
// F - Salva o arquivo no servido
// D - Salva o arquivo no computador do usuário
?>
