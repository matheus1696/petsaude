# InfoSaúde Caruaru - Sistema de Gestão Interna

## Apresentação

Apresentamos ao Programa PET-Saúde de Caruaru uma solução abrangente de integração ensino-serviço-comunidade, projetada sob medida para atender às exigências das instituições de saúde, com foco inicial na formação prática dos profissionais de saúde.

Com uma estrutura modular cuidadosamente elaborada, nosso programa oferece uma gama de recursos avançados para o eficiente desenvolvimento de competências em diversos campos da saúde. Incorporando metodologias de ponta no desenvolvimento educacional e um robusto sistema de suporte, garantimos segurança e estabilidade excepcionais, assegurando uma experiência de aprendizado confiável e duradoura.

Nosso compromisso é proporcionar o que há de melhor em termos de integração prática e teórica, adaptando-nos às demandas específicas dos serviços de saúde e da comunidade. Buscamos oferecer uma solução completa e eficaz para a formação e desenvolvimento de profissionais, promovendo eficiência e resultados positivos na atenção à saúde.

Conte conosco para otimizar os processos de aprendizado e assegurar uma formação prática efetiva. Estamos aqui para fornecer suporte e orientação, rumo ao sucesso de sua formação profissional e à melhoria do atendimento à saúde.

## Instalação

Para clonar um repositório para o seu repositório local, siga os seguintes passos:

<ol>
    <li>Abra o terminal ou prompt de comando no seu computador.</li>
    <li>Navegue até o diretório onde deseja clonar o repositório. Você pode usar o comando 'cd' seguido do caminho do diretório para navegar até ele.</li>
    <li>No GitHub, acesse o repositório que deseja clonar.</li>
    <li>Clique no botão "Code" (ou "Código") e copie a URL do repositório.</li>
    <li>Volte ao terminal ou prompt de comando e digite o comando git clone seguido da URL do repositório.</li>
</ol>

    git clone https://github.com/matheus1696/petsaude.git

Para instalar dependências em um projeto, siga os seguintes passos:

    composer install

Setup configuração: Configurações sobre o nome do projeto, banco de dados e mais.

    cp .env.example .env

Gerar chave key da aplicação:

    php artisan key:generate

Migration - para criação de tabelas automáticas do sistema:

    php artisan migrate --seed

Iniciando sistema

    php artisan serve

## Usuários Padrões do Sistema

Usuários: `sysadmin@petsaude.com.br` <br>
Senha: `sysadmin`

Usuários: `admin@petsaude.com.br` <br>
Senha: `admin`

Usuários: `user@petsaude.com.br` <br>
Senha: `user`

## Bibliotecas Utilizadas no Projeto

- Tradução das mensagens para Laravel: https://github.com/lucascudo/laravel-pt-BR-localization
- Validadação PT-BR: https://github.com/LaravelLegends/pt-br-validator
- Gerenciamento de Permissões: https://spatie.be/
