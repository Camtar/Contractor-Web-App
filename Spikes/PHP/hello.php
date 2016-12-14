<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	
	<style>
		@import url(//fonts.googleapis.com/css?family=Lobster);
                @import url(//fonts.googleapis.com/css?family=Josefin+Sans);

		body {
			margin:0;
			font-family:'Josefin+Sans', sans-serif;
                        font-size: 15px;
			text-align:left;
			color: grey;
		}
                
                #page{ margin: 20px; }
                
                #logo{             
                    margin-top: 5px;
                    width: 35%;
                    display: inline-block;
                    color: navy;
                }
                
                h1 {
                        font-family: 'Lobster', sans-serif;
			font-size: 32px;
			margin: 16px 0 0 0;
                        text-align: center;
                        color: navy;
		}
                
                 h2, h3, h4 {
                        font-family: 'Josefin+Sans', sans-serif;
                        font-weight: normal;
                        line-height: 1.1em;
                        text-align: left;
                        margin: 0 0 .5em 0;
                        color: black;
		}
                
                #content{
                    margin: 30px 0;
                    background: white;
                    padding: 20px;
                    clear: both;
                }

                #footer{
                    border-bottom: 1px #ccc solid;
                    margin-bottom: 10px;
                }
                    #footer p{
                            text-align: right;
                            text-transform: uppercase;
                            font-size: 80%;
                            color: grey;
                    }
                #nav{
                    width: 60%;
                    display: inline-block;
                    text-align: right;
                    float: right;
                }
                #nav ul{}
                        #nav ul li{
                                display: inline-block;
                                height: 62px;
                        }
                                #nav ul li a{
                                        padding: 20px;
                                        background: #CD3F3F;
                                        color: white;
                                }
                                #nav ul li a:hover{
                                        background-color: navy;
                                        box-shadow: 0px 1px 1px #666;
                                }
                                #nav ul li a:active{ background-color: #ff8f00; }
                #content,
                    ul li a{ box-shadow: 0px 1px 1px #999; }
	</style>
	
</head>
<body>

	<div id="page">
		<div id="logo">
                    <a title="Welcome"><img src="http://www.csmgroup.com/media/CSM-Group-Logo_No-Tagline.png" height="100" width="450"></a>
		</div>
		<div id="nav">
			<ul>
				<li><a href="#/home.html">Home</a></li>
				<li><a href="#/signin.html">Sign In</a></li>
				<li><a href="#/help.html">Help</a></li>
			</ul>	
		</div>
		<div id="content">
                        <h1>Intelligence Time Clock</h1>
                        <br>
                        
                        <h2>About</h2>
			<p>
                           Intelligence Time Clock is a web application to keep 
                           track of the sign in and sign out timings for contractors
                           when they arrive and leave the site. 
			</p>
                        <br>
                        
                        <h3>Procedure</h3>
			<p> 
                            If a new contractor comes in, there will be a 
                            security procedure to identify the contractor to the site.<br> 
                            <li>While signing in, contractors will be asked to 
                            enter their name, company, time in, and time out.</li><br>
                            <li>Contractor should go through training their first day
                            on site. Once completed, a contactor will get a sticker 
                            which is valid for one year only.</li><br>
                            <li>Contractors also have to read the Kellog Contractor
                            Work Rules and sign it with their pin number noted at
                            the top.</li><br>
			</p>
                        
                    <h4>Please visit sign in page to get started.</h4>
		</div>
		<div id="footer">
                    <p>All rights reserved</p>
		</div>
	</div>
</body>
</html>