<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thuy Duong</title>
	<!-- Font awesome -->
	<link rel="stylesheet" href="assets/vendors/font-awesome-4.7.0/css/font-awesome.min.css">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

	<!-- Main stylesheet -->
	<link rel="stylesheet" href="public/css/style-aboutme.css">
</head>
<body>
	<!--main-->
	<div class="wrapper flex">
		<div class="sidebar">
			<div class="avatar" id="name">
                <!-- Anh avatar, ten , job -->
				<img src="public/img/ava.png" width="300" height="300">
				<h1 class="name">Lê Thị Thùy Dương</h1>
				<h4 class="job">Data Analyst/Business Intelligence</h4>
			</div><!--End-->
            <!-- Education -->
			<div class="module" id="education">
				<h3>Education</h3>
				<p><b>VNUHCM - University of Science</b><br>Information System</p>
			</div><!--End education-->
            <!-- Contact -->
			<div class="module" id="contact">
				<h3>Contact Me</h3>
					<ul>
						<li>
							<b>Address: </b>Ho Chi Minh City, VietNam
						</li>
                        <li >
							<b>Phone: </b>09663203310
						</li>
						<li>
							<b>Gmail: </b>thuyduong.lethi5031@gmail.com
						</li>
                        <li>
						<b>Github: </b><a href="https://github.com/syo2000">github.com/syo2000</a>
						</li>
						<li>
						<b>Website: </b><a href="https://syo2000.github.io/">syo2000.github.io</a>
						</li>
						<li>
							<b>Linkedin: </b><a href="https://linkedin.com/in/thuyduong5031/">linkedin.com/in/thuyduong5031/</a>
						</li>
					</ul>
			</div><!--End contact-->
			<!--Skill-->
			<div class="module" id="skill">
				<h3>My Skills</h3>
					<ul>
						<li>
                            <b>Programming:</b><br> Python, HTML/CSS/Bootstrap/JS, C++
						</li>
                        <li>
                            <b>Data:</b><br> MS SQL, Oracle, MySQL, Neo4j, MongoDB
						</li>
                        <li>
                            <b>Tools:</b><br> Power BI, Figma
						</li>
                        <li>
                            <b>Others:</b><br> 
                            Data Mining,
                            Data Visualization, 
                            Data Model,
                            Database,
                            EDA data, 
                            ETL data,
							Machine learning,
                            DataWarehouse/DataMart/OLAP Cube,
                            Statistics and probability, 
                            Communicate,
                            Read english
						</li>
					</ul>
			</div><!--End skill-->	
		</div>
		<!--about, project, cer-->
		<div class="content">
			<!--about-->
			<div id="about-me">
				<h1 class="font">About</h1>
				<p>I am a graduate student majoring in Information Systems at VNUHCM - University of Science. 
					Currently I am studying and learning in the field of data. 
					The direction that I am aiming to become is a Business Intelligence Engineer and Data Analyst. 
				</p>
			</div><!--end about-->
			<!--Project-->	
			<div id="project">	
				<h1>Project</h1>
				<!--project 1-->
				<h3>Python RFM K MEAN</h3>
				<div class="module__meta">
					<span>Data Analyst</span>
					<span>2021</span>
				</div>
				<p>- The data used is Microsoft's AdventureWord 2012 dataset.<br>
					- Collect data and learn to serve the purpose of classification to find potential customers.<br>
					- Data preparation includes the process of removing, transforming and processing data (missing values, outliers, normalizing data).<br>
					- Build K Mean algorithm to collect customer clusters from which to find a group of potential customers that need attention.<br>
					- Technologies used: Python, MS SQL.<br>		
				</p>
				<a href="https://github.com/syo2000/RFM_K-MEAN_Adventurework_2012_with_Python">See here</a>
				<!--project 2-->	
				<h3>Business Intelligence</h3>
				<div class="module__meta">
					<span>Business Intelligence</span>
					<span>2021</span>
				</div>
				<p>- Data set used UK Accident.<br>
					- Data Modeling Design.<br>
					- ETL to store data into DataWarehouse.<br>
					- Build the Olap Cube for analytical purposes.<br>
					- Query on Olap Cube.<br>
					- EDA data with Power BI to gain insights into datasets. Create Dashboards and Reports.<br>
					- Build Data mining to better serve the decision.<br>
					- Technologies used: Visual Studio, MS SQL, Power BI.<br>
				</p>
				<!--project 3-->
				<h3>Power BI Analysis And Visualization</h3>
				<div class="module__meta">
					<span>Data Analyst</span>
					<span>2021</span>
				</div>				
				<p>- The data used is Microsoft's AdventureWord 2012 dataset.<br>
					- Understanding data.<br>
					- Cleaning data.<br>
					- Transform data.<br>
					- Visualization.
				</p>	
				<a href="https://github.com/syo2000/AdventureWorks2019_Analysis_and_Visualization_with_PowerBI">See here</a>		
			</div><!--end project-->
			<!--cer-->
			<div id="cer">	
				<h1>Certifications</h1>
				<div>
					<span><b>SQL (Intermediate)</b></span>
					<span>HackerRank</span>
				</div>
				<div>
					<span><b>IBM Data Science Professional Certificate</b></span>
					<span>IBM</span>
				</div>
				<div>
					<span><b>IBM Data Analyst Professional Certificate</b></span>
					<span>IBM</span>
				</div>
				<div>
					<span><b>Data Analyst with Python</b></span>
					<span>DataCamp</span>
				</div>
				<div>
					<span><b>Data Analyst with MS SQL</b></span>
					<span>DataCamp</span>
				</div>
			</div> <!--end cer--> 			
		</div><!-- end about, project, cer-->
	</div><!--end main-->
</body>
</html>