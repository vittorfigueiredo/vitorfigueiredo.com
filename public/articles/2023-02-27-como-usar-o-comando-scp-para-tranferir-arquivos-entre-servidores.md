<center> <img src="https://lintut.com/wp-content/uploads/2014/03/scp-between-linux-computers-featured.jpg" alt="article image"></img> </center>

<br>

Fala devs, tudo bem?

Recentemente eu precisei migrar alguns serviços de servidores da Digital Ocean para a AWS e alguns desses serviços tinham banco de dados locais, onde precisei fazer o backup usando ‘mysqldump’ (posso fazer um post no futuro falando sobre), e era gerado um arquivo que futuramente iria servir para a restauração daquela base de dados. Até aí tudo bem, mas me surgiu a duvida: Beleza, mas como vou mandar isso para o outro servidor? 🤔

Eu poderia logar no servidor 1 pelo VS Code, fazer o download do arquivo, fechar essa conexão e logar no servidor 2 no VS Code para realizar o upload do arquivo. Mas olha só que rolê né?

Então realizando algumas pesquisas, encontrei o comando SCP, que é basicamente um comando linux para copiar arquivos com segurança de um local para outro.

E com ele podemos copiar um arquivo ou diretório:

- Da sua máquina local para um local remoto.
- De um local remoto para a sua máquina.
- Entre 2 locais remotos.

*Vale lembrar que durante a transferência, tudo é encriptado para evitar o vazamento dos nossos dados sensíveis, sejam eles senhas das conexões ou até mesmo os arquivos e diretórios que estão sendo transferidos.*

## Syntax do comando SCP

Nesse exemplo irei mostrar como fiz para resolver o **MEU** problema, que foi transferir um arquivo entre 2 locais remotos.

Então supondo que estamos no servidor de origem, vamos rodar o seguinte comando para realizar essa transferência:

```bash
scp [FILE] [root@127.0.0.1]:[/destino]
```

**[FILE]**: Basicamente será o arquivo ou diretório que iremos transferir (Obs: Se você estiver transferindo um diretório, é importante adicionar a opção -r antes de **[FILE]** para que todos os arquivos dentro do diretório sejam transferidos).

<br>

**[root@127.0.0.1]**: Aqui você deve substituir o **root** e **127.0.0.1** pelas informações do seu local remoto.

<br>

**[/destino]**: Substitua esse campo pelo diretório de destino onde ficará o arquivo transferido do local de origem.

No fim, você terá algo parecido com isso:

```bash
scp arquivo.txt vitor@127.0.0.1:/home/vitor/
```

Após executar esse comando vai ser solicitado a senha do usuário de destino que você informou. Insira a senha e pressione ENTER. Se der tudo certo, irá iniciar a sua transferência.

Prontinho, seu arquivo já deve estar no seu local remoto. 🤩

Como falei antes, mostrei aqui apenas o que precisei fazer para resolver **MEU** problema.
Se voce quer saber mais sobre o SCP, recomendo esse <a href="https://linuxize.com/post/how-to-use-scp-command-to-securely-transfer-files/" target="_blank">POST</a>, que foi a fonte de onde tirei todo o conteúdo apresentado aqui.

Espero ter ajudado em algo. Nos vemos na próxima!
