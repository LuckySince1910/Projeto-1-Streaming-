<?php
	require_once 'CLASSES/usuarios.php';
	$u = new Usuario

?>

<?php
//verificar se a pessoa clicou no botao
if(isset($_POST['nome']))
{
 $nome = addslashes($_POST['nome']);
 $telefone = addslashes($_POST['telefone']);
 $email = addslashes($_POST['email']);
 $senha = addslashes($_POST['senha']);
 $confirmarsenha = addslashes($_POST['confsenha']);
 //verificar se esta preenchido
 if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarsenha)) 
{
	$u->conectar("projeto_login","localhost","root","");
	if ($u->msgErro == "")//se esta tudo ok
	{
		if($senha == $confirmarsenha)
		{
			if($u->cadastrar($nome,$telefone,$email,$senha))
			{
				?>
				<div id="msg-sucesso"> 
					Cadastrado com sucesso! acesse para entrar!
				</div>
				<?php
			}
			else
			{
				?>
				<div class="msg-erro">
					Email já cadastrado!
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
				Senha e confirmar senha não correspondem!
			</div>
			<?php
		}
	}
	else
	{
		?>
		<div class="msg-erro">
		<?php echo "Erro: ".$u->msgErro;?>
		</div>
		<?php
	}
}else
{
	?>
	<div class="msg-erro">
		Preencha todos os campos!
	</div>
	<?php
}
}
?>