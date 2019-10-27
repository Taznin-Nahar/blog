<?php $__env->startSection('main_content'); ?>

<style>
header{
	margin: 0;
	padding: 80px;
	/*font-size: : 40px;*/
	background-color: black;
	color: white;
}
/*/**/

	
		


		

		
		
		.responsive {
			padding: 0 6px;
			float: left;
			width: 24.99999%;
		}

		
		

		h2{
			text-align: center;
			padding: 20px;
		}

		
		*{
			margin: 0;
			padding: 0;
		}
		
		.register{
			background: cadetblue;
			/*margin: 0px 0px 0px 450 px;*/
			/*margin: 0px 0px 0px 300px;*/
			/*width: 500px;*/
			color: white;
			font-size: 18px;
			padding-right: 100px;
			border-radius: 20px;
		}
		/*div #register{
			margin-left: 50px;
		}*/
		div.label{
			color: white;
			font-family: sans-serif;
			font-style: italic;
			font-size: 18px;


		}
		div #name{
			width: 300px;
			height: 20px;
			padding: 5px;
			border: none;
			outline: 0;
			border-radius: 3px;
			/*text-align: left;*/
		}
		div #ph{
			width: 55px;
			height: 27px;
			padding: 1px;
			border: none;
			border-radius: 3px;
			outline: 0;
		}
		div #num{
			width: 246px;
			height: 20px;
			padding: 5px;
			border: none;
			border-radius: 3px;
			outline: 0;
		}
		div #sub{
			width: 100px;
			height: 33px;
			padding: 5px;
			border: none;
			border-radius: 3px;
			outline: 0;
			color: black;
			font-size: 16px;
			font-style: italic;
			font-family: sans-serif;
			font-weight: 700;
		}
	/*aside{
		float: right;
		padding: 0;
		}*/
	</style>		




	
		<div class="register">
			<h2>Register Here!</h2>
			<div>
				<form method="post" id="register" style="text-align: left; padding-left: 90px;">
					<?php echo csrf_field(); ?>

					<label>First Name:</label><br>
					<input type="text" name="fname" id="name" placeholder="Enter your first name"><br><br>
					<label>Last Name:</label><br>
					<input type="text" name="lname" id="name" placeholder="Enter your last name"><br><br>
					<label>Mobile Number:</label><br>
					<select id="ph">
						<option>+088</option>
						<option>+089</option>
						<option>+091</option>
						<option>+092</option>
					</select>
					<input type="number" name="Mnumber" id="num" placeholder="Enter your Mobile Number"><br><br>
					<label>Email:</label><br>
					<input type="email" name="email" id="name" placeholder="Enter your email"><br><br>
					<label>Password:</label><br>
					<input type="password" name="pass" id="name" placeholder="Enter your password"><br><br>
					<label>Re enter password:</label><br>
					<input type="password" name="pass" id="name" placeholder="Re enter your password"><br><br>
					<input type="radio" name="male" id="male"><span id="male">&nbsp; Male</span>&nbsp; &nbsp;
					<input type="radio" name="female" id="female"><span id="female">&nbsp; Female</span>&nbsp; &nbsp;<br><br>
					<input type="submit" value="Submit" id="sub">
				</form>
			</div>

			</div>
	</section>


<?php $__env->stopSection(); ?>	


<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* G:\xampp\htdocs\taznin_blog\taznin_blog\resources\views/auth/registration.blade.php */ ?>