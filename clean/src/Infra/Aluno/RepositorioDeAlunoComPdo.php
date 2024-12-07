<?php

namespace Alura\Arquitetura\Infra\Aluno; // Define o namespace onde a classe RepositorioDeAlunoComPdo está localizada

use Alura\Arquitetura\Dominio\Aluno\Aluno; // Importa a classe Aluno do namespace Dominio\Aluno
use Alura\Arquitetura\Dominio\Aluno\AlunoNaoEncontrado; // Importa a exceção AlunoNaoEncontrado do namespace Dominio\Aluno
use Alura\Arquitetura\Dominio\Aluno\RepositorioDeAluno; // Importa a interface RepositorioDeAluno do namespace Dominio\Aluno
use Alura\Arquitetura\Dominio\Aluno\Telefone; // Importa a classe Telefone do namespace Dominio\Aluno
use Alura\Arquitetura\Dominio\Cpf; // Importa a classe Cpf do namespace Dominio

class RepositorioDeAlunoComPdo implements RepositorioDeAluno // Declaração da classe RepositorioDeAlunoComPdo que implementa a interface RepositorioDeAluno
{
    private \PDO $conexao; // Declaração da propriedade privada $conexao do tipo \PDO

    public function __construct(\PDO $conexao) // Declaração do construtor da classe RepositorioDeAlunoComPdo
    {
        $this->conexao = $conexao; // Atribui o objeto \PDO fornecido ao atributo $conexao
    }

    public function adicionar(Aluno $aluno): void // Implementação do método adicionar da interface RepositorioDeAluno
    {
        $sql = 'INSERT INTO alunos VALUES (:cpf, :nome, :email);'; // Query SQL para inserir dados na tabela alunos
        $stmt = $this->conexao->prepare($sql); // Prepara a query SQL
        $stmt->bindValue('cpf', $aluno->cpf()); // Vincula o valor do CPF do aluno ao parâmetro :cpf
        $stmt->bindValue('nome', $aluno->nome()); // Vincula o valor do nome do aluno ao parâmetro :nome
        $stmt->bindValue('email', $aluno->email()); // Vincula o valor do e-mail do aluno ao parâmetro :email
        $stmt->execute(); // Executa a query SQL

        $sql = 'INSERT INTO telefones VALUES (:ddd, :numero, :cpf_aluno)'; // Query SQL para inserir dados na tabela telefones
        $stmt = $this->conexao->prepare($sql); // Prepara a query SQL
        $stmt->bindValue('cpf_aluno', $aluno->cpf()); // Vincula o valor do CPF do aluno ao parâmetro :cpf_aluno

        /** @var Telefone $telefone */
        foreach ($aluno->telefones() as $telefone) { // Itera sobre os telefones do aluno
            $stmt->bindValue('ddd', $telefone->ddd()); // Vincula o valor do DDD do telefone ao parâmetro :ddd
            $stmt->bindValue('numero', $telefone->numero()); // Vincula o valor do número do telefone ao parâmetro :numero
            $stmt->execute(); // Executa a query SQL para inserir o telefone na tabela telefones
        }
    }

    public function buscarPorCpf(Cpf $cpf): Aluno // Implementação do método buscarPorCpf da interface RepositorioDeAluno
    {
        $sql = '
            SELECT cpf, nome, email, ddd, numero as numero_telefone
              FROM alunos
         LEFT JOIN telefones ON telefones.cpf_aluno = alunos.cpf
            WHERE alunos.cpf = ?;
        '; // Query SQL para selecionar dados do aluno e seus telefones baseado no CPF

        $stmt = $this->conexao->prepare($sql); // Prepara a query SQL
        $stmt->bindValue(1, (string) $cpf); // Vincula o valor do CPF como uma string ao parâmetro da query SQL
        $stmt->execute(); // Executa a query SQL

        $dadosAluno = $stmt->fetchAll(\PDO::FETCH_ASSOC); // Obtém todos os dados do aluno como um array associativo

        if (count($dadosAluno) === 0) { // Verifica se nenhum aluno foi encontrado
            throw new AlunoNaoEncontrado($cpf); // Lança a exceção AlunoNaoEncontrado se nenhum aluno for encontrado com o CPF fornecido
        }

        return $this->mapearAluno($dadosAluno); // Retorna o aluno mapeado a partir dos dados obtidos
    }

    private function mapearAluno(array $dadosAluno): Aluno // Método privado para mapear os dados do aluno para um objeto Aluno
    {
        $primeiraLinha = $dadosAluno[0]; // Obtém a primeira linha de dados do aluno
        $aluno = Aluno::comCpfNomeEEmail( // Cria um objeto Aluno com CPF, nome e e-mail
            $primeiraLinha['cpf'],
            $primeiraLinha['nome'],
            $primeiraLinha['email']
        );

        // Filtra os telefones para garantir que não haja telefones nulos
        $telefones = array_filter($dadosAluno, fn ($linha) => $linha['ddd'] !== null && $linha['numero_telefone'] !== null);
        
        // Itera sobre os telefones e adiciona ao objeto Aluno
        foreach ($telefones as $linha) {
            $aluno->adicionarTelefone($linha['ddd'], $linha['numero_telefone']);
        }

        return $aluno; // Retorna o objeto Aluno completo com seus telefones
    }

    public function buscarTodos(): array // Implementação do método buscarTodos da interface RepositorioDeAluno
    {
        $sql = '
            SELECT cpf, nome, email, ddd, numero as numero_telefone
              FROM alunos
         LEFT JOIN telefones ON telefones.cpf_aluno = alunos.cpf;
        '; // Query SQL para selecionar todos os alunos e seus telefones

        $stmt = $this->conexao->query($sql); // Executa a query SQL

        $listaDadosAlunos = $stmt->fetchAll(\PDO::FETCH_ASSOC); // Obtém todos os dados dos alunos como um array associativo
        $alunos = []; // Inicializa um array para armazenar os objetos Aluno

        foreach ($listaDadosAlunos as $dadosAluno) { // Itera sobre os dados de cada aluno
            if (!array_key_exists($dadosAluno['cpf'], $alunos)) { // Verifica se o aluno já existe no array de alunos
                $alunos[$dadosAluno['cpf']] = Aluno::comCpfNomeEEmail( // Cria um novo objeto Aluno com CPF, nome e e-mail
                    $dadosAluno['cpf'],
                    $dadosAluno['nome'],
                    $dadosAluno['email']
                );
            }

            // Adiciona o telefone ao aluno correspondente no array de alunos
            $alunos[$dadosAluno['cpf']]->adicionarTelefone($dadosAluno['ddd'], $dadosAluno['numero_telefone']);
        }

        return array_values($alunos); // Retorna os alunos como um array indexado numericamente
    }
}
