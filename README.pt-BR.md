# Contador de Visitas com PHP

## Resumo

Este projeto tem como objetivo criar um contador de visitas a uma página web utilizando PHP de forma simples. A meta é registrar e exibir o número de visitas a uma página, fornecendo uma visão básica sobre a interação dos usuários. O contador será armazenado de forma persistente e atualizado a cada carregamento da página, utilizando funcionalidades básicas do PHP como manipulação de arquivos, cookies e sessões.

## Objetivos

- Aprender e implementar um contador simples de visitas usando PHP.  
- Compreender o uso da manipulação de arquivos em PHP para armazenar e atualizar os dados de visita.  
- Ganhar experiência com sessões e cookies em PHP para armazenamento de dados persistente.  
- Desenvolver uma compreensão básica de como o tráfego web pode ser monitorado e exibido dinamicamente.  
- Aprimorar habilidades de desenvolvimento web com PHP, incluindo o tratamento de requisições e a manipulação de arquivos de dados.

## Métodos

- Manipulação de Arquivos: Utilizar as funções nativas do PHP para ler e escrever o número de visitas em um arquivo de texto simples.  
- Cookies: Implementar cookies para rastrear se o usuário já visitou a página, evitando múltiplas contagens em um curto período.  
- HTML & PHP Básico: Criar a interface com HTML simples e usar PHP para processar os dados e exibir os resultados.

## Desenvolvimento

### Preparação do ambiente
- Configurado o servidor PHP padrão para executar o projeto localmente.  
- Criada a estrutura básica de arquivos, incluindo o script PHP para lidar com visitas e exibir os resultados.

### Implementação da Manipulação de Arquivos
- Criado um arquivo de texto (`visitations.txt`) para armazenar o número de visitas.  
- Desenvolvido o código PHP para ler e escrever o número de visitas no arquivo.

### Uso de Cookies para Identificação de Usuários
- Adicionada a funcionalidade para definir um cookie que identifica se o usuário já visitou a página.  
- Implementada lógica para só incrementar o contador se o usuário não tiver visitado dentro do intervalo de tempo definido.

### Exibição dos Resultados
- Página simples projetada para exibir o número atual de visitas.  
- Integração de PHP com HTML para mostrar a atualização ao vivo do contador sempre que a página for acessada.

## Conclusões

- Este projeto ajudou a consolidar o entendimento sobre funcionalidades básicas do PHP como manipulação de arquivos, cookies e sessões.  
- Ao implementar um contador de visitas, adquiri experiência prática em lidar com dados de usuários de maneira simples e persistente.
