-- DROP DATABASE dbEnvelhecimentoAtivo;
CREATE DATABASE dbEnvelhecimentoAtivo;
USE dbEnvelhecimentoAtivo;

CREATE TABLE Usuarios(Id INT NOT NULL AUTO_INCREMENT, 
					  Nome VARCHAR(100) NOT NULL, 
                      Cep VARCHAR(10) NOT NULL, 
                      Email VARCHAR(100) NOT NULL,
                      Usuario VARCHAR(15) NOT NULL, 
                      Senha VARCHAR(15) NOT NULL,
                      PerfilId INT NOT NULL,
                      CONSTRAINT PKUsuarios PRIMARY KEY(Id)
);                      
CREATE TABLE Profissionais(Id INT NOT NULL AUTO_INCREMENT,
						   Curso VARCHAR(100),
                           Instituicao VARCHAR(100),
                           UsuarioId INT NOT NULL,
                           CONSTRAINT PKProfissionais PRIMARY KEY(Id)
);
CREATE TABLE ContatosUsuarios(Id INT NOT NULL AUTO_INCREMENT,
							  Contato VARCHAR(100),
                              UsuarioId INT NOT NULL,
                              CONSTRAINT PKContatosUsuarios PRIMARY KEY(Id)
);
CREATE TABLE Publicacoes(Id INT NOT NULL AUTO_INCREMENT,
						 Assunto VARCHAR(200) NOT NULL,
                         Descricao VARCHAR(2000) NOT NULL,
                         DataEvento DATE,
                         DataPublicacao DATETIME NOT NULL,
                         UsuarioId INT NOT NULL,
                         CONSTRAINT PKPublicacoes PRIMARY KEY(Id)
);
CREATE TABLE Categorias(Id INT NOT NULL AUTO_INCREMENT,
						Nome VARCHAR(100) NOT NULL,
                        Descricao VARCHAR(200),
                        CONSTRAINT PKCategorias PRIMARY KEY(Id)
);
CREATE TABLE CategoriasPublicacoes(Id INT NOT NULL AUTO_INCREMENT,
								   CategoriaId INT NOT NULL,
                                   PublicacaoId INT NOT NULL,
                                   CONSTRAINT PKPublicacoes PRIMARY KEY(Id)
);
CREATE TABLE Materiais(Id INT NOT NULL AUTO_INCREMENT,
					   Nome VARCHAR(100) NOT NULL,
                       Descricao VARCHAR(200),
                       DataEnvio DATETIME NOT NULL,
                       Arquivo BLOB NOT NULL,
                       UsuarioId INT NOT NULL,
                       CONSTRAINT PKMateriais PRIMARY KEY(Id)
);
CREATE TABLE Perfis(Id INT NOT NULL AUTO_INCREMENT,
					Nome VARCHAR(100),
                    CONSTRAINT PKPerfis PRIMARY KEY(Id)
);	

ALTER TABLE Usuarios ADD CONSTRAINT FKPerfisUsuarios FOREIGN KEY(PerfilId) REFERENCES Perfis(Id);
ALTER TABLE Profissionais ADD CONSTRAINT FKUsuariosProfissionais FOREIGN KEY(UsuarioId) REFERENCES Usuarios(Id);
ALTER TABLE ContatosUsuarios ADD CONSTRAINT FKUsuariosContatos FOREIGN KEY(UsuarioId) REFERENCES Usuarios(Id);
ALTER TABLE Publicacoes ADD CONSTRAINT FKUsuariosPublicacoes FOREIGN KEY(UsuarioId) REFERENCES Usuarios(Id);
ALTER TABLE Materiais ADD CONSTRAINT FKUsuariosMateriais FOREIGN KEY(UsuarioId) REFERENCES Materiais(Id);

INSERT INTO Perfis(Nome)VALUES('Administrador'),('Comum');