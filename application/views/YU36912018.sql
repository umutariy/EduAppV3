
CREATE DATABASE YU36912018;



-- Create table Users
CREATE TABLE Users
(
  UserId          INT AUTO_INCREMENT,
  FirstName       VARCHAR(50) NOT NULL,
  LastName        VARCHAR(50) NOT NULL,
  Address         VARCHAR(30) NOT NULL,
  Status			    VARCHAR(30) NOT NULL,
  PhoneNumber     VARCHAR(25) NOT NULL,
  Email           VARCHAR(100) NOT NULL,
  Password        VARCHAR(50) NOT NULL,
  CONSTRAINT PK_Users PRIMARY KEY(UserId)
);

-- Create table Parents
CREATE TABLE Parents
(
  ParentId          INT NOT NULL,
  Occupation        VARCHAR(50) NOT NULL,
  CONSTRAINT PK_Parents PRIMARY KEY(ParentId),
  CONSTRAINT FK_Users FOREIGN KEY(ParentId)
    REFERENCES Users(UserId)
);

-- Create table CLass
CREATE TABLE CLass
(
  CLassId          INT AUTO_INCREMENT,
  CLassName        VARCHAR(50) NOT NULL,
  CONSTRAINT PK_CLass PRIMARY KEY(ClassId)
);

-- Create table Students
CREATE TABLE Students
(
  StudentId       INT NOT NULL,
  CLassId         INT NOT NULL,
  Gender          VARCHAR(30) NOT NULL,
  CONSTRAINT PK_Students PRIMARY KEY(StudentId),
  CONSTRAINT FK_Student_Users FOREIGN KEY(StudentId)
    REFERENCES Users(UserId),
  CONSTRAINT FK_Class FOREIGN KEY(CLassId)
    REFERENCES Class (CLassId)
);

-- Create table Teachers
CREATE TABLE Teachers
(
  TeacherId           INT AUTO_INCREMENT,
  FirstName           VARCHAR(50) NOT NULL,
  LastName            VARCHAR(50) NOT NULL,
  Email               VARCHAR(100) NOT NULL,
  MaritalStatus       VARCHAR(30) NOT NULL,
  CONSTRAINT PK_Teachers PRIMARY KEY(TeacherId)
);

-- Create table Questions
CREATE TABLE Questions
(
  QuestionId        INT AUTO_INCREMENT,
  Title             VARCHAR(50) NOT NULL,
  Subject           VARCHAR(50) NOT NULL, 
  Question          VARCHAR(255) NOT NULL,
  QuestionType      VARCHAR(50) NOT NULL,
  Correct_Answer    VARCHAR(50) NOT NULL,
  ClassId           INT NOT NULL,
  Due_Date          DATETIME  NOT NULL,
  CONSTRAINT PK_Question PRIMARY KEY(QuestionId),
  CONSTRAINT FK_ClassQuestion FOREIGN KEY(ClassId)
    REFERENCES Class(ClassId)
);

-- Create table Possible Answers
CREATE TABLE Answers
(
  AnswerId          INT AUTO_INCREMENT,
  QuestionId        INT NOT NULL, 
  Answer1           VARCHAR(50) NOT NULL,
  Answer2           VARCHAR(50) NOT NULL,
  Answer3           VARCHAR(50) NOT NULL,
  CONSTRAINT PK_Answer PRIMARY KEY(AnswerId),
  CONSTRAINT FK_Question FOREIGN KEY(QuestionId)
    REFERENCES Questions(QuestionId)
);

-- Create table Student_Question
CREATE TABLE Student_Question
(
  SubmissionId          INT AUTO_INCREMENT,
  StudentId             INT NOT NULL,
  QuestionId            INT NOT NULL,
  Date_Submitted        DATETIME NOT NULL,
  CONSTRAINT PK_Submission PRIMARY KEY(SubmissionId),
  CONSTRAINT FK_Students FOREIGN KEY(StudentId)
    REFERENCES Students(StudentId),
  CONSTRAINT FK_StudQuestion FOREIGN KEY(QuestionId)
    REFERENCES Questions(QuestionId)
);

-- Create table Attendance
CREATE TABLE Attendance
(
  AttendanceId            INT AUTO_INCREMENT,
  ParentId                INT NOT NULL,
  TeacherId               INT NOT NULL,
  Attendance_Status       VARCHAR(30) NOT NULL,
  Attendance_Date         DATETIME NOT NULL,
  CONSTRAINT PK_Attendance PRIMARY KEY(AttendanceId),
  CONSTRAINT FK_Parents FOREIGN KEY(ParentId)
    REFERENCES Parents(ParentId),
  CONSTRAINT FK_Teachers FOREIGN KEY(TeacherId)
    REFERENCES Teachers(TeacherId)
);

-- Create table Teacher_Class
CREATE TABLE Teacher_Class
(
  Id				           INT AUTO_INCREMENT,
  CLassId              INT NOT NULL,
  TeacherId            INT NOT NULL,
  Day_of_Teaching      VARCHAR (30) NOT NULL,
  CONSTRAINT PK_Id PRIMARY KEY(Id),
  CONSTRAINT FK_TeacherClass FOREIGN KEY(ClassId)
    REFERENCES Class(ClassId),
  CONSTRAINT FK_ClassTeacher FOREIGN KEY(TeacherId)
    REFERENCES Teachers(TeacherId)
);

-- Create table Messages
CREATE TABLE Messages
(
  MessageId             INT AUTO_INCREMENT,
  Title                 VARCHAR(50) NOT NULL,
  Subject               VARCHAR(50) NOT NULL,
  Message               VARCHAR(255) NOT NULL,
  SenderId_Teacher      INT NOT NULL,
  Receipient_Student    INT NOT NULL,
  Date_Time             timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  CONSTRAINT PK_Messages PRIMARY KEY(MessageId),
  CONSTRAINT FK_Sender FOREIGN KEY(SenderId_Teacher)
    REFERENCES Teachers(TeacherId),
  CONSTRAINT FK_Receipient FOREIGN KEY(Receipient_Student)
    REFERENCES Students(StudentId)
);

