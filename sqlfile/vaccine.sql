


CREATE DEFINER=`root`@`localhost` PROCEDURE `hospital` ()  SELECT * FROM hospital



-- --------------------------------------------------------






INSERT INTO `dash` (`dash_id`, `patient_name`, `vaccine`, `time`) VALUES
(1, 'farhan', 'ok', '2023-01-17 13:00:51'),
(2, 'hfd', 'hgfs', '2023-01-17 13:05:32');

--creating view--
CREATE view farhan as select hospital.hospital_name,hospital.hospital_address,vaccine.vac_name join vaccine on 
hospital.hospital_id = vaccine.hospital_id join vacc_storage_hospital on vacc_storage_hospital.hospital_id = hospital.hospital_id;
-- Stand-in structure for view `farhan`

CREATE TABLE `farhan` (
`n_of_units` int(255)
,`vac_name` varchar(255)
,`hospital_name` varchar(255)
,`hospital_address` varchar(255)
);


-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(255) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `hospital_address` varchar(255) NOT NULL
) \

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `hospital_address`) VALUES
(1, 'THQ talagang', 'dhq'),
(2, 'skdvlisadb', 'near mundial cho'),
(3, 'shifa', 'rawalpindi');


-- Table structure for table `hosp_vav`

CREATE TABLE `hosp_vav` (
  `hosp_vac` int(255) NOT NULL,
  `hospital_id` int(255) NOT NULL,
  `center_id` int(255) NOT NULL
) 

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_cnic` bigint(255) NOT NULL,
  `vaccine` varchar(255) NOT NULL,
  `dateregister` date NOT NULL,
  `Firstdosedate` date NOT NULL,
  `secdosedate` date NOT NULL,
  `boosterdate` date NOT NULL,
  `staf_id` int(255) NOT NULL
) 

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `patient_cnic`, `vaccine`, `dateregister`, `Firstdosedate`, `secdosedate`, `boosterdate`, `staf_id`) VALUES
(1, 'abdullah', 34523754235, 'fiuqow', '2023-02-02', '2023-01-26', '2023-01-27', '2023-02-03', 1),
(2, 'farhan', 23134123, 'ok', '2023-01-14', '2023-01-20', '2023-01-14', '2023-01-12', 1),
(3, 'hfd', 436857, 'hgfs', '2023-01-27', '2023-01-13', '2023-01-21', '2023-01-21', 1);

--
-- Triggers `patient`
--
CREATE TABLE `dash` (
  `dash_id` int(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `vaccine` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) 
CREATE TRIGGER `insertdash` 
AFTER INSERT ON `patient` 
FOR EACH ROW 

INSERT INTO dash 
VALUES (null, NEW.patient_name,NEW.vaccine,NOW())


-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `staf_id` int(255) NOT NULL,
  `staf_name` varchar(255) NOT NULL,
  `staf_adress` varchar(255) NOT NULL,
  `staf_phone` int(255) NOT NULL,
  `hospital_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`staf_id`, `staf_name`, `staf_adress`, `staf_phone`, `hospital_id`) VALUES
(1, 'mjha', 'chk', 586587, 1),
(2, 'kamran', 'pinfi', 6567, 3);

-- --------------------------------------------------------



-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `vaccine_id` int(11) NOT NULL,
  `vac_name` varchar(255) NOT NULL,
  `vac_company` varchar(255) NOT NULL,
  `side_effect` varchar(255) NOT NULL,
  `suitableforage` int(255) NOT NULL,
  `mfg_date` date NOT NULL,
  `exp_date` date NOT NULL
) 

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`vaccine_id`, `vac_name`, `vac_company`, `side_effect`, `suitableforage`, `mfg_date`, `exp_date`) VALUES
(1, 'sad', 'sdguf', 'sdgfu', 15, '2023-01-03', '2023-01-04'),
(2, 'skdvlisadb', 'sbvlksahfdviufsad', 'jskvsfdilu', 12, '2023-01-11', '2023-01-27'),
(5, 'ss', 'f', 'fff', 0, '2023-01-25', '2023-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_inventory`
--

CREATE TABLE `vaccine_inventory` (
  `inventory_id` int(255) NOT NULL,
  `hospital_id` int(255) NOT NULL,
  `vaccine_id` int(255) NOT NULL
) 

-- --------------------------------------------------------

--
-- Table structure for table `vacc_center`
--

CREATE TABLE `vacc_center` (
  `center_id` int(255) NOT NULL,
  `center_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` bigint(255) NOT NULL
) 

--
-- Dumping data for table `vacc_center`
--

INSERT INTO `vacc_center` (`center_id`, `center_name`, `address`, `phone`) VALUES
(1, 'mp hall', 'uettaxila', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `vacc_storage_hospital`
--

CREATE TABLE `vacc_storage_hospital` (
  `storage_id` int(11) NOT NULL,
  `date_stored` date NOT NULL,
  `date_removal` date NOT NULL,
  `n_of_units` int(255) NOT NULL,
  `temprature` int(255) NOT NULL,
  `hospital_id` int(255) NOT NULL,
  `vaccine_id` int(255) NOT NULL
) 

--
-- Dumping data for table `vacc_storage_hospital`
--

INSERT INTO `vacc_storage_hospital` (`storage_id`, `date_stored`, `date_removal`, `n_of_units`, `temprature`, `hospital_id`, `vaccine_id`) VALUES
(1, '2023-01-28', '2023-01-19', 10, 11, 2, 2),
(2, '2023-01-10', '2023-01-18', 9, 37, 3, 5),
(3, '2023-01-14', '2023-01-26', 12, 35, 1, 1),
(4, '2023-01-09', '2023-01-13', 9, 576, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vac_storage_center`
--

CREATE TABLE `vac_storage_center` (
  `storage_id` int(11) NOT NULL,
  `date_stored` date NOT NULL,
  `date_removal` date NOT NULL,
  `n_of_units` int(255) NOT NULL,
  `temprature` int(255) NOT NULL,
  `vaccine_id` int(255) NOT NULL,
  `center_id` int(255) NOT NULL
) 

--
-- Dumping data for table `vac_storage_center`
--

INSERT INTO `vac_storage_center` (`storage_id`, `date_stored`, `date_removal`, `n_of_units`, `temprature`, `vaccine_id`, `center_id`) VALUES
(1, '2023-01-06', '2023-01-18', 85, 10, 2, 1);

-- --------------------------------------------------------





-- Indexes for table `dash`
--
ALTER TABLE `dash`
  ADD PRIMARY KEY (`dash_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `hosp_vav`
--
ALTER TABLE `hosp_vav`
  ADD PRIMARY KEY (`hosp_vac`),
  ADD KEY `foreign key` (`center_id`),
  ADD KEY `foriegn` (`hospital_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `farhan` (`staf_id`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`staf_id`),
  ADD KEY `uc_foriegn` (`hospital_id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`vaccine_id`);

--
-- Indexes for table `vaccine_inventory`
--
ALTER TABLE `vaccine_inventory`
  ADD KEY `forkey` (`hospital_id`),
  ADD KEY `isb` (`vaccine_id`);

--
-- Indexes for table `vacc_center`
--
ALTER TABLE `vacc_center`
  ADD PRIMARY KEY (`center_id`);

--
-- Indexes for table `vacc_storage_hospital`
--
ALTER TABLE `vacc_storage_hospital`
  ADD PRIMARY KEY (`storage_id`),
  ADD KEY `fokey` (`hospital_id`),
  ADD KEY `lahore` (`vaccine_id`);

--
-- Indexes for table `vac_storage_center`
--
ALTER TABLE `vac_storage_center`
  ADD PRIMARY KEY (`storage_id`),
  ADD KEY `tlg` (`vaccine_id`),
  ADD KEY `chk` (`center_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dash`
--
ALTER TABLE `dash`
  MODIFY `dash_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `staf_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `vaccine_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vacc_center`
--
ALTER TABLE `vacc_center`
  MODIFY `center_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vacc_storage_hospital`
--
ALTER TABLE `vacc_storage_hospital`
  MODIFY `storage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vac_storage_center`
--
ALTER TABLE `vac_storage_center`
  MODIFY `storage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



--
-- Constraints for table `hosp_vav`
--
ALTER TABLE `hosp_vav`
  ADD CONSTRAINT `foriegn` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `farhan` FOREIGN KEY (`staf_id`) REFERENCES `staf` (`staf_id`);

--
-- Constraints for table `staf`
--
ALTER TABLE `staf`
  ADD CONSTRAINT `uc_foriegn` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);

--
-- Constraints for table `vaccine_inventory`
--
ALTER TABLE `vaccine_inventory`
  ADD CONSTRAINT `forkey` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`),
  ADD CONSTRAINT `isb` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccine` (`vaccine_id`);

--

ALTER TABLE `vacc_storage_hospital`
  ADD CONSTRAINT `fokey` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`),
  ADD CONSTRAINT `lahore` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccine` (`vaccine_id`);

--
ALTER TABLE `vac_storage_center`
  ADD CONSTRAINT `chk` FOREIGN KEY (`center_id`) REFERENCES `vacc_center` (`center_id`),
  ADD CONSTRAINT `tlg` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccine` (`vaccine_id`);
COMMIT;

