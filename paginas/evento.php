<!-- Conteúdo -->
<div class="container contTopo">
    <div class="row">
        <div class="col-lg-12 contBottom">
            <button class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar Evento</button>
        </div>
        <div class="col-lg-12">
        <table class="table">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
            <th scope="col">Título do Evento</th>
            <th scope="col">Data Inicio</th>
            <th scope="col">Data de término</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td class="img"><img src="../img/eventos/ev-01.jpg" alt=""></td>
            <td>Dia da Fotografia</td>
            <td>19/08/2023</td>
            <td>19/08/2023</td>
            <td><a href="#" title="Editar Contato">Editar</a> | <a href="#" title="Deletar Contato">Deletar</a></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td class="img"><img src="../img/eventos/ev-04.jpg" alt=""></td>
            <td>Setembro Amarelo</td>
            <td>01/09/2023</td>
            <td>30/09/2023</td>
            <td><a href="#" title="Editar Contato">Editar</a> | <a href="#" title="Deletar Contato">Deletar</a></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td class="img"><img src="../img/eventos/ev-03.jpg" alt=""></td>
            <td>Outubro Rosa</td>
            <td>01/10/2023</td>
            <td>31/10/2023</td>
            <td><a href="#" title="Editar Contato">Editar</a> | <a href="#" title="Deletar Contato">Deletar</a></td>
            </tr>
        </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Evento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Título do Evento</label>
                <input type="text" class="form-control" name="tevento">
            </div>
            <div class="mb-3">
                <label class="form-label">Data de início</label>
                <input type="date" class="form-control" name="datai">
            </div>
            <div class="mb-3">
                <label class="form-label">Data de encerramento</label>
                <input type="date" class="form-control" name="datae">
            </div>
            <div>
                <label for="formFileLg" class="form-label">Imagem de Evento</label>
                <input class="form-control" id="formFileLg" type="file">
            </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <input type="submit" class="btn btn-primary" name="editPerfil" value="Cadastrar Evento">
            </div>
            </form>
            </div>
        </div>
        </div>
        <!-- Fim do Modal -->
        </div>
    </div>
</div>
<!-- Final do Conteúdo -->