<?php
   $permission = array(0, 1, 2);
   include('session.php');
?>
<head>
<title>CSCB20 Winter 2018</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8" />
</head>
<body>
<script type="text/javascript" src="script.js"></script>
<div id="wrapper">
	<?php include('header.php'); ?>
	<div id="main-content">
		<div class="wallpaper">
			<img style="width: 100%; max-height: 300px;" src="wallpaper.png" alt="" />
			<div class="display-middle">
				Introduction to Databases and Web Applications
			</div>
		</div>
		<ul class="flexlist">
			<li class="flexlist-item">
				<div class="card">
					<h2>
						General Information
					</h2>
					<p>
						<span class="strong">
							 Instructor:
						</span>
						 Abbas Attarwala
					</p>
					<p>
						<span class="strong">
							 Email:
						</span>
						<a href="mailto:abbas.attarwala@cs.toronto.edu">
							 abbas.attarwala@cs.toronto.edu
						</a>
					</p>
					<p>
						<span class="strong">
							 Office Hours:
						</span>
						 TBA
					</p>
					<p>
						<span class="strong">
							 Course Website:
						</span>
						<a href="https://portal.utoronto.ca" target="blank_">
							 https://portal.utoronto.ca
						</a>
					</p>
					<p>
						<span class="strong">
							 Discussion forum:
						</span>
						<a href="https://piazza.com/class/jcpjjp5l4bywd" target="blank_">
							 https://piazza.com/class/jcpjjp5l4bywd
						</a>
					</p>
					<p>
						<span class="strong">
							 Markus:
						</span>
						<a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_">
							 https://markus.utsc.utoronto.ca/cscb20w18/
						</a>
					</p>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>
						Overview
					</h2>
					A practical introduction to databases and Web app development. Databases: terminology and applications; creating, querying and updating databases; the entity-relationship model for database design. Web documents and applications: static and interactive documents; Web servers and dynamic server-generated content; Web application development and interface with databases.
				</div>
			</li>
		</ul>
		<div id="student">
		<div class="box">
			<div class="column">
				<h3>
					Prerequisites
				</h3>
				<p>
					Some experience with programming in an imperative language such as Python, Java or C. This course may not be taken after - or concurrently with - any C- or D-level CSC course.
				</p>
			</div>
			<div class="column">
				<h3>
					Resources
				</h3>
				<ul>
					<li>
						<a href="CSCB20CourseSyllabus.pdf">
							 Syllabus
						</a>
					</li>
					<li>
						<a href="http://www.utsc.utoronto.ca/labs/">
							 UTSC Labs
						</a>
					</li>
					<li>
						<a href="https://www.w3schools.com/html/">
							 HTML
						</a>
					</li>
					<li>
						<a href="https://www.w3schools.com/css/">
							 CSS
						</a>
					</li>
					<li>
						<a href="https://www.w3schools.com/js/">
							 JavaScript
						</a>
					</li>
					<li>
						<a href="http://code.tutsplus.com/tutorials/sql-for-beginners--net-8200">
							 MySQL
						</a>
					</li>
				</ul>
			</div>
			<div class="column">
				<h3>
					Mathlab
				</h3>
				<p>
					Use the following address and your UTORid password to access Mathlab:ssh utorid@mathlab.utsc.utoronto.ca
				</p>
			</div>
		</div>
		<!-- Course Materials -->
		<ul class="flexlist">
			<li class="flexlist-header">
				<a name="Course Materials">
				</a>
				<h1>
					Course Materials
				</h1>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>
						Week 1
					</h2>
					<p>
						<span class="strong">
							 Lecter slides:
						</span>
						<a href="B20Week1.pdf">
							 B20Week1
						</a>
						<a href="B20Week2.pdf">
							 B20Week2
						</a>
					</p>
					<p>
						<span class="strong">
							 Readings:
						</span>
					</p>
					<p>
						<a href="http://web.calstatela.edu/library/whatisadatabase.html">
							 What is a database? Very high level introduction to a Database.
						</a>
					</p>
					<p>
						<a href="https://www.w3resource.com/sql/tutorials.php">
							 A basic tutorial on SQL
						</a>
					</p>
					<p>
						<a href=" https://www.w3schools.com/sql/">
							 Basic introduction to SQL
						</a>
					</p>
					<p>
						<a href="https://www.essentialsql.com/what-is-the-difference-between-a-primary-key-and-a-foreign-key/">
							 DIfference between a Primary and a Foreign Key
						</a>
					</p>
					<p>
						Expectations of the course.
					</p>
					<p>
						What is a database?
					</p>
					<p>
						What database technologies and web technologies are covered in this course?
					</p>
					<p>
						SQL and PHP
					</p>
					<p>
						HTML, CSS, JavaScript and JQuery
					</p>
					<p>
						What is a internet?
					</p>
					<p>
						--network of computers and routers.
					</p>
					<p>
						What is a protocol?
					</p>
					<p>
						--We looked at briefly the http protocol and from a very high level understood the request/response workflow.
					</p>
					<p>
						Relation in Database
					</p>
					<p>
						Tuple, record, data row (all mean the same thing). And a collection of these makes up a Relation.
					</p>
					<p>
						Relation Schema (what columns/relation name)
					</p>
					<p>
						Database Schema
					</p>
					<p>
						Foriegn Key and Primary Key
					</p>
					<p>
						<span class="strong">
							 Place to submit:
						</span>
						<a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_">
							 Markus
						</a>
					</p>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>
						Week 2(Relational Algebra)
					</h2>
					<p>
						<span class="strong">
							 Lecter slides:
						</span>
						<a href="cscb20Week2.pdf">
							 another cscb20Week2
						</a>
					</p>
					<p>
						<span class="strong">
							 Readings:
						</span>
					</p>
					<p>
						<a href="http://www.cs.toronto.edu/~faye/343/f07/lectures/wk3/03_RAlgebra.pdf">
							 (some more examples on joins and other operations using relational algebra). I encourage you to read this.
						</a>
					</p>
					<p>
						<a href="http://people.cs.pitt.edu/~chang/156/05algebra.html">
							 http://people.cs.pitt.edu/~chang/156/05algebra.html
						</a>
					</p>
					<p>
						<a href=" https://courses.cs.washington.edu/courses/cse444/10sp/lectures/lecture16.pdf">
							 (some very good examples on the different kinds of join and other operations on relatinal algebra)
						</a>
					</p>
					<p>
						-What is relational algebra?
					</p>
					<p>
						What are the various operations performed on a row(s), column(s) and relation(s)?
					</p>
					<p>
						--Union
					</p>
					<p>
						--Intersection
					</p>
					<p>
						--Difference
					</p>
					<p>
						--Selection
					</p>
					<p>
						--Projection
					</p>
					<p>
						--Cartesian Join
					</p>
					<p>
						--Theta join
					</p>
					<p>
						--Natural join
					</p>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>
						Week 3(Wrapping up Relational Algebra)
					</h2>
					<p>
						<span class="strong">
							 Lecter slides:
						</span>
						<a href="cscb20Week3and4.pdf">
							 cscb20Week3and4
						</a>
						<a href="cscb20Week3.pdf">
							 cscb20Week3
						</a>
					</p>
					<p>
						<span class="strong">
							 Readings:
						</span>
					</p>
					<p>
						<a href="http://www.cs.cornell.edu/projects/btr/bioinformaticsschool/slides/gehrke.pdf">
							 (more appropriate after Week4 lecture. However, I am putting them here if you are interested in getting ahead..
						</a>
					</p>
					<p>
						<a href="https://www.tutorialspoint.com/dbms/relational_algebra.htm">
							 A very gentle introduction on relational algebra.
						</a>
					</p>
					<p>
						Wrapping up Relational Algebra.
					</p>
					<p>
						Starting Week4, we will now get into SQL and MySQL
					</p>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>
						Week 4(SQL)
					</h2>
					<p>
						<span class="strong">
							 Readings:
						</span>
					</p>
					<p>
						<a href=" https://stackoverflow.com/questions/8696383/difference-between-natural-join-and-inner-join">
							 https://stackoverflow.com/questions/8696383/difference-between-natural-join-and-inner-join
						</a>
					</p>
					<p>
						<a href="http://people.cs.pitt.edu/~chang/156/05algebra.html">
							 http://people.cs.pitt.edu/~chang/156/05algebra.html
						</a>
					</p>
					<p>
						<a href="https://stackoverflow.com/questions/1018822/inner-join-on-vs-where-clause">
							 https://stackoverflow.com/questions/1018822/inner-join-on-vs-where-clause
						</a>
					</p>
					<p>
						Please refer to Anna's slides, as mentioned on Piazza.
					</p>
					<p>
						What is SQL?
					</p>
					<p>
						Create a Table
					</p>
					<p>
						Create Data
					</p>
					<p>
						Query for data using SQL
					</p>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>
						Week5 (SQL, JOINS, INNER, OUTER)
					</h2>
					<p>
						<span class="strong">
							 Lecter slides:
						</span>
						<a href="w5.pdf">
							 cscb20Week5
						</a>
					</p>
					<p>
						<span class="strong">
							 Readings:
						</span>
					</p>
					<p>
						<a href="https://expertassignmenthelp.com/mysql-concepts-where-in-having-join-clauses-made-easy-2/">
							 This page has lots of interesting material, however, I strongly recommend studying the picture with the different kinds of joins
						</a>
					</p>
					<p>
						<a href="https://www.w3schools.com/sql/trysql.asp?filename=trysql_select_join_inner">
							 This has some great exercises that you can try online
						</a>
					</p>
					<p>
						More Joins now in SQL
					</p>
					<p>
						Inner Join
					</p>
					<p>
						Natural Join
					</p>
					<p>
						Outer Join
					</p>
					<p>
						Cartesian Join
					</p>
					<p>
						Views in SQL
					</p>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card purple">
					<h2>
						Week7 (HTML and CSS)
					</h2>
					<p>
						<span class="strong">
							 Lecter slides:
						</span>
						<a href="w7.pdf">
							 cscb20Week7
						</a>
					</p>
					<p>
						<span class="strong">
							 InClassCode: Make sure to download these files on your computer first.
						</span>
					</p>
					<p>
						Put all the files in a common directory.
					</p>
					<p>
						Then open the file bcard.html in your browser.
					</p>
					<p>
						<a href="bcard.html ">
							 bcard.html
						</a>
					</p>
					<p>
						<a href="bcard.css ">
							 bcard.css
						</a>
					</p>
					<p>
						<a href="uoft.png ">
							 uoft.png
						</a>
					</p>
					<p>
						What is HTML?
					</p>
					<p>
						What is CSS?
					</p>
					<p>
						What is JavaScript?
					</p>
					<p>
						BusinessCard in HTML and CSS. (see code attached).
					</p>
					<p>
						Basic Debugging within Google Chrome Browser
					</p>
				</div>
			</li>
		</ul>
		
		<!--Announcements -->
		<ul class="flexlist">
			<li class="flexlist-header">
				<a name="Announcements">
				</a>
				<h1>
					Announcements
				</h1>
			</li>
			<li class="flexlist-item">
				<div class="card teal">
					<h2>
						Another great example of user stories.
					</h2>
					<p>
						<span class="strong">
							 Posted on:
						</span>
						 Wednesday, March 7, 2018 12:07:37 PM EST
					</p>
					<p>
						<span class="strong">
							 Here is another example of user stories, that I think you will find useful:
						</span>
					</p>
					<p>
						<a href="https://westborosystems.com/2010/02/user-story-examples/" target="blank_">
							 https://westborosystems.com/2010/02/user-story-examples/
						</a>
					</p>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>
						TA Office Hours
					</h2>
					<p>
						<span class="strong">
							 Posted on:
						</span>
						 Monday, March 5, 2018 11:19:28 PM EST
					</p>
					<p>
						Hello Everyone,
					</p>
					<p>
						Here are some office hours by TA for this week
					</p>
					<br />
					<p>
						Nagarjun - Tuesday 9am - 12pm @ IC404
					</p>
					<p>
						Zhongyang - Friday 1pm - 4pm @ IC404
					</p>
					<p>
						Syeda - Thursday 11am-12pm &amp; Friday 3pm to 5pm @ IC404
					</p>
					<p>
						 
					</p>
				</div>
			</li>
		</ul>
		<!--assignment -->
		<ul class="flexlist">
			<li class="flexlist-header">
				<a name="Assignments">
				</a>
				<h1>
					Assignments, Labs &amp; In-Class problems sets
				</h1>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>
						Assignment 1
					</h2>
					<p>
						<span class="strong">
							 Due date:
						</span>
						 9th February, 11:59pm on MarkUs
					</p>
					<p>
						<span class="strong">
							 File:
						</span>
						<a href="CSCB20Assignment1.pdf">
							 assignment1
						</a>
					</p>
					<p>
						<span class="strong">
							 Place to submit:
						</span>
						<a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_">
							 Markus
						</a>
					</p>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card purple">
					<h2>
						Assignment 2
					</h2>
					<p>
						<span class="strong">
							 Due date:
						</span>
						 11th March @ 11:59pm
					</p>
					<p>
						<span class="strong">
							 File:
						</span>
						<a href="CSCB20Assignment2.pdf">
							 assignment2
						</a>
					</p>
					<p>
						<span class="strong">
							 Place to submit:
						</span>
						<a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_">
							 Markus
						</a>
					</p>
					<br />
					<p>
						<span class="strong">
							 You do not have to make your website work for mobile devices. This is optional and not required.
						</span>
					</p>
					<p>
						<span class="strong">
							 We will be asking certain groups to stop by and explain their css and html to us and what it did. We will notify these groups over email.
						</span>
					</p>
				</div>
			</li>
			
			<li class="flexlist-item">
		<div class="card">
			<h2>Labs</h2>
							<p><span class="strong">Week1:</span> <a href="Week 1 Handout.pdf" target="blank_"> handout</a></span> </span> <a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_"> starter code</a></span> </p>
							<p><span class="strong">Week2:</span> <a href="Week 1 Handout.pdf" target="blank_"> handout</a></span> </span> <a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_"> starter code</a></span></p>
							<p><span class="strong">Week3:</span> <a href="Week 1 Handout.pdf" target="blank_"> handout</a></span> </span> <a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_"> starter code</a></span></p>
							<p><span class="strong">Week4:</span> <a href="Week 1 Handout.pdf" target="blank_"> handout</a></span> </span> <a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_"> starter code</a></span></p>
							<p><span class="strong">Week5:</span> <a href="Week 1 Handout.pdf" target="blank_"> handout</a></span> </span> <a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_"> starter code</a></span></p>
							<br/>
		</div>
	</li>
	
	<li class="flexlist-item">
		<div class="card">
			<h2>Inclass problem sets</h2>
			<p><span class="strong">Worksheet1:</span> <a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_"> Worksheet1</a></span> </span> <a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_"> solution</a></span> </p>
			<p><span class="strong">Worksheet2:</span> <a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_"> Worksheet2</a></span> </span> <a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_"> solution</a></span> </p>
			<p><span class="strong">Worksheet3:</span> <a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_"> Worksheet3</a></span> </span> <a href="https://markus.utsc.utoronto.ca/cscb20w18/" target="blank_"> solution</a></span> </p>
			<br/>
			<p><span class="strong">Quiz1:</span> <a href="quiz1Solution.pdf" target="blank_"> solution</a></span>  </p>
			<p><span class="strong">Quiz2:</span> <a href="quiz1Solution.pdf" target="blank_"> solution</a></span>  </p>
		</div>
	</li>
		</ul>
		
	</div>
		<div id="Prof" style="display: none">
		<ul class="flexlist">
			<li class="flexlist-header">
				<a name="Prof"></a>
				<h1>
					For Prof
				</h1>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>Feedback Review</h2>
					<p><a href="https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/feedbackreview.php">Go and have a look!</a></p>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>Course Performance Review (Waiting)</h2>
					<p><a href="https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/profmark.php">Go and have a look!</a></p>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>Remart Request</h2>
					<p><a href="https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/RemarkReq.php">Go and have a look!</a></p>
				</div>
			</li>
		</ul>
		</div>
		
		<div id="TA" style="display: none">
		<ul class="flexlist">
			<li class="flexlist-header">
				<a name="Prof"></a>
				<h1>
					For TA
				</h1>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>Assignment Marking (Waiting)</h2>
					<p><a href="https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/profmark.php">Go and have a look!</a></p>
				</div>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>Remart Request</h2>
					<p><a href="https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/RemarkReq.php">Go and have a look!</a></p>
				</div>
			</li>
		</ul>
		</div>
		
		<div id="Student" style="display: none">
		<div class="box">
			<div class="infocard">
				<p>
					If you have any questions or comments, you can contact us via
					<a href="feedback.html">
						 Anonymous Feedback Tool
					</a>
					 .
				</p>
			</div>
		</div>
		<ul class="flexlist">
			<li class="flexlist-header">
				<a name="Student"></a>
				<h1>
					For Student
				</h1>
			</li>
			<li class="flexlist-item">
				<div class="card">
					<h2>Assignment Mark</h2>
					<p><a href="https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/stumark.php">Go and have a look!</a></p>
				</div>
			</li>
		</ul>
		</div>
	</div>
	
	<?php
		if ($type == 0){
			echo "<script>hideStudent();</script>";
		} else if ($type == 1){
			echo "<script>hideTA();</script>";
		} else if ($type == 2){
			echo "<script>hideProf();</script>";
		}
	?>
</body>
	
</div>

<?php include('footer.php'); ?>
