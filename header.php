<script type="text/javascript" src="script.js"></script>
	<nav id="navigation">
		<div class="header">
			<a id="courseview" class="logo" href="http://www.utsc.utoronto.ca/cms/computer-science-1">
				 CSCB20
			</a>
			<div id="navbutton" class="header-right">
				<a href="https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/index.php#home">
					 Home
				</a>
				<a href="https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/index.php#Course Materials">
					 Course Materials
				</a>
				<a href="https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/index.php#Announcements">
					 Announcements
				</a>
				<a href="https://mathlab.utsc.utoronto.ca/cscb20/fokediso/src/index.php#Assignments">
					 Assignment
				</a>
				<a href="https://piazza.com/class/jcpjjp5l4bywd" target="blank_">
					 Piazza
				<a id="loginbutton" class="active"  href="logout.php" onmouseover="changeText('Logout')" onmouseout="changeText(<?php echo "'Login: ".$username."'"; ?>)">
					<?php echo "Login: ".$username; ?>
				</a>
				<!--
				<div id="TANav" style="display: none">
					<a href="#TA">
					 For TA
					</a>
				</div>
				<div id="ProfNav" style="display: none">
					<a href="#Prof">
					 For Prof
					</a>
				</div>
				-->
			</div>
		</div>
	</nav>