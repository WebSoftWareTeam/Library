<%@ Page Title="Register book" Language="C#" MasterPageFile="~/MasterPage_form.master" AutoEventWireup="true" CodeFile="form11.aspx.cs" Inherits="form11" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    	
<h1 style="color: white; font-family:Times;">Insert Books to the library</h1>

	<div class="container w3layouts agileits">

	
		<div class="register w3layouts agileits">

			<h2  style="color: #e1184a;"">Register</h2>
			
				<input type="text" Name="Book ID" placeholder="Book ID" required="">
				<input type="text" Name="Book Title" placeholder="Book Title" required="">
				<input type="text" Name="Author" placeholder="Author" required="">
				<input type="text" Name="Edition" placeholder="Edition" required="">
				<input type="text" Name="Availability_of_book" placeholder="Availability_of_book" required="">
				<input type="text" Name="Rate" placeholder="Rate" required="">
				<input type="text" Name="Publication Date" placeholder="Publication Date" required="">
				<input type="text" Name="Categories Number" placeholder="Categories Number" required="">

			
			<div class="send-button w3layouts agileits">
			
					<input type="submit" value="Register" style="color: #e1184a;">
				
			</div>

			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	</div>
</asp:Content>

