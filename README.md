
## Agendamento de Consultas - Uma Jornada
Após sete dias aprendendo Laravel, consegui (quase) desenvolver esse App. Foram feitos:

- Telas de login;
- Telas de Registro;
- POST  da database;
- Telas responsivas;


Porém, não consegui fazer os passos de UPDATE, e DELETE. Além também de não conseguir comunicar duas tabelas juntas.



## Aprendendo sobre o Laravel

Como Desenvolvedor Front-End, aprender um framework baseado em Back-End foi bem desafiador, mas não tanto quanto eu imaginava. Laravel conta com vários resources que ajudam um monte no desenvolvimento da app. Por mais que eu alguns momentos eu tenha me confudido em relação a Controllers e Models, no fim entendi a premissa básica de sua funcionalidade. Com certeza vou me dedicar mais tempo para aprender mais sobre!

## Lógica utilizada

Para as partes que não consegui chegar, procurei seguir o determinado caminho:

- Apagar agendamentos:

Teria que ter criado os agendamentos em outra route, com possibilidade de DELETE;

- Editar Cadastro:

Vincular a tabela User, junto de AgendaController, e através de um botão criar um Trigger para um modal com um form. Assim aparecendo as opções de edição de dados do usuário, como também a exclusão.

-Agendar uma consulta:

Essa parte eu demorei muito para poder assimilar, foi o que mais me dificultou. Mas vamos lá:

Gerar uma migration com `doctors_is`;
Vincular `doctors_id` a DB $Agendas;
Chamar através de um função,  `doctors_id` e então na route Agendamentos, printar o resultado dentro de um '< a >'
O `doctors_id` ficaria vinculado ao id registrado no momento em que o usuário efetuou o cadastro. Exemplo:

$id -> 1,
$name -> Rafael,
$address -> Rua,
$password -> 1234,
$email -> rafael@test.com

Assim, na hora de printar os dados em agendamento, fosse chamado `user_id` contendo o valor de $id, para que vinculasse os dados de $date.

## Considerações Finais

Foi realmente um desafio, falando honestamente gostaria de ter entregue por completo o projeto. Posso dizer com sinceras palavras que não faltaram empenho e esforço de minha parte, e com certeza a partir de agora irei aprender mais sobre o Laravel.

Obrigado ao time da Fácil Consulta pela oportunidade.
