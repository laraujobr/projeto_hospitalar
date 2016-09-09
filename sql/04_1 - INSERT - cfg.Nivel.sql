USE DB_HOSPITAL
GO

SET NOCOUNT ON
SET XACT_ABORT ON
GO

BEGIN TRANSACTION
GO

INSERT INTO cfg.Nivel (nmNivel, flAtivo) VALUES 
('Master',1)
,('Coordenador',1)
,('Assistencial',1)

GO
COMMIT TRANSACTION