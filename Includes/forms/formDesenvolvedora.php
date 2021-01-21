<form method="POST" action="../Controller/DesenvolvedoraController.php">
  <div class="form-group">
    <label for="cnpj">CNPJ</label>
    <input type="text" class="form-control" id="cnpjInput" name="cnpjInput" aria-describedby="cnpj" placeholder="CNPJ" required>
  </div>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nomeInput" name="nomeInput" placeholder="Nome" required>
  </div>
  <div class="form-group">
    <label for="responsavel">Responsável</label>
    <input type="text" class="form-control" id="responsavelInput" name="responsavelInput" placeholder="Responsável" required>
  </div>
  <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" id="enderecoInput" name="enderecoInput" placeholder="Endereço" required>
  </div>
  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
