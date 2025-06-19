<?php
/*
// Configurações do banco
$host = 'localhost';
$user = 'root';
$pass = ''; // Altere conforme necessário

   //banco de dados : tabela assunto será criada separada da disciplina, criar chave estrangeira e ligar a tabela do assunto na disciplina, cadastrar assunto antes da disciplina

// Conexão inicial
$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Criação do banco de dados
$sql = "CREATE DATABASE IF NOT EXISTS oabapp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
if (mysqli_query($conn, $sql)) {
    echo "Banco de dados criado com sucesso.<br>";
} else {
    die("Erro ao criar o banco de dados: " . mysqli_error($conn));
}

// Seleciona o banco de dados
mysqli_select_db($conn, "oabapp");

// Criação da tabela 'assunto'
$sql = "CREATE TABLE IF NOT EXISTS assunto (
    idAssunto INT AUTO_INCREMENT PRIMARY KEY,
    campoAssunto VARCHAR(30) NOT NULL
) ENGINE=InnoDB";
if (!mysqli_query($conn, $sql)) {
    die("Erro ao criar a tabela 'assunto': " . mysqli_error($conn));
}

// Criação da tabela 'disciplina'
$sql = "CREATE TABLE IF NOT EXISTS disciplina (
    idDisciplina INT AUTO_INCREMENT PRIMARY KEY,
    campoDisciplina VARCHAR(30) NOT NULL,
    idAssunto INT NOT NULL,
    CONSTRAINT fk_assunto FOREIGN KEY (idAssunto)
        REFERENCES assunto(idAssunto)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB";
if (!mysqli_query($conn, $sql)) {
    die("Erro ao criar a tabela 'disciplina': " . mysqli_error($conn));
}

// Criação da tabela 'questoesOab'
$sql = "CREATE TABLE IF NOT EXISTS questoesOab (
    idQuestoes INT AUTO_INCREMENT PRIMARY KEY,
    idDisciplina INT NOT NULL,
    idAssunto INT NOT NULL,
    campoEnunciado VARCHAR(100) NOT NULL,
    campoAlternativaA VARCHAR(100) NOT NULL,
    campoAlternativaB VARCHAR(100) NOT NULL,
    campoAlternativaC VARCHAR(100) NOT NULL,
    campoAlternativaD VARCHAR(100) NOT NULL,
    alternativaCorreta VARCHAR(100) NOT NULL,
    CONSTRAINT fk_questao_disciplina FOREIGN KEY (idDisciplina)
        REFERENCES disciplina(idDisciplina)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    CONSTRAINT fk_questao_assunto FOREIGN KEY (idAssunto)
        REFERENCES assunto(idAssunto)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB";
if (mysqli_query($conn, $sql)) {
    echo "Tabela 'questoesOab' criada com sucesso.<br>";
} else {
    die("Erro ao criar a tabela 'questoesOab': " . mysqli_error($conn));
}

// Encerra a conexão
mysqli_close($conn);
*/

?>
