/*CRIA LOGIN NO SERVIDOR*/
USE [master]
GO

/****** Object:  Login [sys_hospital]    Script Date: 09/09/2016 00:44:17 ******/
DROP LOGIN [sys_hospital]
GO

--DEPOIS DE CRIAR O LOGIN EM SEGURANÇA > LOGIN , DEFINIR SENHA = "sys_hospital" E HABILITAR USUÁRIO
/* For security reasons the login is created disabled and with a random password. */
/****** Object:  Login [sys_hospital]    Script Date: 09/09/2016 00:44:17 ******/
CREATE LOGIN [sys_hospital] WITH PASSWORD=N'Wýx¶BOedå
=÷¼xÁ0ÈË\~m', DEFAULT_DATABASE=[DB_HOSPITAL], DEFAULT_LANGUAGE=[Português (Brasil)], CHECK_EXPIRATION=OFF, CHECK_POLICY=OFF
GO

ALTER LOGIN [sys_hospital] DISABLE
GO

/*CRIA USUÁRIO E ASSOCIA AO LOGIN DO SERVIDOR*/
USE [DB_HOSPITAL]
GO

/****** Object:  User [sys_hospital]    Script Date: 09/09/2016 00:46:01 ******/
DROP USER [sys_hospital]
GO

/****** Object:  User [sys_hospital]    Script Date: 09/09/2016 00:46:01 ******/
CREATE USER [sys_hospital] FOR LOGIN [sys_hospital] WITH DEFAULT_SCHEMA=[dbo]
GO





