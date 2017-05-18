<%@ Page Title="log in" Language="C#" MasterPageFile="~/MasterPage_form.master" AutoEventWireup="true" CodeFile="form.aspx.cs" Inherits="form" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <h1>COMPLETE THE LIBRARY FORM</h1>

	<div class="container w3layouts agileits" >

		<div class="login w3layouts agileits">
			<h2>Sign In</h2>
			
				<input type="text" Name="Userame" placeholder="Username" required="">
				<input type="password" Name="Password" placeholder="Password" required="">
			
			<ul class="tick w3layouts agileits">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
				</li>
			</ul>
			<div class="send-button w3layouts agileits">
				
					<input type="submit" value="Sign In">
				
			</div>
			<a href="#">Forgot Password?</a>
			<div class="social-icons w3layouts agileits">
				<p style="margin-left: -40px;">- Or Sign In With -</p>
				<div style="margin-right: 50px; padding: 10px;">
					<a href="#"  style="margin-right: 25px;">Facebook</a>
					<a href="#"   style="margin-right: 25px;">Twitter</a>
					<a href="#">Google+</a>
				</div>	
					<div class="clear"> </div>
			</div>
			<div class="clear"></div>
		</div>

	

		<div class="clear"></div>

	</div>
</asp:Content>

