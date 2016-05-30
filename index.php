<?php 
    session_start()
?>
<!doctype html>
<html lang="de" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>EM Tippspiel</title>
</head>
<body>
    <?php include "includes.php"; include "generateMatches.php"; ?>
    
<header>
	<h1>Europameisterschaft Tippspiel 2016</h1>
</header>
<div class="cd-tabs">
	<nav>
		<ul class="cd-tabs-navigation">
			<li><a data-content="settings" class="selected" href="#0">LogIn</a></li>
			<li><a data-content="new" href="#0">Offene Tipps</a></li>
			<li><a data-content="gallery" href="#0">Tabelle</a></li>
			<li><a data-content="store" href="#0">Benutzer</a></li>
			<li><a data-content="trash" href="#0">Ich</a></li>
            <li><a data-content="inbox" href="#0">Alle Tipps</a></li>
		</ul> <!-- cd-tabs-navigation -->
	</nav>

	<ul class="cd-tabs-content">
        <li data-content="settings" class="selected">
            <?php
            if(!isset($_SESSION['loggedIn']))
            {
                echo "<form action='index.php' method='post'>
                        <pre><p>Benutzername:    <input id='usernameBox' type='text' name='userID'><br>Passwort:            <input type='password' name='password'><input type='submit' value='Anmelden'></p></pre>
                        </form>";
                $_SESSION['loggedIn'] = false;
            }
            elseif($_SESSION['loggedIn'] == false AND !isset($_SESSION['userID']))
            {
                if(count($_POST) > 1)
                {
                    $userID = $_POST['userID'];
                    $password = $_POST['password'];
                
                    $query = "SELECT spielerID, name, password FROM spieler";
                    $dbConnection = connectDatabase("localhost", "em-tippspiel", "tippspiel123", "tippspiel");
                    
                    $result = mysqli_query($dbConnection, $query);
                    
                    $array = array();
                    $i = 0;
                    
                    while($item = mysqli_fetch_assoc($result))
                    {
                        $array[$i][1] = $item['spielerID'];
                        $array[$i][2] = $item['name'];
                        $array[$i][3] = $item['password'];
                        
                        if($array[$i][2] == $userID && $array[$i][3] == $password)
                        {
                            $_SESSION['spielerID'] = $array[$i][1];
                            $_SESSION['userID'] = $array[$i][2];
                            $_SESSION['password'] = $array[$i][3];
                            $_SESSION['loggedIn'] = true;
                            
                            echo "<p>Angemeldet als: " . $_SESSION['userID'] . "</p>";
                            mysqli_close($db_link);
                            break;
                        }
                    }
                    mysqli_close($db_link);
                    unset($_SESSION['loggedIn']);
                    header("Refresh:0");
                }                
            }
            else
            {
                echo "<p>Angemeldet als: " . $_SESSION['userID'] . "</p>";
            }
            ?>

		</li>
        
        <li data-content="new">
			groupMatches("Gruppe A");
		</li>

		<li data-content="gallery">
			<p>Gallery Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque tenetur aut, cupiditate, libero eius rerum incidunt dolorem quo in officia.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ipsa vero, culpa doloremque voluptatum consectetur mollitia, atque expedita unde excepturi id, molestias maiores delectus quos molestiae. Ab iure provident adipisci eveniet quisquam ratione libero nam inventore error pariatur optio facilis assumenda sint atque cumque, omnis perspiciatis. Maxime minus quam voluptatum provident aliquam voluptatibus vel rerum. Soluta nulla tempora aspernatur maiores! Animi accusamus officiis neque exercitationem dolore ipsum maiores delectus asperiores reprehenderit pariatur placeat, quaerat sed illum optio qui enim odio temporibus, nulla nihil nemo quod dicta consectetur obcaecati vel. Perspiciatis animi corrupti quidem fugit deleniti, atque mollitia labore excepturi ut.</p>
		</li>

		<li data-content="store">
			<p>Store Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, enim, pariatur. Ab assumenda, accusantium! Consequatur magni placeat quae eos dicta, cum expedita sunt facilis est impedit possimus dolorum sequi nostrum nobis sit praesentium molestias nulla laudantium fugit corporis nam ut saepe harum ipsam? Debitis accusantium, omnis repudiandae modi, distinctio illo voluptatibus aperiam odio veritatis, quam perferendis eaque ullam. Temporibus tempore ad voluptates explicabo ea sit deleniti ipsum quos dolores tempora odio, ab corporis molestiae, eaque optio, perferendis! Cumque libero quia modi! Totam magni rerum id iusto explicabo distinctio, magnam, labore sed nemo expedita velit quam, perspiciatis non temporibus sit minus voluptatum. Iste, cumque sunt suscipit facere iusto asperiores, ullam dolorum excepturi quidem ea quibusdam deserunt illo. Nesciunt voluptates repellat ipsam.</p>
		</li>

		<li data-content="trash">
			<p>Trash Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque a iure nostrum animi praesentium, numquam quidem, nemo, voluptatem, aspernatur incidunt. Fugiat aspernatur excepturi fugit aut, dicta reprehenderit temporibus, nobis harum consequuntur quo sed, illum.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima doloremque optio tenetur, natus voluptatum error vel dolorem atque perspiciatis aliquam nemo id libero dicta est saepe laudantium provident tempore ipsa, accusamus similique laborum, consequatur quia, aut non maiores. Consectetur minus ipsum aliquam pariatur dolorem rerum laudantium minima perferendis in vero voluptatem suscipit cum labore nemo explicabo, itaque nobis debitis molestias officiis? Impedit corporis voluptates reiciendis deleniti, magnam, fuga eveniet! Velit ipsa quo labore molestias mollitia, quidem, alias nisi architecto dolor aliquid qui commodi tempore deleniti animi repellat delectus hic. Alias obcaecati fuga assumenda nihil aliquid sed vero, modi, voluptatem? Vitae voluptas aperiam nostrum quo harum numquam earum facilis sequi. Labore maxime laboriosam omnis delectus odit harum recusandae sint incidunt, totam iure commodi ducimus similique doloremque! Odio quaerat dolorum, alias nihil quam iure delectus repellendus modi cupiditate dolore atque quasi obcaecati quis magni excepturi vel, non nemo consequatur, mollitia rerum amet in. Nesciunt placeat magni, provident tempora possimus ut doloribus ullam!</p>
		</li>
        
        <li data-content="inbox">
			<p>Inbox Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>

			<p>Inbox Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>
		</li>

	</ul> <!-- cd-tabs-content -->
</div> <!-- cd-tabs -->

<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>