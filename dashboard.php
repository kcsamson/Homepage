<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Inventory Management System</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
    <div id="dashboardMainContainer">
        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">CPIS</h3>
            <div class="dashboard_sidebar_user">
                <img src="images/user/360_F_587766653_PkBNyGx7mQh9l1XXPtCAq1lBgOsLl6xH.jpg" alt="User Image." id"userImage" />
                <span>BSCPE</span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
					<li class="menuActive">
                        <a href=""><i class="fa fa-dashboard"></i><span class="menuText">Dashboard</span></a>
					</li>
					<li>
                        <a href=""><i class="fa fa-dashboard"></i><span class="menuText">Dashboard</span></a>
					</li>
                </ul>
            </div>
        </div>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href="" id=toggleBtn><i class="fa fa-navicon"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-power-off"></i>Log-out</a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
				</div>
            </div>
        </div>
    </div>
	
<script>
	var sideBarIsOpen = true;
	
	toggleBtn.addEvenListener( 'click', (event) => {
		event.preventDefault();
		
		if(sideBarIsOpen){
			dashboard_sidebar.style.width = '10%';
			dashboard_sidebar.style.transition - '0.7s all'
			dashboardMainContainer.style.width = '90%';
			dashboard_logo.style.fontSize = '60px';
			userImage.style.width = '60px';
			
			menuIcons = document.getElementsByClassName('menuText');
			for(var i=0; i < menuIcons.length;i++){
				menuIcons[i].style.display = 'none';
			}
			
			document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
			SideBarIsOpen = false;
		} else {
			dashboard_sidebar.style.width = '10%';
			dashboardMainContainer.style.width = '80%';
			dashboard_logo.style.fontSize = '80px';
			userImage.style.width = '80px';
			
			menuIcons = document.getElementsByClassName('menuText');
			for(var i=0; i <menuIcons.length;i++){
				menuIcons[i].style.display = 'inline-block';
			}
			
			document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'normal';
			SideBarIsOpen = true;
		}
	})
</script>
</body>
</html>