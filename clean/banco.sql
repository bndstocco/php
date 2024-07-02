-- Criação da tabela 'alunos' para armazenar informações dos alunos
CREATE TABLE alunos (
    cpf TEXT PRIMARY KEY, -- Chave primária: CPF do aluno (deve ser único)
    nome TEXT,            -- Nome do aluno
    email TEXT            -- Endereço de email do aluno
);

-- Criação da tabela 'telefones' para armazenar informações dos telefones dos alunos
CREATE TABLE telefones (
    ddd TEXT,             -- Código de área do telefone
    numero TEXT,          -- Número do telefone
    cpf_aluno TEXT,       -- CPF do aluno dono do telefone
    PRIMARY KEY (ddd, numero),          -- Chave primária composta por DDD e número (deve ser único)
    FOREIGN KEY(cpf_aluno) REFERENCES alunos(cpf)  -- Chave estrangeira que referencia a tabela 'alunos' pelo CPF
);

-- Criação da tabela 'indicacoes' para armazenar informações de indicações entre alunos
CREATE TABLE indicacoes (
    cpf_indicante TEXT,   -- CPF do aluno que fez a indicação
    cpf_indicado TEXT,    -- CPF do aluno que foi indicado
    data_indicacao TEXT,  -- Data da indicação (pode ser em formato TEXT por simplicidade)
    PRIMARY KEY (cpf_indicante, cpf_indicado),   -- Chave primária composta por CPF do indicante e indicado (deve ser única)
    FOREIGN KEY(cpf_indicado) REFERENCES alunos(cpf),   -- Chave estrangeira que referencia a tabela 'alunos' pelo CPF do indicado
    FOREIGN KEY(cpf_indicante) REFERENCES alunos(cpf)   -- Chave estrangeira que referencia a tabela 'alunos' pelo CPF do indicante
);
