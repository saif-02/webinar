<!DOCTYPE HTML>
<html class="no-js" lang="de">

<head>
    <?php 		
		include("includes/mysqli_connect.php");
		include "includes/header.php";
		meta_tags();
	?>
    <title>Message to Customers:: Tejas Networks</title>
    <?php css_files();?>
</head>

<body>
    <!-- Start Navigation -->
	<?php navigation_bar($connect);
		$select_cor_history=mysqli_query($connect, "SELECT * FROM `corporate_social_responsibility` ORDER BY id DESC LIMIT 1");
while($row_cor_history=mysqli_fetch_array($select_cor_history)){
	$cor_metakeyword=$row_cor_history['meta_keyword'];
	$cor_metadescription=$row_cor_history['meta_description'];
	$cor_image=$row_cor_history['image'];
	$cor_description=$row_cor_history['description'];
	$cor_title=$row_cor_history['title'];
	$cor_id=$row_cor_history['id'];
}
		?>
    <!-- End Navigation -->
    <div class="clearfix"></div>

    <!-- Start Content -->
	<div class="container-fluid no-padding">
		<div class="corporate_header" style="background-image: url(images/message_to_customers.jpg) !important">
			<div class="container">
				<h1 style=" max-width: 422px;">Message to Customers</h1>
			</div>	
		</div>
	</div>
	<section class="fiber_to_home_content">
		<div class="container">
			<div class="row">
				
				<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
					<div class="techno_right lte_techno">
						<p>The last few weeks have brought in unprecedented challenges, jeopardizing the way we live and work.  With continued concerns associated with this pandemic, Tejas Networks team stands by you and we would like to assure you that we are well placed to play our role in enabling your business continuity. We assure you that we all share the primary priority of putting health and safety first, while also ensuring accelerated action to support our customers and partners in this time of need.</p>
						<p>We understand that telecom networks are becoming a critical utility in these challenging times. With a dramatic increase in remote collaboration and work-from-home, this is a critical time for your networks, as bandwidth demand surges and there is an increased need for 24x7 support to provide high quality and reliable network services. </p>
						<p>We have undertaken specific measures in this regard to ensure prompt customer service and technical support, urgent order fulfillment and delivery while assuring safety of our workforce.</p>

						<ol>
							<li>
								<p><b>Fulfillment and Delivery</b> – All our manufacturing facilities are based in India. With a robust business continuity plan, we will make our best efforts to fulfill critical orders for your spares as well as network expansion needs. If you can immediately let your account manager know about your requirements, we will do the best to fulfill them to the extent possible, given the constraints of being integrated in a global supply chain and logistics.</p>
							</li>
							<li>
								<p><b>Customer Service and Support</b> – With our geographically diverse customer support resources, our technical support team is well equipped to provide emergency support 24x7 virtually from anywhere in the world, pulling in the best available expertise across the globe. All our customer support engineers, including TAC are equipped with remote access capability and tools to support you from office as well as from their homes. In addition, for some of you, our Resident Engineers located at your premises/NOC will continue to be available to provide ‘over the shoulder support’.
</p>
							</li>
							<li>
								<p><b>Premium Support</b> – We are geared to provide mission critical services and support through the TAC-3 capability, a team with the highest level of technical capability in our Technical Assistance Center that work closely with our R&D team to fix issues. With differentiated SLA, this capability gives an edge in enabling smooth business execution in this crucial situation.

</p>
							</li>
							<li>
								<p><b>Sales Support</b> – Our Sales and Pre-Sales team is available to you on phone/email to address your requirements.</p>
							</li>
						</ol>
						<p>To know more about our remote support capabilities designed to help you to protect your network without requirement of personal contact or any other issues, please reach out to us at <a href="mailto:support@tejasnetworks.com" style="color: #23527c;">support@tejasnetworks.com</a> for 24x7 support on your network.</p>
						<p>Thank you for your continued support to Tejas Networks. We value your business and are committed to work relentlessly to protect your business in these challenging times.</p>
						<p>Yours Sincerely,</p>
						<p>Sanjay Nayak</p>
						<p>CEO & MD, Tejas Networks</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
 <?php 
    include "includes/footer.php";
	footer();
?>
<script>
$('.el').css({
    'height': $('.el').height()
});
</script>