# Feed de Notícias

Para a construção da solução, criei uma API utilizando o framework Laravel PHP por ser um framework que permitir trabalhar
com agilidade e por possibilitar a utilização de vários recursos para a construção de aplicações web modernas.  
Para esse projeto estou usando o Guzzle HTTP Client que possibilita e facilita a comunicação entre os serviços web  
e permite fazer requisições HTTP do lado do cliente.

# Baixando e rodando a aplicação

Antes de tudo, certifique-se que o Docker (link da instalação do docker: https://docs.docker.com/engine/install/) está instalado em sua máquina para ser possível rodar os comando a seguir e acessar a aplicação. Se estiver usando o docker no Linux e suas distribuições, execute os comandos abaixo com o comando sudo.  
Necessário também que identifique o endereço de ip da sua máquina para substituir no arquivo .env da aplicação, visto que o Guzzle lança  
um erro ao tentar acessar o link da API localmente (via localhost).

## Passo 1:

Baixe os arquivos do repositório na pasta de sua preferência;  
Abra a pasta da aplicação na sua IDE ou no seu editor preferido e dentro da pasta **src** localize o arquivo **.env.exemple** e salve uma cópia do mesmo com o nome **.env** na pasta citada anteriormente. Dentro dele contém as configurações da aplicação;  
Abra o arquivo **.env** e localize o parêmetro **POST_BASE_URI** que informa o caminho das rotas da API e substitua o ip desse caminho pelo ip da sua máquina e salve o arquivo;  
Acesse o caminho de pastas da aplicação no seu terminal ou prompt de comando e execute os comando a seguir:

- docker compose run -d server (para criar os containers da aplicação)
- docker compose up -d server (para iniciar o servidor da aplicação)
- docker compose run -d --rm compser install (para instalar as dependências do projeto)
- docker compose run -d --rm composer dump-autoload (para carregar as classes)
- docker compose run -d --rm artisan key:generate (para gerar a app-key da aplicação)
- docker compose run -d --rm artisan migrate (para executar a criação das tabelas no banco)

Executados todos os comandos na sequência acima, acesse a aplicação pelo navegador no endereço: localhost:8000.  
Se todos os comandos forem executados sem erros será possível ver a aplicação rodando com sucesso.
