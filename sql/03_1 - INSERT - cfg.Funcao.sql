USE DB_HOSPITAL
GO

SET NOCOUNT ON
SET XACT_ABORT ON
GO

BEGIN TRANSACTION
GO

INSERT INTO cfg.Funcao(nmFuncao, flAtivo) VALUES 
('Incluir listas',1)
,('Alterar listas',1)
,('Desativar listas',1)
,('Incluir usu�rios',1)
,('Alterar usu�rios',1)
,('Desativar usu�rios',1)
,('Preencher prontu�rio',1)
,('Imprimir prontu�rio',1)

GO
COMMIT TRANSACTION