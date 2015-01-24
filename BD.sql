CREATE TABLE IF NOT EXISTS `usuario_netosolis` (
`id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL UNIQUE KEY,
  `password` varchar(100) NOT NULL,
  `id_confirmacion` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
