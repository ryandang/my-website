--
-- MySQL 5.1.70
-- Thu, 19 Sep 2013 18:34:30 +0000
--

CREATE TABLE `projects` (
   `project_id` int(11) not null auto_increment,
   `project_name` varchar(200) not null,
   `project_language` varchar(300) not null,
   `project_thumbnail` varchar(50) not null,
   `project_slides` varchar(300) not null,
   `description` varchar(2000) not null,
   PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;

INSERT INTO `projects` (`project_id`, `project_name`, `project_language`, `project_thumbnail`, `project_slides`, `description`) VALUES 
('1', 'Traffic Duco', '[\"php\",\"mysql\",\"HTML\",\"CSS\",\"javascript\",\"jquery\",\"photoshop\"]', 'trafficduco/thumbnail.jpg', 'trafficduco', '<ul> <li>Created the company external website using WordPress to make it more appeal to new users.</li> <li>Improved the lay-out and user interface for the company internal website by using AJAX, jQuery, JavaScript, and CSS to make it easy and less time consuming for the users.</li> <li>Fixed various bugs related to the system using PHP, MySQL, and AJAX.</li> <li>Suggested new ideas to help improve the system and the Traffic Duco app performance.</li> <li>Improved the existing search system to provide users with more search options.</li> <li>Implemented various new features and functionality for the internal website which provide users with more powerful tools.</li> <li>Modified the database to help reduce search time.</li> </ul>'),
('2', 'The Green Citizen', '[\"php\",\"HTML\",\"CSS\"]', 'GreenCitizen/thumbnail.jpg', 'GreenCitizen', 'to be added'),
('3', 'Sene Tech', '[\"php\",\"mysql\",\"HTML\",\"CSS\",\"javascript\",\"jquery\",\"photoshop\"]', 'SeneTech/thumbnail.jpg', 'SeneTech', 'Assist in SeneTech Project: SeneTech is an online learning resource that provides students with the tools to give them practical experiences. Processing was used to create the animated user&apos;s interface. The website was developed by using Processing, PHP, MySQL, HTML, CSS, jQuery, and JavaScript. <ul>  <li>Created animation for two Vet Tech story boards. </li>  <li>Helped with the design and lay-out of the website.</li>  <li>Created all check your understanding quizzes.</li> </ul>'),
('4', 'Aivation', '[\"php\",\"mysql\",\"HTML\",\"CSS\",\"javascript\",\"jquery\",\"photoshop\"]', 'aviation/thumbnail.jpg', 'aviation', 'Aviation is an online learning module to help pilot instructors from colleges across Ontario to standardize their way of grading students. The project was team up between Air Canada and Seneca College. The website was developed by using PHP, MySQL, HTML, CSS, jQuery, and JavaScript to give four different types of user different functionalities and features. <br/><br/>');