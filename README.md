🌟 Funcionalidades
Adicionar Tarefa: Insira uma nova tarefa no formulário.
Visualizar Tarefas: As tarefas são exibidas em ordem decrescente de criação.
Excluir Tarefa: Clique no botão "Excluir" ao lado de uma tarefa para removê-la.
Validação em Tempo Real: O botão "Adicionar" só é habilitado quando há texto no campo.
Confirmação de Exclusão: Um alerta solicita confirmação antes de excluir uma tarefa.
Design Responsivo: Layout adaptável a diferentes dispositivos.

🛠️ Tecnologias Utilizadas
Backend: PHP
Banco de Dados: MySQL
Frontend: HTML5, CSS3, JavaScript
Servidor Local: XAMPP ou WAMP (opcional)

🚀 Como Executar o Projeto
1. Pré-requisitos
Certifique-se de ter os seguintes softwares instalados:

PHP: Versão 7.x ou superior
MySQL: Servidor de banco de dados
Servidor Web: XAMPP, WAMP ou outro servidor local
Navegador Web: Chrome, Firefox, Edge, etc.

2. Configuração do Banco de Dados
    1. Crie um novo banco de dados chamado todo_list:
        CREATE DATABASE todo_list;
    2. Use o banco de dados e crie a tabela tasks:
        USE todo_list;

        CREATE TABLE tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        task TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );

3. Configuração do Projeto
    1. Clone este repositório:
        git clone https://github.com/seu-usuario/todo-list.git
    2. Coloque os arquivos na pasta do servidor web (ex.: htdocs no XAMPP).
    3. Configure as credenciais do banco de dados no arquivo db_config.php:
        $host = 'localhost';
        $dbname = 'todo_list';
        $username = 'root'; // Altere conforme necessário
        $password = '';     // Altere conforme necessário

4. Executar a Aplicação
    1. Inicie o servidor Apache e MySQL no XAMPP/WAMP.
    2. Acesse a aplicação no navegador:
        http://localhost/todo-list/index.php

📂 Estrutura do Projeto
/todo-list/
│
├── index.php          # Página principal da aplicação
├── add_task.php       # Script para adicionar tarefas
├── delete_task.php    # Script para excluir tarefas
├── db_config.php      # Configuração do banco de dados
└── assets/
    ├── css/
    │   └── styles.css  # Arquivo CSS para estilização
    └── js/
        └── script.js   # Arquivo JavaScript para interatividade

🤝 Contribuição
Contribuições são bem-vindas! Se você deseja melhorar o projeto, siga os passos abaixo:

    1. Faça um fork deste repositório.
    2. Crie uma branch para sua feature:
        git checkout -b feature/nome-da-feature
    3. Faça suas alterações e commit:
        git commit -m "Adiciona descrição da mudança"
    4. Envie suas alterações:
        git push origin feature/nome-da-feature
    5. Abra um Pull Request explicando suas alterações.

📜 Licença
Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.

👤 Autor
Desenvolvido por Breno.
    GitHub: @brenororiz
    LinkedIn: linkedin.com/in/breno-roriz-413312301
    Email: brenororiz@gmail.com

🙏 Agradecimentos
Agradeço ao Stack Overflow e à comunidade de desenvolvedores por fornecer soluções incríveis.
Este projeto foi criado para fins educacionais e práticos.