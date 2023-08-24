-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 11:27 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `subcode` varchar(20) NOT NULL,
  `subject` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`subcode`, `subject`) VALUES
('125EM ', 'Software Engineering  '),
('134AG', 'Business Economics and Financial Analysis'),
('134AK ', 'Computer Organization  '),
('134AP', 'Database Management Systems      '),
('134BD', 'Formal Languages and Automated Theory'),
('134BU   ', 'Operating Systems  '),
('135AE', 'Data Communications and Computer Networks'),
('135AF', 'Design and Analysis of Algorithms '),
('135AR ', 'Fundamentals of Management');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `deptid` int(10) NOT NULL,
  `deptname` varchar(75) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptid`, `deptname`, `status`) VALUES
(1, 'Civil Engineering', 'n'),
(2, 'Electrical and Electronic Engineering', 'y'),
(3, 'Mechanical Engineering', 'n'),
(4, 'Electronics and Communication Engineering', 'y'),
(5, 'Computer Science Engineering', 'y'),
(10, 'Electronics and Instrumentation Engineering', 'n'),
(11, 'Bio-Medical Engineering', 'n'),
(12, 'Information Technology', 'y'),
(14, 'Mechanical Engineering(Mechatronics)', 'n'),
(17, 'Electronics and Telematics Engineering', 'y'),
(18, 'Metallurical and Materials Engineering', 'n'),
(19, 'Electronics and Computer Engineering', 'n'),
(21, 'Aeronautical Engineering', 'n'),
(24, 'Automobile Engineering', 'n'),
(25, 'Mining Engineering', 'n'),
(27, 'Petroleum Engineering', 'n'),
(28, 'Civil & Environmental Engineering', 'n'),
(29, 'Mechanical Engineering (Material Science & Nano Technology)', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `empid` varchar(40) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `position` varchar(75) DEFAULT NULL,
  `mailid` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`empid`, `name`, `department`, `position`, `mailid`, `gender`, `username`, `password`) VALUES
('11099', 'Sri Varini', 'IT', 'Professor', 'srivarini.mandali@gmail.com', 'Female', 'sri', 'sri'),
('1274', 'Mandali Srivarini', 'IT', 'Associate Professor', 'srivarini.mandali@gmail.com', 'Female', 'varini.mandali', 'varini'),
('1275', 'Varini', 'ECE', 'Professor', 'srivarini.mandali@gmail.com', 'Male', 'vcx', 'vcx');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin@gnits'),
('mini', 'mini123'),
('varini', 'varini123');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` varchar(20) NOT NULL,
  `question` varchar(1500) DEFAULT NULL,
  `subjectcode` varchar(10) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `level` varchar(30) DEFAULT NULL,
  `marks` int(5) DEFAULT NULL,
  `semester` varchar(5) DEFAULT NULL,
  `year` varchar(5) DEFAULT NULL,
  `unitno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `subjectcode`, `subject`, `level`, `marks`, `semester`, `year`, `unitno`) VALUES
('COM1', 'What is the purpose of BUN instruction?', '134AK', 'Computer Organization', 'Understand', 2, 'II', 'II', '1'),
('COM10', 'Draw the system bus structure for multiprocessors.', '134AK', 'Computer Organization', 'Create', 3, 'II', 'II', '5'),
('COM100', 'Give the comparison between zero-address, one-address, two-address, three-address.', '134AK', 'Computer Organization', 'Apply', 10, 'II', 'II', '1'),
('COM101', 'Explain in detail about different addressing modes with example.', '134AK ', 'Computer Organization', 'Understand', 10, 'II', 'II', '1'),
('COM102', 'List the conditional branch instructions.', '134AK ', 'Computer Organization', 'Understand', 5, 'II', 'II', '1'),
('COM103', 'Write a program to evaluate the arithmetic statement X=A-B+C*(D*E-F)/G+H*F  using a general register computer with three address instructions.', '134AK', 'Computer Organization', 'Evaluate', 5, 'II', 'II', '1'),
('COM104', 'Explain I/O interface with an example.', '134AK', 'Computer Organization', 'Analyze', 10, 'II', 'II', '2'),
('COM105', 'Explain strobe control method of asynchronous data transfer.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '2'),
('COM106', 'What is direct memory access ? Explain the working of DMA.', '134AK', 'Computer Organization', 'Analyze', 10, 'II', 'II', '2'),
('COM107', 'What are the various schemes which are used for data transfer between the two devices of a computer?', '134AK', 'Computer Organization', 'Understand', 10, 'II', 'II', '2'),
('COM108', 'Give the hardware organization of associative memory.', '134AK', 'Computer Organization', 'Apply', 10, 'II', 'II', '3-1'),
('COM109', 'Explain memory hierarchy in detail.', '134AK', 'Computer Organization', 'Evaluate', 5, 'II', 'II', '3-1'),
('COM11', 'List the registers for the basic computer and give their functionality in program execution.', '134AK', 'Computer Organization', 'Understand', 10, 'II', 'II', '1'),
('COM110', 'A computer uses RAM chips of 1024 X 1 capacity.\r\ni)How many chips are needed and how should their address lines be connected to provide a memory capacity of 1024 bytes?\r\nii) How many chips are needed to provide a memory capacity of 16K bytes?', '134AK', 'Computer Organization', 'Analyze', 10, 'II', 'II', '3-1'),
('COM111', 'Write the match logic of associative memory.', '134AK', 'Computer Organization', 'Understand', 5, 'II', 'II', '3-2'),
('COM112', 'What are the different types of mapping techniques used in the usage of cache memory? Explain.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '3-2'),
('COM113', 'Compare and Contrast direct and associative mapping techniques.', '134AK', 'Computer Organization', 'Apply', 5, 'II', 'II', '3-2'),
('COM114', 'Draw the pin diagram of 8086 processor and describe the function of each pin.', '134AK', 'Computer Organization', 'Create', 10, 'II', 'II', '4'),
('COM115', 'Discuss the general functions of all general purpose registers of 8086.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '4'),
('COM116', 'Explain the special function of each register and instruction support for these functions.', '134AK', 'Computer Organization', 'Create', 10, 'II', 'II', '4'),
('COM117', 'Write about segment register in brief.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '4'),
('COM118', 'Explain the concept of pipelining.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '4'),
('COM119', 'Explain the 16-bit flag register format of 8086 and explain about each flag in detail.', '134AK', 'Computer Organization', 'Understand', 10, 'II', 'II', '4'),
('COM12', 'Describe the micro programmed control organization and compare its advantages over handwired control.', '134AK', 'Computer Organization', 'Analyze', 10, 'II', 'II', '1'),
('COM120', 'Explain in detail about the addressing modes of 8086.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '4'),
('COM13', 'Evaluate the following arithmetic statement using zero ,one,two,and three address instructions .Use the conventional symbols and instructions. X=(A+B)*(C+D)', '134AK', 'Computer Organization', 'Evaluate', 10, 'II', 'II', '2'),
('COM14', 'Does 8086 support instruction pipelining? Justify your answer with relevant example instructions.', '134AK', 'Computer Organization', 'Remember', 10, 'II', 'II', '2'),
('COM15', 'Develop an assembly language program to find out numbers odd and even numbers in a given series of 16 bit hexa decimal numbers.', '134AK', 'Computer Organization', 'Create', 10, 'II', 'II', '3-1'),
('COM16', 'Elaborate on the techniques used to pass parameters to procedures in assembly language program.', '134AK', 'Computer Organization', 'Apply', 10, 'II', 'II', '3-2'),
('COM17', 'Show the step-by-step multiplication process using Booth algorithm when the following binary numbers are multiplied.(+33) x (-12).', '134AK', 'Computer Organization', 'Evaluate', 10, 'II', 'II', '4'),
('COM18', 'Design a circuit for a 4 X 4 First In First Out Buffer and explain its functionality.', '134AK', 'Computer Organization', 'Create', 10, 'II', 'II', '4'),
('COM19', 'A digit computer has a memory unit of 64K * 16 and a cache memory of 1K words.The cache uses direct mapping with the block size of 4 words. a)How many bits are there in the tag,index,block and word fields of the address format? (b)How many bits are there in each word of cache and how are they divided into function ? Include a valid bit.', '134AK', 'Computer Organization', 'Evaluate', 10, 'II', 'II', '5'),
('COM2', 'Define computer organization,computer architecture.', '134AK', 'Computer Organization', 'Remember', 3, 'II', 'II', '1'),
('COM20', 'Does pipelining get affected by data dependencies among the instruction ? Justify your answer with lucid examples.', '134AK', 'Computer Organization', 'Analyze', 10, 'II', 'II', '5'),
('COM21', 'Explain RTL and its control function.', '134AK', 'Computer Organization', 'Analyze', 2, 'II', 'II', '1'),
('COM22', 'Compare horizontal and vertical organization.', '134AK', 'Computer Organization', 'Apply', 3, 'II', 'II', '1'),
('COM23', 'Differentiate jump and loop instructions.', '134AK', 'Computer Organization', 'Apply', 2, 'II', 'II', '2'),
('COM24', 'Briefly explain special processor activities.', '134AK', 'Computer Organization', 'Understand', 3, 'II', 'II', '2'),
('COM25', 'What is an assembler?', '134AK', 'Computer Organization', 'Understand', 2, 'II', 'II', '3-1'),
('COM26', 'Explain the machine code for: LES DI,[0600H] and NEG 50[BP].', '134AK', 'Computer Organization', 'Analyze', 3, 'II', 'II', '3-2'),
('COM27', 'Explain overflow and underflow.', '134AK', 'Computer Organization', 'Analyze', 2, 'II', 'II', '4'),
('COM28', 'Differentiate isolated I/O and memory mapped I/O.', '134AK', 'Computer Organization', 'Apply', 3, 'II', 'II', '4'),
('COM29', 'Explain the cache incoherence.', '134AK', 'Computer Organization', 'Analyze', 2, 'II', 'II', '5'),
('COM3', 'Contrast 8086 minimum mode with maximum mode.', '134AK', 'Computer Organization', 'Apply', 2, 'II', 'II', '2'),
('COM30', 'Explain the locality of reference.', '134AK', 'Computer Organization', 'Analyze', 3, 'II', 'II', '5'),
('COM31', 'List and explain different performance measures used to represent a computer system performance.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '1'),
('COM32', 'Elucidate the functioning of a Micro program sequencer.', '134AK', 'Computer Organization', 'Understand', 5, 'II', 'II', '1'),
('COM33', 'Elucidate common bus system.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '1'),
('COM34', 'Formulate a mapping procedure that provides eight consecutive micro instructions for each routine.The operation code has 7bits and control memory has 4096 words.', '134AK', 'Computer Organization', 'Evaluate', 5, 'II', 'II', '1'),
('COM35', 'Explain the register organization in 8086.', '134AK', 'Computer Organization', 'Understand', 5, 'II', 'II', '2'),
('COM36', 'Elucidate machine language instruction formats.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '2'),
('COM37', 'Explain the pin configuration details of 8086.', '134AK', 'Computer Organization', 'Understand', 5, 'II', 'II', '2'),
('COM38', 'Explain the assembler directives with examples.', '134AK', 'Computer Organization', 'Understand', 5, 'II', 'II', '2'),
('COM39', 'Explain the steps involved in writing a program using an assembler.', '134AK', 'Computer Organization', 'Understand', 5, 'II', 'II', '3-1'),
('COM4', 'How an address is latched in 8086?', '134AK', 'Computer Organization', 'Understand', 3, 'II', 'II', '2'),
('COM40', 'Write a program to find out the number of positive numbers and negative numbers from a given series of signed numbers.', '134AK', 'Computer Organization', 'Evaluate', 5, 'II', 'II', '3-1'),
('COM41', 'Add the contents of the memory location 4000H:0600H to contents of 5000H:0700H and store the result in 8000H:0900H.', '134AK', 'Computer Organization', 'Evaluate', 5, 'II', 'II', '3-2'),
('COM42', 'Write a program for addition of two numbers.', '134AK', 'Computer Organization', 'Create', 5, 'II', 'II', '3-2'),
('COM43', 'Draw a flow chart for Floating point Add/Sub operations.', '134AK', 'Computer Organization', 'Create', 5, 'II', 'II', '4'),
('COM44', 'Illustrate asynchronous communication interface in detail.', '134AK', 'Computer Organization', 'Understand', 5, 'II', 'II', '4'),
('COM45', 'Explain in detail with neat sketch Booth Multiplication Algorithm.', '134AK', 'Computer Organization', 'Apply', 5, 'II', 'II', '4'),
('COM46', 'Explain different types of modes of control.', '134AK', 'Computer Organization', 'Understand', 5, 'II', 'II', '4'),
('COM47', 'Explain arithmetic pipeline with example.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '5'),
('COM48', 'Elucidate Inter Processor communication.', '134AK', 'Computer Organization', 'Remember', 5, 'II', 'II', '5'),
('COM49', 'Elucidate array processor in detail.', '134AK', 'Computer Organization', 'Remember', 5, 'II', 'II', '5'),
('COM5', 'What is the need of a linker?', '134AK', 'Computer Organization', 'Remember', 2, 'II', 'II', '3-1'),
('COM50', 'Explain various Interconnection Structures.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '5'),
('COM51', 'Define the effective address.', '134AK', 'Computer Organization', 'Remember', 2, 'II', 'II', '1'),
('COM52', 'Explain about Logical and Bit Manipulation Instructions.', '134AK', 'Computer Organization', 'Understand', 3, 'II', 'II', '1'),
('COM53', 'Explain about the purpose of Input-output interface.', '134AK', 'Computer Organization', 'Understand', 2, 'II', 'II', '2'),
('COM54', 'Explain about the two-wire control.', '134AK', 'Computer Organization', 'Understand', 3, 'II', 'II', '2'),
('COM55', 'Explain about auxiliary memory.', '134AK', 'Computer Organization', 'Understand', 2, 'II', 'II', '3-1'),
('COM56', 'What is a bootstrap loader? Explain about the functions of bootstrap loader.', '134AK', 'Computer Organization', 'Remember', 3, 'II', 'II', '3-2'),
('COM57', 'Explain about the purpose of Bus High Enable pin in 8086.', '134AK', 'Computer Organization', 'Understand', 2, 'II', 'II', '4'),
('COM58', 'Explain about condition code flag register in 8086.', '134AK', 'Computer Organization', 'Remember', 3, 'II', 'II', '4'),
('COM59', 'Explain about One-byte instruction in 8086.', '134AK', 'Computer Organization', 'Understand', 2, 'II', 'II', '5'),
('COM6', 'What is the difference between a macro and a procedure?', '134AK', 'Computer Organization', 'Understand', 3, 'II', 'II', '3-2'),
('COM60', 'Explain about FAR PTR and NEAR PTR assembler directive.', '134AK', 'Computer Organization', 'Understand', 3, 'II', 'II', '5'),
('COM61', 'Write an Assembly Language program to perform one byte BCD addition.', '134AK', 'Computer Organization', 'Create', 5, 'II', 'II', '5'),
('COM62', 'Explain about different instruction formats in 8086.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '5'),
('COM63', 'Write an ALP program to find transpose of a 3x3 matrix ', '134AK', 'Computer Organization', 'Create', 5, 'II', 'II', '5'),
('COM64', 'Explain about the functions of opcode prefetch queue in an 8086 system', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '4'),
('COM65', ' Explain about addressing modes of 8086.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '4'),
('COM66', 'Explain about the concept of segmented memory with a neat diagram. Explain its advantages.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '4'),
('COM67', 'Explain about the register organization of 8086.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '4'),
('COM68', 'Obtain the Boolean function for the match logic of one word in an associative memory taking into consideration a tag bit that indicates whether the word is active or inactive.', '134AK', 'Computer Organization', 'Create', 5, 'II', 'II', '3-1'),
('COM69', 'Explain about Virtual Memory with the implementation details', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '3-2'),
('COM7', 'What is the disadvantage of strobe method?', '134AK', 'Computer Organization', 'Understand', 2, 'II', 'II', '4'),
('COM70', 'Explain about different types of Assembler directives and operators.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '5'),
('COM71', 'Explain about the functions of CPU.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '1'),
('COM72', 'Explain about Program Control Instructions.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '1'),
('COM73', 'Explain about Source-initiated transfer using handshaking and Destination initiated transfer using handshaking with a neat diagram.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '2'),
('COM74', 'A CPU with a 20-MHz clock is connected to a memory unit whose access time is 40 ms. Formulate a read and write timing diagrams using a READ strobe and a WRITE strobe. Include the address in the timing diagram.', '134AK', 'Computer Organization', 'Create', 5, 'II', 'II', '2'),
('COM75', 'What is the difference between isolated I/O and memory-mapped I/O? What are the advantages and disadvantages of each', '134AK', 'Computer Organization', 'Apply', 5, 'II', 'II', '2'),
('COM76', 'Explain about Intel 8089 IOP.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '2'),
('COM77', 'Write a program to evaluate the arithmetic statement: (X-A-B+C*(D*E-F))/(G+H*K)                                                                                                                                                                                                                                         a) Using a general register computer with three address instructions\r\nb) Using a general register computer with two address instructions.', '134AK', 'Computer Organization', 'Evaluate', 10, 'II', 'II', '1'),
('COM78', 'Compare RISC and CISC architecture.', '134AK', 'Computer Organization', 'Apply', 2, 'II', 'II', '1'),
('COM79', 'Give an example to explain three address instruction formats.', '134AK', 'Computer Organization', 'Apply', 3, 'II', 'II', '1'),
('COM8', 'Provide the hardware for signed-2\'s complement addition and subtraction.', '134AK', 'Computer Organization', 'Evaluate', 3, 'II', 'II', '4'),
('COM80', 'What is strobe signal.', '134AK', 'Computer Organization', 'Remember', 2, 'II', 'II', '2'),
('COM81', 'Why does the DMA having priority over CPU when both requests for memory transfer.', '134AK', 'Computer Organization', 'Understand', 3, 'II', 'II', '2'),
('COM82', 'Give the basic structure of cache and what is it\'s use.', '134AK', 'Computer Organization', 'Apply', 2, 'II', 'II', '3-1'),
('COM83', 'With a neat diagram , Explain memory connection to CPU.', '134AK', 'Computer Organization', 'Apply', 3, 'II', 'II', '3-2'),
('COM84', 'State and explain any two addressing modes of 8086.', '134AK', 'Computer Organization', 'Understand', 2, 'II', 'II', '4'),
('COM85', 'With a neat sketch , explain the concept of a pipeline.', '134AK', 'Computer Organization', 'Apply', 3, 'II', 'II', '4'),
('COM86', 'Give examples to explain call instructions in 8086.', '134AK', 'Computer Organization', 'Apply', 2, 'II', 'II', '5'),
('COM87', 'Briefly discuss about unconditional branch statements.', '134AK', 'Computer Organization', 'Understand', 3, 'II', 'II', '5'),
('COM88', 'Write in detail about various types of instructions.Give examples for each.', '134AK', 'Computer Organization', 'Analyze', 10, 'll', 'll', '1'),
('COM89', 'Discuss about status bits in Program Control Register.', '134AK', 'Computer Organization', 'Analyze', 5, 'II', 'II', '1'),
('COM9', 'Define miss penalty for cache memory.', '134AK', 'Computer Organization', 'Remember', 2, 'II', 'II', '5'),
('COM90', 'Explain in detail about Conditional branch instructions.', '134AK', 'Computer Organization', 'Understand', 5, 'II', 'II', '1'),
('COM91', 'With a neat sketch, Explain the architecture of 8089 I/O processor.', '134AK', 'Computer Organization', 'Apply', 10, 'II', 'II', '2'),
('COM92', 'With a neat block diagram, show the DMA transfer in a Computer System.', '134AK', 'Computer Organization', 'Apply', 10, 'II', 'II', '2'),
('COM93', 'What do you mean by Virtual Memory ? Discuss how Paging helps in implementing Virtual Memory.', '134AK', 'Computer Organization', 'Understand', 10, 'II', 'II', '3-1'),
('COM94', 'Discuss in detail about working of Associative Memory.', '134AK', 'Computer Organization', 'Analyze', 10, 'II', 'II', '3-2'),
('COM95', 'With a neat architectural diagram, explain the functioning of 8086 microprocessor.', '134AK', 'Computer Organization', 'Apply', 10, 'II', 'II', '4'),
('COM96', 'With a neat Diagram, explain 8086 CPU pin diagram. Discuss in brief about each Pin.', '134AK', 'Computer Organization', 'Analyze', 10, 'II', 'II', '4'),
('COM97', 'Write an 8086 assembly language program to find factorial of a given number.Add comments to your program.', '134AK', 'Computer Organization', 'Create', 10, 'II', 'II', '5'),
('COM98', 'Write short notes on instruction formats.', '134AK ', 'Computer Organization', 'Understand', 10, 'II', 'II', '1'),
('COM99', 'Write an example , explain the concept of one-address,two-address,three-adress and zero-address formats.', '134AK ', 'Computer Organization', 'Remember', 10, 'II', 'II', '1');

-- --------------------------------------------------------

--
-- Table structure for table `validstaff`
--

CREATE TABLE `validstaff` (
  `empid` varchar(40) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `position` varchar(75) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `validstaff`
--

INSERT INTO `validstaff` (`empid`, `name`, `department`, `position`, `mail`, `gender`, `username`, `password`) VALUES
('1', 'Team Mini Project', 'Information Technology', 'Testing', 'miniproject@gmail.com', 'Female', 'mini', 'mini123'),
('1274', 'Mandali Srivarini', 'IT', 'Student', 'srivarini.mandali@gmail.com', 'Female', 'varini', 'varini123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`subcode`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `validstaff`
--
ALTER TABLE `validstaff`
  ADD PRIMARY KEY (`empid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
