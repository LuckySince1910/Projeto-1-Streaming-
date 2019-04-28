<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>
<?php
if(isset($_POST['email']))
{
 $email = addslashes($_POST['email']);
 $senha = addslashes($_POST['senha']);
 
 	if(!empty($email) && !empty($senha))
 	{
 		$u->conectar("projeto_login","localhost","root","");
 		if ($u->msgErro == "")
 		{
		 	if($u->logar($email,$senha))
		 	{
		 		header("location: areaPrivada.php");
		 	}
			else
			{
				?>
				<div class="msg-erro">
		 		Email e/ou senha então incorretos! 
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