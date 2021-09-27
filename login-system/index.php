<!DOCTYPE html>
<html>
<head>
	<title>LOGIN or REGISTER</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/paget.css" />
	
</head>
<body>
    <script src="../app.js"></script>
    <!-- Page transision -->
	<div class="loader-wrapper">
		<span class="loader"><span class="loader-inner"></span></span>
	</div>
    
    
     
     <form action="login.php" method="post">
         <br>
         <br>
				<svg id="logo" width="442" height="53" viewBox="0 0 442 53" fill="none" xmlns="http://www.w3.org/2000/svg">
					<mask id="path-1-outside-1" maskUnits="userSpaceOnUse" x="0.927979" y="0.815979" width="441" height="52" fill="black">
					<rect fill="white" x="0.927979" y="0.815979" width="441" height="52"/>
					<path d="M49.176 4.71198V49H43.352V15.976L28.632 49H24.536L9.75198 15.912V49H3.92798V4.71198H10.2L26.584 41.32L42.968 4.71198H49.176Z"/>
					<path d="M79.277 49.448C75.1383 49.448 71.3623 48.488 67.949 46.568C64.5356 44.6053 61.8263 41.896 59.821 38.44C57.8583 34.9413 56.877 31.016 56.877 26.664C56.877 22.312 57.8583 18.408 59.821 14.952C61.8263 11.4533 64.5356 8.74398 67.949 6.82398C71.3623 4.86131 75.1383 3.87998 79.277 3.87998C83.4583 3.87998 87.2556 4.86131 90.669 6.82398C94.0823 8.74398 96.7703 11.432 98.733 14.888C100.696 18.344 101.677 22.2693 101.677 26.664C101.677 31.0586 100.696 34.984 98.733 38.44C96.7703 41.896 94.0823 44.6053 90.669 46.568C87.2556 48.488 83.4583 49.448 79.277 49.448ZM79.277 44.392C82.3916 44.392 85.1863 43.6666 87.661 42.216C90.1783 40.7653 92.141 38.696 93.549 36.008C94.9996 33.32 95.725 30.2053 95.725 26.664C95.725 23.08 94.9996 19.9653 93.549 17.32C92.141 14.632 90.1996 12.5626 87.725 11.112C85.2503 9.66131 82.4343 8.93598 79.277 8.93598C76.1196 8.93598 73.3036 9.66131 70.829 11.112C68.3543 12.5626 66.3916 14.632 64.941 17.32C63.533 19.9653 62.829 23.08 62.829 26.664C62.829 30.2053 63.533 33.32 64.941 36.008C66.3916 38.696 68.3543 40.7653 70.829 42.216C73.3463 43.6666 76.1623 44.392 79.277 44.392Z"/>
					<path d="M131.701 26.024C133.323 26.28 134.795 26.9413 136.117 28.008C137.483 29.0746 138.549 30.3973 139.317 31.976C140.128 33.5546 140.533 35.24 140.533 37.032C140.533 39.2933 139.957 41.3413 138.805 43.176C137.653 44.968 135.968 46.3973 133.749 47.464C131.573 48.488 128.992 49 126.005 49H109.365V4.39198H125.365C128.395 4.39198 130.976 4.90398 133.109 5.92798C135.243 6.90931 136.843 8.25331 137.909 9.95998C138.976 11.6666 139.509 13.5866 139.509 15.72C139.509 18.3653 138.784 20.5626 137.333 22.312C135.925 24.0186 134.048 25.256 131.701 26.024ZM115.189 23.656H124.981C127.712 23.656 129.824 23.016 131.317 21.736C132.811 20.456 133.557 18.6853 133.557 16.424C133.557 14.1626 132.811 12.392 131.317 11.112C129.824 9.83198 127.669 9.19198 124.853 9.19198H115.189V23.656ZM125.493 44.2C128.395 44.2 130.656 43.5173 132.277 42.152C133.899 40.7866 134.709 38.888 134.709 36.456C134.709 33.9813 133.856 32.04 132.149 30.632C130.443 29.1813 128.16 28.456 125.301 28.456H115.189V44.2H125.493Z"/>
					<path d="M154.439 4.39198V49H148.615V4.39198H154.439Z"/>
					<path d="M191.821 4.39198V9.12798H179.661V49H173.837V9.12798H161.613V4.39198H191.821Z"/>
					<path d="M204.814 9.12798V24.04H221.07V28.84H204.814V44.2H222.99V49H198.99V4.32798H222.99V9.12798H204.814Z"/>
					<path d="M237.627 44.264H253.243V49H231.803V4.39198H237.627V44.264Z"/>
					<path d="M290.634 49.448C287.69 49.448 285.045 48.936 282.698 47.912C280.394 46.8453 278.581 45.3946 277.258 43.56C275.936 41.6826 275.253 39.528 275.21 37.096H281.418C281.632 39.1866 282.485 40.9573 283.978 42.408C285.514 43.816 287.733 44.52 290.634 44.52C293.408 44.52 295.584 43.8373 297.162 42.472C298.784 41.064 299.594 39.272 299.594 37.096C299.594 35.3893 299.125 34.0026 298.186 32.936C297.248 31.8693 296.074 31.0586 294.666 30.504C293.258 29.9493 291.36 29.352 288.97 28.712C286.026 27.944 283.658 27.176 281.866 26.408C280.117 25.64 278.602 24.4453 277.322 22.824C276.085 21.16 275.466 18.9413 275.466 16.168C275.466 13.736 276.085 11.5813 277.322 9.70398C278.56 7.82664 280.288 6.37598 282.506 5.35198C284.768 4.32798 287.349 3.81598 290.25 3.81598C294.432 3.81598 297.845 4.86131 300.49 6.95198C303.178 9.04265 304.693 11.816 305.034 15.272H298.634C298.421 13.5653 297.525 12.072 295.946 10.792C294.368 9.46931 292.277 8.80798 289.674 8.80798C287.242 8.80798 285.258 9.44798 283.722 10.728C282.186 11.9653 281.418 13.7146 281.418 15.976C281.418 17.5973 281.866 18.92 282.762 19.944C283.701 20.968 284.832 21.7573 286.154 22.312C287.52 22.824 289.418 23.4213 291.85 24.104C294.794 24.9146 297.162 25.7253 298.954 26.536C300.746 27.304 302.282 28.52 303.562 30.184C304.842 31.8053 305.482 34.024 305.482 36.84C305.482 39.016 304.906 41.064 303.754 42.984C302.602 44.904 300.896 46.4613 298.634 47.656C296.373 48.8506 293.706 49.448 290.634 49.448Z"/>
					<path d="M348.421 4.39198V49H342.597V28.776H319.877V49H314.053V4.39198H319.877V23.976H342.597V4.39198H348.421Z"/>
					<path d="M378.589 49.448C374.451 49.448 370.675 48.488 367.261 46.568C363.848 44.6053 361.139 41.896 359.133 38.44C357.171 34.9413 356.189 31.016 356.189 26.664C356.189 22.312 357.171 18.408 359.133 14.952C361.139 11.4533 363.848 8.74398 367.261 6.82398C370.675 4.86131 374.451 3.87998 378.589 3.87998C382.771 3.87998 386.568 4.86131 389.981 6.82398C393.395 8.74398 396.083 11.432 398.045 14.888C400.008 18.344 400.989 22.2693 400.989 26.664C400.989 31.0586 400.008 34.984 398.045 38.44C396.083 41.896 393.395 44.6053 389.981 46.568C386.568 48.488 382.771 49.448 378.589 49.448ZM378.589 44.392C381.704 44.392 384.499 43.6666 386.973 42.216C389.491 40.7653 391.453 38.696 392.861 36.008C394.312 33.32 395.037 30.2053 395.037 26.664C395.037 23.08 394.312 19.9653 392.861 17.32C391.453 14.632 389.512 12.5626 387.037 11.112C384.563 9.66131 381.747 8.93598 378.589 8.93598C375.432 8.93598 372.616 9.66131 370.141 11.112C367.667 12.5626 365.704 14.632 364.253 17.32C362.845 19.9653 362.141 23.08 362.141 26.664C362.141 30.2053 362.845 33.32 364.253 36.008C365.704 38.696 367.667 40.7653 370.141 42.216C372.659 43.6666 375.475 44.392 378.589 44.392Z"/>
					<path d="M438.502 17.448C438.502 21.16 437.222 24.2533 434.662 26.728C432.145 29.16 428.283 30.376 423.078 30.376H414.502V49H408.678V4.39198H423.078C428.113 4.39198 431.931 5.60798 434.534 8.03998C437.179 10.472 438.502 13.608 438.502 17.448ZM423.078 25.576C426.321 25.576 428.71 24.872 430.246 23.464C431.782 22.056 432.55 20.0506 432.55 17.448C432.55 11.944 429.393 9.19198 423.078 9.19198H414.502V25.576H423.078Z"/>
					</mask>
					<path d="M49.176 4.71198V49H43.352V15.976L28.632 49H24.536L9.75198 15.912V49H3.92798V4.71198H10.2L26.584 41.32L42.968 4.71198H49.176Z" stroke="white" stroke-width="6" mask="url(#path-1-outside-1)"/>
					<path d="M79.277 49.448C75.1383 49.448 71.3623 48.488 67.949 46.568C64.5356 44.6053 61.8263 41.896 59.821 38.44C57.8583 34.9413 56.877 31.016 56.877 26.664C56.877 22.312 57.8583 18.408 59.821 14.952C61.8263 11.4533 64.5356 8.74398 67.949 6.82398C71.3623 4.86131 75.1383 3.87998 79.277 3.87998C83.4583 3.87998 87.2556 4.86131 90.669 6.82398C94.0823 8.74398 96.7703 11.432 98.733 14.888C100.696 18.344 101.677 22.2693 101.677 26.664C101.677 31.0586 100.696 34.984 98.733 38.44C96.7703 41.896 94.0823 44.6053 90.669 46.568C87.2556 48.488 83.4583 49.448 79.277 49.448ZM79.277 44.392C82.3916 44.392 85.1863 43.6666 87.661 42.216C90.1783 40.7653 92.141 38.696 93.549 36.008C94.9996 33.32 95.725 30.2053 95.725 26.664C95.725 23.08 94.9996 19.9653 93.549 17.32C92.141 14.632 90.1996 12.5626 87.725 11.112C85.2503 9.66131 82.4343 8.93598 79.277 8.93598C76.1196 8.93598 73.3036 9.66131 70.829 11.112C68.3543 12.5626 66.3916 14.632 64.941 17.32C63.533 19.9653 62.829 23.08 62.829 26.664C62.829 30.2053 63.533 33.32 64.941 36.008C66.3916 38.696 68.3543 40.7653 70.829 42.216C73.3463 43.6666 76.1623 44.392 79.277 44.392Z" stroke="white" stroke-width="6" mask="url(#path-1-outside-1)"/>
					<path d="M131.701 26.024C133.323 26.28 134.795 26.9413 136.117 28.008C137.483 29.0746 138.549 30.3973 139.317 31.976C140.128 33.5546 140.533 35.24 140.533 37.032C140.533 39.2933 139.957 41.3413 138.805 43.176C137.653 44.968 135.968 46.3973 133.749 47.464C131.573 48.488 128.992 49 126.005 49H109.365V4.39198H125.365C128.395 4.39198 130.976 4.90398 133.109 5.92798C135.243 6.90931 136.843 8.25331 137.909 9.95998C138.976 11.6666 139.509 13.5866 139.509 15.72C139.509 18.3653 138.784 20.5626 137.333 22.312C135.925 24.0186 134.048 25.256 131.701 26.024ZM115.189 23.656H124.981C127.712 23.656 129.824 23.016 131.317 21.736C132.811 20.456 133.557 18.6853 133.557 16.424C133.557 14.1626 132.811 12.392 131.317 11.112C129.824 9.83198 127.669 9.19198 124.853 9.19198H115.189V23.656ZM125.493 44.2C128.395 44.2 130.656 43.5173 132.277 42.152C133.899 40.7866 134.709 38.888 134.709 36.456C134.709 33.9813 133.856 32.04 132.149 30.632C130.443 29.1813 128.16 28.456 125.301 28.456H115.189V44.2H125.493Z" stroke="white" stroke-width="6" mask="url(#path-1-outside-1)"/>
					<path d="M154.439 4.39198V49H148.615V4.39198H154.439Z" stroke="white" stroke-width="6" mask="url(#path-1-outside-1)"/>
					<path d="M191.821 4.39198V9.12798H179.661V49H173.837V9.12798H161.613V4.39198H191.821Z" stroke="white" stroke-width="6" mask="url(#path-1-outside-1)"/>
					<path d="M204.814 9.12798V24.04H221.07V28.84H204.814V44.2H222.99V49H198.99V4.32798H222.99V9.12798H204.814Z" stroke="white" stroke-width="6" mask="url(#path-1-outside-1)"/>
					<path d="M237.627 44.264H253.243V49H231.803V4.39198H237.627V44.264Z" stroke="white" stroke-width="6" mask="url(#path-1-outside-1)"/>
					<path d="M290.634 49.448C287.69 49.448 285.045 48.936 282.698 47.912C280.394 46.8453 278.581 45.3946 277.258 43.56C275.936 41.6826 275.253 39.528 275.21 37.096H281.418C281.632 39.1866 282.485 40.9573 283.978 42.408C285.514 43.816 287.733 44.52 290.634 44.52C293.408 44.52 295.584 43.8373 297.162 42.472C298.784 41.064 299.594 39.272 299.594 37.096C299.594 35.3893 299.125 34.0026 298.186 32.936C297.248 31.8693 296.074 31.0586 294.666 30.504C293.258 29.9493 291.36 29.352 288.97 28.712C286.026 27.944 283.658 27.176 281.866 26.408C280.117 25.64 278.602 24.4453 277.322 22.824C276.085 21.16 275.466 18.9413 275.466 16.168C275.466 13.736 276.085 11.5813 277.322 9.70398C278.56 7.82664 280.288 6.37598 282.506 5.35198C284.768 4.32798 287.349 3.81598 290.25 3.81598C294.432 3.81598 297.845 4.86131 300.49 6.95198C303.178 9.04265 304.693 11.816 305.034 15.272H298.634C298.421 13.5653 297.525 12.072 295.946 10.792C294.368 9.46931 292.277 8.80798 289.674 8.80798C287.242 8.80798 285.258 9.44798 283.722 10.728C282.186 11.9653 281.418 13.7146 281.418 15.976C281.418 17.5973 281.866 18.92 282.762 19.944C283.701 20.968 284.832 21.7573 286.154 22.312C287.52 22.824 289.418 23.4213 291.85 24.104C294.794 24.9146 297.162 25.7253 298.954 26.536C300.746 27.304 302.282 28.52 303.562 30.184C304.842 31.8053 305.482 34.024 305.482 36.84C305.482 39.016 304.906 41.064 303.754 42.984C302.602 44.904 300.896 46.4613 298.634 47.656C296.373 48.8506 293.706 49.448 290.634 49.448Z" stroke="white" stroke-width="6" mask="url(#path-1-outside-1)"/>
					<path d="M348.421 4.39198V49H342.597V28.776H319.877V49H314.053V4.39198H319.877V23.976H342.597V4.39198H348.421Z" stroke="white" stroke-width="6" mask="url(#path-1-outside-1)"/>
					<path d="M378.589 49.448C374.451 49.448 370.675 48.488 367.261 46.568C363.848 44.6053 361.139 41.896 359.133 38.44C357.171 34.9413 356.189 31.016 356.189 26.664C356.189 22.312 357.171 18.408 359.133 14.952C361.139 11.4533 363.848 8.74398 367.261 6.82398C370.675 4.86131 374.451 3.87998 378.589 3.87998C382.771 3.87998 386.568 4.86131 389.981 6.82398C393.395 8.74398 396.083 11.432 398.045 14.888C400.008 18.344 400.989 22.2693 400.989 26.664C400.989 31.0586 400.008 34.984 398.045 38.44C396.083 41.896 393.395 44.6053 389.981 46.568C386.568 48.488 382.771 49.448 378.589 49.448ZM378.589 44.392C381.704 44.392 384.499 43.6666 386.973 42.216C389.491 40.7653 391.453 38.696 392.861 36.008C394.312 33.32 395.037 30.2053 395.037 26.664C395.037 23.08 394.312 19.9653 392.861 17.32C391.453 14.632 389.512 12.5626 387.037 11.112C384.563 9.66131 381.747 8.93598 378.589 8.93598C375.432 8.93598 372.616 9.66131 370.141 11.112C367.667 12.5626 365.704 14.632 364.253 17.32C362.845 19.9653 362.141 23.08 362.141 26.664C362.141 30.2053 362.845 33.32 364.253 36.008C365.704 38.696 367.667 40.7653 370.141 42.216C372.659 43.6666 375.475 44.392 378.589 44.392Z" stroke="white" stroke-width="6" mask="url(#path-1-outside-1)"/>
					<path d="M438.502 17.448C438.502 21.16 437.222 24.2533 434.662 26.728C432.145 29.16 428.283 30.376 423.078 30.376H414.502V49H408.678V4.39198H423.078C428.113 4.39198 431.931 5.60798 434.534 8.03998C437.179 10.472 438.502 13.608 438.502 17.448ZM423.078 25.576C426.321 25.576 428.71 24.872 430.246 23.464C431.782 22.056 432.55 20.0506 432.55 17.448C432.55 11.944 429.393 9.19198 423.078 9.19198H414.502V25.576H423.078Z" stroke="white" stroke-width="6" mask="url(#path-1-outside-1)"/>
					</svg>
		    
     	<h1>LOGIN or REGISTER</h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username:</label>
     	<input type="text" name="Ime_prezime" placeholder="Username"><br>

     	<label>Password:</label>
     	<input type="password" name="Lozinka" placeholder="Password"><br>
        <br>
     	<button type="submit">Login</button>
     	<br>
     	<a class="button" href="register.php">Register</a>
     </form>
    
    
</body>
</html>