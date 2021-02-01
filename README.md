# 7Challenge
O Shape.php deverá ser a classe base com os seguintes requisitos:
1. 4 propriedades com diferentes tipos de visibilidade.
- Um name público.
- Um width e length protegido.
- Um id privado.
- Uma constante chamada de SHAPE_TYPE com o valor 1.
3. Um construtor que aceita o length e width como parâmetros para inicializar as
respectivas propriedades do objeto.
4. O construtor deverá também inicializar o id, que deverá ser um valor único (fica à tua
liberdade a forma de o fazeres).
5. Getters e Setters da propriedade name.
6. Um método público que calcula e retorna a área do objeto.
7. Um método público estático que retorna o SHAPE_TYPE do objeto.
8. Um método que retorna um outro objeto com todas as propriedades do mesmo
(name, width, length, id).
a. Nota: Tens a liberdade de retornar este objeto da forma que aches mais
adequada ao problema.

O Rectangle.php deverá herdar do Shape.php e os requisitos são os seguintes:
1. Uma constante chamada de SHAPE_TYPE com o valor 2.
(Nota: se usares a herança devidamente não deverá requerer nenhum método nem
parâmetro).
O Circle.php deverá herdar do Shape.php e os requisitos são os seguintes:
1. Uma constante chamada de SHAPE_TYPE com o valor 3.
2. Um propriedade protegida chamada de radius.
3. Um construtor que aceita o parâmetro radius e inicializa a devida propriedade do
objeto. (Deverás chamar o construtor da herança devidamente).
4. Um método público que calcula e retorna a área do Círculo.
5. Deverá reescrever o método que foi definido no Shape.php para retornar um outro
objeto com as devidas propriedades (name, radius, id).

Como desenvolver e entregar o exercício:
1. Cria um repositório no github, por exemplo
2. Cria a branch: dev
3. Desenvolve na branch dev
4. No final, o exercício deverá estar disponível no master
5. Não te esqueças de documentar o exercício, no ficheiro README.
Diferenciais:
1. Tens liberdade para adicionar novas funcionalidades, não descritas em cima, de
forma a mostrares e valorizar as tuas habilidades.
2. Tens liberdade para usar as novas versões do PHP e tipar as propriedades e
métodos que aches necessário.
Bónus:
As tarefas bónus são opcionais, mas podem dar pontos no processo de seleção:
- Elabora uma classe de testes unitários para validar o cálculo das áreas para as
demais formas apresentadas.
- Existe um pequeno problema caso se pretenda fazer o mock da classe Shape.php
para retornar o SHAPE_TYPE através do método estático. Como resolvias a
situação? (Poderá ser um resposta por escrito, ou se preferires, podes criar um outro
branch e apresentar uma nova versão do exercício com a resolução do mesmo
problema).

Resposta: Desenvolvi um método (comentado) na Class Circle para sobrescrever o método da Class Shape;
