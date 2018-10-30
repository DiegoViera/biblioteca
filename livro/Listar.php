<?php
	include_once("../Class/Livros.class.php");
	$objCategorias = new Livros();
	$resultado = $objCategorias->listar();
	
	
?>
	<h4> Livros</h4>
	<hr>
		<thead>
			<tr>
				<th>Id_livro</th>
				<th>Id_genero</th>
				<th>Nome</th>
				<th>Edicao</th>
				<th>Titulo</th>
				<th>Descrição</th>
				<th>Imagem</th>
				<th>Data_publicacao</th>
									
				</tr>
        </thead>
		<tbody>
		<?php
			foreach($resultado as $dados){
				echo "<tr>
				
					<td>$dados->Id_livro</td>
					<td>$dados->Id_genero</td>
					<td>$dados->Nome</td>
					<td>$dados->Edicao</td>
					<td>$dados->Titulo</td>
					<td>$dados->Descrição</td>
					<td>$dados->Imagem</td>
					<td>$dados->Data_publicacao</td>
					<td ><a href='Editar.php?ID=$dados->Id_livro'></a></td>
					<td	><a href='Excluir.php?ID=$dados->Id_livro''></a></td>
					</tr>";
			}
		?>
		</tbody>
	</table>
</div>
</div>
