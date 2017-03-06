-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 11:52 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facultystaffdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `facultystaff`
--

CREATE TABLE `facultystaff` (
  `id` int(11) NOT NULL,
  `pos` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `office` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `courses` varchar(255) DEFAULT NULL,
  `review` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- Table structure for courseTable

CREATE TABLE `coursestable` (
    `id` int(11) NOT NULL,
    `pos` varchar(255) DEFAULT NULL,
    `name` varchar(255) DEFAULT NULL,
    `units` varchar(255) DEFAULT NULL,
    `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultystaff`
--

INSERT INTO `facultystaff` (`id`, `pos`, `name`, `title`, `office`, `phone`, `email`, `courses`, `review`) VALUES
(1, 'Permanent Faculty', 'Tingting Chen', 'Assistant Professor', '8-09', '(909) 869-4842', 'tingtingchen@cpp.edu', NULL, NULL),
(2, 'Permanent Faculty', 'Mohammad Husain', 'Associate Professor', '8-41', '(909) 869-2022', 'mihusain@cpp.edu', NULL, NULL),
(3, 'Permanent Faculty', 'Sampath Jayarathna', 'Assistant Professor', '8-46', '(909) 869-3145', 'ukjayarathna@cpp.edu', NULL, NULL),
(4, 'Permanent Faculty', 'Hao Ji', 'Assistant Professor', '8-42', '(909) 869-5521', 'hji@cpp.edu', NULL, NULL),
(5, 'Permanent Faculty', 'Robert W. Kerbs', 'Interim Associate Dean in the College of Science; Professor of Computer Science', '8-3', '(909) 869-3697', 'rwkerbs@cpp.edu', NULL, NULL),
(6, 'Permanent Faculty', 'Ryan McCune', 'Assistant Professor', '8-44', '(909) 869-3441', 'rrmccune@cpp.edu', NULL, NULL),
(7, 'Permanent Faculty', 'Amar Raheja', 'Professor', '8-10', '(909) 869-4412', 'raheja@cpp.edu', NULL, NULL),
(8, 'Permanent Faculty', 'Craig A. Rich', 'Professor Emeritus', '8-47', '(909) 869-3447', 'carich@cpp.edu', NULL, NULL),
(9, 'Permanent Faculty', 'Salam Salloum', 'Professor', '8-13', '(909) 869-5317', 'ssalloum@cpp.edu', NULL, NULL),
(10, 'Permanent Faculty', 'Daisy F. Sang', 'Interim Chair and Professor of Computer Science', '8-49', '(909) 869-3469', 'fcsang@cpp.edu', NULL, NULL),
(11, 'Permanent Faculty', 'Mandayam A. Srinivas', 'Professor Emeritus', '8-47', '(909) 869-3437', 'masrinivas@cpp.edu', NULL, NULL),
(12, 'Permanent Faculty', 'Yu Sun', 'Assistant Professor', '8-42', '(909) 869-3449', 'yusun@cpp.edu', NULL, NULL),
(13, 'Permanent Faculty', 'Fang \"Daisy\" Tang', 'Associate Professor', '8-11', '(909) 869-2157', 'ftang@cpp.edu', NULL, NULL),
(14, 'Permanent Faculty', 'Lan Yang', 'Professor', '8-12', '(909) 869-4052', 'lyang@cpp.edu', NULL, NULL),
(15, 'Permanent Faculty', 'Gilbert S. Young', 'Professor & Graduate Coordinator', '8-14', '(909) 869-4413', 'gsyoung@cpp.edu', NULL, NULL),
(16, 'Lecturers', 'Dominick A. Atanasio', 'Lecturer', '8-45', '(909) 879-5519', 'daatanasio@cpp.edu', NULL, NULL),
(17, 'Lecturers', 'Patrice Bremond-Gregoire', 'Lecturer', '8-40', '(909) 869-3451', 'patriceb@cpp.edu', NULL, NULL),
(18, 'Lecturers', 'Nima Davarpanah', 'Lecturer', '8-43', '(909) 869-4195', 'ndavarpanah@cpp.edu', NULL, NULL),
(19, 'Lecturers', 'Tony Diaz', 'Lecturer', '8-45', '(909) 879-5519', 'tadiaz@cpp.edu', NULL, NULL),
(20, 'Lecturers', 'Sander Eller', 'Lecturer', '8-43', '(909) 869-4195', 'smeller@cpp.edu', NULL, NULL),
(21, 'Lecturers', 'John Fisher', 'Lecturer', '8-43', '(909) 869-4195', 'jrfisher@cpp.edu', NULL, NULL),
(22, 'Lecturers', 'David S. Garland', 'Lecturer', '8-204', '(909) 869-5597', 'dsgarland@cpp.edu', NULL, NULL),
(23, 'Lecturers', 'David A. Gershman', 'Lecturer', '8-45', '(909) 879-5519', 'dagershman@cpp.edu', NULL, NULL),
(24, 'Lecturers', 'Steve P. Jankly', 'Lecturer', '8-40', '(909) 869-3451', 'spjankly@cpp.edu', NULL, NULL),
(25, 'Lecturers', 'Asha Khakpour', 'Lecturer', '8-45', '(909) 879-5519', 'akhakpour@cpp.edu', NULL, NULL),
(26, 'Lecturers', 'Thanh Nguyen', 'Lecturer', '8-40', '(909) 869-3451', 'tvnguyen7@cpp.edu', NULL, NULL),
(27, 'Lecturers', 'Nick Pantic', 'Lecturer', '8-43', '(909) 869-4195', 'nmpantic@cpp.edu', NULL, NULL),
(28, 'Lecturers', 'Gilberto Perez', 'Lecturer', '8-43', '(909) 869-4195', 'gilbertperez@cpp.edu', NULL, NULL),
(29, 'Lecturers', 'Edwin Rodríguez', 'Lecturer', '8-40', '(909) 869-3451', 'earodriguez@cpp.edu', NULL, NULL),
(30, 'Lecturers', 'Hussain Zaidi', 'Lecturer', '8-40', '(909) 869-3451', 'hmzaidi@cpp.edu', NULL, NULL),
(31, 'Staff', 'Advising Center', 'Undergraduate Advisor', '3-1645', '(909) 979-5654', 'sci_advising@cpp.edu', NULL, NULL),
(32, 'Staff', 'Nam Kim', 'Information Technology Consultant', '8-51A', '(909) 869-4692', 'namkim@cpp.edu', NULL, NULL),
(33, 'Staff', 'Annie Montes', 'Administrative Support Coordinator', '8-49B', '(909) 869-3438', 'amontes@cpp.edu', NULL, NULL);

--
-- Dumping data for table `Courses`
--
INSERT INTO `coursesTable` (`id`, `pos`, `name`, `units`, `description`) VALUES
    (130, 'CS', 'Discrete Structures', '4', 'Fundamental topics for Computer Science, such as logic, proof techniques, sets, basic counting rules, relations, functions and recursion, graphs and trees.'),
    (140, 'CS', 'Introduction to Computer Science', '4', 'Basic concepts of Computer Science, including hardware and software. Problem-solving methods. Programming in an object-oriented language.'),
    (141, 'CS', 'Introduction to Programming and Problem-Solving', '4', 'Design, implementation, documentation and testing of programs in an object-oriented language. Modularization and reusability of software. File I/O and exception handling.'),
    (210, 'CS', 'Computer Logic', '4', 'Boolean algebra with applications to computers and logic design. The Arithmetic Logical Unit, logical properties of flip-flops and sequential machines. Applied projects.'),
    (240, 'CS', 'Data Structures and Algorithms 1', '4', 'Abstract data types and their implementations. Linked and array-based data structures. Lists, stacks, queues. Recursion. Hashing and searching. Analysis of algorithms.'),
    (241, 'CS', 'Data Structures and Algorithms 2', '4', 'Trees, priority queues, graphs, sets, and maps. Sorting algorithms. Random access, indexed and direct files. Indexing techniques.'),
    (245, 'CS', 'Programming Graphical User Interfaces', '4', 'Computer interfaces. Usability of interactive systems. GUI development processes. GUI components. Input and viewing devices. Event-handling. Animation use in GUIs. Problem-solving techniques.'),
    (256, 'CS', 'C++ Programming', '4', 'Class encapsulation, inheritance, polymorphism, object storage management, and exception handling. Standard template library including template classes and generic algorithms. Software reuse and object-oriented programming.'),
    (260, 'CS', 'Unix and Scripting', '4', 'An introductory course that covers the fundamentals of the UNIX operating system and scripting. Emphasizing instruction in tools for file management, communication, process control, and program development.'),
    (264, 'CS', 'Computer Organization and Assembly Programming', '4', 'Von Neumann machine. Instruction set architecture. Addressing modes. Assembly programming. Arrays and records. Subroutines and macros. I/O and interrupts. Interfacing and communication.'),
    (299, 'CS', 'Special Topics for Lower Divison Students', '1-4', 'Group study of a selected topic, the title to be specified in advance.'),
    (311, 'CS', 'Language Translation and Automata', '4', 'Introduction to language translation. Regular expressions. Finite automata. Lexical analysis. Context-free grammars and push down automata. Syntax analysis.'),
    (331, 'CS', 'Design and Analysis of Algorithms', '4', 'Algorithm design techniques including divide-and-conquer, the greedy method, dynamic programming, backtracking, and branch-and-bound. Analysis of sorting and searching. Tractability. Complexity analysis using basic asymptotic notation.'),
    (365, 'CS', 'Computer Architecture', '4', 'Data representations. Computer arithmetic. Data path and control unit design. Pipelining. Memory technology and hierarchy. I/O devices and interfacing. Multiprocessing and alternative architectures.'),
    (375, 'CS', 'Computers and Society', '4', 'Impact of computers on individuals and on society. Various current uses of computers, how these have evolved, and what the future might bring. Benefits and dangers of information technology. How the Internet and computers have fundamentally changed the way we work, play, and interact with others. Consequent rise of new social and legal issues, making it essential for everyone to acquire a working understanding of the role of computers in our daily lives. Course fulfills GE Interdisciplinary Synthesis B5 or D4.'),
    (400, 'CS', 'Special Study For Upper Division Students', '1-2', 'Individual or group investigation, research, studies or surveys of selected problems.'),
    (408, 'CS', 'Programming Langauges', '4', 'Concepts in programming languages. Virtual machines and abstraction. Syntax and semantics. Declarations and types. Scoping and binding. Data abstraction. Control abstraction. Run-time organization. Programming paradigms.'),
    (411, 'CS', 'Compilers and Interpreters', '4', 'Language translation systems. Parsing techniques. Run-time environments. Syntax-directed translation. Intermediate code generation and optimization.'),
    (420, 'CS', 'Artifical Intelligence', '4', 'Overview of the different application areas of AI. Introduction to basic AI concepts and techniques such as heuristic search, knowledge representation, automated reasoning. In-depth discussion of several AI application areas: their specific problems, tools and techniques.'),
    (431, 'CS', 'Operating Systems', '4', 'Overview of operating systems. Operating system structures. Process management. Concurrency and synchronization. Deadlock. Processor management. Scheduling and dispatch. Memory management. Virtual memory. Device management. File systems. Security, privacy and acceptable use.'),
    (435, 'CS', 'Database Systems', '4', 'Database system fundamentals. System components and architecture. Data models, including Entity-Relationship model, relational model and object-oriented model. Theory of database design and data manipulation processes using relational algebra and calculus. SQL in programming language environments. Introduction to concurrency, security, recovery, and transaction handling.'),
    (445, 'CS', 'Computer Graphics', '4', 'Basic concepts in 2D and 3D graphics. Graphics hardware. Drawing concepts in 2D and 3D graphics. Geometric transformations. Windowing and clipping algorithms. Simple hidden line and surface removal. Color models and applications. 3D modeling. Animation. OpenGL libraries.'),
    (450, 'CS', 'Computability', '4', 'Abstract models of computation, including Turing machines. Church- Turing thesis. Decidability. Theoretical and practical capabilities and limitations of computing machines.'),
    (460, 'CS', 'Secure Communication', '4', 'Public-key systems, digital signatures, ciphers, the Advanced Encryption Standard, access security, control of information flow.'),
    (461, 'CS', 'Senior Project', '2', 'Selection and completion of a project under faculty supervision. Projects typical of problems which graduates must solve in their fields of employment. Project results are presented in a formal report.'),
    (462, 'CS', 'Senior Project (2)', '2', 'Selection and completion of a project under faculty supervision. Projects typical of problems which graduates must solve in their fields of employment. Project results are presented in a formal report.'),
    (463, 'CS', 'Undergraduate Seminar', '2', 'Technical presentations by students on current developments in computer science. Essays on seminar topics.'),
    (470, 'CS', 'Game Development', '4', 'Overview of game development processes. Game programming topics including: languages and architectures, mathematics, collision detection, physics, graphics, animation, artificial intelligence (AI), and audio.'),
    (480, 'CS', 'Software Engineering', '4', 'Models of the software development process and metrics. Software requirements and specifications. Methodologies, tools and environments. Human-computer interaction. Software design and architecture. Project management. Cost estimation. Testing and validation. Maintenance and evolution.'),
    (481, 'CS', 'Software Engineering Practice', '4', 'Team and project-oriented software engineering. Practice in the hands-on process of software production and quality control. Coverage of advanced topics such as embedded systems, real-time systems, and usage-oriented software design. Documentation and management methods for analysis, design, implementation and testing phases of software production. Survey and usage of CASE tools. Focus on issues of system integration and engineering, testing, and maintenance.'),
    (490, 'CS', 'Honors', '4', 'In-depth study of a topic of current interest to computer science. Students will be expected to perform individual research and projects and present their results in class. Enrollment is limited.'),
    (499, 'CS', 'Special Topics For Upper Division Students', '1-4', 'Group study of a selected topic, the title to be specified in advance.'),
    (110, 'BIO', 'Life Science', '3', 'Lecture portion of: Basic concepts in the study of living systems, including human beings. Uses the study of biology to illustrate approaches of science in understanding the universe. The role of science in modern society and the impact of human civilization on other organisms considered. Designed to satisfy the general education requirements for life science. Course fulfills GE Sub-area B2.'),
    (111, 'BIO', 'Life Science Lab', '1', 'Lab portion of: Basic concepts in the study of living systems, including human beings. Uses the study of biology to illustrate approaches of science in understanding the universe. The role of science in modern society and the impact of human civilization on other organisms considered. Designed to satisfy the general education requirements for life science. Course fulfills GE Sub-area B2.'),
    (114, 'MAT', 'Analtyic Geomrety and Calculus 1', '4', 'Functions, limits, continuity, derivatives of all functions including trig, exponential, log, inverse trig and implicit functions. Applications of derivatives including max/min problems. Course fulfills GE Sub-area B4.'),
    (115, 'MAT', 'Analtyic Geomrety and Calculus 2', '4', 'Definite and indefinite integrals. The Fundamental Theorem of Calculus. Applications of the definite integral. Integration techniques including integration by parts, integrals of trig products, partial fractions, substitution, trig substitution. Hyperbolic functions. Course fulfills GE Sub-area B4.'),
    (116, 'MAT', 'Analtyic Geomrety and Calculus 3', '4', 'Sequences and series, L’Hospital’s rule, improper integrals, polar coordinates, parametric equations and conic sections. Course fulfills GE Sub-area B4.'),
    (208, 'MAT', 'Introduction to Linear Algebra', '4', 'Introduction to linear transformations of the plane, vector space of n-tuples, matrix algebra, determinants, systems of linear equations.'),
    (214, 'MAT', 'Calculus of Several Variables 1', '3', 'Introduction to vectors, dot products, cross products, equations of lines and planes. Calculus of Vector Valued Functions including unit tangents, unit normals and curvature. Introduction to multivariable functions, the Differential Calculus of Multivariable Functions, the chain rule, applications including extreme problems and Lagrange multipliers.'),
    (216, 'MAT', 'Differential Equations', '4', 'The theory of ordinary differential equations with emphasis on the linear case.'),
    (370, 'MAT', 'Graph Theory', '4', 'The study of graphs, trees, Eulerian, Hamiltonian, planar graphs, connectivity, coloring, independence and covering numbers, directed graphs, theorems of Menger, Ramsey with applications.'),
    (380, 'MAT', 'Mathematics of Operations Research', '4', 'Introduction to mathematics of linear programming (LP): algebra and geometry of simplex method, solution of LP problems by Gauss-Jordan elimination method. Duality theory and sensitivity analysis. Development of revised and dual simplex algorithms. Introduction to parametric and separable convex programming. Applications of LP: computational considerations, case studies.'),
    (381, 'MAT', 'Mathematics of Operations Research', '4', 'Solution of transportation, transshipment and assignment problems. Formulation and solution of network problems: maximal flow, minimal spanning tree, shortest route problems; PERT-CPM techniques. Introduction to dynamic and integer programming. Elements of game theory, solution of games by linear programming. Introduction to nonlinear programming: Kuhn-Tucker conditions, quadratic and convex programming; SUMP solution procedure.'),
    (402, 'MAT', 'Numerical Methods in Differential Equations', '4', 'Polynomial interpolation, cubic splines, numerical differentiation and integration, numerical solutions of differential equations including Runga-Kutta methods and predictor-corrector methods for solving initial value problems and the shooting method for solving boundary value problems.'),
    (470, 'MAT', 'Combinatorics', '4', 'Study of enumeration techniques, permutations, combinations, principle of inclusion and exclusion, finite fields, combinatorial designs, error correcting codes.'),
    (480, 'MAT', 'Mathematical Programming', '4', 'Treatment of linear inequalities, duality, general algorithms, application of linear programming. Introduction to discrete and nonlinear programming.'),
    (485, 'MAT', 'Mathematical Modeling and Simulation', '4', 'Introduction to the general principles of modeling. Models will be selected from the areas such as physics, biology, political science, chemistry, engineering and business. Analytical, numerical and simulation methods will be used to solve the models.'),
    (486, 'MAT', 'Mathematical Modeling and Simulation', '4', 'Introduction to the general principles of modeling. Models will be selected from the areas such as physics, biology, political science, chemistry, engineering and business. Analytical, numerical and simulation methods will be used to solve the models.'),
    (131, 'PHY', 'General Physics', '3', 'Lecture portion of: Fundamental principles of mechanics, vectors, statics, uniform motion, accelerated motion, work and energy, momentum, and rotational motion. Course fulfills GE Sub-area B1 in combination with laboratory course.'),
    (131, 'PHY', 'General Physics Laboratory', '1', 'Laboratory to accompany General Physics lecture series. Experiments in mechanics, hydrostatics, wave motion, thermodynamics, optics, and electricity and magnetism. PHY 131L fulfills GE Sub-area B1, in combination with lecture course, and B3.'),
    (132, 'PHY', 'General Physics', '3', 'Lecture portion of: Fundamental principles of fluid mechanics, harmonic motion, waves, thermodynamics, and kinetic theory.'),
    (132, 'PHY', 'General Physics Laboratory', '1', 'Laboratory to accompany General Physics lecture series. Experiments in mechanics, hydrostatics, wave motion, thermodynamics, optics, and electricity and magnetism. PHY 131L fulfills GE Sub-area B1, in combination with lecture course, and B3.'),
    (133, 'PHY', 'General Phyiscs', '3', 'Fundamental principles of electricity and magnetism, Coulomb’s law, electric fields, potential, properties of dielectrics, capacitance, Ohm’s law, magnetism and magnetic fields, measuring instruments, and induced emf.'),
    (133, 'PHY', 'General Physics Laboratory', '1', 'Laboratory to accompany General Physics lecture series. Experiments in mechanics, hydrostatics, wave motion, thermodynamics, optics, and electricity and magnetism. PHY 131L fulfills GE Sub-area B1, in combination with lecture course, and B3.'),
    (326, 'STA', 'Statistical Methods for Computer Scientists', '4', 'Rules of Probability. Discrete and continuous distributions including the multinomial distribution. Sampling distributions. Point and interval estimation. Hypothesis-testing. Large and small sample inferences for means, proportions and variances. Introduction to queuing theory and regression.'),
    (470, 'SCI', 'Cooperative Education', '1-4', 'Part-time or full-time work experience that applies scientific principles to practice. To be taken in sequence.'),
    (471, 'SCI', 'Cooperative Education', '1-4', 'Part-time or full-time work experience that applies scientific principles to practice. To be taken in sequence.'),
    (472, 'SCI', 'Cooperative Education', '1-4', 'Part-time or full-time work experience that applies scientific principles to practice. To be taken in sequence.'),
    (473, 'SCI', 'Cooperative Education', '1-4', 'Part-time or full-time work experience that applies scientific principles to practice. To be taken in sequence.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facultystaff`
--
ALTER TABLE `facultystaff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facultystaff`
--
ALTER TABLE `facultystaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
