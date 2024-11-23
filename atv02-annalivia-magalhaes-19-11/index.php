<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>atv02-annalivia-magalhaes-19-11</title>
</head>
<body>

<div class="header"> 

         <h1> FORMULÁRIO - PSW</h1>  

</div>
    <nav>
    <ul >
        <li><a href="https://ceteia.guanambi.ifbaiano.edu.br/pswmedio/2023/2ai/buffet/src/index.php">Doceria</a></li>
        <li><a href="https://ceteia.guanambi.ifbaiano.edu.br/pswmedio/2023/2ai/cineview/cineview/index.php">Cineview</a></li>
        <li><a href="https://ceteia.guanambi.ifbaiano.edu.br/pswmedio/2023/2ai/livraria/">Livraria</a></li>
        <li><a href="https://ceteia.guanambi.ifbaiano.edu.br/pswmedio/2023/2ai/neurobiblioteca/">Biblioteca</a></li>
    </ul>
</nav>

    <br>
    <br>

<br>
<br
        
 <section class="formulario" id="formulario">
        <div class="formulario-content">

            <h1>FORMULÁRIO</h1>
    
    <br>

    <div class="box forms">
        <div id="box">        
            <action="/action_page.php">
                <label for="nome">Nome completo</label> <br>
                <input type="text" id="nome" name="nome" size="40"> <br>

                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" pattern= "\d{3}\.\d{3}\.\d{3}-\d{2}" title="xxx.xxx.xxx-xx" placeholder= "xxx.xxx.xxx-xx">
               
                <label for="data de nascimento">Data de nascimento</label> <br>
                <input type="date" id="data de nascimento" name="data de nascimento"> <br>
                
                <label for="nome">Endereço</label> <br>
                <input type="text" id="nome" name="nome" placeholder="Endereço" size="40"> <br>
               
                
                <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" maxlength="9" required placeholder="CEP" size="40">   
                    
                    <label for="name">Gênero</label>
                    <select id="name" name="gênero">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                    </select>

                <label for="nome">Status de relacionamento</label>
                    <select id="status" name="status">
                    <option value="solteiro">Solteiro(a)</option>
                    <option value="namorando">Namorando</option>
                    <option value="casado">Casado(a)</option>
                    
                    
                    </select>

                <label for="country">Nacionalidade</label>
                    <select id="country" name="nacionalidade">
                    <option value="Brasil">Brasil</option>
                    <option value="e.u.a">E.U.A</option>
                    <option value="china">CHINA</option>
                    </select>
                    
                    
                <label for="phone">Telefone</label> <br>
                <input type="tel" id="phone" name="phone" placeholder="Contato" pattern=[0-9]{2}-[0-9]{5}-[0-9]{}> <br>

                <label for="email">E-mail</label> <br>
                <input type="email" id="email" name="email" placeholder="E-mail"> <br>

                <label for="pwd">Senha</label><br>
                <input type="password" placeholder="Senha" id="pwd" name="pwd"><br>


                <p>Gosto de comida favorito</p>
                 <input type="radio" id="volei" name="Gosto de comida favorito" value="Doce">
                <label for="doce">Doce</label><br>

                <input type="radio" id="Salgado" name="Gosto de comida favorito" value="Salgado">
                <label for="salgado">salgado</label><br>

                <input type="radio" id="Ambos" name="Gosto de comida favorito" value="Ambos">
                <label for="ambos">Ambos</label><br>

                <br>
                <br>
                

                <p>Fim do formulário: <input type="button" onclick="alert('Dados Salvos!')" value="Clique aqui para salvar suas respostas!"> </p>

                <input type="submit" value="Enviar"> <br>
            </form>
        </div>
    </div>  
    
    <br>

<div class="footer">
    <div id="div1"> Copyright &copy 2024 by Anna Lívia Guimarães Magalhães. Todos os direitos reservados. </div>
</div>
    
</body>
</html>