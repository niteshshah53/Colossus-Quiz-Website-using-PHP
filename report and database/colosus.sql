--
-- Database: `colosus`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) DEFAULT NULL,
  `is_correct` int(1) DEFAULT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'A. 4,3,1'),
(2, 1, 0, 'B. 4,2,2'),
(3, 1, 1, 'C. 3,3,1'),
(4, 1, 0, 'D. 4,3,3'),
(5, 2, 0, 'A. There should be a return type'),
(6, 2, 0, 'B. The loop never executes'),
(7, 2, 1, 'C. There are no syntatical errors'),
(8, 2, 0, 'D. The loop executes ten times'),
(9, 3, 0, 'A. SEEK_SET'),
(10, 3, 0, 'B. SEEK_CUR'),
(11, 3, 1, 'C. SEEK_BEG'),
(12, 3, 0, 'D.SEEK_END'),
(13, 4, 0, 'A. They increase the execution time'),
(14, 4, 1, 'B. They make program organization clearer'),
(15, 4, 0, 'C. A program can not compile if it does not contain a least one function'),
(16, 4, 0, 'D. The compiler automatically switches to the more powerfull functions mode when compiling a program with funtions'),
(17, 5, 0, 'A. Char name[3]="kathryn";'),
(18, 5, 0, 'B. 2x=2.0;'),
(19, 5, 1, 'C. Double y[6]={1.0,2.0}'),
(20, 5, 0, 'D. Char* x=''a'';'),
(21, 6, 0, 'A. Concrete '),
(22, 6, 0, 'B. Brick'),
(23, 6, 0, 'C. Stone'),
(24, 6, 1, 'D. Struct'),
(25, 7, 0, 'A. A reccursive function can always be rewritten with a loop'),
(26, 7, 1, 'B. A recursion function always executes faster than its loop equivalent'),
(27, 7, 0, 'C. A recursive function is a function which calls itself'),
(28, 7, 0, 'D. Recursion can sometimes yield a natural and simple solution to a problem'),
(29, 8, 0, 'A. Another name for a function prototype'),
(30, 8, 0, 'B. A memory area where function variables are stored while the program executes'),
(31, 8, 1, 'C. A set of compiled function that can be called by the programmer without having to write them all over again'),
(32, 8, 0, 'D. Another name for the hard drive of the computer'),
(33, 9, 0, 'A. 10 10'),
(34, 9, 0, 'B. 11 11 '),
(35, 9, 1, 'C. 11 12'),
(36, 9, 0, 'D. 12 12'),
(37, 10, 0, 'A. For loop '),
(38, 10, 0, 'B. While loop'),
(39, 10, 1, 'C. Do-while loop'),
(40, 10, 0, 'D. None of the above'),
(41, 11, 0, 'A. All functions '),
(42, 11, 0, 'B. Constructors'),
(43, 11, 0, 'C. Destructyors'),
(44, 11, 1, 'D. None of the above'),
(45, 12, 1, 'A. In while loop 2'),
(46, 12, 0, 'B. In while loop in while loop 3'),
(47, 12, 0, 'C. In while loop 3'),
(48, 12, 0, 'D. Infinite loop'),
(49, 13, 1, 'A. #define PI 3.14'),
(50, 13, 0, 'B. Char *PI="A";'),
(51, 13, 0, 'C. Float PI=3.14;'),
(52, 13, 0, 'D. None of the above'),
(53, 14, 0, 'A. Float '),
(54, 14, 0, 'B. Long float '),
(55, 14, 1, 'C. Double '),
(56, 14, 0, 'D. All the above'),
(57, 15, 0, 'A. 65'),
(58, 15, 0, 'B. 58'),
(59, 15, 0, 'C. 64'),
(60, 15, 1, 'D. 59'),
(61, 16, 0, 'A. Prints the number that was entered'),
(62, 16, 0, 'B. Segmentation fault'),
(63, 16, 1, 'C. Nothing'),
(64, 16, 0, 'D. Varies'),
(65, 17, 0, 'A. 1 works, 2 doesn''t '),
(66, 17, 0, 'B. 2 works 1 doesn''t'),
(67, 17, 0, 'C. Both of them work'),
(68, 17, 1, 'D. Neither of them works'),
(69, 18, 1, 'A. It is stpred in the CPU'),
(70, 18, 0, 'B. It is stored in the cache memory'),
(71, 18, 0, 'C. It is stored in the main memory'),
(72, 18, 0, 'D. It is stored in the secondary mmory'),
(73, 19, 1, 'A. 0'),
(74, 19, 0, 'B. 10'),
(75, 19, 0, 'C. Depends on the compiler'),
(76, 19, 0, 'D. Depends on the language standard'),
(77, 20, 0, 'A. Sizeof(structstemp*)>sizeof(union utemp*)>sizeof(char *)'),
(78, 20, 0, 'B. Sizeof(structstemp*)<sizeof(union utemp*)<sizeof(char *)'),
(79, 20, 1, 'C. Sizeof(structstemp*)=sizeof(union utemp*)=sizeof(char *)'),
(80, 20, 0, 'D. The order depends on the compiler'),
(81, 21, 0, 'A. File is the keyword in c for representating files and fp is a variable of the file'),
(82, 21, 1, 'B. File is the structure and fp is the pointer to the structure of the file typ'),
(83, 21, 0, 'C. File is the stream '),
(84, 21, 0, 'D. File is buffered system'),
(85, 22, 1, 'A. Both i) and iii) are valid'),
(86, 22, 0, 'B. Only i) is valid'),
(87, 22, 0, 'C. i) and ii) are valid'),
(88, 22, 0, 'D. All are valid'),
(89, 23, 0, 'A. When a resource shared amoung multiple consumers '),
(90, 23, 0, 'B. When data is transfered asynchronously (data not necessarily recieved at the same rate as sent ) between the two processor'),
(91, 23, 0, 'C. Load balancing'),
(92, 23, 1, 'D. All the above'),
(93, 24, 1, 'A. Void *'),
(94, 24, 0, 'B. Pointer of allocated memory type'),
(95, 24, 0, 'C. Void ** '),
(96, 24, 0, 'D. Int*'),
(97, 25, 0, 'A. Compiler error: free cannot be applied on null pointer '),
(98, 25, 1, 'B. Memory leak'),
(99, 25, 0, 'C. Dangling pointer'),
(100, 25, 0, 'D. The program may crash as free() is called null p[ointer'),
(101, 26, 1, 'A. Dynamic memory allocation '),
(102, 26, 0, 'B. Static memory allocation'),
(103, 26, 0, 'C. Both dynamic and static memory allocation'),
(104, 26, 0, 'D. None of the above'),
(105, 27, 0, 'A. References can not be null'),
(106, 27, 0, 'B. A references must be initialised when it is declared'),
(107, 27, 0, 'C. once a reference is created , it can not be later made to reference another object it can not be reset'),
(108, 27, 1, 'D. References can not refer to constant value'),
(109, 28, 0, 'A. 1'),
(110, 28, 1, 'B. 3'),
(111, 28, 0, 'C. Garbage value'),
(112, 28, 0, 'D. Compile time error'),
(113, 29, 0, 'A. Fopr every type T, there can be any array of T'),
(114, 29, 1, 'B. For every type T expect void and function type there can be an array of T'),
(115, 29, 0, 'C. When an array is passed to a function, c compiler creates a copy of array'),
(116, 29, 0, 'D. 2D arrays are stored in colomn major form'),
(117, 30, 0, 'A. 1 is followed by 4 garbage values'),
(118, 30, 1, 'B. 10000'),
(119, 30, 0, 'C. 11111'),
(120, 30, 0, 'D. 00000');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `usn_no` varchar(90) NOT NULL,
  `mark` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`usn_no`, `mark`) VALUES
('1bo15is050', 0),
('njk', 8);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(12) NOT NULL,
  `text` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'what is the output of the following questions?<br>\r\nVoid main()<br>\r\n{<br>\r\nint x=4,y=3,z;<br>\r\nz=x-- -y;<br>\r\nprintf("%d%d%d",x,y,z);<br>\r\n}<br>'),
(2, 'observe the following \nmain()\n{\nchar c;\nfor(c=''A'';c<=''z'';c++)\ngetch();\n}'),
(3, 'identify the valid constant used in fseek() function ''whence'' reference.'),
(4, 'function are useful in program because.'),
(5, 'which statement is a correct ststement?(correct means no error or warnings are generated)'),
(6, 'among the following which is not vaild c identifer?'),
(7, 'which of the following is the false statement regarding the recursive function?'),
(8, 'in  the context of the computer science, a library is '),
(9, 'write the output of the program<br>\r\nvoid fun()<br>\r\n{<br>\r\nstatic int i= 10;<br>\r\nprintf("%d",++i);<br>\r\n}<br>\r\nint main()<br>\r\n{<br>\r\nfun();<br>\r\nfun();<br>\r\n}\r\n'),
(10, 'which loop is best suited for "first perform and then test the operation"process?'),
(11, '_____ have the return type void?'),
(12, 'what is the output of the following questions?<br>\r\n#include< stdio.h ><br>\r\nint main()<br>\r\n{<br>\r\nint i=0;<br>\r\ndo<br>\r\n{<br>\r\ni++;<br>\r\nif(i==2)<br>\r\ncontinue'';<br>\r\nprintf("%d\\n",i);<br>\r\n}'),
(13, 'for which of the following ,"PI++;" code will fail?'),
(14, '%f is used to display'),
(15, 'what is the output of this code<br>\r\n#include< stdio.h ><br>\r\nvoid main()<br>\r\n{<br>\r\nchar a=''A'';<br>\r\nchar b=''B'';<br>\r\nint c=a+b%3-3*2;<br>\r\nprintf("%d/n",c);<br>\r\n}'),
(16, 'what is the output of the following code?<br>\r\n#include< stdio.h ><br>\r\nvoid main()<br>\r\n{<br>\r\nint n;<br>\r\nscanf("%d",n);<br>\r\nprintf("%d",n);<br>\r\n}'),
(17, 'comment on the following two operations?<br>\r\nInt*a[]={{1,2,3},{1,2,3,4}};//-1<br>\r\nint b[][]={{1,2,3},{1,2,3,4,}};//-2<br>'),
(18, 'when the compiler accepts the request to use the variable as a register?'),
(19, 'what is the final value of j in the below code?<br>\r\n#include< stdio.h ><br>\r\nint main()<br>\r\n{<br>\r\nint i=0,j=0;<br>\r\nif(i&&(j=i+10))<br>\r\n}\r\n'),
(20, 'which among the following is right?'),
(21, 'which of the following is true about file*fp'),
(22, 'consider the following variable declarations and defitions in c<br>\r\ni)int var_9=1;<br>\r\nii)int 9_var=2;<br>\r\niii)int_=3;<br>\r\nchoose the correct statement w.r.t above variables'),
(23, 'which one of the following is an application of queue data structure?'),
(24, 'what is the return type of malloc()or calloc()'),
(25, 'what is the output of the following ciode?<br>\r\n#include< stdio.h ><br>\r\nint main()<br>\r\n{<br>\r\nint*p=(int*)malloc(size of(int));<br>\r\np=null;<br>\r\nfree(p);<br>\r\n}'),
(26, 'we use malloc and calloc for?'),
(27, 'which of the following is false about references in C++?'),
(28, 'what is the output of the following code?<br>\r\n#include< stdio.h ><br>\r\nint main()<br>\r\n{<br>\r\nint i=1,2,3;<br>\r\nprintf("&d",i);<br>\r\nreturn 0;<br>\r\n}'),
(29, 'which of the following is trueabout the array in c '),
(30, 'write the output of the code?\r\n#include< stdio.h ><br>\r\nint main()<br>\r\n{<br>\r\nint I;<br>\r\nint arr[5]=[1];<br>\r\nfor(i=0;i<5;i++)<br>\r\nprintf("%d",arr[i]);<br>\r\nreturn 0;<br>\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `usn` varchar(90) NOT NULL,
  `name` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`usn`, `name`) VALUES
('1bo15is050', 'sayed Mortaza'),
('njk', 'sayed Mortaza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_number` (`question_number`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`usn_no`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_number` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `choices`
--
ALTER TABLE `choices`
  ADD CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_number`) REFERENCES `questions` (`question_number`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`usn_no`) REFERENCES `signin` (`usn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
