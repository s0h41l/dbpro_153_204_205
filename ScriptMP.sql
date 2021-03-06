USE [master]
GO
/****** Object:  Database [db_mobile_project_db]    Script Date: 5/2/2019 9:12:43 PM ******/
CREATE DATABASE [db_mobile_project_db]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'db_mobile_project_db', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL12.MSSQLSERVER\MSSQL\DATA\db_mobile_project_db.mdf' , SIZE = 5120KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB )
 LOG ON 
( NAME = N'db_mobile_project_db_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL12.MSSQLSERVER\MSSQL\DATA\db_mobile_project_db_log.ldf' , SIZE = 1024KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
GO
ALTER DATABASE [db_mobile_project_db] SET COMPATIBILITY_LEVEL = 120
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [db_mobile_project_db].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [db_mobile_project_db] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET ARITHABORT OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [db_mobile_project_db] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [db_mobile_project_db] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET  DISABLE_BROKER 
GO
ALTER DATABASE [db_mobile_project_db] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [db_mobile_project_db] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET RECOVERY FULL 
GO
ALTER DATABASE [db_mobile_project_db] SET  MULTI_USER 
GO
ALTER DATABASE [db_mobile_project_db] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [db_mobile_project_db] SET DB_CHAINING OFF 
GO
ALTER DATABASE [db_mobile_project_db] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [db_mobile_project_db] SET TARGET_RECOVERY_TIME = 0 SECONDS 
GO
ALTER DATABASE [db_mobile_project_db] SET DELAYED_DURABILITY = DISABLED 
GO
EXEC sys.sp_db_vardecimal_storage_format N'db_mobile_project_db', N'ON'
GO
USE [db_mobile_project_db]
GO
/****** Object:  User [sohail]    Script Date: 5/2/2019 9:12:43 PM ******/
CREATE USER [sohail] FOR LOGIN [sohail] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  Table [dbo].[battery]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[battery](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[capacity] [float] NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[brand]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[brand](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[built_in_memory]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[built_in_memory](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[camera_features]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[camera_features](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[chip_set]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[chip_set](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[chip_sets]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[chip_sets](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
	[deleted_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[color]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[color](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[color] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[connectivity_bluetooth]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[connectivity_bluetooth](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[version] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[connectivity_data]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[connectivity_data](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[connectivity_gps]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[connectivity_gps](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[connectivity_infrared]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[connectivity_infrared](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[connectivity_nfc]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[connectivity_nfc](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[connectivity_radio]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[connectivity_radio](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[connectivity_usb]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[connectivity_usb](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[version] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[connectivity_wlan]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[connectivity_wlan](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[cpu]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cpu](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[device]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[device](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[description] [nvarchar](max) NULL,
	[release_date] [date] NULL,
	[price] [float] NULL,
	[os_id] [bigint] NULL,
	[ui_id] [bigint] NULL,
	[dimensions_id] [bigint] NULL,
	[weight_id] [bigint] NULL,
	[sim_id] [bigint] NULL,
	[color_id] [bigint] NULL,
	[twog_id] [bigint] NULL,
	[threeg_id] [bigint] NULL,
	[fourg_id] [bigint] NULL,
	[cpu_id] [bigint] NULL,
	[chip_set_id] [bigint] NULL,
	[display_technology_id] [bigint] NULL,
	[resolution_id] [bigint] NULL,
	[screen_size_id] [bigint] NULL,
	[display_protection_id] [bigint] NULL,
	[display_extra_feature_id] [bigint] NULL,
	[built_in_memory_id] [bigint] NULL,
	[sd_card_id] [bigint] NULL,
	[main_camera_id] [bigint] NULL,
	[secondary_camera_id] [bigint] NULL,
	[camera_features_id] [bigint] NULL,
	[connectivity_wlan_id] [bigint] NULL,
	[connectivity_gps_id] [bigint] NULL,
	[connectivity_nfc_id] [bigint] NULL,
	[connectivity_usb_id] [bigint] NULL,
	[connectivity_infrared_id] [bigint] NULL,
	[connectivity_data_id] [bigint] NULL,
	[connectivity_bluetooth_id] [bigint] NULL,
	[connectivity_radio_id] [bigint] NULL,
	[feature_message_id] [bigint] NULL,
	[feature_game_id] [bigint] NULL,
	[feature_torch_id] [bigint] NULL,
	[extra_feature_id] [bigint] NULL,
	[battery_id] [bigint] NULL,
	[feature_sensor_id] [bigint] NULL,
	[feature_browser_id] [bigint] NULL,
	[frequency_id] [bigint] NULL,
	[brand_id] [bigint] NULL,
	[cover_image] [nvarchar](max) NULL,
	[image_1] [nvarchar](max) NULL,
	[image_2] [nvarchar](max) NULL,
	[image_3] [nvarchar](max) NULL,
	[image_4] [nvarchar](max) NULL,
	[image_5] [nvarchar](max) NULL,
	[image_6] [nvarchar](max) NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
 CONSTRAINT [PK__device__3213E83F0953BB4A] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
/****** Object:  Table [dbo].[dimensions]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[dimensions](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[display_extra_feature]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[display_extra_feature](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[display_protection]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[display_protection](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[display_technology]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[display_technology](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[extra_feature]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[extra_feature](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[feature_audio]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[feature_audio](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[feature_browser]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[feature_browser](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[feature_game]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[feature_game](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[feature_message]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[feature_message](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[feature_sensor]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[feature_sensor](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[feature_torch]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[feature_torch](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[fourg]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[fourg](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[frequency]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[frequency](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[main_camera]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[main_camera](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[mega_pixels] [float] NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[main_memory]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[main_memory](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[migrations]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[migrations](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[migration] [nvarchar](255) NOT NULL,
	[batch] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[os]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[os](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[password_resets]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[password_resets](
	[email] [nvarchar](255) NOT NULL,
	[token] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[resolution]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[resolution](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[roles]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[roles](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[screen_resolution]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[screen_resolution](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[height] [float] NOT NULL,
	[width] [float] NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[screen_size]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[screen_size](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[size] [float] NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[sd_card]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[sd_card](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[secondary_camera]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[secondary_camera](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[mega_pixels] [float] NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[sim]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[sim](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[threeg]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[threeg](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[twog]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[twog](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[ui]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[ui](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[details] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[users]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[email] [nvarchar](255) NOT NULL,
	[email_verified_at] [datetime] NULL,
	[password] [nvarchar](255) NOT NULL,
	[role_id] [bigint] NULL CONSTRAINT [DF_users_role_id]  DEFAULT ((2)),
	[remember_token] [nvarchar](100) NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
 CONSTRAINT [PK__users__3213E83FC60FBBB3] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[weight]    Script Date: 5/2/2019 9:12:44 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[weight](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[weight] [float] NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET IDENTITY_INSERT [dbo].[battery] ON 

INSERT [dbo].[battery] ([id], [details], [capacity], [created_at], [updated_at]) VALUES (1, N'klk', 121, CAST(N'2019-04-24 05:14:38.737' AS DateTime), CAST(N'2019-04-24 05:14:38.737' AS DateTime))
INSERT [dbo].[battery] ([id], [details], [capacity], [created_at], [updated_at]) VALUES (2, N'3000mhz', 3000, CAST(N'2019-04-25 18:56:16.467' AS DateTime), CAST(N'2019-04-25 18:56:16.467' AS DateTime))
SET IDENTITY_INSERT [dbo].[battery] OFF
SET IDENTITY_INSERT [dbo].[brand] ON 

INSERT [dbo].[brand] ([id], [name], [created_at], [updated_at]) VALUES (2, N'Nokia', CAST(N'2019-04-25 18:55:37.047' AS DateTime), CAST(N'2019-04-25 18:55:37.047' AS DateTime))
INSERT [dbo].[brand] ([id], [name], [created_at], [updated_at]) VALUES (3, N'MI', CAST(N'2019-04-25 18:55:43.917' AS DateTime), CAST(N'2019-04-25 18:55:43.917' AS DateTime))
INSERT [dbo].[brand] ([id], [name], [created_at], [updated_at]) VALUES (4, N'HTC', CAST(N'2019-04-25 18:55:52.820' AS DateTime), CAST(N'2019-04-25 18:55:52.820' AS DateTime))
SET IDENTITY_INSERT [dbo].[brand] OFF
SET IDENTITY_INSERT [dbo].[built_in_memory] ON 

INSERT [dbo].[built_in_memory] ([id], [details], [created_at], [updated_at]) VALUES (1, N'klkdfl', CAST(N'2019-04-25 18:42:39.947' AS DateTime), CAST(N'2019-04-25 18:42:39.947' AS DateTime))
INSERT [dbo].[built_in_memory] ([id], [details], [created_at], [updated_at]) VALUES (2, N'xmdjlfdj', CAST(N'2019-04-25 18:42:48.137' AS DateTime), CAST(N'2019-04-25 18:42:48.137' AS DateTime))
SET IDENTITY_INSERT [dbo].[built_in_memory] OFF
SET IDENTITY_INSERT [dbo].[camera_features] ON 

INSERT [dbo].[camera_features] ([id], [details], [created_at], [updated_at]) VALUES (1, N'jsfdjkl', CAST(N'2019-04-25 18:02:28.467' AS DateTime), CAST(N'2019-04-25 18:02:28.467' AS DateTime))
INSERT [dbo].[camera_features] ([id], [details], [created_at], [updated_at]) VALUES (2, N'kdlfkldfk', CAST(N'2019-04-25 18:02:45.107' AS DateTime), CAST(N'2019-04-25 18:02:45.107' AS DateTime))
SET IDENTITY_INSERT [dbo].[camera_features] OFF
SET IDENTITY_INSERT [dbo].[chip_set] ON 

INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (1, N'aslkjl', CAST(N'2019-04-21 08:31:04.183' AS DateTime), CAST(N'2019-04-23 05:23:17.450' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (2, N'sdf', CAST(N'2019-04-21 08:31:08.687' AS DateTime), CAST(N'2019-04-21 08:31:08.687' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (3, N'wreewr', CAST(N'2019-04-21 09:56:50.847' AS DateTime), CAST(N'2019-04-21 09:56:50.847' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (4, N'werrew', CAST(N'2019-04-21 09:56:54.980' AS DateTime), CAST(N'2019-04-21 09:56:54.980' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (5, N'try', CAST(N'2019-04-21 09:56:59.380' AS DateTime), CAST(N'2019-04-21 09:56:59.380' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (6, N'ytytyu', CAST(N'2019-04-21 09:57:04.657' AS DateTime), CAST(N'2019-04-21 09:57:04.657' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (7, N'hgjg', CAST(N'2019-04-21 09:57:10.123' AS DateTime), CAST(N'2019-04-21 09:57:10.123' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (8, N'fd', CAST(N'2019-04-21 09:57:34.340' AS DateTime), CAST(N'2019-04-21 09:57:34.340' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (9, N'dg', CAST(N'2019-04-21 09:57:38.573' AS DateTime), CAST(N'2019-04-21 09:57:38.573' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (11, N'dgg', CAST(N'2019-04-21 09:57:47.850' AS DateTime), CAST(N'2019-04-21 09:57:47.850' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (12, N'Test', CAST(N'2019-04-21 09:57:51.963' AS DateTime), CAST(N'2019-04-21 10:23:59.053' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (13, N'fdfd', CAST(N'2019-04-21 09:57:56.980' AS DateTime), CAST(N'2019-04-21 09:57:56.980' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (14, N'fddf', CAST(N'2019-04-21 09:58:01.180' AS DateTime), CAST(N'2019-04-21 09:58:01.180' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (15, N'dfgd', CAST(N'2019-04-21 09:58:04.770' AS DateTime), CAST(N'2019-04-21 09:58:04.770' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (17, N'ewrewrewr', CAST(N'2019-04-21 09:58:15.220' AS DateTime), CAST(N'2019-04-21 09:58:15.220' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (19, N'gd', CAST(N'2019-04-21 09:58:27.933' AS DateTime), CAST(N'2019-04-21 09:58:27.933' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (20, N'dfffff', CAST(N'2019-04-21 10:30:39.440' AS DateTime), CAST(N'2019-04-21 10:30:39.440' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (21, N'fdjfdsjsdjfkl', CAST(N'2019-04-21 16:02:03.550' AS DateTime), CAST(N'2019-04-21 16:02:03.550' AS DateTime))
INSERT [dbo].[chip_set] ([id], [details], [created_at], [updated_at]) VALUES (22, N'dvkldfkl', CAST(N'2019-04-23 05:23:06.727' AS DateTime), CAST(N'2019-04-23 05:23:06.727' AS DateTime))
SET IDENTITY_INSERT [dbo].[chip_set] OFF
SET IDENTITY_INSERT [dbo].[color] ON 

INSERT [dbo].[color] ([id], [color], [created_at], [updated_at]) VALUES (1, N'black', CAST(N'2019-04-21 08:43:32.823' AS DateTime), CAST(N'2019-04-21 08:43:32.823' AS DateTime))
INSERT [dbo].[color] ([id], [color], [created_at], [updated_at]) VALUES (2, N'REd', CAST(N'2019-04-25 03:46:24.247' AS DateTime), CAST(N'2019-04-25 03:46:24.247' AS DateTime))
INSERT [dbo].[color] ([id], [color], [created_at], [updated_at]) VALUES (3, N'Orange', CAST(N'2019-04-25 03:46:30.900' AS DateTime), CAST(N'2019-04-25 03:46:30.900' AS DateTime))
INSERT [dbo].[color] ([id], [color], [created_at], [updated_at]) VALUES (4, N'jfkdjk', CAST(N'2019-04-29 08:17:36.423' AS DateTime), CAST(N'2019-04-29 08:17:36.423' AS DateTime))
INSERT [dbo].[color] ([id], [color], [created_at], [updated_at]) VALUES (5, N'fddfdf', CAST(N'2019-04-29 08:17:43.447' AS DateTime), CAST(N'2019-04-29 08:17:43.447' AS DateTime))
INSERT [dbo].[color] ([id], [color], [created_at], [updated_at]) VALUES (6, N'dsfmmfdskj', CAST(N'2019-04-29 08:17:51.223' AS DateTime), CAST(N'2019-04-29 08:17:51.223' AS DateTime))
INSERT [dbo].[color] ([id], [color], [created_at], [updated_at]) VALUES (7, N'dfjksfdj', CAST(N'2019-04-29 08:17:56.590' AS DateTime), CAST(N'2019-04-29 08:17:56.590' AS DateTime))
INSERT [dbo].[color] ([id], [color], [created_at], [updated_at]) VALUES (8, N'rjj', CAST(N'2019-04-29 08:18:02.140' AS DateTime), CAST(N'2019-04-29 08:18:02.140' AS DateTime))
INSERT [dbo].[color] ([id], [color], [created_at], [updated_at]) VALUES (9, N'fjkdjk', CAST(N'2019-04-29 08:18:06.530' AS DateTime), CAST(N'2019-04-29 08:18:06.530' AS DateTime))
INSERT [dbo].[color] ([id], [color], [created_at], [updated_at]) VALUES (10, N'dfjkfdj', CAST(N'2019-04-29 08:18:11.907' AS DateTime), CAST(N'2019-04-29 08:18:11.907' AS DateTime))
INSERT [dbo].[color] ([id], [color], [created_at], [updated_at]) VALUES (11, N'dkdflkdf', CAST(N'2019-04-29 08:18:17.923' AS DateTime), CAST(N'2019-04-29 08:18:17.923' AS DateTime))
SET IDENTITY_INSERT [dbo].[color] OFF
SET IDENTITY_INSERT [dbo].[connectivity_bluetooth] ON 

INSERT [dbo].[connectivity_bluetooth] ([id], [details], [version], [created_at], [updated_at]) VALUES (1, N'dfndfjk', N'4.0', CAST(N'2019-04-25 18:58:48.673' AS DateTime), CAST(N'2019-04-25 18:58:48.673' AS DateTime))
INSERT [dbo].[connectivity_bluetooth] ([id], [details], [version], [created_at], [updated_at]) VALUES (2, N'dfffff', N'4.0', CAST(N'2019-04-27 14:02:12.937' AS DateTime), CAST(N'2019-04-27 14:02:12.937' AS DateTime))
INSERT [dbo].[connectivity_bluetooth] ([id], [details], [version], [created_at], [updated_at]) VALUES (3, N'as', N'4.0', CAST(N'2019-04-27 14:02:18.780' AS DateTime), CAST(N'2019-04-27 14:02:18.780' AS DateTime))
INSERT [dbo].[connectivity_bluetooth] ([id], [details], [version], [created_at], [updated_at]) VALUES (4, N'klkdfl', N'4.0', CAST(N'2019-04-27 14:02:25.257' AS DateTime), CAST(N'2019-04-27 14:02:25.257' AS DateTime))
INSERT [dbo].[connectivity_bluetooth] ([id], [details], [version], [created_at], [updated_at]) VALUES (5, N'sdf', N'ds', CAST(N'2019-04-27 14:02:30.717' AS DateTime), CAST(N'2019-04-27 14:02:30.717' AS DateTime))
SET IDENTITY_INSERT [dbo].[connectivity_bluetooth] OFF
SET IDENTITY_INSERT [dbo].[connectivity_data] ON 

INSERT [dbo].[connectivity_data] ([id], [details], [created_at], [updated_at]) VALUES (1, N'fast net 4g', CAST(N'2019-04-25 18:53:24.467' AS DateTime), CAST(N'2019-04-25 18:53:24.467' AS DateTime))
SET IDENTITY_INSERT [dbo].[connectivity_data] OFF
SET IDENTITY_INSERT [dbo].[connectivity_gps] ON 

INSERT [dbo].[connectivity_gps] ([id], [details], [created_at], [updated_at]) VALUES (1, N'mddjflk', CAST(N'2019-04-25 18:52:55.030' AS DateTime), CAST(N'2019-04-25 18:52:55.030' AS DateTime))
SET IDENTITY_INSERT [dbo].[connectivity_gps] OFF
SET IDENTITY_INSERT [dbo].[connectivity_infrared] ON 

INSERT [dbo].[connectivity_infrared] ([id], [details], [created_at], [updated_at]) VALUES (1, N'jdfgfkjrltkrl', CAST(N'2019-04-25 09:03:07.797' AS DateTime), CAST(N'2019-04-25 09:03:18.267' AS DateTime))
INSERT [dbo].[connectivity_infrared] ([id], [details], [created_at], [updated_at]) VALUES (2, N'm,jklj', CAST(N'2019-04-25 18:53:48.350' AS DateTime), CAST(N'2019-04-25 18:53:48.350' AS DateTime))
SET IDENTITY_INSERT [dbo].[connectivity_infrared] OFF
SET IDENTITY_INSERT [dbo].[connectivity_nfc] ON 

INSERT [dbo].[connectivity_nfc] ([id], [details], [created_at], [updated_at]) VALUES (1, N'nm', CAST(N'2019-04-25 09:43:49.047' AS DateTime), CAST(N'2019-04-25 09:43:49.047' AS DateTime))
SET IDENTITY_INSERT [dbo].[connectivity_nfc] OFF
SET IDENTITY_INSERT [dbo].[connectivity_radio] ON 

INSERT [dbo].[connectivity_radio] ([id], [details], [created_at], [updated_at]) VALUES (1, N'klkdfl', CAST(N'2019-04-25 18:52:34.043' AS DateTime), CAST(N'2019-04-25 18:52:34.043' AS DateTime))
SET IDENTITY_INSERT [dbo].[connectivity_radio] OFF
SET IDENTITY_INSERT [dbo].[connectivity_usb] ON 

INSERT [dbo].[connectivity_usb] ([id], [details], [version], [created_at], [updated_at]) VALUES (1, N'fdkfjlfdk', N'4.0', CAST(N'2019-04-25 18:53:11.423' AS DateTime), CAST(N'2019-04-25 18:53:11.423' AS DateTime))
SET IDENTITY_INSERT [dbo].[connectivity_usb] OFF
SET IDENTITY_INSERT [dbo].[connectivity_wlan] ON 

INSERT [dbo].[connectivity_wlan] ([id], [details], [created_at], [updated_at]) VALUES (1, N'kdldfklf', CAST(N'2019-04-25 18:58:11.353' AS DateTime), CAST(N'2019-04-25 18:58:11.353' AS DateTime))
SET IDENTITY_INSERT [dbo].[connectivity_wlan] OFF
SET IDENTITY_INSERT [dbo].[cpu] ON 

INSERT [dbo].[cpu] ([id], [details], [created_at], [updated_at]) VALUES (1, N'zeek', CAST(N'2019-04-25 14:48:29.370' AS DateTime), CAST(N'2019-04-25 14:48:29.370' AS DateTime))
SET IDENTITY_INSERT [dbo].[cpu] OFF
SET IDENTITY_INSERT [dbo].[device] ON 

INSERT [dbo].[device] ([id], [description], [release_date], [price], [os_id], [ui_id], [dimensions_id], [weight_id], [sim_id], [color_id], [twog_id], [threeg_id], [fourg_id], [cpu_id], [chip_set_id], [display_technology_id], [resolution_id], [screen_size_id], [display_protection_id], [display_extra_feature_id], [built_in_memory_id], [sd_card_id], [main_camera_id], [secondary_camera_id], [camera_features_id], [connectivity_wlan_id], [connectivity_gps_id], [connectivity_nfc_id], [connectivity_usb_id], [connectivity_infrared_id], [connectivity_data_id], [connectivity_bluetooth_id], [connectivity_radio_id], [feature_message_id], [feature_game_id], [feature_torch_id], [extra_feature_id], [battery_id], [feature_sensor_id], [feature_browser_id], [frequency_id], [brand_id], [cover_image], [image_1], [image_2], [image_3], [image_4], [image_5], [image_6], [created_at], [updated_at]) VALUES (6, N'zeem 435', NULL, 36952, 7, 2, 1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 7, 1, 1, 1, 1, 2, N'1556364642-1847905367', N'1556364642-1825839439', N'1556364642-909336736', N'1556364642-1600356922', N'1556364642-1869276873', N'1556364642-741625591', N'C:\xampp77\tmp\php2301.tmp', CAST(N'2019-04-27 11:30:42.683' AS DateTime), CAST(N'2019-04-27 11:30:42.683' AS DateTime))
INSERT [dbo].[device] ([id], [description], [release_date], [price], [os_id], [ui_id], [dimensions_id], [weight_id], [sim_id], [color_id], [twog_id], [threeg_id], [fourg_id], [cpu_id], [chip_set_id], [display_technology_id], [resolution_id], [screen_size_id], [display_protection_id], [display_extra_feature_id], [built_in_memory_id], [sd_card_id], [main_camera_id], [secondary_camera_id], [camera_features_id], [connectivity_wlan_id], [connectivity_gps_id], [connectivity_nfc_id], [connectivity_usb_id], [connectivity_infrared_id], [connectivity_data_id], [connectivity_bluetooth_id], [connectivity_radio_id], [feature_message_id], [feature_game_id], [feature_torch_id], [extra_feature_id], [battery_id], [feature_sensor_id], [feature_browser_id], [frequency_id], [brand_id], [cover_image], [image_1], [image_2], [image_3], [image_4], [image_5], [image_6], [created_at], [updated_at]) VALUES (7, N'zeem 3562', NULL, 362, 7, 2, 1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 2, 1, 1, 7, 1, 1, 1, 1, 3, N'1556397029-111692958', N'1556397029-1962016147', N'1556397029-926702409', N'1556397029-1897644917', N'1556397029-756554009', N'1556397029-158720421', N'C:\xampp77\tmp\php485C.tmp', CAST(N'2019-04-27 20:30:29.520' AS DateTime), CAST(N'2019-04-27 20:30:29.520' AS DateTime))
SET IDENTITY_INSERT [dbo].[device] OFF
SET IDENTITY_INSERT [dbo].[dimensions] ON 

INSERT [dbo].[dimensions] ([id], [details], [created_at], [updated_at]) VALUES (1, N'13:60', CAST(N'2019-04-21 20:17:06.287' AS DateTime), CAST(N'2019-04-21 20:17:06.287' AS DateTime))
INSERT [dbo].[dimensions] ([id], [details], [created_at], [updated_at]) VALUES (2, N'16:3', CAST(N'2019-04-25 03:30:11.373' AS DateTime), CAST(N'2019-04-25 03:30:11.373' AS DateTime))
SET IDENTITY_INSERT [dbo].[dimensions] OFF
SET IDENTITY_INSERT [dbo].[display_extra_feature] ON 

INSERT [dbo].[display_extra_feature] ([id], [details], [created_at], [updated_at]) VALUES (1, N'rhino s dsipaly', CAST(N'2019-04-25 15:10:14.317' AS DateTime), CAST(N'2019-04-25 15:10:14.317' AS DateTime))
INSERT [dbo].[display_extra_feature] ([id], [details], [created_at], [updated_at]) VALUES (2, N'kefkl', CAST(N'2019-04-25 15:15:18.623' AS DateTime), CAST(N'2019-04-25 15:15:18.623' AS DateTime))
SET IDENTITY_INSERT [dbo].[display_extra_feature] OFF
SET IDENTITY_INSERT [dbo].[display_protection] ON 

INSERT [dbo].[display_protection] ([id], [details], [created_at], [updated_at]) VALUES (1, N'czxcxzczx', CAST(N'2019-04-21 20:16:44.777' AS DateTime), CAST(N'2019-04-21 20:16:44.777' AS DateTime))
INSERT [dbo].[display_protection] ([id], [details], [created_at], [updated_at]) VALUES (2, N'cxz', CAST(N'2019-04-21 20:16:50.520' AS DateTime), CAST(N'2019-04-21 20:16:50.520' AS DateTime))
SET IDENTITY_INSERT [dbo].[display_protection] OFF
SET IDENTITY_INSERT [dbo].[display_technology] ON 

INSERT [dbo].[display_technology] ([id], [details], [created_at], [updated_at]) VALUES (1, N'mdflkdldf', CAST(N'2019-04-25 14:51:05.347' AS DateTime), CAST(N'2019-04-25 14:51:05.347' AS DateTime))
SET IDENTITY_INSERT [dbo].[display_technology] OFF
SET IDENTITY_INSERT [dbo].[extra_feature] ON 

INSERT [dbo].[extra_feature] ([id], [details], [created_at], [updated_at]) VALUES (1, N'sjkjdfk', CAST(N'2019-04-25 19:25:41.553' AS DateTime), CAST(N'2019-04-25 19:25:41.553' AS DateTime))
INSERT [dbo].[extra_feature] ([id], [details], [created_at], [updated_at]) VALUES (2, N'sjdjkjfd', CAST(N'2019-04-25 19:25:47.697' AS DateTime), CAST(N'2019-04-25 19:25:47.697' AS DateTime))
INSERT [dbo].[extra_feature] ([id], [details], [created_at], [updated_at]) VALUES (3, N'xcmc,mxc,', CAST(N'2019-04-26 07:09:41.037' AS DateTime), CAST(N'2019-04-26 07:09:41.037' AS DateTime))
INSERT [dbo].[extra_feature] ([id], [details], [created_at], [updated_at]) VALUES (5, N'xcmc,mxc,klkl', CAST(N'2019-04-26 07:09:52.020' AS DateTime), CAST(N'2019-04-26 07:09:52.020' AS DateTime))
INSERT [dbo].[extra_feature] ([id], [details], [created_at], [updated_at]) VALUES (7, N'jjjjj', CAST(N'2019-04-26 07:10:09.763' AS DateTime), CAST(N'2019-04-26 07:10:09.763' AS DateTime))
SET IDENTITY_INSERT [dbo].[extra_feature] OFF
SET IDENTITY_INSERT [dbo].[feature_audio] ON 

INSERT [dbo].[feature_audio] ([id], [details], [created_at], [updated_at]) VALUES (1, N'mdfkjdfkldf', CAST(N'2019-04-25 18:55:08.967' AS DateTime), CAST(N'2019-04-25 18:55:08.967' AS DateTime))
SET IDENTITY_INSERT [dbo].[feature_audio] OFF
SET IDENTITY_INSERT [dbo].[feature_browser] ON 

INSERT [dbo].[feature_browser] ([id], [details], [created_at], [updated_at]) VALUES (1, N'Opera', CAST(N'2019-04-25 18:57:23.133' AS DateTime), CAST(N'2019-04-25 18:57:23.133' AS DateTime))
SET IDENTITY_INSERT [dbo].[feature_browser] OFF
SET IDENTITY_INSERT [dbo].[feature_game] ON 

INSERT [dbo].[feature_game] ([id], [details], [created_at], [updated_at]) VALUES (1, N'sss', CAST(N'2019-04-21 08:31:18.257' AS DateTime), CAST(N'2019-04-21 08:31:18.257' AS DateTime))
INSERT [dbo].[feature_game] ([id], [details], [created_at], [updated_at]) VALUES (3, N'sssa', CAST(N'2019-04-21 08:31:33.563' AS DateTime), CAST(N'2019-04-21 08:31:33.563' AS DateTime))
SET IDENTITY_INSERT [dbo].[feature_game] OFF
SET IDENTITY_INSERT [dbo].[feature_message] ON 

INSERT [dbo].[feature_message] ([id], [details], [created_at], [updated_at]) VALUES (1, N'dlkdl', CAST(N'2019-04-25 19:18:43.393' AS DateTime), CAST(N'2019-04-25 19:18:43.393' AS DateTime))
INSERT [dbo].[feature_message] ([id], [details], [created_at], [updated_at]) VALUES (2, N'dkldk', CAST(N'2019-04-25 19:18:50.297' AS DateTime), CAST(N'2019-04-25 19:18:50.297' AS DateTime))
SET IDENTITY_INSERT [dbo].[feature_message] OFF
SET IDENTITY_INSERT [dbo].[feature_sensor] ON 

INSERT [dbo].[feature_sensor] ([id], [details], [created_at], [updated_at]) VALUES (1, N'dfskfjdskldf', CAST(N'2019-04-25 18:54:37.837' AS DateTime), CAST(N'2019-04-25 18:54:37.837' AS DateTime))
SET IDENTITY_INSERT [dbo].[feature_sensor] OFF
SET IDENTITY_INSERT [dbo].[feature_torch] ON 

INSERT [dbo].[feature_torch] ([id], [details], [created_at], [updated_at]) VALUES (1, N'dfjdfkdfjkl', CAST(N'2019-04-25 18:54:57.253' AS DateTime), CAST(N'2019-04-25 18:54:57.253' AS DateTime))
SET IDENTITY_INSERT [dbo].[feature_torch] OFF
SET IDENTITY_INSERT [dbo].[fourg] ON 

INSERT [dbo].[fourg] ([id], [details], [created_at], [updated_at]) VALUES (1, N'djkfdsjk', CAST(N'2019-04-25 09:27:37.573' AS DateTime), CAST(N'2019-04-25 09:27:37.573' AS DateTime))
SET IDENTITY_INSERT [dbo].[fourg] OFF
SET IDENTITY_INSERT [dbo].[frequency] ON 

INSERT [dbo].[frequency] ([id], [details], [created_at], [updated_at]) VALUES (1, N'3000mhz', CAST(N'2019-04-25 18:54:14.980' AS DateTime), CAST(N'2019-04-25 18:54:14.980' AS DateTime))
SET IDENTITY_INSERT [dbo].[frequency] OFF
SET IDENTITY_INSERT [dbo].[main_camera] ON 

INSERT [dbo].[main_camera] ([id], [details], [mega_pixels], [created_at], [updated_at]) VALUES (1, N'dmd,md,', 3, CAST(N'2019-04-25 19:01:29.517' AS DateTime), CAST(N'2019-04-25 19:01:29.517' AS DateTime))
INSERT [dbo].[main_camera] ([id], [details], [mega_pixels], [created_at], [updated_at]) VALUES (2, N'fddfdf', 13, CAST(N'2019-04-29 10:12:13.050' AS DateTime), CAST(N'2019-04-29 10:12:13.050' AS DateTime))
INSERT [dbo].[main_camera] ([id], [details], [mega_pixels], [created_at], [updated_at]) VALUES (3, N'dklfdkldfkl', 12, CAST(N'2019-04-29 10:12:26.420' AS DateTime), CAST(N'2019-04-29 10:12:26.420' AS DateTime))
INSERT [dbo].[main_camera] ([id], [details], [mega_pixels], [created_at], [updated_at]) VALUES (4, N'djkdjfk', 13, CAST(N'2019-04-29 10:12:34.623' AS DateTime), CAST(N'2019-04-29 10:12:34.623' AS DateTime))
INSERT [dbo].[main_camera] ([id], [details], [mega_pixels], [created_at], [updated_at]) VALUES (5, N'fgfjkfjkfj', 15, CAST(N'2019-04-29 10:12:59.310' AS DateTime), CAST(N'2019-04-29 10:12:59.310' AS DateTime))
INSERT [dbo].[main_camera] ([id], [details], [mega_pixels], [created_at], [updated_at]) VALUES (6, N'csjkkdfsjk', 13, CAST(N'2019-04-29 10:13:13.967' AS DateTime), CAST(N'2019-04-29 10:13:13.967' AS DateTime))
INSERT [dbo].[main_camera] ([id], [details], [mega_pixels], [created_at], [updated_at]) VALUES (7, N'gfkfgklkgl', 16, CAST(N'2019-04-29 10:13:29.037' AS DateTime), CAST(N'2019-04-29 10:13:29.037' AS DateTime))
INSERT [dbo].[main_camera] ([id], [details], [mega_pixels], [created_at], [updated_at]) VALUES (8, N'ffgkljglfkfl', 13, CAST(N'2019-04-29 10:13:43.790' AS DateTime), CAST(N'2019-04-29 10:13:43.790' AS DateTime))
INSERT [dbo].[main_camera] ([id], [details], [mega_pixels], [created_at], [updated_at]) VALUES (9, N'dflfdkfdlkl', 20, CAST(N'2019-04-29 10:13:53.237' AS DateTime), CAST(N'2019-04-29 10:13:53.237' AS DateTime))
INSERT [dbo].[main_camera] ([id], [details], [mega_pixels], [created_at], [updated_at]) VALUES (10, N'dkjdfjdfklj', 19, CAST(N'2019-04-29 10:14:13.560' AS DateTime), CAST(N'2019-04-29 10:14:13.560' AS DateTime))
INSERT [dbo].[main_camera] ([id], [details], [mega_pixels], [created_at], [updated_at]) VALUES (11, N'ldkdlkerl', 16, CAST(N'2019-04-29 10:14:22.120' AS DateTime), CAST(N'2019-04-29 10:14:22.120' AS DateTime))
SET IDENTITY_INSERT [dbo].[main_camera] OFF
SET IDENTITY_INSERT [dbo].[main_memory] ON 

INSERT [dbo].[main_memory] ([id], [details], [created_at], [updated_at]) VALUES (1, N'jdjfk', CAST(N'2019-04-25 18:52:18.537' AS DateTime), CAST(N'2019-04-25 18:52:18.537' AS DateTime))
SET IDENTITY_INSERT [dbo].[main_memory] OFF
SET IDENTITY_INSERT [dbo].[migrations] ON 

INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (40, N'2014_10_12_100000_create_password_resets_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (41, N'2019_04_21_071145_create_os_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (42, N'2019_04_21_071233_create_ui_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (43, N'2019_04_21_071259_create_feature_message_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (44, N'2019_04_21_071335_create_main_camera_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (45, N'2019_04_21_071404_create_display_protection_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (46, N'2019_04_21_071529_create_display_extra_feature_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (47, N'2019_04_21_071600_create_connectivity_nfc_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (48, N'2019_04_21_071622_create_chip_set_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (49, N'2019_04_21_071643_create_color_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (50, N'2019_04_21_073134_create_weight_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (51, N'2019_04_21_073153_create_sim_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (52, N'2019_04_21_073214_create_extra_feature_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (53, N'2019_04_21_073305_create_main_memory_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (54, N'2019_04_21_073346_create_dimensions_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (55, N'2019_04_21_073410_create_connectivity_radio_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (56, N'2019_04_21_073432_create_connectivity_gps_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (57, N'2019_04_21_073449_create_connectivity_usb_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (58, N'2019_04_21_073515_create_connectivity_bluetooth_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (59, N'2019_04_21_073534_create_connectivity_wlan_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (60, N'2019_04_21_073557_create_connectivity_data_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (61, N'2019_04_21_073621_create_connectivity_infrared_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (62, N'2019_04_21_073652_create_camera_features_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (63, N'2019_04_21_073743_create_frequency_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (64, N'2019_04_21_073818_create_secondary_camera_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (65, N'2019_04_21_073850_create_feature_sensor_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (66, N'2019_04_21_073944_create_feature_torch_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (67, N'2019_04_21_074009_create_feature_audio_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (68, N'2019_04_21_074032_create_cpu_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (69, N'2019_04_21_074103_create_built_in_memory_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (70, N'2019_04_21_074201_create_brand_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (71, N'2019_04_21_074223_create_battery_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (72, N'2019_04_21_074256_create_display_technology_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (73, N'2019_04_21_074318_create_feature_game_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (74, N'2019_04_21_074338_create_feature_browser_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (75, N'2019_04_21_074412_create_screen_resolution_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (76, N'2019_04_21_074434_create_screen_size_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (77, N'2019_04_21_101136_create_chip_sets_table', 2)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (78, N'2019_04_24_071407_create_role_table', 2)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (79, N'2019_04_24_174132_create_twog_table', 3)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (80, N'2019_04_24_174154_create_threeg_table', 3)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (81, N'2019_04_24_174237_create_fourg_table', 3)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (82, N'2019_04_24_182813_create_resolution_table', 4)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (83, N'2019_04_24_183149_create_sd_card_table', 5)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (85, N'2019_04_24_184005_create_threeg_table', 7)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (86, N'2019_04_24_184026_create_twog_table', 7)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (87, N'2019_04_24_184051_create_fourg_table', 7)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (91, N'2019_04_24_183207_create_device_table', 8)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (93, N'2019_04_27_062315_create_roles_table', 9)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (94, N'2014_10_12_000000_create_users_table', 10)
SET IDENTITY_INSERT [dbo].[migrations] OFF
SET IDENTITY_INSERT [dbo].[os] ON 

INSERT [dbo].[os] ([id], [details], [created_at], [updated_at]) VALUES (2, N'Android 2.3', CAST(N'2019-04-24 19:56:19.147' AS DateTime), CAST(N'2019-04-24 19:56:19.147' AS DateTime))
INSERT [dbo].[os] ([id], [details], [created_at], [updated_at]) VALUES (3, N'Android 3.0', CAST(N'2019-04-24 19:56:27.580' AS DateTime), CAST(N'2019-04-24 19:56:27.580' AS DateTime))
INSERT [dbo].[os] ([id], [details], [created_at], [updated_at]) VALUES (4, N'Android 3.5', CAST(N'2019-04-24 19:56:34.963' AS DateTime), CAST(N'2019-04-24 19:56:34.963' AS DateTime))
INSERT [dbo].[os] ([id], [details], [created_at], [updated_at]) VALUES (5, N'Android 4.0', CAST(N'2019-04-24 19:56:43.013' AS DateTime), CAST(N'2019-04-24 19:56:43.013' AS DateTime))
INSERT [dbo].[os] ([id], [details], [created_at], [updated_at]) VALUES (6, N'Android 4.5', CAST(N'2019-04-24 19:56:54.267' AS DateTime), CAST(N'2019-04-24 19:56:54.267' AS DateTime))
INSERT [dbo].[os] ([id], [details], [created_at], [updated_at]) VALUES (7, N'Adroid 5.0', CAST(N'2019-04-25 03:26:13.670' AS DateTime), CAST(N'2019-04-25 03:26:13.670' AS DateTime))
INSERT [dbo].[os] ([id], [details], [created_at], [updated_at]) VALUES (8, N'Android 6.0', CAST(N'2019-04-25 19:35:45.307' AS DateTime), CAST(N'2019-04-25 19:35:45.307' AS DateTime))
INSERT [dbo].[os] ([id], [details], [created_at], [updated_at]) VALUES (9, N'Android 7.0', CAST(N'2019-04-25 19:35:53.753' AS DateTime), CAST(N'2019-04-25 19:35:53.753' AS DateTime))
INSERT [dbo].[os] ([id], [details], [created_at], [updated_at]) VALUES (10, N'Android 9.0', CAST(N'2019-04-25 19:36:02.207' AS DateTime), CAST(N'2019-04-25 19:36:02.207' AS DateTime))
INSERT [dbo].[os] ([id], [details], [created_at], [updated_at]) VALUES (12, N'Android 78.0', CAST(N'2019-04-30 04:42:10.547' AS DateTime), CAST(N'2019-04-30 04:42:10.547' AS DateTime))
SET IDENTITY_INSERT [dbo].[os] OFF
SET IDENTITY_INSERT [dbo].[roles] ON 

INSERT [dbo].[roles] ([id], [name], [created_at], [updated_at]) VALUES (1, N'admin', CAST(N'2019-04-25 18:54:14.980' AS DateTime), CAST(N'2019-04-25 18:54:14.980' AS DateTime))
INSERT [dbo].[roles] ([id], [name], [created_at], [updated_at]) VALUES (2, N'subscriber', CAST(N'2019-04-25 18:54:14.980' AS DateTime), CAST(N'2019-04-25 18:54:14.980' AS DateTime))
SET IDENTITY_INSERT [dbo].[roles] OFF
SET IDENTITY_INSERT [dbo].[screen_resolution] ON 

INSERT [dbo].[screen_resolution] ([id], [height], [width], [created_at], [updated_at]) VALUES (1, 1923, 1753, CAST(N'2019-04-25 14:54:23.933' AS DateTime), CAST(N'2019-04-25 14:54:23.933' AS DateTime))
INSERT [dbo].[screen_resolution] ([id], [height], [width], [created_at], [updated_at]) VALUES (2, 320, 480, CAST(N'2019-04-26 19:50:15.520' AS DateTime), CAST(N'2019-04-26 19:50:15.520' AS DateTime))
SET IDENTITY_INSERT [dbo].[screen_resolution] OFF
SET IDENTITY_INSERT [dbo].[screen_size] ON 

INSERT [dbo].[screen_size] ([id], [size], [created_at], [updated_at]) VALUES (1, 6, CAST(N'2019-04-25 14:57:13.630' AS DateTime), CAST(N'2019-04-25 14:57:13.630' AS DateTime))
INSERT [dbo].[screen_size] ([id], [size], [created_at], [updated_at]) VALUES (2, 0.1, CAST(N'2019-04-25 15:02:55.657' AS DateTime), CAST(N'2019-04-25 15:02:55.657' AS DateTime))
SET IDENTITY_INSERT [dbo].[screen_size] OFF
SET IDENTITY_INSERT [dbo].[sd_card] ON 

INSERT [dbo].[sd_card] ([id], [details], [created_at], [updated_at]) VALUES (1, N'jhjhj', CAST(N'2019-04-25 18:44:51.130' AS DateTime), CAST(N'2019-04-25 18:44:51.130' AS DateTime))
SET IDENTITY_INSERT [dbo].[sd_card] OFF
SET IDENTITY_INSERT [dbo].[secondary_camera] ON 

INSERT [dbo].[secondary_camera] ([id], [details], [mega_pixels], [created_at], [updated_at]) VALUES (1, N'mjsdjfk', 13, CAST(N'2019-04-25 18:03:13.960' AS DateTime), CAST(N'2019-04-25 18:03:13.960' AS DateTime))
SET IDENTITY_INSERT [dbo].[secondary_camera] OFF
SET IDENTITY_INSERT [dbo].[sim] ON 

INSERT [dbo].[sim] ([id], [details], [created_at], [updated_at]) VALUES (1, N'3G Sim 64k', CAST(N'2019-04-25 03:43:53.263' AS DateTime), CAST(N'2019-04-25 03:43:53.263' AS DateTime))
INSERT [dbo].[sim] ([id], [details], [created_at], [updated_at]) VALUES (2, N'Nano Sim', CAST(N'2019-04-25 03:44:01.827' AS DateTime), CAST(N'2019-04-25 03:44:01.827' AS DateTime))
INSERT [dbo].[sim] ([id], [details], [created_at], [updated_at]) VALUES (3, N'Micro Sim', CAST(N'2019-04-25 03:44:08.640' AS DateTime), CAST(N'2019-04-25 03:44:08.640' AS DateTime))
INSERT [dbo].[sim] ([id], [details], [created_at], [updated_at]) VALUES (4, N'djdkfjdf', CAST(N'2019-04-26 15:03:05.400' AS DateTime), CAST(N'2019-04-26 15:03:05.400' AS DateTime))
SET IDENTITY_INSERT [dbo].[sim] OFF
SET IDENTITY_INSERT [dbo].[threeg] ON 

INSERT [dbo].[threeg] ([id], [details], [created_at], [updated_at]) VALUES (1, N'fds', CAST(N'2019-04-25 08:44:56.687' AS DateTime), CAST(N'2019-04-25 08:44:56.687' AS DateTime))
INSERT [dbo].[threeg] ([id], [details], [created_at], [updated_at]) VALUES (2, N'fsdfsd', CAST(N'2019-04-25 08:45:05.653' AS DateTime), CAST(N'2019-04-25 08:45:05.653' AS DateTime))
SET IDENTITY_INSERT [dbo].[threeg] OFF
SET IDENTITY_INSERT [dbo].[twog] ON 

INSERT [dbo].[twog] ([id], [details], [created_at], [updated_at]) VALUES (1, N'fsdfdsfds', CAST(N'2019-04-25 08:44:34.200' AS DateTime), CAST(N'2019-04-25 08:44:34.200' AS DateTime))
INSERT [dbo].[twog] ([id], [details], [created_at], [updated_at]) VALUES (2, N'dfsfds', CAST(N'2019-04-25 08:44:43.870' AS DateTime), CAST(N'2019-04-25 08:44:43.870' AS DateTime))
INSERT [dbo].[twog] ([id], [details], [created_at], [updated_at]) VALUES (3, N'dfssdf', CAST(N'2019-04-25 08:44:48.363' AS DateTime), CAST(N'2019-04-25 08:44:48.363' AS DateTime))
SET IDENTITY_INSERT [dbo].[twog] OFF
SET IDENTITY_INSERT [dbo].[ui] ON 

INSERT [dbo].[ui] ([id], [details], [created_at], [updated_at]) VALUES (1, N'Rhino', CAST(N'2019-04-24 20:23:24.420' AS DateTime), CAST(N'2019-04-24 20:23:24.420' AS DateTime))
INSERT [dbo].[ui] ([id], [details], [created_at], [updated_at]) VALUES (2, N'Crystal', CAST(N'2019-04-24 20:23:53.273' AS DateTime), CAST(N'2019-04-24 20:23:53.273' AS DateTime))
INSERT [dbo].[ui] ([id], [details], [created_at], [updated_at]) VALUES (3, N'Sheild', CAST(N'2019-04-24 20:24:10.377' AS DateTime), CAST(N'2019-04-24 20:24:10.377' AS DateTime))
SET IDENTITY_INSERT [dbo].[ui] OFF
SET IDENTITY_INSERT [dbo].[users] ON 

INSERT [dbo].[users] ([id], [name], [email], [email_verified_at], [password], [role_id], [remember_token], [created_at], [updated_at]) VALUES (1, N'Sohail Khan', N'sohail@ymail.com', NULL, N'$2y$10$yOb3kcnpF5a2Lx8WG/M1WOJ/pyRtEsyGabDJoNUPH6FVbQ4edJKqW', 1, NULL, CAST(N'2019-04-27 06:46:20.687' AS DateTime), CAST(N'2019-04-27 06:46:20.687' AS DateTime))
INSERT [dbo].[users] ([id], [name], [email], [email_verified_at], [password], [role_id], [remember_token], [created_at], [updated_at]) VALUES (4, N'Sana Masood', N'sana@ymail.com', NULL, N'$2y$10$dkFvfHma7whTT2Q74TaxSO5jmRPvEVWpg5nnxy.0VfXzE98V2g5yW', 2, NULL, CAST(N'2019-04-27 07:18:15.400' AS DateTime), CAST(N'2019-04-27 07:18:15.400' AS DateTime))
SET IDENTITY_INSERT [dbo].[users] OFF
SET IDENTITY_INSERT [dbo].[weight] ON 

INSERT [dbo].[weight] ([id], [weight], [created_at], [updated_at]) VALUES (1, 100, CAST(N'2019-04-21 20:17:16.840' AS DateTime), CAST(N'2019-04-21 20:17:16.840' AS DateTime))
INSERT [dbo].[weight] ([id], [weight], [created_at], [updated_at]) VALUES (2, 200, CAST(N'2019-04-21 20:17:22.773' AS DateTime), CAST(N'2019-04-21 20:17:22.773' AS DateTime))
INSERT [dbo].[weight] ([id], [weight], [created_at], [updated_at]) VALUES (3, 85, CAST(N'2019-04-25 03:34:28.907' AS DateTime), CAST(N'2019-04-25 03:34:28.907' AS DateTime))
INSERT [dbo].[weight] ([id], [weight], [created_at], [updated_at]) VALUES (4, 1325, CAST(N'2019-04-26 09:50:11.643' AS DateTime), CAST(N'2019-04-26 09:50:11.643' AS DateTime))
SET IDENTITY_INSERT [dbo].[weight] OFF
SET ANSI_PADDING ON

GO
/****** Object:  Index [brand_name_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [brand_name_unique] ON [dbo].[brand]
(
	[name] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [built_in_memory_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [built_in_memory_details_unique] ON [dbo].[built_in_memory]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [camera_features_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [camera_features_details_unique] ON [dbo].[camera_features]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [chip_set_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [chip_set_details_unique] ON [dbo].[chip_set]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [color_color_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [color_color_unique] ON [dbo].[color]
(
	[color] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [connectivity_bluetooth_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [connectivity_bluetooth_details_unique] ON [dbo].[connectivity_bluetooth]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [connectivity_data_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [connectivity_data_details_unique] ON [dbo].[connectivity_data]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [connectivity_gps_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [connectivity_gps_details_unique] ON [dbo].[connectivity_gps]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [connectivity_infrared_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [connectivity_infrared_details_unique] ON [dbo].[connectivity_infrared]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [connectivity_nfc_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [connectivity_nfc_details_unique] ON [dbo].[connectivity_nfc]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [connectivity_radio_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [connectivity_radio_details_unique] ON [dbo].[connectivity_radio]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [connectivity_usb_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [connectivity_usb_details_unique] ON [dbo].[connectivity_usb]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [connectivity_wlan_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [connectivity_wlan_details_unique] ON [dbo].[connectivity_wlan]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [cpu_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [cpu_details_unique] ON [dbo].[cpu]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [dimensions_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [dimensions_details_unique] ON [dbo].[dimensions]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [display_extra_feature_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [display_extra_feature_details_unique] ON [dbo].[display_extra_feature]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [display_protection_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [display_protection_details_unique] ON [dbo].[display_protection]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [display_technology_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [display_technology_details_unique] ON [dbo].[display_technology]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [extra_feature_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [extra_feature_details_unique] ON [dbo].[extra_feature]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [feature_audio_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [feature_audio_details_unique] ON [dbo].[feature_audio]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [feature_browser_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [feature_browser_details_unique] ON [dbo].[feature_browser]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [feature_game_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [feature_game_details_unique] ON [dbo].[feature_game]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [feature_message_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [feature_message_details_unique] ON [dbo].[feature_message]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [feature_sensor_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [feature_sensor_details_unique] ON [dbo].[feature_sensor]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [feature_torch_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [feature_torch_details_unique] ON [dbo].[feature_torch]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [frequency_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [frequency_details_unique] ON [dbo].[frequency]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [main_memory_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [main_memory_details_unique] ON [dbo].[main_memory]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [os_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [os_details_unique] ON [dbo].[os]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [password_resets_email_index]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE NONCLUSTERED INDEX [password_resets_email_index] ON [dbo].[password_resets]
(
	[email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
/****** Object:  Index [screen_size_size_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [screen_size_size_unique] ON [dbo].[screen_size]
(
	[size] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [sim_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [sim_details_unique] ON [dbo].[sim]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [ui_details_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [ui_details_unique] ON [dbo].[ui]
(
	[details] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON

GO
/****** Object:  Index [users_email_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [users_email_unique] ON [dbo].[users]
(
	[email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
/****** Object:  Index [weight_weight_unique]    Script Date: 5/2/2019 9:12:44 PM ******/
CREATE UNIQUE NONCLUSTERED INDEX [weight_weight_unique] ON [dbo].[weight]
(
	[weight] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_battery_id_foreign] FOREIGN KEY([battery_id])
REFERENCES [dbo].[battery] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_battery_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_brand_id_foreign] FOREIGN KEY([brand_id])
REFERENCES [dbo].[brand] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_brand_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_built_in_memory_id_foreign] FOREIGN KEY([built_in_memory_id])
REFERENCES [dbo].[built_in_memory] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_built_in_memory_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_camera_features_id_foreign] FOREIGN KEY([camera_features_id])
REFERENCES [dbo].[camera_features] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_camera_features_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_chip_set_id_foreign] FOREIGN KEY([chip_set_id])
REFERENCES [dbo].[chip_set] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_chip_set_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_color_id_foreign] FOREIGN KEY([color_id])
REFERENCES [dbo].[color] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_color_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_connectivity_bluetooth_id_foreign] FOREIGN KEY([connectivity_bluetooth_id])
REFERENCES [dbo].[connectivity_bluetooth] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_connectivity_bluetooth_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_connectivity_data_id_foreign] FOREIGN KEY([connectivity_data_id])
REFERENCES [dbo].[connectivity_data] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_connectivity_data_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_connectivity_gps_id_foreign] FOREIGN KEY([connectivity_gps_id])
REFERENCES [dbo].[connectivity_gps] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_connectivity_gps_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_connectivity_infrared_id_foreign] FOREIGN KEY([connectivity_infrared_id])
REFERENCES [dbo].[connectivity_infrared] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_connectivity_infrared_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_connectivity_nfc_id_foreign] FOREIGN KEY([connectivity_nfc_id])
REFERENCES [dbo].[connectivity_nfc] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_connectivity_nfc_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_connectivity_radio_id_foreign] FOREIGN KEY([connectivity_radio_id])
REFERENCES [dbo].[connectivity_radio] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_connectivity_radio_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_connectivity_usb_id_foreign] FOREIGN KEY([connectivity_usb_id])
REFERENCES [dbo].[connectivity_usb] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_connectivity_usb_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_connectivity_wlan_id_foreign] FOREIGN KEY([connectivity_wlan_id])
REFERENCES [dbo].[connectivity_wlan] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_connectivity_wlan_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_cpu_id_foreign] FOREIGN KEY([cpu_id])
REFERENCES [dbo].[cpu] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_cpu_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_dimensions_id_foreign] FOREIGN KEY([dimensions_id])
REFERENCES [dbo].[dimensions] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_dimensions_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_display_extra_feature_id_foreign] FOREIGN KEY([display_extra_feature_id])
REFERENCES [dbo].[display_extra_feature] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_display_extra_feature_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_display_protection_id_foreign] FOREIGN KEY([display_protection_id])
REFERENCES [dbo].[display_protection] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_display_protection_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_display_technology_id_foreign] FOREIGN KEY([display_technology_id])
REFERENCES [dbo].[display_technology] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_display_technology_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_extra_feature_id_foreign] FOREIGN KEY([extra_feature_id])
REFERENCES [dbo].[extra_feature] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_extra_feature_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_feature_browser_id_foreign] FOREIGN KEY([feature_browser_id])
REFERENCES [dbo].[feature_browser] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_feature_browser_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_feature_game_id_foreign] FOREIGN KEY([feature_game_id])
REFERENCES [dbo].[feature_game] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_feature_game_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_feature_message_id_foreign] FOREIGN KEY([feature_message_id])
REFERENCES [dbo].[feature_message] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_feature_message_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_feature_sensor_id_foreign] FOREIGN KEY([feature_sensor_id])
REFERENCES [dbo].[feature_sensor] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_feature_sensor_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_feature_torch_id_foreign] FOREIGN KEY([feature_torch_id])
REFERENCES [dbo].[feature_torch] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_feature_torch_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_fourg_id_foreign] FOREIGN KEY([fourg_id])
REFERENCES [dbo].[fourg] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_fourg_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_frequency_id_foreign] FOREIGN KEY([frequency_id])
REFERENCES [dbo].[frequency] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_frequency_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_main_camera_id_foreign] FOREIGN KEY([main_camera_id])
REFERENCES [dbo].[main_camera] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_main_camera_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_os_id_foreign] FOREIGN KEY([os_id])
REFERENCES [dbo].[os] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_os_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_screen_size_id_foreign] FOREIGN KEY([screen_size_id])
REFERENCES [dbo].[screen_size] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_screen_size_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_sd_card_id_foreign] FOREIGN KEY([sd_card_id])
REFERENCES [dbo].[sd_card] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_sd_card_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_secondary_camera_id_foreign] FOREIGN KEY([secondary_camera_id])
REFERENCES [dbo].[secondary_camera] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_secondary_camera_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_sim_id_foreign] FOREIGN KEY([sim_id])
REFERENCES [dbo].[sim] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_sim_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_threeg_id_foreign] FOREIGN KEY([threeg_id])
REFERENCES [dbo].[threeg] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_threeg_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_twog_id_foreign] FOREIGN KEY([twog_id])
REFERENCES [dbo].[twog] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_twog_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_ui_id_foreign] FOREIGN KEY([ui_id])
REFERENCES [dbo].[ui] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_ui_id_foreign]
GO
ALTER TABLE [dbo].[device]  WITH CHECK ADD  CONSTRAINT [device_weight_id_foreign] FOREIGN KEY([weight_id])
REFERENCES [dbo].[weight] ([id])
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[device] CHECK CONSTRAINT [device_weight_id_foreign]
GO
ALTER TABLE [dbo].[users]  WITH CHECK ADD  CONSTRAINT [FK_users_roles] FOREIGN KEY([role_id])
REFERENCES [dbo].[roles] ([id])
GO
ALTER TABLE [dbo].[users] CHECK CONSTRAINT [FK_users_roles]
GO
USE [master]
GO
ALTER DATABASE [db_mobile_project_db] SET  READ_WRITE 
GO
