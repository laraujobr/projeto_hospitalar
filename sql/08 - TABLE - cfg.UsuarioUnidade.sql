USE [DB_HOSPITAL]
GO

/****** Object:  Table [cfg].[UsuarioUnidade]    Script Date: 09/09/2016 00:54:50 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [cfg].[UsuarioUnidade](
	[idUsuario] [int] NOT NULL,
	[idUnidade] [int] NOT NULL,
	[flAtivo] [bit] NOT NULL,
 CONSTRAINT [PK_UsuarioUnidade] PRIMARY KEY CLUSTERED 
(
	[idUsuario] ASC,
	[idUnidade] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

ALTER TABLE [cfg].[UsuarioUnidade]  WITH CHECK ADD  CONSTRAINT [FK_UsuarioUnidade_Unidade] FOREIGN KEY([idUnidade])
REFERENCES [cad].[Unidade] ([idUnidade])
GO

ALTER TABLE [cfg].[UsuarioUnidade] CHECK CONSTRAINT [FK_UsuarioUnidade_Unidade]
GO

ALTER TABLE [cfg].[UsuarioUnidade]  WITH CHECK ADD  CONSTRAINT [FK_UsuarioUnidade_Usuario] FOREIGN KEY([idUnidade])
REFERENCES [cfg].[Usuario] ([idUsuario])
GO

ALTER TABLE [cfg].[UsuarioUnidade] CHECK CONSTRAINT [FK_UsuarioUnidade_Usuario]
GO

EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Contém o permissionamento dos usuários por unidade(s).' , @level0type=N'SCHEMA',@level0name=N'cfg', @level1type=N'TABLE',@level1name=N'UsuarioUnidade'
GO

