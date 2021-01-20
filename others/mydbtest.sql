CREATE TABLE employees (
	id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	designation VARCHAR(255) NOT NULL
);
--
CREATE TABLE `clientes` (
	`cedula` varchar(15) NOT NULL,
	`apellido` varchar(12) NOT NULL default '',
	`nombre` varchar(12) NOT NULL default '',
	`direccion` varchar(15) NOT NULL default '',
	`telefono` varchar(17) NOT NULL,
	`email` varchar(17) NOT NULL default '',
	PRIMARY KEY (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
--
INSERT INTO `clientes` VALUES ('4-444-712', 'Marmol', 'Pablo', 'Rocadura', '777-7777', 'info@marmol.com');
--
CREATE TABLE artists (
	artist_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	artist_name VARCHAR (50) NOT NULL,
	artist_country CHAR (2) NOT NULL
);
--
CREATE TABLE ratings (
	rating_id INT(2) NOT NULL PRIMARY KEY,
	rating_name VARCHAR (50) NOT NULL
);
--
CREATE TABLE songs (
	song_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	song_title VARCHAR(100) NOT NULL,
	fk_song_artist INT(4) NOT NULL,
	fk_song_rating INT(2) NOT NULL
);
--
INSERT INTO artists (artist_id, artist_name, artist_country) VALUES (1, 'Aerosmith', 'US');
INSERT INTO artists (artist_id, artist_name, artist_country) VALUES (2, 'Abba', 'SE');
INSERT INTO artists (artist_id, artist_name, artist_country) VALUES (3, 'Timbaland', 'US');
INSERT INTO artists (artist_id, artist_name, artist_country) VALUES (4, 'Take That', 'UK');
INSERT INTO artists (artist_id, artist_name, artist_country) VALUES (5, 'Girls Aloud', 'UK');
INSERT INTO artists (artist_id, artist_name, artist_country) VALUES (6, 'Cubanismo', 'ES');
--
INSERT INTO ratings (rating_id, rating_name) VALUES (1, 'Awful');
INSERT INTO ratings (rating_id, rating_name) VALUES (5, 'Excellent');
INSERT INTO ratings (rating_id, rating_name) VALUES (4, 'Good');
INSERT INTO ratings (rating_id, rating_name) VALUES (3, 'Average');
INSERT INTO ratings (rating_id, rating_name) VALUES (2, 'Poor');
--
INSERT INTO songs (song_id, song_title, fk_song_artist, fk_song_rating) VALUES (1, 'Janie\'s Got A Gun', 1, 4);
INSERT INTO songs (song_id, song_title, fk_song_artist, fk_song_rating) VALUES (2, 'Crazy', 1, 5);
INSERT INTO songs (song_id, song_title, fk_song_artist, fk_song_rating) VALUES (3, 'En Las Delicious', 6, 5);
INSERT INTO songs (song_id, song_title, fk_song_artist, fk_song_rating) VALUES (4, 'Sure', 4, 3);
INSERT INTO songs (song_id, song_title, fk_song_artist, fk_song_rating) VALUES (5, 'Pray', 4, 4);
INSERT INTO songs (song_id, song_title, fk_song_artist, fk_song_rating) VALUES (6, 'Another Crack In My Heart', 4, 3);
INSERT INTO songs (song_id, song_title, fk_song_artist, fk_song_rating) VALUES (7, 'Apologize', 3, 4);
INSERT INTO songs (song_id, song_title, fk_song_artist, fk_song_rating) VALUES (8, 'Gimme Gimme Gimme', 2, 3);
INSERT INTO songs (song_id, song_title, fk_song_artist, fk_song_rating) VALUES (9, 'SOS', 2, 4);
INSERT INTO songs (song_id, song_title, fk_song_artist, fk_song_rating) VALUES (10, 'Dancing Queen', 2, 4);
INSERT INTO songs (song_id, song_title, fk_song_artist, fk_song_rating) VALUES (11, 'Voulez Vous', 2, 3);
INSERT INTO songs (song_id, song_title, fk_song_artist, fk_song_rating) VALUES (12, 'Babe', 4, 3);
--
SELECT artist_id, artist_name FROM artists;
SELECT artist_id, artist_name FROM artists WHERE artist_country = 'US';
SELECT song_title, fk_song_rating FROM songs WHERE fk_song_rating >= 4;
SELECT artist_name, artist_country FROM artists WHERE artist_country = 'US' OR artist_country = 'UK';
SELECT song_title FROM songs ORDER BY song_title;
SELECT song_title FROM songs ORDER BY song_title DESC;
SELECT song_title FROM songs ORDER BY song_title LIMIT 3,5;
SELECT song_id, song_title FROM songs WHERE song_title LIKE '%g%';
SELECT song_id, song_title, artist_name FROM songs, artists WHERE songs.fk_song_artist = artists.artist_id;
SELECT song_title, artist_name, rating_name FROM songs, artists, ratings WHERE songs.fk_song_artist = artists.artist_id AND songs.fk_song_rating = ratings.rating_id AND ratings.rating_id >= 4 AND artists.artist_country != 'US';
--
DELETE FROM songs WHERE fk_song_rating <= 3;
--
UPDATE ratings SET rating_name = 'Fantastic' WHERE rating_name = 'Excellent';
UPDATE songs SET song_title = 'Waterloo', fk_song_rating = 5 WHERE song_id = 9;
--
CREATE TABLE tasks (
	id INTEGER PRIMARY KEY,
	name TEXT NOT NULL,
	due TEXT NOT NULL,
	priority TEXT NOT NULL
);
--
CREATE DATABASE app;

USE app;

CREATE TABLE users (
	id int(4) NOT NULL AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	PRIMARY KEY (id)
);

INSERT INTO users (username, password) VALUES ('john', ' $1$Tk0.gh4.$42EZDbQ4mOfmXMq.0m1tS1');
INSERT INTO users (username, password) VALUES ('jane', '$1$.l5.tR/.$XK1KW1Wzqy0UuMFKQDHH00');