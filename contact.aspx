<%@ Page Title="contact" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="contact.aspx.cs" Inherits="contact" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    
<div class="wrap">
<div class="main">
	<div class="contact">
		<div class="section group">				
				<div class="col span_1_of_2">
					<div class="contact_info">
			    	 	<h2>Find Us Here</h2>

			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219313.53379909418!2d30.85532713691678!3d30.80897247305942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7c9f3431822c1%3A0xd2a8573e63da4d39!2sFaculty+of+Engineering%2C+Tanta+University!5e0!3m2!1sen!2sus!4v1494688766089" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br><small><a href="https://www.google.com/maps/place/Faculty+of+Engineering,+Tanta+University/@30.8089725,30.8553271,11z/data=!4m8!1m2!2m1!1sengineering+college+tanta+unevrrisity!3m4!1s0x14f7c9f3431822c1:0xd2a8573e63da4d39!8m2!3d30.8255082!4d30.9942697?hl=en" style="color: #575757;text-align:left;font-size:13px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address" style="text-align:left">
				     	<h2>University Address </h2>
				     	
						<p> Sabarbay , Tanta, </p>
						<p> Gharbia Governorate, </p>
						<p>Egypt</p>
						<br>
				   		<p>Phone:+20 40 3453862</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>eng.tanta.edu.eg</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				   <div class="clear"></div>
				</div>				
				<div class="col span_2_of_4">
				  <div class="contact-form">
				  	<h2 class="style">Contact Us</h2>
					       
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit me"></span>
						  </div>
					   
				    </div>
  				</div>		
  			<div class="clear"></div>
		  </div>
	</div>
</div>
</div>
</asp:Content>

