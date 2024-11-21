CREATE DATABASE pratica_dois;

USE pratica_dois;

CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome_completo VARCHAR(100) NOT NULL,
    nome_de_usuario VARCHAR(500),
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(500) NOT NULL,
    telefone INT,
    tipo_usuario ENUM('Ativo', 'Inativo', 'Funcionário') NOT NULL
);

CREATE TABLE solicitacao (
    id_solicitacao INT PRIMARY KEY AUTO_INCREMENT,
    criticidade_solicitacao ENUM('Baixa', 'Média', 'Alta') NOT NULL,
    data_abertura_solicitacao DATETIME NOT NULL,
    status_solicitacao ENUM('Aberto', 'Em andamento', 'Resolvido') NOT NULL,
    descricao_solicitacao VARCHAR(5000) NOT NULL,
    fk_usuario INT NOT NULL,  
    id_funcionario_solicitacao INT NOT NULL,  
    FOREIGN KEY (fk_usuario) REFERENCES usuario(id_usuario),  
    FOREIGN KEY (id_funcionario_solicitacao) REFERENCES usuario(id_usuario)  
);

INSERT INTO usuario (nome_completo, nome_de_usuario, email, senha, telefone, tipo_usuario)
VALUES
('funcionario' , 'funcionario', 'funcionario@solicitacoes', '#Funcionario@123', NULL, 'Funcionario');
-- A senha é #Funcionario@123