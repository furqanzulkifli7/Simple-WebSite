
<?php  
	session_start();  // SESSION START
		if (!isset($_SESSION["sess_user"])) 
			{
				header("Location:/cpt_211_ass_2/index.php");
			}
		else
			{
?>

<!doctype html>

<html>
	<head>
	<meta charset="utf-8">
	<title>System Analysis and Design</title>
	
	<link rel="stylesheet" type="text/css" href="assets/style.css"> <!-- CSS LINK !-->
	<script type="text/javascript" src="assets/jquery-3.4.1.js" ></script>  <!-- JQUERY LINK !-->
	<script src="assets/js.js"></script>  <!-- JAVA SCRIPT LINK !-->
		
	</head>

	<body>
				<!-- HEADER CLASS !-->
			<div class="header">
				<h1>SYSTEM ANALYSIS AND DESIGN</h1>
			</div>
				
				<!-- NAVIGATION BAR !-->
			<div id="menu-bar">
				<ul>
				  <li><a href="#intro">HOME</a></li>
				  <li><a href="#chapter_1">CHAPTER 1</a></li>
				  <li><a href="#chapter_2">CHAPTER 2</a></li>
				  <li><a href="#chapter_3">CHAPTER 3</a></li>
				  <li><a href="#editor">EDITOR</a></li>
				  <li class="menu-logout" style="float: right"><a href="/cpt_211_ass_2/logout.php">log out</a></li>
					<li class="menu-user" style="float: right;"><?=$_SESSION['sess_user'];?></li>
				</ul>
			</div>
			
				<!-- FIXED NAV BAR !-->
		
			<script>
				
				const nav = document.querySelector('#menu-bar');
				const navTop = nav.offsetTop;
				
				function stickyNavigation() {
					if (window.scrollY >= navTop) {
						document.body.classList.add('menu-sticky');
					} 
					else {
						document.body.classList.remove('menu-sticky');
					}
				}
				
				window.addEventListener('scroll', stickyNavigation);
				
			</script>

				<!-- INTRODUCTION CLASS !-->
			<div id="intro">
				<div class="intro">
					<h2>introduction</h2>

					<h3>Learning Outcome</h3>

					<ul>
						<li>Define basic concept of system development and unified process. <strong>(Cognitive)</strong></li>
						<li>Identify disciplines in requirement analysis and design phases including modeling using Unified Modeling Language (UML) notation. <strong>(Critical Thinking and Problem solving,Psychomotor)</strong></li>
						<li>Employ the disciplines in system implementation, testing and deployment. <strong>(Teamwork,Affective)</strong></li>
						<li>Propose and report their application system development through 3 main phases of system development (planning, analysis, and design including the databases and graphical user interface) - <strong>(Communication Skills, Affective)</strong></li>
					</ul>

					<h3>Synopsis</h3>

					<table>
						<tr>
							<td>
								<p>
									This course will explain the discipline in three main phases of system life cycle, which areplanning, analysis and design. Introduction of the course covers the understanding of system analyst tasks, object-oriented development, unified process, project management and inception phase. The focus will be given towards the needed disciplines as the best practices in both analysis and design of a system development.
									The modeling needs to be learned in analysis phase include use case and domain class. For design phase, the topics cover activities and design environment, how to realize use case and design of database and user interface, system interface, including controls and security of software system developed.
								</p>
							</td>

							<td>
								&nbsp;&nbsp;
							</td>

							<td>
								<p>
									Kursus ini menghuraikan disiplin kitar hayat sistem dalam 3 fasa utama iaitu perancangan,analisis, dan rekabentuk. Pengenalan kursus ini merangkumi pemahaman tugas penganalisis sistem, pembangunan berorientasikan objek, proses bersatu, pergurusan projek, dan fasa mula. Focus diberi kearah disiplin yang diperlukan sebagai amalan terbaik, dalam analisis dan rekabentuk pembangunan sistem.
									Pemodelan yang perlu dipelajari dalam fasa analisis termasuklah kes guna dalam kelas domain. Bagi fasa rekabentuk, tajuk-tajuk merangkumi kegiatan dan persekitaran rekabentuk, bagaimana merealisasikan kes guna dan rekabentuk pangkalan data dan antaramuka pengguna, antaramuka sistem termasuk kawalan dan keselamatan perisian yang dibangunkan.
								</p>
							</td>
						</tr>
					</table>
				</div>
			</div>

		<!-- CHAPTER 1 CLASS !-->
			<div id="chapter_1">
				<div class="chapter_1">

					<h2>chapter 1</h2>

					<h3>Information System Strategic Plan</h3>

						<ul>
							<li><strong>Technology architecture</strong> - set of computing hardware, networking hardware and topology and system software employed by organization</li>
							<li><strong>Application architecture</strong> - Information system that support the organization</li>
						</ul>

					<h3>System Analysis Activity</h3>
							
						<!-- TABLE FOR SYSTEM ANALYSIS !-->
						<table>
							<tr>
								<td width="300" align="center">Gather Details Information</td>
								<td width="550">
									<ul>
										<li>Interviews</li>
										<li>Questionnaires</li>
										<li>Documents</li>
										<li>Observing Business Processes</li>
										<li>Researching vendores</li>
									</ul>
								</td>
							</tr>

							<tr>
								<td align="center">Define Requirement</td>
								<td>
									<ul>
										<li><strong>Functional</strong> - activity the system must perform</li>
										<li><strong>Non-functional</strong> - other system character, refer FURPS</li>
									</ul>

									<p><strong>&nbsp;&nbsp;FRUPS</strong></p>
									<ul>
										<li><strong>F</strong> unctional Requirement</li>
										<li><strong>R</strong> sability Requirement</li>
										<li><strong>U</strong> eliability Requirement</li>
										<li><strong>P</strong> erformance Requirement</li>
										<li><strong>S</strong> ecurity Requirement</li>
									</ul>

								</td>
							</tr>

							<tr>
								<td align="center">Prioritize Requirement</td>
								<td>
									<ul>
										<li>To establish which requirements are most crucial for the system</li>
										<li>To know what is absolutely required</li>
										<li>Determine the number, composition, and ordering of project iterations</li>
									</ul>
								</td>
							</tr>

							<tr>
								<td align="center">Develop User Interface Dialog</td>
								<td>
									<ul>
										<li>Flow of interaction</li>
										<li>a powerful method of eliciting and documenting requirements</li>
									</ul>
								</td>
							</tr>

							<tr>
								<td align="center">Evaluate Requirement With User</td>
								<td>
									<ul>
										<li>Activities of evaluating requirements with users and documenting the requirements are fully integrated</li>
									</ul>
								</td>
							</tr>
						</table>

					<h3>Stakeholder</h3>

						<ul>
							<li>Person who interest in the successful implementation of the system</li>
							<li>Also known as actor</li>
						</ul>

						<!-- STAKEHOLDER TABLE !-->
					<table>
						<tr>
							<td><strong>&nbsp;Type of Stakeholder</strong>

								<ul>
									<li><strong>Internal</strong> - person in organization</li>
									<li><strong>External</strong> - person out of organization</li>
									<li><strong>Operational</strong> - person who regularly interact with system</li>
									<li><strong>Executive</strong> - person who directly not interact but use the info for financial interest</li>
								</ul>

							</td>

							<td>
								<img src="assets/pic/stakeholder_1.png" alt="stakeholder" width="700" height="360" >
							</td>

						</tr>
					</table>

					<h3>Model & Modelling</h3>

						<ul>
							<li>Representation of some aspect of the system that being built</li>
						</ul>

					<h4>Type of Model</h4>

						<ul>
							<li>Textual Model</li>
							<li>Graphical Model</li>
							<li>Mathematical Model</li>
						</ul>

					<h4>Uses of Models</h4>

						<ul>
							<li>Learning</li>
							<li>Reducing complexity</li>
							<li>Remember detail</li>
							<li>Communicationg with development team and variety of user and stakeholder</li>
							<li>Documenting</li>
						</ul>

				</div>
			</div>
		
			<!-- CHAPTER 2 CLASS !-->
			<div id="chapter_2">
				<div class="chapter_2">
					<h2>chapter 2</h2>

					<h3>Use Case</h3>
						<ul>
							<li>An activity that the system performs, usually in response to a request by a user</li>
							<li>Define as Functional Requirements</li>
							<li>Analysts decompose the system into a set of use cases (Functional decomposition)</li>
						</ul>

					<h4>Techniques for Identifying Use Cases</h4>
							
					<!-- TECHNIQUE TABLE !-->
						<table>
							<tr>
								<td width="350" align="center">User Goal Technique</td>
								<td width="680">
									<ul>
										<li>Most common technique in the industry</li>
										<li>It is simple and effective and identify all of the potential categories <br>of users</li>
									</ul>

									<p><strong>&nbsp;&nbsp;Steps</strong></p>
										<ol>
											<li>Identify all the potential users for the new system</li>
											<li>Classify the potential users in terms of their functional role (e.g., shipping, marketing, sales)</li>
											<li>Further classify potential users by organizational level (e.g., operational, management, executive)</li>
											<li>For each type of user, interview them to find a list of specific goals they will have when using the new system (current goals and innovative functions to add value)</li>
											<li>Create a list of preliminary use cases organized by type of user</li>
											<li>Look for duplicates with similar use case names and resolve inconsistencies</li>
											<li>Identify where different types of users need the same use cases</li>
											<li>Review the completed list with each type of user and then with <br> interested stakeholders</li>
										</ol>
								</td>
								<td>
									<img src="assets/pic/useCase_1.png" alt="useCase1" width="650" height="300" >
								</td>
							</tr>

							<tr>
								<td align="center">Event Decomposition Technique</td>

								<td>
									<br>
									<p><strong>&nbsp;&nbsp;Event</strong> -  Something that occurs at a specific time and place </p>

									<br>

									<p><strong>&nbsp;&nbsp;Type of Event</strong></p>
										<ul>
											<li><strong>External Event</strong> - An event that occurs outside the system, <br> usually initiated by an external agent or actor</li>
											<li><strong>Temporal Event</strong> -  An event that occurs as a result of reaching a point <br> in time</li>
											<li><strong>State Event</strong> - An event that occurs when something happens inside <br> the system that triggers some process</li>
										</ul>

									<p><strong>&nbsp;&nbsp;Steps</strong></p>
										<ol>
											<li>Consider the external events in the system environment that require a response from the system by using the checklist </li>
											<li>For each external event, identify and name the use case that the system requires</li>
											<li>Consider the temporal events that require a response from the system by using the checklist</li>
											<li>For each temporal event, identify and name the use case that the system requires and then establish the point of time that will trigger the use case</li>
											<li>Consider the state events that the system might respond to, particularly if it is a real-time system in which devices or internal state changes trigger use cases</li>
											<li>For each state event, identify and name the use case that the system requires and then define the state change</li>
											<li>When events and use cases are defined, check to see if they are required by using the perfect technology assumption. Do not include events that involve such system controls as login, logout, change password, and backup or restore the database, as these are put in later</li>
										</ol>
								</td>

								<td>
									<img src="assets/pic/usecase_2.png" alt="useCase2" width="650" height="560" >
								</td>
							</tr>
						</table>

					<h4>Use Case Diagram</h4>
							
					<!-- USE CASE TABLE !-->
						<table>
							<tr>
								<td>
									<ul>
										<li>Use case diagram is a UML model used to graphically show uses cases and their relationships to actors</li>
										<li>Automation boundary is the boundary between the computerized portion of the application and the users who operate the application</li>
										<li>An actor is always outside the automation boundary of the system but may be part of the manual portion of the system</li>
										<li>A simple stick figure is used to represent actor</li>
										<li>The stick figure is given a name that characterizes the role the actor is playing</li>
										<li>The use case itself is represented by an oval with the name of the use case inside</li>
										<li>The connecting line between the actor and the use case indicates that the actor is involved with that use case</li>
										<li>the automation boundary, which defines the border between the computerized portion of the application and the people operating the application, is shown as a rectangle containing the use case</li>
										<li>The actor’s communication with the use case crosses the automation boundary</li>
									</ul>
								</td>

								<td>
									<img src="assets/pic/useCase_3.png" alt="useCase3" width="650" height="340" >
								</td>
							</tr>

							<tr>
								<td>
									<ul>
										<li>Example Use Case Diagram in RMO</li>
										<li><a href="https://www.youtube.com/watch?v=UzprPX82Nac" target="_blank"> Example in youtube Basic Use Case Diagram (Click To View)</a> </li>
									</ul>
								</td>

								<td>
									<img src="assets/pic/useCase_4.png" alt="useCase4" width="650" height="580" >
								</td>
							</tr>

							<tr>
								<td>
									<p><strong>&nbsp;&nbsp;Include Relationship</strong></p>
										<ul>
											<li>A relationship between use cases in which one use case is stereotypically included within the other <br> use case.</li>
										</ul>
								</td>

								<td>
									<img src="assets/pic/useCase_5.png" alt="useCase5" width="650" height="400" >
								</td>
							</tr>
						</table>
				</div>
			</div>
		
		<!-- CHAPTER 3 CLASS !-->
			<div id="chapter_3">
				<div class="chapter_3">
					<h2>chapter 3</h2>


					<h3>Activity Diagram</h3>
						<ul>
							<li>Describes user (or system) activities, the person who does each activity, and the sequential flow of these activities</li>
						</ul>

					<h4>Purpose of Activity Diagram</h4>
						<ul>
							<li>Draw the activity flow of a system</li>
							<li>Describe the sequence from one activity to another</li>
							<li>Describe the parallel, branched and concurrent flow of the system.</li>
						</ul>

					<h4>Uses of Activity Diagram</h4>
						<ul>
							<li>Modeling work flow by using activities</li>
							<li>Modeling business requirements</li>
							<li>High level understanding of the system's functionalities</li>
							<li>Investigating business requirements at a later stage</li>
						</ul>

					<h4>Basic Symbol of Activity Diagram</h4>

						<table>
							<tr>
								<td>
									<ul>
										<li>The ovals represent the individual activities in a workflow</li>
										<li>The connecting arrows represent the sequence between the activities</li>
										<li>The black circles denote the beginning and the ending of the workflow</li>
										<li>The diamond is a decision point at which the flow of the process will either follow one path or another</li>
										<li>The heavy solid line is a <strong>synchronization bar</strong>, which either splits the path into multiple concurrent paths or recombines concurrent paths</li>
										<li>The <strong>swimlane</strong> heading represents an agent who performs the activities</li>
									</ul>
								</td>

								<td>
									<img src="assets/pic/activityDiagram_1.png" alt="activity1" width="650" height="360" >
								</td>
							</tr>

							<tr>
								<td>
									<ul>
										<li>Example Activity Diagram in RMO</li>
									</ul>
								</td>

								<td>
									<img src="assets/pic/activityDiagram_2.png" alt="activity2" width="650" height="700" >
								</td>
							</tr>
						</table>
				</div>
			</div>
		
		<!-- EDITOR CLASS !-->
			<div id="editor">
				<div class="editor">
					<h2>our editor</h2>

					<table>
						<tr align="center">
							<td width="400">
								<img src="assets/pic/userEditor.png" alt="editor1" width="180" height="180" >
							</td>

							<td width="400">
								<img src="assets/pic/userEditor.png" alt="editor2" width="180" height="180" >
							</td>

							<td width="400">
								<img src="assets/pic/userEditor.png" alt="editor3" width="180" height="180" >
							</td>

							<td width="400">
								<img src="assets/pic/userEditor.png" alt="editor4" width="180" height="180" >
							</td>
						</tr>

						<tr>
							<td>
								<p><strong>MUHAMMAD SYAFIQ BIN AHMAD KHAIRI</strong></p>
								<p>23 Years Old</p>
								<p>137115</p>
								<p>syafiq6743@student.usm.my</p>
								<p>Major in Information System Engineering</p>
							</td>

							<td>
								<p><strong>ABDUL AZIZ BIN ABDUL HADI</strong></p>
								<p>23 Years Old</p>
								<p>137029</p>
								<p>abdulaziz21@student.usm.my</p>
								<p>Major in Security</p>
							</td>

							<td>
								<p><strong>BADRUL HISHAM BIN BABJEE</strong></p>
								<p>22 Years Old</p>
								<p>137050</p>
								<p>badrulhisham2471@student.usm.my</p>
								<p>Major in Software Engineering</p>
							</td>

							<td>
								<p><strong>FURQAN BIN ZULKIFLI</strong></p>
								<p>21 Years Old</p>
								<p>137071</p>
								<p>furqanzulkifli@student.usm.my</p>
								<p>Major in Security</p>
							</td>
						</tr>
					</table>
				</div>
			</div>

			<!-- FOOTER CLASS !-->
			<div id="footer">
				<div class="footer">

					<h5>COPYRIGHT &copy; </h5>

				</div>
			</div>
		
	</body>
</html>

<?php
}  
?>
