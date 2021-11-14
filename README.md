# HealthYou
This is a Fitness Webpage customised to help our user, YiKiat Lim. Yi Kiat Lim had set a goal to lose 10 pounds in the upcoming 3 months, however, he finds difficulty tracking calories for meals and often gives in to temptation. Hence, this application aims to problem-solve Yi Kiat Lim lack of disciplinary issue through tracking calories for him and enable him to stay on track to his desired goal weight!

# How to set up your application based on the submitted file
Open http://localhost/phpmyadmin/index.php and create a database name call "newnew" then import the database.sql which can be found in wad-2-project/login folder. For mac users, change the password from "" to "root" in 2 of the ConnectionManager.php files where it is located in wad-2-project/login/model folder and wad-2-project/server/model folder.

<h1>How to run your application</h1>
<p>For windows users, the application can be used with the inbuilt Run app on your desktop. Key<br> 
<b>chrome.exe --user-data-dir="C://Chrome dev session" --disable-web-security </b> as the input in the inbuilt app </p>
<p>For mac users, <br>
<ol><li>Force quit Chrome by going to the mac menu and pressing “force quit” (or pressing command Q).</li>
<li>Then run this command to open Chrome with web security disabled </li>
<b>open -n -a /Applications/Google\ Chrome.app/Contents/MacOS/Google\ Chrome — args — user-data-dir=”/tmp/chrome_dev_test” — disable-web-security</b>
</ol><p>OR download google chrome extension "Allow CORS: Access-Control-Allow-Origin" </p></p>
Open <a href="http://localhost/wad-2-project/index.php">http://localhost/wad-2-project/index.php</a>.
This will redirect you to <a href="http://localhost/wad-2-project/login/loginpage.php">http://localhost/wad-2-project/login/loginpage.php</a>.
Use the following username and password to sign in: 
<br/>
<p>username: elvis<br>
password: 123456 </p>

<h1>Features</h1>
<li>In <a href="http://localhost/wad-2-project/foodCalorieTrackerPage.html">http://localhost/wad-2-project/foodCalorieTrackerPage.html</a>, users can track the calorie count of the food they eat or obtain the recipes and location of the food they wish to eat</li>
<li>In <a href="http://localhost/wad-2-project/Profile.html">http://localhost/wad-2-project/Profile.html</a>, users can upload what they eat and their calories intake will be recorded. Users will see analysis of their nutritional value using pie charts and graphs of their monthly nutritional value intake</li>
<li>In <a href="http://localhost/wad-2-project/anotherplace.html">http://localhost/wad-2-project/Profile.html</a>, users select the mode of their desired exercise and then one of the markers on the map. The calories burnt from this exercise will be recorded. </li>


