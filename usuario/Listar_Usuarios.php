<?php
	include_once("../Class/Usuarios.class.php");
	$objUsuario = new Usuario();
	$resultado = $objUsuario->listar();
	
	
?>
	<h4> Usuario </h4>
	<hr>
	<thead>
		
		<th>Nome</th>
		<th>Email</th>
		<th>Telefone</th>
		<th>Foto</th>
		<th>Senha</th>
		</thead>
		<tbody>
		<?php
			foreach($resultado as $dados){
				echo "<tr>
				
					<td>$dados->Nome</td>
					<td>$dados->Email</td>
					<td>$dados->Telefone</td>
					<td>$dados->Foto</td>
					<td>$dados->Senha</td>
					<td><a href='Editar_Usuario.php?ID=$dados->id_usuario'></a></td>
					<td><a href='Excluir_Usuario.php?ID=$dados->id_usuario'></a></td>
					</tr>";
			}
		?>
		<tbody>
	</table>
