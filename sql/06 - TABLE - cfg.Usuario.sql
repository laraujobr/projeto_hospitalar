USE [DB_HOSPITAL]
GO

/****** Object:  Table [cfg].[Usuario]    Script Date: 09/09/2016 00:53:50 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [cfg].[Usuario](
	[idUsuario] [int] IDENTITY(1,1) NOT NULL,
	[nmUsuario] [varchar](200) NOT NULL,
	[nmLogin] [varchar](50) NOT NULL,
	[cdSenha] [varchar](500) NOT NULL,
	[idNivel] [int] NOT NULL,
	[flAtivo] [bit] NOT NULL,
 CONSTRAINT [PK_Usuario] PRIMARY KEY CLUSTERED 
(
	[idUsuario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

ALTER TABLE [cfg].[Usuario]  WITH CHECK ADD  CONSTRAINT [FK_Usuario_Nivel] FOREIGN KEY([idNivel])
REFERENCES [cfg].[Nivel] ([idNivel])
GO

ALTER TABLE [cfg].[Usuario] CHECK CONSTRAINT [FK_Usuario_Nivel]
GO

EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'Contém o cadastro dos usuários no sistema, associados a um nível de acesso em específico.' , @level0type=N'SCHEMA',@level0name=N'cfg', @level1type=N'TABLE',@level1name=N'Usuario'
GO

