<div class="col-sm-12 col-md-6">

    <h3 class="mb-4">Faça seu cadastro</h3>
    <form name="frmcadastro" id="frmcadastro" method="get">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome completo</label>
            <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="Seu nome aqui">                                                 </div>       

        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" class="form-control" id="txtemail" name="txtemail" aria-describedby="emailHelp" placeholder="Seu email">
            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
        </div>  

        <div class="form-group">
            <label for="exampleInputEmail1">Estado Civil</label>
            <select class="form-control" name="selestadocivil" id="selestadocivil">
                <option selected disabled>Escolha aqui</option>
                <option value="solteiro">Solteiro</option>
                <option value="casado">Casado</option>
                <option value="viúvo">Viúvo</option>
            </select>
        </div>   

        <div class="form-group">
            <label for="exampleInputEmail1">Sexo</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rdsexo" id="rdsexo1" value="Masculino">
                <label class="form-check-label" for="exampleRadios1">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rdsexo" id="rdsexo2" value="Feminino" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Feminino
                </label>
            </div>
        </div>                        

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>            
