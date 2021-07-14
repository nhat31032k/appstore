SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `nguoi_khac_choi_gi` (
 	`id_NKCG` varchar(12) NOT NULL ,
  	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  	`images` varchar(255) DEFAULT NULL,
  	`link_info` varchar(255) DEFAULT NULL,
  	`manufacture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `game_moi_cap_nhat`(
	`id_GMCN` varchar(12) NOT NULL ,
  	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  	`images` varchar(255) DEFAULT NULL,
  	`link_info` varchar(255) DEFAULT NULL,
  	`manufacture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `de_xuat_cho_ban`(
	`id_DXCB` varchar(12) NOT NULL ,
  	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  	`images` varchar(255) DEFAULT NULL,
  	`link_info` varchar(255) DEFAULT NULL,
  	`manufacture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `vua_cap_nhat`(
	`id_VCN` varchar(12) NOT NULL ,
  	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  	`images` varchar(255) DEFAULT NULL,
  	`link_info` varchar(255) DEFAULT NULL,
  	`manufacture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `ung_dung_moi`(
	`id_UDM` varchar(12) NOT NULL ,
  	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  	`images` varchar(255) DEFAULT NULL,
  	`link_info` varchar(255) DEFAULT NULL,
  	`manufacture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `nang_suat`(
	`id_NS` varchar(12) NOT NULL ,
  	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  	`images` varchar(255) DEFAULT NULL,
  	`link_info` varchar(255) DEFAULT NULL,
  	`manufacture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `ung_dung_pho_bien`(
	`id_UDPB` varchar(12) NOT NULL ,
  	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  	`images` varchar(255) DEFAULT NULL,
  	`link_info` varchar(255) DEFAULT NULL,
  	`manufacture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `map_gps`(
	`id_MG` varchar(12) NOT NULL ,
  	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  	`images` varchar(255) DEFAULT NULL,
  	`link_info` varchar(255) DEFAULT NULL,
  	`manufacture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `cong_cu_va_tien_ich`(
	`id_CCVTI` varchar(12) NOT NULL ,
  	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  	`images` varchar(255) DEFAULT NULL,
  	`link_info` varchar(255) DEFAULT NULL,
  	`manufacture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `phim_ban_chay_nhat`(
	`id_PBCN` varchar(12) NOT NULL ,
  	`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  	`images` varchar(255) DEFAULT NULL,
  	`link_info` varchar(255) DEFAULT NULL,
  	`type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  	`price` varchar(255) DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `nguoi_khac_choi_gi` (`id_NKCG`,`name`,`images`,`link_info`,`manufacture`) VALUES
('NKCG_1','Garena Free Fire','Doan/images/applications/1.webp','Doan/info_apps/Free_Fire.php','Garena International'),
('NKCG_2','Subway Surfers','Doan/images/apps/hotgame/2.webp','Doan/info_apps/Subway Surfers.php','SYBO Game'),
('NKCG_3','Sniper 3D Assassin®','Doan/images/apps/hotgame/3.webp','Doan/info_apps/Sniper 3D Assassin.php','Fun Games For Free'),
('NKCG_4','Asphalt 9','Doan/images/apps/hotgame/4.webp','Doan/info_apps/Asphalt 9.php','Gameloft SE'),
('NKCG_6','Grand Theft Auto','Doan/images/apps/hotgame/6.webp','Doan/info_apps/Grand Theft Auto.php','Rockstar Games'),
('NKCG_7','Honkai Impact 3','Doan/images/apps/hotgame/7.webp','Doan/info_apps/Honkai Impact 3.php','miHoYo Limited');

INSERT INTO `game_moi_cap_nhat` (`id_GMCN`,`name`,`images`,`link_info`,`manufacture`) VALUES
('GMCN_1','SpongeBob','Doan/images/applications/7.webp','Doan/info_apps/SpongeBob.php','Tilting Point'),
('GMCN_2','Disney Frozen','Doan/images/applications/8.webp','Doan/info_apps/Disney Frozen.php','Jam City,Inc'),
('GMCN_3','Online Soccer','Doan/images/applications/9.webp','Doan/info_apps/Online Soccer.php','Gamebasics BV'),
('GMCN_4','Candy Crush','Doan/images/applications/10.webp','Doan/info_apps/Candy Crush.php','King'),
('GMCN_5','Horse Haven World','Doan/images/applications/11.webp','Doan/info_apps/Horse Haven World.php','Ubisoft Entertainment'),
('GMCN_6','Infinity Loop','Doan/images/applications/12.webp','Doan/info_apps/Infinity Loop.php','InfinityGames.io');

INSERT INTO `de_xuat_cho_ban` (`id_DXCB`,`name`,`images`,`link_info`,`manufacture`) VALUES
('DXCB_1','Zalo','Doan/images/applications/13.webp','Doan/info_apps/Zalo.php','Zalo Group'),
('DXCB_2','Messenger','Doan/images/applications/14.webp','Doan/info_apps/Messenger.php','Facebook'),
('DXCB_3','Facebook Lite','Doan/images/applications/15.webp','Doan/info_apps/Facebook Lite.php','Facebook'),
('DXCB_4','Facebook','Doan/images/applications/16.webp','Doan/info_apps/Facebook.php','Facebook'),
('DXCB_5','Twitch','Doan/images/applications/17.webp','Doan/info_apps/Twitch.php','Twitch Interactive, Inc'),
('DXCB_6','Microsoft Word','Doan/images/applications/18.webp','Doan/info_apps/Microsoft Word.php','Microsoft Corporation');

INSERT INTO `vua_cap_nhat` (`id_VCN`,`name`,`images`,`link_info`,`manufacture`) VALUES
('VCN_1','Ablo','Doan/images/applications/19.webp','Doan/info_apps/Ablo.php','MassiveMedia'),
('VCN_2','Trình chỉnh sửa Video','Doan/images/applications/20.webp','Doan/info_apps/Trình chỉnh sửa Video.php','VideoShow'),
('VCN_3','Âm thanh Giấc ngủ','Doan/images/applications/21.webp','Doan/info_apps/Âm thanh Giấc ngủ.php','Sound Sleep'),
('VCN_4','Chỉnh sửa video','Doan/images/applications/22.webp','Doan/info_apps/Chỉnh sửa video.php','InShot Inc'),
('VCN_5','Photo Lab Picture','Doan/images/applications/23.webp','Doan/info_apps/Photo Lab Picture.php','Linerock Investments'),
('VCN_6','Focus Plant','Doan/images/applications/24.webp','Doan/info_apps/Focus Plant.php','Shikudo');

INSERT INTO `ung_dung_moi` (`id_UDM`,`name`,`images`,`link_info`,`manufacture`) VALUES
('UDM_1','Fasting App','Doan/images/applications/25.webp','Doan/info_apps/Fasting App.php','Leap Fitness Group'),
('UDM_2','Jumprope:How-to-Video','Doan/images/applications/26.webp','Doan/info_apps/Jumprope.php','Jumprope'),
('UDM_3','GroupCal','Doan/images/applications/27.webp','Doan/info_apps/GroupCal.php','24me');

INSERT INTO `nang_suat` (`id_NS`,`name`,`images`,`link_info`,`manufacture`) VALUES
('NS_1','Microsoft Word','Doan/images/applications/18.webp','Doan/info_apps/Microsoft Word.php','Microsoft Corporation'),
('NS_2','Adobe Acrobat Reader','Doan/images/applications/39.webp','Doan/info_apps/Adobe Acrobat Reader.php','Adobe'),
('NS_3','Google Tài liệu','Doan/images/applications/40.webp','Doan/info_apps/Google Tài liệu.php','Google LLC');

INSERT INTO `ung_dung_pho_bien` (`id_UDPB`,`name`,`images`,`link_info`,`manufacture`) VALUES
('UDPB_1','Garena Free Fire','Doan/images/applications/1.webp','Doan/info_apps/Free_Fire.php','Garena International'),
('UDPB_2','Messenger Lite','Doan/images/applications/28.webp','Doan/info_apps/Messenger Lite.php','Facebook'),
('UDPB_3','My Talking Tom','Doan/images/applications/29.webp','Doan/info_apps/My Talking Tom.php','Outfit7 Limited'),
('UDPB_4','B612 - Beauty','Doan/images/applications/30.webp','Doan/info_apps/B612 - Beauty.php','Snow, Inc'),
('UDPB_5','Tiles Hop: EDM','Doan/images/applications/31.webp','Doan/info_apps/Tiles Hop.php','AMANOTES'),
('UDPB_6','Sonic Cat','Doan/images/applications/32.webp','Doan/info_apps/Sonic Cat.php','Badsnowball Limited');

INSERT INTO `map_gps` (`id_MG`,`name`,`images`,`link_info`,`manufacture`) VALUES
('MG_1','Yandex.Taxi Ride','Doan/images/applications/41.webp','Doan/info_apps/Yandex.php','Yandex Apps'),
('MG_2','Uber - Đặt xe','Doan/images/applications/42.webp','Doan/info_apps/Uber .php','Adobe'),
('MG_3','Google Tìm thiết bị','Doan/images/applications/43.webp','Doan/info_apps/Google Tìm thiết bị.php','Google LLC');

INSERT INTO `cong_cu_va_tien_ich` (`id_CCVTI`,`name`,`images`,`link_info`,`manufacture`) VALUES
('CCVTI_1','Truecaller','Doan/images/applications/33.webp','Doan/info_apps/Truecaller.php','True Software AB'),
('CCVTI_2','Microsoft Authenticator','Doan/images/applications/34.webp','Doan/info_apps/Microsoft Authenticator.php','Microsoft Corporation'),
('CCVTI_3','Waze - GPS','Doan/images/applications/35.webp','Doan/info_apps/Waze .php','Waze'),
('CCVTI_4','Xender -Share it','Doan/images/applications/36.webp','Doan/info_apps/Xender .php','Xender File'),
('CCVTI_5','Parallel Space','Doan/images/applications/37.webp','Doan/info_apps/Parallel Space.php','LBE Tech'),
('CCVTI_6','Smart Switch Mobile','Doan/images/applications/38.webp','Doan/info_apps/Smart Switch Mobile.php','Samsung Electronic');



-- Phim
-- Cần bổ sung info
INSERT INTO `phim_ban_chay_nhat` (`id_PBCN`,`name`,`images`,`link_info`,`type`,`price`) VALUES
('PBCN_1','Fantasy Island','Doan/images/movies/1.webp','Doan/info_films/Fantasy_Island.php','Âm thanh nhiều thứ tiếng','50.000đ'),
('PBCN_2','The Call of the Wild','Doan/images/movies/2.webp','','Âm thanh nhiều thứ tiếng','80.000đ'),
('PBCN_3','Frozen II','Doan/images/movies/3.webp','','Gia đình','80.000đ'),
('PBCN_4','Star Wars','Doan/images/movies/4.webp','','Âm thanh tiếng Anh','80.000đ'),
('PBCN_5','Bloodshot','Doan/images/movies/5.webp','','Hành động và phiêu lưu','80.000đ');




ALTER TABLE `phim_ban_chay_nhat`
  ADD PRIMARY KEY (`id_PBCN`);

ALTER TABLE `cong_cu_va_tien_ich`
  ADD PRIMARY KEY (`id_CCVTI`);

ALTER TABLE `map_gps`
  ADD PRIMARY KEY (`id_MG`);

ALTER TABLE `ung_dung_pho_bien`
  ADD PRIMARY KEY (`id_UDPB`);

ALTER TABLE `nang_suat`
  ADD PRIMARY KEY (`id_NS`);

ALTER TABLE `ung_dung_moi`
  ADD PRIMARY KEY (`id_UDM`);

ALTER TABLE `vua_cap_nhat`
  ADD PRIMARY KEY (`id_VCN`);

ALTER TABLE `de_xuat_cho_ban`
  ADD PRIMARY KEY (`id_DXCB`);

ALTER TABLE `game_moi_cap_nhat`
  ADD PRIMARY KEY (`id_GMCN`);

ALTER TABLE `nguoi_khac_choi_gi`
  ADD PRIMARY KEY (`id_NKCG`);
COMMIT;