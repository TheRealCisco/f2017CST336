SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;



-- --------------------------------------------------------


INSERT INTO `category` (category_id, `category`) VALUES
(1, 'horror'),
(2, 'comedy'),
(3, 'drama'),
(4, 'love'),
(5, 'action'),
(6, 'sc-fi'),
(7, 'thriller'),
(8, 'documentary'),
(9, 'adventure'),
(10, 'fiction');

-- --------------------------------------------------------

INSERT INTO `inventory` (invent_id, movie_id, price) VALUES
(1, 1, 100),
(2, 2, 25),
(3, 3, 40),
(4, 4, 40),
(5, 5, 20),
(6, 6, 25),
(7, 7, 35),
(8, 8, 15),
(9, 9, 35),
(10, 10, 45),
(11, 11, 33),
(12, 12, 27),
(13, 13, 46),
(14, 14, 65),
(15, 15, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

INSERT INTO `movies` (movie_id,category_id, `name`, `director`) VALUES
(1,6, 'Star Wars - The Last Jedi', 'Rian Johnson'),
(2,1, 'Jigsaw','Michael Spierig'),
(3,5, 'Justice League ', 'Zack Snyder'),
(4,5, 'Thor: Ragnarok ', 'Taika Waititi'),
(5,10, 'Pokémon the Movie: I Choose You! ', 'Kunihiko Yuyama'),
(6,2, 'Daddys Home 2', 'Sean Anders'),
(7,9, 'Jumanji: Welcome to the Jungle ','Jake Kasdan'),
(8,3, 'Pitch Perfect 3','Trish Sie'),
(9,10, 'Moana', 'Ron Clements'),
(10,7, 'John Wick: Chapter 2','Chad Stahelski'),
(11,4, 'Fifty Shades Darker ', 'James Foley'),
(12,10, 'Beauty and the Beast', 'Bill Condon '),
(13,5, 'The Fate of the Furious', ' F. Gary Gray'),
(14,6, 'Guardians of the Galaxy Vol. 2', 'James Gunn '),
(15,8, 'Lowriders ', 'Ricardo de Montreuil ');

-- --------------------------------------------------------
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
