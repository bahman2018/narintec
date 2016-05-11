
<!-- =========================================================================================== -->
<!-- =========================== Main Navigation Bar =========================================== -->
<!-- =========================================================================================== -->

<nav class="navbar navbar-default main-navigation qt-box-shadow">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="mobile-menu-text">MENU</span>
        <span class="mobile-menu-bars">
          <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        </span>
      </button>
    </div>

    <div class="collapse navbar-collapse">

      <ul class="nav navbar-nav">
         <li class="<?php qt_active_if( 'index.php' ); ?>"><a href="index.php"> <i class="fa fa-home"></i> Home</a></li>

		 
        <li class="dropdown <?php

          qt_active_if(
            'Consulting.php',
            'Engineering.php',
            'Control_System_Design.php',
            'Programing_PLC_SCADA_HM.php',
			'FAT_and_SAT.php'
          );

        ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-gear"></i> Services <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="<?php qt_active_if( 'Consulting.php' ); ?>"><a href="Consulting.php">Consulting</a></li>
            <li class="<?php qt_active_if( 'Engineering.php' ); ?>"><a href="Engineering.php">Engineering</a></li>
            <li class="<?php qt_active_if( 'Control_System_Design.php' ); ?>"><a href="Control_System_Design.php">Control System Design</a></li>
            <li class="<?php qt_active_if( 'Programing_PLC_SCADA_HM.php' ); ?>"><a href="Programing_PLC_SCADA_HM.php">Programing PLC/SCADA/HMI</a></li>
            <li class="<?php qt_active_if( 'FAT_and_SAT.php' ); ?>"><a href="FAT_and_SAT.php">FAT and SAT</a></li>
		  </ul>
        </li>

		<li class="dropdown <?php

          qt_active_if(
            'DCS_PLC_PANEL.php',
            'MCC_PANEL.php',
            'Siemens_Products.php'
          );

        ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-pencil"></i> Products <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="<?php qt_active_if( 'DCS_PLC_PANEL.php' ); ?>"><a href="DCS_PLC_PANEL.php">DCS/PLC PANEL</a></li>
            <li class="<?php qt_active_if( 'MCC_PANEL.php' ); ?>"><a href="MCC_PANEL.php">MCC PANEL</a></li>
            <li class="<?php qt_active_if( 'Siemens_Products.php' ); ?>"><a href="Siemens_Products.php">Siemens Products</a></li>
		  </ul>
        </li>

        <li class="dropdown <?php

          qt_active_if(
            'Refinery_Oil_Gas.php',
            'Energy.php',
			'Feed_and_Flour.php',
            'Cement_Minig.php',
            'Tunnel.php',
			'Metal',
			'Food'
          );

        ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-industry"></i> Industries <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="<?php qt_active_if( 'Refinery_Oil_Gas.php' ); ?>"><a href="Refinery_Oil_Gas.php">Refnery, Oil and Gas</a></li>
            <li class="<?php qt_active_if( 'Energy.php' ); ?>"><a href="Energy.php">Energy</a></li>
            <li class="<?php qt_active_if( 'Feed_and_Flour.php' ); ?>"><a href="Feed_and_Flour.php">Feed AND Flour</a></li>
            <li class="<?php qt_active_if( 'Cement_Minig.php' ); ?>"><a href="Cement_Minig.php">Cement/Minig</a></li>
            <li class="<?php qt_active_if( 'Tunnel.php' ); ?>"><a href="Tunnel.php">Tunnel</a></li>
			<li class="<?php qt_active_if( 'Metal.php' ); ?>"><a href="Metal.php">Metal</a></li>
			<li class="<?php qt_active_if( 'Food.php' ); ?>"><a href="Food.php">Food</a></li>

          </ul>
        </li>

        <li class="dropdown <?php

          qt_active_if(
            'TIA_Portal.php',
            'Simotion_Scout.php',
            'PCS7.php',
            'Ceat.php',
            'Simatic_manager.php',
            'WINCC_SCADA.php',
            'WINCC_Flexible.php'
          );

        ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-cogs"></i> Solutions <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="<?php qt_active_if( 'TIA_Portal.php' ); ?>"><a href="TIA_Portal.php">TIA Portal</a></li>
            <li class="<?php qt_active_if( 'Simotion_Scout.php' ); ?>"><a href="Simotion_Scout.php"> Simotion Scout</a></li>
            <li class="<?php qt_active_if( 'PCS7.php' ); ?>"><a href="PCS7.php">PCS7</a></li>
            <li class="<?php qt_active_if( 'Ceat.php' ); ?>"><a href="Ceat.php">Cemat</a></li>
		    <li class="<?php qt_active_if( 'Simatic_manager.php' ); ?>"><a href="Simatic_manager.php">Simatic Manager</a></li>
            <li class="<?php qt_active_if( 'WINCC_SCADA.php' ); ?>"><a href="WINCC_SCADA.php">WINCC SCADA</a></li>
	        <li class="<?php qt_active_if( 'WINCC_Flexible.php' ); ?>"><a href="WINCC_Flexible.php">WINCC Flexible</a></li>
          </ul>
        </li>

        <li class="dropdown <?php

          qt_active_if(
            'page-who-we-are.php',
            'References.php',
            'Careers.php',
			'contact-us.php'
          );

        ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-group"></i> About Us <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="<?php qt_active_if( 'page-who-we-are.php' ); ?>"><a href="page-who-we-are.php">Who We Are</a></li>
            <li class="<?php qt_active_if( 'References.php' ); ?>"><a href="References.php">References</a></li>
            <li class="<?php qt_active_if( 'Careers.php' ); ?>"><a href="Careers.php">Careers</a></li>
			<li class="<?php qt_active_if( 'contact-us.php' ); ?>"><a href="contact-us.php">Contact us</a></li>

          </ul>
        </li>

       



      </ul>

    </div><!--/.nav-collapse -->

  </div>
</nav>