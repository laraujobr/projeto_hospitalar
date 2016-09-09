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
,('Incluir usuários',1)
,('Alterar usuários',1)
,('Desativar usuários',1)
,('Preencher prontuário',1)
,('Imprimir prontuário',1)

GO
COMMIT TRANSACTION