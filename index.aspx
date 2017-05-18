<%@ Page Title="Home" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="index.aspx.cs" Inherits="index" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>

<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <div class="wrap">
	<!------ Slider------------>
		  <div class="slider">
	      	<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider" style="width:995px;height: 552px;">
	                <img src="images/b3.jpg" data-thumb="images/1.jpg" alt="" />
	                <img src="images/b1.jpg" data-thumb="images/2.jpg" alt="" />
	                <img src="images/background.jpg" data-thumb="images/3.jpg" alt="" />
	            </div>
	        </div>
	      </div>
		<!------End Slider ------------>
		<div class="grids_1_of_3">
				<div class="grid_1_of_3 images_1_of_3">
					  <img src="images/icon1.jpg">
					  <h3>Our Reports</h3>
					 
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					  <img src="images/icon2.jpg">
					  <h3>Feedbacks</h3>
					  
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					  <img src="images/icon3.jpg">
					  <h3>Conatact us any time</h3>
					  
				</div>
				<div class="clear"></div>
			</div>
		
</div>
</asp:Content>

<asp:Content ID="Content3" ContentPlaceHolderID="ContentPlaceHolder2" Runat="Server">
    <div class="wrap">
<div class="main">
	<div class="content" >
		<h2 style="font-family: Times; font-size: 30px;"">what our visitor says</h2>
		<h3 style="font-family: Times; font-size: 30px; text-align:center; " >the opinions of our visitor</h3>
		<p><a href="details.html"><img src="images/pic1.jpg"></a>
		<div style="text-align:left; ">
		<div>
		 About three in ten (31%) of library patrons say they visit to read or check out printed magazines.<br>
         Some 23% of library patrons  say they visit to attend a meeting of a group to which they belong.<br>
         About 46% of those who visited a library say they visit to use a research databas.<br>
         Some 49% of those who visited a library say they visit just to read, and study, or listen to media.
		</div>
		<br>
		<div style="color:#e1184a; ">they also recommend the library system and say: </div> "We are pleased to visit this library because of the organization and the availability of all the books that we need and many sources from which we choose information such as Wi-Fi, newspapers and scientific articles,we want to visit many times next to take advantage of what it contains and to have access to information".
		</div>
		</p>
		<div class="clear"></div>
	</div>
</div>
    </div>
</asp:Content>

<asp:Content ID="Content4" ContentPlaceHolderID="ContentPlaceHolder3" Runat="Server">
    <div class="wrap">
		 <div class="main">
					<div class="gallery">
						<h3 style="margin-right: 200px;">Our latest Books</h3>
						<ul  style="width: 450px;height: 450px; margin-left: 10px;">
							<li><a href="images/c1.jpg"><img src="images/c1.jpg" alt=""></a><a href="#"></a></li>
							<li><a href="images/c2.jpg"><img src="images/c2.jpg" alt=""></a><a href="#"></a></li>
							<li><a href="images/c3.jpg"><img src="images/c3.jpg" alt=""></a><a href="#"></a></li>
							<li><a href="images/c6jpg"><img src="images/c6.jpg" alt=""></a><a href="#"></a></li>
							<li><a href="images/c4.jpg"><img src="images/c4.jpg" alt=""></a><a href="#"></a></li>
							<li><a href="images/c8.jpg"><img src="images/c8.jpg" alt=""></a><a href="#"></a></li>
							<li><a href="images/c7.jpg"><img src="images/c7.jpg" alt=""></a><a href="#"></a></li>
							<li><a href="images/c5.jpg"><img src="images/c5.jpg" alt=""></a><a href="#"></a></li>
						</ul>
					</div>
					<script type="text/javascript" src="js/jquery.lightbox.js"></script>
				    <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
				  	<script type="text/javascript">
				  	    $(function () {
				  	        $('.gallery a').lightBox();
				  	    });
				    </script>
					<div class="terminals" style="text-align:center; ">
						<h3>Some Names of Our Latest Books</h3>
						<p style="font-size: 17px;">The other side of impossible.<br> </p>
						<p style="font-size: 17px;">North Haven. <br></p>
						<p style="font-size: 17px;">Good Night Stories For Rebel Girls.</p>
						<p style="font-size: 17px;">What Do I Do That?.</p>
						<p style="font-size: 17px;">The Wonderful Things You Will Be.  </p>
						<p style="font-size: 17px;">Water For Elephants.</p>
						
					</div>
					<div class="clear"> </div>
		</div>
	</div>
</asp:Content>

