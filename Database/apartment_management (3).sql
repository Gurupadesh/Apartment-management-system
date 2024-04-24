-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 06:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apartment_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `Employee_id` int(10) NOT NULL,
  `Employee_name` varchar(25) NOT NULL,
  `Employee_address` varchar(25) NOT NULL,
  `Employee_emailid` varchar(100) NOT NULL,
  `Employee_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`Employee_id`, `Employee_name`, `Employee_address`, `Employee_emailid`, `Employee_type`) VALUES
(20, 'Suresh', 'Bellary', 'sureshk@gmail.com', 'Security'),
(21, 'Manish', 'Chitradurga', 'manishdb1@gmail.com', 'Security'),
(22, 'William', 'Raichur', 'william32@gmail.com', 'Cleaner'),
(23, 'Kamal', 'Kolar', 'kamalsa@gmail.com', 'Sweeper'),
(24, 'Salim', 'Mysuru', 'salim07@gmail.com', 'Security');

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `Event_id` int(10) NOT NULL,
  `Event_name` varchar(50) NOT NULL,
  `Event_description` varchar(200) NOT NULL,
  `Event_date` date NOT NULL,
  `Event_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`Event_id`, `Event_name`, `Event_description`, `Event_date`, `Event_photo`) VALUES
(27, 'Ganesh chaturthi', 'Ganesh Chaturthi in 2022 - The festival of Ganesh Chaturthi is primarily observed on the fourth day after the new moon in the month of Bhadrapada', '2022-08-31', 'ganesh.jfif'),
(28, 'Independence day', 'Independence Day 2022: India will be celebrating 75 years of Independence on August 15, 2022.', '2022-08-15', 'india.jfif'),
(30, 'International literacy day', 'International Literacy Day is an international observance, celebrated each year on 8 September.', '2022-09-08', 'later.jfif'),
(31, 'Gandhi jayanti', 'Gandhi Jayanti is an event celebrated in India to mark the birthday of Mahatma Gandhi. ', '2022-10-02', 'gandhi.jfif'),
(32, 'Committee meeting', 'For the month of October', '2022-10-09', 'meeting.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `Expenditure_id` int(10) NOT NULL,
  `Expenditure_title` varchar(25) NOT NULL,
  `Expenditure_description` varchar(100) NOT NULL,
  `Expenditure_amount` int(8) NOT NULL,
  `Expenditure_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`Expenditure_id`, `Expenditure_title`, `Expenditure_description`, `Expenditure_amount`, `Expenditure_date`) VALUES
(9, 'Electricity Bill', 'For the Month of JULY', 5500, '2022-07-05'),
(10, 'Water Bill', 'For the Month of JULY', 4000, '2022-07-05'),
(11, 'Lift Maintainence', 'For the Month of AUGUST', 2000, '2022-08-10'),
(12, 'Employees Salary', 'For the Month of JULY', 85000, '2022-08-07'),
(13, 'Sports Equipments', 'Purchase of Sports Equipment', 4000, '2022-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `Facility_id` int(10) NOT NULL,
  `Facility_name` varchar(25) NOT NULL,
  `Facility_description` varchar(100) NOT NULL,
  `Facility_charges` int(10) NOT NULL,
  `Facility_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`Facility_id`, `Facility_name`, `Facility_description`, `Facility_charges`, `Facility_photo`) VALUES
(3, 'Swimming Pool', 'For Fun as well as Fitness', 500, 'default-swimming-pools-9.jpg'),
(4, 'Gym', 'Contain Equipment for people to get fit', 1000, 'gym.jpg'),
(5, 'Sports Room', 'Various Indoor Games', 400, 'sports.jfif'),
(6, 'Playing Area', 'Fun for Children', 300, 'play.jpg'),
(7, 'Party Hall', 'For Meetings or for Functions', 5000, 'party.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `flat_details`
--

CREATE TABLE `flat_details` (
  `Flat_detail_id` int(10) NOT NULL,
  `Flat_number` int(10) NOT NULL,
  `Flat_description` varchar(100) NOT NULL,
  `flat_photo` varchar(200) NOT NULL,
  `flat_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flat_details`
--

INSERT INTO `flat_details` (`Flat_detail_id`, `Flat_number`, `Flat_description`, `flat_photo`, `flat_type`) VALUES
(8, 1, '2BHK,1st Floor,West Facing.', 'OIP (7).jfif', 'Well Furnished'),
(9, 2, '3BHK,1st Floor,East Facing.', 'OIP (5).jfif', 'Semi Furnished'),
(10, 3, '3BHK,1st Floor,West Facing.', 'OIP (1).jfif', 'Unfurnished'),
(11, 4, '3BHK,1st Floor,East Facing', 'OIP (7).jfif', 'Well Furnished'),
(15, 5, ' 3BHK,1st Floor,East Facing', 'OIP (1).jfif', 'Unfurnised'),
(16, 6, ' 2BHK,1st Floor,West Facing.', 'OIP (7).jfif', 'Well Furnished');

-- --------------------------------------------------------

--
-- Table structure for table `flat_owner_details`
--

CREATE TABLE `flat_owner_details` (
  `Flat_owner_id` int(10) NOT NULL,
  `Flat_owner_name` varchar(25) NOT NULL,
  `Flat_id` int(10) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `Aadhar_no` varchar(12) NOT NULL,
  `owner_occupation` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flat_owner_details`
--

INSERT INTO `flat_owner_details` (`Flat_owner_id`, `Flat_owner_name`, `Flat_id`, `Address`, `contact_no`, `email_id`, `Aadhar_no`, `owner_occupation`, `DOB`, `Gender`) VALUES
(1, 'Santosh K', 4, 'Dharwad', 9886631818, 'san@gmail.com', '123456', 'Business', '2022-07-20', 'm'),
(3, 'Guru', 8, 'Gadag', 7411252231, 'gurupadeshk123@gmail.com', '785443755621', 'Analyst', '1994-08-24', 'm'),
(4, 'Bharat', 9, 'Chitradurga', 8431104501, 'bhartgouda810@gmail.com', '986554327984', 'Associate', '1999-08-11', 'm'),
(5, 'Pramod', 10, 'Mysore', 9343133533, 'pramodreddy34@gmail.com', '987375327453', 'Teacher', '1997-08-14', 'm'),
(6, 'Nagaraj', 11, 'Mangalore', 6302358885, 'nagareddya65@gmail.com', '487587668764', 'Teacher', '1997-02-11', 'm'),
(7, 'Pramod', 15, 'Tiptur', 6302358885, 'nagipravee3@gmail.com', '854275318754', 'Advocate', '1994-03-15', 'm'),
(8, 'Ankit', 16, 'Dharwad', 9449458048, 'ankitkulkarni186@gmail.com', '767854321254', 'Lead', '1995-08-22', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Login_id` int(10) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Login_type` text NOT NULL,
  `Security_question` varchar(25) NOT NULL,
  `Security_answer` varchar(25) NOT NULL,
  `Security_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Login_id`, `Username`, `Password`, `Login_type`, `Security_question`, `Security_answer`, `Security_status`) VALUES
(1, 'admin', '456456', 'admin', 'who are you', 'admin', 'active'),
(5, 'gurupadeshk123@gmail.com', '7411252231', 'owner', 'Enter Your Email ID', 'gurupadeshk123@gmail.com', 'Active'),
(6, 'bhartgouda810@gmail.com', '8431104501', 'owner', 'Enter Your Email ID', 'bhartgouda810@gmail.com', 'Active'),
(7, 'pramodreddy34@gmail.com', '9343133533', 'owner', 'Enter Your Email ID', 'pramodreddy34@gmail.com', 'Active'),
(8, 'nagareddya65@gmail.com', '6302358885', 'owner', 'Enter Your Email ID', 'nagareddya65@gmail.com', 'Active'),
(9, 'nagipravee3@gmail.com', '6302358885', 'owner', 'Enter Your Email ID', 'nagipravee3@gmail.com', 'Active'),
(10, 'ankitkulkarni186@gmail.com', '9449458048', 'owner', 'Enter Your Email ID', 'ankitkulkarni186@gmail.co', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `owner_facilities_charges`
--

CREATE TABLE `owner_facilities_charges` (
  `Owner_facilities_charges_id` int(10) NOT NULL,
  `Flat_owner_id` int(10) NOT NULL,
  `Charges_amount` int(10) NOT NULL,
  `Month` varchar(15) NOT NULL,
  `Year` int(5) NOT NULL,
  `M_Date` date NOT NULL,
  `Status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_facilities_charges`
--

INSERT INTO `owner_facilities_charges` (`Owner_facilities_charges_id`, `Flat_owner_id`, `Charges_amount`, `Month`, `Year`, `M_Date`, `Status`) VALUES
(3, 3, 1900, '8', 2022, '2022-08-07', 'Pending'),
(4, 4, 1400, '8', 2022, '2022-08-07', 'Pending'),
(5, 5, 1500, '8', 2022, '2022-08-07', 'Pending'),
(6, 6, 1900, '8', 2022, '2022-08-07', 'Pending'),
(7, 7, 2200, '8', 2022, '2022-08-07', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `owner_vehicle_details`
--

CREATE TABLE `owner_vehicle_details` (
  `Owner_vehicle_id` int(10) NOT NULL,
  `Flat_owner_id` int(10) NOT NULL,
  `Vehicle_no` varchar(15) NOT NULL,
  `Vehicle_type` varchar(20) NOT NULL,
  `allot_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_vehicle_details`
--

INSERT INTO `owner_vehicle_details` (`Owner_vehicle_id`, `Flat_owner_id`, `Vehicle_no`, `Vehicle_type`, `allot_status`) VALUES
(3, 3, 'KA 25 AK 2115', 'Two Wheeler', 'Alloted'),
(4, 3, 'KA 25 EH 5632', 'Four Wheeler', 'Allot Pending'),
(5, 4, 'KA 22 DB 8532', 'Two Wheeler', 'Alloted'),
(6, 5, 'KA 31 EF 7654', 'Four Wheeler', 'Allot Pending'),
(7, 6, 'KA 41 NB 6532', 'Four Wheeler', 'Alloted'),
(8, 7, 'KA 63 M 7682', 'Two Wheeler', 'Allot Pending');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_slot_details`
--

CREATE TABLE `vehicle_slot_details` (
  `Vehicle_slot_id` int(10) NOT NULL,
  `Owner_vehicle_id` int(10) NOT NULL,
  `Slot_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_slot_details`
--

INSERT INTO `vehicle_slot_details` (`Vehicle_slot_id`, `Owner_vehicle_id`, `Slot_no`) VALUES
(1, 2, 4),
(2, 3, 1),
(3, 5, 2),
(4, 7, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`Expenditure_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`Facility_id`);

--
-- Indexes for table `flat_details`
--
ALTER TABLE `flat_details`
  ADD PRIMARY KEY (`Flat_detail_id`);

--
-- Indexes for table `flat_owner_details`
--
ALTER TABLE `flat_owner_details`
  ADD PRIMARY KEY (`Flat_owner_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Login_id`);

--
-- Indexes for table `owner_facilities_charges`
--
ALTER TABLE `owner_facilities_charges`
  ADD PRIMARY KEY (`Owner_facilities_charges_id`);

--
-- Indexes for table `owner_vehicle_details`
--
ALTER TABLE `owner_vehicle_details`
  ADD PRIMARY KEY (`Owner_vehicle_id`);

--
-- Indexes for table `vehicle_slot_details`
--
ALTER TABLE `vehicle_slot_details`
  ADD PRIMARY KEY (`Vehicle_slot_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `Employee_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `Event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `Expenditure_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `Facility_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `flat_details`
--
ALTER TABLE `flat_details`
  MODIFY `Flat_detail_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `flat_owner_details`
--
ALTER TABLE `flat_owner_details`
  MODIFY `Flat_owner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `owner_facilities_charges`
--
ALTER TABLE `owner_facilities_charges`
  MODIFY `Owner_facilities_charges_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `owner_vehicle_details`
--
ALTER TABLE `owner_vehicle_details`
  MODIFY `Owner_vehicle_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vehicle_slot_details`
--
ALTER TABLE `vehicle_slot_details`
  MODIFY `Vehicle_slot_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
