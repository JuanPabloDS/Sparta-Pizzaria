<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>


<div style="width: 100%; height: 750px; background-color: white ">
	<form action="controle_reserva.php?acao=<?= ( $usuario->getId() != '' ? 'editar' : 'cadastrar' )?>" method="post">
<div class="medidas" style="color: #787716; margin: 0px; " >
			<div class="">
				<div class="container promocao3" >
					<h4 align="center"><b>FAÇA SEU PEDIDO</b></h4>
				</div>
			</div>
		</div>
<div class="container-xl p-3 my-3 text-white" style=" background-color: black; border-radius: 15px; ">
  <div class="form-group">
      <label for="inputNome">Nome</label>
      <input type="nome" class="form-control" id="inputNome" name="inputNome" placeholder="Nome">
    </div>
  <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="inputemail" placeholder="Email">
    </div>
     <div class="form-group">
    <label for="inputTelefone">Telefone</label>
    <input type="Telefone" class="form-control" id="inputTelefone" name="inputTelefone" placeholder="(XX)XXXXX-XXXX">
  </div>
    <div class="form-group">
      <label for="inputPessoa">Quantidade de pessoas</label>
      <select id="inputPessoa" name="inputPessoa" class="form-control">
        <option selected>Selecione</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>

      </select>
    </div>
    <div class="form-group">
      <label for="inputHora">Hora</label>
      <select id="inputHora" name="inputHora" class="form-control">
        <option selected>Selecione</option>
        <option>18:00</option>
        <option>18:30</option>
        <option>18:45</option>
        <option>19:00</option>
        <option>19:30</option>
        <option>19:45</option>
        <option>20:00</option>
        <option>20:30</option>
        <option>20:45</option>
        <option>21:00</option>
        <option>21:30</option>
        <option>21:45</option>
        <option>22:00</option>
        <option>22:30</option>
        <option>22:45</option>
        <option>23:00</option>
        <option>23:30</option>
      </select>
    </div>
  <div>
    <label for="datereserva">Data</label>
    <br>
    <input type="date" id="datereserva" name="datereserva">
  </div>
  <div align="center">
  	<button type="submit" class="btn btn-primary">Reservar</button>
  </div>
  </div>
</form>
</div>




<?php include './layout/footer.php'; ?>