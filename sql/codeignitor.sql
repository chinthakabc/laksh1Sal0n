-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2015 at 11:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeignitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `facial`
--

CREATE TABLE IF NOT EXISTS `facial` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `product` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facial`
--

INSERT INTO `facial` (`id`, `title`, `image_url`, `price`, `product`, `description`) VALUES
(1, 'Facial - Ayurvedic Herbal', 'herbal.jpg', '950.00 rs Onwards', 'Aroma', 'Everyday living brings us face-to-face with a vast variety of dirt and toxins. We need to cleanse them from our skin, and herbal facials are one of the best ways to cleanse the face and promote glowing, healthy skin\r\n \r\nIncrease fairness using herbal face packs and ayurveda treatment. Say no to pimples, acne ,marks, black circles and darkness '),
(2, 'Facial Lightning - Herbal bleaching', 'bleaching.jpg', '950.00 rs Onwards', 'Aroma, Jovees, Biotique, 4ever', 'Our bleach evenly blends the facial hair with your complexion, while the fruit extracts give your skin the natural glow.'),
(3, 'Facial Lightning - Galvanic', 'galvanic.jpg', '1200.00 rs Onwards', 'Aroma, Jovees, Biotique , 4ever', 'An excellent way to revitalize the skin and help the active ingredients of skin products gain deep penetration into your skin is through a Galvanic facial. A Galvanic facial can give you a much deeper penetration of ingredients than manual applications. It also reduces the oiliness of the skin for those prone to acne while helping to clean congestion. This type of facial helps improve the normal functions of the skin by helping to improve the skin’s blood circulation. Products can be absorbed directly through the skin with this facial.'),
(4, 'Facial Lightning - Microderma', 'microderma.jpg', '2000.00 rs Onwards', 'Aroma', 'An innovative approach to peeling with the use of Micro Crystals which is propelled across the skin, thus allowing controlled exfoliation, removal of dead skin cells and scared tissues. It stimulates micro circulation and promotes tissue regeneration. '),
(5, 'Facial Lightning - Gold', 'gold.jpg', '1800.00 rs Onwards', 'Aroma, Jovees, Biotique , 4ever', 'Gold is known to be one of the softest metals, which is readily absorbed by the skin. Thus, gold facial is primarily preferred for reducing fine lines on the face and to prevent ageing. It is a unique treatment, which involves special methods of massage and application. The main ingredients of the facial are gold cream and gold gel. These contain 24-carat gold, Aloe Vera, wheat germ oil and sandalwood. Moreover, it is available for benefiting both dry and oily skin types. '),
(6, 'Facial Lightning Silver', 'silver.jpg', '1800.00 rs Onwards', 'Aroma, Jovees', 'helps impart a youthful texture and extra ordinary glow to the skin.'),
(7, 'Facial Lightning - Pearl', 'pearl.jpg', '1800.00 rs Onwards', 'Aroma, Jovees', 'An intensive balancing treatment that immediately leaves your skin clearer, more luminous and refined. Uses pearl cream and mask.'),
(8, 'Facial Lightning - Chocolate', 'chocolate.jpg', '1500.00 Rs Onwards', 'Aroma', 'It''s a luscious treat for your skin and is suitable for all skin types. This creamy face mask recipe is a delicious skin care temptation that helps exfoliate and rejuvenate skin leaving it radiant, soft, and smooth. Benefit your skin with this super-food gentle facial massage mask that will enrich your skin with anti aging vitamins.');

-- --------------------------------------------------------

--
-- Table structure for table `facial_treatments`
--

CREATE TABLE IF NOT EXISTS `facial_treatments` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `product` varchar(255) NOT NULL DEFAULT 'N/A',
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facial_treatments`
--

INSERT INTO `facial_treatments` (`id`, `title`, `image_url`, `price`, `product`, `description`) VALUES
(1, 'High Frequency', 'high_frequency.jpg', '1000.00 Rs Onwards', 'Aroma', 'High frequency has been shown to be an effective treatment for acne, enlarged pores, fine lines, wrinkles and sagging skin, puffy eyes, dark eye circles,'),
(2, 'Ultrasonic', 'ultrasonic.jpg', '1000.00 Rs Onwards', 'Aroma', 'The Ultrasonic Facial treatment is a gentle, non-invasive treatment that is safe and suitable for all skin types, from Acne and Mature skin. This treatment is literally “color blind” and safe to all ethnic blends of skin. Even the most sensitive skin will benefit from this treatment'),
(3, 'Warts Remover', 'warts.jpg', '1000.00 Rs Onwards', 'N/A', 'Get rid of unwanted warts that hinder you to have that flawless-looking skin on your face, neck, chest, with an Unlimited Warts Removal Treatment.\r\n \r\nThe procedure is safe and effective, painless, sterile.'),
(4, 'Microderma - Crystal', 'crystal.jpg', '3500.00 Rs Onwards', 'Aroma', 'N/A'),
(5, 'Microderma - Diamond', 'diamond.jpg', '1500.00 Rs Onwards', 'Aroma', 'An innovative approach to peeling with the use of Micro Crystals which is propelled across the skin, thus allowing controlled exfoliation, removal of dead skin cells and scared tissues. It stimulates micro circulation and promotes tissue regeneration.\r\n \r\nGives the skin an overall fresh, healthy-looking glow. treatment reduce or remove fine wrinkles and unwanted pigmentation.\r\n \r\nMicrodermabrasion is effective in reducing fine lines, age spots and acne scars. It stimulates the production of skin cells and collagen. It has proven to be a very popular nonsurgical cosmetic procedure'),
(6, 'Black heads / White heads', 'black_heads.jpg', '600.00 Rs Onwards', 'Aroma, 4ever', 'Blackheads and whiteheads can affect you no matter your age, leaving you feeling self-conscious and lacking the clear skin you desire. However, many treatments are available for clearing up these mild forms of acne so you can soon put your best face forward.'),
(7, 'Pigmentation', 'pigmentation.jpg', '1000.00 Rs Onwards', 'Aroma, 4ever', 'If you are one who is experiencing brownish skin discolorations or dark, splotchy patches at your skin, you may be suffering from what is a common complaint known as skin pigmentation. There are many factors that can instigate skin pigmentation to occur. then Lakshi Salon will be the right place for you, your satisfaction is Guaranteed! With lakshi salon pigmentation removal procedures that can help you achieve vibrant, younger-looking skin in just a few short treatments. '),
(8, 'Pimples', 'pimples.jpg', '1000.00 Rs Onwards', 'Aroma, 4ever', 'There are some lucky people who have clear skin and never seem to suffer a single spot. But for those people, who have it and are currently battling with pimples, don’t fret, there will always be a cure and yes – we have beauty treatments for face pimples.'),
(9, 'Scars', 'scars.jpg', '1000.00 Rs Onwards', 'Aroma, 4ever', 'The good news for people who want to get rid of their acne scars, or at least reduce the appearance of them, is that there are tons of treatments out there for you.'),
(10, 'Wrinkles', 'wrincles.jpg', '1000.00 Rs Onwards', 'Aroma, 4ever', 'Remove Wrinkles: As we get older wrinkles form in our skin. This happens to everyone and is a great cause of concern to many people. Wrinkles in the skin are one of the main reasons a person looks older compared to someone who is younger. we have beauty treatments for face wrinkles.'),
(11, 'Eye Treatments', 'eye_treatment.jpg', '350.00 Rs Onwards', 'Aroma', 'We all want to look good and feel good every day. Unfortunately, the lines, shadows, and bags below our eyes make this almost impossible for many. While it''s true that they do not hurt you physically, your self-esteem can suffer big time because of them. Eliminating the problems below your eyes that you can see does not have to be an overly complicated matter. ');

-- --------------------------------------------------------

--
-- Table structure for table `haircuts`
--

CREATE TABLE IF NOT EXISTS `haircuts` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `price` varchar(255) NOT NULL DEFAULT 'N/A',
  `product` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haircuts`
--

INSERT INTO `haircuts` (`id`, `title`, `image_url`, `price`, `product`, `description`) VALUES
(1, 'Layer', 'haircuts.jpg', '100.00 Rs Onwards', 'Design, Procedure', 'Our hair stylists are trained in the latest cutting techniques. They continuously train so that we provide a high standard of haircuts. Many different methods and styles tailored to your needs. Layer short /long, bob, feather, school, donkey, u/v/ trim, baby and many more…. Without a doubt, hair is the most important changeable feature we have.'),
(2, 'Bob', 'haircuts.jpg', '100.00 Rs Onwards', 'Design, Procedure', 'Our hair stylists are trained in the latest cutting techniques. They continuously train so that we provide a high standard of haircuts. Many different methods and styles tailored to your needs. Layer short /long, bob, feather, school, donkey, u/v/ trim, baby and many more…. Without a doubt, hair is the most important changeable feature we have.'),
(3, 'Feather', 'haircuts.jpg', '100.00 Rs Onwards', 'Design, Procedure', 'Our hair stylists are trained in the latest cutting techniques. They continuously train so that we provide a high standard of haircuts. Many different methods and styles tailored to your needs. Layer short /long, bob, feather, school, donkey, u/v/ trim, baby and many more…. Without a doubt, hair is the most important changeable feature we have.'),
(4, 'School', 'haircuts.jpg', '100.00 Rs Onwards', 'Design, Procedure', 'Our hair stylists are trained in the latest cutting techniques. They continuously train so that we provide a high standard of haircuts. Many different methods and styles tailored to your needs. Layer short /long, bob, feather, school, donkey, u/v/ trim, baby and many more…. Without a doubt, hair is the most important changeable feature we have.'),
(5, 'Donkey', 'haircuts.jpg', '100.00 Rs Onwards', 'Design, Procedure', 'Our hair stylists are trained in the latest cutting techniques. They continuously train so that we provide a high standard of haircuts. Many different methods and styles tailored to your needs. Layer short /long, bob, feather, school, donkey, u/v/ trim, baby and many more…. Without a doubt, hair is the most important changeable feature we have.'),
(6, 'UV Trim', 'haircuts.jpg', '100.00 Rs Onwards', 'Design, Procedure', 'Our hair stylists are trained in the latest cutting techniques. They continuously train so that we provide a high standard of haircuts. Many different methods and styles tailored to your needs. Layer short /long, bob, feather, school, donkey, u/v/ trim, baby and many more…. Without a doubt, hair is the most important changeable feature we have.'),
(7, 'Baby', 'haircuts.jpg', '100.00 Rs Onwards', 'Design, Procedure', 'Our hair stylists are trained in the latest cutting techniques. They continuously train so that we provide a high standard of haircuts. Many different methods and styles tailored to your needs. Layer short /long, bob, feather, school, donkey, u/v/ trim, baby and many more…. Without a doubt, hair is the most important changeable feature we have.');

-- --------------------------------------------------------

--
-- Table structure for table `hair_removal`
--

CREATE TABLE IF NOT EXISTS `hair_removal` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `product` varchar(255) NOT NULL DEFAULT 'N/A',
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hair_removal`
--

INSERT INTO `hair_removal` (`id`, `title`, `image_url`, `price`, `product`, `description`) VALUES
(1, 'Threading', 'threading.jpg', '350.00 Rs Onwards', 'N/A', 'We invite you to come and visit any of our salon and speak with one of our professional threading artists to find out what products would best suit your needs.'),
(2, 'Waxing', 'waxing.jpg', '750.00 Rs Onwards', 'N/A', 'All of the basic waxing treatments along with a selection of specialist waxing treatments are available at the salon.'),
(3, 'Eye Brow Shaping', 'eye_brow.jpg', '100.00 Rs Onwards', 'N/A', 'Whether they are overgrown or over plucked, lakshi salon can sculpt your brows into perfect shape for your face.');

-- --------------------------------------------------------

--
-- Table structure for table `hair_styles`
--

CREATE TABLE IF NOT EXISTS `hair_styles` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `product` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hair_styles`
--

INSERT INTO `hair_styles` (`id`, `title`, `image_url`, `price`, `product`, `description`) VALUES
(1, 'Re Bonding', 'rebonding.jpg', '3000.00 Rs Onwards', 'Dreamron, Keune', 'Need permanent straight hair, rely on our hair rebonding services. At lakshi salon, rebonding is our super specialty that gives you every reason to give your hair, feel and texture that you always craved for. Rebonding is a chemical hair treatment that makes your hair straight, sleek and shiny. '),
(2, 'Straightning', 'relaxing.jpg', '3000.00 Rs Onwards', 'Dreamron, Keune', 'Our certified specialists are highly skilled and trained. Our specialists do the most hair straightening treatments. The hair straightening result is like having naturally straight hair - people with naturally straight hair sometimes need to do a little work to get that dead straight look. If you sleep on your hair you may need to straighten a little with irons or style a little to get that poker straight look. Some customers have hair that after straightening is just ''wash & go'' but some may need a little work to achieve that look (but certainly a lot less than before straightening). There are many types of hair, many conditions of hair and many previously applied treatments or colours which can affect the results. We have extensive experience and therefore know how best to adjust the straightening treatment to achieve best results for your hair type.'),
(3, 'Perm', 'perm.jpg', '3000.00 Rs Onwards', 'Dreamron, Keune', 'Any perm can give you curls, but successful restructuring of the hair necessitates the expertise of a professional hairdresser. We at Lakshi Salon have the knowledge and experience in determining exactly what technique is required to create the look designed just for you.'),
(4, 'Relaxing', 'relaxing.jpg', '2500.00 Rs Onwards', 'Dreamron, Keune', 'Relaxing are used for hair consumers who want to retain their curls and/or waves but reduce uncontrollable frizz and only slightly loosen their existing curl or wave pattern.'),
(5, 'Coloring', 'colouring.jpg', '850.00 Rs Onwards', 'Dreamron, Keune', 'We can offer you the beautiful customized hair color you see on runways. Every color brand conditions and protects during your salon service so you''re assured shiny, healthy-looking hair as well as great color results. our colorist can mix and create the perfect color to exceed your expectations.'),
(6, 'Temporary color / Curl / Straight', 'temp.jpg', '300.00 Rs Onwards', 'Dreamron, Keune, Lorel', 'Temporary color/ curl / straight are the simplest way to try out that new look you’ve been thinking about!'),
(7, 'Party', 'party.jpg', '250.00 Rs Onwards', 'N/A', 'Party hairstyles should be fun and elegant for a special occasion. If you''re looking for a hot new ''do for an upcoming bash, Visit our place we’re sure you''ll find something you like!'),
(8, 'Fantasy', 'fantasy.jpg', '2500.00 Rs Onwards', 'N/A', 'Fantasy and Runway hair styles for Modeling and fashion shows and those seeking the ultimate attention getters.');

-- --------------------------------------------------------

--
-- Table structure for table `hair_treatment`
--

CREATE TABLE IF NOT EXISTS `hair_treatment` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `product` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hair_treatment`
--

INSERT INTO `hair_treatment` (`id`, `title`, `image_url`, `price`, `product`, `description`) VALUES
(1, 'Henna', 'hair_treatments.jpg', '850.00 Rs Onwards', 'Keune, Janet, Jojoba', 'Henna treatment remains the number one option when it comes to natural hair dyeing. This method has been used for thousands of years. Most people prefer this treatment as it is all-natural and won’t pose any harm to their hair, health or the environment. For centuries henna has been a herbal treatment and is a herbal and natural coloring agent which is a great alternative to commercial hair dyes. There are many benefits of henna for hair coloring as well as having many curative benefits.'),
(2, 'Oil Massage', 'hair_treatments.jpg', '750.00 Rs Onwards', 'Aroma', 'The skull is massaged with oils. This helps hair to grow and also helps to darken the hair if necessary. It also helps hair to grow if there is a loss of hair. This massage also helps all skulls problems'),
(3, 'High Protein', 'hair_treatments.jpg', '950.00 Rs Onwards', 'Dreamron, Keune', 'The main aim of protein treatments for hair is to return the lost moisture and protein back to the hair. Naturally, you get healthy, silky, soft hair after the protein treatment for hair.'),
(4, 'Anti Dandruff', 'hair_treatments.jpg', '1000.00 Rs Onwards', 'Aroma', 'It eliminates dandruff, scalp infection, and relieves flaking and itching. It also helps to fight chronic dandruff without damaging your hair.'),
(5, 'Massage', 'hair_treatments.jpg', '750.00 Rs Onwards', 'Aroma', 'Massaging the scalp and hair with warm oil, preferably infused with hair-friendly herbs, is the best way to nourish the scalp and hair topically. Not only does the massage work wonders for your hair, but it also relaxes the mind and nervous system. ');

-- --------------------------------------------------------

--
-- Table structure for table `manicure`
--

CREATE TABLE IF NOT EXISTS `manicure` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `product` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manicure`
--

INSERT INTO `manicure` (`id`, `title`, `image_url`, `price`, `product`, `description`) VALUES
(1, 'Hand Massage', 'hand_massage.jpg', '850.00 Rs Onwards', 'Aroma, 4ever', 'Performing a hand massage regularly will help strengthen your nails and skin, as well as giving your mind great relaxation'),
(2, 'Hand Treatments', 'hand_treatment.jpg', '950.00 Rs Onwards', 'Aroma, 4ever', 'Treat your hands to a “facial” to keep them looking as young as you feel.'),
(3, 'Nail Art', 'nail_art.jpg', '200.00 Rs Onwards', 'Aroma, 4ever', 'Today, nail art designs have become a part of fashion and a very popular practice. Every woman wants a long, healthy, shiny and designer nails. Long nails enhance the beauty of the hands and the best nail work highlight the overall look of the hands. with your dress and jewelry. Many types of nail art designs presented can be done at home but for nail health and to ensure the quality of work is better to go to a professional nail salon.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facial`
--
ALTER TABLE `facial`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facial_treatments`
--
ALTER TABLE `facial_treatments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haircuts`
--
ALTER TABLE `haircuts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hair_removal`
--
ALTER TABLE `hair_removal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hair_styles`
--
ALTER TABLE `hair_styles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hair_treatment`
--
ALTER TABLE `hair_treatment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manicure`
--
ALTER TABLE `manicure`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facial`
--
ALTER TABLE `facial`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `facial_treatments`
--
ALTER TABLE `facial_treatments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `haircuts`
--
ALTER TABLE `haircuts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hair_removal`
--
ALTER TABLE `hair_removal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hair_styles`
--
ALTER TABLE `hair_styles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hair_treatment`
--
ALTER TABLE `hair_treatment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `manicure`
--
ALTER TABLE `manicure`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
