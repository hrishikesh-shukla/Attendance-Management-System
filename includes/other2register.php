
		<!-- <div class="nav">
			<button class="tablink" onclick="openPage('register',this, 'black')" id="defaultOpen">Register</button>
			<button class="tablink" onclick="openPage('remove',this, 'black')">Remove</button>
			<button class="tablink" onclick="openPage('edit',this, 'black')">Update</button>
			<button class="tablink" onclick="openPage('Database',this, 'black')">Database</button>
			<a class="tablink" href="includes/logout.inc.php">Log Out</a>
		</div> -->



		<div class="form">
			<ul class="tab-group">
				<li class="tab active"><a href="#teacher">Teacher</a></li>
				<li class="tab"><a href="#student">Student</a></li>
			</ul>
			<div class="tab-content">
				<div id="teacher">
					<h1>Register A Teacher</h1>
					<form action="admin-panel.php" method="post">
						<div class="top-row">
							<div class="field-wrap">
								<label>
									First Name<span class="req">*</span>
								</label>
								<input type="text" name="fname" required autocomplete="off" />
							</div>
							<div class="field-wrap">
								<label>
									Last Name<span class="req">*</span>
								</label>
								<input type="text" name="lname" required autocomplete="off"/>
							</div>
						</div>
						<div class="top-row">
							<div class="field-wrap">
								<label>
									<!-- Course:<span class="req">*</span> -->
								</label>
								<select name="course">
									<option>---Select Course---</option>
									<option value="BCA">BCA</option>
									<option value="BVOC">BVOC</option>
								</select>
								<!-- <input type="text" name="username" required autocomplete="off"/> -->
							</div>
							<div class="field-wrap">
								<label>
									<!-- Course:<span class="req">*</span> -->
								</label>
								<select name="semester">
									<option>---Select Semester---</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
								<!-- <input type="text" name="username" required autocomplete="off"/> -->
							</div>
							<div class="field-wrap">
								<label>
									Email Address<span class="req">*</span>
								</label>
								<input type="email" name="email" required autocomplete="off"/>
							</div>
						</div>
						<div class="top-row">
							<div class="field-wrap">
								<label>
									Username<span class="req">*</span>
								</label>
								<input type="text" name="username" required autocomplete="off"/>
							</div>
							<div class="field-wrap">
								<label>
									Password<span class="req">*</span>
								</label>
								<input type="password" name="password_1" required autocomplete="off"/>
							</div>
						</div>
						<button type="submit" name="teacher-register" class="button button-block"/>REGISTER</button>
						<!-- <button type="submit" class="button button-block"/>Register an Admin</button> -->
						<!-- <a style="color: white; text-align: center;" href="#" class="button button-block" onclick="MyWindow=window.open('addadmin.php','MyWindow',width='600',height='300'); return false;">Register an Admin</a> -->
					</form>
				</div>
				<div id="student">
					<h1>Register A Student</h1>
					<form action="admin-panel.php" method="post">
						<div class="top-row">
							<div class="field-wrap">
								<label>
									First Name<span class="req">*</span>
								</label>
								<input type="text" name="fname" required autocomplete="off" />
							</div>
							<div class="field-wrap">
								<label>
									Last Name<span class="req">*</span>
								</label>
								<input type="text" name="lname" required autocomplete="off"/>
							</div>
						</div>
						<div class="top-row">
							<div class="field-wrap">
								<label>
									<!-- Course:<span class="req">*</span> -->
								</label>
								<select name="course">
									<option>---Select Course---</option>
									<option value="BCA">BCA</option>
									<option value="BVOC">BVOC</option>
								</select>
								<!-- <input type="text" name="enrollment" required autocomplete="off"/> -->
							</div>
							<div class="field-wrap">
								<label>
									<!-- Course:<span class="req">*</span> -->
								</label>
								<select name="semester">
									<option>---Select Semester---</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
								<!-- <input type="text" name="username" required autocomplete="off"/> -->
							</div>
							<div class="field-wrap">
								<label>
									Email Address<span class="req">*</span>
								</label>
								<input type="email" name="email" required autocomplete="off"/>
							</div>
						</div>
						<div class="top-row">
							<div class="field-wrap">
								<label>
									Enrollment  No.<span class="req">*</span>
								</label>
								<input type="text" name="enrollment" required autocomplete="off"/>
							</div>
							<div class="field-wrap">
								<label>
									Create a Password<span class="req">*</span>
								</label>
								<input type="password" name="password_1" required autocomplete="off"/>
							</div>
						</div>
						<button type="submit" name="student-register" class="button button-block"/>REGISTER</button>
						<!-- <button type="submit" class="button button-block"/>Register an Admin</button> -->
						<!-- <a style="color: white; text-align: center;" href="#" class="button button-block" onclick="MyWindow=window.open('addadmin.php','MyWindow',width='600',height='300'); return false;">Register an Admin</a> -->
					</form>
				</div>
			</div><!-- tab-content -->
		</div> <!-- /form -->
	</div>