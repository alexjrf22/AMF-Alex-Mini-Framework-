# Alex Micro-Framework (AMF)

#Descrição 

É um mini-framework MVC que visa facilitar a criaçao de rotas, definir as responsabilidades de forma clara dentro do sistema e exibir de forma simples as views aos usuarios. OBS: foi feito um select de clientes para teste, facilitando assim entender o funcionamento.

#Conhecimentos Aplicados

* PHP OO;
* MVC;
* Composer;
* PDO;
* MYSQL;
* HTML


#Dependencias Para o Funcionamento do Sistema 

* browser (Navegador WEB);
* O sistema depende de um servidor Web (Apache ou afins);
* PHP versão 5.6 ou posterior;
* Banco de Dados MYSQL

#Como instalar

1. Faça um clone do repositorio;
2. Acesse atraves do navegador a pagina fixture.php Ex: localhost:8080/App/fixture.php...
3. Isso criará automaticamente o banco de dados e a tabela.
4. Acesse atraves do navegador o localhost:8080/public/index.php e utilize o sistema.

#Como funciona o Sistema

- Dentro da pasta vendor/AMF do composer foram criadas 4 pastas:
* Pasta: Controller / Arquivo: Action.php / Funcionalidade: das Include nas views do sistema.
* Pasta: DI / Arquivo: Container.php / Funcionalidade: Criar Containers de serviços, jã vai com container de conexao com BD como exemplo.
* Pasta: Init / Arquivo: Bootstrap.php / Funcionalidade: Pegar as rotas setadas do sistema, criar as urls e iniciar as mesmas.
* Pasta: Model / Arquivo: Table.php / Funcionalidade: Criar os metodos que farão as alterações no BD, como exemplo foi criado um FetchAll que exibe todos os dados de uma tabela.

#Fora do Framework a estrutura deverá ser a seguinte:
-Deverá ter uma Pasta APP dentro dela os diretorios: Controllers, Models e Views;
* Pasta: Controllers / arquivo: IndexController / Extends: Action.php / Funcionalidade: Definir o controller, o que deve ser mostrado na view do controller ex: consulta no BD e renderizar a view do controller. 
* Pasta Models / arquivo: "Entidade".php / Extends: Table / Funcionalidade: Implemetar a entidade e definir qual tabela do BD deve ser alterada. Vai com a entidade Cliente de exemplo.
* Pasta Views arquivo: layout.phtml definir um layout padrão / pasta index-> armazenar as views do sistema. Vai com uma view de exemplo.
* Arquivo Route.php: Definir as rotas do sistema dentro deste arquivo. Exemplo no arquivo.
* arquivo Conn.php: Criar conexao com BD.
* fixture.php criar automaticamente o BD.

#pasta public 
-dentro desta pasta fica o index.php:
* deve requerer o autoload;
* deve instanciar a classe Route...$route = new App\Route();
-Dentro tbm se necessario colocar o .htaccess







