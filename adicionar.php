<h1>
Adicionar</h1>

<form method="POST" action="adicionar_php.php">
    <label>
        Nome: <br/>
        <input type="text" name="nome"/><br/>
        cidade: <br/>
        <input type="text" name="cidade"/><br/>
        informacao: <br/>
        <input type="text" name="inf"/>
        <br>
            categoria:<br>
            <select name="cat">
                <option value="cliente">Cliente</option>
                <option value="forn">Fornecedor</option>
                <option value="func">Funcionario</option>

            </select>
            
           
    </label><br/><br/>
    <input type="submit" value="adicionar"/>

</form>