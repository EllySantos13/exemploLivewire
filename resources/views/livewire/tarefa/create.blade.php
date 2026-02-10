<div class="mt-5">
   <div class="card">
    <h5 class="card-header">Cadastro de Tarefas</h5>
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control"
                name="nome" id="nome" placeholder="Ex.: Estudar...">
            </div>

            <div class="mb-3">
                <label for="data_hora" class="form-label">Data Tarefa</label>
                <input type="datetime-local" class="form-control"
                 id="data_hora" name="data_hora">
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" rows="4"
                name="descricao"></textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>
   </div>
</div>
