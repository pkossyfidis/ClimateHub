<nav id="mainNav" class=" my-nav navbar  navbar-expand-lg p-0 fixed-top ">
            <a href="../index.php" class="navbar-brand ml-3 mb-1">
                <img  class="logo" src="../logowhite.png" width="50px" height="50px">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks">
                <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navLinks">
                <ul class="navbar-nav">
                    <li class="nav-item pr-2">
                        <a href="../impacts/adminImpacts.php" class="nav-link">Impacts</a>
                    </li>
                    <li class="nav-item pr-2 dropdown">
					<a class="nav-link dropdown-toggle nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions
					</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			        	<a class="dropdown-item" href="../Organizations/adminOrganizations.php">Organizations</a>
			        	<div class="dropdown-divider"></div>
			        	<a class="dropdown-item" href="../IndividualActions/individualactionsAdmin.php">Individual Efforts</a>
					</div>
				</li>
                    <li class="nav-item pr-2">
                        <a href="../info/info_admin.php" class="nav-link">Info</a>
                    </li>
                </ul>
            </div>
            <!--PHP code!! If the user logs in then it should display a drop down -->
            <div class="collapse navbar-collapse justify-content-end" id="navLinks">
                <ul class="navbar-nav">
                    <li class="nav-item pr-2">
                        <a href="../admin/users.php" class="nav-link">Users</a>
                    </li>
                    <!--
                    <li class="nav-item pr-2 dropdown">
                        <a class="nav-link dropdown-toggle nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Username
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                    -->
                </ul>       
            </div>
        </nav>