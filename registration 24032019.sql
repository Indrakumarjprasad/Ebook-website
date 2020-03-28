-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 01:03 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `coverimg` varchar(100) NOT NULL,
  `description` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookname`, `cost`, `author`, `category`, `rating`, `path`, `coverimg`, `description`) VALUES
(1, 'Around the World in 80 Days', '1120', 'Jules Verne', 'Adventure', 4, 'books/Adventure/Around the World in 80 Days.pdf', 'images/aroundtheworld.jpg', 'Fogg, a wealthy English man, lives all alone. His habits are not like that of the rich and he does everything with mathematical precision. He does not have much of a social life, which explains why he is lonely. The most social he has been is to become a member of the Reform Club. One day, he gets into a heated discussion with some fellow club members about an article in The Daily Telegraph. It says that man can now travel the world in eighty days. Fogg takes up the challenge and begins his fantastic journey around the world in 80 days.'),
(2, 'Bones', '1000', 'Edgar Wallace', 'Adventure', 4, 'books/Adventure/Bones.pdf', 'images/bones.jpg', 'Sanders is leaving Africa!  Trouble has beset the popular and respected Commissioner in recent weeks. Bosambo, Chief of the Ochori, made himself scarce just before the arrival of bumbling English Cabinet Minister Blowter -- who was abducted and then strangely rescued . . . and now, out of the blue, the Commissioner is granted six months\' leave.  This puts Sanders\' unsettled sector of Africa under the oversight of Hamilton of the Houssas, together with an entirely unknown and probably inexperienced young man named Francis Augustus Tibbetts -- promptly dubbed \"Bones\" upon his arrival.  Trouble begins from the start. As news spreads of the Commissioner\'s departure, N\'gori, the Chief of the Akasava, sets his drums to calling for a dance-of-many-days.  A dance-of-many-days spells \"spears\" -- and spears spell trouble!  English novelist Edgar Wallace (1875-1932) was author of Sanders of the River, Jack O\' Judgment, and The Angel of Terror, among many other popular novels.'),
(3, 'Captain Blood', '200', 'Rafael Sabatini', 'Adventure', 5, 'books/Adventure/Captain Blood, by Rafael Sabatini.pdf', 'images/captainblood.jpg', 'During the tumultuous reign of James II, Englishman Peter Blood, a gentleman-physician barely escapes the gallows after his arrest for treating a wounded rebel. Sentenced to ten years of slavery on a Barbados plantation, Blood escapes from captivity and boldly embarks on a career as a pirate, never losing sight of his goals of clearing his name and returning to England. A rollicking tale of piracy on a grand scale, accented with breathtaking maritime maneuvers, near misses, and broadside hits, Sabatini\'s fast-paced novel is alive with color, romance, and excitement. A swashbuckling classic that brims with stolen treasure and adventure on the high seas, Captain Blood quickly became a best-seller soon after it was first published in 1922. A salty dose of high-seas adventure for all fiction collections.--Library Journal Captain Blood is the very beau ideal of a pirate.--The New York Times Book Review Glorious. I never enjoyed a novel more.--Norman Mailer'),
(4, 'Five Weeks in a Balloon', '598', 'Jules Verne', 'Adventure', 3, 'books/Adventure/Five Weeks in a Balloon, by Jules Verne.pdf', 'images/fiveweeksinaballoon.jpg', 'This book (hardcover) is part of the TREDITION CLASSICS. It contains classical literature works from over two thousand years. Most of these titles have been out of print and off the bookstore shelves for decades. The book series is intended to preserve the cultural legacy and to promote the timeless works of classical literature. Readers of a TREDITION CLASSICS book support the mission to save many of the amazing works of world literature from oblivion. With this series, tredition intends to make thousands of international literature classics available in printed format again - worldwide.'),
(5, 'Kidnapped', '799', 'Robert Louis Stevenson', 'Adventure', 4, 'books/Adventure/Kidnapped, By R. L. Stevenson.pdf', 'images/KIDNAPPED.jpg', 'Tricked by his miserly and greedy uncle, David Balfour finds himself aboard a ship, where he encounters a fugitive Scottish Highlander named Alan Breck. Together, they embark on a series of adventures to challenge the might of the English Crown, and David becomes a part of the grand adventure to find justice and happiness. Media Note:  This book has been adapted into several films, including a 1960 Walt Disney Productions film starring Peter Finch and James MacArthur.  Series Reading Order  Robert Louis Stevenson followed up this book with a lesser-known sequel, Catriona.'),
(6, 'Mahabharata', '899', 'Kisari Mohan Ganguli', 'Adventure', 3, 'books/Adventure/mahabharata.pdf', 'images/mahabharata.jpg', 'This paperback edition of the Mahabharata, retold in consultation with well-known mythologist Devdutt Pattanaik, brings the world’s longest epic to life, and comes with a foreword by Mahabharata scholar Bibek Debroy. With more than 500 stunning images showcasing India’s varied art forms, the book encapsulates stories from all 18 chapters, the Bhagavad Gita, and the Harivamsha in a uniquely accessible way.'),
(7, 'Greenmantle', '1299', 'Jhon buchan', 'Adventure', 4, 'books/Adventure/greenmantle.pdf', 'images/GREEN MANTLE.jpg', 'It is 1915. Richard Hannay is convalescing from wounds received fighting in France, when he is approached by Sir Walter Bullivant of British Intelligence. Bullivant\'s son has been working undercover in the Middle East. It seems that the Germans with their Turkish Allies are planning to stir up a revolt in the Muslim world that could leave Egypt, India and North Africa in disarray. The boy has since been killed. The only clue he left behind is a piece of paper bearing the words \'Kasredin\',\'cancer\' and \'v.I\'. Hannay must take up the trail. At stake could be the outcome of the war.  Buchan is a master of the spy genre, and this astonishingly prescient and gripping story of danger and adventure has stood the test of time'),
(8, 'Ancient Art and Ritual', '199', 'JANE ELLEN HARRISON', 'Anthrology', 3, 'books/Anthrology/Ancient and Rituals.pdf', 'images/ancientartandritual.jpg', 'This scarce antiquarian book is a facsimile reprint of the original. Due to its age, it may contain imperfections such as marks, notations, marginalia and flawed pages. Because we believe this work is culturally important, we have made it available as part of our commitment for protecting, preserving, and promoting the world\'s literature in affordable, high quality, modern editions that are true to the original work.'),
(9, 'ANTHROPOLOGY', '1899', 'R.R. MARETT', 'Anthrology', 4, 'books/Anthrology/Anthrology.pdf', 'images/Anthropology.jpg', 'This book was converted from its physical edition to the digital format by a community of volunteers. You may find it for free on the web. Purchase of the Kindle edition includes wireless delivery.'),
(10, 'ELEMENTARY NOTIONS OF ARCHEOLOGY', '299', 'DE VILHENA BARBOSA', 'Anthrology', 3, 'books/Anthrology/ELEMENTARY NOTIONS.pdf', 'images/elementarynotions.jpg', 'An increased pace in archaeological research in recent decades has yielded a construction of the history of prehistoric and early historic India primarily in terms of archaeology. This book charts the flow of India\'s grassroots archaeological history in all its continuities and diversities from its Palaeolithic beginnings to AD 300 when early historic India assumed its basic form. The book reconstructs the historical development of human-natural resource interaction in the subcontinent in a lucid style with maps, illustrations, and tables. This second edition contains a new afterword, which discusses all new ideas and discoveries in Indian Archaeology between 1998 and 2008.'),
(11, 'Influences Of Geographic Environment On The Basis Of Ratzel\'s System Of Anthropo-Geography', '569', 'Ellen Churchill Semple', 'Anthrology', 2, 'books/Anthrology/Influences Of Geographic Environment .pdf', 'images/InfluencesOfGeographicEnvironmentOnTheBasisOfRatzelsSystemOfAnthropoGeography.jpg', 'Many of the earliest books, particularly those dating back to the 1900s and before, are now extremely scarce and increasingly expensive. We are republishing these classic works in affordable, high quality, modern editions, using the original text and artwork.'),
(12, 'ON LIMITATIONS TO THE USE OF SOME ANTHROPOLOGIC DATA', '658', 'J.W. POWELL', 'Anthrology', 1, 'books/Anthrology/ON LIMITATIONS TO THE USE OF SOME ANTHROPOLOGIC DATA.pdf', 'images/ONLIMITATIONSTOTHEUSEOFSOMEANTHROPOLOGICDATA.jpg', 'Investigations in this department are of great interest, and have attracted to the field a host of workers; but a general review of the mass of published matter exhibits the fact that the uses to which the material has been put have not always been wise.  In the monuments of antiquity found throughout North America, in camp and village sites, graves, mounds, ruins, and scattered works of art, the origin and development of art in savage and barbaric life may be satisfactorily studied. Incidentally, too, hints of customs may be discovered, but outside of this, the discoveries made have often been illegitimately used, especially for the purpose of connecting the tribes of North America with peoples or so-called races of antiquity in other portions of the world. A brief review of some conclusions that must be accepted in the present status of the science will exhibit the futility of these attempts.'),
(13, 'THE EVOLUTION OF THEOLOGY: AN ANTHROPOLOGICAL STUDY', '799', 'Thomas Henry Huxley', 'Anthrology', 3, 'books/Anthrology/THE EVOLUTION OF THEOLOGY.pdf', 'images/THEEVOLUTIONOFTHEOLOGY.jpg', 'This book was converted from its physical edition to the digital format by a community of volunteers. You may find it for free on the web. Purchase of the Kindle edition includes wireless delivery.'),
(14, 'A Thief in the Night', '455', 'E. W. Hornung', 'Crime Fiction', 4, 'books/Crime Fiction/A Thief in the Night.pdf', 'images/athiefinthenight.jpg', 'On the eve of September 28, 1978, John Paul I died unexpectedly—apparently of a heart attack—after a reign of only 33 days. But within the Vatican there were serious disagreements about the time of death, who found the body, and the true state of the Pope’s health prior to his death. These arguments led to rumors of foul play and conspiracy—variously involving the KGB, the Freemasons, crooked financiers, and Vatican officials. In 1987, the Vatican invited New York Times–bestselling author John Cornwell to conduct a new, independent investigation into the true circumstances of the Pope’s death. In A Thief in the Night: Life and Death in the Vatican, Cornwell tells the story of his search, including a startling theory about Pope Paul I’s untimely demise—and a chilling and unprecedented look inside one of the world’s oldest, most secretive institutions.'),
(15, 'DEAD MEN TELL NO TALES', '699', 'E. W. Hornung', 'Crime Fiction', 5, 'books/Crime Fiction/DEAD MEN TELL NO TALES.pdf', 'images/deadmentellnotales.jpg', 'Dead Men Tell No Tales By E.W. Hornung Dead men tell no tales, or so the pirate maxim goes. But when facing execution in 1831 for mutiny and murder, the previously enigmatic pirate Charles Gibbs recounted the infamous crimes of his harrowing life at sea in a self-aggrandizing series of confessions. Wildly popular reading among nineteenth-century audiences, such criminal confessions were peppered with the romanticized mythology that informs pirate lore to this day. We are delighted to publish this classic book as part of our extensive Classic Library collection. Many of the books in our collection have been out of print for decades, and therefore have not been accessible to the general public. The aim of our publishing program is to facilitate rapid access to this vast reservoir of literature, and our view is that this is a significant literary work, which deserves to be brought back into print after many decades. '),
(16, 'THE DEVIL DOCTOR', '789', 'SAX ROHMER', 'Crime Fiction', 5, 'books/Crime Fiction/THE DEVIL DOCTOR.pdf', 'images/thedevildoctor.jpg', 'Philip Theophrastus Aureolus Bombastus von Hohenheim - known to later ages as Paracelsus - stands on the borderline between medieval and modern; a name that is familiar but a man who has been hard to perceive or understand. Contemporary of Luther, enemy of established medicine, scourge of the universities (\'at all the German schools you cannot learn as much as at the Frankfurt Fair\'), army surgeon and alchemist, myths about him - from his treating diseases from beyond the grave in mid-nineteenth century Salzburg to his Faustian bargain with the devil to regain his youth - have been far more lasting than his actual story. Even during his lifetime, he was rumoured to travel with a magical white horse and to store the elixir of life in the pommel of his sword.'),
(17, 'FOUR WEIRD TALES', '1299', 'ALGERNON BLACKWOOD', 'Home', 4, 'books/Home/Four Weird Tales.pdf', 'images/four-weird-tales-22.jpg', 'Includes the following classic weird tales: The Insanity of Jones, The Man Who Found Out, The Glamour of the Snow, Sand.'),
(18, 'Making Your Camera Pay', '2599', 'FREDERICK C. DAVIS', 'Home', 4, 'books/Home/making your camera pay.pdf', 'images/Makeyoucamerapay.jpg', 'Unlike some other reproductions of classic texts (1) We have not used OCR(Optical Character Recognition), as this leads to bad quality books with introduced typos. (2) In books where there are images such as portraits, maps, sketches etc We have endeavoured to keep the quality of these images, so they represent accurately the original artefact. Although occasionally there may be certain imperfections with these old texts, we feel they deserve to be made available for future generations to enjoy.'),
(19, 'OPPORTUNITIES IN ENGINEERING', '75', 'CHARLES M. HORTON', 'Home', 1, 'books/Home/Opportunities in Engineering.pdf', 'images/opportunities-in-engineering.jpg', 'A Best guide to all engineers,specially Annotated.'),
(20, 'THE BIRDS', '1299', 'Aristophanes', 'Home', 4, 'books/Home/The Birds.pdf', 'images/thebirds.jpg', 'The Birds is a comedy by the Ancient Greek playwright Aristophanes. It was performed in 414 BC at the City Dionysia where it won second prize. It has been acclaimed by modern critics as a perfectly realized fantasy remarkable for its mimicry of birds and for the gaiety of its songs.'),
(21, 'FORTY-ONE YEARS IN INDIA', '1099', 'FIELD MARSHAL', 'Indian', 4, 'books/INDIAN/41 Years in India - From Subaltern to Commander-in-Chief - Lord Roberts of Kandahar.pdf', 'images/fortyoneyearsinindia.jpg', 'This work has been selected by scholars as being culturally important and is part of the knowledge base of civilization as we know it.  This work is in the public domain in the United States of America, and possibly other nations. Within the United States, you may freely copy and distribute this work, as no entity (individual or corporate) has a copyright on the body of the work.  Scholars believe, and we concur, that this work is important enough to be preserved, reproduced, and made generally available to the public. To ensure a quality reading experience, this work has been proofread and republished using a format that seamlessly blends the original graphical elements with text in an easy-to-read typeface.  We appreciate your support of the preservation process, and thank you for being an important part of keeping this knowledge alive and relevant.'),
(22, 'AKBAR, EMPEROR OF INDIA', '599', 'Noer\'s Kaiser Akbar', 'Indian', 3, 'books/INDIAN/AKBAR_EMPEROR_OF_INDIA.pdf', 'images/akbaremperorofindia.jpg', 'An amazing exhibition catalogue showing the splendors of one of the greatest rulers of the world, India’s Emperor Akbar (1542–1605). Akbar the Great is considered one of the most splendid sovereigns of humankind. Though he never learned to read or write, he was a great protector of poetry and literature, the builder of the grandiose capital Fathepur Sikri, the City of Victory, and the promoter of new movements in arts and crafts. The catalogue illustrates his deep art appreciation, detailing his court life with portraits and images of political activities, cultural events, and his military glory through arms and armor. Jewel boxes, turban ornaments, earrings, and necklaces are lavishly presented from the most important Indian, European, and American museums and collections. Although the author references the latest in art historical scholarship, this book is also aimed at readers with an affinity for Indian culture.'),
(23, 'HARVARD ORIENTAL SERIES', '1499', 'CHARLES ROCKWELL LANMAN', 'Indian', 3, 'books/INDIAN/HARVARD ORIENTAL SERIES.pdf', 'images/harvardorientalseries.jpg', 'Harvard Oriental Series This book, \"Harvard Oriental Series Volume 4\", by Charles Rockwell Lanman, is a replication of a book originally published before 1901. It has been restored by human beings, page by page, so that you may enjoy it in a form as close to the original as possible.'),
(24, 'MY REMINISCENCES', '399', 'RABINDRANATH TAGORE', 'Indian', 4, 'books/INDIAN/My Reminiscences by Rabindranath Tagore.pdf', 'images/myreminiscences.jpg', 'It is not possible to surmise when exactly Tagore started writing Jibonsmriti(My Reminiscences). It is generally believed that after the publication of the play Raja (King, 1910), he was going through the first draft of Jibonsmriti. Jibonsmriti, was translated into English by Tagore’s nephew, Surendranath Tagore, though retouched and slightly changed by Rabindranath himself. It was serialised in RamanandaChattopadhyay’s The Modern Review under the title My Reminiscences from January to December, 1916. To thwart the attempt by any foreign publisher to publish it, all the issues of The Modern Review carried the declaration, ‘All Rights Reserved. Copyrighted in the United States of America’. '),
(25, 'THE ORIGIN AND NATURE OF EMOTIONS', '209', 'GEORGE W. CRILE', 'Physiology', 4, 'books/Physiology/The Origin and Nature of the Emotions and Miscellaneous Papers by Crile.pdf', 'images/theoriginandnatureofemotions.jpg', 'The Origin and Nature of Emotions is a classic psychology text by George W. Crile. It would seem that if the striking changes produced by fear and anger and by physical trauma in the master organ of the body-- the brain--were due to WORK, then we should expect to find corresponding histologic changes in other organs of the body as well. We therefore examined every organ and tissue of the bodies of animals which had been subjected to intense fear and anger and to infection and to the action of foreign proteins, some animals being killed immediately; some several hours after the immediate effects of the stimuli had passed; some after seances of strong emotion had been repeated several times during a week or longer.'),
(26, 'The Hindu-Yogi Science of Breath', '1045', 'YOGI RAMACHARAKA', 'Yoga', 5, 'books/Yoga/The Hindu Yogi Science of Breath.pdf', 'images/thehinduyogiscienceofbreath.jpg', 'This book was converted from its physical edition to the digital format by a community of volunteers. You may find it for free on the web. Purchase of the Kindle edition includes wireless delivery.'),
(27, 'A SERIES OF Lessons in Gnani Yoga', '1099', 'YOGI RAMACHARAKA', 'Yoga', 0, 'books/Yoga/A Series of Lessons in Gnani Yoga.pdf', 'images/aseriesoflessonsingnaniyoga.jpg', 'Originally published in 1906. From the title page: \"This book gives the highest Yogi teachings regarding the Absolute and its manifestations.\"'),
(28, 'A SERIES OF LESSONS IN RAJA YOGA', '1099', 'YOGI RAMACHARAKA', 'Yoga', 3, 'books/Yoga/A Series of Lessons in Raja Yoga by William Walker Atkinson.pdf', 'images/aseriesoflessonsinrajayoga.jpg', 'This is a reproduction of a book published before 1923, This book may have occasional imperfections such as missing or blurred pages, poor pictures, errant marks, etc. that were either part of the original artifact, or were introduced by the scanning process. We believe this work is culturally important, and despite the imperfections, have elected to bring it back into print as part of our continuing commitment to the preservation of printed works worldwide. We appreciate your understanding of the imperfections in the preservation process, and hope you enjoy this valuable book. '),
(29, 'An Introduction to Yoga', '259', 'Annie Besant', 'Yoga', 0, 'books/Yoga/An Introduction to Yoga by Annie Besant.pdf', 'images/anintroductiontoyogabyanniebes.jpg', 'An Introduction to Yoga, by Annie Besant, was originally published in 1907 and laterly in 1912. The work is a set of lectures on the topic of Yoga given at the 32nd Anniversary of the Theosophical Society, which was held at Benares in 1907. The lectures are intended to give a solid outline of Yoga, in order to prepare the student to take up, for practical purposes, the Yoga sutras of Patanjali, the chief treatise on Yoga.'),
(30, 'The Doctrine and Practice of Yoga ', '1600', 'A. P. Mukerji', 'Yoga', 0, 'books/Yoga/The Doctrine and Practice of Yoga.pdf', 'images/thedoctrineandpracticeofyoga.jpg', '1922. Including the practices and exercises of concentration, both objective and subjective, and active and passive mentation, an elucidation of Maya, guru worship and the worship of the terrible, also the mystery of will force.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(50) NOT NULL,
  `bookid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`username`, `bookid`) VALUES
('pallavi', 1),
('pallavi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `username` varchar(50) NOT NULL,
  `orderdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bookid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`username`, `orderdate`, `bookid`) VALUES
('prathmesh', '2019-03-22 14:08:34', 11),
('prathmesh', '2019-03-22 15:02:21', 25);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `userreviews` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `bookid`, `userreviews`, `username`) VALUES
(1, 1, 'very good book', 'prathmesh'),
(2, 8, 'awesome book. worth reading', 'prathmesh'),
(3, 14, 'average book. neutral review', 'jatin'),
(4, 17, 'not worth reading', 'pallavi'),
(5, 21, 'boring book', 'prathmesh'),
(6, 1, 'very nice book. I read it twice', 'jatin'),
(7, 1, 'I enjoyed reading this book. I recommend this to everybody.', 'pallavi'),
(8, 3, 'i am in love with this book', 'prathmesh'),
(9, 3, 'average book. well compiled', 'jatin'),
(10, 3, 'not that good. ok ok kind of book', 'pallavi'),
(14, 11, 'Good book.', 'prathmesh'),
(15, 25, 'Outstanding book. Must Read', 'prathmesh');

-- --------------------------------------------------------

--
-- Table structure for table `testscores`
--

CREATE TABLE `testscores` (
  `testdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `testname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testscores`
--

INSERT INTO `testscores` (`testdate`, `username`, `score`, `testname`) VALUES
('2019-03-24 13:06:45', 'prathmesh', 2, 'G.K Test'),
('2019-03-24 13:07:12', 'prathmesh', 4, 'Chemistry Test'),
('2019-03-24 13:07:35', 'prathmesh', 5, 'Physics Test');

-- --------------------------------------------------------

--
-- Table structure for table `userlibrary`
--

CREATE TABLE `userlibrary` (
  `username` varchar(20) NOT NULL,
  `bookid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlibrary`
--

INSERT INTO `userlibrary` (`username`, `bookid`) VALUES
('prathmesh', '1'),
('prathmesh', '2'),
('prathmesh', '16'),
('prathmesh', '24'),
('prathmesh', '28'),
('prathmesh', '6'),
('prathmesh', '17'),
('prathmesh', '26'),
('prathmesh', '27'),
('prathmesh', '11'),
('prathmesh', '25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_group`) VALUES
(1, 'admin', 'prathamesh691997@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(2, 'prathmesh', 'prathamesh691997@gmail.com', '202cb962ac59075b964b07152d234b70', 'customer'),
(3, 'jatin', 'jatin@gmail.com', '202cb962ac59075b964b07152d234b70', 'customer'),
(4, 'pallavi', 'pallavi@gmail.com', '202cb962ac59075b964b07152d234b70', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
