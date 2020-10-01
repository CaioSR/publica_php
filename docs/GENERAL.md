autor: Caio Shimada Rabello
data: Setembro de 2020

# Descrição de Diretórios

config : arquivos para configuração de caminhos, autoloader de classes e conexão com o banco de dados
docs : documentação geral
public : documentos públicos como as páginas e css (buildado)
resourcers : recursos adicionais como o css do Tailwinds CSS a ser buildado
src : código fonte php principal
src {
    Dao : Objetos de Acesso de dados para um banco MySql. Um para as temporadas e outro para os jogos.
    DaoInterfaces : Interfaces dos objetos de acesso para se ter uma base dos métodos a serem implementados 
                    caso precisa mudar o tipo de banco de dados.
    Models : Classes dos objetos a serem utilizados no projeto.
}
tests : Alguns testes unitários realizados.


# Observações
A parte visual funciona corretamente entretanto a implementação do back-end não está 100%.
Durante a implementação houveram dificuldades em separar a definição das classes com o que seria armazenado no banco.
Por exemplo, a classe Temporada teoricamente possui uma lista de jogos. Porém no banco não, a referência é do Jogo a Temporada.
