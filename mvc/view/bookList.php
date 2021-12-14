<?php

	echo "
	<html>
	<head></head>
	<body>
	<h1>Lista de livros</h1>
	<tr>
		<td>Titulo		</td><br>
		<td>Autor		</td><br>
		<td>Descrição	</td><br>
	</tr>";
	
	foreach ($books as $title => $book){
		
		echo '<tr><td><a href="index.php?book=' 
		. $book->title		. '">' 
		. $book->title  	. '</a></td><td>'
		. $book->author  	. '</td<td>'
		. $book->description  . '</td></tr>';
		
	}
	echo"</table></body></html>";

?>