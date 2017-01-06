<p>Cadastrar agenda:</p>

<form action="exec_agenda.php" method="post" enctype="multipart/form-data" id="form1">
	<table align="center" width="30%" border="1">
		<tr>
			<th scope="col">
				<div align="left">Data:</div>
			</th>

			<th scope="col">
				<label>
					<div align="left">
						<input type="date" name="data" maxlength="10" />
					</div>
				</label>
			</th>
		</tr>
		<tr>
			<th scope="col">
				<div align="left">Matéria:</div>
			</th>

			<th scope="col">
				<label>
					<div align="left">
						<select name ="materia" id="materia" maxlength="10">
						<?php
							$conexao = mysql_connect ("localhost", "root", "");
							mysql_select_db ("contemporaneo");
							
							$QueryBuscarMaterias = "SELECT * FROM materias_disponiveis";
							$ExeQrBuscarMaterias = mysql_query($QueryBuscarMaterias);
							
							if(mysql_num_rows($ExeQrBuscarMaterias)>0){
								while($resMaterias = mysql_fetch_assoc($ExeQrBuscarMaterias)){
									?>
									<option value="<?php echo $resMaterias['materia']?>"><?php echo $resMaterias['materia']?></option>
									<?php
								}
							}
						?>
						</select>
					</div>
				</label>
			</th>
		</tr>

		<tr>
			<th scope="col">
				<div align="left">Professor:</div>
			</th>

			<th scope="col">
				<label>
					<div align="left">
						<select name ="professor" id="professor" maxlength="10">
						<?php
							$conexao = mysql_connect ("localhost", "root", "");
							mysql_select_db ("contemporaneo");
							
							$QueryBuscarProfessores = "SELECT * FROM professores";
							$ExeQrBuscarProfessores = mysql_query($QueryBuscarProfessores);
							
							if(mysql_num_rows($ExeQrBuscarProfessores)>0){
								while($resProfessores = mysql_fetch_assoc($ExeQrBuscarProfessores)){
									?>
									<option value="<?php echo $resProfessores['nome']?>"><?php echo $resProfessores['nome']?></option>
									<?php
								}
							}
						?>
						</select>
					</div>
				</label>
			</th>
		</tr>

		<tr>
			<th scope="col"><div align="left">Sala:</div></th>
			<th scope="col">
				<div align="left">
				<select name="sala_de_aula">
				<?php
					$conexao = mysql_connect ("localhost", "root", "");
					mysql_select_db ("contemporaneo");
					
					$QueryBuscarSalas = "SELECT * FROM horarios_salas";
					$ExeQrBuscarSalas = mysql_query($QueryBuscarSalas);
					
					if(mysql_num_rows($ExeQrBuscarSalas)>0){
						while($resSalaDeAula = mysql_fetch_assoc($ExeQrBuscarSalas)){
							?>
							<option value="<?php echo $resSalaDeAula['nome_sala']?>"><?php echo $resSalaDeAula['nome_sala']?></option>
							<?php
						}
					}
				?>
				</div>
				</div>
			</th>
		</tr>

		<tr>
			<th scope="col"><div align="left">Tempo:</div></th>
			<th scope="col">
				<div align="left">
					<select name="tempo_de_aula">
						<option value="30">0:30</option>
						<option value="60">1:00</option>
						<option value="90">1:30</option>
						<option value="120">2:00</option>
						<option value="150">2:30</option>
						<option value="180">3:00</option>
					</select>
				</div>
			</th>
		</tr>
		<tr>
			<th scope="col"><div align="left">Horário:</div></th>
			<th scope="col">
				<div align="left">
					<select name="horario_entrada">
						<?php
						$conexao = mysql_connect ("localhost", "root", "");
						mysql_select_db ("contemporaneo");
						
						$QueryBuscarAgendas = "SELECT * FROM agenda_aulas";
						$ExeQrBuscarAgendas = mysql_query($QueryBuscarAgendas);
						
						if(mysql_num_rows($ExeQrBuscarAgendas)>0){
							while($resAgendas = mysql_fetch_assoc($ExeQrBuscarAgendas)){
								?>
								<option value="<?php echo $resAgendas['saida']?>"><?php echo $resAgendas['saida']?></option>
								<?php
							}
						}
						?>
					</select>
				</div>
			</th>
		</tr>
		<tr>
			<th scope="col"><div align="left">Horário:</div></th>
			<th scope="col">
				<div align="left">
					<select name="pagamento">
						<option value="nao">Não</option>
						<option value="sim">Sim</option>
					</select>
				</div>
			</th>
		</tr>
		<tr>
			<th scope="col" colspan="2">
				<div align="left">
					<label><input type="submit" name="enviar" value="Agendar" /></label>
				</div>
			</th>
		</tr>

	</table>
</form>